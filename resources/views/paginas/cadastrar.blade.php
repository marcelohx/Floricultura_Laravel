<x-layout titulo="Cadastrar">
    <form action="cadastrar/salvar" method="GET">
        @csrf <!--Libera as portas de cadastro -->
        <label for="inputPassword5" class="form-label" name="lNome">Nome</label>
        <input class="form-control" type="text"  aria-label="default input example" type="text" name="nome">

        <label for="inputPassword5" class="form-label" name="lTipo">Tipo</label>
        <input class="form-control" type="text"  aria-label="default input example" type="text" name="tipo"></input>

        <label for="inputPassword5" class="form-label" name="lPreco">Preco</label>
        <input class="form-control" type="text"  aria-label="default input example" type="decimal" name="preco"></input>
        <br>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"type="submit">
            Salvar
        </button>
        
    </form>
    <a href="/index"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Voltar
    </button></a>
</x-layout>