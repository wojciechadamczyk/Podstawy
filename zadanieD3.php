<?php

$n = 5;

for ($i = 0; $i < $n; $i = $i + 1) {
    for ($j = 0; $j <= $i; $j = $j +1){
        echo "*";
        if ((($i + $j) % 2) == 1){
            echo "*";
          
          }  else{
              echo "-";
            
        }
        
        
    }
    
    echo "<br>";
    }