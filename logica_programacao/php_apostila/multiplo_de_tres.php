<?php

$i = 1;
while ($i <= 1000)
{
    $i++;
    if(($i + 3) % 3 == 0) {
        echo "$i é multiplo de tres".PHP_EOL;
    }
    else {
        echo "$i não é ele não e multiplo de tres".PHP_EOL;
    }
}
