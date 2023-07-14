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
        

    <nav class = "top-navi">
    <button class="openSidebarBtn" onclick="openSideBar()">☰</button>
            <div class="top-navi-heading">
                <h2> F & S Bus </h2>
            </div>
            <ul class = "top-navi-links">
                <li><a href="index.php"><i class="fa fa-home" style="font-size:36px;color:black"></i></a></li>
                <li><a href="index.php"><i class="fa fa-user" style="font-size:36px;color:black"></i></a></li>
            </ul>
        </nav>


        <div class  ="side-navi" id= side-navi>
            <header> Admin Panel </header>
            <button class="closeSidebarBtn" onclick="closeSideBar()"> X</button>

             <ul class = "side-navi-links">
                <li>
                    <a href="index.php">
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
                    <a class = 'active' href="ticketData_page.php">
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
        <div id = "ticketDatabase">
        <div class = "ticketPageTop">
                <header> Ticket </header>
                <form method  ="post">
                    <button class="openButton" name= newRecordLine id="openButton"type="submit">New record</button>
                </form>
        </div>
        
        <div class  = "searchTicket">   
            <table class= ticketSearchBar id= "ticketSearchBar">
            <form method="post">
            <tr>
                <th> Ticket ID</th>
                <th> Bus Operator </th>
                <th> Plate Number </th>
                <th> Departure Date </th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="ticket-id">
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
                <td>
                <input type="date" name="departure-date">
                </td>
                <td><button class="searchTicketBtn" name="searchBtn" type="submit">Search</button></td>
                <td><button class="resetBtn" name="ResetBtn" type="submit">Reset</button></td>
            <tr>
        </form>
        </table>
        </div>


        <div class = "ticketData">
        <?php include("conn.php");
            $result = mysqli_query($con,"SELECT * FROM bus_ticket");
        ?>
        <table class= "ticketTable" > 
            <tr>
                <th> <font face="Arial">Ticket ID</font> </th> 
                <th> <font face="Arial">Bus operator</font> </th> 
                <th> <font face="Arial">Plate number</font> </th> 
                <th> <font face="Arial">Departure point</font> </th> 
                <th> <font face="Arial">Arrival point</font> </th> 
                <th> <font face="Arial">Departure date</font> </th> 
                <th> <font face="Arial">Departure time</font> </th> 
                <th> <font face="Arial">Arrival time</font> </th> 
                <th> <font face="Arial">Duration</font> </th> 
                <th> <font face="Arial">Pricing</font> </th> 
                <th> <font face="Arial">Seat available</font> </th> 
                <th colspan="2"> <font face="Arial">Action</font> </th>  
                
            </tr>
            <?php
            include("conn.php");

            $ticket_id = "";
            $bus_operator = "";
            $plate_number = "";
            $departure_date = "";

            if(isset($_POST['searchBtn'])){
	            $ticket_id = $_POST['ticket-id'];
                $bus_operator = $_POST['bus-operator'];
                $plate_number  =$_POST['plate-number'];
                $departure_date  =$_POST['departure-date'];

                $query="SELECT bus_ticket.Ticket_ID,bus.Bus_operator, bus.Bus_plate_number, bus_ticket.Departure_point,bus_ticket.Arrival_point,bus_ticket.Departure_date,bus_ticket.Departure_time,bus_ticket.Arrival_time,bus_ticket.Duration,bus_ticket.Pricing,bus_ticket.Seat_available
                FROM bus_ticket
                INNER JOIN bus
                ON bus_ticket.Bus_ID = bus.Bus_ID WHERE Ticket_ID LIKE '$ticket_id' OR Bus_operator LIKE '$bus_operator'OR
                Bus_plate_number LIKE '$plate_number' OR Departure_date LIKE '$departure_date'";
                $search_result = filterTable($query);

            }
            else{
                $query ="SELECT bus_ticket.Ticket_ID,bus.Bus_operator, bus.Bus_plate_number, bus_ticket.Departure_point,bus_ticket.Arrival_point,bus_ticket.Departure_date,bus_ticket.Departure_time,bus_ticket.Arrival_time,bus_ticket.Duration,bus_ticket.Pricing,bus_ticket.Seat_available
                FROM bus_ticket
                INNER JOIN bus
                ON bus_ticket.Bus_ID = bus.Bus_ID" ;
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
                    echo $row['Ticket_ID'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Bus_operator'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Bus_plate_number'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Departure_point'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Arrival_point'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Departure_date'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Departure_time'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Arrival_time'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Duration'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Pricing'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['Seat_available'];
                    echo "</td>";
                    echo "<td><a href=\"editTicket.php?id="; //edit.php will be created in Lab 8
                    echo $row['Ticket_ID'];
                    echo "\">Edit</a></td>";
                    echo "<td><a href=\"delete.php?id="; //hyperlink to delete.php page with ‘id’ parameter
                    echo $row['Ticket_ID'];
                    echo "\" onClick=\"return confirm('Delete "; //JavaScript to confirm the deletion of the record
                    echo $row['Ticket_ID'];
                    echo " details?');\">Delete</a></button></td></form></tr>"; }
                    mysqli_close($con); //to close the database connection
        ?>
        <?php
        if(isset($_POST['newRecordLine'])){
            echo "<tr id ='newLine'>";
            echo"<form action = 'insertTicket.php' method='GET' >";
            echo "<td>";
            echo "-";
            echo"</td>";
            echo "<td>";
            echo "<Select name='busoperator' placeholder='To' style='width:80px;height:30px;border:none;'>
                    <option value='Bus_operator'></option>
                    <option value='LA Express'>LA Express</option>
                    <option value='Starmart'>Starmart</option>
                    <option value='KKKL Express'>KKKL Express</option>
                </Select>";
            echo"</td>";
            echo "<td>";
            echo "<Select name='busplatenumber' placeholder='To' style='width:80px;height:30px;border:none;'>
                    <option value='Bus_operator'></option>
                    <option value='ABC 3344'>ABC 3344</option>
                    <option value='ABC 1234'>ABC 1234</option>
                    <option value='ABC 4567'>ABC 4567</option>
                </Select>";
            echo"</td>";
            echo "<td>";
            echo "<Select name='departurepoint' placeholder='To' style='width:80px;height:30px;border:none;'>
                    <option value='Departure_point'></option>
                    <option value='Kuala Lumpur'>Kuala Lumpur</option>
                    <option value='Perlis'>Perlis</option>
                    <option value='Kedah'>Kedah</option>
                    <option value='Kelantan'>Kelantan</option>
                    <option value='Terrenganu'>Terrenganu</option>
                    <option value='Melaka'>Melaka</option>
                    <option value='Johor'>Johor</option>
                    <option value='Perak'>Perak</option>
                    <option value='Penang'>Penang</option>
                    <option value='Negeri Sembilan'>Negeri Sembilan</option>
                    <option value='Selangor'>Selangor</option>
                    <option value='Pahang'>Pahang</option>
                </Select>";
            echo"</td>";
            echo "<td>";
            echo "<Select name='arrivalpoint' placeholder='To' style='width:80px;height:30px;border:none;'>
                    <option value='Departure_point'></option>
                    <option value='Kuala Lumpur'>Kuala Lumpur</option>
                    <option value='Perlis'>Perlis</option>
                    <option value='Kedah'>Kedah</option>
                    <option value='Kelantan'>Kelantan</option>
                    <option value='Terrenganu'>Terrenganu</option>
                    <option value='Melaka'>Melaka</option>
                    <option value='Johor'>Johor</option>
                    <option value='Perak'>Perak</option>
                    <option value='Penang'>Penang</option>
                    <option value='Negeri Sembilan'>Negeri Sembilan</option>
                    <option value='Selangor'>Selangor</option>
                    <option value='Pahang'>Pahang</option>
                </Select>";
            echo"</td>";
            echo "<td>";
            echo "<input type='date' name='departuredate' id= 'departuredate' style='width:80px;height:30px;border:none;'>";
            echo"</td>";
            echo "<td>";
            echo "<input type='time' name='departuretime' id= 'departuretime'style='width:80px;height:30px;border:none;'>";
            echo"</td>";
            echo "<td>";
            echo "<input type='time' name='arrivaltime' id= 'arrivaltime'style='width:80px;height:30px;border:none;'>";
            echo"</td>";
            echo "<td>";
            echo "<input type='number' name='duration' id= 'duration'style='width:80px;height:30px;border:none;'>";
            echo"</td>";
            echo "<td>";
            echo "<input type='number' name='pricing' id= 'pricing'style='width:80px;height:30px;border:none;'>";
            echo"</td>";
            echo "<td>";
            echo "<input type='number' name='seatavailable' id= 'seatavailable'style='width:80px;height:30px;border:none;'>";
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
         <div class= editTable id="editTable">
         <?php
            include("conn.php");
            $id =$_GET['id'];
            $result =mysqli_query($con,"SELECT bus_ticket.Ticket_ID,bus.Bus_operator, bus.Bus_plate_number, bus_ticket.Departure_point,bus_ticket.Arrival_point,bus_ticket.Departure_date,bus_ticket.Departure_time,bus_ticket.Arrival_time,bus_ticket.Duration,bus_ticket.Pricing,bus_ticket.Seat_available
            FROM bus_ticket
            INNER JOIN bus
            ON bus_ticket.Bus_ID = bus.Bus_ID WHERE Ticket_ID='$id'");
            while($row = mysqli_fetch_array($result))
            {
            ?>
            <table class = "edit-table" id="edit_table">
                <form action="updateTicket.php" method="post">
                <tr>
    
                    <th> Bus Operator </th>
                    <th> Bus Plate Number </th>
                    <th> Departure Point </th>
                    <th> Arrival Point </th>
                    <th> Departure Date </th>
                    <th> Departure Time </th>
                    <th> Arrival Time </th>
                    <th> Duration </th>
                    <th> Pricing </th>
                    <th> Seat Available </th>
                    <th colspan="2"> Action </th>
                    </tr>
                    <tr>
                    <input type="hidden" name="ticketid" id= "ticketid" value="<?php echo $row['Ticket_ID'] ?>">
                     <td> <input type="text" name="busoperator" id= "busoperator" value="<?php echo $row['Bus_operator'] ?>"> </td>
                     <td> <input type="text" name="busplatenumber" id= "busplatenumber"></td>
                     <td><Select name='To' placeholder='To' style='width:80px;height:30px;border:none;' value="<?php echo $row['Departure_point']?>">
                    <option value='Departure_point'><?php echo $row['Departure_point']?></option>
                    <option value='Kuala Lumpur'>Kuala Lumpur</option>
                    <option value='Perlis'>Perlis</option>
                    <option value='Kedah'>Kedah</option>
                    <option value='Kelantan'>Kelantan</option>
                    <option value='Terrenganu'>Terrenganu</option>
                    <option value='Melaka'>Melaka</option>
                    <option value='Johor'>Johor</option>
                    <option value='Perak'>Perak</option>
                    <option value='Penang'>Penang</option>
                    <option value='Negeri Sembilan'>Negeri Sembilan</option>
                    <option value='Selangor'>Selangor</option>
                    <option value='Pahang'>Pahang</option>
                </Select>
                </td>
                <td>
                <Select name='To' placeholder='To' style='width:80px;height:30px;border:none;'>
                    <option value='Departure_point'><?php echo $row['Arrival_point']?></option>
                    <option value='Kuala Lumpur'>Kuala Lumpur</option>
                    <option value='Perlis'>Perlis</option>
                    <option value='Kedah'>Kedah</option>
                    <option value='Kelantan'>Kelantan</option>
                    <option value='Terrenganu'>Terrenganu</option>
                    <option value='Melaka'>Melaka</option>
                    <option value='Johor'>Johor</option>
                    <option value='Perak'>Perak</option>
                    <option value='Penang'>Penang</option>
                    <option value='Negeri Sembilan'>Negeri Sembilan</option>
                    <option value='Selangor'>Selangor</option>
                    <option value='Pahang'>Pahang</option>
                </Select>
            </td>
                     <td> <input type="date" name="departuredate" id= "departuredate" value="<?php echo $row['Departure_date'] ?>"> </td>
                     <td> <input type="time" name="departuretime" id= "departuretime" value="<?php echo $row['Departure_time'] ?>"> </td>
                     <td> <input type="time" name="arrivaltime" id= "arrivaltime" value="<?php echo $row['Arrival_time'] ?>"></td>
                     <td> <input type="number" name="duration" id= "duration" value="<?php echo $row['Duration'] ?>"> </td>
                     <td> <input type="number" name="pricing" id= "pricing" value="<?php echo $row['Pricing'] ?>"> </td>
                     <td> <input type="number" name="seatavailable" id= "seatavailable" value="<?php echo $row['Seat_available'] ?>"> </td>
                     <td><input type='submit' name="Edit" ></td>
                    <td> <a href="ticketData_page.php"> Cancel </a></td>
                     </tr>     
                </form> 
            </table>
                
        
            <?php
            }
            mysqli_close($con);
            ?>   
        </div>
        </div>
    </div>
    </body>

</html>
