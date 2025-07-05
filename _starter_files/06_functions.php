<?php
// =====================================
//  joonguini and joe
// =====================================
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/


// simple function without parameter
function registerUser()
{
  echo 'User registered';
}

// Running a function
registerUser();// calling it

//function with a single para
function registerUser($email)
{
  echo 'User {$email}registered';
}

// Running a function
registerUser('kauthar@gmail.com');// calling it



// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);