<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/professor/EscolherAluno.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
    <title>Selecionar Aluno(a)</title>
</head>
<body>
    <!--start navBar-->
    <nav class="navbar navbar-expand-lg navbar  navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('professor.homepage') }}"> <img src="{{URL::asset('/images/logo.png' )}}" width="60" height="60">Tec Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('professor.homepage') }}">Inicio</a>
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
        <a class="navbar-brand"><img src="{{URL::asset('/images/usuario.png' )}}" width="60" height="60"></a>
        <a class="navbar-brand">{{ session('nome') }}<br>{{ session('email') }}</a>
    </nav>
    <!--Fim navBar-->
    <br>
   <center><h3>Selecione o Aluno(a) desejado, {{ session('nome') }}</h3></center>
    <br>
    <div class="container">
        <br>
    <table class="table table-hover table-dark">
        <tr>
            <th><center> Nome do aluno </center></th>
            <th><center> Email </center></th>
            <th> <center>Selecione</center> </th>
        </tr>
        @foreach($users as $user)

            @if($user->nome != session('nome') && $user->acesso == '0')

                <tr>
                    <td><center>{{ $user->nome }}</center></td>
                    <td><center>{{ $user->email }}</center></td>
                    <td>
                        <form action="{{ route('prof.homepage.escolherAluno.realizar') }}" method="post">
                            @csrf
                            <center> <input type="hidden" name="id" id="id" value="{{ $user->id }}"></center>
                            <center><input type="hidden" name="treinador" id="treinador" value="{{ session('nome') }}"></center>
                            <center> <button class="btn btn-outline-success" type="submit">Mover para Listar Aluno(a)</button></center>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
