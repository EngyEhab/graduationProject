-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 12:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `p74_application_data`
--

CREATE TABLE `p74_application_data` (
  `app_id` tinyint(4) NOT NULL,
  `app_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Uni_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Program_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Faculty-Uni_logo` varchar(50) DEFAULT NULL,
  `Program_logo` varchar(50) DEFAULT NULL,
  `Faculty_Dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Post_grad_vice_dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `st_affairs_vice_dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Program_coordinator` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p74_application_data`
--

INSERT INTO `p74_application_data` (`app_id`, `app_name`, `Uni_name`, `Faculty_name`, `Program_name`, `Faculty-Uni_logo`, `Program_logo`, `Faculty_Dean`, `Post_grad_vice_dean`, `st_affairs_vice_dean`, `Program_coordinator`) VALUES
(1, 'النظام الإلكتروني لإدارة شئون أعضاء هيئة التدريس', 'جامعة حلوان', 'كلية التجارة وإدارة الأعمال', 'BIS برنامج نظم معلومات الأعمال', 'Facultylogo.jpg', 'program.png', 'أ.د. حسام الرفاعي', 'أ.د. هند عودة', 'أ.د. أماني فاخر', 'أ.م.د. رشا فرغلى');

-- --------------------------------------------------------

--
-- Table structure for table `p74_completedata`
--

CREATE TABLE `p74_completedata` (
  `id_completeData` int(11) NOT NULL,
  `doctorNameInput` varchar(255) NOT NULL,
  `CompleteData` text NOT NULL,
  `doctorJobInput` tinyint(4) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_completedata`
--

INSERT INTO `p74_completedata` (`id_completeData`, `doctorNameInput`, `CompleteData`, `doctorJobInput`, `doctorCodeInput`) VALUES
(1, 'pola2', 'pola\r\n', 2, 43);

-- --------------------------------------------------------

--
-- Table structure for table `p74_departments`
--

CREATE TABLE `p74_departments` (
  `Department_id` tinyint(4) NOT NULL,
  `Department_ar_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Department_eng_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p74_departments`
--

INSERT INTO `p74_departments` (`Department_id`, `Department_ar_name`, `Department_eng_name`) VALUES
(1, 'قسم المحاسبة', 'Accounting Department'),
(2, 'قسم إدارة الأعمال', 'Management Department'),
(3, 'قسم الاقتصاد والتجارة الخارجية', 'Economics & Foreign Trade Depa'),
(4, 'قسم الإحصاء', 'Statistical Department'),
(5, 'قسم العلوم السياسية', 'Political Science Department'),
(6, 'قسم نظم المعلومات', 'Information Systems Department'),
(7, 'شعبه عامه', 'General Major');

-- --------------------------------------------------------

--
-- Table structure for table `p74_doctors_account`
--

CREATE TABLE `p74_doctors_account` (
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
-- Dumping data for table `p74_doctors_account`
--

INSERT INTO `p74_doctors_account` (`DoctorCode`, `Doctor_ar_Name`, `Doctor_eng_Name`, `National_id`, `Mobile`, `Academic_Mail`, `Personal_Mail`, `Notes`, `Doctor_image`, `Department_id`, `uni_id`, `Faculty_id`, `Doctor_job_id`, `date_of_birth`, `hiring_date`, `qualifications`) VALUES
(14, 'pola', 'sherif', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '88888888', '2.JPG', 1, 1, 1, 1, '0000-00-00', '2000-12-19', '888888888'),
(18, 'pola', 'sherif', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '8888', '2.JPG', 2, 1, 1, 2, '8888-08-08', '8888-08-08', '88888'),
(22, 'pola', 'sherif', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '88888888', '2.JPG', 3, 1, 1, 2, '2000-12-19', '2000-12-19', '888888888'),
(24, 'محمد عبد السلام5', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '888888', '1.jpg', 4, 1, 1, 3, '8888-08-08', '8888-08-08', '88888'),
(25, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 5, 1, 1, 4, '0000-00-00', '0000-00-00', ''),
(27, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 6, 1, 1, 5, '0000-00-00', '0000-00-00', ''),
(28, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 7, 1, 1, 6, '0000-00-00', '0000-00-00', ''),
(32, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 1, 1, 1, 7, '0000-00-00', '0000-00-00', ''),
(41, 'بولا', 'pola', '12345678912345', '+201201237779', 'pola@123.COMdd', 'pola@dd12.COM', 'pola555', '2.JPG', 2, 1, 1, 8, '5555-05-05', '2222-02-22', 'pola555'),
(42, 'بولا45', 'pola99', '12345', '456444', 'podalssa@123.COMxzxz', 'podla@12.COMsxz', '888888888888', '2.JPG', 3, 1, 1, 1, '7777-07-07', '8888-08-08', '8888888888'),
(43, 'pola2', 'polads', '12345678912345', '+201201237779', 'polssa@123.COMdds', 'pola@12.COMssdds', '888888', '2.JPG', 4, 1, 1, 2, '8888-08-08', '8888-08-08', '8888888888'),
(44, 'محمد عبد السلام5', 'polads', '12345678912345', '+201201237779', 'pola@123.COM99', 'pola@12.COMsff', '9999999', '2.JPG', 5, 1, 1, 3, '9999-09-09', '9999-09-09', '99999999999'),
(45, 'بولا', 'pola', '12345678912345', '456444', 'poalssa@123.COM', 'posssla@12.COM', '22222', '6142.jpg', 6, 1, 1, 4, '1111-11-11', '2222-02-22', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `p74_doctor_jobs`
--

CREATE TABLE `p74_doctor_jobs` (
  `Doctor_job_id` tinyint(4) NOT NULL,
  `Doctor_job_ar_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Doctor_job_eng_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p74_doctor_jobs`
--

INSERT INTO `p74_doctor_jobs` (`Doctor_job_id`, `Doctor_job_ar_name`, `Doctor_job_eng_name`) VALUES
(1, 'استاذ', 'Professor'),
(2, 'استاذ مساعد', 'Associate Professor'),
(3, 'مدرس', 'Lecturer'),
(4, 'مدرس مساعد', 'lecturer Assistant'),
(5, 'معيد', 'Teaching Assistant'),
(6, 'استاذ متفرغ', '-'),
(7, 'استاذ مساعد متفرغ', '-'),
(8, 'مدرس متفرغ', '');

-- --------------------------------------------------------

--
-- Table structure for table `p74_doctor_types`
--

CREATE TABLE `p74_doctor_types` (
  `Doctor_type_id` tinyint(4) NOT NULL,
  `Doctor_type_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p74_doctor_types`
--

INSERT INTO `p74_doctor_types` (`Doctor_type_id`, `Doctor_type_name`) VALUES
(1, 'داخلى - كلية'),
(2, 'داخلي - جامعة'),
(3, 'منتدب - عضو هيئة تدريس'),
(4, 'منتدب - خبير');

-- --------------------------------------------------------

--
-- Table structure for table `p74_faculties`
--

CREATE TABLE `p74_faculties` (
  `Faculty_id` tinyint(4) NOT NULL,
  `Faculty_ar_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Faculty_eng_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p74_faculties`
--

INSERT INTO `p74_faculties` (`Faculty_id`, `Faculty_ar_name`, `Faculty_eng_name`) VALUES
(1, 'كلية التجارة وإدارة الأعمال', 'Faculty of Commerce & Business Administration');

-- --------------------------------------------------------

--
-- Table structure for table `p74_penalities`
--

CREATE TABLE `p74_penalities` (
  `penality_id` int(50) NOT NULL,
  `doctorCodeInput` int(50) NOT NULL,
  `doctorNameInput` varchar(255) NOT NULL,
  `penaltyDescription` varchar(255) NOT NULL,
  `penaltyReason` text NOT NULL,
  `penaltyFile` varchar(255) NOT NULL,
  `penaltyDuration` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `penaltyNotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_penalities`
--

INSERT INTO `p74_penalities` (`penality_id`, `doctorCodeInput`, `doctorNameInput`, `penaltyDescription`, `penaltyReason`, `penaltyFile`, `penaltyDuration`, `startDate`, `endDate`, `penaltyNotes`) VALUES
(1, 18, 'pola', 'pola', '2.JPG', '4', '4444-04-04', '5555-05-05', '0000-00-00', 'pola'),
(2, 18, 'pola', 'pola', '2.JPG', '4', '4444-04-04', '5555-05-05', '0000-00-00', 'pola'),
(3, 25, 'محمد عبد السلام', 'pola', 'no', '2.JPG', '5', '1111-11-11', '2222-02-22', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `p74_secondment_data`
--

CREATE TABLE `p74_secondment_data` (
  `Secondment_id` int(11) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `doctorNameInput` varchar(255) NOT NULL,
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

INSERT INTO `p74_secondment_data` (`Secondment_id`, `doctorCodeInput`, `doctorNameInput`, `secondmentDescription`, `secondmentDestination`, `secondmentType`, `secondmentDuration`, `startDate`, `endDate`, `secondmentFile`, `secondmentNotes`) VALUES
(1, 27, 'محمد عبد السلام', 'pola', 'pola', 'inside', '5', '1111-11-11', '2222-02-22', '2.JPG', 'pola');

-- --------------------------------------------------------

--
-- Table structure for table `p74_universities`
--

CREATE TABLE `p74_universities` (
  `uni_id` tinyint(4) NOT NULL,
  `uni_ar_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uni_eng_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p74_universities`
--

INSERT INTO `p74_universities` (`uni_id`, `uni_ar_name`, `uni_eng_name`) VALUES
(1, 'جامعة حلوان', 'Helwan University');

-- --------------------------------------------------------

--
-- Table structure for table `p74_users`
--

CREATE TABLE `p74_users` (
  `user_id` tinyint(4) NOT NULL,
  `user_ar_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type_id` tinyint(4) NOT NULL,
  `added_date` datetime NOT NULL,
  `added_by` tinyint(4) NOT NULL,
  `Notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_enable` varchar(3) NOT NULL DEFAULT 'Yes' COMMENT 'yes or no',
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p74_users`
--

INSERT INTO `p74_users` (`user_id`, `user_ar_name`, `username`, `password`, `user_type_id`, `added_date`, `added_by`, `Notes`, `is_enable`, `image`) VALUES
(1, 'محمد عبد السلام', 'mohamed', '123', 1, '2023-03-09 15:28:23', 1, NULL, 'Yes', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p74_users_types`
--

CREATE TABLE `p74_users_types` (
  `user_type_id` tinyint(4) NOT NULL,
  `user_type_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p74_users_types`
--

INSERT INTO `p74_users_types` (`user_type_id`, `user_type_name`) VALUES
(1, 'Admin'),
(2, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `p74_vacation_data`
--

CREATE TABLE `p74_vacation_data` (
  `Vacation_id` int(11) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `doctorNameInput` varchar(255) NOT NULL,
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

INSERT INTO `p74_vacation_data` (`Vacation_id`, `doctorCodeInput`, `doctorNameInput`, `vacationDescription`, `startDate`, `endDate`, `vacationReason`, `vacationFile`, `vacationNotes`, `vacationDuration`) VALUES
(1, 18, 'pola', 'pola', '2000-02-19', '2060-02-15', 'pola', '2.JPG', 'pola', '2'),
(2, 28, 'محمد عبد السلام', 'pola', '1111-11-11', '2222-02-22', 'pola', '1.jpg', '555555', '3'),
(3, 27, 'محمد عبد السلام', 'pola', '5000-09-09', '8889-08-08', 'pola', '2.JPG', 'pola', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p74_application_data`
--
ALTER TABLE `p74_application_data`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  ADD PRIMARY KEY (`id_completeData`),
  ADD KEY `doctorCodeInput` (`doctorCodeInput`),
  ADD KEY `doctorJobInput1` (`doctorJobInput`);

--
-- Indexes for table `p74_departments`
--
ALTER TABLE `p74_departments`
  ADD PRIMARY KEY (`Department_id`);

--
-- Indexes for table `p74_doctors_account`
--
ALTER TABLE `p74_doctors_account`
  ADD PRIMARY KEY (`DoctorCode`),
  ADD KEY `Department_id` (`Department_id`),
  ADD KEY `uni_id` (`uni_id`),
  ADD KEY `Faculty_id` (`Faculty_id`),
  ADD KEY `Doctor_job_id` (`Doctor_job_id`);

--
-- Indexes for table `p74_doctor_jobs`
--
ALTER TABLE `p74_doctor_jobs`
  ADD PRIMARY KEY (`Doctor_job_id`);

--
-- Indexes for table `p74_doctor_types`
--
ALTER TABLE `p74_doctor_types`
  ADD PRIMARY KEY (`Doctor_type_id`);

--
-- Indexes for table `p74_faculties`
--
ALTER TABLE `p74_faculties`
  ADD PRIMARY KEY (`Faculty_id`);

--
-- Indexes for table `p74_penalities`
--
ALTER TABLE `p74_penalities`
  ADD PRIMARY KEY (`penality_id`),
  ADD KEY `doctorCodeInput2` (`doctorCodeInput`);

--
-- Indexes for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  ADD PRIMARY KEY (`Secondment_id`),
  ADD KEY `doctorCodeInput4` (`doctorCodeInput`);

--
-- Indexes for table `p74_universities`
--
ALTER TABLE `p74_universities`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `p74_users`
--
ALTER TABLE `p74_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `p74_users_types`
--
ALTER TABLE `p74_users_types`
  ADD PRIMARY KEY (`user_type_id`);

--
-- Indexes for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  ADD PRIMARY KEY (`Vacation_id`),
  ADD KEY `doctorCodeInput3` (`doctorCodeInput`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p74_application_data`
--
ALTER TABLE `p74_application_data`
  MODIFY `app_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  MODIFY `id_completeData` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p74_departments`
--
ALTER TABLE `p74_departments`
  MODIFY `Department_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `p74_doctors_account`
--
ALTER TABLE `p74_doctors_account`
  MODIFY `DoctorCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `p74_doctor_jobs`
--
ALTER TABLE `p74_doctor_jobs`
  MODIFY `Doctor_job_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p74_doctor_types`
--
ALTER TABLE `p74_doctor_types`
  MODIFY `Doctor_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p74_faculties`
--
ALTER TABLE `p74_faculties`
  MODIFY `Faculty_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p74_penalities`
--
ALTER TABLE `p74_penalities`
  MODIFY `penality_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  MODIFY `Secondment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p74_universities`
--
ALTER TABLE `p74_universities`
  MODIFY `uni_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p74_users`
--
ALTER TABLE `p74_users`
  MODIFY `user_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p74_users_types`
--
ALTER TABLE `p74_users_types`
  MODIFY `user_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  MODIFY `Vacation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  ADD CONSTRAINT `doctorCodeInput` FOREIGN KEY (`doctorCodeInput`) REFERENCES `p74_doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorJobInput1` FOREIGN KEY (`doctorJobInput`) REFERENCES `p74_doctor_jobs` (`Doctor_job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_doctors_account`
--
ALTER TABLE `p74_doctors_account`
  ADD CONSTRAINT `Department_id` FOREIGN KEY (`Department_id`) REFERENCES `p74_departments` (`Department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Doctor_job_id` FOREIGN KEY (`Doctor_job_id`) REFERENCES `p74_doctor_jobs` (`Doctor_job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Faculty_id` FOREIGN KEY (`Faculty_id`) REFERENCES `p74_faculties` (`Faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uni_id` FOREIGN KEY (`uni_id`) REFERENCES `p74_universities` (`uni_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_penalities`
--
ALTER TABLE `p74_penalities`
  ADD CONSTRAINT `doctorCodeInput2` FOREIGN KEY (`doctorCodeInput`) REFERENCES `p74_doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  ADD CONSTRAINT `doctorCodeInput4` FOREIGN KEY (`doctorCodeInput`) REFERENCES `p74_doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  ADD CONSTRAINT `doctorCodeInput3` FOREIGN KEY (`doctorCodeInput`) REFERENCES `p74_doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
