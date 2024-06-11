<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Iniciando os estudos sobre o Laravel';
});
Route::get('/sobre-nos', function () {
    return 'Página Sobre nós';
});
Route::get('/contato', function () {
    return 'Página de contato';
});
