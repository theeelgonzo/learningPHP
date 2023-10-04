<?php
$brothers = array(
    'Joe' => array(
        'age' => 34,
        'job' => 'teacher',
        'state' => 'PA'
    ),
    'Jordan' => array(
        'age' => 33,
        'job' => 'sales',
        'state' => 'MO'
    ),
    'Ben' => array(
        'age' => 32,
        'job' => 'administration',
        'state' => 'KS'
    ),
    'Brian' => array(
        'age' => 34,
        'job' => 'developer',
        'state' => 'KS'
    ),
    'Kirk' => array(
        'age' => 49,
        'job' => 'supervisor',
        'state' => 'OK'
    )
    );

    echo( $brothers['Kirk']['state'] );
    echo "\n";
    print_r( $brothers['Jordan']['job']);