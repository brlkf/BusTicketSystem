<style>
    h2{
    font-size: 30px;
    margin-right:300px;
    color:white
    }
    .navigation_bar{
    height:100px;
    width:100%;
    background-color: orange;
    margin-right:100px;
    padding:10px 0;
    display:flex;
    align-items: center;
    justify-content: space-between;
    }

    .logo{
        width:100px;
        margin-left:75px;
        cursor:pointer;
    }
    .navigation_bar ul li{
        list-style:none;
        display:inline-block;
        margin:0 30px;
    }
    .navigation_bar ul li a{
        text-decoration:none;
        font-size:20px;
        color:white;
        text-transform: uppercase;
    }

    .navigation_bar ul li a:hover{
    color: darkred;
    }   

    .dropdown{
    position: relative;
    display: inline-block;
    }

    .dropdown-login {
        align-items:center;
        display: none;
        position: absolute;
        background-color: #A9A9A9;
        min-width: 160px;
    
    }
    
    .dropdown-login a {  
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    
    .dropdown:hover .dropdown-login {display: block;}

    .dropbtn{
        font-family:'Times New Roman', Times, serif;
        border:none;
        text-decoration:none;
        font-size:20px;
        color:white;
        text-transform: uppercase
    }

    button{
    height:50px;
    width:300px;
    font-size: 20px;
    border-radius: 25px;
    border: 2px solid black;
    background:transparent
}

    button:hover{
        background:rgba(150,150,255,0.5);
        color:white
    }

}
</style>
<div class="navigation_bar">
<img src="images/Bus_Logo.png" class="logo">
            <h2>F&S Bus<br>Fast and Safe</h2> 
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Sign_in.php">Sign Up</a></li>
                <li class="dropdown"><button class="dropbtn">Log In</button>
                <div class="dropdown-login">
                    <a class="login" href="Admin/login.php">Log In as Admin</a>
                    <a class="login" href="customer_login.php">Log In as Customer</a>
                </div></li>
            </ul>
            </div>