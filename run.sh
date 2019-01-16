#!/bin/bash

echo Uploading Application container 
docker-compose up -d

echo Copying the configuration example file
docker exec -it desafioUnicad-app cp .env.example .env

echo Install dependencies
docker exec -it desafioUnicad-app composer install

echo Generate key
docker exec -it desafioUnicad-app php artisan key:generate

echo Make migrations
docker exec -it desafioUnicad-app php artisan migrate

echo Make seeds
docker exec -it desafioUnicad-app php artisan db:seed

echo Information of new containers
docker ps -a 