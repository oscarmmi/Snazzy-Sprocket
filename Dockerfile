FROM wordpress:latest

# Instalar dependencias necesarias para desarrollo
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Configurar permisos para que WordPress pueda escribir en /var/www/html
RUN chown -R www-data:www-data /var/www/html