FROM php:5.6-apache

# RUN docker-php-ext-install pdo pdo_mysql
COPY . /var/www/html/

# Enable mod_rewrite if needed
RUN a2enmod rewrite    

# Install PDO for MySQL
RUN docker-php-ext-install pdo pdo_mysql 

COPY config/db_config.php /var/www/html/config/

# Optional: expose port 80 explicitly
EXPOSE 0
