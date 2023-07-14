
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel = "stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <form action="Customer profile.php" method="POST"></form>
    <div class = "center">
        <h2><p align = "center">Sign Up</h2>
        <p align = "center"><img src="images/Bus_Logo.png" height="90" width="90" >
        <h3><p align = "center">Become a member of F&S</h3>
        <h4><p align = "center">Create a free F&S account and get access to puchase various discount of bus tickets.</p></h4>
        <form action="insert1.php" method="POST">
            <div id="container">
                    <div class="field">                     
                        <input type = "text" name = "First_name"  required="required" placeholder="First Name">
                    </div>

                    <div class="field">
                        <input type = "text" name = "Last_name"  required="required" placeholder="Last Name">
                    </div>

                    <div class="field">
                        <input type = "text" name = "Username"  required="required" placeholder="Username">
                    </div>
            
                    <div class="field" >
                        <input type="tel" name="phone_num" required="required" placeholder="Phone Number">
                    </div>
                
                    
                    <div class="field">
                        <input type="email" name="email_address" required="required" placeholder="Email Address" >
                        <div class="requirements">
                            Please enter a valid email address
                        </div>
                    </div>
                    
                    <div class="field" >
                        <input type="password" name="password" required="required" placeholder="Password">
                    </div>    
            
                
                    <div class="field">
                        <input type="submit" name = "submit" value="Join Us">
                    </div>
                </div>  
        </form> 
                <div class = "login_link">
                    Already a member? <a href="customer_login.php">Login</a>
                </div>
            </div>
                       
    </div>
</body>
</html>    