<?php

function alunos($numero_matricula, $nota_1, $nota_2, $nota_3, $frequencia)
{
    echo "O núemro da sua matricula é $numero_matricula";
    $media = ($nota_1 + $nota_2 + $nota_3) / 3;
    if ($media >= 70 && $frequencia >= 140) { // 140 é a media de 70% de 200 dias letivos.
        return " Aprovado";
    }
    else {
        return " Reprovado";
    }
}

echo alunos(3, 70, 70, 70, 150);