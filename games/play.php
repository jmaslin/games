<?php 

$gameId = $_POST['gameId'];

echo $gameId;

if ($gameId == 1) {

	$className = "com.justinmaslin.RubyDrop/RubyDrop.class";
	$archiveName = "http://games.justinmaslin.com/games/DropV0.3.jar";
	$gameHeight = "801";
	$gameWidth = "501";	
}

?>

<object id="obj" style="display; none;" type="application/x-java-applet" width="<?php echo $gameWidth; ?>" height="<?php echo $gameHeight; ?>">
	<param id="class" name="code" value="<?php echo $className; ?>"/>
	<param id="archive" name="archive" value="<?php echo $archiveName; ?>"/>
	Applet failed!
</object>
