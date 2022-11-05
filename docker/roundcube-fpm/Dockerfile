# FROM php:8.1-fpm-alpine
FROM roundcube/roundcubemail:1.6.0-fpm-alpine

COPY docker/roundcube-fpm/conf.d/* /var/roundcube/config/

# Copy brand logo
RUN mkdir -p /var/www/html/skins/elastic/5star/images/
RUN cp -r /var/www/html/skins/elastic/skins/elastic/ /var/www/html/skins/elastic/skins/5star/

COPY docker/roundcube-fpm/logos/*  /var/www/html/skins/elastic/5star/images/