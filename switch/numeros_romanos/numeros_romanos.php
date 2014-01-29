<?php
//retorna os números em numeros romanos

function numeros_romanos($numeros)
{
    $numeros_romanos = $numeros;

    switch($numeros) {
        case 1 : $numeros_romanos = 'I';
            break;
        case 2 : $numeros_romanos = 'II';
            break;
        case 3 : $numeros_romanos = 'III';
            break;
        case 4 : $numeros_romanos = 'IV';
            break;
        case 5 : $numeros_romanos = 'V';
            break;
        case 6 : $numeros_romanos = 'VI';
            break;
        case 7 : $numeros_romanos = 'VII';
            break;
        case 8 : $numeros_romanos = 'VIII';
            break;
        case 9 : $numeros_romanos = 'IX';
            break;
        case 10 : $numeros_romanos = 'X';
            break;
        case 20 : $numeros_romanos = 'XX';
            break;
        case 30 : $numeros_romanos = 'XXX';
            break;
        case 40 : $numeros_romanos = 'XL';
            break;
        case 50 : $numeros_romanos = 'L';
            break;
        case 60 : $numeros_romanos = 'LX';
            break;
        case 70 : $numeros_romanos = 'LXX';
            break;
        case 80 : $numeros_romanos = 'LXX';
            break;
        case 90 : $numeros_romanos = 'XC';
            break;
        case 100 : $numeros_romanos = 'C';
            break;
        case 200 : $numeros_romanos = 'CC';
            break;
        case 300 : $numeros_romanos = 'CCC';
            break;
        case 400 : $numeros_romanos = 'CD';
            break;
        case 500 : $numeros_romanos = 'D';
            break;
        case 600 : $numeros_romanos = 'DC';
            break;
        case 700 : $numeros_romanos = 'DCC';
            break;
        case 800 : $numeros_romanos = 'DCCC';
            break;
        case 900 : $numeros_romanos = 'CM';
            break;
        case 1000 : $numeros_romanos = 'M';
    }

    return $numeros_romanos;
}