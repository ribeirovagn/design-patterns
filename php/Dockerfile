FROM php:8.2-apache

WORKDIR /usr/src/myapp

COPY . /usr/src/myapp

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
EXPOSE 80

RUN ["composer", "update"]