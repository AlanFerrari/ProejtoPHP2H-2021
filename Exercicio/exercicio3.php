<?php 

	$senhaGravada = 456789;
	$senhaDigitada = 456789;
	$num1 = 8.5;
	$num2 = 2.4;
	$res = $num1 / $num2;

	echo "<br>Digite um número real: ".$num1;
	echo "<br>Digite outro número real: ".$num2;
	echo "<br><br>Digite sua senha: ********";

	if ($senhaGravada == $senhaDigitada) {
		echo "<br><br>O resultado é ".$res;
	}
	else{
		echo "<br><br>Senha incorreta";
	}
	
 ?>