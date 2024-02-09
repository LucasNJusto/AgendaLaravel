<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<x-layout title="Editar">
    <form action="/atualizar/{{$dado->id}}" method="get">
        <label> Id: </label>
        <input type="number" id="id" name="id" value="{{$dado->dado}}" disabled required/><br><br>

        <label> Nome: </label>
        <input type="text" id="email" name="email" value="{{$dado->email}}" required/><br><br>

        <label> Telefone: </label>
        <input type="password" id="senha" name="senha" value="{{$dado->senha}}" required/><br><br>

        <button class="btn btn-primary" type="submit">Atualizar</button>
        <a class="btn btn-primary" href="/cadastrar">Voltar</a>           
        <!-- Botão Excluir com modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Excluir
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir o cliente: {{$dado->nome}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <a type="button" class="btn btn-primary" href="/excluir/{{$dados->id}}">Sim</a>
            </div>
            </div>
        </div>
        </div>
        <!-- fim do div da modal -->
    </form>
</x-layout>