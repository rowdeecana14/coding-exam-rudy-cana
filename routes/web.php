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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/article')->group(function() {
    Route::get('/list', 'ArticleController@list')->name('article.list');
    Route::get('/create', 'ArticleController@create')->name('article.create');
    Route::post('/store', 'ArticleController@store')->name('article.store');
    Route::get('/edit/{id}', 'ArticleController@edit')->name('article.edit');
    Route::get('/delete/{id}', 'ArticleController@delete')->name('article.delete');
    Route::put('/update/{id}', 'ArticleController@update')->name('article.update');
    Route::get('/show/{id}', 'ArticleController@show')->name('article.show');


});
