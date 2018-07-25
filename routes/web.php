<?php

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

Auth::routes();

// Page d'accueil
Route::get('/', 'AppController@accueil')->name('accueil');

// Mon compte
Route::get('/mon-compte', 'AccountController@account')->name('mon-compte');
