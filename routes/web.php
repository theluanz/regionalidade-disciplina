<?php

use App\Http\Controllers\ProductController;
<<<<<<< HEAD:regionalidade-app/routes/web.php
use App\Http\Controllers\MusicController;
=======
use App\Http\Controllers\RuralPropertyController;
>>>>>>> upstream/main:routes/web.php
use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
<<<<<<< HEAD:regionalidade-app/routes/web.php
Route::resource('products', ProductController::class)
  ->middleware(['auth:sanctum']);

Route::resource('musics', MusicController::class)
  ->middleware(['auth:sanctum']);
=======
Route::resource('products',ProductController::class)
=======
Route::resource('rural-properties.products',ProductController::class)
>>>>>>> a
    ->middleware(['auth:sanctum']);
    
Route::resource('rural-properties', RuralPropertyController::class)
    ->middleware(['auth:sanctum']);
>>>>>>> upstream/main:routes/web.php