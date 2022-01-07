@extends('template.template')

@section('titulo da aba', 'Adicionar Tarefa')

@section('titulo', 'Adicionar Nova Tarefa') 

@section('conteudo')

      <form method="POST" action="{{ route('add.tarefa') }}">
        @csrf

        <label for="tarefa">Nova tarefa:</label>
        <input type="text" name="tarefa">
        <input type="submit" value="Adicionar">
      </form>

@endsection