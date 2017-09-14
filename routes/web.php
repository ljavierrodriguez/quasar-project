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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontendController@index')->name('pagina.principal');
Route::post('/send-email', 'FrontendController@sendEmail')->name('send-email');

Route::resource('/banners', 'BannersController', ['names' => [
    'index' => 'banners',
    'create' => 'banners.create',
    'store' => 'banners.store',
    'edit' => 'banners.edit',
    'update' => 'banners.update',
    'destroy' => 'banners.destroy',
]]);
