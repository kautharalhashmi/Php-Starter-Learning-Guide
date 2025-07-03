<?php
/*
 * PHP Cookies Tutorial
 * This file demonstrates working with cookies in PHP including:
 * - Setting cookies
 * - Reading cookies
 * - Deleting cookies
 * - Cookie parameters and options
 * - Cookie security considerations
 * - Cookie expiration handling
 * - Cookie validation
 * 
 * Joonguini Programming in the Kitchen
 */

/* ---------- Cookies ---------- */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.

// Set a cookie
setcookie('name', 'joe', time() + 86400 * 30); // 86400 = 1 day

// echo time();

// Get a cookie
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Delete a cookie
setcookie('name', '', time() - 86400);
