<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

?>

<div class="row">

	<div class="col-sm-4 col-sm-offset-4 text-center">
		<h1>Home
			<small>Welcome.</small>
		</h1>
		<hr>
	</div>

</div>


<div class="row">

	<div class="col-sm-6 col-sm-offset-3 text-center">
		<p class="lead">
			<?php include 'text.php'; ?>
		</p>

		<blockquote>
		<p>This website is the best thing since sliced bread.</p>
		<footer>Everyone in the world.</footer>
		</blockquote>
	</div>

</div>

<?php require_once(TEMPLATES_PATH . "/footer.php"); ?>