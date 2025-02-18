# Usa a imagem do PHP com Apache
FROM php:8.2-apache

# Instala extensões comuns
RUN docker-php-ext-install pdo pdo_mysql

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY . /var/www/html

# Permissões corretas
RUN chown -R www-data:www-data /var/www/html

# Expõe a porta do Apache
EXPOSE 8081

# Inicia o Apache
CMD ["apache2-foreground"]
