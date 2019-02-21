FROM composer

WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install
COPY . .

EXPOSE 3000
CMD [ "composer", "start" ]
