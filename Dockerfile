FROM php:8.0-apache

# Instalação das extensões necessárias (ajuste conforme suas necessidades)
RUN docker-php-ext-install mysqli

# Habilita o módulo de reescrita do Apache
RUN a2enmod rewrite
