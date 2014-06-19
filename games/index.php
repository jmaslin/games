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
			<?php 

			$year = 0;

			$db = new SQLite3(DATA_PATH . '/games.db');
			$results = $db -> query("SELECT * FROM games ORDER BY year DESC");

			while ($row = $results -> fetchArray()) {
				if ($row['year'] != $year) {
					$year = $row['year'];
					printf('<option disabled value=""> <strong>' . $year . '</strong></option>');
				}
				printf('<option value = "' . $row['id'] . '">' . $row['name'] . '</option>' . "\n");
			}

			?>
		</select>

		<!-- Instead of this maybe have pages of games where users can upload an image (or use a stock one) and have a brief description.
				Games would be clickable, use same loading principles. 
			 Also, could display stats (most popular games, clicks, etc) 
		-->
		
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



	function update() {

	}



</script>