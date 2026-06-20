FROM php:8.2-apache

# Serve the site that lives in the valhalla/ subdirectory
COPY valhalla/ /var/www/html/

EXPOSE 80
