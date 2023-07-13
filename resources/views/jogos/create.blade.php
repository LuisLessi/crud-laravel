@extends('layouts.app')


@section('title', 'Criação')
@section('content')
<!--Tudo aki dentro vai ser renderizado no template app-->

<div class="container mt-5">
  <h1>Crie um novo jogo</h1>
  <hr>
  <form action="{{ route('jogos-store')}}" method="POST">
@csrf
  <div class="form-group">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input class="form-control" type="text" name="nome" placeholder="Digite um nome">
    </div><br>
    <div class="form-group">
      <label for="categoria">Categoria:</label>
      <input class="form-control" type="text" name="categoria" placeholder="Digite uma categoria">
    </div><br>
    <div class="form-group">
      <label for="ano_criacao">Ano:</label>
      <input class="form-control" type="text" name="ano_criacao" placeholder="Digite um ano">
    </div><br>
    <div class="form-group">
      <label for="valor">Valor:</label>
      <input class="form-control" type="text" name="valor" placeholder="Digite um valor">
    </div><br>
    <div class="form-group">
      <input type="submit" name="submit" class="btn btn-primary">
    </div>
  </div>
  </form>
</div>
@endsection