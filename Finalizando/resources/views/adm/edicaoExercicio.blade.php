<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/EditarExercicio.css') }}">
    <title>Edição de Exercicios</title>
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
    <br>
    <center><h2>Edição dos Exercicios</h2></center>
    <br>
    <center><h5>Preencha os campos abaixo</h5></center>
    <div class="container">
    <form action="{{ route('adm.listar.edicao.exercicio.realizar') }}" method="post">
        <center>
        @csrf
        @method('PUT')

        @if($errors->all())
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif

             <input class="label-form" type="hidden" name="exe" id="exe" value="{{ $exercicio->id }}"><br>


             <label for="label-form">Nome</label><br>
            <input class="input" type="text" name="nome" id="nome" value="{{ $exercicio->nome }}" required><br><br>

             <label for="">Area Muscular</label><br>
            <input class="input" type="text" name="area" id="area" value="{{ $exercicio->areamuscular }}" required><br><br>

             <label for="">Aparelho</label> <br>
            <input class="input" type="text" name="aparelho" id="aparelho" value="{{ $exercicio->aparelho }}" required><br><br>

            Letra: <br>
            <select class="lista" name="letra" id="letra" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            <br><br>
            <br>
            <button class="btn btn-success btn-lg" type="submit">editar</button>
     </center>
    </form>
        <br>
    </div>
    <br>
</body>
</html>
