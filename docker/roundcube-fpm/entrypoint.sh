#!/bin/sh 

# Copy assets to web server document 
cp /var/rc-assets/*   /var/www/html/skins/elastic/images/


# Start php-fpm
php-fpm