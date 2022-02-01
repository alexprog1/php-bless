<?php 
// Importando dados do arquivo de conexão com o Mysql
require_once('conexao.php');
?>

<!-- Iniciando o documento index -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">

        <!-- Informe ao navegador que o site está otimizado para celular -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!-- Import bootstrap.css -->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Titulo do Site -->
        <title>Bless - Sistemas Inteligentes</title>
    </head>	
<body>
<center>
</br>
    <div class="wrapper">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;"> 
            <img class="mb-4" src="src/images/logo.svg" alt="" width="90" height="90">
            </br>
            </br>
            </br>
            <h1 class="h1 mb-3 font-weight-normal">Login</h1>
                <form class="form-signin text-center" method="POST" action="login.php">
                    <p><input class="form-control" type="text" id="email" name="email" placeholder="Username" required autofocus>
                    <input class="form-control" type="password" id="password" name="password"   placeholder="Password" required autofocus></p>
                    <p><button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-large">Iniciar Sessão</button></p>
                    <!-- <a class="teal-text" href="cadastrar_usuario.php">><b> Cadastrar | Esqueceu a senha?</b></a> -->
                    <p class="mt-5 mb-3 text-muted">&copy; 2021 - Bless - Sistemas Inteligentes</p>
                </form>
        </div>
    </div>
</center>

    <!-- JavaScript no final do corpo para carregamento otimizado -->
    <script src="src/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>