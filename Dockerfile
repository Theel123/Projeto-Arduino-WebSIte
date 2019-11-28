FROM php:5.6-apache
RUN docker-php-ext-install mysqli
COPY /layoutSimples  /var/www/html
EXPOSE 80