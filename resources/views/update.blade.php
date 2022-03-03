@extends('template.template')

@section('titulo da aba', 'Editar Tarefa')

@section('titulo', 'Editar Tarefa') 

@section('conteudo')

  <form method="POST" action="{{ route('editar.tarefa', ['id' => $tarefas->id]) }}">
    @csrf
        
    <label for="tarefa">Nova tarefa:</label>
    <input type="text" name="tarefa" value="{{$tarefas->tarefa}}">
    <input type="submit" value="Atualizar">        
  </form>

@endsection