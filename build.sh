#!/usr/bin/env bash
set -euo pipefail

echo "==> Installing PHP dependencies"
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

echo "==> Installing Node dependencies"
npm install --no-audit --no-fund

echo "==> Building frontend assets"
npm run build

echo "==> Preparing storage directories"
mkdir -p database
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p bootstrap/cache
[ -f database/database.sqlite ] || touch database/database.sqlite

echo "==> Linking storage"
php artisan storage:link --force || true

echo "==> Running migrations (and seeders if available)"
php artisan migrate --force
php artisan db:seed --force || true

echo "==> Caching config, routes, and views"
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Build complete"
