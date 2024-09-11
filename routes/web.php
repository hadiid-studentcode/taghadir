<?php

use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// login sebagai admin

Route::middleware([])->group(function () {
    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
});

// login sebagai guru

Route::middleware([])->group(function () {

});
