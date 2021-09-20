<?php 

	$horasTrabalhadas = 40;
	$salarioHora = 50;
	$numDependentes = 2;
	$inss = 0;

	$salarioBruto = $horasTrabalhadas * $salarioHora + (50 * $numDependentes);

	echo "<br>Digite o número de horas trabalhadas: ".$horasTrabalhadas;
	echo "<br>Digite quanto você ganha por hora: ".$salarioHora;
	echo "<br><br>O sálario bruto é R$ ".$salarioBruto;
	
	if ($numDependentes > 0) {
		if ($salarioBruto <= 500) {
			$ir = 0;
			$inss = $salarioBruto * 8.5/100;
			$salarioBruto -= $inss;
			$salarioLiquido = $salarioBruto - $ir;
		}
		else if ($salarioBruto <= 1000) {
			$inss = $salarioBruto * 8.5/100;
			$salarioBruto -= $inss;
			$ir = $salarioBruto * 5/100;
			$salarioLiquido = $salarioBruto - $ir;
		}
		else{
			$inss = $salarioBruto * 9/100;
			$salarioBruto -= $inss;
			$ir = $salarioBruto * 7/100;
			$salarioLiquido = $salarioBruto - $ir;
		}		
	}
	else{
		if ($salarioBruto <= 500) {
			$ir = 0;
			$salarioLiquido = $salarioBruto - $ir;
		}
		else if ($salarioBruto <= 1000) {
			$ir = $salarioBruto * 5/100;
			$salarioLiquido = $salarioBruto - $ir;
		}
		else {
			$ir = $salarioBruto * 7/100;
			$salarioLiquido = $salarioBruto - $ir;
		}
	}	
	echo "<br>O número de dependentes é ".$numDependentes;
	echo "<br><br>O desconto do INSS é de R$ ".$inss;
	echo "<br>O desconto do Imposto de Renda é de R$ ".$ir;
	echo "<br><br>O sálario líquido é R$ ".$salarioLiquido;
 ?>