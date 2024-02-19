#!/bin/sh

# Change to the project directory.
cd ~/zionvalley

git pull origin robert


# Install/update composer dependencies
composer install --ignore-platform-reqs -q --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist

# # Run database migrations
# php artisan migrate --force

# # Clear caches
# php artisan cache:clear

# # Clear and cache routes
# php artisan route:cache

# # Clear and cache config
# php artisan config:cache

# # Clear and cache views
# php artisan view:cache
