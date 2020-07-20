<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/ListarOrcamento.css') }}">
    <title>Listar Mensalidade Pendentes </title>
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
       <center><h3>Mensalidades Pendentes</h3></center>
        <br>

        <center>
            <a href="{{ route('adm.orcamento.listar.pagos') }}"><button  class=" btn btn-success btn-lg">Mensalidades Pagas</button></a><br><br>
        </center>
        <div class="container">
            <br>
        <table class="table table-hover table-dark">
            <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Preco</th>
                <th>Data de vencimento</th>
                <th>Situacao</th>
                <th>Confirmar Ação</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

            @foreach($dados as $dado)
                <tr>
                    <td>{{$dado->id}}</td>
                    <td>{{$dado->nome}}</td>
                    <td>{{$dado->email}}</td>
                    <td>{{$dado->preco}}</td>
                    <td>{{ date('d-m-Y', strtotime($dado->vencimento))}}</td>
                    <td>{{$dado->situacao}}</td>

                    @if($dado->situacao == 'pendente')
                        <td>
                            <form action="{{route('adm.orcamento.pagar')}}" method="post">
                                @csrf
                                <input type="hidden" name="idusuario" value="{{ $dado->id }}">
                                <button class="btn btn-outline-success" type="submit">Efetuar pagamento</button>
                            </form>
                        </td>
                    @else
                        <td>################</td>
                    @endif

                    @if($dado->situacao == 'pendente')
                        <td>
                            <form action="{{ route('adm.orcamento.editar') }}" method="post">
                                @csrf
                                <input type="hidden" name="preco" value="{{ $dado->preco }}">
                                <input type="hidden" name="vencimento" value="{{ $dado->vencimento }}">
                                <input type="hidden" name="idusuario" value="{{ $dado->id }}">
                                <button class="btn btn-outline-success" type="submit"><i class="fab fa-wpforms"></i></button>
                            </form>
                        </td>
                    @else
                        <td>######</td>
                    @endif


                    @if($dado->situacao == 'pendente')
                    <td>
                        <form action="{{route('adm.edicao.orcamento.deletar')}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="idusuario" value="{{ $dado->id }}">
                            <input type="hidden" name="preco" value="{{ $dado->preco }}">
                            <input type="hidden" name="vencimento" value="{{ $dado->vencimento }}">
                            <button class="btn btn-outline-success" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                    @else
                        <td>######</td>
                    @endif

                </tr>
            @endforeach
        </table>
        <br>
        </div>
        <script src="https://kit.fontawesome.com/17ae136748.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
