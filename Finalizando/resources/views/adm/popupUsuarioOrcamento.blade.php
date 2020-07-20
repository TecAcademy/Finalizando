<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/PopUpOrcamento.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Mensalidade</title>
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
    </nav>
    <!--Fim navBar-->
    <!-- Modal -->
    <div  class="modal fade" id="modalEscolhaUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
        <div  class="modal-dialog modal-dialog-centered" role="document">
            <div  class="modal-content">
                <div  class="modal-header">
                    <h5  class="modal-title" id="exampleModalLongTitle">Mensalidade de qual usuario?</h5><br><h6>Escolha o Usuario desejado!</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  action="{{ route('adm.orcamento.cadastro.realizar') }}" method="post">
                    @csrf

                    @if($errors->all())
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    @endif

                    <div class="modal-body">

                        <h1>
                            Preço: {{ $dados->preco }}
                        </h1>
                        <h4>
                            Data de Vencimento: {{ date('d-m-Y', strtotime($dados->vencimento)) }}
                        </h4>
                            <h4>
                            <select name="idusuario" id="idusuario" required>
                                @foreach($usuarios as $usuario)
                                    <option value="{{$usuario->id}}">{{ $usuario->nome }} | {{ $usuario->email }}</option>
                                @endforeach
                            </select>
                            </h4>
                            <input type="hidden" name="preco" value="{{ $dados->preco }}">
                            <input type="hidden" name="vencimento" value="{{ $dados->vencimento }}">


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-lg">Finalizar</button>
                        <a href="{{ route('adm.orcamento.cadastro') }}"><button type="button" class="btn btn-success btn-lg">Sair</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    {{-- Script que faz o popup aparecer quando a pagina carregar--}}
    <script>
        $(document).ready(function () {
            $('#modalEscolhaUsuario').modal('show');
        })
    </script>
</body>
</html>
