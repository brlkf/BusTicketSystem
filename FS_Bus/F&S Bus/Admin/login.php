<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UCF-8">
        <meta name="viewport" content=" width=device width, initial-scale=1.0">
        <title> Admin Login </title>
        <link rel = "stylesheet" href="style.css">
        <link rel = "stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="action.js"></script>   
    </head>
    <body>
    <div class = "login-info">
    <form method="POST" >
    <div class = info-section>
        <h3> Admin Login </h3>
    </div>
    <div class= "info-section">
        <table class = "add-info-table">
            <tr >
                <td> Admin ID </td>
                <td> : </td>
                <td> <input type="text" name="adminid" id= "adminid" required > </td>
            </tr> 
            <tr >
                <td> Password</td>
                <td> : </td>
                <td> <input type="password" name="adminpassword" id= "adminpassword" required> </td>
            </tr>
        </table>
    </div>
    <div class = "info-section">
        <input type="submit" name="admin" value= " LOGIN " id= "adminlogin">
    </div>
    </form>
    </div>
    </body>
    <?php
        include("conn.php");
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from Form
        $adminid=mysqli_real_escape_string($con,$_POST['adminid']);
        $password=mysqli_real_escape_string($con,$_POST['adminpassword']);
        
        $sql="SELECT id FROM admin WHERE Admin_ID ='$adminid' and 
        Admin_password ='$password'";
        if ($result=mysqli_query($con,$sql)){
            // Return the number of rows in result set
            $rowcount=mysqli_num_rows($result);
            }
            if($rowcount==1) {
                session_start();
                $_SESSION['mySession']=$adminid;
                header("location:index.php");
            }
            else {
                echo '<script>alert("Wrong username or password. Please try again!");
                </script>'; 
            }
            mysqli_close($con);
            }
    ?>
              