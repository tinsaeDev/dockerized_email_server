FROM ubuntu:latest



# Install Postfix
RUN apt update && apt -y full-upgrade

RUN apt install -y postfix

# Copy Postfix Configuration Files


COPY ./docker/email/postfix/configs/aliases /etc/aliases
COPY ./docker/email/postfix/configs/main.cf /etc/postfix/
COPY ./docker/email/postfix/configs/master.cf /etc/postfix/







# Install Dovecot
RUN  apt install -y dovecot-core dovecot-imapd dovecot-lmtpd


# Configure Dovecot

COPY ./docker/email/dovecot/configs/dovecot.conf /etc/dovecot/dovecot.conf
COPY ./docker/email/dovecot/configs/conf.d/10-mail.conf /etc/dovecot/conf.d/10-mail.conf
COPY ./docker/email/dovecot/configs/conf.d/10-ssl.conf /etc/dovecot/conf.d/10-ssl.conf
COPY ./docker/email/dovecot/configs/conf.d/10-master.conf /etc/dovecot/conf.d/10-master.conf
COPY ./docker/email/dovecot/configs/conf.d/15-mailboxes.conf /etc/dovecot/conf.d/15-mailboxes.conf



# Disable FIPS


RUN adduser dovecot mail


# Copy Certificates

COPY ./docker/email/certs /email/certs


# Copy Entrypoint file
COPY ./docker/email/entrypoint.sh /email/entrypoint.sh
RUN chmod +x /email/entrypoint.sh
ENTRYPOINT [ "/email/entrypoint.sh","postfix start-fg"]


