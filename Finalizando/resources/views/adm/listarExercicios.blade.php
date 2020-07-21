<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/ListarExercicio.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
    <title> Lista de exercicios </title>
</head>
<body>
<!--start navBar-->
<nav class="navbar navbar-expand-lg navbar  navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('adm.principal') }}"> <img src="{{URL::asset('/images/logo.png' )}}" width="60" height="60">Tec Academy</a>
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
    <a class="navbar-brand"><img src="{{URL::asset('/images/adm.png' )}}" width="60" height="60"></a>
    <a class="navbar-brand">{{ session('nome') }}<br>{{ session('email') }}</a>
</nav>
<!--Fim navBar-->
    <br>
    <center><h1>Lista de exercicios</h1></center>
    <div class="container">
        <br>
    <table class="table table-hover table-dark">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Area muscular</th>
            <th>Aparelho</th>
            <th>Letra</th>
            <th>Editar Usuario</th>
            <th>Excluir Usuario</th>
        </tr>

        @foreach($exercicios as $exercicio)
            <tr>
                <td>{{ $exercicio->id }}</td>
                <td>{{ $exercicio->nome }}</td>
                <td>{{ $exercicio->areamuscular }}</td>
                <td>{{ $exercicio->aparelho}}</td>
                <td>{{ $exercicio->letra }}</td>
                <td><a href="{{ route('adm.listar.edicao.exercicio', $exercicio->id) }}"><button class="btn btn-outline-success"><i class="fab fa-wpforms"></i></button></a></td>

                <td>
                    <form action="{{ route('adm.listar.exercicios.deletar') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $exercicio->id }}">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    <br>
    <br>
    <script src="https://kit.fontawesome.com/17ae136748.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
