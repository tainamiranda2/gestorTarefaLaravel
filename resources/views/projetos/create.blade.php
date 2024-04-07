@extends('layouts.main')

@section('title', 'Gerenciar Projetos')
@section('content')


<div id="projeto-create-container" class="col-md-6 offset-md-3">
<h1>Criar rojetos</h1>
<form action="/projetos" method="posts">

<div class="form-group">
    <label for="nome">Nome do projeto</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Informe o nome">
</div>

<div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Informe a descrição">
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status">
<option value="ativo">Ativo</option>
<option value="desativado">Desativado</option>

    </select>
</div>


<div class="form-group">
    <label for="nome">nome</label>
    <input type="text" class="form-control" id="name" placeholder="Informe o nome">
</div>


</form>
</div>
@endsection

