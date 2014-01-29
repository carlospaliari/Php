<?php

function par_impar($x)
{
    if ($x % 2 == 0) {
        return "Par";
    }
    else {
        return "Impar";
    }
}

echo par_impar(21);