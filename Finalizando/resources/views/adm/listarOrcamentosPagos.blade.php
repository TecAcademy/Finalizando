<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/OrcamentoPago.css') }}">
    <title>Pagos</title>
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
    <center><h3> Mensalidades Pagas </h3></center>
    <br>
    <div class="container">
    <br>
    <table class="table table-hover table-dark" >
        <tr>
            <th>#</th>
            <th>Usuario</th>
            <th>E-mail</th>
            <th>Preço</th>
            <th>Data do Pagamento</th>
            <th>Data de Vencimento</th>
            <th>Situação</th>
            <th>Excluir</th>
        </tr>

        @foreach($dados as $dado)
            <tr>
                <td>{{$dado->id}}</td>
                <td>{{$dado->nome}}</td>
                <td>{{$dado->email}}</td>
                <td>{{$dado->preco}}</td>
                <td>{{ date('d-m-Y',strtotime($dado->dataPagamento))}}</td>
                <td>{{ date('d-m-Y', strtotime($dado->vencimento))}}</td>
                <td>{{$dado->situacao}}</td>

                <td><Button class="btn btn-outline-primary ">Excluir</Button></td>
            </tr>
        @endforeach
    </table>
    <br>
    </div>
</body>
</html>
