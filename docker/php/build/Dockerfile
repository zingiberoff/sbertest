FROM php:7.2-fpm-alpine

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN mkdir -p /var/log/php-fpm
RUN ln -sf /dev/stdout /var/log/php-fpm/access.log
RUN ln -sf /dev/stderr /var/log/php-fpm/error.log

CMD ["php-fpm"]