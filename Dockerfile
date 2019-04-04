FROM composer

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable pdo_mysql

RUN apk add --update nodejs npm

WORKDIR /app
COPY . .
RUN composer install --optimize-autoloader --no-dev

RUN npm install
RUN npm run production

EXPOSE 8000
EXPOSE 443
CMD [ "./start.sh" ]
