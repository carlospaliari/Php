<?php

function media_aluno($a, $b, $c, $d)
{
    $media = ($a + $b + $c + $d) / 4;
    if ($media >= 70) {
        return "Aprovado";
    }
    if ($media < 70) {
        return "Reprovado";
    }
}

echo media_aluno(75, 70, 70, 70);