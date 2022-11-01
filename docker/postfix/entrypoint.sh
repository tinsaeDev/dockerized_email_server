#!/bin/sh
mkdir -p /var/spool/postfix/etc/

# Postfix runs in chrooted enviroment, so it is needed to copy some important files
cp /etc/services /var/spool/postfix/etc/services
cp /etc/resolv.conf /var/spool/postfix/etc/resolv.conf 

# user = ${DB_USER}
# password = ${DB_PASSWORD}
# hosts = ${DB_HOST}
# dbname = ${DB_NAME}

echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
for file in /etc/postfix/pgsql/*.cf; do
    # sed -i 's/asd/dfg/g' $i

    sed -i 's/${DB_HOST}'/"$DB_HOST"/g $file
    sed -i 's/${DB_NAME}'/"$DB_NAME"/g $file
    sed -i 's/${DB_USER}'/"$DB_USER"/g $file
    sed -i 's/${DB_PASSWORD}'/"$DB_PASSWORD"/g $file

   less $file
done
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"


# Configure database per the enviroment variables
# sed -i 's/${DB_USER}'/"$DB_USER"/g /etc/dovecot/dovecot-sql.conf.ext 
# sed -i 's/${DB_USER}'/"$DB_USER"/g /etc/dovecot/dovecot-sql.conf.ext 
# sed -i 's/${DB_USER}'/"$DB_USER"/g /etc/dovecot/dovecot-sql.conf.ext 
# sed -i 's/${DB_USER}'/"$DB_USER"/g /etc/dovecot/dovecot-sql.conf.ext 


postfix start-fg
