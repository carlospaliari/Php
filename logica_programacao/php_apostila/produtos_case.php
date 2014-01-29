<?php

function produtos($codigo)
{
    $procedencia = "";

    switch($codigo) {
        case 1 : $procedencia = "Sul";
            break;
        case 2 : $procedencia = "Norte";
            break;
        case 3 : $procedencia = "Leste";
            break;
        case 4 : $procedencia = "Oeste";
            break;
        case 5 : $procedencia = "Nordeste";
            break;
        case 6 : $procedencia = "Nordeste";
            break;
        case 7 : $procedencia = "Sudeste";
            break;
        case 8 : $procedencia = "Sudeste";
            break;
        case 9 : $procedencia = "Sudeste";
            break;
        case 10 : $procedencia = "Centro-oeste";
            break;
        case 11 : $procedencia = "Centro-oeste";
            break;
        case 12 : $procedencia = "Centro-oeste";
            break;
        case 13 : $procedencia = "Centro-oeste";
            break;
        case 14 : $procedencia = "Centro-oeste";
            break;
        case 15 : $procedencia = "Centro-oeste";
            break;
        case 16 : $procedencia = "Centro-oeste";
            break;
        case 17 : $procedencia = "Centro-oeste";
            break;
        case 18 : $procedencia = "Centro-oeste";
            break;
        case 19 : $procedencia = "Centro-oeste";
            break;
        case 20 : $procedencia = "Centro-oeste";
            break;
        case 21 : $procedencia = "Noroeste";
            break;
        case 22 : $procedencia = "Noroeste";
            break;
        case 23 : $procedencia = "Noroeste";
            break;
        case 24 : $procedencia = "Noroeste";
            break;
        case 25 : $procedencia = "Noroeste";
            break;
        case 26 : $procedencia = "Noroeste";
            break;
        case 27 : $procedencia = "Noroeste";
            break;
        case 28 : $procedencia = "Noroeste";
            break;
        case 29 : $procedencia = "Noroeste";
            break;
        case 30 : $procedencia = "Noroeste";
            break;
    }
    if ($codigo < 1) {
        return "Opção Invalida";
    }
    elseif ($codigo > 30) {
        return "Opção Invalida";
    }
    return $procedencia;
}

echo produtos(1);