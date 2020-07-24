<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/EdiçãoUsuario.css') }}">
    <title>Editar usuario</title>
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
    <center><h1>Edição Usuario</h1></center>
    <br>
    <div class="container">
        <br>
        <h2>Usuario selecionado para edição</h2>
        <center><a><img src="{{URL::asset('/images/usuario.png' )}}" width="200" height="200"></a></center>
        <center><h2><span style="color: black">{{ $user->nome }}</span></h2></center>
        <br><br>
        <form action="{{ route('adm.listar.deletar.realizar', ['user' => $user]) }}" method="post" class="needs-validation" novalidate>
            @csrf
            @method('PUT')

            @if($errors->all())
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            @endif
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Nome</label>
                    <input type="text" class="form-control" id="validationTooltip03" name="nome" id="nome" value="{{ $user->nome }}" required>
                    <div class="invalid-tooltip">
                        Preencha Corretamente.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">E-mail</label>
                    <input type="text" class="form-control" id="validationTooltip03" name="email" id="email" value="{{ $user->email }}" required>
                    <div class="invalid-tooltip">
                        Preencha Corretamente.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Senha</label>
                    <input type="text" class="form-control" id="validationTooltip03" name="password" id="password" placeholder="digite uma nova senha">
                    <div class="invalid-tooltip">
                        Preencha Corretamente.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Data de nascimento</label>
                    <input type="date" class="form-control" id="validationTooltip03" name="nascimento" id="nascimento" value="{{ $user->nascimento }}">
                    <div class="invalid-tooltip">
                        Preencha Corretamente.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Cpf</label>
                    <input type="text" class="form-control" id="validationTooltip03"  name="cpf" id="cpf" required maxlength="11" value="{{ $user->cpf }}" required>
                    <div class="invalid-tooltip">
                        Preencha Corretamente.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Celular</label>
                    <input type="text" class="form-control" id="validationTooltip03" name="celular" id="celular" required maxlength="11" value="{{ $user->celular }}" required>
                    <div class="invalid-tooltip">
                        Preencha Corretamente.
                    </div>
                </div>
            </div>
            <div class="check-box">
                <div class="alert alert-danger" role="alert">
                <strong>
                    <center>
                        <h6>Caso não haja necessidade de alteração no nivel de acesso, simplesmente finalize ação</h6>
                        <h2>Selecione com atenção!</h2>
                    <label class="check">Mudar cargo:</label>
                    @if($user->acesso == '2' )
                        <input type="radio" name="acesso" id="acesso" value="0"> <label class="check">Aluno</label>
                        <input type="radio" name="acesso" id="acesso" value="1"><label class="check">Professor</label>
                        <input type="radio" name="acesso" id="acesso" value="2" checked><label class="check">Administrador</label>
                    @elseif($user->acesso == '1' )
                        <input type="radio" name="acesso" id="acesso" value="0"><label class="check">Aluno</label>
                        <input type="radio" name="acesso" id="acesso" value="1" checked><label class="check">Professor</label>
                        <input type="radio" name="acesso" id="acesso" value="2"><label class="check">Administrador</label>
                    @else
                        <input type="radio" name="acesso" id="acesso" value="0"checked><label class="check">Aluno</label>
                        <input type="radio" name="acesso" id="acesso" value="1"><label class="check">Professor</label>
                        <input type="radio" name="acesso" id="acesso" value="2"><label class="check">Administrador</label>
                    @endif
                </strong></center>
                </div>
            </div>
            <br><br>
            <center><button class="btn btn-success btn-lg" type="submit" >Finalizar edição</button></center>
        </form>

    </div>
<br>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
</body>
</html>
