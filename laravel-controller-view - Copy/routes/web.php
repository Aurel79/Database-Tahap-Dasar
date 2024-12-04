<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

// home kiri itu untuk akses url dan yang kanan untuk navbar yang ada di file home.blade.php/
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('profile', ProfileController::class)->name('profile');
Route::resource('employees', EmployeeController::class);
