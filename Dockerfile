FROM wordpress:latest

# Instalar dependencias necesarias para desarrollo
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    default-mysql-client \
    && rm -rf /var/lib/apt/lists/*

# Configurar permisos para que WordPress pueda escribir en /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Copiar script de inicio personalizado
COPY docker-entrypoint.sh /usr/local/bin/custom-entrypoint.sh
RUN chmod +x /usr/local/bin/custom-entrypoint.sh

ENTRYPOINT ["/usr/local/bin/custom-entrypoint.sh"]