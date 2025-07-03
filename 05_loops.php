<?php
/*
 * PHP Loops Tutorial
 * This file demonstrates different types of loops in PHP including:
 * - For loops
 * - While loops
 * - Do-while loops
 * - Foreach loops
 * - Loop control statements (break, continue)
 * - Nested loops
 * - Array iteration with loops
 * 
 * Joonguini Programming in the Kitchen
 */

/* ---------- Loops ---------- */

// For Loop
// @params - init, condition, increment

for ($i = 0; $i <= 10; $i++) {
  echo 'Number ' . $i . '<br>';
}

// While Loop
// @params - condition

$i = 0;
while ($i < 10) {
  echo 'Number ' . $i . '<br>';
  $i++;
}

// Do...While Loop
// @params - condition

$i = 0;
do {
  echo 'Number ' . $i . '<br>';
  $i++;
} while ($i < 10);

// Foreach Loop - For arrays

$people = array('joe', 'Jeremy', 'Sara');

foreach ($people as $person) {
  echo $person . '<br>';
}

// Foreach Loop - For associative arrays
$people = array('joe' => 'joe@gmail.com', 'Jeremy' => 'jeremy@gmail.com', 'Sara' => 'sara@gmail.com');

foreach ($people as $person => $email) {
  echo $person . ': ' . $email . '<br>';
}

// Foreach Loop - For indexed arrays with keys
$people = array('joe', 'Jeremy', 'Sara');

foreach ($people as $index => $person) {
  echo $index . ': ' . $person . '<br>';
}

// Foreach Loop - For multidimensional arrays
$posts = array(
  array(
    'title' => 'First Post',
    'author' => 'joe',
    'content' => 'Hello World'
  ),
  array(
    'title' => 'Second Post',
    'author' => 'Jeremy',
    'content' => 'Hello World'
  ),
  array(
    'title' => 'Third Post',
    'author' => 'Sara',
    'content' => 'Hello World'
  )
);

foreach ($posts as $post) {
  echo '<h3>' . $post['title'] . '</h3>';
  echo '<p>' . $post['content'] . '</p>';
  echo '<small>By: ' . $post['author'] . '</small><br><br>';
}

// Foreach Loop - For objects
$person = new stdClass();
$person->first_name = 'joe';
$person->last_name = 'Joonguini';
$person->email = 'joe@gmail.com';

foreach ($person as $key => $value) {
  echo $key . ': ' . $value . '<br>';
}

// Loop Control Statements

// Break - Exit the loop
for ($i = 0; $i <= 10; $i++) {
  if ($i === 5) {
    break;
  }
  echo 'Number ' . $i . '<br>';
}

// Continue - Skip the current iteration
for ($i = 0; $i <= 10; $i++) {
  if ($i === 5) {
    continue;
  }
  echo 'Number ' . $i . '<br>';
}

// Nested Loops
for ($i = 0; $i <= 5; $i++) {
  for ($j = 0; $j <= 5; $j++) {
    echo $i . '-' . $j . '<br>';
  }
}

// While Loop with Array
$fruits = array('apple', 'orange', 'pear');
$i = 0;

while ($i < count($fruits)) {
  echo $fruits[$i] . '<br>';
  $i++;
}

// Do-While Loop with Array
$fruits = array('apple', 'orange', 'pear');
$i = 0;

do {
  echo $fruits[$i] . '<br>';
  $i++;
} while ($i < count($fruits));

// For Loop with Array
$fruits = array('apple', 'orange', 'pear');

for ($i = 0; $i < count($fruits); $i++) {
  echo $fruits[$i] . '<br>';
}

// Foreach Loop with Index
$fruits = array('apple', 'orange', 'pear');

foreach ($fruits as $index => $fruit) {
  echo $index . ': ' . $fruit . '<br>';
}

// Loop with Range
$numbers = range(1, 10);

foreach ($numbers as $number) {
  echo $number . '<br>';
}

// Loop with Step
for ($i = 0; $i <= 20; $i += 2) {
  echo $i . '<br>';
}

// Loop with Condition
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($numbers as $number) {
  if ($number % 2 === 0) {
    echo $number . ' is even<br>';
  } else {
    echo $number . ' is odd<br>';
  }
}

// Loop with Multiple Conditions
$people = array(
  array(
    'first_name' => 'joe',
    'last_name' => 'Joonguini',
    'email' => 'joe@gmail.com',
    'age' => 35
  ),
  array(
    'first_name' => 'Jeremy',
    'last_name' => 'McPeak',
    'email' => 'jeremy@gmail.com',
    'age' => 22
  ),
  array(
    'first_name' => 'Sara',
    'last_name' => 'Jones',
    'email' => 'sara@gmail.com',
    'age' => 25
  )
);

foreach ($people as $person) {
  if ($person['age'] >= 25) {
    echo $person['first_name'] . ' is an adult<br>';
  } else {
    echo $person['first_name'] . ' is young<br>';
  }
}

// Loop with Break and Continue
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($numbers as $number) {
  if ($number === 5) {
    continue; // Skip 5
  }
  if ($number === 8) {
    break; // Stop at 8
  }
  echo $number . '<br>';
}

// Loop with Array Functions
$fruits = array('apple', 'orange', 'pear', 'banana', 'grape');

// Using array_walk
array_walk($fruits, function($fruit) {
  echo 'I like ' . $fruit . '<br>';
});

// Using array_map
$upperFruits = array_map('strtoupper', $fruits);
foreach ($upperFruits as $fruit) {
  echo $fruit . '<br>';
}

// Using array_filter
$longFruits = array_filter($fruits, function($fruit) {
  return strlen($fruit) > 4;
});

foreach ($longFruits as $fruit) {
  echo $fruit . ' is a long fruit name<br>';
}
?>
