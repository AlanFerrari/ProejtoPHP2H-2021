<?php 

	$horasTrabalhadas = 40;
	$salarioHora = 80;
	$numDependentes = 3;

	$salarioBruto = $horasTrabalhadas * $salarioHora + (50 * $numDependentes);
	
	echo "<br>O número de horas trabalhadas é ".$horasTrabalhadas." horas";
	echo "<br>O sálario hora é de R$ ".$salarioHora." reais";
	echo "<br>O número de dependentes é ".$numDependentes;
	echo "<br>O sálario bruto é R$ ".$salarioBruto." reais";
 ?>