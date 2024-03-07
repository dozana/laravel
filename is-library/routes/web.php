<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Italian School Library System
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('categories', CategoryController::class);

Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
Route::resource('books', BookController::class);



