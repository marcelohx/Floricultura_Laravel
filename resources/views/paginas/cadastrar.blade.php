<x-layout titulo="Cadastrar">
    <form action="cadastrar/salvar" method="GET">
        @csrf <!--Libera as portas de cadastro -->
        <label name="lNome">Nome</label>
        <input type="text" name="nome">
        <br><br>

        <label name="lTipo">Tipo</label>
        <textArea type="text" name="tipo"></textArea>
        <br><br>

        <label name="lPreco">Preco</label>
        <textArea type="decimal" name="preco"></textArea>
        <br><br>

        <button type="submit">Salvar</button>
        
    </form>
    <a href="/index"><button>Voltar</button></a>
</x-layout>