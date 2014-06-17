<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php"); 

?>

<div class="row-fluid">
	<h2>Games</h2>	
	<p class="lead">Please choose a game.</p>
</div>

<hr>

<div class="row-fluid col-sm-4">
	<form class="form" id="chooseGame" method="post" action="play">
		<select class="form-control selectpicker" name="gameId">
			<option value="1">Ruby Drop</option>
		</select>

		<br>	
		<button type="submit" name="submit_form" value="Submit" id="submit_form" class="btn btn-block btn-default btn-lg btn-primary">Play</button>

		<!-- <button class="btn btn-large" onclick="update()">Go</button> -->
	</form>
</div>

<!-- <object id="obj" style="display; none;" type="application/x-java-applet" width="501" height="801">
	<param id="class" name="code" value=""/>
	<param id="archive" name="archive" value=""/>
	Applet failed!
</object>
 -->


<script type="text/javascript">

	// Shorthand for getting elements
	function $(input) {

		output = document.getElementById(input);
		return output;
	}

	function update() {

		// Test vars
		className = "com.justinmaslin.RubyDrop/RubyDrop.class";
		archiveName = "http://games.justinmaslin.com/games/DropV0.3.jar";

		$("obj").style.display = '';

		$("class").value = className;
		$("archive").value = archiveName;


	}



</script>