<?php

$a = 60;
{
    if ($a < 40) {
        echo("niedostateczna");
    } elseif ($a < 55) {
        echo("dopuszczajacy");
    } elseif ($a < 70) {
        echo("dostateczny");
    } elseif ($a < 85) {
    echo("dobry");}
    elseif ($a < 99) {
        echo("bardzo dobry");
}else {
        echo("celujacy");
    }
}