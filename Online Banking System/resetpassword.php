
<!DOCTYPE html>
<html>
<head>

    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
    <title>Treasury Bank Financial</title>
    <link rel="stylesheet" href="Stly1\resetpassword.css">
    <script src="resetpassword.js"></script>
</head>
<body>
    <div class="center">
        <h2> Reset Password </h2>
        <form action="resetP.php" method="post">
            <div class="txtfield">
                <input name="email" type="text" required />
                <span></span>
                <label>Email</label>
            </div>
  
            <div class="txtfield">
                <input name="password" type="password" required />
                <span></span>
                <label>New Password</label>
            </div>
            <div class="txtfield">
                <input name="cnfrmpwd" type="password" required />
                <span></span>
                <label>Confirm New Password</label>
            </div>
            <input type="submit" value="Reset Password" />
            <div class="signuplink">
                <br />
                Not a member yet ? <a href="signup.php">Sign up</a>
            </div>
        </form>
    </div>
    <div class="vl"></div>



</body>
</html>