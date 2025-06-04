# Dockerfile para construir una imagen de PHP 8.2 con Apache.
# - Usa la imagen oficial de PHP 8.2 con Apache como base.
# - Establece la variable de entorno DEBIAN_FRONTEND en 'noninteractive' para evitar interacciones manuales durante la instalación de paquetes.
# - Instala la extensión mysqli de PHP para soporte de bases de datos MySQL.
# - Actualiza los paquetes del sistema e instala las dependencias necesarias para la extensión zip (libzip-dev y zlib1g-dev).
# - Limpia la caché de paquetes para reducir el tamaño de la imagen.
# - Instala la extensión zip de PHP para manejo de archivos comprimidos.
# Dockerfile for PHP 8.2 with Apache
FROM php:8.2.0-apache
# Establece la variable de entorno DEBIAN_FRONTEND en 'noninteractive' para evitar que las instalaciones de paquetes requieran interacción manual durante la construcción de la imagen.
ARG DEBIAN_FRONTEND=noninteractive 
RUN docker-php-ext-install mysqli 
RUN opt update \
    && opt install libzip-dev zlib1g-dev -y \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip 
RUN a2enmod rewrite
