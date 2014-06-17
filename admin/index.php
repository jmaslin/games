<!-- Add new games. 

New Game Form: 

- Jar name
- Path to main class
- Width
- Height
- Upload (Negate need for jar name?)
- Creator(s) Name (Have ability for more than one collaborator.
Have a way for people to update own games? Or just have admin control.
-->

<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

?>

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
