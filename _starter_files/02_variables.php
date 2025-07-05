<?php
// =====================================
//  joonguini and joe
// =====================================

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/


// Variables in php dont need to assign it with a datatype 
// starts with $ name of Variables

// string
$name = "kauthar"; //==> it's okay to use with " " or ' '

// flout (decimal)
$price = 2.50;

// boolean (true or false)
$employeed =false;

//empty null 
$quantity = null;

//Array [] multiple values assigned in array
$cities = array('muscat','qurum','khoud','alkhawair');
// or 
$countries = ['Oman','UK','Italy'];

//creating an object using built-in ==> stdClass
$student = new stdClass();
// to add properties for that object student 
$student->firstname = 'kauthar';
$student->age = 24;

// to hold a reffrence of file use fopen 
$file = fopen('sample.txt', 'r');

//constant value by 
// define('CAPITALLETTERVAR', 'the value any datatype is acceptible')
define('PI',3.14);
// or const
const STATUS = 'active';

//concatenations 
// by => .
$firstname = 'kauthar';
$lastname = 'alhashmi';
$fullname = $firstname .' '.$lastname;

//to call the variable 
// ==> "$firstName $lastName"
// ==> "{$firstName} {$lastName}"

// to append .=
$fullName = $firstName;
$fullName .= ' ';
$fullName .= $lastName;


//Escaping char
$sentence = "She said \"Hello\" to me.";
echo $sentence;
echo '<br>';
//
$sentence2 = 'She said "Hello" to me.';
echo $sentence2;
echo '<br>';
//
$sentence3 = "She said 'Hello' to me.";
echo $sentence3;
echo '<br>';
//
$sentence4 = 'She said \'Hello\' to me.';
echo $sentence4;



// Variable Functions

// Check if variable is set
var_dump(isset($firstName));
echo '<br>';

// Check if variable is empty
var_dump(empty($firstName));
echo '<br>';

// Get variable data type
echo gettype($firstName);
echo '<br>';


// Check if variable is of specific type
var_dump(is_string($firstName));
echo '<br>';
// check is integer
var_dump(is_int($age));
echo '<br>';
// check if boolean
var_dump(is_bool($employed));
echo '<br>';
// check if array
var_dump(is_array($cities));
echo '<br>';
// check if obj
var_dump(is_object($student));
echo '<br>';
// check is it's null
var_dump(is_null($quantity));
echo '<br>';

//To make the vairable golbaly used then put it in the top 
$globalVar = 'I am global';
//then use it in the function inside 
function testing(){
    global $globalVar;
    echo $globalVar;

      echo '<br>';
    // but the local varibale 

    $local = 'im local';
    echo $local;
}

testing(); //==> calling the function 


// You can also use $GLOBALS array
function testing2() {
  echo $GLOBALS['globalVar']; 
  echo '<br>';
}

testing2();
?>