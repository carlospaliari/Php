<?php

//Criar uma função que receba um valor em dólares, a cotação do dólar e retorne o valor em reais.

function dolar_em_reais($dolar, $cotacao)
{
    $reais = ($dolar * $cotacao);
    return formata_reais($reais);
}

function formata_reais($reais)
{
    return number_format($reais, 2, ",", ".");
}