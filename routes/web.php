<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'GuestController@index');

Auth::routes();

Route::prefix('admin') // inizio nome rotta url
    ->namespace('Admin') // cartella dove ci sono i controller
    ->middleware('auth') // autenticazione per accessp alle rotte
    ->name('admin.') // nome delle rotte
    ->group(function(){
        Route::resource('posts', 'PostController');
    });

Route::get('/home', 'HomeController@index')->name('home');


