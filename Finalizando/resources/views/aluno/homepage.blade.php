<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aluno/HomePageAluno.css') }}">
    <title>Inicio</title>
</head>
<body>
<!--start navBar-->
<nav class="navbar navbar-expand-lg navbar  navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('aluno.homepage') }}"> <img src="{{URL::asset('/images/logo.png' )}}" width="60" height="60">Tec Academy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('aluno.mostrarTreino') }}">listar Treino</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('aluno.homepage.logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    <a class="navbar-brand"><img src="{{URL::asset('/images/aluno.png' )}}" width="60" height="60"></a>
    <a class="navbar-brand">{{ session('nome') }}<br>{{ session('email') }}</a>
</nav>
<!--Fim navBar-->
<br><br><br>
<div class="container">
    <div class="div-right">
        <center><strong><h1>Olá seja Bem-Vindo, <span style="color: #993333">{{ session('nome') }}!</span></h1></strong></center>
        <p class="text">Olá, caso seja sua primeira vez usando o nosso sitemas, pedimos por gentileza
            que leia este texto. <br>
            Usando a barra de navegação é possivel que você consulte seu treino e veja qual será o treino
            de hoje</p>
        <center><strong><h1>Como Funciona o nosso sistema?!</h1></strong></center>
        <p class="text">Os professores avaliam sua situação montam um treino com base no que você deseja fazer,
        Hipertrofia, Emagrecer, Aerobico...
        Visando sempre seu melhor estar dentro do ambiente, em caso de troca de professor(a) informe
        o mesmo para que posso requisitar a troca.<br>
        Seus Treino serão lançados e atualizados por aqui, seu treino será mudado com o passar do tempo</p>
    </div>
  </div>

<script src="{{ asset('site/bootstrap.js') }}"></script>
<script src="{{ asset('site/jquery.js') }}"></script>
</body>
</html>
