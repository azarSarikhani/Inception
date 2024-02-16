FROM alpine:3.18.6

RUN apk update \
	&& apk add --no-cache \
	php81 \
	php81-fpm \
	php81-mysqli \
	php81-phar \
	php81-mbstring \
	wget \
	curl \
	libcurl \
	php81-curl \
	libzip \
	php81-zip \
	&& addgroup -S www \
	&& adduser -S -H -g "" www -G www

EXPOSE 9000

ADD https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar /usr/local/bin/wp

RUN chmod +x /usr/local/bin/wp
COPY tools/script.sh /tmp/mariadb-setup.sh
COPY tools/pool.conf /etc/php81/php-fpm.d/www.conf
CMD ["sh",  "/tmp/mariadb-setup.sh"] 