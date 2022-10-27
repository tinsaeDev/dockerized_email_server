FROM postfixadmin:apache

# Upgrade the repo
RUN apt update && apt -y full-upgrade && apt -y install apt-utils apt-transport-https gnupg2 curl dovecot-core


# Configure Postfix Admin
RUN mkdir -p /var/www/html/templates_c
RUN chowm www-data /var/www/html/templates_c &
RUN chmod +rwx /var/www/html/templates_c &

COPY docker/postfix-admin/config.local.php /var/www/html/


# Copy Certificate files
COPY   ./docker/certs/* /email/certs/