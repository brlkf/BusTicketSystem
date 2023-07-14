<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UCF-8">
        <meta name="viewport" content=" width=device width, initial-scale=1.0">
        <title> Document </title>
        <link rel = "stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="action.js"></script>
    </head> 
    
    <body>
    <?php
        include("admin_session.php");
    ?>  
        
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
            <div class  =table-session>
             <table class= "login-box" id= "login_box">
                 <tr>
                     <td colspan= 3>
                     <?php include("conn.php");
                      $admin_id = $_SESSION['mySession'];
                        $result=mysqli_query($con,"SELECT * FROM admin WHERE Admin_ID ='$admin_id' ");
                        while($row=mysqli_fetch_array($result)){
                            if ($row['Admin_gender']=="male"){
                                $gender_icon = "boy.svg";
                                $data='<img src="'.$gender_icon.'" width="60" style="float: center">';
                                echo $data;
                            }
                            else if ($row['Admin_gender']=="female") {
                                $gender_icon = "girl.svg";
                                $data= '<img src="'.$gender_icon.'" width="60" style="float: center">';
                                echo $data;
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td> <?php include("conn.php");
                         $admin_id = $_SESSION['mySession'];
                         $sql ="SELECT * FROM admin WHERE Admin_ID='$admin_id'";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            echo $row['Admin_name']; 
                         }?>
                    </td>
                </tr>
                <tr>
                    <td> <?php include("conn.php");
                         $admin_id = $_SESSION['mySession'];
                         $sql ="SELECT * FROM admin WHERE Admin_ID='$admin_id'";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            echo $row['Admin_email']; 
                         }?>
                    </td>
                </tr>    
                <tr>
                    <td colspan =3><a href="logout.php"><button class = "login_button" value="Logout" name="Logout"> Logout </button></a></td>
                </tr>
            </table>
            </div>


    <nav class = "top-navi">
    <button class="openSidebarBtn" onclick="openSideBar()">☰</button>
            <div class="top-navi-heading">
                <h2> F & S Bus </h2>
            </div>
            <ul class = "top-navi-links">
                <li><a class = 'active' href="index.php"><i class="fa fa-home" style="font-size:36px;color:black"></i></a></li>
                <li><i class="fa fa-user" style="font-size:36px;color:black" onclick="showProfile()"></i></a></li>
            </ul>
        </nav>


        <div class  ="side-navi" id= side-navi>
            <header> Admin Panel </header>
            <button class="closeSidebarBtn" onclick="closeSideBar()"> X</button>

             <ul class = "side-navi-links">
                <li>
                    <a class = 'active' href="index.php">
                    <div class = "menu-icon"><i class="fa fa-home" style="font-size:32px;color:black"></i></div>
                    <div class ="menu-text">Dashboard</div>
                    </a>  
                </li>
                <li>
                    <a href="busOperator_page.php">
                    <div class = "menu-icon"><i class="fa fa-bus" style="font-size:32px;color:black"></i></div>
                    <div class ="menu-text">Bus</div>
                    </a>
                </li>
                <li>
                    <a  href="customerData_page.php">
                    <div class = "menu-icon"><i class="fa fa-user" style="font-size:32px;color:black"></i></div>
                    <div class ="menu-text">Customer</div>
                    </a>
                </li>
                <li>
                    <a href="ticketData_page.php">
                    <div class = "menu-icon"><i class="fa fa-ticket" style="font-size:32px;color:black"></i></div>
                    <div class ="menu-text">Ticket</div>
                    </a>
                </li>
                <li>
                    <a href="Customer_feedback_page.php">
                    <div class = "menu-icon"><i class="fa fa-edit" style="font-size:32px;color:black"></i></div>
                    <div class ="menu-text">Feedback</div>
                    </a>
                </li>
            </ul>
        </div>
        
        <div id = "content-text">
        <div class = section>
        <div class = "welcome-content" >
                    <div class = "welcome-content-section">
                        <h2>Welcome Admin</h2>
                    </div>
                    <div class = "welcome-content-section">
                        <h3>Our Mission:</h3><br><br>
                        <h4>Ensuring customers book tickets with affortable cost</h4>
                    </div>
                    <div class = "welcome-content-section">
                        <h3>Our Vision:</h3><br><br>
                        <h4>Becoming a reliable and well-known bus-reservation system for Malaysian</h4>
                    </div>
        </div>
        </div>

        <div class = "section">
            <div class = company-basic-info>
            <table class= "comIntroTable" id = "comIntroTable" border="solid"> 
            <tr>
                <th> <img src="images/bus.png" alt="buspic" width="50px" height="50px"> </th> 
                <th> <img src="images/route.png" alt="routepic" width="50px" height="50px"> </th> 
                <th> <img src="images/destination.png" alt="destinationpic" width="50px" height="50px"> </th> 
            </tr>
            <tr>
                <td>3</td>
                <td> 25++</td>
                <td> 12</td>
            </tr>
            <tr>
                <td> Bus Operators </td>
                <td>Routes</td>
                <td>Destination</td>
            </tr>
            </div>
        </div>


        </div>


    </body>
</html>
            


