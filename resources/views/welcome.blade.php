@extends('layouts.main')

@section('title', 'Gerenciar Projetos')
@section('content')


<div id="search-container" class="col-md-12">

<h1>Busque um projeto</h1>

<form action="/" method="get">
<input type="text" placeholder="Procurar" class="form-control" id="search" name="search">
</form>

</div>


<div id="projetos-container" class="col-md-12">
@if($search)  
<h2>Buscando por projetos:</h2>

@else
<h2>Próximos projetos</h2>

@endif
    <div  class="row">

    @foreach($projetos as $projeto)
    <div id="card-home" class="card border-warning col-md-3">
        <p class="card-header ">{{$projeto->name}}</p>
        <p class="card-body text-warning">{{$projeto->descricao}}</p>
       
    <div class="botton-home row m-1">
    <div class="col">
    <a href="/projeto/{{$projeto->id}}" class="btn btn-warning">Saiba mais</a>

    </div>
    <div class="col">
        <a href="/projeto/edit/{{$projeto->id}}" class="btn btn-info">Atualizar</a>
    </div>
    <div class="col">
        <form action="/projeto/{{$projeto->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </div>
</div>

   

    
    </div>
    @endforeach

    @if(count($projetos)==0 && $search)
    <p>Não foi possível achar nenhum projeto com  {{$search}}. <a href="/">Ver todos</a></p>
    @elseif(count($projetos)==0))
    <p>Não há projetos.</p>
    @endif
    </div>
</div>

@endsection
