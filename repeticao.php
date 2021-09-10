<?php
    $n = 0;
    while ($n <= 10) {
        echo $n."<br>";
        $n++;
    }
?> <hr>
<?php
    $n = 100;
    while ($n > 0) {
        echo "&nbsp;&nbsp;".$n;
        $n--;
    }
?><hr>
<?php
    $n = 500;
    do{
        echo $n."<br>";
        $n+=2;
    }while($n <= 550);
?><hr>
<?php
$n = 1;
    for($cont= 0; $cont <= 5; $cont++) {
        for ($i=0; $i < 2; $i++) { 
            echo $n." O valor de cont: ".$cont."<br>";
            $n++;
            echo $n." O valor de i: ".$i."<br>";
            $n++;
        }
    }
?><hr>
<?php
    $nomes = array('João', 'José', 'Paulo', 'Pedro');
    foreach ($nomes as $key => $item) {
        echo $item."<br>";
    }
?><hr>
<?php
    $x = 0;
    while ($x < 100) {
        echo "&nbsp".$x."<br>";
        if ($x == 10)
            break;
            $x++;
    }
?><hr>
<?php
    for ($a=1; $a < 100; $a++) { 
        if ($a == 10)
            goto desvio;
        echo $a."<br>";
    }
    desvio:
    echo "<br>Pronto, aqui está o desvio.";
?><hr>
<?php
    for ($s=1; $s <= 100; $s++) { 
        if ($s % 2 == 0) {
            continue;
        }
        echo $s."<br>";
    }
?><hr>