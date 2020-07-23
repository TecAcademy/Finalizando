<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/ListarUsuarios.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
    <title>Listar Usuarios</title>
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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adm.principal') }}">Inicio</a>
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
    @if(count($users) <= 1)
        <h1>Nao há usuarios cadastrados</h1>
    @else
        <br>
        <center><h3>Usuarios cadastrados</h3></center>
        <br>
        <div class="container">
            <br>
        <table class="table table-hover table-dark"  border="0.9">
            <tr>
                <th scope="col"><center>ID</center></th>
                <th><center>Nome</center></th>
                <th><center>E-mail</center></th>
                <th><center>Cargo</center></th>
                <th><center>Data de Nascimento!</center></th>
                <th><center>Cpf</center></th>
                <th><center>Celular</center></th>
                <th><strong><center>Edição</center></strong></th>
                <th><strong><center>Excluir</center></strong></th>
            </tr>
            @foreach($users as $value)
                @if($value->acesso != 2 || 2 ) <!-- Alterando nivel acesso 16-07-2020-->
                    <tr>
                        <td scope="row"><center> {{ $value->id }}</center> </td>
                        <td><center>{{ $value->nome }}</center> </td>
                        <td> {{ $value->email }} </td>
                        @if($value->acesso == '0')
                            <td style="color: #0174DF; "><strong><center>Aluno</center></strong></td>
                        @elseif($value->acesso == '1')
                            <td style="color: #01DFA5"><strong><center> Professor</center></strong> </td>
                        @else
                            <td style="color: #000000"><strong><center> Administrador</center></strong> </td>
                        @endif

                        @if($value->nascimento == '')
                            <td><center>00-00-0000</center></td>
                        @else
                            <td><center>{{date('d-m-Y', strtotime($value->nascimento))}}</center></td>
                        @endif

                        @if($value->cpf == '')
                            <td><center>000.000.000.00</center></td>
                        @else
                            <td><center>{{$value->cpf}}</center></td>
                        @endif

                        @if($value->celular == '')
                            <td><center>(00)000000000</center></td>
                        @else
                            <td><center>{{$value->celular}}</center></td>
                        @endif

                        <td>
                            <center> <a href="{{ route('adm.listar.edicao', $value) }}"><button class="btn btn-outline-success"><i class="fab fa-wpforms"></i></button></a></center>
                        </td>

                        <td>
                            <form action="{{ route('adm.listar.deletar') }}" method="post">
                                @method('delete')
                                @csrf

                                <input type="hidden" name="id" value="{{ $value->id }}">
                                <center><button class="btn btn-outline-success" type="submit"> <i class="fas fa-trash"></i> </button></center>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
        </div>
    @endif
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="https://kit.fontawesome.com/17ae136748.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
