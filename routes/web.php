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

Route::post('/register', 'Auth\\RegisterController@register')->name('auth.register');
Route::post('/login', 'Auth\\LoginController@login')->name('auth.login');
Route::post('/logout', 'Auth\\LoginController@logout')->name('auth.logout');

Route::get('/about', 'Home\\HomeController@about')->name('home.about');

Route::get('/contact', 'Home\\HomeController@contact')->name('home.contact');

Route::get('/', 'Home\\HomeController@index')->name('home.index');
