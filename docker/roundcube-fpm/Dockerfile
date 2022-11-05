# FROM php:8.1-fpm-alpine
FROM roundcube/roundcubemail:1.6.0-fpm-alpine

COPY docker/roundcube-fpm/conf.d/* /var/roundcube/config/

# Copy brand logo
RUN mkdir -p /var/www/html/skins/5star/images/
COPY docker/roundcube-fpm/logos/* /var/www/html/skins/5star/images/
COPY docker/roundcube-fpm/logos/5star.svg /var/www/html/skins/5star/images/