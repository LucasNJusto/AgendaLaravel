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
          <form action="" method="POST">
            <h1> Login <span class="badge bg-secondary"></span><svg width="8%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></h1>
            <br>
            <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" value="">
                    <label for="floatingInputGrid">Email:</label>
                 </div>
              </div>
            </div>
            <br>
        
            <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" value="">
                    <label for="floatingInputGrid">Senha:</label>
                 </div>
              </div>
            </div>
            <br>
 
            <button type="submit">Enviar</button>
          </form>
          <hr>
          <p style="color:#a9a9a9">Não possui conta? crie uma agora → <a href="cadastrar" class="d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">Fazer Cadastro</a></p>
          </div>
        </div>
        </div>
        <div class="col">
      
        </div>
      </div>
    </div>

</x-layout>