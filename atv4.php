<?php
echo "digite numero que representa A:";
$a = readline();

echo "digite numero que representa B:";
$b = readline();

echo "digite numero que representa C:";
$c = readline();

echo "digite numero que representa D:";
$d = readline();

$ac = ($a + $c);
$bd = ($b * $d);

if ($ac > $bd) {
    echo "a soma dos valores A($a) e C($c) é maior que a multiplicação de B($b) e D($d).";
} elseif ($ac === $bd) {
    echo "a soma dos valores A($a) e C($c) igual a multiplicação de B($b) e D($d).";
} else {
    echo "a soma dos valores A($a) e C($c) é menor que a multiplicação de B($b) e D($d).";
}





