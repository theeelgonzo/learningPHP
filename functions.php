<?php

function hello_world() {
    return "Hello World";

}

hello_world();

function is_bigger($a, $b) {
    return $a >= $b;
}
$bigger = is_bigger($a = 0,$b = 5);
if ( $bigger ){
    echo "$a is bigger than $b ";
} else {
    echo "$b is bigger than $a ";
}

echo date( " F d, Y");

function isPalindrome( $string ){
    $string = strtolower( $string );
    $string = str_replace(' ', '', $string);
    $palCheck = ( $string == strrev($string));
    return $palCheck;
}

if(isPalindrome('RaCe CaR')){
    echo "this is a palindrome";
} else {
    echo "this is not a palindrome";
}
