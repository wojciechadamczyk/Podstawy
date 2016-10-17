<?php

function myPow($a, $n) {
   $wynik = 1;
    for ($i = 0; $i < $n;$i = $i + 1) {
        $wynik = $wynik * $a;
    }
    return $wynik;
}

echo "wynik = ".myPow(2,3); 