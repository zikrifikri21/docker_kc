FROM php:8.1.5-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

# COPY docker-belajar /kendaricoding/
