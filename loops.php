<?php
$i = 10;
while ( $i < 10 ){
    echo "$i";
    $i++;
}

for( $i = 0; $i < 10; $i++ ) {
    echo $i . "\n";
}

$colors = array('red', 'blue', 'green', 'yellow');
for ( $i = 0; $i < sizeof($colors); $i++ ) {
    echo $colors[$i] . "\n";
}

foreach($colors as $color){
    echo $color . "\n";
}