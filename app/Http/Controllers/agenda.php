<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendaModel;  /* Importar a classe que eu quero utilizar */

class agenda extends Controller
{
    public function index(){
        $dados = agendaModel::all();
        
        return view('paginas.calendario')->With('dados',$dados);
    }//fim do metodo


    public function store(Request $request)
    {
        $tarefa = $request->input('tarefa');
        $tipo = $request->input('tipo');
        $data = $request->input('data');
        
        $model = new agendaModel();
        $model->tarefa = $tarefa;
        $model->tipo = $tipo;
        $model->data = $data;
        $model->save();//Armazenar os dados no DB

        return redirect('/calendario');

    }//fim do método store

    public function consultar(){
        $dados = agendaModel::all();
        
        return view('paginas.consultarAgenda', compact('dados'));
    }//fim do metodo
}//fim do metodo
