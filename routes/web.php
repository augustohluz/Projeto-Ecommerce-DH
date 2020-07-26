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

Route::get('/bicicletas', function () {
    return view('bicicletas');
});

Route::get('/motos', function () {
    return view('motos');
});

Route::get('/monociclos', function () {
    return view('monociclos');
});

Route::get('/patinetes', function () {
    return view('patinetes');
});

Route::get('/detalhes', function () {
    return view('detalhes');
});

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

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/termos', function () {
    return view('termos');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
