<?php

function ordena_3($a, $b, $c)
{
    $maior = maior_entre($a, $b);
    $maior = maior_entre($maior, $c);
    
    $menor = menor_entre($a, $b);
    $menor = menor_entre($menor, $c);
    
    if ($a != $maior && $a != $menor)  {
        $meio = $a;
    }
    else if ($b != $maior && $b != $menor) {
        return $meio = $b;
    }
    else
        return $meio = $c;
        
    return [$maior, $meio, $menor];
}

