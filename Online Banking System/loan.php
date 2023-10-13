

<!DOCTYPE html>

<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
    <title>Treasury Bank Official</title>
    <link rel="stylesheet" href="Stly1\loan.css">
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
        <a href="#loans">Loans</a>
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
    <style>
        .vl1 {
            border-left: 3px solid black;
            height: 1070px;
        }
    </style>


    <div class="vl1"></div>

    <div class="border2" style="border-style: groove; border-color: black"></div>


    <h1 class="loan">Loan Application Form</h1>
   

    <div class="contactI">
        <h4 class="contact">Contact details</h4><br />
        <form method="post" action="loanF.php">
            <div class="name" style="width:200px;">
                <label>Title*</label><br />
                <select name="title">
                    <option value="0">Please Select:</option>
                    <option value="1">Mr</option>
                    <option value="2">Mrs</option>
                    <option value="3">Ms</option>
                </select>
            </div><br />
            <div class="name">
                <label>Name*</label><br />
                <input type="text" name="fname" id="fname" required />
                <span></span>
                <label class="names">First Name</label>

                <input type="text" name="lname" id="lname" required />
                <span></span>
                <label class="names">Last Name</label>
            </div><br />
            <div class="name" style="width:200px">
                <label>Birth Date*</label><br />
                <label class="names1">Month</label>
                <select name="bmonth">
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
                <label class="names1">Day</label>
                <input type="text" name="bday" id="bday" required style="width:50px" />
                <span></span><br />
                <label class="names1">Year</label>
                <input type="text" name="byear" id="byear" required style="width:50px" />
                <span></span>

            </div><br />
            <div class="name">
                <p>Marital Status</p> <br />
                <input type="radio" id="Single" name="maritalS" value="Single">
                <label class="names1">Single</label><br />
                <input type="radio" id="Married" name="maritalS" value="Married ">
                <label class="names1">Married</label><br />
                <input type="radio" id="Other" name="maritalS" value="Other">
                <label class="names1">Other</label><br />
            </div><br />
            <div class="name">
                <label>Email*</label><br />
                <input type="text" name="email" id="email" required />
                <span></span>
                <label class="names">ex:example1@gmail.com</label>
            </div><br />
            <div class="name">
                <label>phone*</label><br />
                <input type="text" name="phone" id="phone" required />
                <span></span>
                <label class="names">ex:(0xx) xxx xxxx</label>
            </div><br />
            <div class="name">
                <label>Address*</label><br /><br />
                <input type="text" name="streeta1" id="streeta" required style="width:200px" />
                <span></span>
                <label class="names">Address Line 1</label>
                <input type="text" name="streeta2" id="streeta" required style="width:200px" />
                <span></span>
                <label class="names">Address Line 2</label><br /><br />
                <input type="text" name="city" id="city" required style="width:100px" />
                <span></span>
                <label class="names">City</label>
                <input type="text" name="state" id="state" required style="width:100px" />
                <span></span>
                <label class="names">State/Province</label><br /><br />
                <input type="text" name="postalC" id="postalC" required style="width:100px" />
                <span></span>
                <label class="names">Postal/Zip Code</label>
            </div><br />
            <div class="name">
                <p>How long have you lived at your given address?*</p> <br />
                <input type="radio" id="0-1 Year" name="livingS" value="0-1 Year">
                <label class="names1">0-1 Year</label><br /><br />
                <input type="radio" id="1-2 Years" name="livingS" value="1-2 Years">
                <label class="names1">1-2 Years</label><br /><br />
                <input type="radio" id="2-3 Years" name="livingS" value="2-3 Years">
                <label class="names1">2-3 Years</label><br /><br />
                <input type="radio" id="3-4 Years" name="livingS" value="3-4 Years">
                <label class="names1">3-4 Years</label><br /><br />
                <input type="radio" id="5+ Years" name="livingS" value="5+ Years">
                <label class="names1">5+ Years</label><br /><br />
            </div><br />
            <input type="submit" name="submit" value="First Submit This" /><br><br>
            <h4>Don't Fill this again if you have already done.</h4>
        </form>

    </div>
    <div class="employeementI">
        <h4 class="employment">Employment Information</h4><br />
        <form method="post" action="loanF.php">
        <div class="name">
                <label>Full Name*</label><br />
                <input type="text" name="fullName" id="fullName" required style="width:300px" />
                <span></span>
             </div><br />
            <div class="name" style="width:200px;">
                <label>Loan Type*</label><br />
                <select name="loanT">
                    <option value="0">Select Loan Type:</option>
                    <option value="1">Personal Loans</option>
                    <option value="2">Student Loans</option>
                    <option value="3">Auto Loans</option>
                    <option value="4">Mortgage Loans</option>
                    <option value="5">Home Equity Loans</option>
                    <option value="6">Credit-Builder Loans</option>
                    <option value="7">Debt Consolidation Loans</option>
                    <option value="8">Payday Loans</option>
                </select>
            </div><br />
             <div class="name">
                <label>Present Employer*</label><br />
                <input type="text" name="eName" id="eName" required style="width:300px" />
                <span></span>
             </div><br />
            <div class="name">
                <label>Occupation*</label><br />
                <input type="text" name="occupation" id="occupation" required style="width:300px"  />
                <span></span>
             </div><br />
             <div class="name">
                <p>Years of experience*</p> <br />
                <input type="radio" id="0-1 Year" name="experience" value="0-1 Year">
                <label class="names1">0-1 Year</label><br /><br />
                <input type="radio" id="1-2 Years" name="experience" value="1-2 Years">
                <label class="names1">1-2 Years</label><br /><br />
                <input type="radio" id="2-3 Years" name="experience" value="2-3 Years">
                <label class="names1">2-3 Years</label><br /><br />
                <input type="radio" id="3-4 Years" name="experience" value="3-4 Years">
                <label class="names1">3-4 Years</label><br /><br />
                <input type="radio" id="5+ Years" name="experience" value="5+ Years">
                <label class="names1">5+ Years</label><br /><br />
            </div><br /><br />
            <div class="name">
                <label>Gross monthly income*</label><br />
                <input type="text" name="mIncome" id="mIncome" required />
                <span></span>
                <label class="names">ex: xxx xxx</label>
             </div><br />
            <div class="name">
                <label>Monthly rent/mortgage*</label><br />
                <input type="text" name="mRent" id="mRent" required />
                <span></span>
                <label class="names">ex:0 for no rent/mortgage</label>
             </div><br />
             <div class="name">
                <label>Down Payment Amount*</label><br />
                <input type="text" name="pAmount" id="pAmount" required />
                <span></span>
                <label class="names">ex:0 for no rent/mortgage</label>
             </div><br />
            <div class="name">
                <label>Comments:</label><br />
                <input type="text" name="comments" id="comments" required style="width: 400px; height: 100px;"/>
                <span></span><br />
                <label class="names">I hereby agree that the information given is true, accurate, and complete as of the date of this application submission</label>
             </div><br />
            <input type="radio" id="yes" name="yes" value="yes">
            <label class="names1">Yes</label><br /><br />
            <input type="submit" name="submit" value="Send Application Now" />
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