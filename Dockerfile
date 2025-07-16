# 使用官方 PHP + Apache 映像檔
FROM php:8.2-apache

# 安裝必要套件
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

# 安裝 Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 設定 Apache 虛擬主機
COPY ./render/apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# 設定專案目錄
WORKDIR /var/www/html

# 複製 Laravel 專案檔案
COPY . .

# 建立 SQLite 資料庫
RUN mkdir -p database && touch database/database.sqlite

# 安裝 Laravel 套件
RUN composer install --no-dev --optimize-autoloader

# 設定正確權限
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 快取設定
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# 啟動 Apache
CMD ["apache2-foreground"]
