<?php
$min = 1;
$max = 50;
$num = rand($min, $max);

echo "Guess a number between 1 and 50!\n";
$guess = 15;


if($guess < $min || $guess > $max ) {
    echo 'That guess is out of bounds!';
} else {
$result = match($guess){
    $num => "You got it! The number was $num!",
    default => "Sorry, that is incorrect! The number was $num."
};
echo $result;
}
