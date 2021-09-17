<?php 
	
	$produto = 100;
	$cod = 0;

	echo "<br>Digite o valor de um produto: ".$produto;
	$cod += 4;
	
		switch($cod)	{
		case 1:
			$porc = $produto * 0.10;
			echo "<br><br>Código 1 recebe porcentagem de ".$porc."%";
			break;
		case 3:
			$porc = $produto * 0.25;
			echo "<br><br>Código 3 recebe porcentagem de ".$porc."%";
			break;
		case 4:
			$porc = $produto * 0.30;
			echo "<br><br>Código 4 recebe porcentagem de ".$porc."%";
			break;
		case 8:
			$porc = $produto * 0.50;
			echo "<br><br>Código 8 recebe porcentagem de ".$porc."%";
			break;
		}	
	
 ?>