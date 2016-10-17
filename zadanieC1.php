<?php
$x = 4;
$result1 = 1;
$result2 = 1;

for ($i = 1; $i <= $x ; $i = $i + 1) {
    $result1 = $result1 *$i;
    
}

echo $result1;

echo "<br>";

$j = 1;

while($j <= $x) {
    $result2 = $result2 * $j;
    $j = $j + 1;
    
}

echo $result2;