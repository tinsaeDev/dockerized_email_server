FROM roundcube/roundcubemail:1.5.3-fpm-alpine



RUN apk  update && \
    apk upgrade && \
    apk add dovecot


COPY docker/roundcube-fpm/conf.d/* /var/roundcube/config/

# Copy brand logo
COPY docker/roundcube-fpm/logos/* /var/www/html/skins/elastic/images/
