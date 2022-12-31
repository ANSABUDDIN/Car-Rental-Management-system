<?php
include('./config.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.php");
} else {
    if ($_SESSION['user']['status'] == 0) {
        $_SESSION['role'] = $data['role'];
        $_SESSION['id'] = $data['id'];
        header("location:kyc.php");
    } else if ($_SESSION['user']['status'] == 1) {
        $_SESSION['rev'] = "Your document is still in under review";
        header("location:user/index.php");
    } else if ($_SESSION['user']['status'] == 2) {
        // echo $_SESSION['user']['status'];
        // exit();
        if (isset($_POST['submit'])) {
            $car_id = $_POST['car_id'];
            $user_id = $_POST['user_id'];
            $vendor_id = $_POST['vendor_id'];
            $puLocation = $_POST['puLocation'];
            $doLocation = $_POST['doLocation'];
            $puDate = $_POST['puDate'];
            $doDate = $_POST['doDate'];
            $puTime = $_POST['puTime'];
            $doTime = $_POST['doTime'];
            // $car_class = $_POST['car_class'];
            // $car_fuel = $_POST['car_fuel'];
            $car_name = $_POST['car_name'];
            $car_price = $_POST['price'];
            $result = mysqli_query($con, "INSERT INTO `bookings`(`car_id`, `vendor_id`,  `pickup_Location`, `dropoff_Location`, `pickup_Date`, `dropoff_Date`, `pickup_Time`, `dropoff_Time`, `car_class`, `car_fuel`,`status` ,`user_id` ,`car_name`,`price` )VALUES
                ('$car_id','$vendor_id','$puLocation','$doLocation','$puDate','$doDate','$puTime','$doTime','$car_class','$car_fuel','0','$user_id' ,'$car_name','$car_price')");

            if ($result) {
                $_SESSION['message'] = " Booking Successfull";
                header("location:car-single-page.php?car=$car_id");
            } else {
                $_SESSION['fail'] = " Booking Fail";
                header("location:car-single-page.php?car=$car_id");
                echo "masla  ha bhai";
            }
        }
    }
    // echo $_SESSION['user']['status'];
    // if ($_SESSION['user']['status'] == 0) {
    //     // $_SESSION['email'] = $email;
    //     $_SESSION['role'] = $data['role'];
    //     $_SESSION['id'] = $data['id'];
    //     header("location:kyc.php");
    // } else if ($data['status'] == 1) {
    //     $_SESSION['msg'] = "Your document is still in under review";
    //     header("location:login.php");
    // } else if (isset($_POST['submit'])) {
    //     $car_id = $_POST['car_id'];
    //     $user_id = $_POST['user_id'];
    //     $vendor_id = $_POST['vendor_id'];
    //     $puLocation = $_POST['puLocation'];
    //     $doLocation = $_POST['doLocation'];
    //     $puDate = $_POST['puDate'];
    //     $doDate = $_POST['doDate'];
    //     $puTime = $_POST['puTime'];
    //     $doTime = $_POST['doTime'];
    //     // $car_class = $_POST['car_class'];
    //     // $car_fuel = $_POST['car_fuel'];
    //     $car_name = $_POST['car_name'];
    //     $car_price = $_POST['price'];
    //     $result = mysqli_query($con, "INSERT INTO `bookings`(`car_id`, `vendor_id`,  `pickup_Location`, `dropoff_Location`, `pickup_Date`, `dropoff_Date`, `pickup_Time`, `dropoff_Time`, `car_class`, `car_fuel`,`status` ,`user_id` ,`car_name`,`price` )VALUES
    //     ('$car_id','$vendor_id','$puLocation','$doLocation','$puDate','$doDate','$puTime','$doTime','$car_class','$car_fuel','0','$user_id' ,'$car_name','$car_price')");

    //     if ($result) {
    //         $_SESSION['message'] = " Booking Successfull";

    //         header("location:car-single-page.php?car=$car_id");
    //     } else {
    //         $_SESSION['fail'] = " Booking Fail";
    //         header("location:car-single-page.php?car=$car_id");
    //         echo "masla  ha bhai";
    //     }
    // } else {
    //     header("location:index.php");
    // }
}

// if (isset($_POST['submit'])) {
//     $car_id = $_POST['car_id'];
//     $user_id = $_POST['user_id'];
//     $vendor_id = $_POST['vendor_id'];
//     $puLocation = $_POST['puLocation'];
//     $doLocation = $_POST['doLocation'];
//     $puDate = $_POST['puDate'];
//     $doDate = $_POST['doDate'];
//     $puTime = $_POST['puTime'];
//     $doTime = $_POST['doTime'];
//     // $car_class = $_POST['car_class'];
//     // $car_fuel = $_POST['car_fuel'];
//     $car_name = $_POST['car_name'];
//     $car_price = $_POST['price'];

//     // echo $doDate . $puDate . $car_fuel . $car_id . $vendor_id . $puLocation  . $doLocation . $puTime . $doDate . $puTime . $doDate . $puTime . $doTime . $car_class . $car_fuel;



//     $result = mysqli_query($con, "INSERT INTO `bookings`(`car_id`, `vendor_id`,  `pickup_Location`, `dropoff_Location`, `pickup_Date`, `dropoff_Date`, `pickup_Time`, `dropoff_Time`, `car_class`, `car_fuel`,`status` ,`user_id` ,`car_name`,`price` )VALUES
//   ('$car_id','$vendor_id','$puLocation','$doLocation','$puDate','$doDate','$puTime','$doTime','$car_class','$car_fuel','0','$user_id' ,'$car_name','$car_price')");




//     if ($result) {
//         $_SESSION['message'] = " Booking Successfull";

//         header("location:car-single-page.php?car=$car_id");
//     } else {
//         $_SESSION['fail'] = " Booking Fail";
//         header("location:car-single-page.php?car=$car_id");
//         echo "masla  ha bhai";
//     }
//     // header("location:index.php");
// } else {
//     header("location:index.php");
// }