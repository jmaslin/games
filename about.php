<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

?>

<h2><?php echo $ABOUT_TITLE; ?></h2>

<p class="lead">
<?php if (isset($ABOUT_TEXT)) { echo $ABOUT_TEXT; } else { echo "Nothing has been written yet.";} ?>
</p>