<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Implementando os formulários</title>
	<?php	
		if($_POST) {

			session_start();

			$_SESSION["nome"] = $_POST["nome"];

			$_SESSION["senha"] = $_POST["senha"];


			header("location:sessao_formulario.php");
		}
		
	?>
</head>
<body>
	
	<form name="logar" method="post" action="implementando_formulario.php">
		Nome: <br>
		<input type="text" name="nome"><br>
		Senha: <br>
		<input type="password" name="senha"><br>
		<br>
		<input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>