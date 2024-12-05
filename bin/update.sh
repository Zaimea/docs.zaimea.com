#!/bin/bash

if [ ! -f composer.json ]; then
    echo "Please make sure to run this script from the root directory of this repo."
    exit 1
fi

composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
source "$(dirname "$0")/checkout_latest_docs.sh"
npm install
npm run build
