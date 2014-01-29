<?php

function maior_entre_3 ($a, $b, $c)
{
    $maior = $a;
    if ($b > $maior) {
        $maior = $b;

    }
    if ($c > $maior) {
        $maior = $c;

    }
    return $maior;
}
