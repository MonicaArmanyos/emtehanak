
#!/bin/bash
# Set permissions to storage and bootstrap cache
sudo chmod -R 0777 /var/www/html/emtehanak/storage
sudo chmod -R 0777 /var/www/html/emtehanak/bootstrap/cache
sudo curl -sS https://getcomposer.org/installer | sudo php
sudo mv composer.phar /usr/local/bin/composer
sudo ln -s /usr/local/bin/composer /usr/bin/composer
sudo chown -R $USER /var/www/html/emtehanak
cd /var/www/html/emtehanak
composer install
