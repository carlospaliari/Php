<?php

function maior_entre_4($a, $b, $c, $d)
{
/*    $maior = $a;
    if ($b > $maior) {
        $maior = $b;

    }
    if ($c > $maior) {
        $maior = $c;
    }

    if ($d > $maior) {
        $maior = $d;

    }
    return $maior;
*/
        $maior = entredoisvalores($a, $b);
        $maior = entredoisvalores($maior, $c);
        $maior = entredoisvalores($maior, $d);
        return $maior;
}


function entredoisvalores($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}
