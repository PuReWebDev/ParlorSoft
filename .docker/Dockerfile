FROM php:7.3-fpm

ARG uid=1000

# Install required librairies
RUN apt-get update \
    && apt-get install -y \
        git \
        unzip \
        zlib1g-dev \
        libjpeg-dev\
        libpng-dev\
        libfreetype6-dev \
        libpq-dev \
        libicu-dev g++ \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Configure PHP extensions
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql zip gd intl

# Install Postgre PDO
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Import custom php.ini
COPY conf/php/php.ini /usr/local/etc/php/

# Make sure www-data user id matches the host
RUN usermod -u $uid www-data

# Make sure www-data user has .ssh dir with proper credentials
RUN mkdir /var/www/.ssh && chown root:www-data /var/www/.ssh && chmod ugo+w /var/www/.ssh

# Initialize composer cache dirs
RUN mkdir -p /var/www/.composer && chown -R www-data:www-data /var/www/.composer

WORKDIR /var/www

CMD ["php-fpm", "--nodaemonize"]
