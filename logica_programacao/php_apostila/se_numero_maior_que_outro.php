<?php

function numero_maior_que_primeiro($x, $y)
{
    if ($x > $y) {
        return "o primeiro é maior ao segundo";
    } elseif ($x < $y) {
        return "o primeiro é menor ao segundo";
    }
    return "o primeiro é igual ao segundo";
}

echo numero_maior_que_primeiro(200, 30);