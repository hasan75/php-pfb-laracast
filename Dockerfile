FROM php:8.1-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Set up Apache to allow .htaccess files
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy app files
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
