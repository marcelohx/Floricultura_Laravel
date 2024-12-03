<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCompra;

class registrarAtividadeController extends Controller
{
    public function index()
    {
        $dados = modeloCompra::all();//Todos os dados do banco
        return view('paginas.cadastrar ')->with('dados',$dados);
    }//Fim da index

    public function store(Request $request)
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

    public function consultar()
    {
        $ids = modeloCompra::all();
        return view('paginas.consultarCompra', compact('ids'));
    }//Fim do consultar

    public function editar($id)
    {
        $dado = modeloCompra::findOrFail($id);
        return view('paginas.editarCompra', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id)
    {
        modeloCompra::where('id',$id)->update($request->all());
        return redirect('/consultarCompra');
    }//Fim do Atualizar

    public function excluir(Request $request, $id)
    {
        modeloCompra::where('id',$id)->delete($request->all());
        return redirect('/consultarCompra');
    }//Fim do excluir
}//Fim da classe 

