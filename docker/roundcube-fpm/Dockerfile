# FROM php:8.1-fpm-alpine
FROM roundcube/roundcubemail:1.6-beta-fpm-alpine



RUN apk  update && \
    apk upgrade && \
    apk add dovecot


COPY docker/roundcube-fpm/conf.d/* /var/roundcube/config/

# Copy brand logo
COPY docker/roundcube-fpm/logos/* /var/rc-assets/


COPY docker/roundcube-fpm/entrypoint.sh "/docker-entrypoint/entrypoint.sh"
RUN chmod +x "/docker-entrypoint/entrypoint.sh"

ENTRYPOINT [ "/docker-entrypoint/entrypoint.sh" ]