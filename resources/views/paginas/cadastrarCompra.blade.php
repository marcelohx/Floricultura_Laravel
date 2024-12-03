<x-layout titulo="Cadastrar Compra">
    <form action="cadastrarCompra/salvar" method="GET">
        @csrf <!--Libera as portas de cadastro -->
        <label name="lQuantidade">Quantidade</label>
        <input type="decimal" name="quantidade">
        <br><br>

        <label name="lPrecoTotal">Preco Total</label>
        <textArea type="decimal" name="precoTotal"></textArea>
        <br><br>

        <label name="lDataCompra">Data Compra</label>
        <textArea type="date" name="preco"></textArea>
        <br><br>

        <label name="lFormaPagamento">Forma de Pagamento</label>
        <textArea type="date" name="formaPagamento"></textArea>
        <br><br>

        <button type="submit">Salvar</button>
        
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>