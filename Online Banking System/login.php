<?php
	session_start();
	
	//creting connection
	require 'lConfig.php';
	

	
	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM signup WHERE username ='$username' AND Pwd = '$password' ";

		$result = mysqli_query($conn, $sql);

		if($result->num_rows>0)
		{
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			header("Location: home2.php");
		}
		else
		{
			echo"<script>alert('Oops! Seems like user username or password is wrong')</script>";
		}
	}
	
?>




<!DOCTYPE html>

<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,500;1,300&display=swap" rel="stylesheet">
    <title>Treasury Bank Financial</title>
    <link rel="stylesheet" href="Stly1\login.css">
</head>
<body>
    
        <div class="center">
            <h2>Welcome Back, User</h2>
            <form actions="login.php" method="POST">
                <div class="txtfield">
                    <input type="text"  id="username" name="username" required  />
                    <span></span>
                    <label>Username or Email</label>
                </div>
                <div class="txtfield">
                    <input type="password" id="pwd" name="password" required />
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="pass"><a href="resetpassword.php">Forgot Password?</a></div>
                <input type="submit" name="login" id="submitBtn" value="Log In" >
                <div class="signuplink"><br />
                    Not a member?  <a href="signup.php">Sign Up</a>
                </div>
            </form>
        </div>
        <div class="vl"></div>
        


</body>
</html>