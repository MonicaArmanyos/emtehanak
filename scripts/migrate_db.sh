#!/bin/bash

# Run artisan commands
php /var/www/html/artisan migrate:refresh
php /var/www/html/artisan db:seed