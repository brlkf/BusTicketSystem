<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link  rel="stylesheet">
    <style>
        body{
        margin:0;
        background-image:linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0.25)),
        url("Bus_background.PNG");
        background-repeat: no-repeat;
        background-size: 2000px 1000px;
    }

    .navigation_bar{
        height:100px;
        width:100%;
        background-color: orange;
        margin-right:100px;
        padding:10px 0;
        display:flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo{
        width:100px;
        margin-left:75px;
        cursor:pointer;
    }
    .navigation_bar ul li{
        list-style:none;
        display:inline-block;
        margin:0 30px;
    }
    .navigation_bar ul li a{
        text-decoration:none;
        font-size:20px;
        color:white;
        text-transform: uppercase;
    }
    .navigation_bar ul li a:hover{
        color: darkred;
    }

    h2,h3{
        font-family:"Montserrat",sans-serif;
        font-size:20px
    }

    .table{
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

    .view_ticket{
        width: 80%;
        height: 50px;
        border: 1px solid;
        background:#2691d9 ;
        border-radius: 20px;
        font-size: 13px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        transition: 5s;
        box-shadow: inset 0 0 0 0;
    }

    .view_ticket:hover{
        box-shadow: inset 400px 0 0 0 #2691d9;
    }
    
    i{
        color:red;
        font-size:20px
    }
    .wordalign{
        display:flex;
        margin-left:540px
    }
    </style>
    <title>document</title>
</head>
<body>
    <div class="navigation_bar">
        <?php include "header.php"?>
    </div>
    
    <table  class = table align = center>
        
        <thead>
          <tr>
            <th>Bus</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Bus Plate Number</th>
            <th>Duration(hours)</th>
            <th>Price</th>
            <th>Date</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
            <th>Seat Avaliable</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            include"conn.php";
            $result=mysqli_query($con,"SELECT * FROM bus_ticket bt INNER JOIN
            bus b ON bt.Bus_ID = b.Bus_ID ");

            
            while($row=mysqli_fetch_array($result)){
                if ($row['Bus_ID']==2){
                    $bus_icon = "starmart.jpg";
                }
                else if ($row['Bus_ID']==1) {
                    $bus_icon = "LA.png";
                }
                else if ($row['Bus_ID']==3) {
                    $bus_icon = "kkkl.png";
                }
                echo "<tr>"; // alternative way is : echo ‘<trbgcolor="#99FF66">’;
                $data='<div><img src="'.$bus_icon.'" width="60"></div>';
                

                echo "<td>";      
                echo $data;     
                echo $row['Bus_operator'];
                echo "</td>";

                echo "<td>";
                echo $row['Departure_point'];
                echo "</td>";

                echo "<td>";
                echo $row['Arrival_point'];
                echo "</td>";

                echo "<td>";
                echo $row['Bus_plate_number'];
                echo "</td>";

                echo "<td>";
                echo $row['Duration'];
                echo "</td>";

                echo "<td>";
                echo "RM".$row['Pricing'];
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
                echo $row['Seat_available'];
                echo "</td>";
                
                echo "<td><button class=view_ticket><a href=\"customer_book_ticket.php?ticketid="; //hyperlink to delete.php page with ‘id’ parameter
                    echo $row['Ticket_ID'];
                    echo "\">View Seats</a></td>";
                } 
                mysqli_close($con);//to close the database connection
            ?>
        </tbody>
    </div>
    </table>
</body>
</html>