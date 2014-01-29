<?php


function metade_e_quadrado($x)
{
    $metade = $x / 2;
    $quadrado = $x * $x;

    return [$metade, $quadrado];
}

print_r(metade_e_quadrado(4));