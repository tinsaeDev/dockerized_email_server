FROM alpine:latest

RUN apk update
RUN  apk upgrade  

RUN apk add php8=8.1
# Change the timezone 
RUN apk add --no-cache tzdata bash mysql-client mariadb-connector-c postgresql-client
ENV TZ=Africa/Addis_Ababa


CMD [ "crond", "-l", "2", "-f" ]
