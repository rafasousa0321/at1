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

Route::get('toni', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    echo('olá mundo');
});

Route::get('/', function () {
   echo('<h1>Olá mundo</h1>'); 
});

Route::get('/bem-vindo/aedah', function (){
    echo('<h1>esta é só para o Agrupamento :)</h1>');
});

Route::get('/nome/{nome}', function ($nome){
    echo('<h1>Olá '. $nome .'</h1>');
});

Route::get('/nome/{nome}/{apelido}', function ($nome, $apelido){
    echo('<h1>Olá '. $nome .' '. $apelido .'</h1>');
});

Route::get('/nomes/{nome}/{vezes}',function($nome, $vezes) {
    $vezes=is_numeric ($vezes) ? $vezes : 5;
    for($i=1; $i <= $vezes; $i++){
        echo($nome);
        echo('<br>');
    }
});

Route::get('welcome', function(){
    return view('bemvindo');
});