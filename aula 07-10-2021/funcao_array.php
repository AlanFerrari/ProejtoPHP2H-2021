<?php

    $variavel = "Ana";

    $nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");

    if (is_array($variavel)) {
        echo "<br> Variável é um array";
    }
    else {
        echo "<br> Variável não é um array";
    }
    if (is_array($nomes)) {
        echo "<br> Nomes é um array";
    }
    else {
        echo "<br> Nomes não é um array";
    }

?>
<br>
<?php

    $nome = array("Maria", "José", "Pedro");
    array_unshift($nome, "Ana");

    foreach ($nome as $item) {
        echo "<br>".$item;
    }

?>
<br>
<?php

    $names = array("Maria", "José", "Pedro");
    array_push($names, "Ana");

    foreach ($names as $item) {
        echo "<br>".$item;
    }

?>
<br>
<?php

    $name = array("Maria", "José", "Pedro");
    $excluido = array_shift($name);

    foreach ($name as $item) {
        echo "<br>".$item;
    }

    echo "<br> Nome removido: ".$excluido;

?>
<br>
<?php

    $nomes1 = array("Maria", "José", "Pedro");
    $excluido = array_pop($nomes1);

    foreach ($nomes1 as $item) {
        echo "<br>".$item;
    }

    echo "<br> Nome removido: ".$excluido;

?>
<br>
<?php

$nomes2 = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");

if (array_key_exists("ZE", $nomes2)) {
    echo "<br> Nome encontrado no vetor, através da chave.";
}

?>
<br>
<?php

    $nomes3 = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");
    $chave = array_search("Ana", $nomes3);

    echo "<br> Chave de busca realizada: ".$chave;

?>
<br>
<?php

    $nomes4 = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");
    $chaves = array_keys($nomes4);

    foreach ($chaves as $item) {
        echo "<br>".$item;
    }

    echo "<br>";

    //função para exibir dados de um vetor
    print_r($chaves);

?>
<br>
<?php

    $names1 = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");
    $valores = array_values($names1);

    echo "<br>";
    print_r($valores);

?>
<br>
<?php

    $names2 = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");

    echo "<br> Next: ".next($names2);
    echo "<br> End: ".end($names2);
    echo "<br> Prev: ".prev($names2);
    echo "<br> Reset: ".reset($names2);

?>
<br>
<?php

    $names3 = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");

    while ($chave = key($names3)) {
        echo "<br>".$chave;

        next($names3);
    }

?>
<br><br>
<?php

    $names4 = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");

    $reverso = array_reverse($names4);

    print_r($reverso);

?>
<br><br>
<?php
    //Esta função classifica um array ordenando do menor para o maior.

    $nome1 = array("MA", "ZE", "PE", "AN");

    sort($nome1);

    print_r($nome1);

?>
<br>