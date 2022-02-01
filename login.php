<?php
require_once('conexao.php');

if(isset($_POST['submit'])):
	$erros = array();
	$email = mysqli_escape_string($conn, $_POST['email']);
	$password = mysqli_escape_string($conn, $_POST['password']);

	if (empty($email) or empty($password)):
		$erros[] = "<li> O campo e-mail/senha precisa ser preenchido </li>";
	else:
		$sql = "SELECT email FROM users WHERE email = '$email'";
		$resultado = mysqli_query($conn, $sql);


		if (mysqli_num_rows($resultado) > 0):
			$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			$resultado = mysqli_query($conn, $sql);

				if (mysqli_num_rows($resultado) == 1):
					$dados = mysqli_fetch_array($resultado);
					mysqli_close($conn);
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					header('Location: dashboard.php');
				else:
					//$msg = $erros[] = "<li> Usuario e senha não conferem </li>";
					header('Location: index.php');
					echo "<script>alert('Usuario e senha não conferem');</script>";
				endif;
		else:
			header('Location: index.php');
			echo "<script>alert('Usuario inexistente');</script>";
			//$erros[] = "<li> Usuario inexistente </li>";
		endif;

	endif;
endif;

// Cria a instrução SQL que vai selecionar os dados
$query = "SELECT * FROM users";

// Guarda a instrução SQL em uma variavel
$retorna_dados = mysqli_query($conn, $query);

/*
if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select login from users where login = '{$login}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['logado'] = $logado;
	header('Location: dashboard.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
*/

?>