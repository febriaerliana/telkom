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

Route::get('brankas', 'Frontpage\BrankasController@index')->name('frontpage.brankas');
Route::get('brankas/create', 'Frontpage\BrankasController@create')->name('frontpage.brankas.create');