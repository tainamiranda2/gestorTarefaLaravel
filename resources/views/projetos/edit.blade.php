@extends('layouts.main')

@section('title', 'Editando')
@section('content')


<div id="projeto-create-container" class="col-md-6 offset-md-3">
<h1>Edita projeto</h1>
<form action="/projeto/update/{{$projeto->id}}" method="post">
@csrf
@method('PUT')

<div class="form-group">
    <label for="nome">Nome do projeto</label>
    <input type="text" value="{{$projeto->name}}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Informe o nome">
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea type="text" class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" placeholder="Informe a descrição">{{ $projeto->descricao }}</textarea>
    @error('descricao')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
        <option value="ativo" {{ $projeto->status == 'ativo' ? 'selected' : '' }}>Ativo</option>
        <option value="desativado" {{ $projeto->status == 'desativado' ? 'selected' : '' }}>Desativado</option>
    </select>
    @error('status')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="user_id">Usuário</label>
    <select name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror">
        <option value="1" {{ $projeto->user_id == 1 ? 'selected' : '' }}>Carlos</option>
        <!-- Adicione outras opções de usuários conforme necessário -->
    </select>
    @error('user_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<div class="botton-home row m-2">
    <div class="col">
    <a href="/" class="btn btn-danger">Cancelar</a>

    </div>
    <div class="col">
<input type="submit" class="btn btn-primary" value="Editar projeto">
</div>

</form>
</div>
@endsection