<?php

$n = 10;

for ($i = 0; $i <= $n; $i + 1) {
    if (($i % 2) == 0) {
        echo "$i - parzysta<br>";
    } else {
        echo "$i - nieparzysta<br>";
    }
}