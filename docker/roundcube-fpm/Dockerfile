FROM roundcube/roundcubemail:1.6.x-fpm-alpine




RUN apk  update && \
    apk upgrade && \
    apk add dovecot


COPY docker/roundcube-fpm/conf.d/ /var/roundcube/config/

# Copy brand logo
COPY docker/roundcube-fpm/logos/* /var/www/html/skins/elastic/images/



# Copy the entrypoint shell script
COPY docker/roundcube-fpm/custom-entrypoint.sh /
COPY docker/roundcube-fpm/post-rc-entrypoint.sh /


RUN chmod +x /custom-entrypoint.sh
RUN chmod +x /post-rc-entrypoint.sh


CMD ["/custom-entrypoint.sh"]