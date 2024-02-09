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


    /* EDITAR, ATUALIZAR E EXCLUIR */
    public function editar($id)
    {
        $dado = cadastrarUsuarioModel::findOrFail($id);

        return view('paginas.editar', compact('dados'));
    }//fim do método

    public function atualizar(Request $request, $dados)
    {
        cadastrarUsuarioModel::where('dado',$dado)->update($request->all());

        return redirect('consultar');
    }//fim do atualizar

    public function excluir(Request $request, $dados)
    {
        cadastrarUsuarioModel::where('dado',$dado)->delete($request->all());

        return redirect('consultar');
    }//fim do excluir
    

}//fim da classe
