FROM debian:buster

RUN apt-get -y update \
    && apt install -y nginx \
    && apt install -y mariadb-server mariadb-client 
    #&& apt install -y php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline

CMD sleep infinity

# mkdir /etc/nginx/ssl