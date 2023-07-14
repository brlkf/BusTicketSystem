<?php
include("conn.php");

$sql="INSERT INTO customer_profile (Username, password , first_Name, last_Name, email, tel_no ) VALUES 
('$_POST[Username]','$_POST[password]','$_POST[First_name]','$_POST[Last_name]','$_POST[email_address]','$_POST[phone_num]')";

if (!mysqli_query($con,$sql)){
	die('Error: ' . mysqli_error($con));
}
else {
	echo '<script>alert("1 record added!");
	window.location.href= "customer_login.php";
	</script>';
}

mysqli_close($con);
?>