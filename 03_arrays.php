<?php
/*
 * PHP Arrays Tutorial
 * This file demonstrates array creation and manipulation in PHP including:
 * - Indexed arrays
 * - Associative arrays
 * - Multidimensional arrays
 * - Array creation methods
 * - Array access and modification
 * - Array iteration
 * - JSON conversion
 * 
 * Joonguini Programming in the Kitchen
 */

/* ---------- Arrays ---------- */

// Array - Variable that holds multiple values
/*
  - Indexed - Arrays with a numeric index
  - Associative - Arrays with named keys
  - Multi-dimensional - Arrays containing one or more arrays
*/

// Indexed Array
$people = array('joe', 'Jeremy', 'Sara');
$ids = [23, 55, 12];
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy';
$cars[] = 'BMW';

// Associative Array
$people = array('joe' => 35, 'Jeremy' => 22, 'Sara' => 25);
$ids = [22 => 'joe', 44 => 'Jeremy', 63 => 'Sara'];

// Multi-dimensional Array
$cars = array(
  array('Honda', 20, 10),
  array('Toyota', 30, 20),
  array('Ford', 23, 12),
);

echo $cars[1][2];
echo '<br>';

// Associative Array with person data
$person = array(
  'first_name' => 'joe',
  'last_name' => 'Joonguini',
  'email' => 'joe@gmail.com',
);

echo $person['first_name'];
echo '<br>';

// You can also create arrays using the short syntax
$person2 = [
  'first_name' => 'joe',
  'last_name' => 'Joonguini',
  'email' => 'joe@gmail.com',
];

echo $person2['first_name'];
echo '<br>';

// Multi-dimensional Associative Array
$people = array(
  array(
    'first_name' => 'joe',
    'last_name' => 'Joonguini',
    'email' => 'joe@gmail.com',
  ),
  array(
    'first_name' => 'Jeremy',
    'last_name' => 'McPeak',
    'email' => 'jeremy@gmail.com',
  ),
  array(
    'first_name' => 'Sara',
    'last_name' => 'Jones',
    'email' => 'sara@gmail.com',
  ),
);

echo $people[1]['email'];
echo '<br>';

// Convert to JSON
$jsonobj = '{"first_name":"joe","last_name": "Joonguini","email":"joe@gmail.com"}';
$obj = json_decode($jsonobj);
echo $obj->first_name;
echo '<br>';

// Convert array to JSON
$arr = array('first_name' => 'joe', 'last_name' => 'Joonguini', 'email' => 'joe@gmail.com');
$json = json_encode($arr);
echo $json;
echo '<br>';

// Array functions
$fruits = array('apple', 'orange', 'pear');

// Get length
echo count($fruits);
echo '<br>';

// Search array
var_dump(in_array('apple', $fruits));
echo '<br>';

// Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');

// Remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);

// Split into chunks
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);
echo '<br>';

// Merge arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
echo '<br>';

// Spread operator (PHP 7.4+)
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);
echo '<br>';

// Combine arrays
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);
echo '<br>';

// Array keys
$keys = array_keys($c);
print_r($keys);
echo '<br>';

// Array values
$values = array_values($c);
print_r($values);
echo '<br>';

// Flip array
$flipped = array_flip($c);
print_r($flipped);
echo '<br>';

// Range
$numbers = range(1, 20);
print_r($numbers);
echo '<br>';

// Map
$newNumbers = array_map(function($number) {
  return "Number ${number}";
}, $numbers);
print_r($newNumbers);
echo '<br>';

// Filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);
echo '<br>';

// Reduce
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
echo $sum;
echo '<br>';
?>
