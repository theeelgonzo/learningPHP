<?php
echo 'Rock \'n roll, baby';
echo "\n";
//if else statements

$a = 5;
$b = 22;
$c = 1;

if( $a > $b ) {
    echo $a .' is greater than ' . $b;
} else if ($b > $a ) {
    echo $b . ' is greater than ' . $a;
} else {
    echo 'Hey man, I don\'t know what happened here.';
}

$isLoggedIn = true;

if( $isLoggedIn ){
    echo '<h3>Welcome Back User</h3>';
}
