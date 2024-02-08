#!/bin/sh

cd var/www/html/
# change directory to where you want them first (may need to make one)
wp core download --allow-root

#setup with the wp-cli https://www.cloudways.com/blog/wp-cli-commands/
# make config
#skip check to be removed once database is connected and running
wp config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_USER_PASSWORD --dbhost=mariadb
# install wordpress
wp core install --url=$DOMAIN_NAME --title=$WP_TITLE --admin_user=$WP_ADMIN --admin_password=$WP_ADMIN_PASSWORD --admin_email=$WP_ADMIN_EMAIL --skip-email --path=/var/www/html
# make user
# --path=/var/www/html maybe set as same location as volume
wp user create $WP_USER $WP_USER_EMAIL --role=editor --user_pass=$WP_USER_PASSWORD --path=/var/www/html
# install themes and activate
wp theme install arbutus --activate
# install themes and plugins
wp plugin update --all
# Update site address to match domain
wp option update siteurl "https://$DOMAIN_NAME"

while true
do
    sleep 1
done