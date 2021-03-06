<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/professor/MostrarTreino.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
    <title>Visualizar Treino</title>
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
    <br>
    <!--Fim navBar-->
    <center><h2>Ficha de treino</h2></center>
       <center><br>
    @if(count($obj) <= 0)
               <div style="height: 3@method(); width: 600px" class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong><h1>Voce ainda não montou um treino para este aluno deseja montar um agora!?</h1></strong>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
    @else

       <h3>
        Do aluno(a)
        @foreach($obj as $sql)
            {{ $sql->nome }}
            @break
        @endforeach
    </center>
    </h3>
    <br>
        <div class="container"><br>
    <table class="table table-hover table-dark">
        <tr>
            <th><center>Exercicio</center></th>
            <th><center>Area</center></th>
            <th><center>Serie</center></th>
            <th><center>Repetição</center></th>
            <th><center>Intervalo (em segundos)</center></th>
            <th><center>Obs</center></th>
        </tr>
        @foreach($obj as $sql)
            <tr>
                <td><center>{{ $sql->exercicio }}</center></td>
                <td><center>{{ $sql->areamuscular }}</center></td>
                <td><center>{{ $sql->serie }}</center></td>
                <td><center>{{ $sql->repeticao }}</center></td>
                <td><center>{{ $sql->intervalo }}</center></td>
                <td><center>{{ $sql->obs }}</center></td>
            </tr>
        @endforeach
        </table>
    @endif
    <center><span class="btn btn-danger">Treino vai até:
    @foreach($data ?? '' as $treino)
        @if($loop->last)
            {{date('d-m-Y', strtotime($treino->datatroca))}}
        @endif
    @endforeach </span></center>
    <br>
        </div>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
