FROM php:5.6.37-alpine
RUN apk update && apk add bash postgresql-dev \
    && docker-php-ext-install mysql pgsql mysqli pdo pdo_mysql pdo_pgsql

RUN echo "memory_limit=512M" > /usr/local/etc/php/conf.d/memory-limit-php.ini \
    && echo "date.timezone = Europe/Berlin" > /usr/local/etc/php/conf.d/date-timezone.ini

ENTRYPOINT ["bash"]
