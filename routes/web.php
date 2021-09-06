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
//Route::group(array('before' => 'guest'), function () {

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('/admin', 'HomeController@login');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::any('/supplier', 'SupplierController@index');
    Route::any('/supplier/ajax_datagrid', 'SupplierController@ajax_datagrid');
    Route::any('/supplier/add', 'SupplierController@addSupplier');
    Route::any('/supplier/{id}/update', 'SupplierController@update');
    Route::any('/supplier/{id}/delete', 'SupplierController@delete');
});

//Auth::routes();


Route::get('/', 'IndexController@index');
Route::get('/about', 'IndexController@about');
Route::get('/price', 'IndexController@price');
Route::get('/video', 'IndexController@video');
Route::get('/contact', 'IndexController@contact');

//});
