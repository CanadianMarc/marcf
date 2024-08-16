<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
        <link rel="icon" type="image/x-icon" href="Resources/favicon.png">
	    <link rel="stylesheet" type="text/css" href="Resources/style.css" />
		<link rel="stylesheet" type="text/css" href="Resources/home.css" />
		<title>Marc</title>
	</head>
	<body>
		<header class="home">
			<?php require_once("Resources/nav.php"); ?>
		</header>
		<style>
			body {
				background-image: url("Resources/bgnd.png");
				min-height: 100%;
				display: block;
				background-position: center top;
			}
		</style>
		<section>
			<h1> Hello, I'm Marc! </h1>
			<a href="about.php"><button type="button">About Me</button></a>
			<a href="projects.php"><button type="button">Projects</button></a>
		</section>
    </body>
</html>