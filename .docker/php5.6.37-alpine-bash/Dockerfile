FROM php:5.6.37-alpine

RUN apk --no-cache add autoconf \
    dpkg-dev dpkg \
    file \
    g++ \
    gcc \
    libc-dev \
    make \
    pkgconf \
    re2c \
    bash \
    postgresql-dev

RUN docker-php-ext-install \
    pgsql \
    mysql \
    mysqli \
    pdo \
    pdo_mysql \
    pdo_pgsql

RUN pecl install xdebug-2.5.4 && docker-php-ext-enable xdebug

RUN echo "memory_limit=2G" > /usr/local/etc/php/conf.d/memory-limit-php.ini \
    && echo "date.timezone = Europe/Berlin" > /usr/local/etc/php/conf.d/date-timezone.ini

ENTRYPOINT [""]
CMD ["bash"]
