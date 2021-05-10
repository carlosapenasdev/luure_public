#!/bin/bash
echo "composer install:";
composer install --ignore-platform-reqs -vvv

echo "composer update:";
#composer update -vvv

echo "php artisan clear-compiled :";
php artisan clear-compiled 

echo "composer dump-autoload:";
composer dump-autoload

echo "php artisan optimize:";
php artisan optimize

echo "php artisan config:clear:";
php artisan config:clear

echo "php artisan cache:clear:";
php artisan cache:clear

echo "php artisan view:clear:";
php artisan view:clear

echo "php artisan config:cache:";
php artisan config:cache