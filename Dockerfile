FROM php:8.3-fpm-alpine

# Install system dependencies & PHP extensions
RUN apk add --no-cache \
    nginx \
    curl \
    git \
    nodejs \
    npm \
    sqlite \
    sqlite-dev \
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring zip gd opcache bcmath

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application source
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Install frontend dependencies and build assets
RUN if [ -f package.json ]; then npm install && npm run build; fi

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Copy Nginx config and entrypoint script
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/start.sh /usr/local/bin/start.sh
RUN tr -d '\r' < /usr/local/bin/start.sh > /usr/local/bin/start_clean.sh \
    && mv /usr/local/bin/start_clean.sh /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

EXPOSE 8080 80 10000

CMD ["/usr/local/bin/start.sh"]
