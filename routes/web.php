<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\Diretor;
use App\Models\Nacionalidade;
use App\Models\Filme;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Kyrsthen', function () {
    echo 'Olá kyrsthen';
});

Route::get('/filmes/{filme}', function ($filme) {
    echo 'Acessando dados do filme: '. $filme;
});

Route::view('/conheca', 'sobre');

Route::get('/generos', function () {
    $minhaVariavel = Genero::all(); //select from generos
    dd($minhaVariavel); //exibe informações na tela
});

Route::get('/atores', function () {
    $minhaVariavel = Ator::all(); //select from Ator
    dd($minhaVariavel); //exibe informações na tela
});

Route::get('/diretores', function () {
    $minhaVariavel = Diretor::all(); //select from generos
    dd($minhaVariavel); //exibe informações na tela
});

route::get('/nacionalidades', function() {
    $nacionalidade = Nacionalidade::all();
    dd($nacionalidade);
 });

 route::get('/filmes', function() {
    $filme = Filme::all();
    dd($filme);
 });