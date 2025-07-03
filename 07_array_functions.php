<?php
/*
 * PHP Array Functions Tutorial
 * This file demonstrates built-in array functions in PHP including:
 * - Array manipulation functions
 * - Array search and filter functions
 * - Array sorting functions
 * - Array utility functions
 * - Array iteration functions
 * - Array transformation functions
 * 
 * Joonguini Programming in the Kitchen
 */

/* ---------- Array Functions ---------- */

$fruits = ['apple', 'orange', 'pear'];

// Get array length
echo count($fruits);

// Search array
var_dump(in_array('apple', $fruits));

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

// Merge arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

// Spread operator (PHP 7.4+)
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);

// Combine arrays
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);

// Array keys
$keys = array_keys($c);
print_r($keys);

// Array values
$values = array_values($c);
print_r($values);

// Flip array
$flipped = array_flip($c);
print_r($flipped);

// Range
$numbers = range(1, 20);
print_r($numbers);

// Map
$newNumbers = array_map(function($number) {
  return "Number ${number}";
}, $numbers);
print_r($newNumbers);

// Filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);

// Reduce
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
echo $sum;
?>
