<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/nome', 'MeuControlador@getNome');       //chama o metodo getnome

Route::get('/idade', 'MeuControlador@getIdade');

Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar'); //dentro das chaves é o parametro que recebera a rota.

Route::get('/Nome/{id}', 'MeuControlador@getNomeByID');

Route::resource('/cliente','ClienteControlador');

Route::post('/cliente/requisitar','ClienteControlador@requisitar');

 