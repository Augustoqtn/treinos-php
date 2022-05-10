<?php

echo "valor A:";

$a = (int)readline();

echo "valor B:";

$b = (int)readline();

$valores = [
    $a,
    $b,
];
sort($valores);

$resultado = implode(" e ", $valores);

echo $resultado;
