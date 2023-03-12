-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 10, 2023 at 11:18 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `graduationproject`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `acceptedstudentdata`
-- 

CREATE TABLE `acceptedstudentdata` (
  `StudentCode` int(11) NOT NULL default '161746',
  `ArbName` varchar(200) character set utf8 collate utf8_unicode_ci default NULL,
  `StudentID` varchar(15) default NULL,
  `image` varchar(20) default NULL,
  PRIMARY KEY  (`StudentCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `acceptedstudentdata`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `application_data`
-- 

CREATE TABLE `application_data` (
  `app_id` tinyint(4) NOT NULL auto_increment,
  `app_name` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Uni_name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `Faculty_name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `Program_name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `Faculty-Uni_logo` varchar(50) default NULL,
  `Program_logo` varchar(50) default NULL,
  `Faculty_Dean` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `Post_grad_vice_dean` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `st_affairs_vice_dean` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `Program_coordinator` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `application_data`
-- 

INSERT INTO `application_data` (`app_id`, `app_name`, `Uni_name`, `Faculty_name`, `Program_name`, `Faculty-Uni_logo`, `Program_logo`, `Faculty_Dean`, `Post_grad_vice_dean`, `st_affairs_vice_dean`, `Program_coordinator`) VALUES 
(1, 'النظام الإلكتروني لإدارة شئون أعضاء هيئة التدريس', 'جامعة حلوان', 'كلية التجارة وإدارة الأعمال', 'BIS برنامج نظم معلومات الأعمال', 'Facultylogo.jpg', 'program.png', 'أ.د. حسام الرفاعي', 'أ.د. هند عودة', 'أ.د. أماني فاخر', 'أ.م.د. رشا فرغلى');

-- --------------------------------------------------------

-- 
-- Table structure for table `courses`
-- 

CREATE TABLE `courses` (
  `CourseCode` varchar(6) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `CourseArbName` varchar(150) character set utf8 collate utf8_unicode_ci NOT NULL,
  `PreRequiset` varchar(6) default NULL,
  PRIMARY KEY  (`CourseCode`),
  KEY `FK_pre` (`PreRequiset`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `courses`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `degree`
-- 

CREATE TABLE `degree` (
  `StudentCode` int(11) NOT NULL,
  `CourseCode` varchar(6) NOT NULL default '',
  `Semester` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Grade` varchar(4) default NULL,
  `GroupID` int(11) default NULL,
  PRIMARY KEY  (`StudentCode`,`CourseCode`,`Semester`,`Year`),
  KEY `Semester` (`Semester`),
  KEY `GroupID` (`GroupID`),
  KEY `CourseCode` (`CourseCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `degree`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `departments`
-- 

CREATE TABLE `departments` (
  `Department_id` tinyint(4) NOT NULL auto_increment,
  `Department_ar_name` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Department_eng_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`Department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
  `id` int(11) NOT NULL auto_increment,
  `DoctorCode` int(4) NOT NULL,
  `CourseCode` varchar(6) NOT NULL,
  `SemesterCode` int(11) NOT NULL,
  `semesterYear` int(11) NOT NULL,
  `group` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `semesteryear` (`semesterYear`),
  KEY `DoctorCode` (`DoctorCode`),
  KEY `CourseCode` (`CourseCode`),
  KEY `SemesterCode` (`SemesterCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `doctorscourse`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `doctors_account`
-- 

CREATE TABLE `doctors_account` (
  `DoctorCode` int(11) NOT NULL auto_increment,
  `Doctor_ar_Name` varchar(80) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Doctor_eng_Name` varchar(50) NOT NULL,
  `National_id` varchar(14) default NULL,
  `Mobile` varchar(10) default NULL,
  `Academic_Mail` varchar(80) default NULL,
  `Personal_Mail` varchar(80) default NULL,
  `DoctorJob` tinyint(4) NOT NULL COMMENT 'ref to doctor job table',
  `University` tinyint(4) NOT NULL COMMENT 'ref to universities table',
  `Faculty` tinyint(4) NOT NULL COMMENT 'ref to faculties table',
  `Department` tinyint(4) NOT NULL COMMENT 'ref to departments table',
  `Type` tinyint(4) default NULL COMMENT 'ref to doctor type table',
  `UserName` varchar(20) default NULL,
  `Password` varchar(100) default NULL,
  `Notes` text character set utf8 collate utf8_unicode_ci,
  `Doctor_image` varchar(50) default NULL,
  `is_enable` varchar(3) NOT NULL default 'Yes' COMMENT 'yes or no',
  PRIMARY KEY  (`DoctorCode`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `doctors_account`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `doctor_jobs`
-- 

CREATE TABLE `doctor_jobs` (
  `Doctor_job_id` tinyint(4) NOT NULL auto_increment,
  `Doctor_job_ar_name` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Doctor_job_eng_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`Doctor_job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
  `Doctor_type_id` tinyint(4) NOT NULL auto_increment,
  `Doctor_type_name` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`Doctor_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
  `Faculty_id` tinyint(4) NOT NULL auto_increment,
  `Faculty_ar_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Faculty_eng_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`Faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `p60_tablename`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `universities`
-- 

CREATE TABLE `universities` (
  `uni_id` tinyint(4) NOT NULL auto_increment,
  `uni_ar_name` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `uni_eng_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`uni_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
  `user_id` tinyint(4) NOT NULL auto_increment,
  `user_ar_name` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type_id` tinyint(4) NOT NULL,
  `added_date` datetime NOT NULL,
  `added_by` tinyint(4) NOT NULL,
  `Notes` text character set utf8 collate utf8_unicode_ci,
  `is_enable` varchar(3) NOT NULL default 'Yes' COMMENT 'yes or no',
  `image` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
  `user_type_id` tinyint(4) NOT NULL auto_increment,
  `user_type_name` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `users_types`
-- 

INSERT INTO `users_types` (`user_type_id`, `user_type_name`) VALUES 
(1, 'Admin'),
(2, 'Employee');
