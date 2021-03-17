# LARAVEL MARKDOWN CMS

## Running the application using Docker

* Clone the project
```
git clone https://github.com/cblauth/laravel-markdown.git
```
* Open project folder
```
cd php-rest-api
```
* Create the Docker image
```
docker-compose build app
```
* Run the environment in background mode
```
docker-compose up -d
```
* Run composer install in the container
```
docker-compose exec app composer install
```
* Generate unique application key for Laravel
```
docker-compose exec app php artisan key:generate
```
 * Open your browser and access
```
http://localhost:8000
```
