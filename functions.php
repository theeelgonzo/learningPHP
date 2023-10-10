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