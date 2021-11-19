<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Implementando os formulários</title>
	<?php	

		session_start();

	?>
</head>
<body>
	
	<b>Funcionário: </b> <?php echo $_SESSION["nome"] ?>, logado com sucesso. <br>

	<b>Data de conexão: </b> <?php echo date("d/m/y") ?> <br>

	<b>Hora de conexão: </b> <?php echo date("H:i:s") ?> <br>

	<a href="formulario_valido.php">Área de administrador</a>
	
</body>
</html>