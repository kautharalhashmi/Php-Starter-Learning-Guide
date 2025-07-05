<?php
// =====================================
//  joonguini and joe
// =====================================

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($i = 0; $i <= 10; $i++) { // from 0 to 10 times it will print  
  echo 'Number ' . $i . '<br>';
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$i = 0;
while ($i < 10) {
  echo 'Number ' . $i . '<br>';
  $i++;
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$i = 0;
do {
  echo 'Number ' . $i . '<br>';
  $i++;
} while ($i < 10);




/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
// Foreach Loop - For arrays

$people = array('joe', 'Jeremy', 'Sara');

foreach ($people as $person) {
  echo $person . '<br>';
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
// for each element print the value if it 
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
}// it will print each key : value

// Loop Control Statements

// Break - Exit the loop when $i reaches 5
for ($i = 0; $i <= 10; $i++) {
  if ($i === 5) {
    break; // Exit the loop immediately when $i is 5
  }
  echo 'Number ' . $i . '<br>'; // Output the current number
}

// Continue - Skip the current iteration when $i equals 5
for ($i = 0; $i <= 10; $i++) {
  if ($i === 5) {
    continue; // Skip the rest of this iteration and jump to the next one
  }
  echo 'Number ' . $i . '<br>'; // This line is skipped when $i is 5
}


// Nested Loops
// Outer loop: $i goes from 0 to 5
for ($i = 0; $i <= 5; $i++) {
  // Inner loop: $j goes from 0 to 5 for each $i
  for ($j = 0; $j <= 5; $j++) {
    // Output the current pair in the format "i-j"
    echo $i . '-' . $j . '<br>';
  }
}

/*
0-0
0-1
0-2
...
5-4
5-5
*/

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
  if ($number % 2 === 0) { // from the array which is even and odd 
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

// Using array_walk ==> callback to each element of an array.
array_walk($fruits, function($fruit) {
  echo 'I like ' . $fruit . '<br>';
});

// Using array_map
// Use array_map to apply strtoupper to each element
$upperFruits = array_map('strtoupper', $fruits);

// Loop through the new array and print each uppercase fruit
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
