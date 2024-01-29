FROM alpine:3.18 as base
RUN apk update && \
	apk add --no-cache \
    nginx \
    openssl
EXPOSE 443

RUN mkdir -p /run/nginx /etc/nginx/ssl

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes \
    -out /etc/nginx/ssl/certificate.crt \
    -keyout /etc/nginx/ssl/certificate.key \
    -subj "/C=FI/ST=Helsinki/L=Helsinki/O=Hive/OU=asarikha/CN=asarikha.42.fr"

COPY tools /usr/share/nginx/html
# COPY conf/nginx.conf /etc/nginx/nginx.conf

# CMD ["nginx", "-c", "/etc/nginx/nginx.conf", "-g", "daemon off;"]
CMD ["nginx", "-g", "daemon off;"]