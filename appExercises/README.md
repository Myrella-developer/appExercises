# appExercises - API for User and Activity Management

This project is a RESTful API developed in Laravel 11 for managing users and activities. It allows for the registration, updating, deletion, and querying of users, as well as the creation, querying, importing, and exporting of activities. Data is exported in JSON format.

## Requirements

- PHP 8.1 or higher
- Composer
- Laravel 11
- MySQL or MongoDB (depending on your database configuration)

## Installation

1. Clone this repository:

   git clone https://github.com/Myrella-developer/appExercises.git

2. Navigate to the project directory:

   cd appExercises

3. Install dependencies:

   composer install

4. Copy the example environment file:

   cp .env.example .env

5. Set up your database configuration in the .env file.

6. Generate the application key:

   php artisan key:generate

7. Run the database migrations:

   php artisan migrate

8. If you are using the command to install the API, make sure to run:

   php artisan install:api

9. Start the development server:

   php artisan serve

## Using the API

The API will be available at http://localhost:8000. You can test the endpoints using tools like Postman or cURL. Activities data can be exported in JSON format.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
