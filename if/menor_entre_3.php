<?php

function menor_entre_3($a, $b, $c)
{
    $menor = $a;
    if ($b < $menor) {
        $menor = $b;
    }
    if ($c < $menor) {
        $menor = $c;
    }
    return $menor;
}