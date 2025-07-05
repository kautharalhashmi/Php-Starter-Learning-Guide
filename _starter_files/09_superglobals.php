<?php
// =====================================
//  joonguini and joe
// =====================================
/* ---------- Superglobals ---------- */
/*
  Built in variables that are always available in all scopes
*/

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/
?>

<?php
/*
 * - $_GET       → URL parameters
 * - $_POST      → Form data
 * - $_REQUEST   → Combined GET and POST
 * - $_SERVER    → Server info
 * - $_SESSION   → Session data
 * - $_COOKIE    → Cookies
 * - $_FILES     → File uploads
 * - $_ENV       → Environment variables
 * - $GLOBALS    → Global variables
 * 
 */

/* ---------- Superglobals ---------- */

// $GLOBALS   → Access global variables from anywhere
// $_GET      → Data sent via URL (e.g., ?name=joe)
// $_POST     → Data sent via form (method="post")
// $_REQUEST  → Combines $_GET, $_POST, and $_COOKIE
// $_SERVER   → Info about server and request
// $_SESSION  → Stores data across pages (needs session_start())
// $_COOKIE   → Stores data on the client
// $_FILES    → Info about uploaded files
// $_ENV      → Environment variables (e.g., PATH)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
   <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>           // Host header from the request (e.g., localhost or domain.com)
<li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li> // Root directory of your web server (e.g., /var/www/html)
<li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>   // Windows system root (e.g., C:\Windows), may not exist on all servers
<li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>  // Server's hostname (e.g., localhost)
<li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>  // Port used by the server (e.g., 80 or 443)
<li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li> // Path to the executing script relative to the root
<li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>  // Full URI requested (e.g., /index.php?page=1)
<li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li> // Web server software info (e.g., Apache/2.4.41)
<li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li> // Browser and OS info from the client
<li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li> // Client's IP address
<li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>  // Port used by the client to connect
  </ul>
</body>
</html>
