<?php
/*
 * PHP Variables Tutorial
 * This file demonstrates variable declaration and usage in PHP including:
 * - Variable declaration with $ symbol
 * - Data types (strings, integers, floats, booleans, arrays, objects, null)
 * - Variable naming conventions
 * - String concatenation
 * - Constants definition
 * - Variable scope concepts
 * 
 * Joonguini Programming in the Kitchen
 */

/* ---------- Variables & Data Types ---------- */

// Variables are containers that store data
// Variable names must be prefixed with $
// Variable names must start with a letter or an underscore
// Variable names are case-sensitive ($name and $NAME are two different variables)
// Variable names cannot start with a number

/* ---- Data Types ---- */

// String - Can be single or double quotes
$name = 'joe'; // String // Can be single or double quotes
$name2 = "joe"; // String // Can be single or double quotes

// Integer - Whole numbers
$age = 35;
$negative = -3;

// Float - Decimal numbers
$gpa = 3.7;
$price = 987.23;

// Boolean - true or false
$employed = true;
$online = false;

// Null - Empty variable
$quanity = null;

// Array - Multiple values
$langs = array('JavaScript', 'Ruby', 'Python', 'C#', 'PHP');
$langs2 = ['JavaScript', 'Ruby', 'Python', 'C#'];

// Object - Instance of a class
$person = new stdClass();
$person->first = 'joe';
$person->email = 'joe@gmail.com';
$person->age = 35;

// Resource - Special variable that holds a reference to an external resource
$file = fopen('sample.txt', 'r');

/* ---- Variable Naming ---- */

// Long variable names use camelCase
$firstName = 'joe';
$lastName = 'Smith';
$isOn = true;

// Constant - Uppercase with underscore
define('SITE_NAME', 'Joonguini Programming in the Kitchen');
define('PI', 3.14159);

// You can also use const keyword (but only at the top level)
const STATUS = 'active';

echo SITE_NAME;
echo '<br>';
echo PI;
echo '<br>';
echo STATUS;
echo '<br>';

/* ---- String Concatenation ---- */

$firstName = 'joe';
$lastName = 'Smith';
$fullName = $firstName . ' ' . $lastName;
echo $fullName;
echo '<br>';

// You can also use double quotes to interpolate
$fullName2 = "$firstName $lastName";
echo $fullName2;
echo '<br>';

// You can also use curly braces
$fullName3 = "{$firstName} {$lastName}";
echo $fullName3;
echo '<br>';

// You can also use the .= operator to append
$fullName4 = $firstName;
$fullName4 .= ' ';
$fullName4 .= $lastName;
echo $fullName4;
echo '<br>';

/* ---- Escaping Characters ---- */

$sentence = "She said \"Hello\" to me.";
echo $sentence;
echo '<br>';

$sentence2 = 'She said "Hello" to me.';
echo $sentence2;
echo '<br>';

$sentence3 = "She said 'Hello' to me.";
echo $sentence3;
echo '<br>';

$sentence4 = 'She said \'Hello\' to me.';
echo $sentence4;
echo '<br>';

/* ---- Variable Functions ---- */

// Check if variable is set
var_dump(isset($firstName));
echo '<br>';

// Check if variable is empty
var_dump(empty($firstName));
echo '<br>';

// Get variable type
echo gettype($firstName);
echo '<br>';

// Check if variable is of specific type
var_dump(is_string($firstName));
echo '<br>';

var_dump(is_int($age));
echo '<br>';

var_dump(is_bool($employed));
echo '<br>';

var_dump(is_array($langs));
echo '<br>';

var_dump(is_object($person));
echo '<br>';

var_dump(is_null($quanity));
echo '<br>';

/* ---- Variable Scope ---- */

// Global scope
$globalVar = 'I am global';

function testFunction() {
  // Local scope
  $localVar = 'I am local';
  echo $localVar;
  echo '<br>';
  
  // Access global variable
  global $globalVar;
  echo $globalVar;
  echo '<br>';
}

testFunction();

// You can also use $GLOBALS array
function testFunction2() {
  echo $GLOBALS['globalVar'];
  echo '<br>';
}

testFunction2();
?>
