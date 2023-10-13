<?php
   	   
    //linking configuration file
		require 'lConfig.php';
		
		
		$transferType = $_POST['tranferT'];
		$amount = $_POST['transferA'];
		$transferMode = $_POST['transferMode'];
		$sRemarks = $_POST['sRemarks'];
		$bRemarks = $_POST['bRemarks'];
		$aNum = $_POST['aNum'];
	

		$sql="INSERT INTO transfer_money(transferType,transferAmount,transferMode,sRemarks,bRemarks,accountNum)
		VALUES('$transferType','$amount', '$transferMode', '$sRemarks', '$bRemarks', '$aNum ')";
			
		$result = mysqli_query($conn, $sql);
		
		  if($conn->query($sql) == TRUE)
    {
        echo "<script>alert('Successfully Transfered!')</script>";
        
    }
    else
    {
        echo "Oops! Something went wrong!";
    }
			
	   $conn->close();
?>