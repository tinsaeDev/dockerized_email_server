FROM alpine:3.16.2 

# Update alpine repo
RUN apk update \
     && apk upgrade \
     && apk add opendkim opendkim-utils

RUN mkdir -p  /etc/opendkim/
# Copy configuration files
COPY ./docker/opendkim/conf/opendkim.conf /etc/opendkim/opendkim.conf

# # Copy open dkim key file
COPY  ./certs/opendkim/mail.private /etc/opendkim/dkim.key
RUN chmod 700 /etc/opendkim/dkim.key

CMD ["opendkim", "-f"]