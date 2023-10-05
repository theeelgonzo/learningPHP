<?php
$min = 1;
$max = 50;
$num = rand($min, $max);

echo "Guess a number between 1 and 50!\n";
$guess = 56;

$result = match($guess){
    $num => "You got it! The number was $num!",
    $guess > 50, $guess < 1 => "That is out of bounds.",
    default => "Sorry, that is incorrect! The number was $num."
};

echo $result;