-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 03:46 PM
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
(14, 'محمد عبد السلام', 'mohamed abd el-salam', '12345678912345', '01201237779', 'mohamed.bis@commerce.helwan.edu.eg', 'mohamed.bis@yahoo.com', 'لا يوجد', '1.jpg', 2, 1, 1, 1, '1970-06-24', '2000-12-01', 'BIS'),
(48, 'بولا شريف بدر', 'paula sherif badr', '30012193100077', '01201237779', 'pola.sherif.badr@commerce.helwan.edu.eg', 'pola88.sherif@yahoo.com', 'لا يوجد', '157233.jpg', 6, 1, 1, 8, '2000-12-19', '2019-09-20', 'BIS'),
(49, 'بافلي محب ماركو', 'bavly moheb marco', '30102113100119', '01287877660', 'pavly.moheb.1920305@commerce.helwan.edu.eg', 'bavlymoheb6@gmail.com', 'لا يوجد', '373857.jpg', 1, 1, 1, 1, '2001-02-11', '2020-01-02', 'BIS'),
(50, 'أنطون محب ماركو', 'Aoton moheb marco', '30102113100135', '01287877008', 'anton.moheb.1920303@commerce.helwan.edu.eg', 'antonmarco060@gmail.com', 'لا يوجد', '878070.jpg', 6, 1, 1, 6, '2001-02-11', '2019-09-19', 'BIS'),
(51, 'يوسف محمد أحمد', 'youssef mohamed ahmed', '30102113100463', '01013964407', 'youssef.mohamed.1920463@commerce.helwan.edu.eg', 'youssef.mohamed@yahoo.com', 'لا يوجد', '984636.jpg', 6, 1, 1, 7, '2001-05-15', '2019-08-21', 'BIS'),
(54, 'انجي ايهاب عوض', 'engy ihab awad', '30107223100491', '01277027663', 'engy.ihab.1920491@commerce.helwan.edu.eg', 'engy.ihab@yahoo.com', 'لا يوجد', '122973.jpg', 6, 1, 1, 1, '2001-07-26', '2019-07-12', 'BIS'),
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
(2, 'معيد', 1, 14),
(3, 'استاذ مساعد', 1, 14),
(4, 'استاذ', 1, 14);

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
(4, 55, 'فصل مؤقت', 'اداري', 'karen.jpg', '20 يوم', '2023-01-01', '2023-01-20', 'لا يوجد'),
(5, 48, 'فصل مؤقت', 'اداري', 'paulaSherif.jpg', '10 ايام', '2023-01-01', '2023-01-10', 'لا يوجد');

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
(3, 54, 'رسمية', 'الامارات العربية المتحدة', 'outside', '1 شهر', '2023-01-01', '2023-02-01', 'engy.jpg', 'لا يوجد'),
(4, 49, 'رسمية', 'الامارات العربية المتحدة', 'outside', '2 شهر', '2023-01-01', '2023-03-01', 'bavly.jpg', 'لا يوجد');

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
(4, 50, 'رسمية', '2023-01-01', '2023-01-20', 'لا يوجد', 'anton.jpg', 'لا يوجد', '20 يوم'),
(5, 51, 'رسمية', '2023-01-01', '2023-01-05', 'لا يوجد', 'youssef.jpg', 'لا يوجد', '5 ايام');

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
(2, 'بولا شريف بدر', 'pola', '123', 2, '2023-05-19 17:30:57', 1, 'no', 'no', '2.JPG');

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
  MODIFY `DoctorCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
  MODIFY `penality_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `p74_secondment_data`
--
ALTER TABLE `p74_secondment_data`
  MODIFY `Secondment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p74_vacation_data`
--
ALTER TABLE `p74_vacation_data`
  MODIFY `Vacation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
