<?php
include("conn.php");
$sql = "UPDATE bus SET 
Bus_operator='$_POST[busoperator]',
Bus_plate_number='$_POST[busplatenumber]', 
Seat_no='$_POST[seatnumber]' 
WHERE Bus_ID='$_POST[busid]';";
//echo $sql;
$result = mysqli_query($con,$sql);
if ($result) {
    mysqli_close($con);
    echo $sql;
header('Location: busOperator_page.php');
}
?>