# To run:

`composer install`

`npm install`

Add .env file with correct values.

Turn on apache and mysql.

`npm run dev`

`php artisan migrate`

`php artisan db:seed`

`php artisan serve`

# Program dongles
**_Example for station 1_**
## Initial status

<img src="public/images/kiosk/devbit.png" alt="init" width="200"/>

There hasn't been any traffic yet.

## Ready
<img src="public/images/kiosk/add-user.png" alt="init" width="200"/>

The station sends `{"ping":"ping"}` on the topic `kiosk/pi1/ping` and is resend within 30 seconds.

## No connection
<img src="public/images/kiosk/sad.png" alt="init" width="200"/>

No ping from station for more than 30 seconds.

## Busy
<img src="public/images/kiosk/waiting.png" alt="init" width="200"/>

The station sends `{"status":"busy"}` on the topic `kiosk/pi1/status`.

## Done
<img src="public/images/kiosk/add-contact.png" alt="init" width="200"/>

The station sends `{"status":"ack"}` on the topic `kiosk/pi1/status`.

## Error
<img src="public/images/kiosk/error.png" alt="init" width="200"/>

The station sends `{"status":"nack"}` on the topic `kiosk/pi1/status`.


