#!/usr/bin/env bash
set -euo pipefail

echo "==> Installing PHP dependencies"
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

echo "==> Installing Node dependencies"
npm install --no-audit --no-fund

echo "==> Building frontend assets"
npm run build

echo "==> Build complete"
