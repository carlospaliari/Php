<?php

function salarios($salario)
{
    if ($salario <= 300) {
        return $salario + $salario * .5;
    }
    return $salario + $salario * .3;
}

echo salarios(500);