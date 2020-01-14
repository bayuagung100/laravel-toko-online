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
//Utama@index itu Utama adalah controllernya dan index adalah function di controllernya
Route::get('/', 'Utama@index');
Route::post('/pushData', 'Utama@store');