	<?php
	$servername = "localhost";
	$username = "myRecipe";
	$password = "12344321";
	$dbname = "db_1";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	?>
	