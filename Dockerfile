# Use official PHP with Apache image
FROM php:8.1-apache

# Enable required Apache modules
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy project files into Apache server root
COPY . /var/www/html/

# Expose Apache default port
EXPOSE 80
