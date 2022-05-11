<?php

echo "digite sua altura:";

$altura = (float)readline();

echo "agora digite seu peso:";

$peso = (int)readline();

echo "seu sexo é (m) ou (f)?";

$sexo = readline();

if ($sexo == "m") {
    $idealM = ($peso * $altura - 58);
    echo "seu peso ideal seria de: $idealM";
} else if ($sexo == "f") {
    $idealF = ($peso * $altura - 44.7);
    echo "seu peso ideal seria de: $idealF";
}
