#!/bin/sh
mkdir -p /var/spool/postfix/etc/

# Postfix runs in chrooted enviroment, so it is needed to copy some important files
cp /etc/services /var/spool/postfix/etc/services
cp /etc/resolv.conf /var/spool/postfix/etc/resolv.conf 


postfix start-fg
