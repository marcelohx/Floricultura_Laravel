<x-layout titulo="Editar">
    <form action="../atualizarCompra/{{$dado->id}}" method="get">
        <label>Id</label>
        <input type="number" id="number" value="{{$dado->id}}" disable required/>
        <br><br>

        <label>Quantidade</label>
        <input type="decimal" id="quantidade" name="quantidade" value="{{$dado->quantidade}}" required/>
        <br><br>

        <label>Preço Total</label>
        <input type="decimal" id="precoTotal" name="precoTotal" value="{{$dado->precoTotal}}" required/>
        <br><br>

        <label>Data da Compra</label>
        <input type="date" id="dataCompra" name="dataCompra" value="{{$dado->dataCompra}}" required/>
        <br><br>

        <label>Forma de Pagamento</label>
        <input type="text" id="formaPagamento" name="formaPagamento" value="{{$dado->formaPagamento}}" required/>
        <br><br>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"type="submit">
          Atualizar
        </button>
    </form>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Excluir
    </button>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir o código: {{$dado->id}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <a type="button" class="btn btn-primary" href="/excluirCompra/{{$dado->id}}">Sim</a>
      </div>
    </div>
  </div>
</div>
    <a href="/index"><button>Voltar</button></a>
</x-layout>