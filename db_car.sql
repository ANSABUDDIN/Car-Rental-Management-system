-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 05:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car-rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `date`) VALUES
(1, 'admin', 'admin@gmail.com', 'abc', 'admin', '2022-12-31 16:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `car_id` varchar(200) NOT NULL,
  `car_name` varchar(200) NOT NULL,
  `vendor_id` varchar(200) NOT NULL,
  `pickup_Location` varchar(200) NOT NULL,
  `dropoff_Location` varchar(200) NOT NULL,
  `pickup_Date` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `dropoff_Date` varchar(200) NOT NULL,
  `pickup_Time` varchar(200) NOT NULL,
  `dropoff_Time` varchar(200) NOT NULL,
  `car_class` varchar(200) NOT NULL,
  `car_fuel` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `car_id`, `car_name`, `vendor_id`, `pickup_Location`, `dropoff_Location`, `pickup_Date`, `price`, `dropoff_Date`, `pickup_Time`, `dropoff_Time`, `car_class`, `car_fuel`, `status`, `user_id`) VALUES
(25, '36', 'civic', '19', 'karahi', 'lahor', '21/12/2022', '12000', '30/12/2022', '09:10', '09:50', '', '', 0, '<br />\r\n<b>Notice</b>:  Undefined variable: _SESSION in <b>C:xampphtdocsookcar_db (2)ookcar_dbcar-single-page.php</b> on line <b>172</b><br />\r\n<br />\r\n<b>Notice</b>:  Trying to access array offset '),
(26, '36', 'civic', '19', 'karahi', 'lahor', '21/12/2022', '12000', '31/12/2022', '09:10', '09:50', '', '', 0, '<br />\r\n<b>Notice</b>:  Undefined variable: _SESSION in <b>C:xampphtdocsookcar_db (2)ookcar_dbcar-single-page.php</b> on line <b>172</b><br />\r\n<br />\r\n<b>Notice</b>:  Trying to access array offset '),
(28, '36', 'civic', '19', 'karahi', 'lahor', '21/12/2022', '12000', '22/09/2023', '00:30', '09:50', '', '', 0, '19 '),
(29, '38', 'marcedes', '27', 'karahi', 'lahor', '30/10/2022', 'lmlml', '20/09/2022', '09:10', '11:55', '', '', 1, '26 ');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `car_name` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `rent_day` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `price_detail` text NOT NULL,
  `car_class` varchar(200) NOT NULL,
  `price_from` varchar(200) NOT NULL,
  `gear_box` varchar(200) NOT NULL,
  `max_passengers` varchar(200) NOT NULL,
  `fuel` varchar(200) NOT NULL,
  `doors` varchar(200) NOT NULL,
  `deposit` varchar(200) NOT NULL,
  `car_varient` varchar(200) NOT NULL,
  `engine_capacity` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `transmission_type` varchar(200) NOT NULL,
  `registration_year` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `vendor_id`, `car_name`, `model`, `rent_day`, `price`, `price_detail`, `car_class`, `price_from`, `gear_box`, `max_passengers`, `fuel`, `doors`, `deposit`, `car_varient`, `engine_capacity`, `city`, `transmission_type`, `registration_year`, `pincode`, `status`, `images`) VALUES
(33, 12, 'vigo', '2008', 'day', '3000', '', 'suv', '2000', '200', '6', 'Fuel', '4', '200', '', '1500', 'karachi', 'Transmission Type', '2007', '123456', 0, 'assets/images/carsposts/car02.png,assets/images/carsposts/car03.png,assets/images/carsposts/pickup01.png,assets/images/carsposts/pickup02.png,assets/images/carsposts/pickup03.png,assets/images/carsposts/pickup04.png,assets/images/carsposts/pickup05.png,assets/images/carsposts/pickup06.png'),
(34, 12, 'civic ', '2002', 'day', '3000', '', 'suv', '2000', '200', '3', 'Octen', '5', '313', '', '', 'karachi', '54135', '123456789', '123456', 1, 'assets/images/carsposts/popular-07.png,assets/images/carsposts/popular-08.png,assets/images/carsposts/popular-09.jpg,assets/images/carsposts/popular-10.jpg,assets/images/carsposts/popular-14.jpg,assets/images/carsposts/popular-15.jpg,assets/images/carsposts/popular-16.jpg,assets/images/carsposts/popular-18.jpg,assets/images/carsposts/popular-20.jpg,assets/images/carsposts/popular-21.jpg,assets/images/carsposts/popular-22.jpg'),
(35, 20, 'khtara new model', '2025 model', 'rent', '24000', '', 'compact', '32', '323', '32', 'Octen', '32323', '23232', '', '323', 'hassan', '33203', '4900', '3232', 1, 'assets/images/carsposts/ambulance01.png,assets/images/carsposts/ambulance02.png,assets/images/carsposts/ambulance03.png,assets/images/carsposts/car02.png'),
(36, 19, 'civic', '2022', 'day', '12000', '', 'suv', '12', '12', '12', 'Fuel', '5', '1200', '', '12000', 'karachi', '12', '2020', '123456', 1, 'assets/images/carsposts/popular-07 - Copy.png,assets/images/carsposts/popular-08 - Copy.png,assets/images/carsposts/popular-09 - Copy.jpg,assets/images/carsposts/popular-10 - Copy.jpg,assets/images/carsposts/popular-14 - Copy.jpg,assets/images/carsposts/popular-15 - Copy.jpg,assets/images/carsposts/popular-16 - Copy.jpg,assets/images/carsposts/popular-18 - Copy.jpg,assets/images/carsposts/popular-20 - Copy.jpg,assets/images/carsposts/popular-21 - Copy.jpg,assets/images/carsposts/popular-22 - Copy.jpg'),
(37, 22, 'Tesla 21 Model', '2023', 'day', '5000', '', 'suv', '2300', '52', '12', 'Fuel', '55', '77', '', '22', 'karachi', '87', '1899', '23456', 1, 'assets/images/carsposts/ambulance01.png,assets/images/carsposts/ambulance02.png,assets/images/carsposts/ambulance03.png'),
(38, 27, 'marcedes', '12', 'rent', 'lmlml', '', 'suv', '32000', '12000', '123456', 'Fuel', '4', '121212', '', '12', '12', '12', '12', '1221', 0, 'assets/images/carsposts/blog-two.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_img` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `reject_reason` text NOT NULL,
  `age` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `drivingLicenceFront` text NOT NULL,
  `drivingLicenceBack` text NOT NULL,
  `adharCardFront` text NOT NULL,
  `adharCardBack` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenum` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `profile_img`, `username`, `reject_reason`, `age`, `address`, `zipcode`, `city`, `drivingLicenceFront`, `drivingLicenceBack`, `adharCardFront`, `adharCardBack`, `email`, `phonenum`, `status`, `role`, `password`) VALUES
(12, 'hammad', 'hassan', '', 'ansab', '', '18', '', '1302', 'hassan', 'assets/images/drivingLicenceFront/popular-09.jpg', 'assets/images/drivingLicenceFront/popular-10.jpg', 'assets/images/drivingLicenceFront/popular-09.jpg', 'assets/images/drivingLicenceFront/popular-10.jpg', 'hammadhassan245@gmail.com', '2147483647', 2, 'vendor', '123456'),
(18, 'hammad', 'hassan', '', 'admin', '', '123', 'c-117-8', '213', 'khan', '', '', 'assets/images/drivingLicenceFront/popular-09.jpg', 'assets/images/drivingLicenceFront/popular-10.jpg', 'admin@gmail.com', '2147483647', 2, 'user', '123'),
(19, 'Yousaf', 'hassan 123315', '../assets/images/profile_img/blog-two.png', 'Muhammad yousaf', '', '18', 'c-117-8', '1210', 'hassan', '', '', 'assets/images/drivingLicenceFront/blog-two.png', 'assets/images/drivingLicenceFront/blog-one.png', 'yousuf4249@gmail.com', '034326526', 2, 'user', 'Yousaf123@'),
(26, 'user', 'khan', '../assets/images/profile_img/blog-two.png', 'user01', '', '15', 'abc', '123456', 'karachi', '', '', 'assets/images/drivingLicenceFront/blog-one.png', 'assets/images/drivingLicenceFront/blog-two.png', 'user@gmail.com', '03460864256', 2, 'user', '123456'),
(27, 'hammad', 'hassan', '../assets/images/profile_img/blog-three.png', 'vendor01', '', '18', 'c-117-8', '02.0', '2103', 'assets/images/drivingLicenceFront/blog-one.png', 'assets/images/drivingLicenceFront/blog-three.png', 'assets/images/drivingLicenceFront/blog-two.png', 'assets/images/drivingLicenceFront/blog-one.png', 'vendor@gmail.com', '03460864256', 2, 'vendor', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
