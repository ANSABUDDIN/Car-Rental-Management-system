<?php
include('config.php');
session_start();

if (isset($_POST['submit']) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    // $email = $_POST['email'];

  

    $check_email = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email'");


    if (mysqli_num_rows($check_email) == 1) {
        $_SESSION['error'] = "Email is Already Register !";
        header("location:register.php");
    } else {
      
         $result = mysqli_query($con, "INSERT INTO `users`(`username`, `email`, `password`, `role`)
          VALUES ('$username','$email','$password','$role')");
          if($result)
          {
            $check_id = mysqli_query($con, "SELECT * FROM `users`
            WHERE `email`='$email' AND `role`='$role' AND `status`='0'");
                foreach($check_id as $kycdetail)
                {
                    $_SESSION['id'] = $kycdetail['id'];
                }
              $_SESSION['email'] = $email;
              $_SESSION['role'] = $role;
          }
         
        

          header("location:login.php");

    }
} else {
    header("location:register.php");
}
