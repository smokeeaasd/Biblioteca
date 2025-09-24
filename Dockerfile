FROM php:8.4-apache

WORKDIR /var/www/html/

RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

COPY .htaccess .
COPY App/ ./App/

EXPOSE 80