<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// Those 2 are different things
$string_single_qoutes = 'Hello, World!';
$string = "Hello, World!";

var_dump($string);
echo '<br/>';
echo getType($string);

$integer = 42;

var_dump($integer);
echo '<br/>';

$float = 3.14;

var_dump($float);
echo '<br/>';

$boolean = true;

var_dump($boolean);
echo '<br/>';

$array = [1, 2, 3, 4, 5];

var_dump($array);
echo '<br/>';

$null = null;

var_dump($null);
echo '<br/>';

// Object
$person = new stdClass();
var_dump($person);
echo '<br/>';

// Resource
$file = fopen('sample.txt', 'r');

var_dump($file);
echo '<br/>';