<?php 

	$senhaGravada = 456789;
	$senhaDigitada = 456789;
	$num1 = 8.5;
	$num2 = 2.8;
	$res = $num1 / $num2;

	echo "<br>Digite um número: ".$num1;
	echo "<br>Digite outro número: ".$num2;
	echo "<br><br>Digite sua senha: ";

	if ($senhaGravada == $senhaDigitada) {
		echo "<br><br>O resultado é ".$res;
	}
	else{
		echo "<br><br>Senha incorreta";
	}
	
 ?>