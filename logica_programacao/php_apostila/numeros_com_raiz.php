<?php

//Ler um número qualquer e exibir na tela uma mensagem indicando se ele é positivo,
//negativo ou nulo (zero). Se ele for positivo, exibir também a raiz quadrada deste número.
//Se ele for negativo você deve uma escrever mensagem dizendo ‘Não é possível calcular a raiz deste número’.

function numeros_com_raiz($x)
{
    if ($x > 0) {
        return "positivo ". raiz($x);
    }
    if ($x > 0) {
        return "positivo";
    }
    if ($x < 0) {
        return "Não é possível calcular a raiz deste número";
    }
    return "nulo";
}

function raiz($x)
{
    $x = sqrt($x);
    return $x;
}

echo numeros_com_raiz(9);