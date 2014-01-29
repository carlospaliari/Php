<?php

function funcionarios($nome_funcionario,  $funcionarios, $salario_base)
{
    if ($funcionarios == 1) {
        echo "Você '$nome_funcionario' foi um funcionario excelente, é seu salario teve um acréscimo de ". $salario_base * .8 . " E seu salario foi para ";
        return $salario_base + $salario_base * .8;
    }
    if ($funcionarios == 2) {
        echo "Você '$nome_funcionario' foi um funcionario bom, é seu salario teve um acréscimo de ". $salario_base * .5 . " E seu salario foi para ";
        return $salario_base + $salario_base * .5;
    }
    if ($funcionarios == 3) {
        echo "Você '$nome_funcionario' foi um funcionario regular, é seu salario teve um acréscimo de ". $salario_base * .3 . " E seu salario foi para ";
        return $salario_base + $salario_base * .3;
    }
}

echo funcionarios("Carlos", 3, 2725);