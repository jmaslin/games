	</div>
  
	<div class="container">
	<hr>
		<div class="row text-center">
			<footer>
				<small><?php echo FOOTER_TEXT; ?></small>
			</footer>
		</div>
	<hr>
	</div>
	
<?php if (isset($_SESSION['login'])) { require_once(TEMPLATES_PATH . "/admin.php"); } ?>

</body>