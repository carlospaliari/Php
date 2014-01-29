<?php

function loteria($maximo)
{
    $maximo=60;
    $n1 = sorteio($maximo);
    $n2 = sorteio($maximo);
    $n3 = sorteio($maximo);
    $n4 = sorteio($maximo);
    $n5 = sorteio($maximo);
    $n6 = sorteio($maximo);
    return [$n1, $n2, $n3, $n4, $n5, $n6];
}


function sorteio($maximo)
{
    return rand(1, $maximo);
}