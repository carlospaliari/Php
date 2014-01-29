<?php

function maior_menor_igual($x, $y)
{
    if ($x > $y) {
        return "o primeiro é maior ao segundo";
    } elseif ($x < $y) {
        return "o primeiro é menor ao segundo";
    }
    return "o primeiro é igual ao segundo";
}
