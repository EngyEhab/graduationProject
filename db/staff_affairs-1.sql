-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 01:32 PM
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
-- Table structure for table `acceptedstudentdata`
--

CREATE TABLE `acceptedstudentdata` (
  `StudentCode` int(11) NOT NULL DEFAULT 161746,
  `ArbName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `StudentID` varchar(15) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addsecondment_data`
--

CREATE TABLE `addsecondment_data` (
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
-- Dumping data for table `addsecondment_data`
--

INSERT INTO `addsecondment_data` (`Secondment_id`, `doctorCodeInput`, `doctorNameInput`, `secondmentDescription`, `secondmentDestination`, `secondmentType`, `secondmentDuration`, `startDate`, `endDate`, `secondmentFile`, `secondmentNotes`) VALUES
(1, 27, 'محمد عبد السلام', 'pola', 'pola', 'inside', '5', '1111-11-11', '2222-02-22', '2.JPG', 'pola'),
(2, 27, 'محمد عبد السلام', 'pola', 'pola', 'inside', '5', '1111-11-11', '2222-02-22', '2.JPG', 'pola');

-- --------------------------------------------------------

--
-- Table structure for table `addvacation_data`
--

CREATE TABLE `addvacation_data` (
  `Vacation_id` int(11) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `doctorNameInput` varchar(255) NOT NULL,
  `vacationDescription` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `vacationReason` text NOT NULL,
  `vacationFile` varchar(255) NOT NULL,
  `vacationNotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addvacation_data`
--

INSERT INTO `addvacation_data` (`Vacation_id`, `doctorCodeInput`, `doctorNameInput`, `vacationDescription`, `startDate`, `endDate`, `vacationReason`, `vacationFile`, `vacationNotes`) VALUES
(1, 18, 'pola', 'pola', '2000-02-19', '2060-02-15', 'pola', '2.JPG', 'pola'),
(2, 28, 'محمد عبد السلام', 'pola', '1111-11-11', '2222-02-22', 'pola', '1.jpg', '555555'),
(3, 27, 'محمد عبد السلام', 'pola', '5000-09-09', '8889-08-08', 'pola', '2.JPG', 'pola');

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
  `Faculty-Uni_logo` varchar(50) DEFAULT NULL,
  `Program_logo` varchar(50) DEFAULT NULL,
  `Faculty_Dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Post_grad_vice_dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `st_affairs_vice_dean` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Program_coordinator` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `application_data`
--

INSERT INTO `application_data` (`app_id`, `app_name`, `Uni_name`, `Faculty_name`, `Program_name`, `Faculty-Uni_logo`, `Program_logo`, `Faculty_Dean`, `Post_grad_vice_dean`, `st_affairs_vice_dean`, `Program_coordinator`) VALUES
(1, 'النظام الإلكتروني لإدارة شئون أعضاء هيئة التدريس', 'جامعة حلوان', 'كلية التجارة وإدارة الأعمال', 'BIS برنامج نظم معلومات الأعمال', 'Facultylogo.jpg', 'program.png', 'أ.د. حسام الرفاعي', 'أ.د. هند عودة', 'أ.د. أماني فاخر', 'أ.م.د. رشا فرغلى');

-- --------------------------------------------------------

--
-- Table structure for table `completedata`
--

CREATE TABLE `completedata` (
  `id_completeData` int(11) NOT NULL,
  `doctorNameInput` varchar(255) NOT NULL,
  `CompleteData` text NOT NULL,
  `doctorJobInput` varchar(255) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completedata`
--

INSERT INTO `completedata` (`id_completeData`, `doctorNameInput`, `CompleteData`, `doctorJobInput`, `doctorCodeInput`) VALUES
(1, 'pola2', 'pola\r\n', 'lecturer Assistant', 43);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseCode` varchar(6) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `CourseArbName` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PreRequiset` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `StudentCode` int(11) NOT NULL,
  `CourseCode` varchar(6) NOT NULL DEFAULT '',
  `Semester` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Grade` varchar(4) DEFAULT NULL,
  `GroupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Table structure for table `doctorscourse`
--

CREATE TABLE `doctorscourse` (
  `id` int(11) NOT NULL,
  `DoctorCode` int(4) NOT NULL,
  `CourseCode` varchar(6) NOT NULL,
  `SemesterCode` int(11) NOT NULL,
  `semesterYear` int(11) NOT NULL,
  `group` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `departments` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `doctor_jobs` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `hiring_date` date NOT NULL,
  `qualifications` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_account`
--

INSERT INTO `doctors_account` (`DoctorCode`, `Doctor_ar_Name`, `Doctor_eng_Name`, `National_id`, `Mobile`, `Academic_Mail`, `Personal_Mail`, `Notes`, `Doctor_image`, `departments`, `university`, `faculty`, `doctor_jobs`, `date_of_birth`, `hiring_date`, `qualifications`) VALUES
(14, 'pola', 'sherif', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '88888888', '2.JPG', '', '', '', '-', '0000-00-00', '2000-12-19', '888888888'),
(18, 'pola', 'sherif', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '8888', '2.JPG', 'قسم إدارة الأعمال', 'جامعة حلوان', 'كلية التجارة وإدارة الأعمال', 'استاذ متفرغ', '8888-08-08', '8888-08-08', '88888'),
(22, 'pola', 'sherif', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '88888888', '2.JPG', 'Political Science Department', 'Helwan University', 'Faculty of Commerce & Business Administration', 'استاذ متفرغ', '2000-12-19', '2000-12-19', '888888888'),
(24, 'محمد عبد السلام5', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '888888', '1.jpg', '', '', '', '', '8888-08-08', '8888-08-08', '88888'),
(25, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 'Economics', 'Helwan', 'Faculty', 'استاذ متفرغ', '0000-00-00', '0000-00-00', ''),
(27, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 'Economics', 'Helwan', 'Faculty', 'استاذ', '0000-00-00', '0000-00-00', ''),
(28, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 'Economics', 'Helwan', 'Faculty', 'مدرس متفرغ', '0000-00-00', '0000-00-00', ''),
(32, 'محمد عبد السلام', 'pola', '12345678912345', '456444', 'pola@123.COM', 'pola@12.COM', '', '1.jpg', 'Economics', 'Helwan', 'Faculty', 'استاذ', '0000-00-00', '0000-00-00', ''),
(41, 'بولا', 'pola', '12345678912345', '+201201237779', 'pola@123.COMdd', 'pola@dd12.COM', 'pola555', '2.JPG', 'Management Department', 'Helwan University', 'Faculty of Commerce & Business Administration', 'Lecturer', '5555-05-05', '2222-02-22', 'pola555'),
(42, 'بولا45', 'pola99', '12345', '456444', 'podalssa@123.COMxzxz', 'podla@12.COMsxz', '888888888888', '2.JPG', 'General Major', 'Helwan University', 'Faculty of Commerce & Business Administration', '-', '7777-07-07', '8888-08-08', '8888888888'),
(43, 'pola2', 'polads', '12345678912345', '+201201237779', 'polssa@123.COMdds', 'pola@12.COMssdds', '888888', '2.JPG', 'Information Systems Department', 'Helwan University', 'Faculty of Commerce & Business Administration', 'lecturer Assistant', '8888-08-08', '8888-08-08', '8888888888'),
(44, 'محمد عبد السلام5', 'polads', '12345678912345', '+201201237779', 'pola@123.COM99', 'pola@12.COMsff', '9999999', '2.JPG', 'Political Science Department', 'Helwan University', 'Faculty of Commerce & Business Administration', 'Teaching Assistant', '9999-09-09', '9999-09-09', '99999999999');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_jobs`
--

CREATE TABLE `doctor_jobs` (
  `Doctor_job_id` tinyint(4) NOT NULL,
  `Doctor_job_ar_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Doctor_job_eng_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor_jobs`
--

INSERT INTO `doctor_jobs` (`Doctor_job_id`, `Doctor_job_ar_name`, `Doctor_job_eng_name`) VALUES
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
-- Table structure for table `doctor_types`
--

CREATE TABLE `doctor_types` (
  `Doctor_type_id` tinyint(4) NOT NULL,
  `Doctor_type_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor_types`
--

INSERT INTO `doctor_types` (`Doctor_type_id`, `Doctor_type_name`) VALUES
(1, 'داخلى - كلية'),
(2, 'داخلي - جامعة'),
(3, 'منتدب - عضو هيئة تدريس'),
(4, 'منتدب - خبير');

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
-- Table structure for table `p60_tablename`
--

CREATE TABLE `p60_tablename` (
  `attribute1` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penalities`
--

CREATE TABLE `penalities` (
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
-- Dumping data for table `penalities`
--

INSERT INTO `penalities` (`penality_id`, `doctorCodeInput`, `doctorNameInput`, `penaltyDescription`, `penaltyReason`, `penaltyFile`, `penaltyDuration`, `startDate`, `endDate`, `penaltyNotes`) VALUES
(1, 18, 'pola', 'pola', '2.JPG', '4', '4444-04-04', '5555-05-05', '0000-00-00', 'pola'),
(2, 18, 'pola', 'pola', '2.JPG', '4', '4444-04-04', '5555-05-05', '0000-00-00', 'pola'),
(3, 25, 'محمد عبد السلام', 'pola', 'no', '2.JPG', '5', '1111-11-11', '2222-02-22', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `pola`
--

CREATE TABLE `pola` (
  `Id` int(11) NOT NULL,
  `first_Name` varchar(255) NOT NULL,
  `last_Name` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pola`
--

INSERT INTO `pola` (`Id`, `first_Name`, `last_Name`, `e_mail`, `password`, `image`) VALUES
(1, 'after', 'F_name', 'khs@poa.com', '1653', ''),
(2, 'pola', 'sherif', 'pola@12.com', '123', ''),
(3, 'after', '12', 'pola11@5.com', '1234', ''),
(4, 'sherif', 'pola', 'pol12@1.com', '520', ''),
(5, 'polaa', '', 'polaa12@3.com', '0120', ''),
(6, 'sherif', 'pola', 'poa@12.com', '123', ''),
(7, 'after', 'email', 'khs@po21a.com', '555555', '2.JPG'),
(8, 'after', 'email', 'khs@po21ca.com', 'cxxccxcc', '');

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
  `added_date` datetime NOT NULL,
  `added_by` tinyint(4) NOT NULL,
  `Notes` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_enable` varchar(3) NOT NULL DEFAULT 'Yes' COMMENT 'yes or no',
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_ar_name`, `username`, `password`, `user_type_id`, `added_date`, `added_by`, `Notes`, `is_enable`, `image`) VALUES
(1, 'محمد عبد السلام', 'mohamed', '123', 1, '2023-03-09 15:28:23', 1, NULL, 'Yes', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_types`
--

CREATE TABLE `users_types` (
  `user_type_id` tinyint(4) NOT NULL,
  `user_type_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_types`
--

INSERT INTO `users_types` (`user_type_id`, `user_type_name`) VALUES
(1, 'Admin'),
(2, 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptedstudentdata`
--
ALTER TABLE `acceptedstudentdata`
  ADD PRIMARY KEY (`StudentCode`);

--
-- Indexes for table `addsecondment_data`
--
ALTER TABLE `addsecondment_data`
  ADD PRIMARY KEY (`Secondment_id`);

--
-- Indexes for table `addvacation_data`
--
ALTER TABLE `addvacation_data`
  ADD PRIMARY KEY (`Vacation_id`);

--
-- Indexes for table `application_data`
--
ALTER TABLE `application_data`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `completedata`
--
ALTER TABLE `completedata`
  ADD PRIMARY KEY (`id_completeData`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseCode`),
  ADD KEY `FK_pre` (`PreRequiset`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`StudentCode`,`CourseCode`,`Semester`,`Year`),
  ADD KEY `Semester` (`Semester`),
  ADD KEY `GroupID` (`GroupID`),
  ADD KEY `CourseCode` (`CourseCode`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`Department_id`);

--
-- Indexes for table `doctorscourse`
--
ALTER TABLE `doctorscourse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semesteryear` (`semesterYear`),
  ADD KEY `DoctorCode` (`DoctorCode`),
  ADD KEY `CourseCode` (`CourseCode`),
  ADD KEY `SemesterCode` (`SemesterCode`);

--
-- Indexes for table `doctors_account`
--
ALTER TABLE `doctors_account`
  ADD PRIMARY KEY (`DoctorCode`);

--
-- Indexes for table `doctor_jobs`
--
ALTER TABLE `doctor_jobs`
  ADD PRIMARY KEY (`Doctor_job_id`);

--
-- Indexes for table `doctor_types`
--
ALTER TABLE `doctor_types`
  ADD PRIMARY KEY (`Doctor_type_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`Faculty_id`);

--
-- Indexes for table `penalities`
--
ALTER TABLE `penalities`
  ADD PRIMARY KEY (`penality_id`);

--
-- Indexes for table `pola`
--
ALTER TABLE `pola`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT for table `addsecondment_data`
--
ALTER TABLE `addsecondment_data`
  MODIFY `Secondment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addvacation_data`
--
ALTER TABLE `addvacation_data`
  MODIFY `Vacation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `application_data`
--
ALTER TABLE `application_data`
  MODIFY `app_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `completedata`
--
ALTER TABLE `completedata`
  MODIFY `id_completeData` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `Department_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctorscourse`
--
ALTER TABLE `doctorscourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors_account`
--
ALTER TABLE `doctors_account`
  MODIFY `DoctorCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `doctor_jobs`
--
ALTER TABLE `doctor_jobs`
  MODIFY `Doctor_job_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor_types`
--
ALTER TABLE `doctor_types`
  MODIFY `Doctor_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `Faculty_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penalities`
--
ALTER TABLE `penalities`
  MODIFY `penality_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pola`
--
ALTER TABLE `pola`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `uni_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_types`
--
ALTER TABLE `users_types`
  MODIFY `user_type_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
