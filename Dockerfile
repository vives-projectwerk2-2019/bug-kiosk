FROM composer

RUN apk add --no-cache freetype libpng freetype-dev libpng-dev libjpeg-dev && \
  docker-php-ext-configure gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ \
    --with-gd

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install gd
RUN docker-php-ext-enable gd

RUN apk add --update nodejs npm

WORKDIR /app
COPY . .
RUN composer install --optimize-autoloader --no-dev
RUN php artisan config:clear

RUN npm install

ARG MIX_VUE_APP_BROKER=wss://api.bug.devbit.be/broker

RUN npm run production

EXPOSE 8000
EXPOSE 443
CMD [ "php", "artisan",  "serve" , "--host=0.0.0.0"]
