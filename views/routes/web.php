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

Route::get('/primeiraview', function(){
      return view('minhaview');
});

Route::get('/ola',function(){
    return view('minhaview')
    ->with('nome','Salim')
    ->with('sobrenome','hamad');
});

Route::get('/ola/{nome}/{sobrenome}',function($nome,$sobrenome){

    /*
    ->with('nome',$nome)s
    ->with('sobrenome',$sobrenome);     
    */

    /*
    $parametros = ['nome'=>$nome, 'sobrenome'=>$sobrenome];   -array: associativo
    return view('minhaview',$parametros);
    */
    return view('minhaview', compact('nome','sobrenome'));

});

Route::get('/email/{email}',function($email){
   if(View::exists('email'))
        return view('email',compact('email'));
   else
        return view('erro');
});

Route::get('/app', function () {
    return view('filho');
});

Route::get('/produtos','ProdutoControlador@listar');

Route::get('/secaoprodutos/{palavra}'
           ,'ProdutoControlador@secaoprodutos');

Route::get('/mostraropcoes','ProdutoControlador@mostrar_opcoes');

Route::get('/opcoes/{opcao}','ProdutoControlador@opçoes'); //switch case

Route::get('/loop/for/{n}/','ProdutoControlador@loopFor');

Route::get('/loop/foreach','ProdutoControlador@loopForeach');
