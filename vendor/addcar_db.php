<?php
session_start();
include('../config.php');

$get_vendor_id = $_SESSION['vendor']['id'];
$sql = mysqli_query($con, "select * from users where id='$get_vendor_id'");
foreach ($sql as $getvalue) {
    $status = $getvalue['status'];
}
// echo $status;
// exit();
if ((isset($_POST['submit']))) {
    if ($status == 0) {
        // echo 'bahi ya kyc bhare ga phle';
        header("location:..\kyc-vendor.php");
    }
    exit();

    $vendor_id = $_POST['vendor_id'];
    $car_name = $_POST['car_name'];
    $model = $_POST['model'];
    $rent_day = $_POST['rent_day'];
    $price = $_POST['price'];
    $car_class = $_POST['car_class'];
    $price_from = $_POST['price_from'];
    $gear_box = $_POST['gear_box'];
    $max_passengers = $_POST['max_passengers'];
    $fuel = $_POST['fuel'];
    $doors = $_POST['doors'];
    $deposit = $_POST['deposit'];
    $engine_capacity = $_POST['engine_capacity'];
    $city = $_POST['city'];
    $transmission_type = $_POST['transmission_type'];
    $registration_year = $_POST['registration_year'];
    $pincode = $_POST['pincode'];

    // logo
    // $logo = count($_FILES['file']['name']);
    // echo $logo;
    // exit();
    // for($i=0; $i<count($_FILES['file']['name']); $i++) {

    //     $lfilename = $logo['name'][$i];
    //     $lfileerror = $logo['error'][$i];
    //     $lfiletmp = $logo['tmp_name'][$i];
    //     $lfilestore = explode('.', $lfilename);
    //     $lfilecheck = strtolower(end($lfilestore));
    //     $lfilecheckstore = array('jpg', 'png', 'jpeg');

    //     if (in_array($lfilecheck, $lfilecheckstore)) {
    //         $ldestinationfile = '../assets/images/carsposts/' . $lfilename;
    //         move_uploaded_file($lfiletmp, $ldestinationfile);
    //         if($i == 0){
    //             $lsdestinationfile = 'assets/images/carsposts/' . $lfilename;
    //         }else{
    //             $lsdestinationfile .= ',assets/images/carsposts/' . $lfilename;

    //         }


    //     }
    // }
    $filepath = "";
    if ($_FILES['file'] != "") {
        $file = $_FILES['file'];
        for ($i = 0; $i < count($file['name']); $i++) {
            $filename = $file['name'][$i];
            $fileerror = $file['error'][$i];
            $filetmp = $file['tmp_name'][$i];
            $filestore = explode('.', $filename);
            $filecheck = strtolower(end($filestore));
            $filecheckstore = array('jpg', 'png', 'jpeg');
            if (in_array($filecheck, $filecheckstore)) {

                $destinationfile = '../assets/images/carsposts/' . $filename;
                move_uploaded_file($filetmp, $destinationfile);
                if ($i == 0) {
                    $filepath = 'assets/images/carsposts/' . $filename;
                } else {
                    $filepath .= ',' . 'assets/images/carsposts/' . $filename;
                }
            }
        }
    }


    // $myquery = "INSERT INTO `cars`(`title`, `description`, `movie_link`, `download_link`, `trailer_link`, `release_year`,
    // `director_name`, `movie_star`, `country`, `image`, `genre`) VALUES ('$title','$description','$movie_link','$download_link','$trailer_link','$release_year','$director_name','$movie_star','$country','$lsdestinationfile','$category')";

    $myquery = "INSERT INTO `cars` 
    (`vendor_id`, `car_name`, `model`, `rent_day`, `price`, `car_class`, `price_from`, `gear_box`, `max_passengers`, `fuel`, `doors`, `deposit`, `car_varient`, `engine_capacity`, `city`, `transmission_type`, `registration_year`, `pincode`, `status`, `images`)
    VALUES ('$vendor_id','$car_name','$model','$rent_day','$price','$car_class','$price_from','$gear_box','$max_passengers','$fuel','$doors','$deposit','$car_varient','$engine_capacity','$city','$transmission_type','$registration_year','$pincode','0','$filepath')";
    $result = mysqli_query($con, $myquery);
    if ($result) {
        $_SESSION['message'] = " Car successfully add";
        header("location:carlist.php");
    } else {
        $_SESSION['fail'] = " Car add to fail";
        header("location:carlist.php");
    }
}
