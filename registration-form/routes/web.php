<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;

Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'submitForm'])->name('register.submit');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/submit-form', [UserController::class, 'register'])->name('submit-form');

