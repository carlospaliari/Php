<?php

function produtos($codigo_de_origem)
{
    if ($codigo_de_origem == 1) {
        return "Sul";
    }
    if ($codigo_de_origem == 2) {
        return "Norte";
    }
    if ($codigo_de_origem == 3) {
        return  "Leste";
    }
    if ($codigo_de_origem == 4) {
        return "Oeste";
    }
    if ($codigo_de_origem == 5 || $codigo_de_origem == 6) {
        return "Nordeste";
    }
    if ($codigo_de_origem > 6 && $codigo_de_origem < 10) {
        return "Sudeste";
    }
    if ($codigo_de_origem > 9 && $codigo_de_origem < 21) {
        return "Centro-oeste";
    }
    if ($codigo_de_origem > 20 && $codigo_de_origem < 31) {
        return "Noroeste";
    }
    return "codigo não existente";
}

echo produtos(5);