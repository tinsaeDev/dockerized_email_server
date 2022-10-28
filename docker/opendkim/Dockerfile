FROM alpine:3.12

# Upgade the repo
# RUN apt update && apt -y full-upgrade && apt -y install apt-utils apt-transport-https gnupg2 curl


# Update alpine repo

RUN apk update  && apk upgrade


# Install Open DKIM
RUN apk add opendkim opendkim-utils
COPY docker/opendkim/conf/opendkim.conf /etc/opendkim/opendkim.conf
# /etc/opendkim/opendkim.conf
COPY docker/opendkim/mail.private /etc/postfix/dkim.key

# Install mailutils
RUN apk add busybox-extras  nmap 


CMD ["opendkim", "-f"]