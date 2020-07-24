<!DOCTYPE html>
<html>
<head>
    <title>Seja Bem Vindo administrador(a)</title>
    <link href="{{ asset('css/adm/LoginAdm.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}"  width="125" height="125">
</head>
<body>

<!--Fim navBar-->
<img class="wave" src="{{URL::asset('/images/backloginadm.png')}}">
<div class="container">
    <div class="img">
        <h1 style="color:#14ffe9;">Tec Academy</h1><p style="color:#14ffe9;">&copy;
    </div>
    <div class="login-content">
        <form action="{{ route('adm.cadastro.realizar') }}" method="post">
            @csrf
            <h1>Olá seja bem-vindo administrador!</h1>

            @if(session()->has('error'))
                <div class="alert alert-warning">
                    {{ session()->get('error') }}
                </div>
            @endif
            <img src="{{URL::asset('/images/avatar.png')}}">
            <h2 class="title">Bem Vindo!</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <input placeholder="Nome" type="text" name="nome" id="nome" required>
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <input placeholder="E-mail" type="email" name="email" id="email" required>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">

                    <input placeholder="Senha" type="password" name="password" id="password" required>
                </div>
            </div>
            <a href="#">Esqueceu sua senha ?</a>
            <button class="btn" type="submit">cadastrar</button>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/loginadm.js') }}"></script>
</body>
</html>
