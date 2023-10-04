<?php

// Indexable Array
$colors = array( 'red', 'blue', 'green');

print_r( $colors );

echo $colors[1];

echo '<p>' . $colors[1] . '</p>';

$colors[] = 'yellow';

print_r( $colors );

//Associative array
$hometowns = array(
    'Joe' => 'Middletown, NY',
    'Jordan' => 'Kansas City, MO',
    'Kory' => 'Detroit, MI',
    'Rachel' => 'Kansas City, MO',
);

print_r( $hometowns );