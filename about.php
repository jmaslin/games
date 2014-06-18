<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

?>

<h2><?php echo $ABOUT_TITLE; ?></h2>

<p class="lead" id="aboutText">

<?php 

	if (isset($ABOUT_TEXT)) {
		echo $ABOUT_TEXT; 
	} 
	else { 
		echo "Nothing has been written yet."; 
	} 

?>

</p>

<?php if (isset($_SESSION['login'])) { ?>

	<div class="row-fluid">
		<div class="col-sm-6">
			<button class="btn btn-lg btn-warning" id="editAboutBtn" onclick="editAbout()">Edit Section</button>
		</div>
	</div>

	<div class="row-fluid">

		<div class="col-sm-8">
			<form id="editAboutForm" style="display: none;" role="form">

				<div class="form-group">
					<label>New Text</label>
					<textarea class="form-control" id="newAbout" rows="3" placeholder=""></textarea>
				</div>

				<div class="form-group">
					<button class="btn btn-lg btn-success" onclick="save()">Save</button>
					<button class="btn btn-lg btn-warning" onclick="cancel()">Cancel</button>
				</div>

			</form>
		</div>

	</div>

<?php } ?>

<script type="text/javascript">

	function editAbout() {

		$("editAboutBtn").style.display = 'none';
		$("editAboutForm").style.display = '';
		$("newAbout").placeholder = "<?php echo $ABOUT_TEXT; ?>";

	}

	function cancel() {

		$("editAboutBtn").style.display = '';
		$("editAboutForm").style.display = 'none';
	}

</script>