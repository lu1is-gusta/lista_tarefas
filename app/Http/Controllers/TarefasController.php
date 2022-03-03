<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;

class TarefasController extends Controller
{
    public function index(){
        $tarefas = Tarefa::all();

        return view('index', ['tarefas'=>$tarefas]);
    }

    public function create(){
        return view('create');
    }

    public function configCreate(Request $request){
        if($request->filled('tarefa')){ //verifica se a tarefa tá preenchida, se tiver, retorna true
            $tarefa = $request->input('tarefa');

            //DB::insert('INSERT INTO tb_tarefas (tarefa) VALUES (?)', [$tarefa]);

            $t = new Tarefa; //instância da classe do model "Tarefa"
            $t->tarefa = $tarefa; 
            $t->save();
        } 

        return redirect()->route('pag.inicial');
    }

    public function update($id){
        //$tarefas = DB::select('select * from tb_tarefas where id = ?', [$id]);

        $tarefas = Tarefa::find($id);

        if(!empty($tarefas)){
            return view('update', ['tarefas' => $tarefas]);
        }
        else {
            return redirect()->route('pag.inicial');
        }
    }

    public function configUpdate(Request $request, $id){
        $tarefa = $request->input('tarefa');

        //DB::update('update tb_tarefas set tarefa = ? where id = ?', [$tarefa, $id]);
        
        /*
        $update = Tarefa::find($id);
        $update->tarefa = $tarefa;
        $update->save();
        */
        
        Tarefa::find($id)->update(['tarefa'=>$tarefa]);

        return redirect()->route('pag.inicial');
    }

    public function delete($id){
        //DB::delete('delete from tb_tarefas where id = ?', [$id]);

        Tarefa::find($id)->delete();

        return redirect()->route('pag.inicial');
    }

    public function marcar($id){       
        DB::update('update tb_tarefas set status = 1 - status where id = ?', [$id]);

        return redirect()->route('pag.inicial');
    }
}
