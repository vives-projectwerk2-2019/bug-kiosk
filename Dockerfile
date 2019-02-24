FROM composer

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable pdo_mysql

WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --ignore-platform-reqs --no-scripts
COPY . .

EXPOSE 3000
CMD [ "composer", "start" ]
