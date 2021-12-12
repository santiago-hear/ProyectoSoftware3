<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RolController;

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
})->name('welcome');

Route::prefix('dashboard')->group(function() {
    /* Llamamos a las rutas del controlador PostController tipo resource*/
    // Route::resource('post', PostController::class) -> middleware('auth'); //solo funciona cuando es tipo resource
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

Auth::routes();
Route::resource('rol', RolController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
