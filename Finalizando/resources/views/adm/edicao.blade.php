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
    <center><h1>Edição Usuario</h1></center>

   <center><h4> Preencha de acordo com sua escolha deste usuario!</h4></center>


    <!--  route('users.edit.do', ['user' => $user])  -->
    <div class="container">
    <form action="{{ route('adm.listar.deletar.realizar', ['user' => $user]) }}" method="post">
        <center><br>
        @csrf
        @method('PUT')

        @if($errors->all())
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif

            <label class="label-form" for="">Nome</label><br>
            <input class="input-form"  type="text" name="nome" id="nome" value="{{ $user->nome }}" required><br><br>
            <label class="label-form" for="">E-mail</label><br>
            <input class="input-form"  type="email" name="email" id="email" value="{{ $user->email }}" required><br><br>
            <label class="label-form" for="">Senha</label><br>
            <input class="input-form"  type="password" name="password" id="password" placeholder="digite uma nova senha"><br><br>
            <label class="label-form" for="">Nascimento</label><br>
            <input class="input-form"  type="date" name="nascimento" id="nascimento" value="{{ $user->nascimento }}"><br><br>
            <label class="label-form" for="">Cpf</label><br>
            <input class="input-form"  type="text" name="cpf" id="cpf" required maxlength="11" value="{{ $user->cpf }}"><br><br>
            <label class="label-form" for="">Celular</label><br>
            <input class="input-form"  type="text" name="celular" id="celular" required maxlength="11" value="{{ $user->celular }}"><br><br>
            <br>
            <h4>Mudar Cargo do Usuario</h4>
            <br>
            <!--Limitando a visão (corretamente)!-->
            @if($user->acesso == '0')
                 <input class="radio" type="radio" name="acesso" id="acesso" value="1" checked> Professor
                <input class="radio" type="radio" name="acesso" id="acesso" value="2" > Adm
            @elseif($user->acesso == '1')
                <input class="radio" type="radio" name="acesso" id="acesso" value="0" checked> Aluno
                <input class="radio" type="radio" name="acesso" id="acesso" value="2"> Adm
            @elseif($user->acesso == '2')
                <input class="radio" type="radio" name="acesso" id="acesso" value="0" checked> Aluno
                <input class="radio" type="radio" name="acesso" id="acesso" value="1"> Professor
            @endif

            <br>
            <br>
        <button class="btn btn-success btn-lg" type="submit"> confirmar edicao </button>
        </center>
        <br><br>
    </form>
    </div>
<br>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
</body>
</html>
