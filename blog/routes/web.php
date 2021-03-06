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

Route::get('/', [
    'uses' =>   'FrontendController@index',
    'as' => 'index'
]);

Route::get('/about', [
    'uses' => 'FrontendController@about',
    'as' => 'about'
]);

Route::get('/products', [
    'uses' => 'ProductController@product',
    'as' => 'product'
]);

Route::get('/store', [
    'uses' => 'StoreController@store',
    'as' => 'store'
]);

Auth::routes();

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/dashboard', [
    'uses' => 'AccountController@index',
    'as' => 'dashboard'
]);

Route::get('/home/add/categories', [
    'uses' => 'CategoryController@addCategory',
    'as' => 'addcategory'
]);

Route::post('/home/new/categories', [
    'uses' => 'CategoryController@add',
    'as' => 'category'
]);

Route::get('/home/manage/categories', [
    'uses' => 'CategoryController@manage',
    'as' => 'manage_category'
]);

Route::get('/home/manage/categories/status/{id}', [
    'uses' => 'CategoryController@action',
    'as' => 'action'
]);

Route::get('/home/manage/categories/edit/{id}', [
    'uses' => 'CategoryController@edit',
    'as' => 'edit'
]);

Route::post('/home/manage/categories/edit', [
    'uses' => 'CategoryController@update',
    'as' => 'edit_category'
]);

Route::get('/home/manage/categories/delete/{id}', [
    'uses' => 'CategoryController@delete',
    'as' => 'delete'
]);
