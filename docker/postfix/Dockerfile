FROM alpine:3.12

# Upgade the repo
# RUN apt update && apt -y full-upgrade && apt -y install apt-utils apt-transport-https gnupg2 curl



# Update alpine repo

RUN apk update  && apk upgrade

RUN apk add shadow

# Change postfix user id
RUN adduser --disabled-password postfix
RUN usermod -u 2004 postfix

# Install Postfix
# RUN  apt install -y  postfix 
RUN apk add postfix postfix-pgsql  postgresql-contrib postfix-pcre  cyrus-sasl cyrus-sasl cyrus-sasl-plain \
      && apk add  spamassassin  spamassassin-client



# Permition related
RUN adduser postfix mail
RUN chown -R postfix:postfix /var/spool/postfix/private/



# Copy Postfix Configuration Files
COPY ./docker/postfix/configs/aliases /etc/aliases
RUN postalias /etc/aliases
COPY ./docker/postfix/configs/* /etc/postfix/
COPY ./docker/postfix/configs/pgsql/* /etc/postfix/pgsql/
RUN chmod -R 7777 /etc/postfix/pgsql/

# # Copy open dkim private key
# COPY certs/opendkim/mail.private /etc/postfix/dkim.key


# V mail dir permitions
RUN mkdir -p /var/vmail/

RUN usermod -u 2000 vmail
RUN chown -R vmail /var/vmail/

# RUN cp -p /etc/resolv.conf /var/spool/postfix/etc/resolv.conf 

RUN chmod -R 650 /etc/postfix/

COPY docker/postfix/entrypoint.sh /docker-entrypoint/
RUN chmod +x /docker-entrypoint/entrypoint.sh




# Spam Assasin
RUN adduser --disabled-password spamd
COPY docker/postfix/smapassasin/spamassassin  /etc/default/spamassassin
COPY docker/postfix/smapassasin/local.cf /etc/spamassassin/local.cf

# RUN mkdir -p /run/clamsmtp/ && chown clamsmtp .
ENTRYPOINT [ "/docker-entrypoint/entrypoint.sh" ]