<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/

$nums = [1, 2, 3, 4, 5];

$count = count($nums);

$sum = array_sum($nums);



echo "<h3>The sum of the $count numbers is: $sum</h3>";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

$colors = ['red', 'blue', 'green', 'yellow'];

$colors = array_reverse($colors);

$colors[] = 'purple';
$colors[] = 'orange';
$colors[1] = 'pink';
array_pop($colors);

var_dump($colors);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, 
  job_title, company, contact_email, and contact_phone. 

  Also add an array field for skills. 
  The skills array should be an array of strings with each skill a person has.
   For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.

  2. Create a new listing using the `array_push()` function. 
  The new listing should have the same fields as the others.

  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

$jobListings = [
 ['id' => 1, 'job_title' => 'Web Developer', 'company' => 'Tech Corp', 'contact_email' => 'contact@techcorp.com', 'contact_phone' => '555-1234', 'skills' => ['PHP', 'MySQL', 'JavaScript']],
 ['id' => 2, 'job_title' => 'Front-end Developer', 'company' => 'Design Studio', 'contact_email' => 'contact@designstudio.com', 'contact_phone' => '555-5678', 'skills' => ['HTML', 'CSS', 'JavaScript']],
 ['id' => 3, 'job_title' => 'Back-end Developer', 'company' => 'Software Solutions', 'contact_email' => 'contact@softwaresolutions.com', 'contact_phone' => '555-9012', 'skills' => ['PHP', 'MySQL', 'Node.js']]
];

array_push($jobListings, ['id' => 4, 'job_title' => 'Full Stack Developer', 'company' => 'Innovatech', 'contact_email' => 'contact@innovatech.com', 'contact_phone' => '555-3456', 'skills' => ['PHP', 'MySQL', 'JavaScript', 'Node.js']]);

echo  '<br/>'. '<br/>' . $jobListings[1]['job_title'] . '<br/>';
echo $jobListings[2]['skills'][0];