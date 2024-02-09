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

/* Mais rapido e menos seguro enviam dados, dados de rotas /  o post é mais lento mas mais seguro */


Route::get('/cadastrar', [\App\Http\Controllers\cadastrarUsuario::class,'index']);
Route::post('/cadastrar/salvar',[\App\Http\Controllers\cadastrarUsuario::class, 'store']);
Route::get('/consultar',[\App\Http\Controllers\cadastrarUsuario::class, 'consultar']);

Route::get('/calendario',[\App\Http\Controllers\agenda::class,'index']);
Route::post('/calendario/salvar',[\App\Http\Controllers\agenda::class, 'store']);
Route::get('/consultarAgenda',[\App\Http\Controllers\agenda::class,'consultar']);

Route::get('login ', function(){
    return view('paginas/login');
});
Route::get('home ', function(){
    return view('paginas/home');
});

Route::get('editar ', function(){
    return view('paginas/editar');
});

Route::get('/editar/{id}', [\App\Http\Controllers\cadastrarUsuario::class, 'editar']);
Route::get('/atualizar/{id}', [\App\Http\Controllers\cadastrarUsuario::class, 'atualizar']);
Route::get('/excluir/{id}',[\App\Http\Controllers\cadastrarUsuario::class, 'excluir']);