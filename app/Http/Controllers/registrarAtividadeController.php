<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCompras;

class registrarAtividadeCompra extends Controller
{
    public function index()
    {
        $dados = modeloPlantas::all();//Todos os dados do banco
        return view('paginas.cadastrar ')->with('dados',$dados);
    }//Fim da index

    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $tipo = $request->input('tipo');
        $preco = $request->input('preco');

        $model = new modeloPlantas();
        $model->nome = $nome;
        $model->tipo = $tipo;
        $model->preco = $preco;

        $model->save();//Armazena do DB
        return redirect('/cadastrar');
    }//Fim do store

    public function consultar()
    {
        $ids = modeloPlantas::all();
        return view('paginas.consultar', compact('ids'));
    }//Fim do consultar

    public function editar($id)
    {
        $dado = modeloPlantas::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id)
    {
        modeloPlantas::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }//Fim do Atualizar

    public function excluir(Request $request, $id)
    {
        modeloPlantas::where('id',$id)->delete($request->all());
        return redirect('/consultar');
    }//Fim do excluir
}//Fim da classe 

