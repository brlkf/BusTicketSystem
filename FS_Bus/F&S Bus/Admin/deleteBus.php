<?php
include("conn.php");
//$_GET[‘id’] — Get the integer value from id parameter in URL. 
//intval() will returns the integer value of a variable
$id =$_GET['id'];
$sql ="DELETE FROM bus WHERE Bus_ID=$id";
//echo $sql;

$result = mysqli_query($con,$sql);
mysqli_close($con); //close database connection
header('Location: busOperator_page.php'); //redirect the page to view.php page

?>