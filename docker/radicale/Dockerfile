FROM alpine

# Install python
RUN apk update && apk upgrade
RUN apk add python3 py3-pip


# Install Radicale
RUN  python3 -m pip install --upgrade radicale


# Copy the entrypoint shell script
COPY docker/radicale/entrypoint.sh /docker-entrypoint/
RUN chmod +x /docker-entrypoint/entrypoint.sh
ENTRYPOINT [ "/docker-entrypoint/entrypoint.sh" ]