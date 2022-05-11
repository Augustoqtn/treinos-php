<?php
echo "nota 1:";

$nota1 = (int)readline();

echo "nota 2:";

$nota2 = (int)readline();

echo "nota 3:";

$nota3 = (int)readline();

echo "nota 4:";

$nota4 = (int)readline();

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media >= 7.0) {
    echo "sua nota média foi:$media.\n você foi aprovado!";
} else {
    echo "sua nora média foi:$media.\n você foi reprovado!";
}
