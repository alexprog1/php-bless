<?php
// Importando dados do arquivo de conexão com o Mysql
include("conexao.php");

$timezone = new DateTimeZone('America/Sao_Paulo');
//$data = new DateTime('now', $timezone);
$data = date('Y-m-d H:i:s');
$descricao = $_POST['descricao'];
$responsavel = $_POST['responsavel'];
$itemusado = $_POST['itemusado'];
$situacao = $_POST['situacao'];
$quant = $_POST['quantidade'];



$quantidadeupdate = $quant - $sql = mysqli_query($conn, "SELECT `quantidade` FROM `produtos` WHERE $descricao=`descricao`");

$sql = mysqli_query($conn, "INSERT INTO `servicos` (`data`, `descricao`, `responsavel`, `situacao`)
VALUES ('$data', '$descricao', '$responsavel', '$situacao')") or die(error());

//$sql2 = mysqli_query($conn, "UPDATE INTO `produtos` SET (`dateposted`) VALUES ('$quantidadeupdate') WHERE ($descricao=`descricao`)") or die(error());

//$sql3 = mysqli_query($conn, "INSERT INTO `servicos` (`data`) VALUES ('$date')"); or die(error());

echo 'Registro inserido com sucesso!';
header('Location: produtos.php');    
?>