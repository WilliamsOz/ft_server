FROM debian:buster

RUN apt-get -y update \
    && apt-get install -y openssl \
    && apt-get install -y vim \
    && apt-get install -y nginx \
    && apt-get install -y openssl \ 
    && apt-get install -y mariadb-server mariadb-client \
    && apt-get install -y php-fpm php-gd php-curl php-intl php-xmlrpc php-mbstring php-mysql php-xml php-zip

COPY srcs/* ./

RUN tar -xf phpMyAdmin-5.1.0-all-languages.tar.gz && rm phpMyAdmin-5.1.0-all-languages.tar.gz \
    && mv phpMyAdmin-5.1.0-all-languages phpmyadmin \
    && rm ./phpmyadmin/config.sample.inc.php && mv config.inc.php ./phpmyadmin/ \
    && mv phpmyadmin /var/www/html/ \
    && tar -xf wordpress.tar.gz && rm wordpress.tar.gz \
    && rm ./wordpress/wp-config-sample.php && mv wp-config.php ./wordpress/ \
    && mv wordpress /var/www/html/ \
    && chown -R www-data:www-data /var/www/html/ \
    && chmod 755 -R /var/www/* \
    && mv default /etc/nginx/sites-available \
    && mv info.php /var/www/html/ \
    && rm /etc/nginx/sites-enabled/default \
    && ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/ \
    && mv disable_autoindex.sh /etc/nginx/ && mv enable_autoindex.sh /etc/nginx/\
    && mkdir /etc/nginx/ssl \
    && chmod 700 /etc/nginx/ssl \
    && openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=williams/CN=localhost" \
    && chmod 700 /etc/nginx/ssl/localhost.key \
    && chmod 700 /etc/nginx/ssl/localhost.pem 

CMD service php7.3-fpm start \
    && service mysql start \
    && echo "CREATE DATABASE wordpress;" | mysql -u root \
    && echo "CREATE USER 'user'@'localhost' IDENTIFIED BY '1234';" | mysql -u root \
    && echo "GRANT ALL PRIVILEGES ON *.* TO 'user'@'localhost';" | mysql -u root \
    && echo "FLUSH PRIVILEGES;" | mysql -u root \
    && service nginx start \
    && bash

EXPOSE 80
EXPOSE 443