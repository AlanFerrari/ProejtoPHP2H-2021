<?php 

	$numDeAulas = 10;
		$horaAula = 124;

	echo "<br>Digite quanto você ganha por aula: ".$horaAula;
	echo "<br>Digite quantas aulas você deu esse mês: ".$numDeAulas;
	
	$salarioBruto = $horaAula * $numDeAulas;
	echo "<br><br>Salário Bruto R$ ".$salarioBruto;

	if ($salarioBruto <= 1100) {
		$inss = $salarioBruto * 7.5/100;
		$salarioLiquido = $salarioBruto - $inss;
		echo "<br>Desconto INSS R$ ".$inss;
		echo "<br><br>O seu sálario líquido é de R$ ".$salarioLiquido;
	}
	elseif ($salarioBruto <= 2203.48) {
		$faixa1 = 1100 * 7.5/100;
		$faixa2 = ($salarioBruto - 1100) * 9/100;
		$inss = $faixa1 + $faixa2;
		$salarioLiquido = $salarioBruto - $inss;
		echo "<br>Desconto INSS R$ ".$inss;
		echo "<br><br>O seu sálario líquido é de R$ ".$salarioLiquido;
	}
	elseif ($salarioBruto <= 3305.22) {
		$faixa1 = 1100 * 7.5/100;
		$faixa2 = (2203.48 - 1100) * 9/100;
		$faixa3 = ($salarioBruto - 2203.48) * 12/100;
		$inss = $faixa1 + $faixa2 + $faixa3;
		$salarioLiquido = $salarioBruto - $inss;
		echo "<br>Desconto INSS R$ ".$inss;
		echo "<br><br>O seu sálario líquido é de R$ ".$salarioLiquido;
	}
	elseif ($salarioBruto <= 6433.57) {
		$faixa1 = 1100 * 7.5/100;
		$faixa2 = (2203.48 - 1100) * 9/100;
		$faixa3 = (3305.22 - 2203.48) * 12/100;
		$faixa4 = ($salarioBruto - 3305.22) * 14/100;
		$inss = $faixa1 + $faixa2 + $faixa3 + $faixa4; 
		$salarioLiquido = $salarioBruto - $inss;
		echo "<br>Desconto INSS R$ ".$inss;
		echo "<br><br>O seu sálario líquido é de R$ ".$salarioLiquido;
	}
	else {
		$faixa1 = 1100 * 7.5/100;
		$faixa2 = (2203.48 - 1100) * 9/100;
		$faixa3 = (3305.22 - 2203.48) * 12/100;
		$faixa4 = (6433.57 - 3305.22) * 14/100;
		$inss = $inss = $faixa1 + $faixa2 + $faixa3 + $faixa4;;
		$salarioLiquido = $salarioBruto - $inss;
		echo "<br>Desconto INSS R$ ".$inss;
		echo "<br><br>O seu sálario líquido é de R$ ".$salarioLiquido;
	}	
 ?>