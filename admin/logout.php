<?php

session_start();

$_SESSION = array();

// if (isset($_SESSION['user'])) {
session_destroy();
session_unset();

// echo "User exists.";
// }

//$_SESSION['login'] = "";

header("Location: /admin");

// Probably a better way to do this. Also unset all oher session variables.

?>