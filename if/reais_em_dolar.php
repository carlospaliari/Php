<?php

function reais_em_dolar($reais, $cotacao)
{
    $dolar = ($reais / $cotacao);
    return dolar_formatado($dolar);
}

function dolar_formatado($dolar)
{
   return number_format($dolar, 2, ",", ".");
}