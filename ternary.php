<?php
$isLoggedIn = true;
$message = $isLoggedIn ? "Welcome back!\n" : "Hello There\n";

echo $message;

$isLoggedIn = false;
$message = 'Welcome' . ($isLoggedIn ? ' back!' : '!');
echo $message;

$name = null;
$welcome = 'Welcome ';
$name = $name ?: 'Joe';
echo $welcome . $name;