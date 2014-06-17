<!-- Make sure logged in and all eventually -->

<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 
?>

<h2>Add Game</h2>
<p class="lead">Use this form to upload a new game.</p>

<div class="row-fluid col-sm-6">
	<form role="form">
		<div class="form-group">
			<label>Game Name</label>
			<input type="text" class="form-control" name="name" placeholder="Game Name">
		</div>
		<div class="form-group">
			<label>Game Creator</label>
			<input type="text" class="form-control" name="creator" placeholder="Game Coder(s)">
		</div>
		<div class="form-group">
			<label>Jar Upload</label>
			<input type="file" name="jar">
		</div>
		<div class="form-group">
			<label>Path To Main Class</label>
			<p>Include packages in the path.</p>
			<input type="text" class="form-control" name="classPath" placeholder="ClassName.class">
		</div>

		<!-- Eventually move to same row. -->
		<div class="form-group">
			<label>Height</label>
			<input type="number" class="form-control" name="height">
			<label>Width</label>
			<input type="number" class="form-control" name="width">
		</div>

		<div class="form-group">
			<button class="btn btn-large btn-primary" name="submit">Submit</button>
		</div>

	</form>

</div>

<!-- Add new games. 

New Game Form: 

- Jar name
- Path to main class
- Width
- Height
- Upload (Negate need for jar name?)
- Creator(s) Name (Have ability for more than one collaborator.
Have a way for people to update own games? Or just have admin control.
