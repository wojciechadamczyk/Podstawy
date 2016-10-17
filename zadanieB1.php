<?php

$a = 10;
$b = 15;
$c = 20;

if ($a + $b > $c) {
    if ($b + $c > $a) {
        if ($c + $a > $b) {
            echo "TAK";
        } else {
            echo "NIE";
        }
    } else {
        echo "NIE";
    }
} else {
    echo "NIE";
}
//
echo "<br>";

if ($a + $b <= $c) {
    echo "NIE";
} elseif ($b + $c <= $a) {
    echo "NIE";
} elseif ($c + $a <= $b) {
    echo "NIE";
} else {
    echo "TAK";
}