<?php
/*
 *Faça um programa que leia a altura e o sexo de uma pessoa, calcule e imprima seu peso ideal, utilizando as seguintes fórmulas:
Para homens: (72.7 * h) – 58
Para mulheres: (62.1 * h) – 44.7 (h = altura)
 */

function peso_ideal($h, $sexo)
{
    if ($sexo == 'homem') {
        return (72.7 * $h) - 58;
    }
    if ($sexo == 'mulher') {
        return (62.1 * $h) - 44.7;
    }
}


echo peso_ideal(1.70, 'homem');
