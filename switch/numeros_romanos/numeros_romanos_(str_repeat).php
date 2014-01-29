<?php

//faça uma função que receba um número e retorne o valor em número romanos://

//nesta funcao, coloca um parametro adicional chamado $repeticoes = 1, que diz quantas vezes o digito deve ser repetido. O padrão é 1 e o máximo é 3.//
// Exemplo, se chamar numero_romano(100, 3) o retorno será "CCC"//

function numeros_romanos($numeros, $repeticoes = 1)
{
    if ($repeticoes > 3 || $repeticoes < 1) {
        return 'invalido';
    }


    if ($numeros == 1) {
        return str_repeat('I', $repeticoes);
    }

    if ($numeros == 5) {
        return str_repeat('V', $repeticoes);
    }

    if ($numeros == 10) {
        return str_repeat('X', $repeticoes);
    }

    if ($numeros == 50) {
        return str_repeat('L', $repeticoes);
    }

    if ($numeros == 100) {
        return str_repeat('C', $repeticoes);
    }

    if ($numeros == 500) {
        return str_repeat('D', $repeticoes);
    }

    if ($numeros == 1000) {
        return str_repeat('M', $repeticoes);
    }

    return 'nao existe';
}
