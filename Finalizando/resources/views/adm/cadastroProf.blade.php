<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/CadastroProf.css') }}">
    <title>Cadastrar Intrutor(a)</title>
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
                    <a class="nav-link" href="{{ route('adm.cadastro.professor') }}">Cadastra novo professor</a>
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
        <br>
        <center><h1>Cadastro Instrutor(a)</h1></center>
        <br>
        <center><h3>Coloque no formulario abaixo os dados corretos,
                    caso erre tem um campo para editar!</h3></center>
        <br>
        <br>
        <div class="container">
            <div class="div-right">
                <center><strong><h1>Leia com atenção!</h1></strong></center>
                <p style="font-size: 27px;">Voce sera reponsavel pelo cadastro dos funcionarios,
                    todos os funcionarios contratados devem ser registrados nesta paginas
                    para melhor controle do proprio dono da academia. <br>
                    Sente-se com o funcionario ensira os dados
                    dele(a) corretamente e pessa para que ele coloque a sua senha.</p>
            </div>

            <div class="container">
        <div class="div-meio">
                <form class="formulario" action="{{ route('adm.cadastro.professor.realizar') }}" method="post">
                    @csrf
                    @if(session()->has('error'))
                        <div class="alert alert-warning">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <br>
                    <label class="label-form">Nome</label>
                    <input class="input-form" type="text" name="nome" id="nome" required>
                    <br>
                    <label class="label-form">Cpf</label>
                    <input class="input-form" type="text" name="cpf" id="cpf" required maxlength="11">
                    <br>
                    <label class="label-form">Data de nascimento</label>
                    <input class="input-form" type="date" name="nascimento" id="nascimento" required>
                    <br>
                    <label class="label-form">Telefone</label>
                    <input class="input-form" type="text" name="celular" id="celular" required maxlength="11">
                    <br>
                    <label class="label-form">E-mail</label>
                    <input class="input-form" type="email" name="email" id="email" required>
                    <br>
                    <label class="label-form">Senha</label>
                    <input class="input-form" type="password" name="password" id="password" required>
                    <br><br>
                    <button class="btn btn-success" type="submit">Cadastrar</button>
                    <br>
                </form>
                <br>
               </div>
                <br>
            </div>
       </div>
    </div>
        <br>
        <br>
        <br>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/jquery.js') }}"></script>
</body>
</html>
