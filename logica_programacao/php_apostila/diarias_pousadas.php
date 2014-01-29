<?php

function pousada($nome_cliente, $diaria)
{
    if ($diaria < 10) {
        return "Ola $nome_cliente, este é o total a pagar: ". $total_arrecadado =  (40 * $diaria) + ($diaria * 8).
            ". Esperamos que tenha gostado de nossos atendimentos e VOLTE SEMPRE!";
    }
    elseif ($diaria >= 10) {
        return "Ola $nome_cliente, este é o total a pagar: ". $total_arrecadado = + (40 * $diaria) + ($diaria * 15).
            ". Esperamos que tenha gostado de nossos atendimentos e VOLTE SEMPRE!";
    }
}

echo pousada("Carlos", 10);