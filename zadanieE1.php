<?php

function fooBar($n) {
    for ($i = 1; $i <= $n; $i = $i + 1) {
        if ($i % 3 == 0){
            if ($i % 5 == 0) {
                echo "FOOBAR";
            } else {
            echo "Foo";
            }
        } elseif ($i % 5 == 0){
            echo "Bar";
        } else {
            
        }
        echo $i;
    }
}
$a = 15;
fooBar($a);