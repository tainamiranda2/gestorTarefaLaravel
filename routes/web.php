<?php

use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/',[ProjetoController:: class, 'index']);
//Route::get('/projeto',[ProjetoController:: class, 'index']);
Route::get('/projeto/create',[ProjetoController:: class, 'create']);
Route::get('/projeto/{id}',[ProjetoController:: class, 'show']);
Route::post('/projeto',[ProjetoController:: class, 'store']);
Route::delete('/projeto/{id}',[ProjetoController:: class, 'destroy']);
Route::get('/projeto/edit/{id}',[ProjetoController:: class, 'edit']);
Route::put('/projeto/update/{id}',[ProjetoController:: class, 'update']);

//user
Route::get('/user/create',[UserController:: class, 'create']);
Route::post('/user',[UserController:: class, 'store']);

//tarefa
Route::get('/tarefa/create',[TarefaController:: class, 'create']);
Route::post('/tarefa',[TarefaController:: class, 'store']);
