<?php

$populacao_a = 5000000;
$populacao_b = 7000000;
$anos = 0;

while ($populacao_a < $populacao_b)
{
    $anos += 1;
    $populacao_a += ($populacao_a * 3/100);
    $populacao_b += ($populacao_b * 2/100);

    if ($populacao_a > $populacao_b) {
        echo $anos;
    }
}