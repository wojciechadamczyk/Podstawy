<?php

$n = 5;

for ($i = 1; $i < $n + 1; $i = $i + 1) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j > $i) {
            echo $j;
        } else {
            echo "*";
        }
    }
    echo "<br>";
}

for ($i = 5; $i >= 1; $i = $i - 1) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j > $i) {
            echo $j;
        } else {
            echo "*";
        }
    }
    echo "<br>";
}