<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/professor/MontarTreino.css') }}">

    <title>Criacao do treino</title>
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
    <center><h2>Montar o treino do(a)  {{ $user->nome }}</h2></center>
    @if($errors->all())
        <div>
            @foreach($errors->all() as $error)
                <h5>{{$error}}</h5>
            @endforeach
        </div>
    @endif
    <br>
    <div class="container">
        <br>
        <table class="table table-hover table-dark">
            <tr>
                <th>Nome</th>
                <th>Marcar</th>
                <th>Serie</th>
                <th>Repetição</th>
                <th>Intervalo (em segundos)</th>
                <th>Observações</th>
            </tr>
            <form action="{{ route('prof.homepage.montarTreino.realizar') }}" method="post">
                @csrf
                <input type="hidden" name='id' value={{ $user->id }}>
                @foreach($exercicios as $value)
                    <tr>
                        <td>{{$value->nome}}</td>
                        <td><input class="box" type="checkbox" name="caixas[]" id="caixas[]" value="{{$value->id}}">
                            <input type="hidden" name="invisivel[]" id="invisivel[]" value="{{$value->id}}">
                        </td>
                        <td><input type="number" name="serie[]" id="serie[]" placeholder="0"></td>
                        <td><input type="number" name="repeticao[]" id="repeticao[]" placeholder="0"></td>
                        <td><input type="number" name="intervalo[]" id="intervalo[]" placeholder="0"></td>
                        <td><input type="text" name="obs[]" id="obs[]" placeholder="observacoes" value="Sem nenhuma observação!"></td>
                    </tr>
            @endforeach
        </table>
        <br>
    </div>
    <br>
    <h5>
        A duração desse treino sera valida até: <input  class="inputdate" type="date" name="dataTroca" id="dataTroca" required>
        <button class="btn btn-success btn-lg" type="submit">Salvar</button>
    </h5>
    <br>
    <center><p style="font-size: 24px" class=" btn btn-danger">
            Data de hoje: {{ date('d-m-Y') }}
        </p>
    </center>
    <br><br>
    </form>




    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
