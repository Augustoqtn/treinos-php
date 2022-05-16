<?php

$funcionario = [
    500,
    101,
    200,
    3000,
];

for ($i = 0; $i < count($funcionario); $i++) {
    $bonificacao = calculaAumentoSalario($funcionario[$i]);
    echo "Seu salário agora é de $bonificacao" . PHP_EOL;
}


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
