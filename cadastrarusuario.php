<?php
// Importando dados do arquivo de conexão com o Mysql
include("conexao.php");

// Atribuição dos campos vindo do formulário para variavel
if(isset($_POST['submit'])){
    $name	= $_POST["name"];	
    $email	= $_POST["email"];
    $password	= $_POST["password"];
}

function error(){
  echo "<script>alert('Erro ao inserir dados na tabela, Verifique seu Banco de Dados');window.history.back()</script>";
}

// Selecionando o banco de dados que ira receber as informações.
$setbanco;

// Inserindo informações no banco de dados
$sql = mysqli_query($conn,"INSERT INTO `users` (`name`, `email`, `password`) VALUES('$name', '$email', '$password')") or die(error());

// Fechando conexão com o banco de dados
mysqli_close($conn);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <title>Bless</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  <link rel="sortcut icon" href="icone.ico" type="image/x-icon" />;
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="login">
	<h1>Cadastro Efetuado com Sucesso!</h1>
</div>
  <php?
else{ 

?>
<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=http://localhost/bless/index.php">
<?
?>
    <script src="js/index.js"></script>

</body>
</html>