FROM alpine:3.12

# Upgade the repo
# RUN apt update && apt -y full-upgrade && apt -y install apt-utils apt-transport-https gnupg2 curl
RUN apk update && apk upgrade && \
    apk add shadow



# Create vmail user
RUN adduser --disabled-password vmail
RUN usermod -u 2000 vmail
RUN mkdir -p /var/vmail/
RUN chown -R vmail /var/vmail/

# Install dovcot 
RUN  apk add  dovecot-lmtpd dovecot-pgsql less


# Configure Dovecot
RUN mkdir -p /etc/dovecot/conf.d/
COPY ./docker/dovecot/configs/conf.d/* /etc/dovecot/conf.d/
COPY ./docker/dovecot/configs/dovecot.conf  /etc/dovecot/dovecot.conf 
COPY ./docker/dovecot/configs/dovecot-sql.conf.ext  /etc/dovecot/dovecot-sql.conf.ext 


# Update the database variables


# Copy Cert files
COPY ./certs/* /email/certs/

# Create Log dir
RUN mkdir -p /var/log/dovecot


# Create postfix user
RUN adduser --disabled-password postfix  && \
    usermod -u 2004 postfix && \
    adduser dovecot mail

# Start Dovecot
COPY ./docker/dovecot/entrypoint.sh /docker-entrypoint/
RUN chmod +x /docker-entrypoint/entrypoint.sh



# Add dovecot-pigeonhole / Dovecot Sieve 
RUN apk add dovecot-pigeonhole-plugin
RUN mkdir -p /etc/dovecot/sieve
COPY docker/dovecot/configs/before.sieve /etc/dovecot/sieve/before.sieve
RUN sievec /etc/dovecot/sieve/

ENTRYPOINT [ "/docker-entrypoint/entrypoint.sh" ]