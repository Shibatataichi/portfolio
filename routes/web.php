<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'HomeController@viewindex');

Route::get('/about', 'HomeController@viewabout')->name('about');

Route::get('/works', 'HomeController@viewworks')->name('works');

//お問い合わせフォームのページを表示
Route::get('/contact','ContactController@create')->name('contact');

//お問い合わせフォームの内容を保存
Route::post('/contact/store','ContactController@store')->name('contact.store');