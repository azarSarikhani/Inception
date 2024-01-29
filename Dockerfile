FROM alpine:3.18 as base
RUN		apt-get update
RUN		apt-get install -y nginx \
                openssl