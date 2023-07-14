<!DOCTYPE html>
<html>
<head>
    <title>History</title>

    <style>
        .table{
        margin-top:150px;
        border-collapse: collapse;
        font-size: 0.9em;
        font-family: sans-serif;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-radius: 5px 5px 0 0;
        overflow: hidden; 
        align: center;
        width: 80%;
    }
    
    .table thead tr{
    background-color: yellow;
    
    text-align: left;
    }

    .table th, td{
        padding : 12px 15px;
    }

    .table tbody tr{
        border-bottom: 1px solid #dddddd;
    }
    .table tbody tr:nth-of-type(odd){
    background-color: white; 
    }
    .table tbody tr:nth-of-type(even){
    background-color: #f3f3f3; 
    }

    .table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
    }

    .table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
    }

    </style>
</head>

<body>
<?php
    include("customer_session.php");

?>

<?php
    include("header(logged_in).php");

?>
    
    <table  class = table align = center>
        
        <thead>
          <tr>
            <th>Puchase ID</th>
            <th>Bus ID</th>
            <th>Seat Number</th>
            <th>Date</th>
            <th>Time</th>
            <th>Feedback</th>
            <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            <?php
             include("conn.php");
             $currentdate= date("Y-m-d");
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
             }
             ?>
           </tbody>
    </div>
    </table>
</body>
</html>