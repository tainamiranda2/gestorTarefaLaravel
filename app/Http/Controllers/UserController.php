<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create (){
        return view('usuarios.create');
    }

    public function store (Request $request){
        $usuario=new User;
       $usuario->name=$request->name;
       
       $usuario->email=$request->email;
       $usuario->password=$request->password;
   //    $usuario->user_id=$request->user_id;
$usuario->save();
//enviando mensagens ao usuario com flahs msg
return redirect('/')->with('msg', 'Usuario criado com sucesso!');

    }
}
