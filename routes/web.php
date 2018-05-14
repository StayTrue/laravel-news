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
Route::get('/', 'NewsController@index');
Route::get('news/{id}', 'NewsController@view');
Route::get('manager', 'NewsController@admin');
Route::get('category/{id}', 'NewsController@browse_by_category');
Route::get('news/{id}/edit', 'NewsController@edit');
Route::post('news/{id}/update', 'NewsController@update');
Route::get('news/{id}/delete', 'NewsController@delete');
Route::get('manager/new', 'NewsController@new');
Route::post('manager/create', 'NewsController@create');
// Categories
Route::get('category/{id}/delete', 'CategoryController@delete');
Route::get('category/{id}/edit', 'CategoryController@edit');
Route::post('category/{id}/update', 'CategoryController@update');
Route::get('manager/categories', 'CategoryController@admin');
Route::get('manager/categories/new', 'CategoryController@new');
Route::post('manager/category/create', 'CategoryController@create');
