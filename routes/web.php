<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('paginas/index');
});

Route::get('/index', function (){
    return view('paginas/index');
});
/*
Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});*/

route::get('/cadastrar',[\App\Http\Controllers\registrarAtividadeController::class,'index']);
route::get('/cadastrar/salvar',[\App\Http\Controllers\registrarAtividadeController::class,'store']);
route::get('/consultar',[\App\Http\Controllers\registrarAtividadeController::class,'consultar']);
route::get('/editar/{id}',[\App\Http\Controllers\registrarAtividadeController::class,'editar']);
route::get('/atualizar/{id}',[\App\Http\Controllers\registrarAtividadeController::class,'atualizar']);
route::get('/excluir/{id}',[\App\Http\Controllers\registrarAtividadeController::class,'excluir']);
