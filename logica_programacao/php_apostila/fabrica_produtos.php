<?php

function produtos_fabrica($nome_produto, $produto_estoque)
{
    if ($produto_estoque < 50) {
        echo ": Este produto contem menos de 50 itens no estoque";
    }
    else {
        echo "Produto em disposição";
    }
    $nome_produto = "$nome_produto";
    return " => '$nome_produto' ";
}

print_r(produtos_fabrica("Iphone", 50));