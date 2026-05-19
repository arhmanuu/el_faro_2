# Usamos una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Copiamos los archivos del proyecto al directorio web de Apache
COPY . /var/www/html/

# Exponemos el puerto 80
EXPOSE 80

# El comando de inicio ya está definido en la imagen base de PHP-Apache