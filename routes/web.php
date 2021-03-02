<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RuralPropertyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('products',ProductController::class)
    ->middleware(['auth:sanctum']);
Route::resource('rural-properties', RuralPropertyController::class)
    ->middleware(['auth:sanctum']);