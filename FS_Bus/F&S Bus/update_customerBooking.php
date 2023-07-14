
<?php
function addNewTicket(){
include("conn.php");
$ticket_id = $_POST['ticketid'];
$customer_id= $_POST['Customer_ID'];
$bus_id= getBusId($ticket_id);
$_date= date("Y-m-d");
$array = $_POST['array'];
$pieces = explode(",", $array);
$result=mysqli_query($con,$query);
for ($x = 0; $x <= sizeof($pieces); $x++) {
    if ($x == sizeof($pieces)-1) {
       break;
        mysqli_close($con);
      }
      $sql="INSERT INTO purchase_ticket (Ticket_ID,Customer_ID,Bus_ID, Seat_number,Date)
      VALUES
      ('$ticket_id','$customer_id','$bus_id','$pieces[$x]','$_date')".";";
      echo $sql;
      if (!mysqli_query($con,$sql)) {
          die('Error: ' . mysqli_error($con));
      }
      else{
          echo '<script>alert("Thank you for purchasing!");
          </script>'; 
          header('Location:home.php');
      };
  }
  $query ="SELECT * FROM bus_ticket WHERE Bus_ID = '$bus_id'" ;
  $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
    $newAmount = $row['Seat_available'] - sizeof($pieces) + 1;
    $update = "UPDATE bus_ticket SET Seat_available = $newAmount WHERE Bus_ID='$bus_id';";
        //echo $sql;
        $change = mysqli_query($con,$update);
        if ($change) {
            mysqli_close($con);
        }
    }
  //SELECT BASED ON BUS ID, READ SEAT VARIABLE,  -, UPDATE
  return $ticket_id;

}

function getBusId($ticket_id){
    include("conn.php");
    $data ="SELECT * FROM bus_ticket WHERE Ticket_ID ='$ticket_id'" ;
   /* $filter_bus=mysqli_query($con,$data);
    while($row = mysqli_fetch_array($filter_bus)){
            return $row['Bus_ID'];

        }*/
        if ($result=mysqli_query($con,$data))
            {
            // Return the number of rows in result set
            $rowcount=mysqli_num_rows($result);
            if ($rowcount == 0){
                echo '<script>alert("Not found!");
                </script>';
            }
            else{
                while($row = mysqli_fetch_array($result)){
                    return $row['Bus_ID'];
        
                }
            }

            }
        
}

addNewTicket();
?>

