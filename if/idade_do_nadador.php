<?php

function idade_do_nadador($idade_do_nadador)
{
    if ($idade_do_nadador < 5) {
        return "$idade_do_nadador is sem categoria";
    }

    if ($idade_do_nadador >= 5 && $idade_do_nadador <= 7) {
        return "$idade_do_nadador is Infantil a";
    }

    if ($idade_do_nadador >= 8 && $idade_do_nadador <= 10) {
        return "$idade_do_nadador is Infantil b";
    }

    if ($idade_do_nadador >= 11 && $idade_do_nadador <= 13) {
        return "$idade_do_nadador is Juvenil a";
    }

    if ($idade_do_nadador >= 14 && $idade_do_nadador <= 17) {
        return "$idade_do_nadador is Juvenil b";
    }

    if ($idade_do_nadador >= 18 && $idade_do_nadador <= 25) {
        return "$idade_do_nadador is Senior";
    }

    if ($idade_do_nadador >= 26) {
        return "$idade_do_nadador is Olimpico";
    }

}