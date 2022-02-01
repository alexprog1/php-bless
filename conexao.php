<?php
// Definições de host, usuário, senha e database
$host = "rolemberg.ind.br:3306";
$usuario = "roleme81_root";
$senha = "bless255#";
$bd = "roleme81_BD_CASADIGITAL";

// Criando conexão com o banco de dados
$conn = mysqli_connect($host, $usuario, $senha, $bd);

// Verifica se existe erro na conexão e exibe caso exista
if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;

// Iniciando Sessão
session_start();

mysqli_select_db($conn,$bd);

/*
// Botao enviar
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
					echo "<script>alert('Usuario e senha não conferem');</script>";
				endif;
		else:
			echo "<script>alert('Usuario inexistente');</script>";
			//$erros[] = "<li> Usuario inexistente </li>";
		endif;

	endif;
endif;

// Cria a instrução SQL que vai selecionar os dados
$query = "SELECT * FROM users";

// Guarda a instrução SQL em uma variavel
$retorna_dados = mysqli_query($conn, $query);
*/
?>