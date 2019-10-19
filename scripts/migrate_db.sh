#!/bin/bash
echo echo "$USER"
pwd
cd /var/www/html
# Run artisan commands
php artisan migrate
php artisan db:seed 