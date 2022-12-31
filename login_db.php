<?php
include('config.php');
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $role = $_POST['role'];
   

    $check_email = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email'");
    if (mysqli_num_rows($check_email) == 1) {
        $sql = mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
        if (mysqli_num_rows($sql) == 1) {
           
                foreach ($sql  as $data);
                
                // if ($data['status'] == 0) {
                   
                //     $_SESSION['email'] = $email;
                //     $_SESSION['role'] = $data['role'];
                //     $_SESSION['id'] = $data['id'];
                //     header("location:kyc.php");
                    
                // }
                // else if($data['status'] == 1)
                // {
                //     $_SESSION['msg'] = "Your document is still in under review";
                //     header("location:login.php");
                    
                // }
                // else 
                if($data['status'] == 0 || $data['status'] == 1 || $data['status'] == 2 || $data['status'] == 3 ){
                    if($data['role']=='user')
                    {
                        $_SESSION['user'] = $data;
                        header("location:user/index.php");
                        
                    }else{
                        $_SESSION['vendor'] = $data;
                        header("location:vendor/index.php");
                        
                    }
                    
                } else {
                    $_SESSION['error'] = " Your account is blocked please contact  via mail";
                    header("location:login.php");
                }
            
        } else {
            $_SESSION['error'] = " Password Incorrect";
            header("location:login.php");
        }
    } else {
        $_SESSION['error'] = " Incorrect email please try again";
        header("location:login.php");
    }
} else {
    header("location:login.php");
}
