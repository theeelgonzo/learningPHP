<?php

$x = 0;

$result = match($x) {
    -2, -1, 0 => "$x is not positive.",
    1 => "$x is 1",
    2 => "$x is 2",
    default => "$x is neither 1 nor 2",
};

echo $result;