<?php 
	
	echo "<br> Olá seja bem vindo " .$_SERVER['REMOTE_ADDR'];
	echo "<br> Você está utilizando o navegador: " .$_SERVER['HTTP_USER_AGENT'];

	define("PI", 3.14162537);
	define("DISC", "Matemática");

	echo "<br><br> O valor do pi é: ".PI;
	echo "<br> O nome do curso é: ".DISC;

	$curso = 7;
	$curso += 2; //é igual a $curso = $curso + 2;
	$valor = 10;
	$valor %= 2; //é igual a $valor = $valor % 2;
	
	//if aninhado
/*	if (condition) {
		if (condition) {
			if (condition) {
				echo "string";
			}
		}
	}*/
	echo "<br><br>";
	$opcao = 3;
	switch ($opcao) {
		case 1:
			echo "A opção 1 foi selecionada!";
			break;
		case 2:
			echo "A opção 2 foi selecionada!";
			break;
		case 3:
			echo "A opção 3 foi selecionada!";
			break;
		default:
			echo("Opção inválida");
			break;
	}
 ?>