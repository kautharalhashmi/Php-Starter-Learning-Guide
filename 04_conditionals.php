<?php
/*
 * PHP Conditionals Tutorial
 * This file demonstrates conditional statements and logic in PHP including:
 * - If statements
 * - If-else statements
 * - If-elseif-else statements
 * - Comparison operators
 * - Logical operators
 * - Ternary operators
 * - Switch statements
 * - Null coalescing operator
 * 
 * Joonguini Programming in the Kitchen
 */

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;
$salary = 300000;

// Simple if statement
if ($age >= 20) {
  echo '1 You are not a teenager<br>';
}

// If-else statement
if ($age >= 20) {
  echo '2 You are not a teenager<br>';
} else {
  echo '2 You are a teenager<br>';
}

// If-elseif-else statement
if ($age >= 20) {
  echo '3 You are not a teenager<br>';
} elseif ($age >= 13) {
  echo '3 You are a teenager<br>';
} else {
  echo '3 You are a child<br>';
}

// If without braces (not recommended)
if ($age >= 20) echo '4 You are not a teenager<br>';
else echo '4 You are a teenager<br>';

// Ternary operator
echo $age >= 20 ? '5 You are not a teenager<br>' : '5 You are a teenager<br>';

// Short ternary operator
$myAge = $age ?: 18;
echo $myAge;
echo '<br>';

// Null coalescing operator
$myName = isset($name) ? $name : 'joe';
$myName = $name ?? 'joe';
echo $myName;
echo '<br>';

// Switch statement
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
  case 'admin':
    echo 'You are an admin<br>';
    break;
  case 'editor':
    echo 'You are an editor<br>';
    break;
  case 'user':
    echo 'You are a user<br>';
    break;
  default:
    echo 'You are a guest<br>';
}

/* ---------- Comparison Operators ---------- */

// Equal ==
var_dump(8 == 8);
echo '<br>';

// Identical === (same value and type)
var_dump(8 === '8');
echo '<br>';

// Not equal !=
var_dump(8 != 8);
echo '<br>';

// Not identical !==
var_dump(8 !== '8');
echo '<br>';

// Greater than >
var_dump(8 > 6);
echo '<br>';

// Less than <
var_dump(8 < 6);
echo '<br>';

// Greater than or equal >=
var_dump(8 >= 8);
echo '<br>';

// Less than or equal <=
var_dump(8 <= 6);
echo '<br>';

// Spaceship operator <=> (PHP 7+)
// Returns -1 if left is less, 0 if equal, 1 if left is greater
var_dump(8 <=> 6);
echo '<br>';

var_dump(8 <=> 8);
echo '<br>';

var_dump(8 <=> 10);
echo '<br>';

/* ---------- Logical Operators ---------- */

// And && - Both conditions must be true
var_dump($age >= 20 && $salary >= 300000);
echo '<br>';

// Or || - At least one condition must be true
var_dump($age >= 20 || $salary >= 500000);
echo '<br>';

// Not ! - Inverts the boolean value
var_dump(!($age >= 20));
echo '<br>';

// And operator
if ($age >= 20 && $salary >= 300000) {
  echo 'You are rich and not a teenager<br>';
}

// Or operator
if ($age >= 20 || $salary >= 300000) {
  echo 'You are either rich or not a teenager<br>';
}

// Not operator
if (!($age >= 20)) {
  echo 'You are a teenager<br>';
}

/* ---------- Precedence ---------- */

// && has higher precedence than ||
$result1 = true && false;
$result2 = true || false;

var_dump($result1);
echo '<br>';
var_dump($result2);
echo '<br>';

// Use parentheses to control precedence
$result3 = (true && false) || true;
var_dump($result3);
echo '<br>';

/* ---------- Complex Conditions ---------- */

$age = 25;
$salary = 300000;
$creditScore = 700;

if ($age >= 20 && $salary >= 300000 && $creditScore >= 700) {
  echo 'You can get a loan<br>';
} elseif ($age >= 20 && $salary >= 300000) {
  echo 'You can get a loan with higher interest<br>';
} elseif ($age >= 20) {
  echo 'You need to improve your financial situation<br>';
} else {
  echo 'You are too young for a loan<br>';
}

/* ---------- Nested If Statements ---------- */

$age = 25;
$hasLicense = true;
$hasInsurance = false;

if ($age >= 18) {
  if ($hasLicense) {
    if ($hasInsurance) {
      echo 'You can drive legally<br>';
    } else {
      echo 'You need insurance to drive legally<br>';
    }
  } else {
    echo 'You need a license to drive<br>';
  }
} else {
  echo 'You are too young to drive<br>';
}

/* ---------- Switch with Multiple Cases ---------- */

$grade = 'B';

switch ($grade) {
  case 'A':
  case 'A+':
    echo 'Excellent!<br>';
    break;
  case 'B':
  case 'B+':
    echo 'Good!<br>';
    break;
  case 'C':
  case 'C+':
    echo 'Average<br>';
    break;
  case 'D':
    echo 'Below average<br>';
    break;
  case 'F':
    echo 'Failed<br>';
    break;
  default:
    echo 'Invalid grade<br>';
}

/* ---------- Match Expression (PHP 8+) ---------- */

// Match expression is similar to switch but more powerful
$status = 'active';

$message = match($status) {
  'active' => 'User is active',
  'inactive' => 'User is inactive',
  'pending' => 'User is pending',
  default => 'Unknown status'
};

echo $message;
echo '<br>';
