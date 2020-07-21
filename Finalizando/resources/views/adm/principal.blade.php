<!doctype html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/HomeAdm.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
    <title>Incio</title>
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
    <br>
    <center><h2 style="color: #555555"> Painel Administrativo! </h2></center>
    <br><br>
    <div class="container">
        <div class="right">
            <center>
                <p class="texto"><br>
                Olá <strong><span style="font-size: 26px; color:black">{{ session('nome') }}</span></strong><br>
                <img  src="{{URL::asset('/images/logo.png' )}}"><br>
                   Tec Academy &#169;
                </p>
            </center>
        </div>
        <div class="left">
            <center>
                  <br>
                  <h1>Esse site é para você, dono de Academias quer ter um diferencial?!</h1><br>
                  <p class="texto">
                        Vamos tornar sua experiencia cada vez melhor, juntos!
                        Nossa sitema tenta ajuda o maximo possivel com o maior conforto possivel
                        com um design simples e elegante para seu melhor desempenho. <br>
                        Um complemento para o seu negocio e o diferencial do seu negocio para os demais.
                        <br><br>
                            <p class="dese">Desenvolvedores: Mathues Araújo & Eduardo Araújo &#169;</p>


                  </p>
            </center>
        </div>
    </div>






    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
