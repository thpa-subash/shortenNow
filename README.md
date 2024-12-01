## Shortern Now

Shorten Now is a fast and user-friendly URL shortening platform that allows you to convert long, complex web links into compact, shareable URLs effortlessly. Designed for simplicity, it requires no user authentication for shortening URLs, making it quick and accessible to everyone.

## Requirements

The following tools are required in order to start the installation.

-   [PHP: 8.1.2 or higher]
-   [Composer 2.5.1 or higher]
-   [Laravel: 10.48.25]
-   [Node: 18.17.0 or higher]

## Installation Instructions
1. **Prerequisites**
Ensure the following are installed on your system:
* PHP 8.1 or later
* Composer
* MySQL
* Node.js and npm
* A web server (Apache/Nginx)
2. **Clone the Repository**
* git clone https://github.com/thpa-subash/shortenNow.git
* cd shortenNow
3. **Install Dependencies**
* Install PHP Dependencies
```composer install```
* Install JavaScript Dependencies
```npm install```
4. **Environment Setup**
* Create a .env file by copying the example:
```cp .env.example .env```
* Configure your database in the .env file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shorten_now
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
* Generate the application key:
```php artisan key:generate```
* Database Setup
```CREATE DATABASE shorten_now;```
* Run migrations to set up the database schema:
```php artisan migrate```
* Run seeder to seed admin:
```php artisan db:seed```
5. Serve the Application
Start the development server:
```php artisan serve```
```npm run dev```
The application will be accessible at http://localhost:8000

## API Documentation
[https://documenter.getpostman.com/view/21435341/2sAYBYfARY](https://documenter.getpostman.com/view/21435341/2sAYBYfARY)