@extends('template.template')

@section('titulo da aba', 'Editar Tarefa')

@section('titulo', 'Editar Tarefa') 

@section('conteudo')

      @foreach($tarefas as $tarefa) 
      <form method="POST" action="{{ route('editar.tarefa', ['id' => $tarefa->id]) }}">
        @csrf
        
        <label for="tarefa">Nova tarefa:</label>
        <input type="text" name="tarefa" value="{{$tarefa->tarefa}}">
        <input type="submit" value="Atualizar">        
      </form>
      @endforeach

@endsection