# Project Title

Jackets Shop (Simple Mode)

## Description

E-Commerce website that sell jackets for buyer with simple style code

## Getting Started

### Dependencies

* Composer
* Php >= 8
* Mysql
* Internet

### Installing
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/master/installation)

Alternative installation is possible without local dependencies relying on [Docker](https://www.docker.com/products/docker-desktop/). 

Clone the repository

    git clone https://github.com/Sleepy4k/laravel-jackets-shop-simple.git

Switch to the repo folder

    cd laravel-jackets-shop-simple

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/Sleepy4k/laravel-jackets-shop-simple.git
    cd laravel-jackets-shop-simple
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations**

    php artisan migrate:fresh --seed
    php artisan serve

## Help

Any advise for common problems or issues.
```
Please create issue for detail information
```

## Authors

Contributors names and contact info

[@Sleepy4k](https://github.com/Sleepy4k)

## Version History

* 1.0.3-alpha
    * add postman
    * add project documentation
    * change response text
* 1.0.0-alpha
    * initial release
    * add main feature