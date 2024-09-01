<?php

if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);

    if ($numero % 2 == 0) {
        $parOuImpar = "par";
    } else {
        $parOuImpar = "impar";
    }

    if ($numero > 0) {
        $positivoOunegativo = "positivo";
    } elseif ($numero < 0) {
        $positivoOunegativo = "negativo";
    } else {
        $positivoOunegativo = "zero";
    }

    echo "O número $numero é $parOuImpar e $positivoOuNegativo.";
}
?>