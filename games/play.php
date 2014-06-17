<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

$gameId = $_POST['gameId'];

if ($gameId == 1) {

	$className = "com.justinmaslin.RubyDrop/RubyDrop.class";
	$archiveName = "http://games.justinmaslin.com/games/DropV0.3.jar";
	$gameHeight = "801";
	$gameWidth = "501";	
	$gameName = "Ruby Drop";
	$gameCreator = "Justin";
}

?>

<h2><?php echo $gameName; ?></h2>
<h3>By <?php echo $gameCreator; ?></h3>

<a href="/games">Go Back</a>

<?php

$db = new SQLite3(DATA_PATH . '/games.db');

$results = $db->query("SELECT * FROM games");

print_r($results -> fetchArray()); 


?>


<!-- 
<object id="obj" style="display; none;" type="application/x-java-applet" width="<?php echo $gameWidth; ?>" height="<?php echo $gameHeight; ?>">
	<param id="class" name="code" value="<?php echo $className; ?>"/>
	<param id="archive" name="archive" value="<?php echo $archiveName; ?>"/>
	Applet failed!
</object>
 -->