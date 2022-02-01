<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <title>Cadastrar Usuário</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  <link rel="sortcut icon" href="icone.ico" type="image/x-icon" />
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container">
	<div class="mb-3">
	</br>
        		<h2>Bless<strong> Sistemas Inteligentes</strong>&nbsp;</h2>
		<form name="cadastro" method="POST" action="cadastrarusuario.php"><br />
				<h3>Seu nome</h3>
  		<input name="name" type="text" id="name" value="" required />
				<h3>E-mail</h3>
		<input name="email" type="text" id="email" value="" required  />
				<h3>Crie sua senha</h3>
		<input name="password" type="password" id="password" value="" required />
		</br>		
		</br>
		<input type="submit" name="submit" value="Enviar Solicitação de Cadastro"  class="btn btn-primary btn-block btn-large" />	
		</form>
	</div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>