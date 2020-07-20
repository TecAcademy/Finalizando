<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm/CadastroOrcamento.css') }}">
    <title> Orcamentos </title>
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
        <br>
        <center><h3>Cadastro de mensalidade</h3></center>
        <br>
        <div class="container">
            <form action="{{ route('adm.orcamento.cadastro.usuario') }}" method="post">
                <h2>Complete o campo corretamente, em caso de erro apos o cadastro é possivel edita-lo</h2><br>
                @csrf
                @if($errors->all())
                    @foreach($errors->all() as $error)
                        <p> {{ $error }} </p>
                    @endforeach
                @endif

               <center> <label class="label-form" type="input-form">Data do Vencimento</label>
                <br>
                    <input class="input-form" type="date" name="vencimento" id="vencimento" required> <br><br>
                <label class="label-form" type="input-form">Valor</label><br>
                    <input class="input-form" type="number" name="preco" id="preco" step="any" min="0" required>
                <br><br>
                <button class="btn btn-outline-primary btn-lg" type="submit">usuario</button>
               </center>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        {{--Script que define o limite de hoje para a data de vencimento--}}
        <script>
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            if(dd<10){
                    dd='0'+dd
                }
                if(mm<10){
                    mm='0'+mm
                }

            today = yyyy+'-'+mm+'-'+dd;
            document.getElementById("vencimento").setAttribute("min", today);
        </script>
</body>
</html>
