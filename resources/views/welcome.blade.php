@extends('layouts.main')

@section('title', 'Gerenciar Projetos')
@section('content')


<div id="search-container" class="col-md-12">

<h1>Busque um projeto</h1>

<form action="">
<input type="text" placeholder="Procurar" class="form-control" id="search" name="search">
</form>

</div>


<div id="projetos-container" class="col-md-12">
    <h2>Próximos projetos</h2>
    <div id="cards-container" class="row">

    @foreach($projetos as $projeto)
    <div  class="card col-md-3">
        <p>{{$projeto->name}}</p>
        <p>{{$projeto->descricao}}</p>
        <a href="/projeto/{{$projeto->id}}" class="btn btn-primary">Saiba mais</a>
    </div>
 
    @endforeach

    @if(count($projetos)==0)
    <p>Não há projetos.</p>
    @endif
    </div>
</div>

@endsection
