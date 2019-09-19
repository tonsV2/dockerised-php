FROM php:fpm-alpine
RUN apk --no-cache add postgresql-dev && docker-php-ext-install pgsql
