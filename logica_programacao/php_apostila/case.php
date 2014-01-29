<?php

function caso_dos_numeros($x)
{
    $numero = "";

    switch($x) {
        case 1 || 5 : $numero = "inclusive";
            break;
    }
    if ($x < 1) {
        return  $numero = "Opção de número inválida!";
    }
    elseif ($x > 5) {
        return $numero = "Opção de número inválida!";
    }

    return $numero;
}

echo caso_dos_numeros(1);
