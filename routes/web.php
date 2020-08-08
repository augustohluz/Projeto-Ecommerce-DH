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
    return view('index');
});

Route::get('/bicicletas', 'NavegacaoController@listarBicicletas')->name('bicicletas');

Route::get('/detalhes/{produto}', 'NavegacaoController@listarDetalhe');





Route::get('/patinetes', 'NavegacaoController@listarPatinetes')->name('patinetes');

Route::get('/monociclos', 'NavegacaoController@listarMonociclos')->name('monociclos');

Route::get('/motos', 'NavegacaoController@listarMotos')->name('motos');







Route::get('/contato', function () {
    return view('contato');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/politicas', function () {
    return view('politicas');
});

Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho');

Route::delete('/carrinho/remove{id}', 'CarrinhoController@delete');

/*Route::get('/auth/registro', function () {
    return view('registro');
});*/

Route::get('/termos', function () {
    return view('termos');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
