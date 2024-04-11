<?php

use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\Route;




Route::get('/',[ProjetoController:: class, 'index']);
//Route::get('/projeto',[ProjetoController:: class, 'index']);
Route::get('/projeto/create',[ProjetoController:: class, 'create']);
Route::get('/projeto/{id}',[ProjetoController:: class, 'show']);
Route::post('/projeto',[ProjetoController:: class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
