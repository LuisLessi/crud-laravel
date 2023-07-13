@extends('layouts.app')


@section('title', 'Listagem')
@section('content')
<!--Tudo aki dentro vai ser renderizado no template app-->
<div class="container mt-5">
<div class="row">
    <div class="col-sm-9">
    <h1>Listagem de Jogos</h1>
    </div>
    <div class="col-sm-3">
        <a href="{{ route('jogos-create')}}" 
        class="btn btn-success">Novo Jogo</a>
    </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Ano</th>
      <th scope="col">Preço</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($jogos as $jogo)
    <tr>
      <th scope="row">{{$jogo->id}}</th>
      <td>{{$jogo->nome}}</td>
      <td>{{$jogo->categoria}}</td>
      <td>{{$jogo->ano_criacao}}</td>
      <td>{{$jogo->valor}}</td>
      <td>
      
      <a href="{{ route('jogos-edit', ['id' => $jogo->id]) }}" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
    </svg>
</a>
</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection