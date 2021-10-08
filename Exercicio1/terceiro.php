<?php 
    $data = "26 de agosto de 2021"; //string
    $salario = 1030.00;              //float ou double
    $cargo = "Estagiário";          //string
    $idade = 18;                    // intenger ou int
    $resultado = true;              //boolean

    if ($resultado) {
        echo "Verdadeiro <br><br>";
    }
    echo "Arquivo criado em $data <br>";
    
    printf("Salário mínimo: R$ %.2f <br>", $salario);
    
    $texto = sprintf("%s recebe R$ %.2f por mês <br><br>", $cargo, $salario*2);
    
    echo $texto;

    $fundo = "azul";
    $Fundo = "amarelo";
    $FUNDO = "vermelho";

    echo $fundo."-".$Fundo."-".$FUNDO."<br><br>";
?>
<?php
    $nome = "Armandino"; //variável local no script

    function exibir(){
        $nome = "Josefina"; //variável local na função

        echo "Valor da variável dentro da função ".$nome;
    }
    exibir(); //chamando a função para imprir o echo dentro dela
    echo "<br> Valor da variável fora da função ".$nome; //imprimindo o valor da variável local no script
?>
<?php
    $ano = 2021; //variável local no script

    function exiba($parametro){ //variável como parâmetro
        $parametro += 4;
        return $parametro;
    }
    echo "<br><br> Estamos em ".$ano." e daqui a 4 anos estaremos em ".exiba($ano);
?>
<?php 
    $ano = 2021;

    function exibi(){
        GLOBAL $ano; //definição de variável global
        $ano++;
        return $ano;
    }
    echo "<br><br> Ano: ".$ano;
    echo "<br> Ano: ".exibi();
    echo "<br> Ano: ".exibi();
    echo "<br> Ano: ".$ano;
?>
<?php
    $ano = 2021;
    function exib(){
        STATIC $ano; //definindo variável estática
        $ano++;
        echo "<br> ".$ano;
    }
    echo exib();
    echo exib();
    echo exib();
?>