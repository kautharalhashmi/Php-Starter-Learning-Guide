<?php
// =====================================
//  joonguini and joe
// =====================================

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

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 20;
$salary = 300000;

// Simple if statement
if ($age >= 20) { // if the age is greater than or equal to 20 then 'You are not a teenager'
  echo '1 You are not a teenager<br>';
}



// if else

if($age >= 20 ){ // if the condition is true print the if , if not then else 
  echo 'you are not a teenager'
}
else{
  echo 'you are a teenager'
}


// if elseif else 
if ($age >= 20) { // if the age is >= 20 then not teenager
  echo '3 You are not a teenager<br>';
} elseif ($age >= 13) { // if the age is >= 13 then teenager 
  echo '3 You are a teenager<br>';
} else { // if not >=20 or >=13 then child 
  echo '3 You are a child<br>';
}


// 
/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
// if age >= 20 then print not teenager if else then you are teenager 
echo $age >= 20 ? '5 You are not a teenager<br>' : '5 You are a teenager<br>';

//can use this way too 
$myAge = $age ?: 18;
echo $myAge;
echo '<br>';

// Null coalescing operator
$myName = isset($name) ? $name : 'joe'; // checking if the name is exist if yes then assign value of myname otherwise assign joe
$myName = $name ?? 'joe';
echo $myName;
echo '<br>';




/* -------- Switch Statements ------- */
$userRole = 'admin'; // admin, editor, user

switch ($userRole) { //if the userrole is admin 
  case 'admin':
    echo 'You are an admin<br>';
    break;
  case 'editor': //if the userrole is editor  
    echo 'You are an editor<br>';
    break;
  case 'user': //if the userrole is user 
    echo 'You are a user<br>';
    break;
  default: //if not 
    echo 'You are a guest<br>';
}


/* ---------- Comparison Operators ---------- */
var_dump(8 == 8);       // true  => values are equal
var_dump(8 === '8');     // false => same value, but different types (int vs string)
var_dump(8 != 8);        // false => values are equal, so not unequal
var_dump(8 !== '8');     // true  => values are equal, but types differ
var_dump(8 > 6);         // true  => 8 is greater than 6
var_dump(8 < 6);         // false => 8 is not less than 6
var_dump(8 >= 8);        // true  => 8 is equal to 8
var_dump(8 <= 6);        // false => 8 is not less than or equal to 6

// Spaceship operator <=> (PHP 7+)
// Returns -1 if left is less, 0 if equal, 1 if left is greater
var_dump(8 <=> 6);  // Outputs: int(1)   → 8 is greater than 6
var_dump(8 <=> 8);  // Outputs: int(0)   → 8 is equal to 8
var_dump(8 <=> 10); // Outputs: int(-1)  → 8 is less than 10


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

$age = 25;               // Age of the applicant
$salary = 300000;        // Annual salary of the applicant
$creditScore = 700;      // Credit score of the applicant

// Check if all three conditions are met: age ≥ 20, salary ≥ 300000, and credit score ≥ 700
if ($age >= 20 && $salary >= 300000 && $creditScore >= 700) {
  echo 'You can get a loan<br>'; // All criteria met — eligible for a loan
}
// If credit score is below 700 but age and salary conditions are met
elseif ($age >= 20 && $salary >= 300000) {
  echo 'You can get a loan with higher interest<br>'; // Eligible, but with higher risk
}
// If only age condition is met
elseif ($age >= 20) {
  echo 'You need to improve your financial situation<br>'; // Not enough salary or credit score
}
// If age is below 20
else {
  echo 'You are too young for a loan<br>'; // Automatically disqualified due to age
}

/* ---------- Nested If Statements ---------- */

$age = 25;
$hasLicense = true;
$hasInsurance = false;

if ($age >= 18) { // Check if the person is at least 18 years old
  if ($hasLicense) { // Check if they have a driving license
    if ($hasInsurance) { // Check if they have valid insurance
      echo 'You can drive legally<br>'; // All conditions met
    } else {
      echo 'You need insurance to drive legally<br>'; // Missing insurance
    }
  } else {
    echo 'You need a license to drive<br>'; // No license
  }
} else {
  echo 'You are too young to drive<br>'; // Underage
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
$status = 'active'; // Set the current user status

// Use match expression (PHP 8+) to determine the message based on status
$message = match($status) {
  'active' => 'User is active',       // If status is 'active'
  'inactive' => 'User is inactive',   // If status is 'inactive'
  'pending' => 'User is pending',     // If status is 'pending'
  default => 'Unknown status'         // Fallback for any other value
};

echo $message; // Output the result
echo '<br>';  


