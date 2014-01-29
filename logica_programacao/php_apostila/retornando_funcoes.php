<?php

function retornandoo_funcoes($x, $y)
{
    $soma_de_dois_numeros = $x + $y;
    $subtracao_do_primeiro_pelo_segundo = $x - $y;
    $subtracao_do_segundo_pelo_primeiro = $y - $x;
    $produto = $x * $y;
    $divisao = $x / $y;
    $divisao_inteiro = round($x / $y);
    $resto_da_divisao = $x % $y;

    return [
        $soma_de_dois_numeros,
        $subtracao_do_primeiro_pelo_segundo,
        $subtracao_do_segundo_pelo_primeiro,
        $produto,
        $divisao,
        $divisao_inteiro,
        $resto_da_divisao
    ];
}

print_r(retornandoo_funcoes(10, 10));