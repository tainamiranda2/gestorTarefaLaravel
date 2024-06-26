@extends('layouts.main')

@section('title', 'Gerenciar Projetos')
@section('content')


<div id="projeto-create-container" class="col-md-6 offset-md-3">
<h1>Criar projeto</h1>
<form action="/projeto" method="post">
@csrf

<div class="form-group">
    <label for="nome">Nome do projeto</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Informe o nome">
</div>

<div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição">
    </textarea>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
<option value="ativo">Ativo</option>
<option value="desativado">Desativado</option>

    </select>
</div>

<div class="form-group">
    <label for="user_id">Usuario</label>
    <select name="user_id" id="status" class="form-control">
<option value="1">Carlos</option>

    </select>
</div>


<div class="botton-home row m-2">
    <div class="col">
    <a href="/" class="btn btn-danger">Cancelar</a>

    </div>
    <div class="col">
<input type="submit" class="btn btn-primary" value="Criar projeto">
</div>

</form>
</div>
@endsection

