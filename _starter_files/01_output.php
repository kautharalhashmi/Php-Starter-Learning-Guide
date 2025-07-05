<?php
// =====================================
//  joonguini and joe
// =====================================

/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

// for printing in php there is types 
// 1 . echo ==> print all datatypes 
// 2 . print ==> print all datatype and it's simmiler to echo
// 3 . print_r ==> printing the array type and make them with same structure as the array dimaintion 
// 4 . var_dump ==> displays detailed information about one or more variables

echo 'Hello';
print 'Hello';
print_r([1, 2, 3]);
var_dump('Hello');

// Comments in php 

// single line 
/* multiple lines */


// also in html u can put your php onit so how to do it |
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <h1>Hello <?php echo 'Hello'; ?></h1>
</body>
</html>
