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

// Test input and save into local vars
$gameName = test_input($_POST['name']);
$gameCreator = test_input($_POST['creator']);
$gameYear = test_input($_POST['year']);

// Make sure there is actually a file
if (!empty($_FILES["jar"])) {

	// Verify we are uploading a jar
	if ($_FILES["jar"]["type"] == "application/x-java-archive") {

		$jar = $_FILES["jar"];

		if ($jar["error"] != UPLOAD_ERR_OK) {
			echo "<p>Error wih jar upload.</p>";
			exit;
		}

		// Make sure file name is safe
		$name = test_input($jar["name"]);

		$move = move_uploaded_file($jar["tmp_name"], JAR_DIR . '/' . $jar["name"]);

		if ($move) {
			 echo "The file ". $jar['name']. " has been uploaded"; 
		}
		else {
			echo "Problem uploading " . basename($jar['name']);
		}
		// if (!$move) {
		// 	echo "<p>Error on move.</p>";
		// 	exit;
		// }

		// Set proper perms
		// chmod(JAR_DIR . $name, 0644);
	}

	else {
		echo "<p>Invalid file type.</p>";
		exit;
	}

}

$jarName = $name;
$mainPath = test_input($_POST['classPath']);
$gameHeight = test_input($_POST['height']);
$gameWidth = test_input($_POST['width']);





?>