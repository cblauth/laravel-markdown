# LARAVEL MARKDOWN CMS

## Running the application using Docker

* Clone the project
```
git clone https://github.com/cblauth/laravel-markdown.git
```
* Open project folder
```
cd laravel-markdown
```
* Rename the file .env.example to .env
```
mv .env.example .env
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
 * Create all the Database tables using Laravel migration
```
docker-compose exec app php artisan migrate
```
 * Open your browser and access
```
http://localhost:8000
```

## Using the CMS

* Access the CMS public URL to read the posts
```
http://localhost:8000
```
* Register a user to be able to create posts
```
http://localhost:8000/register
```
* Login with the new credentials
```
http://localhost:8000/login
```

