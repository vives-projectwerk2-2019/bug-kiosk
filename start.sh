#!/bin/sh

set -e

function wait_for_mariadb() {
    
    host=db
    
    until bash -c "echo 1 > /dev/tcp/$host/3306"; do
      >&2 echo "Mariadb is unavailable - sleeping"
      sleep 0.5
    done
    
    >&2 echo "Mariadb is up - continuing"
}

wait_for_mariadb
>&2 echo "Optimizing cache"
php artisan config:cache
php artisan route:cache
>&2 echo "Migrating to db"
php artisan migrate --force
php artisan db:seed --force
>&2 echo "Serving laravel"
php artisan serve --host=0.0.0.0
