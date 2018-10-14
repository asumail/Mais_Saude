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

Auth::routes();

Route::get('/admin', 'HomeController@admin')->name('admin');

Route::resource('/perfil', 'PerfilController');


Auth::routes();

Route::get('/paciente-controle', function (){
    return 'Eu sou um paciente e a magia começa aqui...';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
