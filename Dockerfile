FROM php:5.6-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install PDO for MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Optional: expose port 80 explicitly
EXPOSE 80
