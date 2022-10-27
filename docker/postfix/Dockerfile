FROM alpine:3.12

# Upgade the repo
# RUN apt update && apt -y full-upgrade && apt -y install apt-utils apt-transport-https gnupg2 curl


# Update alpine repo

RUN apk update  && apk upgrade
# Install Postfix
# RUN  apt install -y  postfix 
RUN apk add postfix postfix-pgsql

# Copy Postfix Configuration Files
COPY ./docker/postfix-admin/postfix/configs/aliases /etc/aliases
COPY ./docker/postfix-admin/postfix/configs/* /etc/postfix/
COPY ./docker/postfix/configs/pgsql/* /etc/postfix/pgsql/


# Install Open DKIM
RUN apk add opendkim
COPY docker/postfix/opendkim/opendkim.conf /etc/opendkim.conf
COPY docker/postfix/opendkim/mail.private /etc/postfix/dkim.key

# Install mailutils
RUN apk add busybox-extras 

# Permition related
RUN adduser postfix mail
RUN chown -R :postfix /etc/postfix/
RUN chmod 644 /etc/postfix/main.cf 


# Copy Cert files
COPY docker/certs/* /email/certs/

CMD [ "/usr/sbin/postfix","start-fg" ]
