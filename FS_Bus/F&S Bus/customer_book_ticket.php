<!DOCTYPE html>
<html>
<head>
    <title>Book Ticket</title>
    <style>
        body{
            background-image:url("bookingPage_background.jpg");
            background-size: cover;
        }
        .seatTableArea{
            margin-top:50px;
            margin-left:36%
          
            }
        .seatTable {
            
            border: none;
            border-collapse: collapse;
            background-color:#cccccc;
            border-radius:50px;
            background:rgba(255,255,255,0.25)
           
            
  
            
        }
        .seatTable tr {
            height:40px;
            
           
        }
        .seatTable td {
            border: none;
            width:150px;
            height:40px;
            padding-bottom:10px;
        }

        .steering{
            
            text-align:right;
            padding-right:50px;
            font-size:60px;
            margin-left:50px;
            margin-right:60px
        }

        input[type=checkbox]{
            width: 35px;
            height: 35px;
            background-color: green;
            appearance: none;
            cursor: pointer;
            
        }

        .seatTable td > input[type =checkbox]:disabled{
            background-color: red;
        }

        .seatTable td > input[type =checkbox]:checked{
            background-color: blue;
            
        }

        .seatTable td > input[type =checkbox]:checked::before{
            margin-left:6.9px;
            content: '\2716';
            display:block;
            align: center;
            font-size:25px;
            color:white;
            position:absolute;
        }
        
        .availability{
            padding-top:20px;
            padding-left:10px
        }
        
        ul{
            list-style: none;
        }
        .avaliable::before{
            color: chartreuse;
            display: inline-block;

        }

        .unavaliable::before{
            color: red;
            display: inline-block;

        }

        li::before {
            content: "\2022\00A0"; 
            color: blue; 
            font-weight: bold; 
            display: inline-block;
        }
        
        .confirmButton{
            position:absolute;
            width:150px;
            height:40px;
            margin-top:30px;
            margin-left:230px;
            border-radius:10px;
            background-color:darkgrey;
            font-size:14px;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-family: "fantasy";
        }


    

    </style>
</head>

<body>
        <div class = seatTableArea>
        <form method = "POST" action = "bookingInfo.php">
        <table class = "seatTable"  border="1" >
        <input type=hidden name="busid" value=<?php echo $_GET['ticketid']?> ></input>
            <tr>
                <td colspan="2" >
                <div class = "steering">&#9991;</div></td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox"  name="id1" value="A01" id="1"
                        <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='A01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>
                        ></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id2" value="A02" id="2" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='A02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id3" value="A03" id="3" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='A03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id4" value="B01" id="4"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                        $sql ="SELECT * FROM purchase_ticket";
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result)){
                           if($row['Seat_number'] =='B01' and $row['Ticket_ID']==$ticketid){
                               echo "disabled";
                               
                           }
                       }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id5" value="B02" id="5"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='B02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id6" value="B03" id="6"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='B03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id7" value="C01" id="7" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='C01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id8" value="C02" id="8" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='C02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id9" value="C03" id="9" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='C03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id10" value="D01" id="10" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='D01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id11" value="D02" id="11"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='D02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id12" value="D03" id="12" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='D03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id13" value="E01" id="13" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='E01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id14" value="E02" id="14" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='E02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id15" value="E03" id="15"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='E03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id16" value="F01" id="16"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='F01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id17" value="F02" id="17"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='F02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id18" value="F03" id="18"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='F03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id19" value="G01" id="19"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='G01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id20" value="G02" id="20"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='G02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id21" value="G03" id="21" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='G03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id22" value="H01" id="22"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='H01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id23" value="H02" id="23" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='H02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id24" value="H03" id="24" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='H03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id25" value="I01" id="25"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='I01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id26" value="I02" id="26" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='I02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id27" value="I03" id="27" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='I03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>
            <tr>
                <td style="padding-left:50px"><input type="checkbox" name="id28" value="J01" id="28" <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='J01' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input></td>
                <td class = "right" style="padding-left:50px;">
                    <input type="checkbox" name="id29" value="J02" id="29"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='J02' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                    <input type="checkbox" name="id30" value="J03" id="30"  <?php include("conn.php");
                        $ticketid =intval($_GET['ticketid']);
                         $sql ="SELECT * FROM purchase_ticket";
                         $result = mysqli_query($con,$sql);
                         while($row = mysqli_fetch_array($result)){
                            if($row['Seat_number'] =='J03' and $row['Ticket_ID']==$ticketid){
                                echo "disabled";
                                
                            }
                        }
                        ?>></input>
                </td>
            </tr>

        </table>
       <input type="submit" class= "confirmButton"name="comfirmButton" value="confirm"> </input>
        </form>
        
        
            <div class = "availability">
                <ul class = "legend" type = "square">
                    <li class = "avaliable">
                        Available
                    </li>
                
                    <li  class = "unavaliable">
                        Unavailable
                    </li>
                    <li  class = "selected">
                        Selected
                    </li>
                </ul>
            </div>
        </div>
</body> 
       
    

   