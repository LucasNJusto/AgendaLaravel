<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<body>


<x-layout title="">
    
    <div class="container">
        @foreach($dados as $dado)
            <li class="list-group-item"> {{$dado->email}}</li>
            <li class="list-group-item"> {{$dado->senha}}</li>
            <br><br>
        @endforeach
    </div>

    <br><br>
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
    
        </div>
        <div class="col">
          <div class="card" style="width: 30rem;">
          <div class="card-body">
          <form action="/cadastrar/salvar" method="POST">
            @csrf <!-- Valida o formulario -->

            <img src="DIGIUSTI.png" class="card-img-top" alt="Logo">

            <h1> Cadastrar <span class="badge bg-secondary"></span></h1>
            <br>
            <lable> Email: </lable>
            <input type="text" id="email" name="email" placeholder="Informe seu email" required/><br><br>
        
            <label> Senha: </label>
            <input type="text" id="senha" name="senha" placeholder="Digite sua senha" required/><br><br> 
 
            <button type="submit">Enviar</button>
          </form>
          <hr>
          <p style="color:#a9a9a9">Já possui conta? acesse agora → <a href="login" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">Fazer Login</a></p>
          </div>
        </div>
        </div>
        <div class="col">
      
        </div>
      </div>
    </div>
</x-layout>

</body>
</html>