<?php
    $servername ="localhost";
    $username= "root";
    $password = "";
    $dbname = "online_customer_care";

   //The connection object
    global $conn;
   $conn = new mysqli($servername, $username,$password,$dbname);

   //check connection
   if($conn->connect_error)
   {
       die("Connection failed:". $conn->connect_error);
   }

   
 ?>