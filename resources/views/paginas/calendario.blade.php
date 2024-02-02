<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<x-layout title="">
    <br><br><br><br><br>
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col">
    
        </div>
        
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                <img src="logo.png" class="card-img-top" alt="Logo">
                <form action="/calendario/salvar" method="POST">
                    @csrf
                    <h1>Calendario</h1>
                    <label>Qual é a Tarefa:</label>
                    <input type="text" id="tarefa" name="tarefa" required/><br><br>
           
                    <label>Descreva sobre o que é:</label>
                    <input type="text" id="descTarefa" name="tipo" required/><br><br>
       
                    <label>Data:</label>
                    <input type="date" id="data" name="data" required/><br><br>
 
                    <button type="submit">Enviar</button>
                </form>
                </div>
            </div>
            <div class="col">
      
        </div>
      </div>
    
</x-layout>