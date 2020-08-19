<?php

require 'is.php';

$tests = [
    [true,    true],
    [false,   false],
    [null,    false],
    [0,       true],
    [1,       true],
    ['',      false],
    [' ',     true],
    ['0',     true],
    ['1',     true],
    [[],      true]
];

$i = 0;
$coverage = 0;

foreach ($tests as $test)
{
    echo 'Test #'. ++$i .' : '. (is($test[0]) === $test[1] ? 'OK' : 'Error') . PHP_EOL;

    $coverage += (int)(is($test[0]) === $test[1]);
}

echo PHP_EOL .'Coverage: '. ($coverage / sizeof ($tests) * 100) .' %';
