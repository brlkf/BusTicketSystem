<?php
	include("conn.php");
	$sql = "UPDATE customer_profile SET 
	Username ='$_POST[Username]', 
	password='$_POST[password]', 
	first_name='$_POST[First_name]', 
	last_name='$_POST[Last_name]', 
	email='$_POST[email_address]', 
	tel_no='$_POST[phone_num]'

	WHERE Customer_ID='$_POST[id]';";

	if (mysqli_query($con, $sql)) {
	mysqli_close($con);
	echo "<script>alert('Record updated!');
	</script>";
	header('Location:home(logged_in).php');
	}
?> 	