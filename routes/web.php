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
Route::get('manager', 'NewsController@admin');
Route::get('manager/new', 'NewsController@new');
Route::post('manager/create', 'NewsController@create');
Route::get('manager/categories', 'CategoryController@admin');
Route::get('manager/categories/new', 'CategoryController@new');
Route::post('manager/category/create', 'CategoryController@create');
