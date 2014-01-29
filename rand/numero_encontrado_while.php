<?php

function numero_encontrado_while($palpite, $maximo)
{
    $i = 1;
    while(!palpite_encontrado($palpite, $maximo)) {
        $i++;
    }
    return $i;
}

function palpite_encontrado($palpite, $maximo)
{
    // o valor entre zero e maximo tem que ser igual ao valor palpite, se este valor for verdadeiro, ele tem que me dizer que true, se nao e false

    // sortear um numero entre zero e maximo
    $numeroSorteado = rand(0, $maximo);

    // se o palpite for igual ao numero sorteado, retorna true, se nao retorna false
    if ($palpite == $numeroSorteado) {
        return true;
    } else {
        return false;
    }
}
