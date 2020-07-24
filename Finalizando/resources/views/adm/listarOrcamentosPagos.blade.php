<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/OrcamentoPago.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
    <title>Mensalidades Pagas</title>
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
            <th><center>ID</center></th>
            <th><center>Usuario</center></th>
            <th><center>E-mail</center></th>
            <th><center>Valor</center></th>
            <th><center>Data do pagamento</center></th>
            <th><center>Vencimento mensalidade</center></th>
            <th><center>Situação</center></th>
            <th><center>Excluir</center></th>
        </tr>

        @foreach($dados as $dado)
            <tr>
                <td><center>{{$dado->id}}</center></td>
                <td><center>{{$dado->nome}}</center></td>
                <td><center>{{$dado->email}}</center></td>
                <td><center>{{$dado->preco}}</center></td>
                <td><center>{{ date('d-m-Y',strtotime($dado->dataPagamento))}}</center></td>
                <td><center>{{ date('d-m-Y', strtotime($dado->vencimento))}}</center></td>
                <td><center>{{$dado->situacao}}</center></td>
                <td>
                    <form action="{{route('adm.orcamento.pagos.deletar')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="preco" value="{{$dado->preco}}">
                        <input type="hidden" name="vencimento" value="{{$dado->vencimento}}">
                        <input type="hidden" name="dataPagamento" value="{{$dado->dataPagamento}}">
                        <input type="hidden" name="idusuario" value="{{$dado->idusuario}}">
                        <center><Button class="btn btn-outline-success" type="submit"><i class="fas fa-trash"></i></Button></center>
                    </form>
                </td>
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
