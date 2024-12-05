<x-layout titulo="Comprar">
    <form action="cadastrarCompra/salvar" method="GET">
        @csrf <!--Libera as portas de cadastro -->
        <label for="inputPassword5" class="form-label" name="lQuantidade">Quantidade</label>
        <input class="form-control"   aria-label="default input example" type="decimal" name="quantidade">

        <label for="inputPassword5" class="form-label" name="lPrecoTotal">Preço Total</label>
        <input class="form-control"  aria-label="default input example" type="decimal" name="precoTotal"></textArea>

        <label for="inputPassword5" class="form-label" name="lDataCompra">Data Compra</label>
        <input class="form-control"  aria-label="default input example" type="date" name="dataCompra"></input>

        <label for="inputPassword5" class="form-label" name="lFormaPagamento">Forma de Pagamento</label>
        <input class="form-control" type="text"  aria-label="default input example" name="formaPagamento"></textArea>
        <br>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">
            Salvar
        </button>
        
    </form>
    <a href="/index"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Voltar
    </button></a>
</x-layout>