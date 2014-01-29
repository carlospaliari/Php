<?php

$i=1;
while ($i<=1000)
{
    $i++;
    if (($i + 4) % 5 == 0) {
        echo "$i".PHP_EOL;
    } else {
        echo "$i não é multiplo de 5".PHP_EOL;
    }
}