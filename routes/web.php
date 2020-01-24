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


Route::get('/','ArticleController@welcome')->name('welcome');
Route::get('/admin/dashboard','ArticleController@dashboard')->name('dashboard');


// Article
Route::get('/admin/article','ArticleController@tableTest')->name('article');
Route::get('/admin/article/create','ArticleController@create')->name('articleCreate');
Route::post('/admin/article','ArticleController@store')->name('articleStore');


