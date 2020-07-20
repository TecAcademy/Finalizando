<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aluno/ListaTreino.css') }}">
    <title> Ficha - {{ session('nome') }} </title>
</head>
<body>
    <!--start navBar-->
    <nav class="navbar navbar-expand-lg navbar  navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tec Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('aluno.homepage') }}">inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aluno.mostrarTreino') }}">listar Treino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aluno.homepage.logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <center><h3>Olá <span style="color:#FE2E2E;">{{ session('nome') }}</span>, vamos iniciar o seu treino! </h3></center>
    <!--Fim <navBar-->
    <br>
    <div class="container">
        <br>
        <center>

                <table class="table table-hover table-dark" >
                <table class="table table-hover table-dark" >
                <tr>
                    <th>Exercicio</th>
                    <th>Area</th>
                    <th>Serie</th>
                    <th>Repetições</th>
                    <th>Intervalo (em segundos)</th>
                    <th>Observações</th>
                </tr>

                @foreach($treino as $sql)
                    <tr>
                        <td>{{ $sql->exercicio }}</td>
                        <td>{{ $sql->areamuscular }}</td>
                        <td>{{ $sql->serie }}</td>
                        <td>{{ $sql->repeticao }}</td>
                        <td>{{ $sql->intervalo }}</td>
                        <td>{{ $sql->obs }}</td>
                    </tr>
                @endforeach
            </table>
        <br>
    </div>
    <script src="{{ asset('public/js/mostrartreino.js') }}"></script>
    <script src="https://kit.fontawesome.com/17ae136748.js" crossorigin="anonymous"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
</body>
</html>
