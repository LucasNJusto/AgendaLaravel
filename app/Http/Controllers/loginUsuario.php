<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginUsuario extends Controller
{
    public function index(){
        $dados = loginUsuarioModel::all();

        return view('paginas.login')->With('dados',$dados);
    }//fim do metodo


    public function store(Request $request){
        $emailUsuario = $request->input('email');  /* Coletando os dados do formuário */
        $senhaUsuario = $request->input('senha');

        $model = new loginUsuarioModel();
        $model->email = $emailUsuario;
        $model->senha = $senhaUsuario;
        $model->save(); //Armazenar os dados no BD

        return redirect('/cadastrar');
    }//Fim do Método store
}
