#!/bin/sh
mkdir -p /var/spool/postfix/etc/

# Postfix runs in chrooted enviroment, so it is needed to copy some important files
cp /etc/services /var/spool/postfix/etc/services
cp /etc/resolv.conf /var/spool/postfix/etc/resolv.conf 



# Configure database per the enviroment variables
for file in /etc/postfix/pgsql/*.cf; do
    # sed -i 's/asd/dfg/g' $i
    sed -i 's/${DB_HOST}'/"$DB_HOST"/g $file
    sed -i 's/${DB_PORT}'/"$DB_PORT"/g $file
    sed -i 's/${DB_NAME}'/"$DB_NAME"/g $file
    sed -i 's/${DB_USER}'/"$DB_USER"/g $file
    sed -i 's/${DB_PASSWORD}'/"$DB_PASSWORD"/g $file

   less $file
done


# Fix file permisions
chmod -R 644 /etc/postfix/
chmod -R g+x /etc/postfix/
chmod -R o+x /etc/postfix/


# Start deamonized spamassasin
SAHOME="/var/log/spamassassin"
sa-update
spamd -d


# Start Clamv
freshclam -d &
clamd &
sleep 60 && clamav-milter &

postfix start-fg