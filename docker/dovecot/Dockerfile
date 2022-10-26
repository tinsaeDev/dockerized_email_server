FROM ubuntu

# Upgade the repo
RUN apt update && apt -y full-upgrade && apt -y install apt-utils apt-transport-https gnupg2 curl


# Install dovcot 
RUN echo "deb [arch=amd64] https://repo.dovecot.org/ce-2.3-latest/ubuntu/bionic bionic main" >> /etc/apt/sources.list.d/dovecot.list 
RUN curl -sS https://repo.dovecot.org/DOVECOT-REPO-GPG | apt-key add -

RUN  apt install -y dovecot-core dovecot-imapd dovecot-lmtpd

# dovecot dovecot-ldap  dovecot-pigeonhole-plugin rspamd-client



# Configure Dovecot

COPY ./docker/dovecot/configs/dovecot.conf /etc/dovecot/dovecot.conf
COPY ./docker/dovecot/configs/conf.d/* /etc/dovecot/conf.d/


RUN  useradd postfix

# Copy Cert files

COPY docker/certs/* /email/certs/

CMD /usr/sbin/dovecot -F