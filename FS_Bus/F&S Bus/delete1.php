<?php
	include("connect.php");
	//$_GET[‘id’] — Get the integer value from id parameter in URL.
	//intval() will returns the integer value of a variable
	$id = intval($_GET['id']);
	$result = mysqli_query($con,"DELETE FROM contacts WHERE id=$id");
	mysqli_close($con); //close database connection
	header('Location: view.php'); //redirect the page to view.php page
?>