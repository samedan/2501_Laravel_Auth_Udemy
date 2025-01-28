### Source Udemy

> https://www.udemy.com/course/build-complete-laravel-restaurant-and-food-ordering-ecommerce-system/learn/lecture/40032480#overview

### This Git

> https://github.com/samedan/2501_Laravel_Auth_Udemy

### Install Laravel 10 & Breezze

> composer require laravel/breeze --dev

### Install Laravel IDE helper

> https://github.com/barryvdh/laravel-ide-helper

> ~> \_ide_helper.php

> php artisan serve

### Changed User -> Admin migrations

> php artisan migrate:fresh

> php artisan make:seeder UserSeeder

> Add UserSeeder to /database/seeders/DatabaseSeeder.php

## Seed users into the DBB

> php artisan db:seed

### Different Dashboard fro User <-> Admin

> php artisan make:controller Admin/AdminDashboardController

# Added Admin View

> /resources/views/admin/dashboard/index.php

> AdminDashboardController ->
