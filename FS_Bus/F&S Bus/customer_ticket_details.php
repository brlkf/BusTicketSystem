<head>
    <title> Ticket detail </title>
<style>
    .ticketOutlook{
        display:flex;
        margin-top:200px;
        margin-left:300px;

    }
    .ticketPictureSection{
        background-color:705d72;
        padding-top:80px;
        padding-right:20px;
        padding-left:20px;
        padding-bottom:50px;
        border-radius:30px
    }
    .ticketTextSection{
        background-color:705d72;
        padding-top:20px;
        padding-right:20px;
        padding-left:80px;
        padding-bottom:50px;
        border-radius:30px;
        display:flex
    }

    .ticketDetailsTable td{
        width:195px;
        letter-spacing: 3px;
        font-size:20px;
        font-weight: bold;
        color:black;
    }

    .ticketDetailsTable th{
        width:195px;
        letter-spacing: 3px;
        font-size:20px;
        font-weight: bold;
        color:black;
        padding-right:100px;
        height:80px;
        text-transform: uppercase;
    }
    .qrcode{
        padding-top:60px;
        padding-bottom:50px;
        margin-left:0px
    }
    body{
            background-image:url("bookingPage_background.jpg");
            background-size: cover;
        }
</style>
</head>
<body>
    <div class = "ticketOutlook">
    <div class = ticketPictureSection>
        <img src="images/Bus_Logo.png" alt="company logo" width="150px" height="150px">
    </div>
    <div class = ticketTextSection>
        <table class = ticketDetailsTable>
        <tr>
            <th colspan= 2> Bus Ticket </th>
        </tr> 
            <tr>
                <td> purchase ID : </td>
                <td> <?php 
                        $purchaseid= intval($_GET['id']);
                        
                            echo $purchaseid;
                        ?>
                </td>
            </tr>
            <tr>
                <td> Bus ID : </td>
                <td> <?php include("conn.php"); $purchaseid= intval($_GET['id']);
                        $data ="SELECT * FROM purchase_ticket WHERE Purchase_ID =$purchaseid" ;
                        $matchresult=mysqli_query($con,$data);
                        while($row = mysqli_fetch_array($matchresult)){
                            echo $row['Bus_ID'];
                        }?>
                </td>
            </tr>
            <tr>
                <td> Seat ID : </td>
                <td> <?php include("conn.php"); $purchaseid= intval($_GET['id']);
                        $data ="SELECT * FROM purchase_ticket WHERE Purchase_ID =$purchaseid" ;
                        $matchresult=mysqli_query($con,$data);
                        while($row = mysqli_fetch_array($matchresult)){
                            echo $row['Seat_number'];
                        }?>
                </td>
            </tr>
            <tr>
                <td> Departure date : </td>
                <td> <?php include("conn.php"); $purchaseid= intval($_GET['id']);
                        $data ="SELECT * FROM purchase_ticket INNER JOIN bus_ticket on bus_ticket.Ticket_ID = purchase_ticket.Ticket_ID  WHERE Purchase_ID =$purchaseid" ;
                        $matchresult=mysqli_query($con,$data);
                        while($row = mysqli_fetch_array($matchresult)){
                            echo $row['Departure_date'];
                            }?>
                        
                </td>
            </tr>
            <tr>
                <td> Departure time : </td>
                <td> <?php include("conn.php"); $purchaseid= intval($_GET['id']);
                        $data ="SELECT * FROM purchase_ticket INNER JOIN bus_ticket on bus_ticket.Ticket_ID = purchase_ticket.Ticket_ID  WHERE Purchase_ID =$purchaseid" ;
                        $matchresult=mysqli_query($con,$data);
                        while($row = mysqli_fetch_array($matchresult)){
                            echo $row['Departure_time'];
                            }?>
                </td>
            </tr>
        </table>
        <div class = qrcode>
            <img src="qrcodepic.png" alt="company logo" width="150px" height="150px">
        </div>
    </div>
    </div>