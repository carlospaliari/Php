<?php

function media_aluno($nota_1, $nota_2, $nota_3)
{
    $media = ($nota_1 + $nota_2 + $nota_3) / 3;
    if ($media < 30) {
        return "Reprovado";
    }
    if ($media < 70) {
        return "Exame";
    }
    return "Aprovado";
}

echo media_aluno(70, 70, 69);