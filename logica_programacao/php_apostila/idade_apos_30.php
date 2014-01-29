<?php

function idade_apos_30($nome, $idade)
{
    $idade += 30;
    return ["$nome", $idade];
}

print_r(idade_apos_30("carlos", 16));