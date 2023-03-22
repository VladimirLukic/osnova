<?php

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

/*| Nacini pisanja ruta

Route::view('/home', 'home');
Route::get('/home', [HomeController::class, 'home']);
Route::get('/home', function () {
    return view('home');
});
*/

Auth::routes();
Auth::routes(['register' => false]); //iskljucio sam rutu ka registraciji

Route::view('/', 'dashboard');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', UsersController::class);

