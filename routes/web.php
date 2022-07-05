<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->name('home');

Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/producto','App\Http\Controllers\ProductoWebController@index')->name('producto');
Route::resource('producto', \App\Http\Controllers\ProductoWebController::class);

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::resource('users', App\Http\Controllers\UserController::class);

    Route::resource('categorias', App\Http\Controllers\CategoriaController::class);


    Route::resource('productos', App\Http\Controllers\ProductoController::class);
});




