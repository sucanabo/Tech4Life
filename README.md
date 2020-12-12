

## How to run this fucking project

- Clone your project

- Go to the folder application using cd command on your cmd or terminal

- Run composer install on your cmd or terminal

- Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows
or cp .env.example .env if using terminal, Ubuntu

- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

- Change port to 3308 in env.
- Change port 3306 to 3308 in my.ini in config MySQL (XAMPP)
- Into XAMPP folder search "config.inc.php", add this code: $cfg['Servers'][$i]['port'] = '3308';

- Run php artisan key:generate

- Run php artisan migrate

- Run php artisan serve

- Go to localhost:8000
