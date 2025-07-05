<?php
// =====================================
//  joonguini and joe
// =====================================
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// there's types of array 
// 1. Indexed Array 

$people = array('kauthar', 'mohamed', 'hamed'); // => by using the array() adding the array values
$ids = [23, 55, 12]; //=> by [] add the values of array as integer values 
$cars = ['Honda', 'Toyota', 'Ford']; //=> by [] string values accually it's accepting any datatype values 
$cars[3] = 'Chevy'; // => by mentioning the index and add or append
$cars[] = 'BMW';// append a value to the array and the added value will be in the end of the array 



// 2. Associative Array

$people = array('kauthar' => 35, 'mohamed' => 22, 'hamed' => 25); // here we used key value like 'kauthar' key => 35 value 
$ids = [22 => 'kauthar', 44 => 'mohamed', 63 => 'hamed']; // same in here mapping by the key of each 


// 3. Multi-dimensional
// dimensional indexed array , each inner array holds array 
$cars = array(
  array('Honda', 20, 10), // array1
  array('Toyota', 30, 20), // array2
  array('Ford', 23, 12), // array3
);


// convert to JSON

$jsonobj = '{"first_name":"kauthar","last_name": "alhashmi","email":"kauthar@gmail.com"}'; // 
$obj = json_decode($jsonobj); // json_decode ==> converts the JSON string into a PHP object (specifically an instance of stdClass by default)
echo $obj->first_name; // prints the firstname in the object 


// Convert array to JSON
$arr = array('first_name' => 'kauthar', 'last_name' => 'alhashmi', 'email' => 'kauthar@gmail.com');
$json = json_encode($arr); // convert the array to json string 
echo $json;
echo '<br>';


// functions 
// array() ==> adding array values
// count() ==> get the length of the array 
// in_array() ==> use it to seach anything inside the array 
// array_push() ==> add in the end
// array_unshift() ==> add in the beggining
// array_pop() ==> deleting last element of the array
// array_shift() ==> deleting first element of the array
// unset($arrayname[index]); ==> removing the specific index value 
// array_chunk() ==> spliting in to chuncks Returns a multidimensional array 
// array_merge() ==> merging 2 or more arrays into one 
// array_combine() ==> used to create an associative array by combining two arrays: one for the keys and one for the values.
// array_keys() ==> key 
// array_value() ==> value
// array_flip() ==> swaps the keys and values of an array. It’s like turning the array inside out!
// range(from,to) ==> generate a sequence of numbers super handy for loops, pagination, or test data.
// array_map() applies the anonymous function to each element of $var , 
// array_filter() ==> array_filter($numbers, fn($number) => $number <= 10); it will loop the numbers retuens true for <=10
// array_reduce() ==> to calculate the sum of all elements in array 



// Array functions
$fruits = array('apple', 'orange', 'pear');
//
echo count($fruits); // how many fruits 
echo '<br>';
// Search array
var_dump(in_array('apple', $fruits)); // is there an apple in the fruits 
echo '<br>';
// Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry'); // adding blueberry and strawberry in the fruits 
array_unshift($fruits, 'mango'); // add mango to the beggning in the array

// Remove from array
array_pop($fruits);// last elemt removed
array_shift($fruits); // first element removed
unset($fruits[2]);// removes / deleting element at index 2 


// Split into chunks ==> - Returns a multidimensional array.
$chunked_array = array_chunk($fruits, 2); // takes the $fruits array and splits it into chunks of 2 elements.
print_r($chunked_array);
echo '<br>';

// Merge arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2); // merging the 2 arrays in to one 
print_r($arr3);
echo '<br>';

// Spread operator (PHP 7.4+) / similar to  array_merge($arr1, $arr2) but faster 
$arr4 = [...$arr1, ...$arr2]; // Works only with arrays that have integer keys
print_r($arr4);
echo '<br>';

// Combine arrays
$a = ['green', 'red', 'yellow']; // make this as key
$b = ['avocado', 'apple', 'banana']; // make this as value 
$c = array_combine($a, $b); // do an array that have key value 
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

// Flip array = swaps the keys and values of an array. It’s like turning the array inside out!
$flipped = array_flip($c);
print_r($flipped);
echo '<br>';

// Range
$numbers = range(1, 20); // generate a sequence of numbers from 1 to 20—super handy for loops, pagination, or test data.
print_r($numbers);
echo '<br>';

// Map    - array_map() applies the anonymous function to each element of $numbers.
$newNumbers = array_map(function($number) {
  return "Number ${number}"; //- The function returns a string like "Number 1", "Number 2", etc. The result is stored in $newNumbers, a new array of strings.
}, $numbers);
print_r($newNumbers);
echo '<br>';

// Filter
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10); // true for <=10 
print_r($lessThan10);
echo '<br>';

// Reduce
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number); // to calculate the sum
echo $sum;
echo '<br>';
?>

