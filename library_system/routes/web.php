<?php

use App\Http\Controllers\BookCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/book-categories', [BookCategoryController::class, 'index']);
