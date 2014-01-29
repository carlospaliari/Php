<?php

function maior_que_trinta_e_cinco($x)
{
    if ($x * 2 > 35) {
        return "ele é maior que 35";
    } elseif ($x * 2 < 35) {
        return "ele é menor que 35";
    }

    return "ele é igual a 35";
}

echo maior_que_trinta_e_cinco(17.5);

