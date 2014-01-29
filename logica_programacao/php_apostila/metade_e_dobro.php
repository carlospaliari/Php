<?php

function metade_e_dobro($x)
{
    $metade = $x / 2;
    $dobro = $x * 2;

    return [$metade, $dobro];
}

print_r(metade_e_dobro(5));
