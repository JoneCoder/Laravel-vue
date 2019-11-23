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
    'uses' => 'FrontendController@index',
    'as' => 'home'
]);

Route::get('/about', [
    'uses' => 'FrontendController@about',
    'as' => 'about'
]);

Route::get('/test', [
    'uses' => 'FrontendController@test',
    'as' => 'test'
]);

Route::post('/form/data', [
    'uses' => 'FrontendController@create',
    'as' => 'create'
]);