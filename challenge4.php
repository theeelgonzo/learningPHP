//fibonacci
<?php
$a = 0;
$b = 0;
do{
    echo $a;
    echo $b;
    echo $a + $b . "\n";
    $a = $b;
    $b++;
} while ($b < 5);