-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 02:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_affairs`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_data`
--

CREATE TABLE `application_data` (
  `app_id` tinyint(4) NOT NULL,
  `app_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Uni_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Program_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty_Uni_logo` varchar(50) DEFAULT NULL,
  `Program_logo` varchar(50) DEFAULT NULL,
  `Faculty_Dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Post_grad_vice_dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `st_affairs_vice_dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Program_coordinator` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `application_data`
--

INSERT INTO `application_data` (`app_id`, `app_name`, `Uni_name`, `Faculty_name`, `Program_name`, `Faculty_Uni_logo`, `Program_logo`, `Faculty_Dean`, `Post_grad_vice_dean`, `st_affairs_vice_dean`, `Program_coordinator`) VALUES
(1, 'النظام الإلكتروني لإدارة شئون أعضاء هيئة التدريس', 'جامعة حلوان', 'كلية التجارة وإدارة الأعمال', 'BIS برنامج نظم معلومات الأعمال', 'Facultylogo.jpg', 'program.png', 'أ.د. حسام الرفاعي', 'أ.د. هند عودة', 'أ.د. أماني فاخر', 'أ.م.د. رشا فرغلى');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `Department_id` tinyint(4) NOT NULL,
  `Department_ar_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Department_eng_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`Department_id`, `Department_ar_name`, `Department_eng_name`) VALUES
(1, 'قسم المحاسبة', 'Accounting Department'),
(2, 'قسم إدارة الأعمال', 'Management Department'),
(3, 'قسم الاقتصاد والتجارة الخارجية', 'Economics & Foreign Trade Depa'),
(4, 'قسم الإحصاء', 'Statistical Department'),
(5, 'قسم العلوم السياسية', 'Political Science Department'),
(6, 'قسم نظم المعلومات', 'Information Systems Department'),
(7, 'شعبه عامه', 'General Major');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_account`
--

CREATE TABLE `doctors_account` (
  `DoctorCode` int(11) NOT NULL,
  `Doctor_ar_Name` varchar(255) NOT NULL,
  `Doctor_eng_Name` varchar(255) NOT NULL,
  `National_id` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Academic_Mail` varchar(255) NOT NULL,
  `Personal_Mail` varchar(255) NOT NULL,
  `Notes` text NOT NULL,
  `Doctor_image` varchar(255) NOT NULL,
  `Department_id` tinyint(4) NOT NULL,
  `uni_id` tinyint(4) NOT NULL,
  `Faculty_id` tinyint(4) NOT NULL,
  `Doctor_job_id` tinyint(4) NOT NULL,
  `date_of_birth` date NOT NULL,
  `hiring_date` date NOT NULL,
  `qualifications` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_account`
--

INSERT INTO `doctors_account` (`DoctorCode`, `Doctor_ar_Name`, `Doctor_eng_Name`, `National_id`, `Mobile`, `Academic_Mail`, `Personal_Mail`, `Notes`, `Doctor_image`, `Department_id`, `uni_id`, `Faculty_id`, `Doctor_job_id`, `date_of_birth`, `hiring_date`, `qualifications`) VALUES
(14, 'pola', 'sherif', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '88888888', '2.JPG', 1, 1, 1, 1, '0000-00-00', '2000-12-19', '888888888'),
(18, 'pola', 'sherif', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '8888', '2.JPG', 2, 1, 1, 2, '8888-08-08', '8888-08-08', '88888'),
(24, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '888888', '1.jpg', 7, 1, 1, 8, '8888-08-08', '8888-08-08', '11111111111'),
(25, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 5, 1, 1, 4, '0000-00-00', '0000-00-00', ''),
(27, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 6, 1, 1, 5, '0000-00-00', '0000-00-00', ''),
(28, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 7, 1, 1, 6, '0000-00-00', '0000-00-00', ''),
(32, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 1, 1, 1, 7, '0000-00-00', '0000-00-00', ''),
(41, 'بولا', 'pola', '12345678912345', '+201201237779', 'pola@123.COMdd', 'pola@dd12.COM', 'pola555', '2.JPG', 2, 1, 1, 8, '5555-05-05', '2222-02-22', 'pola555'),
(43, 'pola2', 'polads', '12345678912345', '+201201237779', 'polssa@123.COMdds', 'pola@12.COMssdds', '888888', '2.JPG', 4, 1, 1, 5, '8888-08-08', '8888-08-08', '8888888888'),
(44, 'محمد عبد السلام5', 'polads', '12345678912345', '+201201237779', 'pola@123.COM99', 'pola@12.COMsff', '9999999', '2.JPG', 5, 1, 1, 3, '9999-09-09', '9999-09-09', '99999999999'),
(45, 'بولا', 'pola', '12345678912345', '456444', 'poalssa@123.COM', 'posssla@12.COM', '22222', '6142.jpg', 6, 1, 1, 4, '1111-11-11', '2222-02-22', '1111'),
(46, 'محمد عبد السلام5', 'pola', '12345678912345', '456444', 'polssa@123.COM', 'posssla@12.COM', '22222222', '110101.jpg', 2, 1, 1, 2, '1111-11-11', '2222-02-22', '1111111'),
(47, 'بولا', 'pola99', '12345678912345', '456444', 'poalssa@123.COM', 'pola@12.COMs', '22222', '437858.jpg', 3, 1, 1, 6, '1111-11-11', '2222-02-22', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_jobs`
--

CREATE TABLE `doctor_jobs` (
  `Doctor_job_id` tinyint(4) NOT NULL,
  `Doctor_job_ar_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Doctor_job_eng_name` varchar(20) NOT NULL,
  `job_order` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor_jobs`
--

INSERT INTO `doctor_jobs` (`Doctor_job_id`, `Doctor_job_ar_name`, `Doctor_job_eng_name`, `job_order`) VALUES
(1, 'استاذ', 'Professor', 0),
(2, 'استاذ مساعد', 'Associate Professor', 0),
(3, 'مدرس', 'Lecturer', 0),
(4, 'مدرس مساعد', 'lecturer Assistant', 0),
(5, 'معيد', 'Teaching Assistant', 0),
(6, 'استاذ متفرغ', '-', 0),
(7, 'استاذ مساعد متفرغ', '-', 0),
(8, 'مدرس متفرغ', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `Faculty_id` tinyint(4) NOT NULL,
  `Faculty_ar_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Faculty_eng_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`Faculty_id`, `Faculty_ar_name`, `Faculty_eng_name`) VALUES
(1, 'كلية التجارة وإدارة الأعمال', 'Faculty of Commerce & Business Administration');

-- --------------------------------------------------------

--
-- Table structure for table `p74_completedata`
--

CREATE TABLE `p74_completedata` (
  `id_completeData` int(11) NOT NULL,
  `CompleteData` text NOT NULL,
  `doctorJobInput` tinyint(4) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_completedata`
--

INSERT INTO `p74_completedata` (`id_completeData`, `CompleteData`, `doctorJobInput`, `doctorCodeInput`) VALUES
(1, 'pola\r\n', 2, 43),
(2, 'pola123', 1, 14),
(3, '555555', 1, 14),
(4, '1111111111', 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `p74_penalties`
--

CREATE TABLE `p74_penalties` (
  `penality_id` int(50) NOT NULL,
  `doctorCodeInput` int(50) NOT NULL,
  `penaltyDescription` varchar(255) NOT NULL,
  `penaltyReason` text NOT NULL,
  `penaltyFile` varchar(255) NOT NULL,
  `penaltyDuration` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `penaltyNotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_penalties`
--

INSERT INTO `p74_penalties` (`penality_id`, `doctorCodeInput`, `penaltyDescription`, `penaltyReason`, `penaltyFile`, `penaltyDuration`, `startDate`, `endDate`, `penaltyNotes`) VALUES
(1, 18, 'pola', '2.JPG', '4', '4444-04-04', '5555-05-05', '0000-00-00', 'pola'),
(3, 25, 'pola', 'no', '2.JPG', '5', '1111-11-11', '2222-02-22', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `p74_secondment_data`
--

CREATE TABLE `p74_secondment_data` (
  `Secondment_id` int(11) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `secondmentDescription` varchar(255) NOT NULL,
  `secondmentDestination` varchar(255) NOT NULL,
  `secondmentType` enum('inside','outside') NOT NULL,
  `secondmentDuration` varchar(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `secondmentFile` varchar(255) NOT NULL,
  `secondmentNotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_secondment_data`
--

INSERT INTO `p74_secondment_data` (`Secondment_id`, `doctorCodeInput`, `secondmentDescription`, `secondmentDestination`, `secondmentType`, `secondmentDuration`, `startDate`, `endDate`, `secondmentFile`, `secondmentNotes`) VALUES
(1, 27, 'pola', 'pola', 'inside', '5', '1111-11-11', '2222-02-22', '2.JPG', 'pola');

-- --------------------------------------------------------

--
-- Table structure for table `p74_vacation_data`
--

CREATE TABLE `p74_vacation_data` (
  `Vacation_id` int(11) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `vacationDescription` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `vacationReason` text NOT NULL,
  `vacationFile` varchar(255) NOT NULL,
  `vacationNotes` text NOT NULL,
  `vacationDuration` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_vacation_data`
--

INSERT INTO `p74_vacation_data` (`Vacation_id`, `doctorCodeInput`, `vacationDescription`, `startDate`, `endDate`, `vacationReason`, `vacationFile`, `vacationNotes`, `vacationDuration`) VALUES
(1, 18, 'pola', '2000-02-19', '2060-02-15', 'pola', '2.JPG', 'pola', '2'),
(2, 28, 'pola', '1111-11-11', '2222-02-22', 'pola', '1.jpg', '555555', '3'),
(3, 27, 'pola', '5000-09-09', '8889-08-08', 'pola', '2.JPG', 'pola', '4');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `uni_id` tinyint(4) NOT NULL,
  `uni_ar_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uni_eng_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`uni_id`, `uni_ar_name`, `uni_eng_name`) VALUES
(1, 'جامعة حلوان', 'Helwan University');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` tinyint(4) NOT NULL,
  `user_ar_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type_id` tinyint(4) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` tinyint(4) NOT NULL,
  `Notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_enable` varchar(3) NOT NULL DEFAULT 'Yes' COMMENT 'yes or no',
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_ar_name`, `username`, `password`, `user_type_id`, `added_date`, `added_by`, `Notes`, `is_enable`, `image`) VALUES
(1, 'محمد عبد السلام', 'mohamed', '123', 1, '2023-03-09 15:28:23', 1, NULL, 'yes', '1.jpg'),
(2, 'بولا شريف', 'pola', '123', 2, '2023-05-19 17:30:57', 1, 'no', 'yes', '2.JPG'),
(5, 'pol', 'polll', '111', 2, '2023-05-17 19:09:31', 0, '111', 'yes', '501469.jpg'),
(7, 'polaaa', 'polaaaa', 'aaa', 1, '2023-05-18 19:17:23', 0, 'aaa', 'yes', '532764.jpg'),
(11, 'polaaawr', 'polllwr', 'rrr', 1, '2023-05-19 20:45:59', 1, 'rrrr', 'yes', '118214.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_types`
--

CREATE TABLE `users_types` (
  `user_type_id` tinyint(4) NOT NULL,
  `user_type_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_type_ar_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_types`
--

INSERT INTO `users_types` (`user_type_id`, `user_type_name`, `user_type_ar_name`) VALUES
(1, 'Admin', 'مسئول نظام'),
(2, 'Employee', 'موظف');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_data`
--
ALTER TABLE `application_data`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`Department_id`);

--
-- Indexes for table `doctors_account`
--
ALTER TABLE `doctors_account`
  ADD PRIMARY KEY (`DoctorCode`),
  ADD KEY `uni_id` (`uni_id`),
  ADD KEY `Faculty_id` (`Faculty_id`),
  ADD KEY `Doctor_job_id` (`Doctor_job_id`),
  ADD KEY `Department_id1` (`Department_id`);

--
-- Indexes for table `doctor_jobs`
--
ALTER TABLE `doctor_jobs`
  ADD PRIMARY KEY (`Doctor_job_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`Faculty_id`);

--
-- Indexes for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  ADD PRIMARY KEY (`id_completeData`),
  ADD KEY `doctorCodeInput` (`doctorCodeInput`),
  ADD KEY `doctorJobInput1` (`doctorJobInput`);

--
-- Indexes for table `p74_penalties`
--
ALTER TABLE `p74_penalties`
  ADD PRIMARY KEY (`penality_id`),
  ADD KEY `doctorCodeInput2` (`doctorCodeInput`);

--
-- Indexes for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  ADD PRIMARY KEY (`Secondment_id`),
  ADD KEY `doctorCodeInput4` (`doctorCodeInput`);

--
-- Indexes for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  ADD PRIMARY KEY (`Vacation_id`),
  ADD KEY `doctorCodeInput3` (`doctorCodeInput`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_types`
--
ALTER TABLE `users_types`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_data`
--
ALTER TABLE `application_data`
  MODIFY `app_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `Department_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors_account`
--
ALTER TABLE `doctors_account`
  MODIFY `DoctorCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `doctor_jobs`
--
ALTER TABLE `doctor_jobs`
  MODIFY `Doctor_job_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `Faculty_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  MODIFY `id_completeData` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p74_penalties`
--
ALTER TABLE `p74_penalties`
  MODIFY `penality_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  MODIFY `Secondment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  MODIFY `Vacation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `uni_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_types`
--
ALTER TABLE `users_types`
  MODIFY `user_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors_account`
--
ALTER TABLE `doctors_account`
  ADD CONSTRAINT `Department_id` FOREIGN KEY (`Department_id`) REFERENCES `departments` (`Department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Department_id1` FOREIGN KEY (`Department_id`) REFERENCES `departments` (`Department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Doctor_job_id` FOREIGN KEY (`Doctor_job_id`) REFERENCES `doctor_jobs` (`Doctor_job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Faculty_id` FOREIGN KEY (`Faculty_id`) REFERENCES `faculties` (`Faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uni_id` FOREIGN KEY (`uni_id`) REFERENCES `universities` (`uni_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  ADD CONSTRAINT `doctorCodeInput` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorJobInput1` FOREIGN KEY (`doctorJobInput`) REFERENCES `doctor_jobs` (`Doctor_job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_penalties`
--
ALTER TABLE `p74_penalties`
  ADD CONSTRAINT `doctorCodeInput2` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  ADD CONSTRAINT `doctorCodeInput4` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  ADD CONSTRAINT `doctorCodeInput3` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
