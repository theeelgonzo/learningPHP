<?php

function double(int | float $a) {
    return $a * 2;
    echo "\n";

}

echo double(3);
//echo double("apple");
echo double(3.4);

function multiplier( $a, $multiplier = 2) {
    return $a * $multiplier;
    echo "\n";
}

echo multiplier(4);
echo multiplier (4,4);