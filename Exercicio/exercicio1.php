<?php 
	
	$produto = 100;
	$cod = 4;
	
		switch($cod)	{
		case 1:
			$porc = $produto * 1.10;
			echo "Código 1 recebe porcentagem de ".$porc;
			break;
		case 3:
			$porc = $produto * 1.25;
			echo "<br>Código 3 recebe porcentagem de ".$porc;
			break;
		case 4:
			$porc = $produto * 1.30;
			echo "<br>Código 4 recebe porcentagem de ".$porc;
			break;
		case 8:
			$porc = $produto * 1.50;
			echo "<br>Código 8 recebe porcentagem de ".$porc;
			break;
		}	
	
 ?>