<?php

function salario_com_impostos($salario)
{
    $imposto = $salario * .07;
    $salario += - $imposto;
    $aumento = $salario * .05;
    return $aumento + $salario;

}

echo salario_com_impostos(100);