FROM alpine:3.18.6

RUN apk update && \
	apk add --no-cache \
	mariadb \
	mariadb-client

EXPOSE 3306

COPY ./conf/my.cnf /etc/my.cnf.d/my.cnf
COPY tools/script.sh ./script.sh

RUN sh ./script.sh
CMD ["mysqld_safe", "--defaults-file=/etc/my.cnf.d/my.cnf"]
## docker build -t db-image .
## docker run  --name db-container -p 8080:3306 --rm db-image