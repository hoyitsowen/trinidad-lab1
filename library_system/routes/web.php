<?php

use App\Http\Controllers\BookCategoryController;
use Illuminate\Support\Facades\Route;

// Display all categories
Route::get('/book-categories', [BookCategoryController::class, 'index'])->name('book-categories.index');

// Show the "Add Category" form
Route::get('/book-categories/form', [BookCategoryController::class, 'form'])->name('book-categories.form');

// Handle form submission
Route::post('/book-categories', [BookCategoryController::class, 'store'])->name('book-categories.store');
