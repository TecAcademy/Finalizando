<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/EditarExercicio.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
    <title>Editar exercicios</title>
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
    <br>
    <div class="container">
        <br>
        <center><h2>Edição dos Exercicios</h2></center>
        <br>
        <center><img class="image" src="{{URL::asset('/images/dumbel.png')}}" width="100px" height="100px"></center>
        <br>
        <form form action="{{ route('adm.listar.edicao.exercicio.realizar') }}" method="post" class="needs-validation" novalidate>
            @csrf
            @method('PUT')

            @if($errors->all())
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            @endif
            <input class="label-form" type="hidden" name="exe" id="exe" value="{{ $exercicio->id }}"><br>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip01">Nome</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="nome" id="nome" value="{{ $exercicio->nome }}" required>
                    <div class="valid-tooltip">
                        Correto!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip02">Area Muscular</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="area" id="area" value="{{ $exercicio->areamuscular }}" required>
                    <div class="valid-tooltip">
                        Correto!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Aparelho</label>
                    <input type="text" class="form-control" id="validationTooltip03" name="aparelho" id="aparelho" value="{{ $exercicio->aparelho }}"a required>
                    <div class="valid-tooltip">
                        Correto!
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">Letra</label>
                    <select class="custom-select" id="validationTooltip04"  name="letra" id="letra" required>
                        <option selected disabled value="">Selecione</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                    <div class="invalid-tooltip">
                        Selecione uma opção.
                    </div>
                </div>
            </div>
            <br>
            <center><button class="btn btn-success btn-lg" type="submit">Finalizar edição</button></center>
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
</body>
</html>
