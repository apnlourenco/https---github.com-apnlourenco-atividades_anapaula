<?php

    $numeros = array();

    for ($i = 0; $i < 4; $i++) {
        echo "Digite um numero" . ($i + 1) . ": ";
        $numeros[] = (int) fgets(STDIN);
    }

    for ($i = 0; $i <4; $i++) {
        $quadrado = $numeros[$i] * $numeros[$i];
        if ($i == 2 && $quadrado == 1000) {
            echo "O quadrado do numero" . ($i + 1) . "é igual a 1000/n";
            break;
        } else {
            echo "O quadrado do numero $i é igual a $quadrado";
        }
    }
?>