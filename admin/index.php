<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

?>

<?php

if (sizeof($_POST == 3) && isset($_POST['user']) && isset($_POST['password'])) {

	if ($_POST['user'] == "" || $_POST['password'] == "") {
		echo "<p>Please enter a username and a password.</p>";
	}

	if ($_POST['user'] == $USERNAME && md5($_POST['password']) == $PASSWORD) {
		echo "Login.";
		$_SESSION['login'] = True;
	}
	else {
		echo "Invalid login.";
	}
}

if (!isset($_SESSION['login'])) { ?>

<h2>Please enter the admin information.</h2>

<div class="row-fluid col-sm-4">

	<form role="form" method="post" action="/admin/index">

		<div class="form-group">
			<label>User</label>
			<input type="text" class="form-control" name="user" placeholder="Username">
		</div>

		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>

		<div class="form-group">
			<button type="submit" name="submit" value="Submit" id="submit" class="btn btn-block btn-default btn-lg btn-primary">Login</button>
		</div>

	</form>

</div>

<?php } else if (isset($_SESSION['login'])) { ?>

<p class="lead">You are logged in.</p>

<a href="/admin/logout">Logout</a>
<a href="add">Add Game</a>

<?php } else  {

echo "process data";
	} ?>
