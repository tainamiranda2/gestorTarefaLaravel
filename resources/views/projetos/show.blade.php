@extends('layouts.main')

@section('title', $projeto->nome)
@section('content')


<div class="col-md-10 offset-md-1">
<div class="row">
    <div id="info-container" class="col-md-6">
    <h1>{{$projeto->name}}</h1>
        <h2>{{$projeto->descricao}}</h2>
        <p>{{$projeto->status}}</p>
    
    </div>
</div>
</div>

@endsection
