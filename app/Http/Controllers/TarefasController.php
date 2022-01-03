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
}
