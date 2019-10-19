#!/bin/bash
cd /var/www/html
# Run artisan commands
source ~/.bashrc
php artisan migrate
php artisan db:seed 

#clearing cache
php artisan config:caches


