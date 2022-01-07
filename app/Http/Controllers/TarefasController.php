<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasController extends Controller
{
    public function index(){
        $tarefas = DB::select('select * from tb_tarefas');

        return view('index', ['tarefas'=>$tarefas]);
    }

    public function create(){
        return view('create');
    }

    public function configCreate(Request $request){
        if($request->filled('tarefa')){ //verifica se a tarefa tá preenchida, se tiver, retorna true
            $tarefa = $request->input('tarefa');

            DB::insert('INSERT INTO tb_tarefas (tarefa) VALUES (?)', [$tarefa]);
        } 

        return redirect()->route('pag.inicial');
    }

    public function update($id){
        $tarefas = DB::select('select * from tb_tarefas where id = ?', [$id]);

        if(!empty($tarefas)){
            return view('update', ['tarefas' => $tarefas]);
        }
        else {
            return redirect()->route('pag.inicial');
        }
    }

    public function configUpdate(Request $request, $id){
        $tarefa = $request->input('tarefa');
        
        DB::update('update tb_tarefas set tarefa = ? where id = ?', [$tarefa, $id]);

        return redirect()->route('pag.inicial');
    }
}
