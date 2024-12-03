<x-layout titulo="Editar">
    <form action="../atualizar/{{$dado->id}}" method="get">
        <label>Id</label>
        <input type="number" id="number" value="{{$dado->id}}" disable required/>
        <br><br>

        <label>Nome</label>
        <input type="text" id="nome" name="nome" value="{{$dado->nome}}" required/>
        <br><br>

        <label>Tipo</label>
        <input type="text" id="tipo" name="tipo" value="{{$dado->tipo}}" required/>
        <br><br>

        <label>Preco</label>
        <input type="text" id="preco" name="preco" value="{{$dado->preco}}" required/>
        <br><br>

        <button type="submit">Atualizar</button>
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
        <a type="button" class="btn btn-primary" href="/excluir/{{$dado->id}}">Sim</a>
      </div>
    </div>
  </div>
</div>
    <a href="/index"><button>Voltar</button></a>
</x-layout>