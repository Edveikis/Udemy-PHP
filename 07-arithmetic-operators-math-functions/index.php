<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 20;
$num2 = 10;

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 + $num2 = " . $num1 - $num2;
$output = "$num1 + $num2 = " . $num1 * $num2;
$output = "$num1 + $num2 = " . $num1 / $num2;
$output = "$num1 + $num2 = " . $num1 % $num2;

// Assignment operator
$num3 = 10;
// $num3 = $num3 + 20;
$num3 += 20;

// Built in functions
// rand()

$output = rand();

$output = rand(1, 10);

// round()
$output = round(4.6);

// ceil()
$output = ceil(4.2);

// floor()
$output = floor(4.8);

// sqrt()
$output = sqrt(16);

// pi()
$output = pi();

// abs()
$output = abs(-5);

// max()
$output = max(1,3,3,5,500);

// min()
$output = min(1,3,3,5,500);

// number_format()
$output = number_format(1234567.121234, 2, '.', ',');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
       <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>