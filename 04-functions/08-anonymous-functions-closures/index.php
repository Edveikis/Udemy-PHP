<?php

$test = function () {
    echo "Hello, World!";
};

// $test();

function createCounter() {
    $count = 0;

    $counter = function() use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter = createCounter();

var_dump($counter);

echo "Counter: " . $counter() . '<br/>';
echo "Counter: " . $counter() . '<br/>';



function incr(&$var) {
    return ++$var;
}


$counter2 = 0;

echo "Counter2: " . incr($counter2) . '<br/>';
echo "Counter2: " . incr($counter2) . '<br/>';