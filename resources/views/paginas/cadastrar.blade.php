<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<x-layout title="">

    <br><br><br><br><br>
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
    
        </div>
        <div class="col">
          <div class="card" style="width: 30rem;">
          <div class="card-body">
          <form action="/cadastrar/salvar" method="POST">
            @csrf <!-- Valida o formulario -->
            <h1> Cadastrar <span class="badge bg-secondary"></span><svg width="8%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z"/></svg></h1>
            <br>
            <lable> Email: </lable>
            <input type="text" id="email" name="email" placeholder="Informe seu email" required/><br><br>
        
            <label> Senha: </label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required/><br><br> 
 
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