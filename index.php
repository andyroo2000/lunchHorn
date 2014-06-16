<!doctype html>
<html lang="en">
<head>
	<?php include ('sounds.php'); // include the arrays of sounds ?>
	<meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no' />
	<meta charset="UTF-8">
	<title>Lunch Horn</title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="/js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="navbar-header">
	<div class="navbar-brand">
		<h1>THE BOSCO BELL</h1>
	</div> <!-- end ofnavbar-brand -->
</div> <!-- end of navbar-header -->

<div class="container">
	<div id="instructions">
		<p>SELECT A SOUND</p>
	</div> <!-- end of instructions -->

	<div class="sounds" id="meeting-bell">
		<p>MEETING BELL</p>
		<?php
			foreach ($meeting_bells as $name => $file_location) {
			echo ('<div class="hidden play" id="' . $name . '">');
			echo $name;
			// echo ('<i class="fa fa-play-circle-o"></i>'); // this is for font-awesome play button class to be added with jQuery
			echo ('<i></i>'); // this is for font-awesome play button class to be added with jQuery
			echo ('</div>');
		}
		?>
	</div> <!-- end of .sounds #meeting-bell -->

	<div class="sounds" id="coffee-triangle">
		<p>COFFEE TRIANGLE</p>
		<?php
			foreach ($coffee_triangles as $name => $file_location) {
			echo ('<div class="hidden play" id="' . $name . '">');
			echo $name;
			echo ('<i></i>'); // this is for font-awesome play button class to be added with jQuery
			echo ('</div>');
		}
		?>
	</div> <!-- end of .sounds #coffee-triangle -->

	<div class="sounds" id="lunch-train">
		<p>LUNCH TRAIN</p>
		<?php
			foreach ($lunch_train_whistles as $name => $file_location) {
			echo ('<div class="hidden play" id="' . $name . '">'); // this sets the CSS id based on the track name
			echo $name; // this is the title of the track for display on the page
			echo ('<i></i>'); // this is for font-awesome play button class to be added with jQuery
			echo ('</div>');
		}
		?>

	</div> <!-- end of .sounds #lunch-train -->

</div> <!-- end of container -->



</body>
</html>
