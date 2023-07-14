<?php
include("conn.php");
$sql="INSERT INTO feedback ( Customer_ID, Feedback )
            VALUES
            ('$_POST[cus_username]','$_POST[feedback]')";
            if (!mysqli_query($con,$sql)) {
                die('Error: ' . mysqli_error($con));
            }
            else{
                echo '<script>alert("Your feedback is submitted!");
                window.location.href = "home(logged_in).php";
                </script>'; 
                mysqli_close($con);
            }
?>