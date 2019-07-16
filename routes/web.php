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

Route::group(['middleware' => 'web'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/clientes', 'ClientesController@index')->name('clientes');
    Route::any('/clientes/novo', 'ClientesController@novo')->name('clientesNovo');
    Route::get('clientes/{cliente}/editar', 'ClientesController@editar')->name('clientesEditar');
    Route::patch('clientes/{cliente}', 'ClientesController@atualizar')->name('clientesAtualizar');
    Route::any('clientes/{cliente}/excluir', 'ClientesController@excluir')->name('clientesExcluir');
    Route::post('clientes/salvar', 'ClientesController@salvar')->name('clientesSalvar');
    Route::delete('clientes/{cliente}', 'ClientesController@excluir')->name('clientesDelete');
});
