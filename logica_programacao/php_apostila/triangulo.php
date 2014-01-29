<?php

function triangulo($x, $y, $z)
{
    if ($x <= 0 || $y <= 0 || $z <= 0) {
        return "Não é um triângulo";
    }
    if ($x == $z && $x == $y && $y == $z) {
        return "Triangulo equilátero";
    }
    if (($x == $z && $x != $y) || ($x == $y && $x != $z) || ($y == $z && $y != $x)) {
        return "Triangulo Isóscelos";
    }
    if ($x <> $z && $x <> $y && $y <> $z) {
        return "Triangulo Escaleno";
    }
}

echo triangulo(20, 21, 0);