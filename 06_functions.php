<?php
/*
 * PHP Functions Tutorial
 * This file demonstrates function creation and usage in PHP including:
 * - Function declaration and definition
 * - Function parameters and arguments
 * - Return values
 * - Default parameters
 * - Variable scope in functions
 * - Anonymous functions
 * - Arrow functions (PHP 7.4+)
 * - Function documentation
 * 
 * Joonguini Programming in the Kitchen
 */

/* ---------- Functions ---------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser()
{
  echo 'User registered';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username)
{
  echo "User {$username} has been registered!";
}

// Pass in an argument
registerUser2('joe');

// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}

$sum = add(5, 5);
echo $sum;

// Adding default values
function subtract($num1, $num2 = 10)
{
  return $num1 - $num2;
}

echo subtract(10);
echo subtract(10, 5);

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(5, 5);

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);
