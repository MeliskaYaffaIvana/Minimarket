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
    return view('welcome');
});


Auth::routes();

 Route::middleware('auth')->group(function(){

Route::get('/home', 'HomeController@index');

// Route::get('/home', 'HomeController@index')->name('home');


Route::resource('categories', 'CategoryController');
Route::resource('items', 'ItemController');
Route::get('item/{id}', 'ItemController@search');
Route::resource('customers', 'CustomerController');
Route::resource('suppliers', 'SupplierController');
Route::resource('users', 'UserController');
Route::resource('purchases', 'PurchaseController');
Route::get('purchases/pdf/{id}', 'PurchaseController@print')->name('purchases.pdf');

Route::resource('sales', 'SaleController');
Route::get('sales/pdf/{id}', 'SaleController@print')->name('sales.pdf');

// Route::get('/sales/{id}/pdf', 'SaleController@cetak_pdf');
 });






Route::resource('penilaians', 'penilaianController');

Route::resource('cobas', 'cobaController');