FROM alpine:3.12

# Upgade the repo
# RUN apt update && apt -y full-upgrade && apt -y install apt-utils apt-transport-https gnupg2 curl



# Update alpine repo

RUN apk update  && apk upgrade
# Add VIrus Scanner

RUN addgroup -g 2001 clamav && adduser -u 2001 -G clamav -h /var/lib/clamav -D -s /sbin/nologin clamav

RUN apk --no-cache add clamav clamav-libunrar clamav-milter \
    && mkdir /run/clamav \
    && chown clamav:clamav /run/clamav


COPY docker/clamav/config/clamsmtpd.conf  /etc/clamsmtpd.conf
COPY docker/clamav/config/* /etc/clamav/

# EXPOSE 3310
# EXPOSE 7357

RUN freshclam --quiet


# RUN mkdir -p /run/clamsmtp/ && chown clamsmtp .


COPY docker/clamav/entrypoint.sh /docker-entrypoint/entrypoint.sh
RUN chmod +x /docker-entrypoint/entrypoint.sh
ENTRYPOINT [ "/docker-entrypoint/entrypoint.sh" ]