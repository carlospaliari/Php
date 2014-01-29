<?php

function gravidade($peso_na_terra, $numero_do_planeta)
{
    $peso_do_planeta = "";

    switch($peso_na_terra) {
        case $numero_do_planeta == 1 : $peso_do_planeta = "Mercúrio " . $peso_na_terra * .37;
            break;
        case $numero_do_planeta == 2 : $peso_do_planeta = "Vênus " . $peso_na_terra * .88;
            break;
        case $numero_do_planeta == 3 : $peso_do_planeta = "Marte " . $peso_na_terra * .38;
            break;
        case $numero_do_planeta == 4 : $peso_do_planeta = "Júpiter " . $peso_na_terra * 2.64;
            break;
        case $numero_do_planeta == 5 : $peso_do_planeta = "Saturno " . $peso_na_terra * 1.15;
            break;
        case $numero_do_planeta == 6 : $peso_do_planeta = "Urano " . $peso_na_terra * 1.17;
            break;
    }

    return $peso_do_planeta;

}

echo gravidade(100, 6);