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

Route::get('/home', 'HomeController@index')->name('home');
Route::GET('/transactions', 'Transaction\TransactionController@index')->name('transactions.index');
Route::POST('/transactions', 'Transaction\TransactionController@store')->name('transactions.store');

Route::get('/userloan', 'UserLoanController@index')->name('userloan.index');

Route::resource('/loancondition', 'LoanConditionController');
