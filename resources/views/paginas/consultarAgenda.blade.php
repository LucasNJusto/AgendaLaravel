<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<x-layout title="">

    <br><br><br><br><br>
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
    
        </div>
        <div class="col">
          <div class="card" style="width: 40rem;">
          <div class="card-body">
          <form action="/cadastrar/salvar" method="POST">
            @csrf <!-- Valida o formulario -->

            <h1> Consultar Eventos e Serviços <span class="badge bg-secondary"></span></h1>
            <br>
            <div class="container">
            @foreach($dados as $dado)
                <li class="list-group-item">Tarefa: {{$dado->tarefa}} | Sobre: {{$dado->tipo}} | Data: {{$dado->data}}</li>
                <hr>
            @endforeach
            </div>
          </form>

          </div>
        </div>
        </div>
        <div class="col">
      
        </div>
      </div>
    </div>

</x-layout>
