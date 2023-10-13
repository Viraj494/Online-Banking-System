<?php

//data insertion to the database --------------

$fullname = $_POST['fullname'];
$date = $_POST['date'];
$gender = $_POST['Gender'];
$email= $_POST['mailid'];
$username = $_POST['username'];
$password = $_POST['password'];
$cnfrmpwd = $_POST['cnfrmpwd'];


// ()
global $con;
$con = new mysqli("localhost", "root", "", "online_customer_care");
$sqlCmd = "SELECT * FROM signup";
$resultSet = $con->query($sqlCmd);

$newID = $resultSet->num_rows + 1;

$sqlCmd = "INSERT INTO signup(id,full_name,DOB,gender,email,username,Pwd,cnfrmpwd) VALUES($newID, '$fullname','$date','$gender','$email','$username','$password','$cnfrmpwd')";
$con->query($sqlCmd);

//uploading the image to the specified folder ---------------

//$targetDirectory = "feedbackImages/";
//$targetFile = $targetDirectory . "$newID.jpg";
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);
?>

