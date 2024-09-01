<?php

$idadeNadador = (int) readline("Digite a idade do nadador: ");
$categoria = nadadores_classificacao($idadeNadador);
echo "A categoria do nadador é: $categoria\n";
function nadadores_classificacao($idade)
{
    switch (true) {
        case ($idade >= 5 && $idade <= 7):
            return "Infantil A";
        case ($idade >= 8 && $idade <= 11):
            return "Infantil B";
        case ($idade >= 12 && $idade <= 13):
            return "Juvenil A";
        case ($idade >= 14 && $idade <= 17):
            return "Juvenil B";
        case ($idade >= 18):
            return "Adultos";
        default:
            return "Idade fora de categoria";
    }

}
?>
