<?php

function swap(&$a, &$b) {
    $temp;
    $temp=$a;
    $a=$b;
    $b=$temp;
}

$a=5;
$b=7;

echo "Sebelum ditukar : ($a, $b) <br>";

swap($a,$b);

echo "Setelah ditukar : ($a, $b)";

?>