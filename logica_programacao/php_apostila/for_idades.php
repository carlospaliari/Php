<?php

$idades = array();
$cont = 0;

for ($i=1; $i<=10; $i++)
{
    $idades[$i] = rand( 0,100);
}

print_r($idades);

//Verificacao
for ($i=1; $i<=10; $i++)
{
    if ($idades[$i] >= 18) {
        $cont += 1;
    }
}

echo "A quantidade de pessoas com mais de 18 anos é: $cont";
