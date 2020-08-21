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
    return view('dash.dashboard');
});

Route::resource('clientes', 'Client\\ClientController')->names('client')->parameters(['clientes'=>'client']);
Route::resource('frutas', 'Fruit\\FruitController')->names('fruit')->parameters(['frutas'=>'fruit']);
Route::resource('vendas', 'Sale\\SaleController')->names('sale')->parameters(['vendas'=>'sale']);

Route::get('/estoque', 'Fruit\\StockController@index')->name('stock.index');

