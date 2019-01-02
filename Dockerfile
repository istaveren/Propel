FROM php:5.6-alpine3.7
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
RUN echo "memory_limit=512M" > /usr/local/etc/php/conf.d/memory-limit-php.ini \
    && echo "date.timezone = Europe/Berlin" > /usr/local/etc/php/conf.d/date-timezone.ini
