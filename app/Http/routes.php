<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/transactions', 'TransactionsController@index');
Route::get('/searchs', 'SearchsController@index');
Route::get('/reports', 'ReportsController@index');

Route::resource('companies', 'CompaniesController',
    ['only' => ['index', 'store', 'show', 'edit', 'update', 'destroy']]);

Route::resource('customer', 'CustomersController');
Route::resource('customer.payments', 'PaymentsController');
Route::resource('customer.meals', 'MealsController');

Route::post('customer/payment', 'CustomersController@payment')->name('customer.payment');
Route::post('customer/meal', 'CustomersController@meal')->name('customer.meal');
