<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<x-layout title="Formulario Cadastro">
    
    <div class="container">
        @foreach($dados as $dado)
            <li class="list-group-item"> {{$dado->nome}}</li>
            <li class="list-group-item"> {{$dado->telefone}}</li>
            <br><br>
        @endforeach
    </div>

    
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    
    </div>
    <div class="col">
    <form action="/cadastrar/salvar" method="POST">
        @csrf <!-- Valida o formulario -->
        <br>
        <lable> Email: </lable>
        <input type="text" id="email" name="email" placeholder="Informe seu email" required/><br><br>
        
        <label> Senha: </label> 
        <input type="text" id="telefone" name="telefone" placeholder="Digite sua senha" required/><br><br> 
 
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <p style="color:#a9a9a9">Não possui conta? crie uma agora → <a href="realizarcadastro.blade.php">Fazer Cadastro</a></p>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>




</x-layout>