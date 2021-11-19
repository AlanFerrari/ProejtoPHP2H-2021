<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página Web - Sessão de Usuário</title>
</head>
<body>
	<?php	

		session_start();

		$_SESSION['nome'] = "Administrador";

	?>
	<h3>Sessão de Usuário</h3>
	Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>
	
</body>
</html>