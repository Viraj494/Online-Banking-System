<?php
    session_start();

  error_reporting(0);  
    //creating connection
    require 'lConfig.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $cnfrmpwd = $_POST['cnfrmpwd'];

    $sql = "UPDATE signup SET Pwd ='$password',cnfrmpwd ='$cnfrmpwd' WHERE email = '$email' ";
    
    if($conn->query($sql) == TRUE)
    {
        echo "<script>alert('Password changed Successfully!')</script>";
        header("Location: login.php");
    }
    else
    {
        echo "Oops! Error While Changing Password";
    }

    
    $conn-> close();
?>
