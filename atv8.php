<?php

$funcionario = [
    500,
    101,
    200,
    3000,
];

calculaAumentoSalario(500);

function calculaAumentoSalario($valor)
{
    if ($valor >= 300) {
        $reajuste = ($valor * 1.5);
        return $reajuste;
    } else {
        $reajuste = ($valor * 1.3);
        return $reajuste;
    }
}
