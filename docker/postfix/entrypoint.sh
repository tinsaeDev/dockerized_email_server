#!/bin/sh
mkdir -p /var/spool/postfix/etc/

cp /etc/services /var/spool/postfix/etc/services
cp /etc/resolv.conf /var/spool/postfix/etc/resolv.conf 
postfix start-fg
