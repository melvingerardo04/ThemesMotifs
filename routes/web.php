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

Route::get('/', function () {
    return view('template.page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/loginBridesGroom','Auth\LoginController@loginBridesGroom')->name('loginBridesGroom');
Route::get('/loginSupplier','Auth\LoginController@loginSupplier')->name('loginSupplier');

Route::get('/registerBridesGroom','Auth\RegisterController@register')->name('registerBridesGroom');
Route::get('/registerSupplier','Auth\RegisterController@register')->name('registerSupplier');
