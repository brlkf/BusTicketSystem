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
                    <a class = 'active' href="busOperator_page.php">
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
                    <a href="Customer_feedback_page.php">
                    <div class = "menu-icon"><i class="fa fa-edit" style="font-size:32px;color:black"></i></div>
                    <div class ="menu-text">Feedback</div>
                    </a>
                </li>
            </ul>
        </div>

        
        <div class = "content-text" id ="content-text">
            <div class = "ticketDatabase" id = "ticketDatabase" >
                <div class = "ticketPageTop">
                    <header> Bus </header>
                    <form method  ="post">
                        <button class="openButton" name= newRecordLine id="openButton"type="submit">New record</button>
                    </form>
                </div>
        
                <div class  = "searchTicket">   
                    <table class= ticketSearchBar id= "ticketSearchBar">
                    <form method="post">
                    <tr>
                        <th> Bus ID </th>
                        <th> Bus Operator</th>
                        <th> Plate Number </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="bus-id">
                        </td>
                        <td>
                            <select name="bus-operator" >
                                <option value="Please select" name="Please select">Please select</option>
                                <option value="StarMart" name="StarMart">StarMart</option>
                                <option value="LA Express" name="LA Express">LA Express</option>
                                <option value="Bus Operator C" name="Bus Operator C">Bus Operator C</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="plate-number">
                        </td>
                        <td><button class="searchTicketBtn" name="searchBtn" type="submit">Search</button></td>
                        <td><button class="resetBtn" name="ResetBtn" type="submit">Reset</button></td>
                    <tr>
                </form>
                </table>
                </div>


                <div class = "ticketData">
                <?php include("conn.php");
                    $result = mysqli_query($con,"SELECT * FROM bus");
                ?>
                <table class= "busOperatorTable"> 
                    <tr>
                        <th> <font face="Arial">Bus ID</font> </th>
                        <th> <font face="Arial">Bus operator</font> </th> 
                        <th> <font face="Arial">Plate number</font> </th> 
                        <th> <font face="Arial">Seat number</font> </th> 
                        <th colspan="2"> <font face="Arial">Action</font> </th>  
                        
                    </tr>
                    <?php
                    include("conn.php");
                    $bus_id = "";
                    $bus_operator = "";
                    $plate_number = "";

                    if(isset($_POST['searchBtn'])){
                        $bus_id = $_POST['bus-id'];
                        $bus_operator = $_POST['bus-operator'];
                        $plate_number  =$_POST['plate-number'];

                        $query="SELECT * FROM bus WHERE Bus_ID LIKE '$bus_id'OR Bus_operator LIKE '$bus_operator'OR
                        Bus_plate_number LIKE '$plate_number'";
                        $search_result = filterTable($query);

                    }
                    else{
                        $query ="SELECT * FROM bus" ;
                        $search_result = filterTable($query);
                    }

                    function filterTable($query)
                    {
                        include("conn.php");
                        $filter_Result=mysqli_query($con,$query);
                        return $filter_Result;
                    }

                    ?>
                    <?php
                        while($row = mysqli_fetch_array($search_result)){
                            echo "<tr>";
                            echo "<form method ='POST'>";
                            echo "<td>";
                            echo $row['Bus_ID'];
                            echo "</td>";
                            echo "<td>";
                            echo $row['Bus_operator'];
                            echo "</td>";
                            echo "<td>";
                            echo $row['Bus_plate_number'];
                            echo "</td>";
                            echo "<td>";
                            echo $row['Seat_no'];
                            echo "</td>";
                            echo "<td><a href=\"editBus.php?id="; //edit.php will be created in Lab 8
                            echo $row['Bus_ID'];
                            echo "\">Edit</a></td>";
                            echo "<td><a href=\"deleteBus.php?id="; //hyperlink to delete.php page with ‘id’ parameter
                            echo $row['Bus_ID'];
                            echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
                            echo $row['Bus_ID'];
                            echo " details?');\">Delete</a></button></td></form></tr>"; }
                            mysqli_close($con); //to close the database connection
                            ?>
                            <?php
                            if(isset($_POST['newRecordLine'])){
                                echo "<tr id ='newLine'>";
                                echo"<form action = 'insertBus.php' method='GET' >";
                                echo "<td>";
                                echo "-";
                                echo"</td>";
                                echo "<td>";
                                echo "<input type='text' name='busoperator'id= 'busoperator'style='width:80px;height:30px;border:none;'>";
                                echo"</td>";
                                echo "<td>";
                                echo "<input type='text' name='busplatenumber' id= 'busplatenumber' style='width:80px;height:30px;border:none;'>";
                                echo"</td>";
                                echo "<td>";
                                echo "<input type='number' name='seatnumber' id= 'seatnumber'style='width:80px;height:30px;border:none;'>";
                                echo"</td>";
                                echo "<td>";
                                echo "<input type='submit' value='save' name='savenew' style='width:80px;height:30px;border:none;background-color:#FFC55C;'>";
                                echo"</td>";
                                echo "<td>";
                                echo "<input type='button' value='Cancel' 'name='cancelnew'onclick='cancelnew()'style='width:80px;height:30px;border:none;background-color:#FFC55C;'>";
                                echo"</td>";
                                echo"</form>";
                                echo"</tr>";
                                echo"</table>";
                            }
                            ?>


                            </table>  
                </div>
        
        </div>
    </div>

    </body>
</html>
            


