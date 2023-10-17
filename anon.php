<?php
$names = array ('Joe', 'Erin', 'Theresa', 'Louis');
usort($names, function($a, $b) {
      return $a[1] <=> $b[1];
});

print_r($names);