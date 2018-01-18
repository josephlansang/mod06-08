<?php
require_once 'assets/lib/twelve_days.php';
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width,initial-scale=1.0, maxim-scale=1.0">
 	<meta 	http-equiv="X-UA-Compatible" content="IE=Edge">
 	<title><?php echo getTitle(); ?> Lyrics</title>

 	<link rel="stylesheet" type="text/css" href="	">
 </head>
 <body>

<br>

	<p id="demo"></p>

	 <?php 	

	 echo "<script>
	 var lyrics = [";

	 for ($counter = 0; $counter < 12; $counter++) {

		echo '"'.getLyrics($counter) . '"';
		echo ",";
		};

		echo "];";
 		echo '</script>';
	 ?>


<button onclick="myFunction()">Click me</button>

<p id="here"></p>

<script>

var y = 0;
function myFunction() {
	document.getElementById("here").innerHTML += lyrics[y] + "<br>";
    y++;
}

</script>

		<script type="text/javascript"></script>

 </body>
 </html>




