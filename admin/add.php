<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php");
?>

<?php if (isset($_SESSION['login']) && $_SESSION['login'] == 1) { ?>

<div class="row">
  <div class="<?php echo TITLE_CLASS; ?>">
    <h2>Add Game</h2>
    <p class="lead">Use this form to upload a new game.</p>
    <hr>
  </div>
</div>

<div class="row">
<div class="col-sm-4 col-sm-offset-4 text-center">

  	<form role="form" method="post" action="upload" enctype="multipart/form-data">
  		<div class="form-group">
  			<label>Game Name</label>
  			<input type="text" class="form-control" name="name" placeholder="Game Name">
  		</div>
  		<div class="form-group">
  			<label>Game Creator(s)</label>
  			<input type="text" class="form-control" name="creator" placeholder="Example: Justin, Justin">
  		</div>
  		<div class="form-group">
  			<label>Year Created</label>
  			<!-- Make this a dropdown eventually. -->
  			<input type="number" class="form-control" name="year" placeholder="Example: 2014">
  		</div>
  		<div class="form-group">
  			<label>Jar Upload</label>
  			<input type="file" name="jar">
  		</div>
  		<div class="form-group">
  			<label>Path To Main Class</label>
  			<p>Include packages in the path.</p>
  			<input type="text" class="form-control" name="classPath" placeholder="Example: package.ClassName.class">
  		</div>
  
  		<!-- Eventually move to same row. -->
  		<div class="form-group">
  			<label>Height</label>
  			<input type="number" class="form-control" name="height">
  			<label>Width</label>
  			<input type="number" class="form-control" name="width">
  		</div>
  
  		<div class="form-group">
  			<button class="btn btn-large btn-primary" name="submit">Upload</button>
  		</div>
  	</form>
  	
  </div>
</div>

<?php } else { ?>

<p>You are not authorized to view this page!</p>

<?php }

require_once(TEMPLATES_PATH . "/footer.php");
?>

<!-- Do form validation before sending -->

<script type="text/javascript">
	
	// Make sure nothing blank, proper format, etc.
	function onSubmit() {


	}

</script>

<!--Ideas:

-Contact field? Contact creator with comments/questions/suggestions. Optional.

 -->


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