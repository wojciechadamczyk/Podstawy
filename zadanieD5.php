<style type="text/css">
    td {
        border:1px solid red;
        padding: 5px;
    }
</style>
<?php
$n = 3;

echo "<table>";
for ($i = 1; $i < $n + 1; $i++) {
    echo "<tr>";
    for ($j = 1; $j < $n + 1; $j++) {
        echo "<td>$i x $j = " . $i * $j . "</td>";
    }
    echo "<tr>";
    
}
echo "<table>";