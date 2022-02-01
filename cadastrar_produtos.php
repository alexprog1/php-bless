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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Import bootstrap.css -->
        <link href="src/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Titulo do Site -->
        <title>Cadastrar Produto</title>
    </head>	
<body>
<Center>
</br>
    <div class="wrapper">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;"> 
        <h1 class="h1 mb-3 font-weight-normal">
                <a href="/bless/produtos.php" class="btn btn-">
                    <button class="btn btn-info">Listar Produtos</button>
                </a>
        </br>Cadastrar Produto</h1>
        <form method="POST" enctype="multipart/form-data" action="cadastrarproduto.php">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Descrição</span>
                    <input type="text" name="descricao" id="descricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                    <select name="tipo" id="inputState" class="form-select">
                        <option selected>Diversos...</option>
                        <option>Tinta</option>
                        <option>Medidor</option>
                        <option>Eletrodo</option>
                        <option>EPI</option>
                    </select>
                    &nbsp<span class="input-group-text" id="inputGroup-sizing-default">Marca</span>
                    <input type="text" name="marca" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    &nbsp<span class="input-group-text" id="inputGroup-sizing-default">UND</span>
                    <input type="text" name="und" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Fornecedor</span>
                    <input type="text" name="fornecedor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Quantidade</span>
                    <input type="text" name="quantidade" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Preço de Custo</span>
                    <input type="text" name="precocusto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    &nbsp<span class="input-group-text" id="inputGroup-sizing-default">Preço de Venda</span>
                    <input type="text" name="precovenda" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Situação</span>
                        <select type="text" name="situacao" id="inputState" class="form-select">
                            <option selected>Novo</option>
                            <option>Usado</option>
                            <option>Outro</option>
                        </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group mb-1">
                        <span class="input-group-text-left" id="inputGroup-sizing-default">Enviar imagem: </span>
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                    <input type="file" name="imagem" accept="src/images/produtos/*" class="form-control" >
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