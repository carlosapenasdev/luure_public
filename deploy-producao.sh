#!/bin/bash
git pull origin master 
composer install --ignore-platform-reqs
php artisan clear-compiled 
composer dump-autoload
php artisan optimize
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan config:cache
php artisan migrate --force