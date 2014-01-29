<?php

function menor_entre_4($a, $b, $c, $d)
{
/*    $menor = $a
    if ($b < $menor) {
        $menor = $b;

    }
    if ($c < $menor) {

        $menor = $c;
    }
    if ($d < $menor) {

        $menor = $d;
    }
    return $menor;
*/
        $menor = entredoisvalores_menor($a, $b);
        $menor = entredoisvalores_menor($menor, $c);
        $menor = entredoisvalores_menor($menor, $d);
        return $menor;
}


function entredoisvalores_menor($a, $b)
{
    if ($a < $b) {
        return $a;
    } else {
        return $b;
    }
}