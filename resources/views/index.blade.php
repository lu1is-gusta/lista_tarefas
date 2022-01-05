@extends('template.template')

@section('titulo da aba', 'Lista de Tarefas')

@section('titulo', 'Listagem de Tarefas') 

@section('conteudo')
    <h2>alguma coisa</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Status</th>
                <th scope="col">Tarefa</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($tarefas))
                @foreach($tarefas as $tarefa)
                    <tr>
                        <th scope="row">{{$tarefa->id}}</th>
                        <td>{{$tarefa->status}}</td>
                        <td>{{$tarefa->tarefa}}</td>
                        <td>
                            <a href="">
                                <button>
                                    Editar
                                </button>
                            </a>

                            <a href="">
                                <button>
                                    Apagar
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

       
                
            

@endsection