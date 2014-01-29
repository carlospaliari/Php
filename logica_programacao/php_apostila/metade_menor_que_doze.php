<?php

function metade_menor_que_doze($x)
{
    if ($x / 2 < 12) {
        return "ele é menor que 12";
    } elseif ($x / 2 > 12) {
        return "ele é maior que 12";
    }
    return "ele é igual a 12";
}

echo metade_menor_que_doze(23);