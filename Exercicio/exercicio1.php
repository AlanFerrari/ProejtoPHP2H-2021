<?php 
	
	$produto = 100;
	$cod = 4;

	echo "<br>Escolha o código do produto, pode ser (1, 3, 4, 8)";
	echo "<br>Digite o código do produto: ".$cod;
	echo "<br>Digite o valor de um produto: ".$produto;
	
		switch($cod)	{
		case 1:
			$porc = $produto * 0.10;
			echo "<br><br>Código 1 recebe porcentagem de ".$porc."%";
			$produto = $produto + $porc;
			echo "<br>O valor passa a ser R$ ".$produto;
			break;
		case 3:
			$porc = $produto * 0.25;
			echo "<br><br>Código 3 recebe porcentagem de ".$porc."%";
			$produto = $produto + $porc;
			echo "<br>O valor passa a ser R$ ".$produto;
			break;
		case 4:
			$porc = $produto * 0.30;
			echo "<br><br>Código 4 recebe porcentagem de ".$porc."%";
			$produto = $produto + $porc;
			echo "<br>O valor passa a ser R$ ".$produto;
			break;
		case 8:
			$porc = $produto * 0.50;
			echo "<br><br>Código 8 recebe porcentagem de ".$porc."%";
			$produto = $produto + $porc;
			echo "<br>O valor passa a ser R$ ".$produto;
			break;
		}	
	
 ?>