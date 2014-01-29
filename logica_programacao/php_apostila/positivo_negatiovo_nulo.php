<?php

function positivo_negativo_nulo($x)
{
    if ($x > 0) {
        return "Positivo";
    }
    elseif ($x < 0) {
        return "Negativo";
    }
    return "Nulo";
}

echo positivo_negativo_nulo(0);