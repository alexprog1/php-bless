<?php
// Importando dados do arquivo de conexão com o Mysql
include("conexao.php");

$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$und = $_POST['und'];
$marca = $_POST['marca'];
$fornecedor = $_POST['fornecedor'];
$quantidade = $_POST['quantidade'];
$precocusto = $_POST['precocusto'];
$precovenda = $_POST['precovenda'];
$situacao = $_POST['situacao'];
$nome = $_FILES['imagem']['name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$imagem = $_FILES['imagem']['tmp_name'];

if ( $imagem != NULL )
{
    $fp = fopen($imagem, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);

    $sql = mysqli_query($conn, "INSERT INTO `produtos` (`descricao`, `tipo`, `und`, `marca`, `fornecedor`,
    `quantidade`, `precocusto`, `precovenda`, `situacao`, `nome_imagem`, `tamanho_imagem`, `tipo_imagem`,
      `imagem`) VALUES ('$descricao', '$tipo', '$und', '$marca', '$fornecedor', '$quantidade', '$precocusto',
      '$precovenda', '$situacao', '$nome','$tamanho', '$tipo', '$conteudo')") or die(error());

    echo 'Registro inserido com sucesso!';
    header('Location: produtos.php');    
}
else{
  $sql = mysqli_query($conn, "INSERT INTO `produtos` (`descricao`, `tipo`, `und`, `marca`, `fornecedor`,
  `quantidade`, `precocusto`, `precovenda`, `situacao`, `nome_imagem`, `tamanho_imagem`, `tipo_imagem`,
    `imagem`) VALUES ('$descricao', '$tipo', '$und', '$marca', '$fornecedor', '$quantidade', '$precocusto',
    '$precovenda', '$situacao', '$nome','$tamanho', '$tipo', '$conteudo')") or die(error());

  echo 'Registro inserido com sucesso!';
  header('Location: produtos.php');
}
?>