<!DOCTYPE html>

<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
    <title> Treasury Bank Financial</title>
    <link rel="stylesheet" href="Stly1\createacc.css">
</head>
<body>
    <script src="JS/pswrd.js"></script>
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
        <a href="transfermoney.php">Transfer Money</a>
        <a href="quickpay.php">Quick Pay</a>
        <a href="create.php">Open an Account</a>
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

    <style>
        .vl1 {
            border-left: 3px solid black;
            height: 1070px;
        }
    </style>

    <div class="border2" style="border-style: groove; border-color: black"></div><br><br>


    <h1 class="account">Create New Account</h1>
   

    <div class="contactI">
        <h4 class="contact">Personal Details</h4><br />
        <form method="post">
            <div class="name" style="width:200px;">
                <label>First Name*</label><br />
                <input type="text" placeholder="Enter your first name" required />
            </div><br />

            <div class="name" style="width:200px;">
                <label>Last Name</label><br />
                <input type="text" placeholder="Enter your last name" />
            </div><br />

            <div class="name" style="width:200px">
                <label>Date of Birth*</label><br /><br>
                <label class="names1">Month</label>
                <select>
                    <option value="0"></option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select><br />
                <label class="names1">Day  </label>
                <input type="text" required style="width:50px" />
                <span></span><br />
                <label class="names1">Year</label>
                <input type="text" required style="width:50px" />
                <span></span></div><br>

            <div class="name">
                <label>Phone Number</label><br />
                <input type="tel" placeholder ="Enter phone number here" />
                <span></span>
            </div><br />

            <div class="name">
                <label>Email</label><br />
                <input type="email" placeholder ="Enter email address here" />
                <span></span>
            </div><br />

            <div class="name">
                <label>Address</label><br />
                <input type="text" placeholder="Enter address here" />
                <span></span>
            </div><br />
            
            <div class="name" style="width:200px">
                <label>City</label><br />
                <input type="text" placeholder="Enter city name here" />
            </div><br />

            <div class="name">
                <label>Postal / Zip Code*</label><br />
                <input type="text" placeholder ="Enter zip code here" required />
                <span></span>
            </div><br />
        </div></form>


            <div class="account1">
        <h4 class="contact">Account Details</h4><br />
        <form method="post">
            <div class="name" style="width:200px;">
                <label>Account Type*</label><br />
                <select>
                    <option value="0"></option>
                    <option value="1">Regular Savings Account</option>
                    <option value="2">Childrens Savings Account</option>
                    <option value="3">Youth Account</option>
                    <option value="4">Fixed Deposit Account</option>
                    <option value="5">Salary Account</option>
                    <option value="6">Recurring Deposit Account</option>
                    <option value="7">NRI Account</option>
                </select>
            </div><br />

            <div class="name" style="width:200px">
                <label>Preferred Currency*</label><br />
                <select>
                    <option value="0"></option>
                    <option value="1">LKR</option>
                    <option value="2">USD</option>
                    <option value="3">EURO</option>
                </select><br />
            </div><br />

            <div class="name">
                <label>Preferred Branch</label><br />
                <input type="password" placeholder ="Enter branch here" />
                <span></span>
            </div><br />
    

            <div class="name">
                <label>NIC Number*</label><br />
                <input type="number" placeholder ="Enter NIC number here" required />
                <span></span>
            </div><br />

            <div class="name">
                <label>Deposit Amount*</label><br />
                <input type="number" placeholder ="Enter deposit amount" required />
                <span></span>
            </div><br />

            <div class="name">
                <label>Password</label><br />
                <input type="password" id="myInput" placeholder ="Enter password here" />
                <input type="checkbox" onclick="myFunction()"> Show Password
                <span></span>
            </div><br />

            <label class="names">By creating account, you agree to accept <a href="https://www.sc.com/commercial/booklet/pdf/CB_Booklet_UG_2018_v1.pdf"> <p style="color:#1E90FF; font-weight:bold; font-style:italic;"> Privacy Policy & Terms of Service.</p>
            </a> </label><br><br>

            <label class="names">I hereby agree that the information given is accurate to the best of my knowledge.</label><br><br>
            <input type="radio" id="agree" name="agree" value="agree">
            <label class="names">Agree</label><br><br>
            <input type="submit" value="Create Account" class="submit-btn">
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