# Studee Code Test

(c) Rhys Laval 2019

## Running

Pull this git repository down and run the following commands:

- `cp .env.example .env` to create a basic config which uses an SQLLite Database
- `composer install` to grab the required packages.
- `php artisan key:generate` to set the app key
- `touch database/database.sqlite` to create an sqlite db
- `php artisan db:seed` seed the db with a dummy post
- `php artisan serve` to start a simple PHP webserver 

To run the above, you'll need PHP with Laravel extension requirements.
