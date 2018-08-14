FROM php:5.6.37-alpine
RUN apk update && apk add bash
RUN echo "memory_limit=512M" > /usr/local/etc/php/conf.d/memory-limit-php.ini \
    && echo "date.timezone = Europe/Berlin" > /usr/local/etc/php/conf.d/date-timezone.ini
ENTRYPOINT ["bash"]
