# FROM php:8.1-fpm-alpine
FROM roundcube/roundcubemail:1.6.0-fpm-alpine


RUN apk  update && \
    apk upgrade && \
    apk add dovecot


COPY docker/roundcube-fpm/conf.d/* /var/roundcube/config/
COPY docker/roundcube-fpm/password.php /var/www/html/plugins/password/password.php

# Copy brand logo
COPY docker/roundcube-fpm/logos/* /var/www/html/skins/ws/images/