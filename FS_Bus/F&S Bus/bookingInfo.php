<head>
    <style>
        body{
            background-image:url("bookingPage_background.jpg");
            background-size: cover;
        }
         .book-ticket-info{
            background-color:#cccccc;
            width:33%;
            position:absolute;
            top:80px;
            left:35%;
            height:60%;
            padding-top:10px;
            border-radius:20px
        }

    
        .sectionplace{
         padding-left:10px;
        }

        .resultplace{
            text-align:left;
            padding-right:10px
        }

        .confirmButton{
            position:absolute;
            width:150px;
            height:40px;
            bottom:100px;
            left:58%;
            border-radius:10px;
            background-color:darkgrey;
            font-size:14px;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-family: "fantasy";
        }

        .selectTicketTitle{
            text-align:center;
             height:30px; 
             font-size:30px;
             font-family:Arial Black;
             text-transform: uppercase;
            letter-spacing: 3px;
        }

        .tableContentText{
            font-size:16px;
             font-family:Arial Black;
             text-transform: uppercase;
            letter-spacing: 2px;
        }
        .payment-container{
            position:absolute;
            justify-content: center;
            width: 750px;
            height: 500px;
            background-color: #dddddd;
            border-radius: 10px;
            padding: 40px;
            align-items: center;
            margin-left:25%;
            margin-top:75px
           
        }

        h2{
            text-align: center;
        }

        .row{
            display: flex;
        }

        input[type=text], [type=password],select{
            margin-bottom: 15px;
            max-width: 300px;
        }

        input {
            width: 100%;
            padding: 9px;
            border: 1px solid #dddddd;
            font-size: 12px;
            border-radius: 4px;
            box-sizing: border-box;
            display: block;
            margin-bottom: 15px;
        }

        .Expiry {
            width: 50%;
            margin-right: 20px;
        }

        input[type = "submit"]{
            width: 50%;
            height: 50px;
            border: 1px solid;
            background:yellow ;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            outline: none;
            transform: translate(40%);
            box-shadow: inset 0 0 0 0 black;
            transition: ease-out 0.3s;
        }

        input[type = "submit"]:hover{

            box-shadow: inset 400px 0 0 0 rgb(128, 106, 106) ;
            color: white;
        }

        .cancelPayment{
            position:absolute;
            right:40px;
            top:55px;
            border:none;
            font-weight: bold; 
            padding: 10 10px
        }
        .payment-container{
            display:none
        }
    </style>
    </head>
    <body>
        <?php include("customer_session.php")?>
        <table class = "book-ticket-info" border = "0">
        <tr>
            <td colspan = 3 class = selectTicketTitle > 
                <u>Selected Ticket</u>
            </td>
        </tr>
        <tr class= tableContentText>
        <?php
         
        function getTicketID(){
            include("conn.php");
            $ticketid = $_POST['busid'];
            $data ="SELECT * FROM bus_ticket";
            $filter_id=mysqli_query($con,$data);
            while($row = mysqli_fetch_array($filter_id)){
                if ($row['Ticket_ID'] == $ticketid ){
                        $price = $row['Pricing'];
                        $TicketQuantity = getTicketQuantity();
                        $Total_Price = $price * $TicketQuantity;
                        echo "<tr class ='tableContentText' >";
                        echo "<td class = sectionplace>";
                        echo "Bus ID";
                        echo "</td>";
                        echo "<td width= 25px>";
                        echo ":";
                        echo "</td>";
                        echo "<td width= 50px class = resultplace>";
                        echo $ticketid ; 
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr class ='tableContentText' >";
                        echo "<td class = sectionplace>";
                        echo "Quantity";
                        echo "</td>";
                        echo "<td width= 25px>";
                        echo ":";
                        echo "</td>";
                        echo "<td width= 50px class = resultplace>";
                        echo $TicketQuantity ; 
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr class= 'tableContentText'>";
                        echo "</td class = sectionplace>";
                        echo "<td class = sectionplace>";
                        echo "Price per ticket";
                        echo "</td>";
                        echo "<td width= 25px>";
                        echo ":";
                        echo "</td>";
                        echo "<td width= 50px class = resultplace>";
                        echo "RM".$price ; 
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr class= 'tableContentText' >";
                        echo "<td class = sectionplace>";
                        echo "Total Price";
                        echo "</td>";
                        echo "<td width= 25px>";
                        echo ":";
                        echo "</td>";
                        echo "<td width= 100px class = resultplace>";
                        echo $TicketQuantity . "x"."RM".$price."="."RM".$Total_Price; 
                        echo "</td>";
                        echo "</tr>";
                       

                }
            }
        }  

        function getTicketQuantity(){
        $checkedBoxes = 0;
        echo "<tr class= 'tableContentText' >";
        echo "<td class = sectionplace>";
        echo "Seat ID";
        echo "</td>";
        echo "<td width= 25px>";
        echo ":";
        echo "</td>";
        echo "<td width = 50px class = resultplace>" ;
       

            if(isset($_POST['id1'])){
                echo $_POST['id1'];
                $checkedBoxes++;
            } if(isset($_POST['id2'])) {
                echo $_POST['id2'];
                $checkedBoxes++;
            } if(isset($_POST['id3'])) {
                echo $_POST['id3'];
                $checkedBoxes++;
            } if(isset($_POST['id4'])) {
                echo $_POST['id4'];
                $checkedBoxes++;
            } if(isset($_POST['id5'])) {
                echo $_POST['id5'];
                $checkedBoxes++;
            } if(isset($_POST['id6'])) {
                echo $_POST['id6'];
                $checkedBoxes++;
            } if(isset($_POST['id7'])) {
                echo$_POST['id7'];
                $checkedBoxes++;
            } if(isset($_POST['id8'])) {
                echo $_POST['id8'];
                $checkedBoxes++;
            } if(isset($_POST['id9'])) {
                echo $_POST['id9'];
                $checkedBoxes++;
            } if(isset($_POST['id10'])) {
                echo $_POST['id10'];
                $checkedBoxes++;
            } if(isset($_POST['id11'])) {
                echo $_POST['id11'];
                $checkedBoxes++;
            } if(isset($_POST['id12'])) {
                echo $_POST['id12'];
                $checkedBoxes++;
            } if(isset($_POST['id13'])) {
                echo $_POST['id13'];
                $checkedBoxes++;
            } if(isset($_POST['id14'])) {
                echo $_POST['id14'];
                $checkedBoxes++;
            } if(isset($_POST['id15'])) {
                echo $_POST['id15'];
                $checkedBoxes++;
            } if(isset($_POST['id16'])) {
                echo $_POST['id16'];
                $checkedBoxes++;
            } if(isset($_POST['id17'])) {
                echo $_POST['id17'];
                $checkedBoxes++;
            } if(isset($_POST['id18'])) {
                echo $_POST['id18'];
                $checkedBoxes++;
            } if(isset($_POST['id19'])) {
                echo $_POST['id19'];
                $checkedBoxes++;
            } if(isset($_POST['id20'])) {
                echo $_POST['id20'];
                $checkedBoxes++;
            } if(isset($_POST['id21'])) {
                echo $_POST['id21'];
                $checkedBoxes++;
            } if(isset($_POST['id22'])) {
                echo $_POST['id22'];
                $checkedBoxes++;
            } if(isset($_POST['id23'])) {
                echo$_POST['id23'];
                $checkedBoxes++;
            } if(isset($_POST['id24'])) {
                echo $_POST['id24'];
                $checkedBoxes++;
            } if(isset($_POST['id25'])) {
                echo $_POST['id25'];
                $checkedBoxes++;
            } if(isset($_POST['id26'])) {
                echo $_POST['id26'];
                $checkedBoxes++;
            } if(isset($_POST['id27'])) {
                echo $_POST['id27'];
                $checkedBoxes++;
            } if(isset($_POST['id28'])) {
                echo $_POST['id28'];
                $checkedBoxes++;
            } if(isset($_POST['id29'])) {
                echo$_POST['id29'];
                $checkedBoxes++;
            } if(isset($_POST['id30'])) {
                echo $_POST['id30'];
                $checkedBoxes++;
            }
            echo "</td>";
            echo "</tr>";
        return $checkedBoxes;
            }
        
        getTicketID()
         
 
    
        ?>
        
        </table> 
        <input type="button" class="confirmButton" name="comfirmButton" value="Proceed" onclick = "showform()">
        <form class = paymentform method = post action="update_customerBooking.php">
        <input type=hidden name="Customer_ID" value="<?php include"conn.php";
                                                    $Username=$_SESSION['mySession'];
                                                    $query ="SELECT * FROM customer_profile WHERE Username ='$Username' ";
                                                    $result=mysqli_query($con,$query);
                                                    while($row = mysqli_fetch_array($result)){
                                                        echo $row['Customer_ID'];
                                                    }?>"></input>
        <input type=hidden name="ticketid" value="<?php echo $_POST['busid']?>"></input>
         <input type=hidden name="array" value="<?php
         $ticketArray=array();
            if(isset($_POST['id1'])){
                array_push($ticketArray, $_POST['id1']);
            } if(isset($_POST['id2'])) {
                array_push($ticketArray, $_POST['id2']);
            } if(isset($_POST['id3'])) {
                array_push($ticketArray, $_POST['id3']);
            } if(isset($_POST['id4'])) {
                array_push($ticketArray, $_POST['id4']);
            } if(isset($_POST['id5'])) {
                array_push($ticketArray, $_POST['id5']);
            } if(isset($_POST['id6'])) {
                array_push($ticketArray, $_POST['id6']);
            } if(isset($_POST['id7'])) {
                array_push($ticketArray, $_POST['id7']);
            } if(isset($_POST['id8'])) {
                array_push($ticketArray,$_POST['id8']);
            } if(isset($_POST['id9'])) {
                array_push($ticketArray, $_POST['id9']);  
            } if(isset($_POST['id10'])) {
                array_push($ticketArray, $_POST['id10']);
            } if(isset($_POST['id11'])) {
                array_push($ticketArray, $_POST['id11']); 
            } if(isset($_POST['id12'])) {
                array_push($ticketArray, $_POST['id12']);
            } if(isset($_POST['id13'])) {
                array_push($ticketArray, $_POST['id13']);
            } if(isset($_POST['id14'])) {
                array_push($ticketArray, $_POST['id14']);
            } if(isset($_POST['id15'])) {
                array_push($ticketArray, $_POST['id15']);
            } if(isset($_POST['id16'])) {
                array_push($ticketArray, $_POST['id16']);
            } if(isset($_POST['id17'])) {
                array_push($ticketArray, $_POST['id17']);
            } if(isset($_POST['id18'])) {
                array_push($ticketArray, $_POST['id18']);
            } if(isset($_POST['id19'])) {
                array_push($ticketArray, $_POST['id19']);
            } if(isset($_POST['id20'])) {
                array_push($ticketArray, $_POST['id20']);
            } if(isset($_POST['id21'])) {
                array_push($ticketArray, $_POST['id21']);
            } if(isset($_POST['id22'])) {
                array_push($ticketArray, $_POST['id22']);
            } if(isset($_POST['id23'])) {
                array_push($ticketArray, $_POST['id23']);
            } if(isset($_POST['id24'])) {
                array_push($ticketArray, $_POST['id24']);
            } if(isset($_POST['id25'])) {
                array_push($ticketArray, $_POST['id25']);
            } if(isset($_POST['id26'])) {
                array_push($ticketArray,$_POST['id26']);
            } if(isset($_POST['id27'])) {
                array_push($ticketArray, $_POST['id27']);
            } if(isset($_POST['id28'])) {
                array_push($ticketArray, $_POST['id28']);
            } if(isset($_POST['id29'])) {
                array_push($ticketArray, $_POST['id29']);
            } if(isset($_POST['id30'])) {
                array_push($ticketArray, $_POST['id30']);
            }
            extract($ticketArray);
                foreach( $ticketArray as $value ) {
                   $ticketid =$value;
                   echo "$ticketid,";
                }
        ?>"></input>
        
        
        </div>
        <div class = "payment-container" id = "payment-container" >
            <h2>Confirm Your Payment</h2>
            <div class="name">
                <h3>Name on card:</h3>
                    <input type = "text" name = "name"  required="required" ></input>
            </div>
            <div class = number>
                <h3>Card Number:<h3>
                <input type = "text" name = "name"  required="required" ></input>
            </div>
            <div class = "row">
                <div class = Expiry>
                    <h3>Expiry Date:<h3>
                    <input type = "text" name = "name"  required="required" ></input>
                </div>
                <div class = 'CVV'>
                    <h3>CVV:<h3>
                    <input type = "password" name = "name"  required="required" ></input>
                </div>
            </div>
            <div class="field">
            <button type="button" class= cancelPayment onclick="hideform()">X</button>
            </div>
            <div class="field">
                <input type="submit" name = "submit" value="Pay Now">
        </div>
    
        </form>
        </body>
    
        <script>
        function showform(){
        document.getElementById("payment-container").style.display = "block";
        }

        function hideform(){
        document.getElementById("payment-container").style.display = "none";
        }
        </script>
 