<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\RuralPropertyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => view('welcome'));

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum']) 
    ->group(
        function () {
            Route::resource('rural-properties.products',ProductController::class);
            Route::resource('rural-properties.products.photos',PhotoController::class)->only(['destroy','store']);
            Route::resource('rural-properties', RuralPropertyController::class);
        }
    );



    Route::resource('shopping-cart', ShoppingCartController::class)
    ->middleware(['auth:sanctum']);