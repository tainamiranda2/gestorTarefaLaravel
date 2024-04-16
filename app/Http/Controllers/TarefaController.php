<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function create (){
        return view('tarefas.create');
    }

    public function store (Request $request){
        $tarefa=new Tarefa;
       $tarefa->name=$request->name;
       
       $tarefa->descricao=$request->descricao;
       $tarefa->status=$request->status;
       $tarefa->projeto_id=$request->projeto_id;
$tarefa->save();
//enviando mensagens ao usuario com flahs msg
return redirect('/')->with('msg', 'Projeto criado com sucesso!');

    }
}
