<?php
include("connect.php");
$sql = "UPDATE bus_reservation SET 
Username ='$_POST[Username]', 
'Password'='$_POST[password]', 
First_name='$_POST[First_name]', 
Last_name='$_POST[Last_name]', 
Email='$_POST[email_address]', 
Tel_no='$_POST[phone_num]'

WHERE id=$_POST[id];";
if (mysqli_query($con, $sql)) {
mysqli_close($con);
header('Location: edit customer.php');
}
?>