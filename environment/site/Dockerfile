FROM php:7.2-apache

COPY php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install git zip unzip libcurl4-openssl-dev pkg-config libssl-dev -y

RUN pecl install mongodb

WORKDIR /root

RUN curl -sS https://getcomposer.org/installer -o  composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

EXPOSE 4000:80
