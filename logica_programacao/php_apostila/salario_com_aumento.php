<?php

function salario($salario)
{
    $aumento = $salario * 0.25;
    return $aumento + $salario;
}

echo salario(2000);