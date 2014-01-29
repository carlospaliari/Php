<?php

function juros_composto($principal, $taxa, $tempo)
{
    $montante = $principal * pow(1 + $taxa / 100, $tempo);
    return $montante;
}