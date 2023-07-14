<?php
include("conn.php");
 $sql="INSERT INTO bus ( Bus_operator, Bus_plate_number, Seat_no)
            VALUES
            ('$_GET[busoperator]','$_GET[busplatenumber]',
            '$_GET[seatnumber]')";
            if (!mysqli_query($con,$sql)) {
                die('Error: ' . mysqli_error($con));
            }
            else{
                echo '<script>alert("1 record added!");
                window.location.href = "busOperator_page.php";
                </script>'; 
                mysqli_close($con);
            }
?>