<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/Home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
    <title>Seja Bem-Vindo!</title>
</head>
<body>
<!--start navBar-->
<nav class="navbar navbar-expand-lg navbar  navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> <img src="{{URL::asset('/images/logo.png' )}}" width="60" height="60">Tec Academy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('site.welcome') }}">inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('aluno.login') }}">Login e Cadastro</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contato
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">WhatsApp</a>
                    <a class="dropdown-item" href="#">(19)9874-5454</a>
                    <a class="dropdown-item" href="#">(19)1024-8457</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--Fim navBar-->
<!--Carrousel start-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{URL::asset('/images/Caro02.png' )}}">
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('/images/caro03.png' )}}">
        </div>
        <div class="carousel-item">
            <img src="{{URL::asset('/images/Caro01.png' )}}">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--Fim couserl-->
<br>
<div class="container">
    <div class="div-left">
        <center><strong><h1>Entenda mais!</h1></strong></center>
        <p>Seja bem vindo a nossa academia, tenha seu conforto e melhor desenvolvimento em seus treinos
            aqui voce sera atendido com todo o padrão e conforto que a academia pode lhe entregar, temos
            planos semestrais de 60 reais parcelados em  6 vezes no cartão ou 330 reais a vista.
            Seu treino sera montado e disponibilizado no nosso site, voce tera suas aviliações fisicas, seus
            treinos montados, como todo carinho e disgn.
            Praticidade tanto para o aluno quanto para o professor, venha nos conhecer.</p>
    </div>
    <div class="div-right">
        <center><strong><h1>Como Funciona?!</h1></strong></center>
        <p> Seja bem vindo a nossa academia, tenha seu conforto e melhor desenvolvimento em seus treinos
            aqui voce sera atendido com todo o padrão e conforto que a academia pode lhe entregar, temos
            planos semestrais de 60 reais parcelados em  6 vezes no cartão ou 330 reais a vista.
            Seu treino sera montado e disponibilizado no nosso site, voce tera suas aviliações fisicas, seus
            treinos montados, como todo carinho e disgn.
            Praticidade tanto para o aluno quanto para o professor, venha nos conhecer.</p>
    </div>

    <div class="middle">
        <a class="btn" href="#">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn" href="#">
            <i class="fab fa-twitter"></i>
        </a>
        <a class="btn" href="#">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>
<br>
<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
<script src="https://kit.fontawesome.com/17ae136748.js" crossorigin="anonymous"></script>
<script src="">

</script>

</body>
</html>
