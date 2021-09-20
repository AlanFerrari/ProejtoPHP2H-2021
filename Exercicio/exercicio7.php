<?php

    $tempo = 3;
    $velocidade = 80;

    echo "<br>Digite o tempo da viagem em horas: ".$tempo;
    echo "<br>Digite a velocidade média do carro durante a viagem em (Km/h): ".$velocidade;

    $distancia = $tempo * $velocidade;
    $litrosUsados = $distancia /12;

    echo "<br><br>A distância percorrida foi de ".$distancia." Km";
    echo "<br>E foi gasto ".$litrosUsados." litros de gasolina";

?>