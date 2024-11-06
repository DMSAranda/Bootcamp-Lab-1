# Utiliza una imagen base que incluya Apache y PHP (por ejemplo, php:apache)
FROM php:8.1-apache

ARG USERNAME=www-data
ARG USER_UID=1000
ARG USER_GID=$USER_UID

USER root

# Copia los archivos de tu aplicación al directorio web de Apache
COPY app/src/ /var/www/html/

# Setup permissions to folder and files
RUN chown -R www-data:www-data /var/www/html ;
RUN find . -type d -exec chmod 755 {} \;
RUN find . -type f -exec chmod 644 {} \;

RUN chmod +x /var/www/html

USER www-data
# Abre el puerto 80 para el tráfico web
EXPOSE 8080