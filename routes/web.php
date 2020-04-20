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

Route::get('/', function () {
    return view('welcome');
});

Route::get('invoice/list', 'InvoiceController@index')->name('invoice.index');
Route::get('invoice', 'InvoiceController@create')->name('invoice.create');
Route::post('invoice', 'InvoiceController@store')->name('invoice.store');
Route::get('/downloadPDF/{id}', 'InvoiceController@downloadPDF');
