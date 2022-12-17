FROM postfixadmin:3.3.13-apache


# Upgrade the repo
RUN apt update && apt -y full-upgrade && apt -y install apt-utils apt-transport-https gnupg2 curl dovecot-common


# Configure Postfix Admin
RUN mkdir -p /var/www/html/templates_c
RUN chowm www-data /var/www/html/templates_c &
RUN chmod +rwx /var/www/html/templates_c &