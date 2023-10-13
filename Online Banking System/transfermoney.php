	
	



<!DOCTYPE html>

<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
    <title>Treasury Bank Financial</title>
    <link rel="stylesheet" href="Stly1\transfermoney.css">
   
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
    <div class="border1" style="border-style: groove; border-color: black"></div>


   

        <div class="sidebar">
            <h4 class="cat">BANKING OPTIONS</h4>
            <a href="home2.php">Dashboard</a>
            <a href="loan.php">Loans</a>
            <a href="Deposits.php">Deposits</a>
            <a href="#creditcards">Credit Cards</a>
            <br /><br />
            <h4 class="cat">ACTIONS</h4>
            <a href="#transfermoney">Transfer Money</a>
            <a href="quickpay.php">Quick Pay</a>
            <a href="creatacc.php">Open an Account</a>
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
                height: 550px;
            }
        </style>


        <div class="vl"></div>


        <div class="border2" style="border-style: groove; border-color: black"> </div>


        <div class="trCenter">
            <h1 class="transferM">Transfer Money</h1> <br /><br />
            <form method="POST" action="transferF.php" >
                <div class="dropdwon" style="width:200px;">
                    <label>Transfer Type:</label><br /><br />
                    <select name="tranferT" id="tranferT">
                        <option value="0">Choose Transfer Type</option>
                        <option value="1">Between own accounts</option>
                        <option value="2">To third party accounts</option>
                        <option value="3">To credit card accounts</option>
                        <option value="4">Mobile Cash transfers</option>
                    </select>
                </div><br /><br />
                <div class="transfertxt">
                    <label>Transfer Amount:</label>
                    <input type="text" name="transferA" id="transferA" required />
                    <span></span>

                </div><br /><br />
                <div class="transfertxt">
                    <p>Transfer Mode </p> <br />
                    <input type="radio" id="Online" name="transferMode" value="Online">
                    <label for="Online">Online</label>
                    <input type="radio" id="Set Up Standing Order" name="transferMode" value="Set Up Standing Order">
                    <label for="Set Up Standing Oder">Set Up Standing Order</label>
                </div><br />

                <div class="transfertxt">
                    <label>Sender Remarks:</label>
                    <input type="text" name="sRemarks" id="sRemarks" required />
                    <span></span>

                </div><br /><br />
                <div class="transfertxt">
                    <label>Beneficiary Remarks:</label>
                    <input type="text" name="bRemarks" id="bRemarks" required />
                    <span></span>
                </div><br /><br />
                <div class="transfertxt">
                    <label>To Account Number:</label>
                    <input type="text" name="aNum" id="aNum" required />
                    <span></span>
                </div><br /><br />
                <input type="submit" class="submit-btn" value="Proceed" />
            </form>

        </div>
	
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
                        <img src="img12/twitter.png" alt="twt" width="30px" height="30px" />

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