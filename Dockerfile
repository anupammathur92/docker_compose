FROM php:7.4-apache
ENV MEMCACHED_DEPS zlib-dev libmemcached-dev cyrus-sasl-dev git
RUN apt-get update
RUN apt install git -y
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN apt-get install -y libpq-dev && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && docker-php-ext-install pdo pdo_pgsql pgsql
RUN pecl install -o -f redis &&  rm -rf /tmp/pear &&  docker-php-ext-enable redis
RUN apt-get install -y libz-dev libmemcached-dev && apt-get install -y memcached libmemcached-tools && pecl install memcached && docker-php-ext-enable memcached

COPY ./php.ini /usr/local/etc/php/conf.d