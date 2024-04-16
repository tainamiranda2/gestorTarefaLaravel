<?php

use App\Http\Controllers\ProjetoController;
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
Route::get('/user/create',[ProjetoController:: class, 'create']);
Route::post('/user',[ProjetoController:: class, 'store']);

//tarefa
Route::get('/tarefa/create',[ProjetoController:: class, 'create']);
Route::post('/tarefa',[ProjetoController:: class, 'store']);
