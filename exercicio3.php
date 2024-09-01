<?php

if (isset($_POST['codigo']) && isset($_POST['horas'])) {
    $codigo = $_POST['codigo'];
    $horas = floatval($_POST['horas']);

    $salarioNormal = 0;
    $salarioExcedente = 0;

    if ($horas > 50) {
        $salarioNormal = 50 * 10;
        $salarioExcedente = ($horas - 50) * 20;
    } else {
        $salarioNormal = $horas * 10;
        $salarioExcedente = 0;
    }

    $salarioTotal = $salarioNormal + $salarioExcedente;

    echo "Código do operário: $codigo<br>";
    echo "Salário total: R$ " . number_format($salarioTotal, 2) . "<br>";
    echo "Salário excedente: R$ " . number_format($salarioExcedente, 2);
}

?>