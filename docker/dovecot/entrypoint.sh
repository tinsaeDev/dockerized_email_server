#!bin/sh

# Update the database variables

sed -i 's/${DB_HOST}'/"$DB_HOST"/g /etc/dovecot/dovecot-sql.conf.ext 
sed -i 's/${DB_NAME}'/"$DB_NAME"/g /etc/dovecot/dovecot-sql.conf.ext 
sed -i 's/${DB_USER}'/"$DB_USER"/g /etc/dovecot/dovecot-sql.conf.ext 
sed -i 's/${DB_PASSWORD}'/"$DB_PASSWORD"/g /etc/dovecot/dovecot-sql.conf.ext 

# Start Dovecot
/usr/sbin/dovecot -F

