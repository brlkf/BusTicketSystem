<!DOCTYPE html>
<html>
<head>
<title>Payment</title>
<link rel = "stylesheet" href="payment.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <div class = "container">
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
            <input type="submit" name = "submit" value="Pay Now">
        </div>
    </div>
</body>
