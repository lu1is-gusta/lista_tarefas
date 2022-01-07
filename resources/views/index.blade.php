@extends('template.template')

@section('titulo da aba', 'Lista de Tarefas')

@section('titulo', 'Listagem de Tarefas') 

@section('conteudo')

    <a href="{{ url('/create') }}">
        <button>
            Adicionar Tarefa
        </button>
    </a>

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
                        <td><a href="{{ url('marcar', ['id' => $tarefa->id]) }}" style="text-decoration-line: none; color: white;"> @if($tarefa->status === 1) <span style="background-color: #32CD32; padding: 3px;"> Feito </span> @else <span style="background-color: #ECDB00; padding: 3px;"> Pendente </span> @endif </a></td>
                        <td>{{$tarefa->tarefa}}</td>
                        <td>
                            <a href="{{ url('/update', ['id' => $tarefa->id]) }}" style="text-decoration-line: none;"> <!--Retira o sublinhado-->
                                <button>
                                    Editar
                                </button>
                            </a>

                            <a href="{{ url('/delete', ['id' => $tarefa->id]) }}" style="text-decoration-line: none;">
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