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


Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/main/create', 'App\Http\Controllers\MainController@create')->name('main.create');
Route::post('/main','App\Http\Controllers\MainController@store')->name('main.store');
Route::get('/main/{post}','App\Http\Controllers\MainController@show')->name('main.show');
Route::get('/main/{post}/edit','App\Http\Controllers\MainController@edit')->name('main.edit');
Route::patch('/main/{post}','App\Http\Controllers\MainController@update')->name('main.update');
Route::delete('/main/{post}','App\Http\Controllers\MainController@destroy')->name('main.delete');

Route::get('/post', 'App\Http\Controllers\PostController@index')->name('post.index');


Route::get('/main/update', 'App\Http\Controllers\MainController@update');
Route::get('/main/delete', 'App\Http\Controllers\MainController@delete');
Route::get('/main/first_or_create', 'App\Http\Controllers\MainController@first_or_create');

