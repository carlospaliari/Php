<?php

function ordena_tres($a, $b, $c)
{
    $maior = maior_entre($a, $b);
    $maior = maior_entre($maior, $c);

    $menor = menor_entre($a, $b);
    $menor = menor_entre($menor, $c);

    if ($a != $maior && $a != $menor)  {
        $meio = $a;
    }
    else if ($b != $maior && $b != $menor) {
        $meio = $b;
    }
    else {
        $meio = $c;
    }
    return [$maior, $meio, $menor];
}

function menor_entre($x, $y)
{
    if ($x < $y) {
        return $x;
    } else {
        return $y;
    }
}

function maior_entre($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

print_r(ordena_tres(10, 9, 8));