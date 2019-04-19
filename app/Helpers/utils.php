<?php

function is_valid_int($int)
{
    return filter_var($int, FILTER_VALIDATE_INT) AND
        $int <= PHP_INT_MAX;
}

function is_valid_placa_veiculo($placa)
{
    return preg_match('/^[A-Z]{3}[0-9]{1}[0-9A-Z]{1}[0-9]{2}$/', $placa) > 0;
}

function money_to_us($money)
{
    return (float)str_replace(['.', ','], ['', '.'], $money);
}

function date_to_br($date)
{
    return implode('/', array_reverse(explode('-', $date)));
}