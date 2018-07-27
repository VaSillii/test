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

Route::get('/', 'BaseController@showPage')->name('/');

Route::get('/page', 'PageController@showPage')->name('page');

//Добавление статей 
Route::get('/page/add', 'ArticleController@addArticle')->name('addArticle');
Route::post('/page/add', 'ArticleController@addRequestArticle');

// Редактирование статей
Route::get('page/edit', 'ArticleController@editArticle')->name('editArticle');
Route::post('page/edit', 'ArticleController@editRequestArticle');

// Переход к полному тексту статей
Route::get('page{id}', 'PageController@showPage')->where('id', '\d+')->name('fullDescription');

//Комментарий
Route::post('page{id}', 'PageController@commentRequest')->where('id', '\d+');