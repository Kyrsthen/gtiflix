<?php

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