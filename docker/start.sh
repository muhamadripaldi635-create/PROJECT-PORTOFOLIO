#!/bin/sh
set -e

# Render and Railway pass dynamic PORT via environment variable
PORT="${PORT:-8080}"
sed -i "s/8080/$PORT/g" /etc/nginx/http.d/default.conf

# Prepare SQLite Database
touch /var/www/html/database/database.sqlite
chown www-data:www-data /var/www/html/database/database.sqlite
chmod 664 /var/www/html/database/database.sqlite

# Run migrations and seed admin user
php artisan migrate --force
php artisan db:seed --force
php artisan storage:link || true

# Production caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Craftman Portfolio starting on port $PORT..."
php-fpm -D
nginx -g "daemon off;"
