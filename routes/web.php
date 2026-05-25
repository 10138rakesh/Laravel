<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider.
|
*/

// Home Route
Route::get('/', [AppController::class, 'index']);

// Optional: /index URL
Route::get('/index', [AppController::class, 'index']);

// Route with parameter
Route::get('/about/{name}', [AppController::class, 'about']);

// Route with optional parameter
Route::get('/contact/{name?}', function ($name = null) {

    return "Hello " . $name;

});

// Welcome Route
Route::get('/welcome', [AppController::class, 'welcome']);

// Named Route
Route::get('/profile', function () {

    return "Hello world";

})->name('profile');