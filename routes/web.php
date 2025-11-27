<?php

use App\Models\Ator;
use App\Models\Filme;
use App\Models\Genero;
use App\Models\Produtora;
use App\Models\Diretor;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/luan', function() {
    echo 'Olá Luan';
});

Route::get('/filmes/{filme}', function($filme) {
    echo 'Acessando dados do filme: '. $filme;
});

Route::view('/conheca', 'sobre');



Route::get('/generos', function() {
    $minhaVariavel = Genero::all();
    dd($minhaVariavel);
});

Route::get('/atores', function() {
    $minhaNovaVariavel = Ator::all();
    dd($minhaNovaVariavel);
});

Route::get('/', function() {
    $filmes = Filme::all();
    return view('lista-filmes',
        compact('filmes'));
})->name('lista-filmes');

Route::get('/detalhes-filmes/{filmes}',
function(Filme $filme){
 return view('detalhes-filmes', compact('filme'));
})->name('detalhes-filmes');


Route::view('/login','login')->name('login');


Route::post('/logar', function (Request $request) {
    dd($request);
})->name('logar');



route::get('/lista-produtoras', function() {
   $produtoras = Produtora::all();
   return view('lista-produtoras', compact('produtoras'));
})->name('lista-produtoras');


route::get('/detalhes-produtoras/{produtora}',
function(Produtora $produtoras){
   return view('detalhes-produtoras', compact('produtora'));
})->name('detalhes-produtoras');



route::get('/lista-diretores', function() {
   $diretores = Diretor::all();
   return view('lista-diretores', 
       compact('diretores'));
})->name('lista-diretores');

route::get('/detalhes-diretores/{diretores}',
function(Diretor $diretores){
   return view('detalhes-diretores', compact('diretores'));
})->name('detalhes-diretores');



route::get('/lista-atores', function() {
   $atores = Ator::all();
   return view('lista-atores', 
       compact('atores'));
})->name('lista-atores');

route::get('/detalhes-atores/{atores}',
function(Ator $atores){
   return view('detalhes-atores', compact('atores'));
})->name('detalhes-atores');