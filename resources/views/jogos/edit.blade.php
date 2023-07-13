@extends('layouts.app')

@section('title', 'Editar')
@section('content')
<!--Tudo aki dentro vai ser renderizado no template app-->

<div class="container mt-5">
  <h1>Edite o jogo</h1>
  <hr>
  <form action="{{ route('jogos-update', ['id' => $jogo->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome"  value="{{ $jogo->nome }}">
      </div><br>
      <div class="form-group">
        <label for="categoria">Categoria:</label>
        <input class="form-control" type="text" name="categoria" value="{{ $jogo->categoria }}">
      </div><br>
      <div class="form-group">
        <label for="ano_criacao">Ano:</label>
        <input class="form-control" type="text" name="ano_criacao" value="{{ $jogo->ano_criacao }}">
      </div><br>
      <div class="form-group">
        <label for="valor">Valor:</label>
        <input class="form-control" type="text" name="valor" value="{{ $jogo->valor }}">
      </div><br>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
      </div>
    </div>
  </form>
</div>
@endsection
