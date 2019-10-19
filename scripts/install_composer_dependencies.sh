#!/bin/bash
sudo chmod -R 0777 /var/www/html/storage
sudo chmod -R 0777 /var/www/html/bootstrap/cache
sudo curl -sS https://getcomposer.org/installer | sudo php
sudo mv composer.phar /usr/local/bin/composer
sudo ln -s /usr/local/bin/composer /usr/bin/composer
sudo chown -R ec2-user:ec2-user /var/www/html/ 
cd /var/www/html
composer install
cp .env.example  .env
php artisan key:generate
