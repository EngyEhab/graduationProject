-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 09:41 PM
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
(1, 'النظام الإلكتروني لإدارة شئون أعضاء هيئة التدريس', 'جامعة حلوان', 'كلية التجارة وإدارة الأعمال', 'برنامج نظم معلومات الأعمال BIS ', 'Facultylogo.jpg', 'program.png', 'أ.د. جمال علي', 'أ.د. هند عودة', 'أ.د. جمال علي', 'أ.م.د. رشا فرغلى');

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
(14, 'محمد عبد السلام', 'mohamed abd el-salam', '12345678912345', '01201237779', 'mohamed.bis@commerce.helwan.edu.eg', 'mohamed.bis@yahoo.com', 'لا يوجد', '1.jpg', 2, 1, 1, 3, '1970-06-24', '2000-12-01', 'BIS'),
(48, 'بولا شريف بدر', 'paula sherif badr', '30012193100077', '01201237779', 'pola.sherif.badr@commerce.helwan.edu.eg', 'pola88.sherif@yahoo.com', 'لا يوجد', '157233.jpg', 6, 1, 1, 1, '2000-12-19', '2019-09-20', 'BIS'),
(49, 'بافلي محب ماركو', 'bavly moheb marco', '30102113100119', '01287877660', 'pavly.moheb.1920305@commerce.helwan.edu.eg', 'bavlymoheb6@gmail.com', 'لا يوجد', '373857.jpg', 1, 1, 1, 1, '2001-02-11', '2020-01-02', 'BIS'),
(50, 'أنطون محب ماركو', 'Aoton moheb marco', '30102113100135', '01287877008', 'anton.moheb.1920303@commerce.helwan.edu.eg', 'antonmarco060@gmail.com', 'لا يوجد', '878070.jpg', 6, 1, 1, 6, '2001-02-11', '2019-09-19', 'BIS'),
(51, 'يوسف محمد أحمد', 'youssef mohamed ahmed', '30102113100463', '01013964407', 'youssef.mohamed.1920463@commerce.helwan.edu.eg', 'youssef.mohamed@yahoo.com', 'لا يوجد', '984636.jpg', 6, 1, 1, 5, '2001-05-15', '2019-08-21', 'BIS'),
(54, 'انجي ايهاب عوض', 'engy ehab awad', '30101283100168', '01277027663', 'engy.ehab.awad@commerce.helwan.edu.eg', 'engyehab176@yahoo.com', 'لا يوجد', '122973.jpg', 6, 1, 1, 1, '2001-01-28', '2023-07-01', 'BIS'),
(55, 'كارين مرقص ذكي', 'karen marcos zaky', '30107223100179', '01274527161', 'karen.marcos.1920179@commerce.helwan.edu.eg', 'karen.marcos@yahoo.com', 'لا يوجد', '581843.jpg', 6, 1, 1, 4, '2001-11-28', '2019-10-24', 'BIS');

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
(1, 'استاذ', 'Professor', 7),
(2, 'استاذ مساعد', 'Associate Professor', 5),
(3, 'مدرس', 'Lecturer', 3),
(4, 'مدرس مساعد', 'lecturer Assistant', 2),
(5, 'معيد', 'Teaching Assistant', 1),
(6, 'استاذ متفرغ', '-', 8),
(7, 'استاذ مساعد متفرغ', '-', 6),
(8, 'مدرس متفرغ', '', 4);

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
-- Table structure for table `p74_assignments_data`
--

CREATE TABLE `p74_assignments_data` (
  `assignment_id` int(11) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `assignment_Description` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_assignments_data`
--

INSERT INTO `p74_assignments_data` (`assignment_id`, `doctorCodeInput`, `assignment_Description`, `added_date`, `added_by`) VALUES
(1, 14, 'انتداب بجامعة القاهرة لمدة عام', '2023-06-21 18:09:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p74_completedata`
--

CREATE TABLE `p74_completedata` (
  `id_completeData` int(11) NOT NULL,
  `CompleteData` text NOT NULL,
  `doctorJobInput` tinyint(4) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_completedata`
--

INSERT INTO `p74_completedata` (`id_completeData`, `CompleteData`, `doctorJobInput`, `doctorCodeInput`, `added_date`, `added_by`) VALUES
(10, 'معيد من 10/7/1998 بقسم نظم المعلومات بكلية التجارة جامعة حلوان.', 6, 14, '2023-06-19 20:54:14', 1),
(11, 'مدرس مساعد من 10/7/2001 بقسم نظم المعلومات بكلية التجارة جامعة حلوان.\r\n', 4, 14, '2023-06-22 15:35:58', 1),
(12, 'مدرس من 10/7/2005 بقسم نظم المعلومات بكلية التجارة جامعة حلوان.', 3, 14, '2023-06-22 15:38:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p74_missions_data`
--

CREATE TABLE `p74_missions_data` (
  `mission_id` int(11) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `mission_Description` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_missions_data`
--

INSERT INTO `p74_missions_data` (`mission_id`, `doctorCodeInput`, `mission_Description`, `added_date`, `added_by`) VALUES
(1, 14, 'بعثة الى لندن', '2023-06-21 00:17:00', 1);

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
  `penaltyNotes` text NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_penalties`
--

INSERT INTO `p74_penalties` (`penality_id`, `doctorCodeInput`, `penaltyDescription`, `penaltyReason`, `penaltyFile`, `penaltyDuration`, `startDate`, `endDate`, `penaltyNotes`, `added_date`, `added_by`) VALUES
(17, 14, 'فصل مؤقت', 'ادارى', '941373.jpg', '10 ايام', '2023-06-01', '2023-06-03', 'لا يوجد', '2023-06-19 20:34:17', 1),
(20, 48, 'فصل مؤقت', 'ادارى', '744432.jpg', '3 شهور', '2023-06-22', '2023-09-22', 'لا يوجد', '2023-06-22 15:09:28', 1);

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
  `secondmentNotes` text NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_secondment_data`
--

INSERT INTO `p74_secondment_data` (`Secondment_id`, `doctorCodeInput`, `secondmentDescription`, `secondmentDestination`, `secondmentType`, `secondmentDuration`, `startDate`, `endDate`, `secondmentFile`, `secondmentNotes`, `added_date`, `added_by`) VALUES
(10, 14, 'رسمية', 'الامارات العربية المتحدة', 'outside', '5 ايام', '2023-06-01', '2023-06-05', '312465.jpg', 'لا يوجد', '2023-06-19 20:36:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p74_special_vacation_data`
--

CREATE TABLE `p74_special_vacation_data` (
  `Special_vacation_id` int(11) NOT NULL,
  `doctorCodeInput` int(11) NOT NULL,
  `special_vacationDescription` varchar(255) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_special_vacation_data`
--

INSERT INTO `p74_special_vacation_data` (`Special_vacation_id`, `doctorCodeInput`, `special_vacationDescription`, `added_date`, `added_by`) VALUES
(3, 14, 'اجازة خاصة', '2023-06-21 00:21:17', 1),
(4, 48, 'اجازة خاصة', '2023-06-21 01:43:54', 1);

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
  `vacationDuration` varchar(11) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `added_by` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p74_vacation_data`
--

INSERT INTO `p74_vacation_data` (`Vacation_id`, `doctorCodeInput`, `vacationDescription`, `startDate`, `endDate`, `vacationReason`, `vacationFile`, `vacationNotes`, `vacationDuration`, `added_date`, `added_by`) VALUES
(13, 48, 'رسمية', '2023-06-01', '2023-06-05', 'لا يوجد', '191407.jpg', 'لا يوجد', '5 ايام', '2023-06-19 22:58:00', 1),
(16, 51, 'اجازة مرضى', '2023-06-22', '2023-06-24', 'اسباب مرضية', '236734.jpg', 'لا يوجد', '2 يوم', '2023-06-22 15:11:58', 1);

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
(1, 'محمد عبد السلام', 'mohamed', '123', 1, '2023-03-09 15:28:23', 1, '..', 'yes', '1.jpg'),
(2, 'بولا شريف بدر', 'pola', '123', 2, '2023-05-19 17:30:57', 1, 'no', 'no', '2.JPG'),
(13, 'انجى ايهاب', 'engy ehab', '123', 1, '2023-06-22 18:28:30', 1, 'لا يوجد', 'Yes', '530448.jpg');

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
-- Indexes for table `p74_assignments_data`
--
ALTER TABLE `p74_assignments_data`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `doctorCodeInput8` (`doctorCodeInput`),
  ADD KEY `added_by8` (`added_by`);

--
-- Indexes for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  ADD PRIMARY KEY (`id_completeData`),
  ADD KEY `doctorCodeInput` (`doctorCodeInput`),
  ADD KEY `doctorJobInput1` (`doctorJobInput`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `p74_missions_data`
--
ALTER TABLE `p74_missions_data`
  ADD PRIMARY KEY (`mission_id`),
  ADD KEY `doctorCodeInput7` (`doctorCodeInput`),
  ADD KEY `added_by7` (`added_by`);

--
-- Indexes for table `p74_penalties`
--
ALTER TABLE `p74_penalties`
  ADD PRIMARY KEY (`penality_id`),
  ADD KEY `doctorCodeInput2` (`doctorCodeInput`),
  ADD KEY `added_by1` (`added_by`);

--
-- Indexes for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  ADD PRIMARY KEY (`Secondment_id`),
  ADD KEY `doctorCodeInput4` (`doctorCodeInput`),
  ADD KEY `added_by2` (`added_by`);

--
-- Indexes for table `p74_special_vacation_data`
--
ALTER TABLE `p74_special_vacation_data`
  ADD PRIMARY KEY (`Special_vacation_id`),
  ADD KEY `doctorCodeInput6` (`doctorCodeInput`),
  ADD KEY `added_by3` (`added_by`);

--
-- Indexes for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  ADD PRIMARY KEY (`Vacation_id`),
  ADD KEY `doctorCodeInput3` (`doctorCodeInput`),
  ADD KEY `added_by5` (`added_by`);

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
  MODIFY `DoctorCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
-- AUTO_INCREMENT for table `p74_assignments_data`
--
ALTER TABLE `p74_assignments_data`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  MODIFY `id_completeData` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `p74_missions_data`
--
ALTER TABLE `p74_missions_data`
  MODIFY `mission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p74_penalties`
--
ALTER TABLE `p74_penalties`
  MODIFY `penality_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  MODIFY `Secondment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `p74_special_vacation_data`
--
ALTER TABLE `p74_special_vacation_data`
  MODIFY `Special_vacation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  MODIFY `Vacation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `uni_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- Constraints for table `p74_assignments_data`
--
ALTER TABLE `p74_assignments_data`
  ADD CONSTRAINT `added_by8` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorCodeInput8` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_completedata`
--
ALTER TABLE `p74_completedata`
  ADD CONSTRAINT `added_by` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorCodeInput` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorJobInput1` FOREIGN KEY (`doctorJobInput`) REFERENCES `doctor_jobs` (`Doctor_job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_missions_data`
--
ALTER TABLE `p74_missions_data`
  ADD CONSTRAINT `added_by7` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorCodeInput7` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_penalties`
--
ALTER TABLE `p74_penalties`
  ADD CONSTRAINT `added_by1` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorCodeInput2` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  ADD CONSTRAINT `added_by2` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorCodeInput4` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_special_vacation_data`
--
ALTER TABLE `p74_special_vacation_data`
  ADD CONSTRAINT `added_by3` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctorCodeInput6` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  ADD CONSTRAINT `added_by5` FOREIGN KEY (`added_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `doctorCodeInput3` FOREIGN KEY (`doctorCodeInput`) REFERENCES `doctors_account` (`DoctorCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
