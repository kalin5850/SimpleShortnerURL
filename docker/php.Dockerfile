FROM php:7.4-fpm

RUN apt-get update && \
    apt-get install -y git zip

RUN docker-php-ext-install pdo_mysql

RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

EXPOSE 9000