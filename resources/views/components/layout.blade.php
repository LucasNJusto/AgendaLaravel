<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title> <!-- Variavel title (vai fazer com que cada pagina tenha seu titulo) -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">Agenda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrar">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendario">Calendario |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultar">Consultar Cadastros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultarAgenda">Consultar Serviços da Agenda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
</nav>
    <h1>{{$title}}</h1>

    <div>
        {{$slot}} <!-- Quem vai ser substituida pelo conteudo -->
    </div>
</body>
</html>