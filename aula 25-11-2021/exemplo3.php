<?php 

	//Criando uma conexão com o banco de dados
	$con = mysqli_connect("localhost","alan","123456","empresaabc");

	//Checando a conexão
	if(mysqli_connect_errno()){
		echo "Erro ao conectar com a base de dados: ".mysqli_connect_error();
	}
	else {
		echo "Conexão Aberta";

		mysqli_close($con);

		echo "<br>Finalizando Conexão";
	}

 ?>