<?php

function separacao_de_milhares_centenas($valor)
{
    $milhares = floor($valor / 1000) * 1000;
    $valor = $valor - $milhares;

    $centenas = floor($valor / 100) * 100;
    $valor = $valor - $centenas;

    $dezenas = floor($valor / 10) * 10;
    $valor = $valor - $dezenas;

    $unidades = floor($valor);

    return [$milhares, $centenas, $dezenas, $unidades];
}