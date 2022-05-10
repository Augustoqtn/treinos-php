<?php

echo "digite um valor:";

$numero = readline();

if ($numero < 0 ) {
    echo "o numero $numero é negativo";
} elseif ($numero > 0) {
    echo "o numero $numero é positivo";
} else {
    echo "este numero é igual a zero.";
}
