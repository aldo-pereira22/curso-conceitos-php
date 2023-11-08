<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = "Aldo Pereira";
    $idade = 30;
    $profissao = "Programador";

    $arr = [100, 200, 300, 400, 500];

    $nomes = ["Aldo", "João", "MAtheus", "Maria"];

    return view('welcome',
        [   
            'nome' => $nome, 'idade' => $idade, 'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});


Route::get('/produtos/{id}', function ($id) {
    return view('product', ['id' => $id]);
});
