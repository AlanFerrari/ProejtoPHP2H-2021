<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página Web - Sessão de Usuário 2.0</title>
</head>
<body>
	<?php	

		session_start();

		$_SESSION['nome'] = "Administrador";

		//elimina todas as variáveis de sessão, mas matém a sessão ativa.
		session_unset();

		//elimina toda a sesssão;
		//session_destroy();

	?>
	<h3>Sessão de Usuário</h3>
	Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>
	
</body>
</html>