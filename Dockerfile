# Use an official PHP runtime as a parent image
FROM php:8.1-apache

# Copy the current directory contents into the container
COPY . /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
