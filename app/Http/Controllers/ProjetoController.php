<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{

    public function index (){
        //pesquisar
        $search=request('search');
        if($search){
            $projetos=Projeto::where([
                ['name', 'like', '%' .$search. '%']
        ])->get();

        }else{
        
            $projetos=Projeto::all();
      
        }
        return view('welcome',['projetos'=> $projetos, 'search'=>$search]);

    }
    public function create (){
        return view('projetos.create');
    }

    public function store (Request $request){
        $projetos=new Projeto;
       $projetos->name=$request->name;
       
       $projetos->descricao=$request->descricao;
       $projetos->status=$request->status;
       $projetos->user_id=$request->user_id;
$projetos->save();
//enviando mensagens ao usuario com flahs msg
return redirect('/')->with('msg', 'Projeto criado com sucesso!');

    }
public function show($id){
    $projeto=Projeto::findOrFail($id);

    return view('projetos.show', ['projeto'=>$projeto]);
}

public function destroy ($id){
    Projeto::findOrFail($id)->delete();
    return redirect('/')->with('msg', 'Projeto deletado com sucesso!');

}

public function edit($id){
$projeto=Projeto::findOrFail(($id));

return view('projetos.edit', ['projeto'=>$projeto]);

}
public function update (Request $request){
    $request->validate([
        'name' => 'required',
        'descricao' => 'required',
      //  'status' => 'required',
       // 'user_id' => 'required',
    ]);
   Projeto::findOrFail($request->id)->update($request->all());
   

    // Redirecionar o usuário de volta à página inicial com uma mensagem de sucesso
    ///return redirect('/')->with('success', 'Projeto atualizado com sucesso!');


 return redirect('/')->with('msg', 'Projeto atulizado com sucesso!');

}

}

