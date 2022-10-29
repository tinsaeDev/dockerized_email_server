FROM php:8.1-fpm-alpine


RUN apk update \
    && apk upgrade \
    && apk add --update --no-cache icu-dev openldap-dev  postgresql-dev libzip-dev zlib-dev libpng libpng-dev 

RUN docker-php-ext-install  sockets exif pdo_pgsql ldap zip gd intl



COPY --chown=www-data:www-data docker/roundcube-fpm/app/  /var/www/html