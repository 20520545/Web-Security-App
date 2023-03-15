FROM php:8.0-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html
COPY ./src /var/www/html/

# Install any necessary dependencies
RUN apt-get update -y && docker-php-ext-install pdo pdo_mysql mysqli
RUN apt-get install -y libmariadb-dev
RUN apt-get install -y nginx
RUN rm /etc/nginx/sites-enabled/default
RUN mkdir -p /etc/nginx/sites-enabled/
COPY ./nginx/* /etc/nginx/sites-enabled/

EXPOSE 80
