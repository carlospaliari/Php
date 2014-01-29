<?php

function credito($salario, $credito)
{
    if ($salario - $credito >= $salario * .7) {
        return "Credito Aprovado";
    }
    else {
        return "Credito Reprovado";
    }
}

echo credito(100, 30);