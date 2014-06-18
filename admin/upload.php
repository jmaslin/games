<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = mysql_real_escape_string($data);
	return $data;
}

$gameName = test_input($_POST['name']);
$gameCreator = test_input($_POST['creator']);
// Jar Upload
$mainPath = test_input($_POST['classPath']);
$gameHeight = test_input($_POST['height']);
$gameWidth = test_input($_POST['width']);




?>