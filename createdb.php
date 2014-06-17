<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");

$db = new SQLite3(DATA_PATH . '/games.db');

$db -> exec('CREATE TABLE games (
			id INT, name STRING, creator STRING, classLocation STRING, jarLocation STRING, height INT, width INT )');

$db -> exec("INSERT INTO games (id, name, creator, classLocation, jarLocation, height, width)
				VALUES ('1', 'Ruby Drop', 'Justin', 'com.justinmaslin.RubyDrop/RubyDrop.class', 
					'http://games.justinmaslin.com/games/DropV0.3.jar', 
					'801', '501')");

?>