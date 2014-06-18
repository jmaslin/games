<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");

$db = new SQLite3(DATA_PATH . '/games.db');

$db -> exec('CREATE TABLE games (
			 id INTEGER PRIMARY KEY, name STRING, creator STRING, year INT, classLocation STRING, jarLocation STRING, height INT, width INT )');

// Just a test / example. remove eventually
$db -> exec("INSERT INTO games (name, creator, year, classLocation, jarLocation, height, width)
				VALUES ('Ruby Drop', 'Justin', 'com.justinmaslin.RubyDrop/RubyDrop.class', 
					'http://games.justinmaslin.com/games/DropV0.3.jar', 
					'801', '501')");

?>