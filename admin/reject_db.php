

<?php
include('../config.php');
session_start();

if (isset($_POST['reject'])) {
    $id = $_POST['id'];
    $reason = $_POST['reject_reason'];
    $role = $_POST['role'];
    // echo $role;
    // exit();
    $result = mysqli_query($con, "UPDATE users SET `status`='3',`reject_reason`='$reason' WHERE id='$id'");
    if ($result) {
        $_SESSION['message'] = "Reject Kyc Successfully";
        if ($role == "user") {
            header("location:users.php");
        } else {
            header("location:vendor.php");
        }
    } else {
        $_SESSION['error'] = "Kyc  Not  Reject ";
        if ($role == "user") {
            header("location:users.php");
        } else {
            header("location:vendor.php");
        }
    }
}
?>