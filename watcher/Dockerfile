FROM php:8.2-apache

# Instalar dependencias del sistema operativo y drivers de Postgres para PHP
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql

# Habilitar el módulo de reescritura de Apache (Obligatorio para el enrutamiento de Laravel)
RUN a2enmod rewrite

# Inyectar el binario de Composer desde su imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer