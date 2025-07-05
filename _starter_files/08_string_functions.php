<?php
// =====================================
//  joonguini and joe
// =====================================
/* ---------- String Functions -------- */

/*
  Functions to work with strings()
  https://www.php.net/manual/en/ref.strings.php
*/


// strlen()           ==> Returns the length of a string (number of bytes).
// strpos()           ==> Finds the position of the first occurrence of a substring in a string (case-sensitive).
// strrpos()          ==> Finds the position of the last occurrence of a substring in a string (case-sensitive).
// strrev()           ==> Reverses a string.
// strtolower()       ==> Converts all characters in a string to lowercase.
// strtoupper()       ==> Converts all characters in a string to uppercase.
// ucwords()          ==> Capitalizes the first letter of each word in a string.
// str_replace()      ==> Replaces all occurrences of a search string with a replacement string.
// substr()           ==> Returns a portion of a string, starting at a specified position.
// str_starts_with()  ==> Checks if a string starts with a given substring (case-sensitive, PHP 8+).
// str_ends_with()    ==> Checks if a string ends with a given substring (case-sensitive, PHP 8+).
// htmlentities()     ==> Converts special characters to HTML entities (e.g., < becomes &lt;).

$string = "Hello World";

// Get the length of a string
echo strlen($string);
echo '<br>';

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');
echo '<br>';

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');
echo '<br>';

// Reverse a string
echo strrev($string);
echo '<br>';

// Convert all characters to lowercase
echo strtolower($string);
echo '<br>';

// Convert all characters to uppercase
echo strtoupper($string);
echo '<br>';

// Uppercase the first character of each word
echo ucwords($string);
echo '<br>';

// String replace
echo str_replace('World', 'Everyone', $string);
echo '<br>';

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo '<br>';
echo substr($string, 5);
echo '<br>';

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}
echo '<br>';

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}
echo '<br>';

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);
echo '<br>';