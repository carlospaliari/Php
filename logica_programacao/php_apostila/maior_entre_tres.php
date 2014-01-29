<?php

function maior_entre_tres($x, $y, $z)
{
    $maior = $x;
    if ($y > $maior) {
        return $y;
    }
    elseif ($z > $maior) {
        return $z;
    }
    return $maior;
}

echo maior_entre_tres(200, 100, 30);