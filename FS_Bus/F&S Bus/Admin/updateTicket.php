<?php
function editTicket(){
include("conn.php");
$busID= getBusId($busid);
$sql = "UPDATE bus_ticket SET 
Bus_ID = '$busID',
Departure_point='$_POST[departurepoint]', 
Arrival_point='$_POST[arrivalpoint]', 
Departure_date='$_POST[departuredate]', 
Departure_time='$_POST[departuretime]' ,
Arrival_time='$_POST[arrivaltime]' ,
Duration='$_POST[duration]' ,
Pricing='$_POST[pricing]' ,
Seat_available='$_POST[seatavailable]' 
WHERE Ticket_ID='$_POST[ticketid]';";
//echo $sql;
$result = mysqli_query($con,$sql);
if ($result) {
    mysqli_close($con);
    echo $sql;
header('Location: ticketData_page.php');
}
}
function getBusId($busid){
    include("conn.php");
    $busoperator = $_POST['busoperator'];
    $busplatenumber = $_POST['busplatenumber'];
    $data ="SELECT * FROM bus";
    $filter_bus=mysqli_query($con,$data);
    while($row = mysqli_fetch_array($filter_bus)){
        if ($row['Bus_operator'] == $busoperator and $row['Bus_plate_number']== $busplatenumber){
                $bus_id = $row['Bus_ID'];
                return $bus_id;
        }
        else{
            echo '<script>alert("No matched Bus ID is found ! Please try again!");
                    window.location.href = "ticketData_page.php";
                    </script>'; 
        }
        

    }
}
editTicket()
?>

