<style>
     h2{
        font-family:"Montserrat",sans-serif;
    }

    h3,h4{
        font-family:"Montserrat",sans-serif;
        color: #adadad;
        font-size: 12px;
    }

    body{
        margin: 0;
        padding: 0;
        font-family: 'Open Sans',sans-serif;
        background: linear-gradient(to top left, #000066 0%, #ccccff 100%) ;
        height: 100vh;
        overflow: hidden; 
    }

    .center{
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: white;
        border-radius: 10px;
    }



    input[type=text], input[type=tel], input[type=email], input[type = password], input[type=date],  select{
        margin-bottom: 15px;
        max-width: 300px;
    }

    .field input {
        width: 100%;
        padding: 12px;
        border: 1px solid #dddddd;
        font-size: 12px;
        border-radius: 4px;
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        margin-bottom: 15px;
    }

	
    input[type = "submit"]{
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
    }
    
    .login_link {
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #666666;
        text-decoration: "login" underline;
    }

    input:valid {
        border-color: green;
    }

    input:invalid:not(:focus):not(:placeholder-shown) {

        border: 2px solid #c92432;
        color: #c92432;
        background: #fffafa;
    }

    input:not(:focus):not(:placeholder-shown):invalid ~ .requirements {
        display: block;
        max-height: 200px;
        padding: 0 30px 20px 50px
    }

    .requirements {
        padding: 0 30px 0 50px;
        max-height: 0;
        transition: 0.28s;
        overflow: hidden;
        color: red;
        font-style:italic;
        font-size: 10px;
      }
    </style>
<body>
    <?php include("customer_session.php")?>
    <form action="insertFeedback.php" method="POST">
    <div class = "center">
        <h2><p align = "center">Feedback Form</h2>
        <p align = "center"><img src="images/Bus_Logo.png" height="90" width="90" >
        <h3><p align = "center"> We appreciate your feedback!</h3>
            <input type="hidden" name="cus_username" value="<?php 
                                                            include("conn.php");
                                                            $username=$_SESSION['mySession'];
                                                            $result = mysqli_query($con,"SELECT Customer_ID FROM customer_profile WHERE Username='$username'");
                                                            while($row = mysqli_fetch_array($result))
                                                            {echo $row['Customer_ID'];}
                                                            ?>"></input>
            <div id="container">
                    <div class="field">                     
                        <h5 align="center"> Customer_ID :  <?php echo $_SESSION['mySession']; ?> </h5>
                    </div>
                    <div class="field" >
                        <input type="text" name="feedback" required="required" placeholder="Write your feedback here..."></input>
                    </div>    
            
                
                    <div class="field">
                        <input type="submit" name = "submit" value="Submit">
                    </div>
            </div>  
        </form> 
            </div>
                       
    </div>
</form>
</body>