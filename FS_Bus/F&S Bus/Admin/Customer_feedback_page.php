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
                <li><a href="index.php"><i class="fa fa-home" style="font-size:36px;color:black"></i></a></li>
                <li><i class="fa fa-user" style="font-size:36px;color:black" onclick="showProfile()"></i></li>
            </ul>
        </nav>


        <div class  ="side-navi" id= side-navi>
            <header> Admin Panel </header>
            <button class="closeSidebarBtn" onclick="closeSideBar()"> X</button>

             <ul class = "side-navi-links">
                <li>
                    <a  href="index.php">
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
                    <a href="customerData_page.php">
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
                    <a class = 'active' href="Customer_feedback_page.php">
                    <div class = "menu-icon"><i class="fa fa-edit" style="font-size:32px;color:black"></i></div>
                    <div class ="menu-text">Feedback</div>
                    </a>
                </li>
            </ul>
        </div>

        
    <div class = "content-text" id ="content-text">
        <div id = "ticketDatabase" class = "ticketDatabase">
            <div class = "ticketPageTop">
                <header>Customer Feedback</header>
            </div>

        <?php
        include("conn.php");
        $result = mysqli_query($con,"SELECT * FROM feedback");
    ?>


            <div class="ticketData">
                <table class="feedbackTable">
                    <tr>
                        <th>Feedback ID</th>
                        <th>Customer ID</th>
                        <th>Feedbacks</th>
                        <th>Delete</th>
                    </tr>
                <?php
                    while($row=mysqli_fetch_array($result))
                {   echo"<tr>";
                    echo"<td>";
                    echo "Cus".$row['Feedback_ID'];
                    echo"</td>";

                    echo"<td>";
                    echo$row['Customer_ID'];
                    echo"</td>";
                    
                    echo"<td>";
                    echo$row['Feedback'];
                    echo"</td>";

                    echo "<td><a href=\"deleteFeedback.php?id="; //hyperlink to delete.php page with ‘id’ parameter
                    echo $row['Feedback_ID'];
                    echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
                    echo $row['Feedback_ID'];
                    echo " details?');\">Delete</a></button></td></form></tr>";

                    echo"</tr>";
                    
                }
                    mysqli_close($con)
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>