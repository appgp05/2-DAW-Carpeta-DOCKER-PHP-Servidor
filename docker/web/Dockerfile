FROM php:8.4-apache

Run echo "<Directory /var/www/html>" >> /etc/apache2/sites-enabled/000-default.conf
Run echo "Options +Indexes" >> /etc/apache2/sites-enabled/000-default.conf
Run echo "</Directory>" >> /etc/apache2/sites-enabled/000-default.conf

Run pecl install xdebug
Run docker-php-ext-enable xdebug

EXPOSE 80