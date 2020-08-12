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

/* Route::resource('/teste', 'Cadastro') ; */

/*
Route::post('nomeempresa/login','EmpresaController@login');
Route::get('nomeempresa/login','EmpresaController@login') ->name ('login');
Route::get('nomeempresa/{id}/edit','EmpresaController@edit');
Route::get('nomeempresa/update/{id}','EmpresaController@update');
Route::get('nomeempresa/create','EmpresaController@create');
Route::get('nomeempresa/{id}','EmpresaController@show');
Route::post('nomeempresa/create','EmpresaController@store')->name ('salvar') ;


*/

Route::get('teste/','Cadastro@index') ->name ('home');
Route::get('teste/create','Cadastro@create')->name ('create') ;
Route::post('teste/create','Cadastro@save')->name ('store') ;
Route::get('teste/{id}','Cadastro@show')->name ('show') ;
Route::get('teste/{id}/edit','Cadastro@edit')->name ('edit') ;
Route::put('teste/update/{id}','Cadastro@update')->name ('update') ;
Route::delete('teste/{id}', 'Cadastro@destroy')->name ('delete') ;
Route::any('teste/search' , 'Cadastro@search')->name ('search') ;

Route::get('/cadastrar', function () {
    return view('CreateView');
});
