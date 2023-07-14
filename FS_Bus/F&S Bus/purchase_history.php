<body>
<?php
        include("customer_session.php");

?>
    <div class = "ticketData">
        <table class= "busOperatorTable"> 
            <tr>
                <th> <font face="Arial"> Purchased Ticket ID </font> </th>
                <th> <font face="Arial"> Bus ID </font> </th>
                <th> <font face="Arial"> Seat ID </font> </th> 
                <th> <font face="Arial"> Purchased date </font> </th> 
                <th> <font face="Arial"> Action </font> </th> 
                <th> <font face="Arial"> Feedback </font> </th> 
                <th> <font face="Arial"> Availability </font> </th>
            </tr>
            <?php
            include("conn.php");
            $currentdate= date("Y/m/d");
            $currenttime = date("h:i:sa");
            $username = $_SESSION['mySession'];
            $query ="SELECT * FROM purchase_ticket INNER JOIN bus_ticket ON bus_ticket.Ticket_ID=purchase_ticket.Ticket_ID
            INNER JOIN customer_profile ON purchase_ticket.Customer_ID= customer_profile.Customer_ID
            WHERE customer_profile.Username = '$username'" ;
            $result=mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>";
                echo $row['Purchase_ID'];
                echo "</td>";
                echo "<td>";
                echo $row['Bus_ID'];
                echo "</td>";
                echo "<td>";
                echo $row['Seat_number'];
                echo "</td>";
                echo "<td>";
                echo $row['Date'];
                echo "</td>";
                echo "<td><a href=\"customer_ticket_details.php?id="; //edit.php will be created in Lab 8
                echo $row['Purchase_ID'];
                echo "\">View details </a></td>";
                echo "</td>";
                echo "</td>";
                echo "<td><a href=\"customer_write_feedback.php"; //edit.php will be created in Lab 8
                echo "\">Feedback</a></td>";
               
                if ($currentdate < $row['Departure_date']){
                    echo "<td>";
                    echo  "Available";
                    echo "</td>";
                    echo "</tr>";
                }
                elseif ($currentdate == $row['Departure_date']){
                    if ($currenttime <= $row['Departure_time']){
                        echo "<td>";
                        echo  "Available";
                    }
                    elseif ($currenttime > $row['Departure_time']){
                        echo "<td>";
                        echo " Expired";
                    }
                }
                elseif ($currentdate > $row['Departure_date']){
                    echo "<td>";
                    echo " Expired";
                }
                echo "</td>";
                echo "</tr>";
                mysqli_close($con);
            }
            ?>
        </table>  
    </div>
</body>