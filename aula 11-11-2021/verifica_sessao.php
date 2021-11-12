<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verifica sessões</title>
</head>
<body>
	<?php 

		session_start();

		if ($_SESSION["nome"] != "master") {
			
			session_destroy();

			header("location:sessao_bloqueando_paginas.php");
		}

	 ?>

	 <b>Página autorizada</b>

</body>
</html>