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

Auth::routes();

Route::get('/dashboard', [
    'uses' => 'HomeController@index',
    'as' => 'dashboard'
]);

Route::get('/home', [
    'uses' => 'AdminController@index',
    'as' => 'home'
]);

Route::get('/add/employee', [
    'uses' => 'admin\EmployeeController@index',
    'as' => 'addEmployee'
]);

Route::get('/manage/employee', [
    'uses' => 'admin\EmployeeController@manage',
    'as' => 'manageEmployee'
]);

Route::post('add/employ/request', [
    'uses' => 'admin\EmployeeController@store',
    'as' => 'employ_request'
]);

Route::post('/edit/employee/info/', [
    'uses' => 'AjaxController@getInfo',
    'as' => 'employ_get_info_request'
]);

Route::post('/employee/info/update', [
    'uses' => 'admin\EmployeeController@update',
    'as' => 'update'
]);

Route::post('/delete/employ', [
    'uses' => 'admin\EmployeeController@delete',
    'as' => 'delete'
]);

Route::get('recycle/bin', [
    'uses' => 'RubbishController@show',
    'as' => 'rubbish'
]);

Route::post('/employ/info/permanently/delete', [
    'uses' => 'RubbishController@delete',
    'as' => 'permanentlyDelete'
]);

Route::post('/restore/employ/info', [
    'uses' => 'RubbishController@restore',
    'as' => 'restore'
]);
