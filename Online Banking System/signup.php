<!DOCTYPE html>

<html>
<head>
    <title>Banking</title>
    <link rel="stylesheet" href="Stly1\signup.css">
</head>
<body>
    <div class="center">
        <h2>New User Registration </h2>
        <form method="post" action="function.php">
            <div class="txtfield">
                <input type="text" name="fullname" />
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="txtfield1">
                <div class="date">
                    <label>Date of Birth</label>
                </div>
                <input type="date" name="date">
                <span></span>
            </div>
            <p> Gender </p>
            <input type="radio" required id="Male" name="Gender" value="Male">
            <label for="Male">Male</label>
            <input type="radio" required id="Female" name="Gender" value="Female">
            <label for="Female">Female</label>
            <div class="txtfield">
                <input type="email" name="mailid" />
                <span></span>
                <label>Email</label>
            </div>
            <div class="txtfield">
                <input type="text" name="username" />
                <span></span>
                <label>Username</label>
            </div>
            <div class="txtfield">
                <input type="password" name="password" />
                <span></span>
                <label>Password</label>
            </div>
            <div class="txtfield">
                <input type="password" name="cnfrmpwd" />
                <span></span>
                <label>Confirm Password</label>
            </div>
            <input type="submit" value="Sign Up" />
            <div class="signuplink">
                <br />
                already a member? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
    <div class="vl"></div>



</body>
</html>