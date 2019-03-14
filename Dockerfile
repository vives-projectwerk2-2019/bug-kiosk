FROM composer

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-enable pdo_mysql

RUN apk add --update nodejs npm

WORKDIR /app
COPY . .
RUN composer install
RUN npm install
RUN npm run dev

EXPOSE 8000
CMD [ "./start.sh" ]
