<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

?>

<?php if (!isset($_SESSION['login'])) { ?>

<h2>Please enter the admin information.</h2>

<div class="row-fluid col-sm-4">

	<form role="form" method="post" action="/admin/login">

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

<?php } else { ?>

<p class="lead">You are logged in.</p>

<a href="add">Add Game</a>

<?php } ?>
