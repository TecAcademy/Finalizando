<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/professor/EscolherAluno.css') }}">
    <title>Selecionar Aluno (a)</title>
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
                    <a class="nav-link" href="{{ route('professor.homepage') }}">inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('professor.homepage.listarAlunos', session('nome')) }}">Listar alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('professor.homepage.escolher') }}">Selecionar Aluno(a)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('prof.homepage.logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Fim navBar-->
    <br>
   <center><h3>Selecione o Aluno(a) desejado, {{ session('nome') }}</h3></center>
    <br>
    <div class="container">
        <br>
    <table class="table table-hover table-dark">
        <tr>
            <th> Nome do aluno </th>
            <th> Email </th>
            <th> Selecione </th>
        </tr>
        @foreach($users as $user)

            @if($user->nome != session('nome') && $user->acesso == '0')

                <tr>
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('prof.homepage.escolherAluno.realizar') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                            <input type="hidden" name="treinador" id="treinador" value="{{ session('nome') }}">
                            <button class="btn btn-outline-success" type="submit">Mover para Listar Aluno(a)</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>
        <br>
    </div>
    <br>
    <br>

    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
</body>
</html>
