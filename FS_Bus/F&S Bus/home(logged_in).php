<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <?php include"customer_session.php"?>
        <div class="navigation_bar">
            <?php include"header(logged_in).php"?>
        </div>
        <br><br>
        <h1 align="center">Online Bus Ticket</h2>
        <br>
        <h3 align="center">Search for bus ticket</h3>
        <br>
        <form action="view_ticket(logged_in).php" method="POST" align="center">
            <div>
                <input name="date" type="text" placeholder="Departure Date"
                onfocus="(this.type='date')">
                <Select name="From" placeholder="From">
                    <option value="">From</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Terrenganu">Terrenganu</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Johor">Johor</option>
                    <option value="Perak">Perak</option>    
                    <option value="Penang">Penang</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Pahang">Pahang</option>
                </Select>
                <Select name="To" placeholder="To">
                    <option value="">To</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Terrenganu">Terrenganu</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Johor">Johor</option>
                    <option value="Perak">Perak</option>
                    <option value="Penang">Penang</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Pahang">Pahang</option>
                </Select>
            </div>
            <br><br><br>
            <div>
                <button>Search</button>
            </div>
        </form>
        <div class="why" align="center">
            <br>
            <h4>Why choose F&S services?</h4>
            <table style="width: 900px ; margin-left: auto ; margin-right : auto;" border="1">
                <tr>
                    <td><img src="images/affordable_image.png" class="why_image">
                        <p><b>Affordable</b></p>
                    </td>
                    <td colspan="4"><p>The bus tickets we provided are affordable and easy to book. Let user purchase affordable ticket to travel.</p>
                    </td>
                <tr>
                </td>
                    <td colspan="4"><p>We provide online QR code in mobile gadget instead of printed out ticket. Less use paper to create physical ticket to save our earth.</p>
                    <td><img src="images/Eco_friendly.png" class="why_image">
                        <p><b>Eco-friendly</b></p>
                    </td>
                </tr>
                <tr>
                    <td><img src="images/Reliable.png" class="why_image">
                        <p><b>Reliable</b></p>
                    </td>
                    <td colspan="4"><p>The bus tickets we provided are reliable and guaranteed. There is no fake ticket allowed in this system.</p></td>
                </tr>
            </table>
        </div>
        <div class="price" align="center">
            <br>
            <h4>F&S Popular Bus Routes</h4>
            <table style="width: 900px ; margin-left: auto ; margin-right : auto;" border="1">
                <tr height="75px">
                    <td><b>Bus Routes</b></td>
                    <td><b>Price(RM)</b></td>
                </tr>
                <tr>
                    <td>Penang to Pahang</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Johor to KL</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>KL to Perak</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>KL to Melaka</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>Johor to Pahang</td>
                    <td>35</td>
                </tr>
            </table>
            <br>
        </div>
        <div class="footer">
            <?php include"footer.php" ?>
        </div>
    </body>
</html>