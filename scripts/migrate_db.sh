#!/bin/bash
cd /var/www/html
# Run artisan commands
source ~/.bashrc
php artisan migrate
php artisan db:seed 


