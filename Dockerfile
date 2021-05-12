FROM php:7.3-apache

COPY . /app

RUN a2enmod rewrite
