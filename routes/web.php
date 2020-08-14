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





Route::get('pedido/','Cadastro@index') ->name ('home');
Route::get('pedido/create','Cadastro@create')->name ('create') ;
Route::post('pedido/create','Cadastro@save')->name ('store') ;
Route::get('pedido/{id}','Cadastro@show')->name ('show') ;
Route::get('pedido/{id}/edit','Cadastro@edit')->name ('edit') ;
Route::put('pedido/update/{id}','Cadastro@update')->name ('update');
Route::delete('pedido/{id}', 'Cadastro@destroy')->name ('delete') ;
Route::any('pedido/search' , 'Cadastro@search')->name ('search') ;
Route::get('/cadastrar', function () {return view('CreateView');});
Route::get('/', function () {return redirect('pedido/');
});
