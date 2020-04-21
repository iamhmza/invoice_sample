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

Route::get('organizations', 'OrganizationController@index')->name('organization.index');
Route::get('organization', 'OrganizationController@create')->name('organization.create');
Route::post('organization', 'OrganizationController@store')->name('organization.store');
Route::get('/downloadPDF/{id}', 'OrganizationController@downloadPDF');
Route::get('/preview/{id}', 'OrganizationController@preview');

Route::get('organization/{org_id}/clients', 'ClientController@index')->name('client.index');
Route::get('client', 'ClientController@create')->name('client.create');
Route::post('client', 'ClientController@store')->name('client.store');
