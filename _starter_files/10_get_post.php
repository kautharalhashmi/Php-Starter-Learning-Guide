<?php
// =====================================
//  joonguini and joe
// =====================================
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

/*
 * PHP GET and POST Tutorial
 * This file demonstrates handling GET and POST requests in PHP including:
 * - $_GET superglobal for URL parameters
 * - $_POST superglobal for form data
 * - Form creation and submission
 * - Data validation and processing
 * - Security considerations
 * - URL parameter handling
 * 
 * Joonguini Programming in the Kitchen
 */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
  // echo '<h3>' . $GET['username'] . '</h3>';
  echo '<h3>' . $_POST['username'] . '</h3>';
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=joe">Link</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
