FROM php:8.1-fpm

# Set the working directory
WORKDIR /var/www

# Copy the existing application directory contents
COPY ./src /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy the existing application directory contents
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 9000
EXPOSE 9000

# Start the PHP FastCGI Process Manager
CMD ["php-fpm"]
