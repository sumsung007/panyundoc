#!/bin/bash

cron

if [ ! -e '/var/www/html/version.php' ]; then
	tar xf /usr/src/pineconecloud.tar.gz
	mv -f /usr/src/config.php /var/www/html/config/config.php
	mv /usr/src/htaccess /var/www/html/.htaccess
	chown -R www-data /var/www/html

fi
redis-server --daemonize yes
exec "$@"
