<!DOCTYPE html>
<html>
<head>
    <title>SignUp and Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/17ae136748.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
    <div class="form-container sign-up-container">

        <form  action="{{ route('aluno.cadastro.realizar') }}" method="post">
            @csrf
            <h1>Crie sua conta</h1>

            @if(session()->has('error'))
                <div class="alert alert-warning">
                    {{ session()->get('error') }}
                </div>
            @endif

            <input placeholder="Nome" type="text" name="nome" id="nome" required>
            <input placeholder="CPF" type="text" name="cpf" id="cpf" required maxlength="11">
            <input placeholder="Data de nascimento" type="date" name="nascimento" id="nascimento" required>
            <input placeholder="Celular" type="text" name="celular" id="celular" required maxlength="11">
            <input placeholder="E-mail" type="email" name="email" id="email" required>
            <input placeholder="Senha" type="password" name="password" id="password" required>
            <button type="submit"><i class="fas fa-paper-plane"></i></button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="{{ route('aluno.login.realizar') }}" method="post">
            @csrf
            <h1>Login</h1>
            <br><br>
            @if($errors->all())
                <div>
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>

            @endif


            <span>Entre na sua conta!</span>
            <input placeholder="E-mail" type="email" name="email" id="email">
            <input placeholder="Senha" type="password" name="password" id="password">
            <a href="#">Esqueceu sua senha ?</a>

            <button type="submit">login</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Olá, amigo que bom rever-lo!</h1>
                <p>Faça login para iniciarmos!</p>
                <button class="ghost" id="signIn">Entrar</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Olá, Possui conta!?</h1>
                <p>Cadastre-se e veja o que lhe aguarda!</p>
                <button class="ghost" id="signUp">registre-se</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>


</body>
</html>








