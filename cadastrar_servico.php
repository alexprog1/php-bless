<?php 
// Importando dados do arquivo de conexão com o Mysql	
require_once('conexao.php');
?>

<!DOCTYPE html>                             <!-- Iniciando o documento index -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">              <!-- Meta tags Obrigatórias -->

        <!-- Informe ao navegador que o site está otimizado para celular -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Import bootstrap.css -->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <title>Cadastrar Serviços</title>   <!-- Titulo do Site -->
    </head>	
<body>
<Center>
</br>
    <div class="wrapper">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;"> 
        <h1 class="h1 mb-3 font-weight-normal">
                <a href="/bless/servicos.php" class="btn btn-">
                    <button class="btn btn-info">Listar Serviços</button>
                </a>
        </br>Cadastrar Serviço</h1>
        <form method="POST" enctype="multipart/form-data" action="cadastrarservico.php">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data</span>&nbsp
                    <span class="col-sm-2 col-form-label" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <?php 
                            $timezone = new DateTimeZone('America/Sao_Paulo');
                            $agora = new DateTime('now', $timezone);
                            echo $agora->format('d/m/Y'); // Exibe no formato desejado
                            ?>
                    </span>                    
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Descrição</span>
                    <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Responsável</span>
                    <input type="text" name="responsavel" id="descricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Itens Utilizados</span>
                    <input type="text" name="itemusado" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Quantidade</span>
                    <input type="text" name="quantidade" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Status</span>
                        <select type="text" name="situacao" id="inputState" class="form-select">
                            <option selected>Finalizado</option>
                            <option>Andamento</option>
                            <option>Aguardando Cliente</option>
                            <option>Aguardando Material</option>
                            <option>Cancelado</option>
                        </select>
                </div>
                <p>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-block btn-large">Cadastrar</button>
                </p>    
            </form>
                <p class="mt-5 mb-3 text-muted">&copy; 2021 - Bless - Sistemas Inteligentes</p>
            </div>
</Center>
    <!-- JavaScript no final do corpo para carregamento otimizado -->
    <script src="src/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>