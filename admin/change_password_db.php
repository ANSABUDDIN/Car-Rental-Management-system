<?php
session_start();
 include("../config.php");
    if(isset($_POST["submit"]) and !empty($_POST["old_pass"]) and !empty($_POST["new_pass"]) and !empty($_POST["re_pass"]) )
      {
        $oldpass  = $_POST["old_pass"];
        $newpass = $_POST["new_pass"];
        $confirmpass = $_POST["re_pass"];

        $studentid=$_SESSION['admin']['id'];
        if($_SESSION['admin']['password'] == $oldpass)
        {
            if($newpass === $confirmpass)
            {
                $result = mysqli_query($con,"UPDATE admin SET `password`='$confirmpass' WHERE id='$studentid'");
                    if($result)
                    {
                        $_SESSION["message"]="Password Sucessfully Updated!";          
                        header("location:change_password.php");
                        
                    }
                    else
                    {
                        $_SESSION["error"]="Update fail";
                        header("location:change_password.php");
                    }
            }else
            {
                $_SESSION["error"]="Password Does Not Match";
                header("location:change_password.php");
            }
        }
          else
        {
            $_SESSION["error"]="Incorrect Password";
            header("location:change_password.php");
        }	  	
    }else
      {
          $_SESSION["error"]="Fill All Field's";
          header("location:change_password.php");
      }
    
?>
