<?php
// Admin

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // /admin/dashboard => view admin.dashboard
    Route::get('dashboard', [AdminDashboardController::class,'index'])->name('dashboard');

});



