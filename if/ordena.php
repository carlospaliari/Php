<?php

function ordena($a, $b)
{
    if ($a < $b) {
        return [$a, $b];
    } else {
        return [$b, $a];
    }
}