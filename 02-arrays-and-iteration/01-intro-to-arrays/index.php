<?php

function inspect($val)
{
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
}

$names = ['Alice', 'Bob', 'Charlie'];
$numbers = [1, 2, 3, 4, 5];

inspect($names);
inspect($numbers);

// add element to array
$numbers[] = 100;
$numbers[] = 101;
$numbers[] = 102;

// delete or remove
unset($numbers[0]); // removes the first element (1) from the array AND ITS INDEX

$numbers = array_values($numbers); 

inspect($numbers);


