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

	<button class="btn btn-lg btn-warning" onclick="editAbout()">Edit Section</button>

<?php } ?>

<script type="text/javascript">

	function editAbout() {

		$("aboutText").innerHTML = "";
		$("aboutText").style.display = 'none';
		alert("test");
	}

</script>