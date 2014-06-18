<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

$gameId = $_POST['gameId'];

$db = new SQLite3(DATA_PATH . '/games.db');

$results = $db -> query("SELECT * FROM games WHERE id = " . $gameId);

$gameData = $results -> fetchArray();

// Add on path to jar folder
$gameData['jarLocation'] = JAR_DIR . '/' . $gameData['jarLocation'];

?>

<h2><?php echo $gameData['name']; ?></h2>
<h3>By <?php echo $gameData['creator']; ?></h3>

<a href="/games">Go Back</a>
<br>

<object id="obj" style="display; none;" type="application/x-java-applet" width="<?php echo $gameData['width']; ?>" height="<?php echo $gameData['height']; ?>">
	<param id="class" name="code" value="<?php echo $gameData['classLocation']; ?>"/>
	<param id="archive" name="archive" value="<?php echo $gameData['jarLocation']; ?>"/>
	Applet failed!
</object>
