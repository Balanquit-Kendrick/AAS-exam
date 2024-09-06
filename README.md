How to start this application:

Make sure to install composer,php, and mysql 8:
  ref: https://getcomposer.org/download/
  ref: https://www.php.net/downloads
  ref: https://dev.mysql.com/downloads/installer/

1. Go to terminal(ctrl+~)
2. Enter "composer install"
3. Create a file named ".env" and insert the code from below
4. After the installation and creating .env file, Enter "php artisan migrate" in the terminal
5. Make sure that the DB_Password in the .env file is the same as the password in your database client server/workbench
6. After the migration, Enter "php artisan serve" in the terminal
7. Go to the link or url that is displayed in the terminal using your browser and now you can navigate the application.
8. I have included the postman collection file in this repository also.

NOTE: Unfortunately this is the only output that I have produced with the limited time I have due to the reason that I have work also.
I hope that this output have met at least of your expectation.

.env code

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:Hf1X+KWEOV6TDZ+Cjr9ymjnkcDKEmyW2rfxs8dZuX/0=
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=Password123

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"




