<!DOCTYPE html>

<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
    <title>Treasury Bank Financial</title>
    <link rel="stylesheet" href="Stly1\quickpay.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="logo">
                <img src="img12/logo.png" alt="logo" width="165px" height="75px" align="left" />
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home2.php">Home</a></li>
                    <li><a href="actions.php">Features</a></li>
                    <li><a href="userprofile.php">Profile</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </div>
            <div class="logout">
                <ul>
                    <li><a href="unregisteredUI.php">Log out</a></li>
                </ul>
            </div>
        </div>
    </div>


<div class="image">
    <img src="img12/pay.jpg" alt="pay" width="650px" height="650px" />
</div>



    <div class="sidebar">
        <h4 class="cat">BANKING OPTIONS</h4>
        <a href="home2.php">Dashboard</a>
        <a href="loan.php">Loans</a>
        <a href="Deposits.php">Deposits</a>
        <a href="#creditcards">Credit Cards</a>
        <br /><br />
        <h4 class="cat">ACTIONS</h4>
        <a href="transfermoney.php">Transfer Money</a>
        <a href="quickpay.php">Quick Pay</a>
        <a href="createacc.php">Open an Account</a>
        <br /><br />
        <h4 class="cat">SUPPORT</h4>
        <a href="aboutus.php">About Us</a>
        <a href="feedback.php">Feedback</a>
        <a href="userprofile.php">My Profile</a>
        <a href="contactus.php">Report a Problem</a>
    </div>

    <style>
        .vl {
            border-left: 3px solid black;
            height: 1070px;
        }
    </style>


    <div class="vl"></div>

    <div class="border2" style="border-style: groove; border-color:black "></div><br><br>

    <br><br>
        <h2 class="htxt">Quick Pay</h2><br />
        <br><br>

        <div class="details">
            <form style="margin: auto; width: 220px; "action="/quick_pay.php">
            <div class="dropdown" style="width:200px;">

                <label for="bills">Payment Type*</label><br />
                <select name="bills" id="bills">
                    <option value="0"></option>
                    <option value="1">Electricity Billings</option>
                    <option value="2">Water Billings</option>
                    <option value="3">Telephone Billings</option>
                    <option value="4">Internet & Data Billings</option>
                    <option value="5">Other Billings</option>
                </select>
            </div>

            <div class="inputbox"><br>
                <span>Email</span><br>
                <input type="text" name="emailid" placeholder="Enter email address" >
            </div>

            <div class="inputbox"><br>
                <span>Password</span><br>
                <input type="password" name="pwd" placeholder="Enter password" >
            </div>

            <div class="inputbox"><br>
                <span>Contact Number</span><br>
                <input type="tel" name="tpnumber" placeholder="Enter contact number" >
            </div><br>

            <div class="inputbox">
                <span>Card Number*</span><br>
                <input type="number" name="crdnumber" placeholder="Enter card number" required>
            </div><br>
            
            <div class="inputbox">
                <span>Expiration Date</span><br>
                <input type="date" name="expdate" placeholder="Enter expiration date" required>
            </div><br>

            <div class="inputbox">
                <span>CVV*</span><br>
                <input type="number" name="cvv" placeholder="Enter cvv number" required>
            </div>

            <div class="inputbox"><br>
                <span>Pay Amount[LKR]*</span><br>
                <input type="number" name="amount" placeholder="Enter pay amount" required>
            </div><br><br>

            <input type="submit" value="Pay Now!" class="submit-btn">
        </div>
        </form>

    <div class="qr">
        <ul>
            <li>
                <a href="feedback.php" target="_blank">
                    <h4 class="txtqr">Give us a feedback</h4> <br />
                    <img src="img12/qrc.jpg" alt="QR" width="100px" height="100px" />

                </a>
            </li>
        </ul>
    </div>

            <div class="playapp">
                <ul>
                    <li>
                        <a href="https://play.google.com/" target="_blank">
                            <img src="img12/playst.jpg" alt="plays" width="150px" height="42px" />

                        </a>
                        <a href="https://www.apple.com/app-store/" target="_blank">
                            <img src="img12/appst.jpg" alt="apps" width="135px" height="42px" />

                        </a>
                    </li>
                </ul>

            </div>
            <div class="socialm">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <img src="img12/facebook.png" alt="fb" width="30px" height="30px" />

                        </a>
                        <a href="https://twitter.com/" target="_blank">
                            <img src="img12/twitter.png" alt="twtr" width="30px" height="30px" />

                        </a><a href="https://www.instagram.com/" target="_blank">
                            <img src="img12/instagram.png" alt="ig" width="30px" height="30px" />

                        </a>
                        <a href="https://plus.google.com/" target="_blank">
                            <img src="img12/gplus.png" alt="g+" width="30px" height="30px" />

                        </a>
                    </li>
                </ul>

            </div>
            <div class="mail">
                <ul>
                    <li>
                        <a href="https://www.google.com/gmail/about/" target="_blank">
                            <img src="img12/email.png" alt="email" width="50px" height="50px" />
                            <h4 class="txtqr">Subscribe to Email</h4>
                        </a>
                    </li>
                </ul>

            </div>
            <br />
            <h2 class="text1">Why Choose Us?</h2>
            <h5 class="text2">
        We provide the best of online banking for you to pay your bills and <br />
        make your payments superfast, making it easier to stay on track.
    </h5>
</body>
</html>