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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', function(){
  $recebevalores =  DB::table('categorias')->get();
     foreach($recebevalores as $valores){
         echo"id: ".$valores->id. ";";
         echo" nome: ".$valores->nome. "<br>";
     }
     echo "<hr>";
     
     $nomes = DB::table('categorias')->pluck('nome');
     foreach($nomes as $nome){
         echo "$nome <br>";
     }
    
     echo "<hr>";

     $cats = DB::table('categorias')->where('id',1)->get();
     foreach($cats as $cat){
         echo "id: ". $cat->id.";";
         echo "nome" . $cat->nome . "<br>";
     }
    
     echo "<hr>";

     echo "<p>retorna um array utilizando um like</p>";
     $cats = DB::table('categorias')->where('nome','like','%p%')->get();

     foreach($cats as $cat){
         echo "id: ". $cat->id . ";";
         echo "nome: ". $cat->nome . "<br>";
     }

     echo "<hr>";
     
     echo "<p><b>Sentenças logicas</b></p>";
     $cats = DB::table('categorias')->where('nome','like','%p%')->orWhere('id',2)->get();

     foreach($cats as $cat){
         echo "id: ". $cat->id . ";";
         echo "nome: ". $cat->nome . "<br>";
     }

     echo "<hr>";
     
     echo "<p><b>intervalos</b></p>";
     $cats = DB::table('categorias')->whereBetween('id',[1,2])->get();

     foreach($cats as $cat){
         echo "id: ". $cat->id . ";";
         echo "nome: ". $cat->nome . "<br>";
     }

     echo "<hr>";
     
     echo "<p><b>Conjuntos</b></p>";
     $cats = DB::table('categorias')->whereIn('id',[1,3,4])->get();

     foreach($cats as $cat){
         echo "id: ". $cat->id . ";";
         echo "nome: ". $cat->nome . "<br>";
     }
    
     echo "<hr>";
     
     echo "<p><b>Conjuntos</b></p>";
     $cats = DB::table('categorias')->whereNotIn('id',[1,3,4])->get();

     foreach($cats as $cat){
         echo "id: ". $cat->id . ";";
         echo "nome: ". $cat->nome . "<br>";
     }

     echo "<p><b>Sentencas logicas</b></p>";
     $cats = DB::table('categorias')->where([
          ['id',1],
          ['nome','Roupas']
     ])->get();

     foreach($cats as $cat){
         echo "id: ". $cat->id . ";";
         echo "nome: ". $cat->nome . "<br>";
     }

     echo "<p><b>ordenando por nome</b></p>";
     $cats = DB::table('categorias')->orderBy('nome')->get();

     foreach($cats as $cat){
         echo "id: ". $cat->id . ";";
         echo "nome: ". $cat->nome . "<br>";
     }

     echo "<p><b>ordenando por nome decrecente</b></p>";
     $cats = DB::table('categorias')->orderBy('nome','desc')->get();

     foreach($cats as $cat){
         echo "id: ". $cat->id . ";";
         echo "nome: ". $cat->nome . "<br>";
     }
 
});


Route::get('/novascategorias',function(){  //função inserir dados atraves do id
  $id = DB::table('categorias')->insertGetId([
       ['nome'=>'Alimentos']

   ]);
   echo "Novo ID = $id <br>";
});

Route::get('/atualizandocategorias',function(){   //função alterar dados com update
        $cat = DB::table('categorias')->where('id',1)->first();
        echo "<p>Antes da atualização</p>";
        echo "id: " . $cat->id . ";";
        echo "nome: " . $cat->nome . "<br>";
        DB::table('categorias')->where('id',1)
        ->update(['nome' => 'Roupas de batata']);
        $cat = DB::table('categorias')->where('id',1)->first();
        echo "<p>Depois da atualização</p>";
        echo "id: " . $cat->id . ";";
        echo "nome: " . $cat->nome . "<br>";

 });

 Route::get('/removendocategorias',function(){   //função remover dados com delete
    echo"<p> ANTES da remoção</p>";
    $cat = DB::table('categorias')->where('id',1)->first();
    echo "<p>Antes da atualização</p>";
    echo "id: " . $cat->id . ";";
    echo "nome: " . $cat->nome . "<br>";
    DB::table('categorias')->where('id',1)
    ->update(['nome' => 'Roupas de batata']);
    $cat = DB::table('categorias')->where('id',1)->first();
    echo "<p>Depois da atualização</p>";
    echo "id: " . $cat->id . ";";
    echo "nome: " . $cat->nome . "<br>";

});