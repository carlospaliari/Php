<?php

//Criar uma função que recebe uma temperatura em graus Celsius e retorna convertida em graus Fahrenheit. //
//A fórmula de conversão é: F=(9*C+160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius. //

function celsius_em_faher($celsius)
{
    $fahrenheit = (9 * $celsius + 160) / 5;
    return $fahrenheit;
}
