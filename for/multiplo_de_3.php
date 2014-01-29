<?php


for ($i=0; $i<=50; $i++)
{
    if ($i % 3 == 0) {
        echo "$i".PHP_EOL;
    } else {
        echo "$i nao e multiplo de 3".PHP_EOL;
    }
}