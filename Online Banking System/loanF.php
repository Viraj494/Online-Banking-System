<?php
       
    //linking configuration file
        require 'lConfig.php';
        error_reporting(0);
        
        $title = $_POST['title'];
        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $bMonth = $_POST['bmonth'];
        $bDay = $_POST['bday'];
        $bYear = $_POST['byear'];
        $maritalS= $_POST['maritalS'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $streeta1 = $_POST['streeta1'];
        $streeta2 = $_POST['streeta2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pstalCode = $_POST['postalC'];
        $livingS = $_POST['livingS'];
        

    
        $sql="INSERT INTO loan_contact_details(Title,fName,lName,bMonth,bDay,bYear,maritalS,email,phone,streetA1,streetA2,city,state,postalZipCode,livingY)
        VALUES('$title','$fName', '$lName', '$bMonth', '$bDay', '$bYear','$maritalS','$email','$phone','$streeta1','$streeta2','$city','$state','$pstalCode','$livingS')";

        
            
        $result = mysqli_query($conn, $sql);
        
		header("location:loan.php");
            
       $conn->close();
?>
<?php
       
    //linking configuration file
        require 'lConfig.php';
        error_reporting(0);
        
        $fullName=$_POST['fullName'];
        $loanT = $_POST['loanT'];
        $eName = $_POST['eName'];
        $occu = $_POST['occupation'];
        $experience = $_POST['experience'];
        $mIncome = $_POST['mIncome'];
        $mRent = $_POST['mRent'];
        $pAmount = $_POST['pAmount'];
        $comments = $_POST['comments'];
        $aggreed = $_POST['yes'];
    

        $sql="INSERT INTO loan_employeement_details(fullName,loanType,pEmployer,occupation,experience,grossMonthlyIncome,monthlyRentMortgage,dwnPayment,comments,aggreed)
        VALUES('$fullName','$loanT','$eName', '$occu', '$experience', '$mIncome', '$mRent ','$pAmount','$comments','$aggreed')";
            
        $result = mysqli_query($conn, $sql);

    
            
       $conn->close();
?>