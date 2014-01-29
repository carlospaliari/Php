<?php


function salario_porcentagem($salario, $porcentagem)
{
    $aumento = $salario * ($porcentagem / 100);
    return $salario + $aumento;
}

echo salario_porcentagem(100, 25);
