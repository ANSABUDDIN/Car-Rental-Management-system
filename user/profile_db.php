<?php
include('../config.php');
session_start();

if (isset($_POST['edit'])) {
    $userId = $_POST['user-id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    // $profile_img = $_POST['profile_img'];
    $image = "";
    if($_FILES['profile_img']['name'] != "")
    {
        $logo3=$_FILES['profile_img'];	
        $lfilename3 = $logo3['name'];
        $lfileerror3 = $logo3['error'];
        $lfiletmp3 = $logo3['tmp_name'];
        $lfilestore3 = explode('.',$lfilename3);
        $lfilecheck3 = strtolower(end($lfilestore3));
        $lfilecheckstore3 = array('jpg','png','jpeg');
        if (in_array($lfilecheck3,$lfilecheckstore3))
        { 
            $image =",`profile_img`='../assets/images/profile_img/".$lfilename3."'";
            // $lsdestinationfile ='assets/images/ebook/'.$lfilename;
            move_uploaded_file($lfiletmp3,$image);
            
        }else
        {
            $_SESSION['error']=" Invalid Adhar Card Formate Please Check Again upload front image again";
            header("location:profile.php");
        }
    }
    

    // echo $ldestinationfile3;
    // exit();



    



    //  $result = mysqli_query($con, "INSERT INTO `users`(`username`, `email`, `password`, `role`)
    //   VALUES ('$username','$email','$password','$role')");
    $result = mysqli_query($con, "UPDATE users SET   
    `first_name`='$first_name',`last_name`='$last_name',`phonenum`='$phone' $image WHERE id='$userId'");
    if ($result) {
        header("location:profile.php");
        $_SESSION['message'] = "Update Successfully !";
    } else {
        header("location:profile.php");
        $_SESSION['fail'] = "Update Not Working !";
    }
} else {
    // header("location:profile.php");
}
