<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Implementando os formulários - Validos</title>

	<?php	

		session_start();

		if($_SESSION["nome"] != "master") {

			session_destroy();

			header("location:implementando_formulario.php");
		}

	?>
</head>
<body>
	
	<b>Página autorizada</b>

</body>
</html>