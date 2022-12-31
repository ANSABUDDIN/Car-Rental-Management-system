<?php
session_start();
include('config.php');

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $zipCode = $_POST['zipCode'];
    $city = $_POST['city'];
    $userId = $_POST['userId'];
    $phone = $_POST['phonenum'];
    $logo3=$_FILES['adharCardFront'];	
    $lfilename3 = $logo3['name'];
    $lfileerror3 = $logo3['error'];
    $lfiletmp3 = $logo3['tmp_name'];
    $lfilestore3 = explode('.',$lfilename3);
    $lfilecheck3 = strtolower(end($lfilestore3));
    $lfilecheckstore3 = array('jpg','png','jpeg');
    if (in_array($lfilecheck3,$lfilecheckstore3))
    { 
        $ldestinationfile3 ='assets/images/drivingLicenceFront/'.$lfilename3;
        // $lsdestinationfile ='assets/images/ebook/'.$lfilename;
        move_uploaded_file($lfiletmp3,$ldestinationfile3);
    }else
    {
        $_SESSION['error']=" Invalid Adhar Card Formate Please Check Again upload front image again";
        header("location:kyc.php");
       
    }
    $logo4=$_FILES['adharCardBack'];	
    $lfilename4 = $logo4['name'];
    $lfileerror4 = $logo4['error'];
    $lfiletmp4 = $logo4['tmp_name'];
    $lfilestore4 = explode('.',$lfilename4);
    $lfilecheck4 = strtolower(end($lfilestore4));
    $lfilecheckstore4 = array('jpg','png','jpeg');
    if (in_array($lfilecheck4,$lfilecheckstore4))
    { 
        $ldestinationfile4 ='assets/images/drivingLicenceFront/'.$lfilename4;
        // $lsdestinationfile ='assets/images/ebook/'.$lfilename;
        move_uploaded_file($lfiletmp4,$ldestinationfile4);
    }else
    {
        $_SESSION['error']=" Invalid Adhar Card Formate Please Check Again upload back image again";
        header("location:kyc.php");
        
    }


    $check_vendor = mysqli_query($con, "SELECT * FROM `users`
    WHERE `id`='$userId'");
    foreach($check_vendor as $detailcheck_vendor)
    {
        if($detailcheck_vendor['role'] =='vendor')
        {
            $logo=$_FILES['drivingLicenceFront'];	
            $lfilename = $logo['name'];
            $lfileerror = $logo['error'];
            $lfiletmp = $logo['tmp_name'];
            $lfilestore = explode('.',$lfilename);
            $lfilecheck = strtolower(end($lfilestore));
            $lfilecheckstore = array('jpg','png','jpeg');
            if (in_array($lfilecheck,$lfilecheckstore))
            { 
                $ldestinationfile ='assets/images/drivingLicenceFront/'.$lfilename;
                // $lsdestinationfile ='assets/images/ebook/'.$lfilename;
                move_uploaded_file($lfiletmp,$ldestinationfile);
            }else
            {
                $_SESSION['error']=" 22Invalid Formate Please Check Again in";
                header("location:kyc.php");
                exit;
            }
            $logo2=$_FILES['drivingLicenceBack'];	
            $lfilename2 = $logo2['name'];
            $lfileerror2 = $logo2['error'];
            $lfiletmp2 = $logo2['tmp_name'];
            $lfilestore2 = explode('.',$lfilename2);
            $lfilecheck2 = strtolower(end($lfilestore2));
            $lfilecheckstore2 = array('jpg','png','jpeg');
            if (in_array($lfilecheck2,$lfilecheckstore2))
            { 
                $ldestinationfile2 ='assets/images/drivingLicenceFront/'.$lfilename2;
                // $lsdestinationfile ='assets/images/ebook/'.$lfilename;
                move_uploaded_file($lfiletmp2,$ldestinationfile2);
            }else
            {
                $_SESSION['error']=" 33Invalid Formate Please Check Again in";
                header("location:kyc.php");
                exit;
            }
           
            
        }
    }
   


    $result = mysqli_query($con, "UPDATE users SET `first_name`='$firstName',`last_name`='$lastName',`age`='$age',
    `address`='$address',`zipcode`='$zipCode',`city`='$city',`drivingLicenceFront`='$ldestinationfile',
    `drivingLicenceBack`='$ldestinationfile2',`adharCardFront`='$ldestinationfile3',
     `adharCardBack`='$ldestinationfile4',`status`='1',`phonenum`='$phone' WHERE id='$userId'");

    $_SESSION['rev'] = "Your document is still in under review";
    // unset($_SESSION['email']);
    // unset($_SESSION['role']);
    if($detailcheck_vendor['role'] =='vendor'){

        header("location:vendor/index.php");
    }else{
        header("location:user/index.php");

    }
    // unset($_SESSION['id']);
} else {
    header("location:login.php");
}
