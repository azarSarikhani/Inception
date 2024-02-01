FROM alpine:3.18.6

RUN apk update && \
	apk add --no-cache \
	mariadb \
	mariadb-client

EXPOSE 3306

COPY ./conf/my.cnf /etc/my.cnf.d/my.cnf
COPY tools/script.sh ./script.sh

CMD ["sh", "./script.sh"]
## docker build -t db-image .
## docker run  --name db-container -p 8080:3306 --rm db-image