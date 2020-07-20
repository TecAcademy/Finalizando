<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/CadastroExercicio.css') }}">
    <title>Cadastrar Exercicios</title>
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
                <a class="nav-link" href="{{ route('adm.principal') }}">inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adm.orcamento') }}">Mensalidade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adm.listar') }}">Listar usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adm.cadastro.exercicios') }}">Cadastrar novo exercicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adm.listar.exercicios') }}">Listar exercicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('aluno.homepage.logout') }}">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<!--Fim navBar-->
    {{-- nome, area, aparelho, letra --}}
    <br>
    <center><h2>Cadastra Exercicios!</h2></center>
    <br>
    <div class="container">
        <form action="{{ route('adm.cadastro.exercicio.realizar') }}" method="post">
            @csrf
            <br>
            <br>
            <center>
                <label for="">Nome</label><br>
                <input class="form-input" type="text" name="nome" id="nome" required><br><br>
                <label for="">Area Muscular</label><br>
                <input class="form-input" type="text" name="area" id="area" required><br><br>
                <label for="">Aparelho</label><br>
                <input class="form-input"  calstype="text" name="aparelho" id="aparelho" required><br></label>
                <br>
                <label class="label-form">Letra relacionada a area muscular!</label>
                <select class="lista" name="letra" id="letra" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
                <br><br>
                <button class="btn btn-success btn-lg" type="submit">Cadastrar</button>
                <br>
                <br>
            </center>
        </form>
    </div>
    <br>
</body>
</html>
