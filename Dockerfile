FROM php:8.3-cli-bookworm

ENV PORT=10000
ENV COMPOSER_MEMORY_LIMIT=-1
ENV NODE_VERSION=20

RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libzip-dev \
    libicu-dev \
    sqlite3 \
    libsqlite3-dev \
    ca-certificates \
    gnupg \
    --no-install-recommends \
    && mkdir -p /etc/apt/keyrings \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_${NODE_VERSION}.x nodistro main" > /etc/apt/sources.list.d/nodesource.list \
    && apt-get update \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install bcmath intl zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist --no-scripts --no-progress

RUN cp .env.example .env \
    && php artisan key:generate --force \
    && php artisan package:discover --ansi

RUN npm install --no-audit --no-fund --no-progress

RUN npm run build

RUN mkdir -p \
    database \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    && touch database/database.sqlite \
    && php artisan storage:link --force || true

RUN test -f vendor/autoload.php || (echo "ERROR: vendor/autoload.php missing" && exit 1) \
    && test -f public/build/manifest.json || echo "WARN: vite manifest missing"

EXPOSE 10000

CMD ["sh", "-c", "php artisan migrate --force && (php artisan db:seed --force || true) && php artisan serve --host=0.0.0.0 --port=$PORT"]
