<?php
function addNewticket(){
include("conn.php");
$busID= getBusId($busid);
$sql="INSERT INTO bus_ticket (Bus_ID, Departure_point, Arrival_point, Departure_date, 
    Departure_time, Arrival_time, Duration, Pricing, Seat_available)
            VALUES
            ('$busID','$_GET[departurepoint]','$_GET[arrivalpoint]',
            '$_GET[departuredate]','$_GET[departuretime]','$_GET[arrivaltime]','$_GET[duration]','$_GET[pricing]','$_GET[seatavailable]')";
            if (!mysqli_query($con,$sql)) {
                die('Error: ' . mysqli_error($con));
            }
            else{
                echo '<script>alert("1 record added!");
                window.location.href = "ticketData_page.php";
                </script>'; 
                mysqli_close($con);
            };
}
function getBusId($busid){
    include("conn.php");
    $busoperator = $_GET['busoperator'];
    $busplatenumber = $_GET['busplatenumber'];
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
addNewticket()
?>