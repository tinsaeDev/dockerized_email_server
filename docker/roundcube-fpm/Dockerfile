FROM php:8.1-fpm-alpine
RUN docker-php-ext-install sockets 

RUN apk update && apk upgrade

# Php lib intl depends on icu-dev
RUN apk add icu-dev
RUN docker-php-ext-install intl
 RUN docker-php-ext-install exif
#  RUN apk add gnu-libiconv
# RUN docker-php-ext-install iconv
RUN apk add zlib-dev libpng libpng-dev 
RUN docker-php-ext-install  gd

RUN apk add libzip-dev
RUN docker-php-ext-install zip

RUN apk add  postgresql-dev
RUN docker-php-ext-install pdo_pgsql

RUN apk add openldap-dev
RUN docker-php-ext-install ldap


# 82 is default id for www-data
COPY --chown=www-data:www-data docker/roundcube-fpm/app/  /var/www/html


# bcmath bz2 calendar ctype curl dba dom enchant exif fileinfo filter ftp gd gettext gmp hash iconv imap interbase intl json ldap mbstring mcrypt mysqli oci8 odbc opcache pcntl pdo pdo_dblib pdo_firebird pdo_mysql pdo_oci pdo_odbc pdo_pgsql pdo_sqlite pgsql phar posix pspell readline recode reflection session shmop simplexml snmp soap sockets spl standard sysvmsg sysvsem sysvshm tidy tokenizer wddx xml xmlreader xmlrpc xmlwriter xsl zip