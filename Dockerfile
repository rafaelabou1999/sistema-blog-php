# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy all project files to the Apache web root
COPY ./public /var/www/html

# Set the working directory to the web root
WORKDIR /var/www/html

# Expose port 80 (default HTTP port)
EXPOSE 80