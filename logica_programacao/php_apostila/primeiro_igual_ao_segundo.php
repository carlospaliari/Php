<?php

function primeiro_igual_ao_segundo($x, $y)
{
    if ($x == $y) {
        return "O primeiro e igual ao segundo";
    }
    elseif ($y != $x) {
        return "O primeiro e diferente do segundo";
    }
}

echo primeiro_igual_ao_segundo(20, 200);