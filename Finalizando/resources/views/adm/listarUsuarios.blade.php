<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/ListarUsuarios.css') }}">
    <title>Banco de usuarios</title>
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
                <th scope="col">#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Cargo</th>
                <th>Data de Nascimento</th>
                <th>Cpf</th>
                <th>Celular</th>
                <th><strong>Edição</strong></th>
                <th><strong>Excluir</strong></th>
            </tr>
            @foreach($users as $value)
                @if($value->acesso != 2 || 2 ) <!-- Alterando nivel acesso 16-07-2020-->
                    <tr>
                        <td scope="row"> {{ $value->id }} </td>
                        <td> {{ $value->nome }} </td>
                        <td> {{ $value->email }} </td>
                        @if($value->acesso == '0')
                            <td style="color: #0174DF; "><strong>Aluno</strong></td>
                        @elseif($value->acesso == '1')
                            <td style="color: #01DFA5"><strong> Professor</strong> </td>
                        @else
                            <td style="color: #000000"><strong> Administrador</strong> </td>
                        @endif

                        @if($value->nascimento == '')
                            <td>00-00-0000</td>
                        @else
                            <td>{{date('d-m-Y', strtotime($value->nascimento))}}</td>
                        @endif

                        @if($value->cpf == '')
                            <td>000.000.000.00</td>
                        @else
                            <td>{{$value->cpf}}</td>
                        @endif

                        @if($value->celular == '')
                            <td>(00)000000000</td>
                        @else
                            <td>{{$value->celular}}</td>
                        @endif

                        <td>
                            <a href="{{ route('adm.listar.edicao', $value) }}"><button class="btn btn-outline-success"> editar </button></a>
                        </td>

                        <td>
                            <form action="{{ route('adm.listar.deletar') }}" method="post">
                                @method('delete')
                                @csrf

                                <input type="hidden" name="id" value="{{ $value->id }}">
                                <button class="btn btn-outline-success" type="submit"> deletar </button>
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
</body>
</html>
