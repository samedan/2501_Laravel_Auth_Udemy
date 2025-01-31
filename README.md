### Source Udemy

> https://www.udemy.com/course/build-complete-laravel-restaurant-and-food-ordering-ecommerce-system/learn/lecture/38820316#overview

### Source Git :

https://github.com/websolutionus/udemy_restaurant_foodpark/blob/main/main-files/app/Http/Controllers/Admin/AdminDashboardController.php

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

> AdminDashboardController -> return view('admin.dashboard.index');

### Admin User Middleware

> php artisan make:middleware RoleMiddleware

# Add it to App

> Kernel.php -> 'role' => \App\Http\Middleware\RoleMiddleware::class,

# Route middleware

> web.php -> Route::get('admin/dashboard', [AdminDashboardController::class,'index'])->middleware('auth', 'role:admin')

# Default redirection from admin login

> http/Controllers/Auth/AuthenticatedSessionController.php -> return redirect()->intended(RouteServiceProvider::HOME);

# Declare route for admin

> Providers/RouteServiceProvider.php -> public const ADMIN = 'admin/dashboard';

### New Route file for Admin

> /routes/admin.php

> Providers/RouteServiceProvider.php -> Route::middleware(['web', 'auth', 'role:admin'])

# Admin routes in group

< /routes/admin.php -> Route::group(['prefix' => 'admin', 'as' => 'admin.'])

### Admin CSS template

> /views/admin/dashboard/index.blade.php -> @extends('admin.layouts.master'), @section('content')

> /views/admin/layouts/master.blade.php -> @yield('content')

### Easy snippet

### Toastr

> https://github.com/yoeunes/toastr

> https://github.com/CodeSeven/toastr

> frontend/master.blade.php -> foreach(error)

### Reset password ask page

> PasswordResteLinkController.php -> toastr('Reset link sent into your email.', 'success');

> forgot-password.blade.php

# Check password reset page

> reset-password.blade.php

### Login page for Admin

# view

> /resources/views/admin/auth/login.blade.php

# controller

> php artisan make:controller Admin/AdminAuthController

# route

> web.php -> Route::get('admin/login', [AdminAuthController::class,'index'])->name('admin.login');
