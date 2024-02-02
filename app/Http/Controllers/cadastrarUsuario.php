<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;  /* Importar a classe que eu quero utilizar */

class cadastrarUsuario extends Controller
{
    public function index(){
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar')->With('dados',$dados);
    }//fim do metodo


    public function store(Request $request){
        $emailUsuario = $request->input('email');  /* Coletando os dados do formuário */
        $senhaUsuario = $request->input('senha');

        $model = new cadastrarUsuarioModel();
        $model->email = $emailUsuario;
        $model->senha = $senhaUsuario;
        $model->save(); //Armazenar os dados no BD

        return redirect('/cadastrar');
    }//Fim do Método store

    public function consultar(){
        $dados = cadastrarUsuarioModel::all();
        
        return view('paginas.consultar', compact('dados'));
    }//fim do metodo

}//fim da classe
