<?php 
	
	$produto = 200;

	echo "Digite o valor de um produto: ".$produto;

	$porc = $produto * 9/100;
	$produto -= $porc;

	echo "<br><br>O valor do produto com desconto de 9% é de R$ ".$produto;
 ?>