<?php

use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\Route;




Route::get('/',[ProjetoController:: class, 'index']);
//Route::get('/projeto',[ProjetoController:: class, 'index']);
Route::get('/projeto/create',[ProjetoController:: class, 'create']);

Route::post('/projeto',[ProjetoController:: class, 'store']);
