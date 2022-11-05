# FROM php:8.1-fpm-alpine
FROM roundcube/roundcubemail:1.6.0-fpm-alpine

COPY docker/roundcube-fpm/conf.d/* /var/roundcube/config/

# Copy brand logo
COPY docker/roundcube-fpm/logos/* /var/www/html/skins/ws/images/