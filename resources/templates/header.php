<?php 

session_start();
session_regenerate_id(true);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo SITE_NAME . ' | ' . basename($_SERVER['PHP_SELF'], ".php"); ?></title>
		
		<link href="../css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="#" class="navbar-brand"><?php echo SITE_NAME; ?></a>
					</div>
					<div class="nav navbar-nav navbar-right">
						<li><a href="/index">Home</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/games">Games</a></li>
					</div>
				</div>
			</nav>

		</div>

		<div style="padding-top: 70px;" class="container-fluid">

	<?php if (isset($_SESSION['login'])) { require_once(TEMPLATES_PATH . "/admin.php"); } ?>
