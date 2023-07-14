<head>
    <style>
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
            margin-top:50px
           
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

</style>
    </head>
<body>
<form method = post action="update_customerBooking.php">
    
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
            <button type="button" class= cancelPayment onclick="history.back();">X</button>
            </div>
            <div class="field">
                <input type="submit" name = "submit" value="Pay Now">
        </div>
    </form>
    </body>