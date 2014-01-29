<?php

for ($i=1; $i<=100; $i++)
{
    if(($i + 3) % 5 == 0) {
        echo "$i".PHP_EOL;
    } else {
        echo "$i não e multiplo de 5".PHP_EOL;
    }
}
