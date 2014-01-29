<?php
/**
 * converte 1=Aberto, 2=Andamento, 3=concluido, 9=cancelado.
 *
 * @param $value
 */

function teste($value)
{
    $descricao = '';

    switch($value) {
        case 1 : $descricao = 'Aberto';
            break;
        case 2 : $descricao = 'Andamento';
            break;
        case 3 : $descricao = 'concluido';
            break;
        case 4 : $descricao = 'cancelado';
            break;
        default : $descricao = "o numero $value eh invalido";
    }

    return $descricao;
}