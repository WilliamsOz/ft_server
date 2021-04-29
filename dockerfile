FROM debian:buster

RUN apt-get -y update \
    && apt-get install -y openssl \
    && apt-get install -y vim \
    && apt-get install -y nginx \
    && apt-get install -y openssl \ 
    && apt-get install -y mariadb-server mariadb-client \
    && apt-get install -y php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline

COPY srcs/default ./

RUN mv default /etc/nginx/sites-available \
    && rm /etc/nginx/sites-enabled/default \
    && ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/ \
    && mkdir /etc/nginx/ssl \
    && chmod 700 /etc/nginx/ssl \
    && openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=williams/CN=localhost" \
    && chmod 700 /etc/nginx/ssl/localhost.key \
    && chmod 700 /etc/nginx/ssl/localhost.pem

CMD service nginx start && sleep infinity
