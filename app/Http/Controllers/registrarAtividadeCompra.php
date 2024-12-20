<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCompra;

class registrarAtividadeCompra extends Controller
{
    public function index()
    {
        $dados = modeloCompra::all();//Todos os dados do banco
        return view('paginas.cadastrarCompra')->with('dados',$dados);
    }//Fim da index

    public function storeCompra(Request $request)
    {
        $quantidade = $request->input('quantidade');
        $precoTotal = $request->input('precoTotal');
        $dataCompra = $request->input('dataCompra');
        $formaPagamento = $request->input('formaPagamento');

        $model = new modeloCompra();
        $model->quantidade = $quantidade;
        $model->precoTotal = $precoTotal;
        $model->dataCompra = $dataCompra;
        $model->formaPagamento = $formaPagamento;

        $model->save();//Armazena do DB
        return redirect('/cadastrarCompra');
    }//Fim do store

    public function consultarCompra()
    {
        $ids = modeloCompra::all();
        return view('paginas.consultarCompra', compact('ids'));
    }//Fim do consultar

    public function editarCompra($id)
    {
        $dado = modeloCompra::findOrFail($id);
        return view('paginas.editarCompra', compact('dado'));
    }//Fim do editar

    public function atualizarCompra(Request $request, $id)
    {
        modeloCompra::where('id',$id)->update($request->all());
        return redirect('/consultarCompra');
    }//Fim do Atualizar

    public function excluirCompra(Request $request, $id)
    {
        modeloCompra::where('id',$id)->delete($request->all());
        return redirect('/consultarCompra');
    }//Fim do excluir
}//Fim da classe 

