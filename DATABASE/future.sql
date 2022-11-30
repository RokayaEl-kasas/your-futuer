-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 04:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futuer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'your.futuer2022@gmail.com', 'Yy123456789');

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL,
  `avg` int(3) NOT NULL DEFAULT 50,
  `major_image` varchar(200) NOT NULL DEFAULT 'images/major-images/tec.png',
  `name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `avg`, `major_image`, `name`) VALUES
(2, 90, 'images/major-images/medical.png', 'Medical'),
(3, 85, 'images/major-images/engineer.png', 'Engineering'),
(4, 70, 'images/major-images/artistic.png', 'Artistic'),
(5, 80, 'images/major-images/tec.png', 'Technique'),
(6, 60, 'images/major-images/literacy.png', 'Literary'),
(7, 65, 'images/major-images/airport.png', 'Aviation'),
(8, 70, 'images/major-images/Administrative.png', 'Administrative'),
(9, 75, 'images/major-images/education.png', 'Diplomas');

-- --------------------------------------------------------

--
-- Table structure for table `sub_majors`
--

CREATE TABLE `sub_majors` (
  `id` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'images/major-images/Engineering/electrical.png',
  `name` varchar(200) NOT NULL,
  `btn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_majors`
--

INSERT INTO `sub_majors` (`id`, `major_id`, `image`, `name`, `btn`) VALUES
(1, 8, 'images/major-images/Administrative/business administration.png', 'Business Administration', 'business_administration.php'),
(2, 8, 'images/major-images/Administrative/management information system.png', 'Management Information', 'management_information.php'),
(3, 8, 'images/major-images/Administrative/accounting.png', 'accounting', 'accounting.php'),
(5, 4, 'images/major-images/Artistic/Graphic design.png', 'Graphic design', 'Graphic_design.php'),
(6, 4, 'images/major-images/Artistic/fashion.png', 'Fashion', 'fashion.php'),
(7, 4, 'images/major-images/Artistic/Internal design.png', 'Internal design', 'Internal_design.php'),
(8, 4, 'images/major-images/Artistic/Modern Media.png', 'Modern Media', 'Modern_Media.php'),
(9, 7, 'images/major-images/Aviation/Aviation Administration.png', 'Aviation Administration', 'Aviation_Administration.php'),
(10, 7, 'images/major-images/Aviation/flight training.png', 'Flight Training', 'Flight_Training.php'),
(11, 7, 'images/major-images/Aviation/aeronautical.png', 'Aeronautical', 'Aeronautical.php'),
(12, 9, 'images/major-images/Diplomas/human resource.png', 'Human Resource', 'Human_Resource.php'),
(13, 9, 'images/major-images/Diplomas/Islamic banks.png', 'Islamic Banks', 'Islamic_Banks.php'),
(14, 9, 'images/major-images/Diplomas/Tourist Hotels Administration.png', 'Tourist Hotels Administration', 'Tourist_Hotels_Administration.php'),
(15, 3, 'images/major-images/Engineering/civil.png', 'Civil', 'Civil.php'),
(16, 3, 'images/major-images/Engineering/architecture.png', 'Architecture', 'Architecture.php'),
(17, 3, 'images/major-images/Engineering/automotive.png', 'Automotive', 'Automotive.php'),
(18, 3, 'images/major-images/Engineering/electrical.png', 'Electrical', 'Electrical.php'),
(19, 6, 'images/major-images/Literary/psychology.png', 'Psychology', 'Psychology.php'),
(20, 6, 'images/major-images/Literary/sociology.png', 'Sociology', 'Sociology.php'),
(21, 6, 'images/major-images/Literary/law.png', 'Law', 'low.php'),
(23, 2, 'images/major-images/Medical/dentistry.png', 'Dentistry', 'dentistry.php'),
(24, 2, 'images/major-images/Medical/pharmacy.png', 'Pharmacy', 'Pharmacy.php'),
(25, 2, 'images/major-images/Medical/nurse.png', 'Nursing', 'nursing.php'),
(26, 2, 'images/major-images/Medical/natural treatment.png', 'Natural treatment', 'natural_treatment.php'),
(27, 5, 'images/major-images/Technique/computer science.png', 'Computer science', 'computer_science.php'),
(28, 5, 'images/major-images/Technique/information technology.png', 'Information Technology', 'information_technology.php'),
(30, 5, 'images/major-images/Technique/artificial intelligence.png', 'Artificial Intelligence', 'artificial_intelligence.php');

-- --------------------------------------------------------

--
-- Table structure for table `universty`
--

CREATE TABLE `universty` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'universty/global.png',
  `name` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL DEFAULT 'Riyadh',
  `adderes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universty`
--

INSERT INTO `universty` (`id`, `image`, `name`, `adderes`, `city`) VALUES
(1, 'universty/souad1.jpg', 'King Saud', 'https://ksu.edu.sa/','Riyadh'),
(2, 'universty/King Abd El-Aziz.jpg', 'King Abd El-Aziz', 'https://www.kau.edu.sa/home_english.aspx','Riyadh'),
(3, 'universty/um al quara.jpg', 'Um al-Qura', 'https://uqu.edu.sa/en','Makkah'),
(4, 'universty/logo1.png', 'Shaqra', 'https://www.su.edu.sa/ar','Riyadh'),
(5, 'universty/PNoraU-logo1.jpg', 'Princess Nora ', 'https://www.pnu.edu.sa/en/pages/home.aspx','Riyadh'),
(6, 'universty/شعار_جامعة_طيبة.gif', 'Taibah', 'https://www.taibahu.edu.sa/Pages/AR/Home.aspx','Madinah'),
(7, 'universty/mostabal1.jpg', 'Al-Mustaqbal', 'https://uom.edu.sa/','Riyadh'),
(8, 'universty/qusema.webp', 'Qassim', 'https://www.qu.edu.sa/','Qassim'),
(9, 'universty/jedda1.png', 'Jeddah', 'https://www.uj.edu.sa/','Jeddah'),
(10, 'universty/taif.jpg', 'Al-Taif', 'https://www.tu.edu.sa/En/','Al-Taif'),
(11, 'universty/BQBs_a0P_400x400.jpg', 'Imam Muhammad ibn Saud', 'https://imamu.edu.sa/en/Pages/default.aspx','Riyadh'),
(12, 'universty/Batterjee Medical.jpg', 'Batterjee Medical', 'https://bmc.edu.sa/','Riyadh'),
(13, 'universty/madeina1.jpg', 'Islamic', 'https://iu.edu.sa/','Riyadh'),
(14, 'universty/mugran.jpg', 'Prince Mugrin', 'https://www.upm.edu.sa/en','Riyadh'),
(15, 'universty/Oxford Academy.jpg', 'Oxford Academy', 'https://www.oxfordsaudia.com/fulfill-your-dream/?utm_source=Google&utm_medium=search&gclid=Cj0KCQjwn','Riyadh'),
(16, 'universty/prense slutan.jpg', 'Prince Sultan ', 'https://www.psu.edu.sa/en','Riyadh'),
(17, 'universty/jj1.jpg', 'Saudi Aviation Academy', 'https://www.saca.edu.sa/ar-sa/Pages/default.aspx','Riyadh'),
(18, 'universty/ff.png', 'International Technical Colleges', 'http://www.ic.edu.sa/','Riyadh'),
(19, 'universty/alyamamah.jpg', 'Al-Yamamah', 'https://yu.edu.sa/?lang=ar','Riyadh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstName`, `lastName`, `email`, `phone`, `gender`, `password`, `code`, `specialty`, `image`) VALUES
(2, 'saad', '', '', 'saad-alhuwaymil@hotmail.com', '', '', 'f290ca45b0dec2ec16cf3afcafbea6ac', '', '', ''),
(3, 'mustafa', 'mustafa', 'alyemeni', 'mustafa@gmail.com', '7713179700', 'Male', '202cb962ac59075b964b07152d234b70', '', 'computer science', 'product-img-2.jpg'),
(10, 'Rokaya Al-Qassas', '', '', 'rokaya.elkasass99@gmail.com', '', '', '202cb962ac59075b964b07152d234b70', '', '', '');



CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_majors`
--
ALTER TABLE `sub_majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universty`
--

ALTER TABLE `universty`
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
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_majors`
--
ALTER TABLE `sub_majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `universty`
--
ALTER TABLE `universty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
