<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index (){
      $projetos=Projeto::all();
      
        return view('welcome',['projetos'=> $projetos]);
    
    }
    public function create (){
        return view('projetos.create');
    }
}
