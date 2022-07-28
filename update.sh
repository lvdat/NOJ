#!/bin/sh
php artisan down
sudo supervisorctl stop all
git pull
php artisan migrate
composer install
sudo supervisorctl reload
sudo supervisorctl start all
php artisan up
