@extends('layouts.main')

@section('title', 'Gerenciar usuarios')
@section('content')


<div id="usuario-create-container" class="col-md-6 offset-md-3">
<h1>Criar usuários para usuarios</h1>
<form action="/usuario" method="post">
@csrf

<div class="form-group">
    <label for="nome">Nome do usuario</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Informe o nome">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Informe o email">

</div>

<div class="form-group">
    <label for="Senha">Descrição</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Informe o email">

</div>

<div class="botton-home row m-2">
    <div class="col">
    <a href="/" class="btn btn-danger">Cancelar</a>

    </div>
    <div class="col">
<input type="submit" class="btn btn-primary" value="Criar usuario">
</div>

</form>
</div>
@endsection

