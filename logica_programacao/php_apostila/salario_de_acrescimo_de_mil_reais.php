<?php

function salario_com_mil_reais($salario)
{
    $imposto = $salario * .1;
    $salario += - $imposto;
    return $aumento = $salario + 1000;
}

echo salario_com_mil_reais(100);