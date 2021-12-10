-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 05:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subjectselection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(15) NOT NULL,
  `Admin Name` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Admin Name`, `password`) VALUES
('BCA1234', 'Shilpan', 'ami143'),
('BCA21341', 'Shilpan', 'ami143'),
('bcapro', '0', 'bcapro'),
('nirav', 'Nirav Chavda', 'shreya143');

-- --------------------------------------------------------

--
-- Table structure for table `bcasubjectlist`
--

CREATE TABLE `bcasubjectlist` (
  `course_code` varchar(8) NOT NULL COMMENT ' ',
  `course_name` varchar(50) NOT NULL,
  `credits` int(1) NOT NULL,
  `course_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcasubjectlist`
--

INSERT INTO `bcasubjectlist` (`course_code`, `course_name`, `credits`, `course_type`) VALUES
('BCA1001', 'Desktop Publishing', 2, 'elective'),
('BCA1002', 'Basic Electronics', 2, 'elective'),
('BCA1003', 'Fundamentals of Accounting', 3, 'elective'),
('BCA1004', 'Discrete Mathematics', 2, 'elective'),
('BCA1005', 'French-1', 2, 'elective'),
('BCA1006', 'Probability Models', 2, 'elective'),
('BCA1007', 'Computerized Accounting', 2, 'elective'),
('BCA1008', 'Basics of Computer Hardware', 2, 'elective'),
('BCA1009', 'Web Publishing', 2, 'elective'),
('BCA1010', 'Introduction to Multimedia', 2, 'elective'),
('BCA1011', 'French-2', 2, 'elective'),
('BCA1012', 'Fundamentals of Management', 2, 'elective'),
('BCA1013', 'Disaster Management', 2, 'elective'),
('BCA1014', 'Numerical Methods', 2, 'elective'),
('BCA1015', 'Optimization Techniques', 2, 'elective'),
('BCA1016', 'Project Management', 2, 'elective'),
('BCA1017', 'Enterprise Resource Planning', 3, 'elective'),
('BCA1018', 'Inventory Management', 2, 'elective'),
('BCA1019', 'Human Resource Management', 2, 'elective'),
('BCA1020', 'Customer Relationship Management', 2, 'elective'),
('BCA1021', 'Knowledge Management', 2, 'elective'),
('BCA1022', 'Enterprise Resource Planning Lab', 2, 'elective'),
('BCA1023', 'Cyber Law', 2, 'elective'),
('BCA1101', 'PC Database', 3, 'fsbca1_core'),
('BCA1102', 'Computer Organization', 2, 'fsbca1_core'),
('BCA1103', 'Operating Systems', 2, 'fsbca1_core'),
('BCA1104', 'Computer Programming', 2, 'fsbca1_core'),
('BCA1105', 'PC Software and Database Lab', 6, 'fsbca1_core'),
('BCA1106', 'Computer Programming Lab', 4, 'fsbca1_core'),
('BCA1107', 'Mathematical Foundation-1', 2, 'fsbca1_core'),
('BCA1108', 'Communication Skills', 2, 'fsbca1_core'),
('BCA1201', 'Introduction to OOP', 3, 'fsbca2_core'),
('BCA1202', 'Data Structure and Algorithms', 3, 'fsbca2_core'),
('BCA1203', 'Database Management Systems', 2, 'fsbca2_core'),
('BCA1204', 'SQL', 2, 'fsbca2_core'),
('BCA1205', 'OOP Lab', 4, 'fsbca2_core'),
('BCA1206', 'Data Structures Lab', 2, 'fsbca2_core'),
('BCA1207', 'SQL Lab', 2, 'fsbca2_core'),
('BCA1208', 'HTML-1 Lab', 2, 'fsbca2_core'),
('BCA1209', ' 	Mathematical Foundation-2', 2, 'fsbca2_core'),
('BCA1210', 'Environmental Science', 2, 'fsbca2_core'),
('BCA1301', 'Java Programming', 4, 'ssbca1_core_elective'),
('BCA1302', '.Net Programming in C#', 4, 'ssbca1_core_elective'),
('BCA1303', '.Net Programming in VB', 4, 'ssbca1_core_elective'),
('BCA1304', 'Shell Programming', 2, 'ssbca1_core'),
('BCA1305', 'Database Application Programming', 3, 'ssbca1_core'),
('BCA1306', 'Computer Networks 1', 3, 'ssbca1_core'),
('BCA1307', 'Java Lab', 2, 'ssbca1_core_elective'),
('BCA1308', '.Net in C# Lab', 2, 'ssbca1_core_elective'),
('BCA1309', '.Net in VB Lab', 2, 'ssbca1_core_elective'),
('BCA1310', 'Shell Programming Lab', 2, 'ssbca1_core'),
('BCA1311', 'Database Application Programming Lab', 4, 'ssbca1_core'),
('BCA1312', 'Computer Networks 1 Lab', 2, 'ssbca1_core'),
('BCA1313', 'Data Exploration', 2, 'ssbca1_core'),
('BCA1314', 'Data Exploration Lab', 2, 'ssbca1_core'),
('BCA1315', 'HTML 2 Lab', 1, 'ssbca1_core'),
('BCA1401', 'Advanced Java Programming', 4, 'ssbca2_core_elective'),
('BCA1402', 'Advanced .Net Programming', 4, 'ssbca2_core_elective'),
('BCA1403', 'Web Technology', 2, 'ssbca2_core'),
('BCA1404', 'Software Engineering 1', 3, 'ssbca2_core'),
('BCA1405', 'Computer Networks 2', 3, 'ssbca2_core'),
('BCA1406', 'Advanced Java Programming Lab', 4, 'ssbca2_core_elective'),
('BCA1407', 'Advanced .Net Programming Lab', 4, 'ssbca2_core_elective'),
('BCA1408', 'Web Technology Lab', 2, 'ssbca2_core'),
('BCA1409', 'Computer Networks 2 Lab', 1, 'ssbca2_core'),
('BCA1410', 'Business Modeling Project', 1, 'ssbca2_core'),
('BCA1411', 'Soft Skills', 1, 'ssbca2_core'),
('BCA1501', 'Software Engineering 2', 4, 'tsbca1_core'),
('BCA1502', 'XML Technology', 2, 'tsbca1_core'),
('BCA1503', 'XML Technology Lab', 2, 'tsbca1_core'),
('BCA1504', 'Mini Project', 4, 'tsbca1_core'),
('BCA1508', 'E-Business', 3, 'tsbca1_core_elective'),
('BCA1509', 'Computer Graphics', 4, 'tsbca1_core_elective'),
('BCA1510', 'Application Frameworks in Java', 4, 'tsbca1_core_elective'),
('BCA1511', 'Application Frameworks in .Net', 4, 'tsbca1_core_elective'),
('BCA1512', 'Discrete Mathematics', 3, 'tsbca1_core_elective'),
('BCA1513', 'Web Application Development', 4, 'tsbca1_core_elective'),
('BCA1514', 'Network Administration', 4, 'tsbca1_core_elective'),
('BCA1515', 'Oracle DBA', 3, 'tsbca1_core_elective'),
('BCA1516', 'SQL Server DBA', 3, 'tsbca1_core_elective'),
('BCA1517', 'Multimedia Programming', 3, 'tsbca1_core_elective'),
('BCA1518', 'Data Warehousing', 3, 'tsbca1_core_elective'),
('BCA1519', 'System Simulation', 4, 'tsbca1_core_elective'),
('BCA1520', 'Unix System Programming', 2, 'tsbca1_core_elective'),
('BCA1521', 'Artificial Intelligence', 4, 'tsbca1_core_elective'),
('BCA1522', 'Elements of Theory of Computation', 4, 'tsbca1_core_elective'),
('BCA1523', 'Mobile Computing', 4, 'tsbca1_core_elective'),
('BCA1525', 'Net VB Lab', 2, 'tsbca1_core_elective'),
('BCA1526', 'CG Lab', 2, 'tsbca1_core_elective'),
('BCA1527', 'Web Designing Lab', 2, 'tsbca1_core_elective'),
('BCA1528', 'Java Frameworks Lab', 2, 'tsbca1_core_elective'),
('BCA1529', '.Net Frameworks Lab', 2, 'tsbca1_core_elective'),
('BCA1530', 'Web Application Devlopement Lab', 2, 'tsbca1_core_elective'),
('BCA1531', 'Network Admin Lab', 2, 'tsbca1_core_elective'),
('BCA1532', 'Oracle DBA Lab', 1, 'tsbca1_core_elective'),
('BCA1533', 'SQL Server DBA Lab', 1, 'tsbca1_core_elective'),
('BCA1534', 'Multimedia Lab', 2, 'tsbca1_core_elective'),
('BCA1535', 'Data Warehousing Lab', 1, 'tsbca1_core_elective'),
('BCA1536', 'Simulation Lab', 2, 'tsbca1_core_elective'),
('BCA1537', 'Unix Systems Programming Lab', 2, 'tsbca1_core_elective'),
('BCA1538', 'Artificial Intelligence Lab', 2, 'tsbca1_core_elective'),
('BCA1539', 'Mobile Computing Lab', 2, 'tsbca1_core_elective'),
('BCA1540', 'Cyber Security', 2, 'tsbca1_core_elective'),
('fsbca1H', 'max_Sem1', 28, ''),
('fsbca1L', 'min_Sem1', 25, ''),
('fsbca2H', 'max_Sem2', 28, ''),
('fsbca2L', 'min_Sem2', 26, ''),
('ssbca1H', 'max_Sem3', 30, ''),
('ssbca1L', 'min_Sem3', 28, ''),
('ssbca2H', 'max_Sem4', 27, ''),
('ssbca2L', 'min_Sem4', 24, ''),
('tsbca1H', 'max_Sem5', 26, ''),
('tsbca1L', 'min_Sem5', 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `Faculty Name` varchar(25) NOT NULL,
  `admin_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `password`, `Faculty Name`, `admin_id`) VALUES
('faculty', 'faculty', 'khushbu', 'bcapro');

-- --------------------------------------------------------

--
-- Table structure for table `form_fybca2015`
--

CREATE TABLE `form_fybca2015` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_fybca2015`
--

INSERT INTO `form_fybca2015` (`app_id`, `course_code`, `courseSem`) VALUES
('BCA201200', 'BCA1001', 2),
('BCA201200', 'BCA1002', 1),
('BCA201200', 'BCA1003', 1),
('BCA201200', 'BCA1101', 1),
('BCA201200', 'BCA1102', 1),
('BCA201200', 'BCA1103', 1),
('BCA201200', 'BCA1104', 1),
('BCA201200', 'BCA1105', 1),
('BCA201200', 'BCA1106', 1),
('BCA201200', 'BCA1107', 1),
('BCA201200', 'BCA1108', 1),
('BCA201200', 'BCA1201', 2),
('BCA201200', 'BCA1202', 2),
('BCA201200', 'BCA1203', 2),
('BCA201200', 'BCA1204', 2),
('BCA201200', 'BCA1205', 2),
('BCA201200', 'BCA1206', 2),
('BCA201200', 'BCA1207', 2),
('BCA2015120', 'BCA1001', 2),
('BCA2015120', 'BCA1003', 1),
('BCA2015120', 'BCA1004', 1),
('BCA2015120', 'BCA1101', 1),
('BCA2015120', 'BCA1102', 1),
('BCA2015120', 'BCA1103', 1),
('BCA2015120', 'BCA1104', 1),
('BCA2015120', 'BCA1105', 1),
('BCA2015120', 'BCA1106', 1),
('BCA2015120', 'BCA1107', 1),
('BCA2015120', 'BCA1108', 1),
('BCA2015120', 'BCA1201', 2),
('BCA2015120', 'BCA1202', 2),
('BCA2015120', 'BCA1203', 2),
('BCA2015120', 'BCA1204', 2),
('BCA2015120', 'BCA1205', 2),
('BCA2015120', 'BCA1206', 2),
('BCA2015120', 'BCA1207', 2),
('BCA2015120', 'BCA1208', 2),
('BCA2015120', 'BCA1209', 2),
('BCA2015120', 'BCA1210', 2),
('BCA201532', 'BCA1001', 2),
('BCA201532', 'BCA1002', 1),
('BCA201532', 'BCA1003', 1),
('BCA201532', 'BCA1004', 1),
('BCA201532', 'BCA1101', 1),
('BCA201532', 'BCA1102', 1),
('BCA201532', 'BCA1103', 1),
('BCA201532', 'BCA1104', 1),
('BCA201532', 'BCA1105', 1),
('BCA201532', 'BCA1106', 1),
('BCA201532', 'BCA1107', 1),
('BCA201532', 'BCA1201', 2),
('BCA201532', 'BCA1202', 2),
('BCA201532', 'BCA1203', 2),
('BCA201532', 'BCA1204', 2),
('BCA201532', 'BCA1205', 2),
('BCA201532', 'BCA1206', 2),
('BCA201532', 'BCA1207', 2),
('BCA201532', 'BCA1208', 2),
('BCA201532', 'BCA1209', 2),
('BCA201532', 'BCA1210', 2),
('BCA201580', 'BCA1002', 1),
('BCA201580', 'BCA1003', 1),
('BCA201580', 'BCA1101', 1),
('BCA201580', 'BCA1102', 1),
('BCA201580', 'BCA1103', 1),
('BCA201580', 'BCA1104', 1),
('BCA201580', 'BCA1105', 1),
('BCA201580', 'BCA1106', 1),
('BCA201580', 'BCA1107', 1),
('BCA201580', 'BCA1108', 1),
('BCA201589', 'BCA1002', 1),
('BCA201589', 'BCA1005', 1),
('BCA201589', 'BCA1101', 1),
('BCA201589', 'BCA1102', 1),
('BCA201589', 'BCA1103', 1),
('BCA201589', 'BCA1104', 1),
('BCA201589', 'BCA1105', 1),
('BCA201589', 'BCA1106', 1),
('BCA201589', 'BCA1107', 1),
('BCA201589', 'BCA1108', 1),
('BCA201589', 'BCA1201', 2),
('BCA201589', 'BCA1202', 2),
('BCA201589', 'BCA1203', 2),
('BCA201589', 'BCA1204', 2),
('BCA201589', 'BCA1205', 2),
('BCA201589', 'BCA1206', 2),
('BCA201589', 'BCA1207', 2),
('BCA201589', 'BCA1208', 2),
('BCA201589', 'BCA1209', 2),
('BCA201589', 'BCA1210', 2),
('BCA201732', 'BCA1001', 2),
('BCA201732', 'BCA1002', 1),
('BCA201732', 'BCA1005', 1),
('BCA201732', 'BCA1101', 1),
('BCA201732', 'BCA1102', 1),
('BCA201732', 'BCA1103', 1),
('BCA201732', 'BCA1104', 1),
('BCA201732', 'BCA1105', 1),
('BCA201732', 'BCA1106', 1),
('BCA201732', 'BCA1107', 1),
('BCA201732', 'BCA1108', 1),
('BCA201732', 'BCA1201', 2),
('BCA201732', 'BCA1202', 2),
('BCA201732', 'BCA1203', 2),
('BCA201732', 'BCA1204', 2),
('BCA201732', 'BCA1205', 2),
('BCA201732', 'BCA1206', 2),
('BCA201732', 'BCA1207', 2),
('BCA201732', 'BCA1208', 2),
('BCA201732', 'BCA1209', 2),
('BCA201732', 'BCA1210', 2);

-- --------------------------------------------------------

--
-- Table structure for table `form_fybca2016`
--

CREATE TABLE `form_fybca2016` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_fybca2016`
--

INSERT INTO `form_fybca2016` (`app_id`, `course_code`, `courseSem`) VALUES
('', 'BCA1001', 2),
('', 'BCA1003', 1),
('', 'BCA1004', 1),
('', 'BCA1101', 1),
('', 'BCA1102', 1),
('', 'BCA1103', 1),
('', 'BCA1104', 1),
('', 'BCA1105', 1),
('', 'BCA1106', 1),
('', 'BCA1107', 1),
('', 'BCA1108', 1),
('', 'BCA1201', 2),
('', 'BCA1202', 2),
('', 'BCA1203', 2),
('', 'BCA1204', 2),
('', 'BCA1205', 2),
('', 'BCA1206', 2),
('', 'BCA1207', 2),
('', 'BCA1208', 2),
('', 'BCA1209', 2),
('', 'BCA1210', 2),
('BCA201613', 'BCA1001', 2),
('BCA201613', 'BCA1002', 1),
('BCA201613', 'BCA1004', 1),
('BCA201613', 'BCA1101', 1),
('BCA201613', 'BCA1102', 1),
('BCA201613', 'BCA1103', 1),
('BCA201613', 'BCA1104', 1),
('BCA201613', 'BCA1105', 1),
('BCA201613', 'BCA1106', 1),
('BCA201613', 'BCA1107', 1),
('BCA201613', 'BCA1108', 1),
('BCA201613', 'BCA1201', 2),
('BCA201613', 'BCA1202', 2),
('BCA201613', 'BCA1203', 2),
('BCA201613', 'BCA1204', 2),
('BCA201613', 'BCA1205', 2),
('BCA201613', 'BCA1206', 2),
('BCA201613', 'BCA1207', 2),
('BCA201613', 'BCA1208', 2),
('BCA201613', 'BCA1210', 2);

-- --------------------------------------------------------

--
-- Table structure for table `form_fybca2017`
--

CREATE TABLE `form_fybca2017` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_fybca2017`
--

INSERT INTO `form_fybca2017` (`app_id`, `course_code`, `courseSem`) VALUES
('BCA201532', 'BCA1001', 2),
('BCA201532', 'BCA1002', 2),
('BCA201532', 'BCA1004', 2),
('BCA201532', 'BCA1011', 1),
('BCA201532', 'BCA1101', 1),
('BCA201532', 'BCA1102', 1),
('BCA201532', 'BCA1103', 1),
('BCA201532', 'BCA1104', 1),
('BCA201532', 'BCA1105', 1),
('BCA201532', 'BCA1106', 1),
('BCA201532', 'BCA1107', 1),
('BCA201532', 'BCA1108', 1),
('BCA201532', 'BCA1201', 2),
('BCA201532', 'BCA1202', 2),
('BCA201532', 'BCA1203', 2),
('BCA201532', 'BCA1204', 2),
('BCA201532', 'BCA1205', 2),
('BCA201532', 'BCA1206', 2),
('BCA201532', 'BCA1207', 2),
('BCA201532', 'BCA1208', 2),
('BCA201532', 'BCA1209', 2),
('BCA201532', 'BCA1210', 2),
('BCA201589', 'BCA1001', 1),
('BCA201589', 'BCA1011', 1),
('BCA201589', 'BCA1101', 1),
('BCA201589', 'BCA1102', 1),
('BCA201589', 'BCA1103', 1),
('BCA201589', 'BCA1104', 1),
('BCA201589', 'BCA1105', 1),
('BCA201589', 'BCA1106', 1),
('BCA201589', 'BCA1107', 1),
('BCA201589', 'BCA1108', 1),
('BCA201599', 'BCA1001', 2),
('BCA201599', 'BCA1002', 2),
('BCA201599', 'BCA1003', 1),
('BCA201599', 'BCA1004', 1),
('BCA201599', 'BCA1101', 1),
('BCA201599', 'BCA1102', 1),
('BCA201599', 'BCA1103', 1),
('BCA201599', 'BCA1104', 1),
('BCA201599', 'BCA1105', 1),
('BCA201599', 'BCA1106', 1),
('BCA201599', 'BCA1107', 1),
('BCA201599', 'BCA1108', 1),
('BCA201599', 'BCA1201', 2),
('BCA201599', 'BCA1202', 2),
('BCA201599', 'BCA1203', 2),
('BCA201599', 'BCA1204', 2),
('BCA201599', 'BCA1205', 2),
('BCA201599', 'BCA1206', 2),
('BCA201599', 'BCA1207', 2),
('BCA201599', 'BCA1208', 2),
('BCA201599', 'BCA1209', 2),
('BCA201599', 'BCA1210', 2),
('BCA201632', 'BCA1002', 1),
('BCA201632', 'BCA1003', 1),
('BCA201632', 'BCA1004', 1),
('BCA201632', 'BCA1101', 1),
('BCA201632', 'BCA1102', 1),
('BCA201632', 'BCA1103', 1),
('BCA201632', 'BCA1104', 1),
('BCA201632', 'BCA1105', 1),
('BCA201632', 'BCA1107', 1),
('BCA201632', 'BCA1108', 1),
('BCA20172', 'BCA1001', 2),
('BCA20172', 'BCA1003', 1),
('BCA20172', 'BCA1004', 1),
('BCA20172', 'BCA1101', 1),
('BCA20172', 'BCA1102', 1),
('BCA20172', 'BCA1103', 1),
('BCA20172', 'BCA1104', 1),
('BCA20172', 'BCA1105', 1),
('BCA20172', 'BCA1106', 1),
('BCA20172', 'BCA1107', 1),
('BCA20172', 'BCA1108', 1),
('BCA20172', 'BCA1201', 2),
('BCA20172', 'BCA1202', 2),
('BCA20172', 'BCA1203', 2),
('BCA20172', 'BCA1204', 2),
('BCA20172', 'BCA1205', 2),
('BCA20172', 'BCA1206', 2),
('BCA20172', 'BCA1207', 2),
('BCA20172', 'BCA1208', 2),
('BCA20172', 'BCA1209', 2),
('BCA20172', 'BCA1210', 2),
('BCA201750', 'BCA1001', 2),
('BCA201750', 'BCA1004', 1),
('BCA201750', 'BCA1005', 1),
('BCA201750', 'BCA1101', 1),
('BCA201750', 'BCA1102', 1),
('BCA201750', 'BCA1103', 1),
('BCA201750', 'BCA1104', 1),
('BCA201750', 'BCA1105', 1),
('BCA201750', 'BCA1106', 1),
('BCA201750', 'BCA1107', 1),
('BCA201750', 'BCA1108', 1),
('BCA201750', 'BCA1201', 2),
('BCA201750', 'BCA1202', 2),
('BCA201750', 'BCA1203', 2),
('BCA201750', 'BCA1204', 2),
('BCA201750', 'BCA1205', 2),
('BCA201750', 'BCA1206', 2),
('BCA201750', 'BCA1207', 2),
('BCA201750', 'BCA1208', 2),
('BCA201750', 'BCA1209', 2),
('BCA201750', 'BCA1210', 2),
('BCA201769', 'BCA1001', 2),
('BCA201769', 'BCA1002', 1),
('BCA201769', 'BCA1005', 1),
('BCA201769', 'BCA1101', 1),
('BCA201769', 'BCA1102', 1),
('BCA201769', 'BCA1103', 1),
('BCA201769', 'BCA1104', 1),
('BCA201769', 'BCA1105', 1),
('BCA201769', 'BCA1106', 1),
('BCA201769', 'BCA1107', 1),
('BCA201769', 'BCA1108', 1),
('BCA201769', 'BCA1201', 2),
('BCA201769', 'BCA1202', 2),
('BCA201769', 'BCA1203', 2),
('BCA201769', 'BCA1204', 2),
('BCA201769', 'BCA1205', 2),
('BCA201769', 'BCA1206', 2),
('BCA201769', 'BCA1207', 2),
('BCA201769', 'BCA1208', 2),
('BCA201769', 'BCA1209', 2),
('BCA201769', 'BCA1210', 2);

-- --------------------------------------------------------

--
-- Table structure for table `form_fybca2018`
--

CREATE TABLE `form_fybca2018` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_fybca2018`
--

INSERT INTO `form_fybca2018` (`app_id`, `course_code`, `courseSem`) VALUES
('BCA201832', 'BCA1001', 2),
('BCA201832', 'BCA1002', 1),
('BCA201832', 'BCA1003', 1),
('BCA201832', 'BCA1015', 2),
('BCA201832', 'BCA1101', 1),
('BCA201832', 'BCA1102', 1),
('BCA201832', 'BCA1103', 1),
('BCA201832', 'BCA1104', 1),
('BCA201832', 'BCA1105', 1),
('BCA201832', 'BCA1106', 1),
('BCA201832', 'BCA1107', 1),
('BCA201832', 'BCA1108', 1),
('BCA201832', 'BCA1201', 2),
('BCA201832', 'BCA1202', 2),
('BCA201832', 'BCA1203', 2),
('BCA201832', 'BCA1204', 2),
('BCA201832', 'BCA1205', 2),
('BCA201832', 'BCA1206', 2),
('BCA201832', 'BCA1207', 2),
('BCA201832', 'BCA1208', 2),
('BCA201832', 'BCA1209', 2),
('BCA201832', 'BCA1210', 2);

-- --------------------------------------------------------

--
-- Table structure for table `form_fymsc2017`
--

CREATE TABLE `form_fymsc2017` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_fymsc2018`
--

CREATE TABLE `form_fymsc2018` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_sybca2016`
--

CREATE TABLE `form_sybca2016` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_sybca2016`
--

INSERT INTO `form_sybca2016` (`app_id`, `course_code`, `courseSem`) VALUES
('BCA201200', 'BCA1010', 4),
('BCA201200', 'BCA1301', 3),
('BCA201200', 'BCA1303', 3),
('BCA201200', 'BCA1304', 3),
('BCA201200', 'BCA1306', 3),
('BCA201200', 'BCA1307', 3),
('BCA201200', 'BCA1311', 3),
('BCA201200', 'BCA1312', 3),
('BCA201200', 'BCA1313', 3),
('BCA201200', 'BCA1314', 3),
('BCA201200', 'BCA1401', 4),
('BCA201200', 'BCA1402', 4),
('BCA201200', 'BCA1403', 4),
('BCA201200', 'BCA1404', 4),
('BCA201200', 'BCA1405', 4),
('BCA201200', 'BCA1408', 4),
('BCA201200', 'BCA1410', 4),
('BCA201200', 'BCA1411', 4),
('BCA2015120', 'BCA1010', 4),
('BCA2015120', 'BCA1301', 3),
('BCA2015120', 'BCA1304', 3),
('BCA2015120', 'BCA1306', 3),
('BCA2015120', 'BCA1307', 3),
('BCA2015120', 'BCA1311', 3),
('BCA2015120', 'BCA1312', 3),
('BCA2015120', 'BCA1313', 3),
('BCA2015120', 'BCA1314', 3),
('BCA2015120', 'BCA1315', 3),
('BCA2015120', 'BCA1401', 4),
('BCA2015120', 'BCA1402', 4),
('BCA2015120', 'BCA1403', 4),
('BCA2015120', 'BCA1404', 4),
('BCA2015120', 'BCA1405', 4),
('BCA2015120', 'BCA1408', 4),
('BCA2015120', 'BCA1410', 4),
('BCA2015120', 'BCA1411', 4),
('BCA201532', 'BCA1008', 3),
('BCA201532', 'BCA1009', 4),
('BCA201532', 'BCA1010', 4),
('BCA201532', 'BCA1011', 3),
('BCA201532', 'BCA1301', 3),
('BCA201532', 'BCA1304', 3),
('BCA201532', 'BCA1305', 3),
('BCA201532', 'BCA1306', 3),
('BCA201532', 'BCA1310', 3),
('BCA201532', 'BCA1311', 3),
('BCA201532', 'BCA1312', 3),
('BCA201532', 'BCA1313', 3),
('BCA201532', 'BCA1314', 3),
('BCA201532', 'BCA1315', 3),
('BCA201532', 'BCA1401', 4),
('BCA201532', 'BCA1403', 4),
('BCA201532', 'BCA1404', 4),
('BCA201532', 'BCA1405', 4),
('BCA201532', 'BCA1406', 4),
('BCA201532', 'BCA1408', 4),
('BCA201532', 'BCA1409', 4),
('BCA201532', 'BCA1410', 4),
('BCA201532', 'BCA1411', 4),
('BCA201589', 'BCA1003', 3),
('BCA201589', 'BCA1010', 4),
('BCA201589', 'BCA1301', 3),
('BCA201589', 'BCA1304', 3),
('BCA201589', 'BCA1306', 3),
('BCA201589', 'BCA1307', 3),
('BCA201589', 'BCA1311', 3),
('BCA201589', 'BCA1312', 3),
('BCA201589', 'BCA1313', 3),
('BCA201589', 'BCA1314', 3),
('BCA201589', 'BCA1315', 3),
('BCA201589', 'BCA1401', 4),
('BCA201589', 'BCA1403', 4),
('BCA201589', 'BCA1404', 4),
('BCA201589', 'BCA1405', 4),
('BCA201589', 'BCA1407', 4),
('BCA201589', 'BCA1408', 4),
('BCA201589', 'BCA1410', 4),
('BCA201589', 'BCA1411', 4),
('BCA201632', 'BCA1301', 3),
('BCA201632', 'BCA1304', 3),
('BCA201632', 'BCA1306', 3),
('BCA201632', 'BCA1307', 3),
('BCA201632', 'BCA1311', 3),
('BCA201632', 'BCA1312', 3),
('BCA201632', 'BCA1313', 3),
('BCA201632', 'BCA1314', 3),
('BCA201632', 'BCA1315', 3),
('BCA201732', 'BCA1010', 4),
('BCA201732', 'BCA1301', 3),
('BCA201732', 'BCA1302', 3),
('BCA201732', 'BCA1304', 3),
('BCA201732', 'BCA1306', 3),
('BCA201732', 'BCA1311', 3),
('BCA201732', 'BCA1312', 3),
('BCA201732', 'BCA1313', 3),
('BCA201732', 'BCA1314', 3),
('BCA201732', 'BCA1315', 3),
('BCA201732', 'BCA1401', 4),
('BCA201732', 'BCA1402', 4),
('BCA201732', 'BCA1403', 4),
('BCA201732', 'BCA1404', 4),
('BCA201732', 'BCA1405', 4),
('BCA201732', 'BCA1407', 4),
('BCA201732', 'BCA1408', 4),
('BCA201732', 'BCA1410', 4),
('BCA201732', 'BCA1411', 4);

-- --------------------------------------------------------

--
-- Table structure for table `form_sybca2017`
--

CREATE TABLE `form_sybca2017` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_sybca2017`
--

INSERT INTO `form_sybca2017` (`app_id`, `course_code`, `courseSem`) VALUES
('', 'BCA1010', 4),
('', 'BCA1301', 3),
('', 'BCA1304', 3),
('', 'BCA1306', 3),
('', 'BCA1307', 3),
('', 'BCA1311', 3),
('', 'BCA1312', 3),
('', 'BCA1313', 3),
('', 'BCA1314', 3),
('', 'BCA1315', 3),
('', 'BCA1401', 4),
('', 'BCA1403', 4),
('', 'BCA1404', 4),
('', 'BCA1405', 4),
('', 'BCA1407', 4),
('', 'BCA1408', 4),
('', 'BCA1410', 4),
('', 'BCA1411', 4),
('BCA201621', 'BCA1010', 4),
('BCA201621', 'BCA1301', 3),
('BCA201621', 'BCA1302', 3),
('BCA201621', 'BCA1304', 3),
('BCA201621', 'BCA1306', 3),
('BCA201621', 'BCA1307', 3),
('BCA201621', 'BCA1311', 3),
('BCA201621', 'BCA1312', 3),
('BCA201621', 'BCA1313', 3),
('BCA201621', 'BCA1314', 3),
('BCA201621', 'BCA1315', 3),
('BCA201621', 'BCA1401', 4),
('BCA201621', 'BCA1402', 4),
('BCA201621', 'BCA1403', 4),
('BCA201621', 'BCA1404', 4),
('BCA201621', 'BCA1405', 4),
('BCA201621', 'BCA1407', 4),
('BCA201621', 'BCA1408', 4),
('BCA201621', 'BCA1410', 4),
('BCA201621', 'BCA1411', 4),
('BCA201632', 'BCA1010', 4),
('BCA201632', 'BCA1301', 3),
('BCA201632', 'BCA1304', 3),
('BCA201632', 'BCA1306', 3),
('BCA201632', 'BCA1307', 3),
('BCA201632', 'BCA1311', 3),
('BCA201632', 'BCA1312', 3),
('BCA201632', 'BCA1313', 3),
('BCA201632', 'BCA1314', 3),
('BCA201632', 'BCA1315', 3),
('BCA201632', 'BCA1401', 4),
('BCA201632', 'BCA1403', 4),
('BCA201632', 'BCA1404', 4),
('BCA201632', 'BCA1405', 4),
('BCA201632', 'BCA1407', 4),
('BCA201632', 'BCA1408', 4),
('BCA201632', 'BCA1410', 4),
('BCA201632', 'BCA1411', 4);

-- --------------------------------------------------------

--
-- Table structure for table `form_sybca2018`
--

CREATE TABLE `form_sybca2018` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_symsc2017`
--

CREATE TABLE `form_symsc2017` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_symsc2018`
--

CREATE TABLE `form_symsc2018` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_tybca2016`
--

CREATE TABLE `form_tybca2016` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_tybca2017`
--

CREATE TABLE `form_tybca2017` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_tybca2017`
--

INSERT INTO `form_tybca2017` (`app_id`, `course_code`, `courseSem`) VALUES
('BCA201532', 'BCA1016', 5),
('BCA201532', 'BCA1019', 5),
('BCA201532', 'BCA1501', 5),
('BCA201532', 'BCA1502', 5),
('BCA201532', 'BCA1503', 5),
('BCA201532', 'BCA1504', 5),
('BCA201532', 'BCA1513', 5),
('BCA201532', 'BCA1521', 5),
('BCA201732', 'BCA1003', 5),
('BCA201732', 'BCA1501', 5),
('BCA201732', 'BCA1502', 5),
('BCA201732', 'BCA1503', 5),
('BCA201732', 'BCA1504', 5),
('BCA201732', 'BCA1513', 5),
('BCA201732', 'BCA1521', 5),
('BCA201732', 'BCA1523', 5);

-- --------------------------------------------------------

--
-- Table structure for table `form_tybca2018`
--

CREATE TABLE `form_tybca2018` (
  `app_id` varchar(12) NOT NULL,
  `course_code` varchar(8) NOT NULL,
  `courseSem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fsbca-i`
--

CREATE TABLE `fsbca-i` (
  `course_code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fsbca-i`
--

INSERT INTO `fsbca-i` (`course_code`) VALUES
('BCA1001'),
('BCA1002'),
('BCA1003'),
('BCA1004'),
('BCA1005'),
('BCA1006'),
('BCA1007'),
('BCA1101'),
('BCA1102'),
('BCA1103'),
('BCA1104'),
('BCA1105'),
('BCA1106'),
('BCA1107'),
('BCA1108');

-- --------------------------------------------------------

--
-- Table structure for table `fsbca-ii`
--

CREATE TABLE `fsbca-ii` (
  `course_code` varchar(8) NOT NULL COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fsbca-ii`
--

INSERT INTO `fsbca-ii` (`course_code`) VALUES
('BCA1001'),
('BCA1002'),
('BCA1003'),
('BCA1004'),
('BCA1007'),
('BCA1015'),
('BCA1016'),
('BCA1104'),
('BCA1105'),
('BCA1106'),
('BCA1201'),
('BCA1202'),
('BCA1203'),
('BCA1204'),
('BCA1205'),
('BCA1206'),
('BCA1207'),
('BCA1208'),
('BCA1209'),
('BCA1210');

-- --------------------------------------------------------

--
-- Table structure for table `fsmsc-i`
--

CREATE TABLE `fsmsc-i` (
  `course_code` varchar(8) NOT NULL COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fsmsc-ii`
--

CREATE TABLE `fsmsc-ii` (
  `course_code` varchar(8) NOT NULL COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fybca2015`
--

CREATE TABLE `fybca2015` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fybca2015`
--

INSERT INTO `fybca2015` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('BCA201432', '0', 'sfdgdhfg', 'adkfjbas', 'kdbsfksd', 'kbdskfbskd', 'dkjfbsd2r42@gafdf.com', '2147483647', 1, 0),
('BCA201501', '0', 'tybca1', 'Akash', 'j', 'Rao', 'teerthmehta5@gmail.com', '2147483647', 0, 0),
('BCA201532', NULL, 'bcapro', 'Harshil', 'J', 'Patel', 'harshilpatel415@gmail.com', '', 1, 2),
('BCA201535', NULL, 'bcapro', 'FA', 'ajkl', 'jks', '', '', 1, 0),
('BCA201560', NULL, 'bcapro', 'Harshil', 'Jayantibhai', 'Patel', 'harshilpatel415@gmail.com', '9712321831', 1, 0),
('BCA201580', NULL, 'bcapro', 'h', 'k', 'p', 'ronitroy123@gmail.com', '9712321831', 1, 1),
('BCA201589', '0', 'tybca89', 'Sameksha', 'M', 'Nagar', 'smnagarl415@gmail.com', '2147483647', 0, 2),
('BCA201712', '0', 'asjdkhaskj', 'iadgkabdkc', 'ihdukvbskd', 'buksdbkcs', '', '0', 1, 0),
('SYBCA2014', '0', 'dfgdhjk', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 0, 0),
('SYBCA2014213', '0', 'dfghjkljk', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fybca2016`
--

CREATE TABLE `fybca2016` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fybca2016`
--

INSERT INTO `fybca2016` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('', '0', '', '', '', '', '', '0', 0, 2),
('BCA1234', '1234256789', 'sybca32', 'Harshil', 'J', 'Patel', 'sdiahs', '384923443', 0, 0),
('BCA1256', '0', 'adsdasda', 'Harshil', 'J', 'Patel', 'harshilpatel415@gmail.com', '2147483647', 0, 0),
('BCA201121', NULL, 'bcapro', 'sakdh', 'kadh', 'uksg', '', '', 1, 0),
('BCA201512', NULL, 'bcapro', 'fask', 'kuahfuka', 'kk', '', '', 1, 0),
('BCA201521', '0', 'sdfasgdhfg', 'Teerth', 'S', 'Mehta', 'teerthmehta5@gmail.com', '2147483647', 0, 0),
('BCA201523', NULL, 'bcapro', 'TEST', 'CAse', '1', 'harshilpatel415@gmail.com', '8712635263', 1, 0),
('BCA201627', NULL, 'bcapro', 'hkdasd', 'bhsd', 'hbkcdk', 'harshilpatel415@gmail.com', '5637482347', 1, 0),
('BCA201632', '0', 'bcapro', 'Harshil', 'kdbsfksd', 'kbdskfbskd', 'dkjfbsd2r42@gafdf.com', '2147483647', 0, 2),
('BCA201713', '0', 'bcapro', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 1, 0),
('FYBCA201412', '0', 'dsfgdhjgkh', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 1, 0),
('FYBCA2014134', '0', 'sdfghfjh', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fybca2017`
--

CREATE TABLE `fybca2017` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fybca2017`
--

INSERT INTO `fybca2017` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('BCA201433', '0', '123456', 'adkfjbas', 'kdbsfksd', 'Mehta', 'teerthmehta5@gmail.com', '2147483647', 1, 0),
('BCA201508', NULL, 'bcapro', 'Arun', 'R', 'Sharma', 'harshilpatel415@gmail.com', '2134536785', 0, 0),
('BCA2015100', '0', 'bcapro', 'T', 'S', 'M', 'teerthmehta5@gmail.com', '2147483647', 0, 0),
('BCA2015111', '0', 'bcapro', 'M', 'S', 'Dhoni', 'tirthmehta007@gmail.com', '2147483647', 0, 0),
('BCA2015119', '', 'bcapro', 'Ronit', 'R', 'Roy', 'harshilpatel415@gmail.com', '8827474747', 0, 2),
('BCA201512', '0', '123456', 'Harshil', 'J', 'Patel', 'harshilpatel415@gmail.com', '2147483647', 0, 0),
('BCA2015149', NULL, 'bcapro', 'AYsf', 'sdkf', 'fkjsdbf', 'sdasd@gmail.in', '2147483647', 1, 0),
('BCA2015199', '0', 'bcapro', 'Harshil', 'J', 'Patel', 'harshilpatel415@gmail.com', '1727384848', 0, 0),
('BCA201521', '0', 'adsasd', 'adfadfds', 'dsfsfa', 'ssfgsv', 'ronitroy123@gmail.com', '2147483647', 1, 0),
('BCA201532', '2015033800117331', 'fybca32', 'Harshil', 'Jayantibhai', 'Patel', 'harshilpatel415@gmail.com', '9712483161', 0, 2),
('BCA201577', NULL, 'sameksha', 'a', 'b', 'c', '', '5589632144', 0, 0),
('BCA201589', '0', 'sameksha', 'Sameksha Nagar', 'Nagar', 'Nagar', 'samekshanagar@gmail.com', '2147483647', 0, 1),
('BCA201599', '2015033800116881', 'bcapro', 'Teerth', 'A', 'M', 'tirthmehta007@gmail.com', '2147483647', 0, 2),
('BCA201689', '0', '123456', '12', '13', '14', '', '1234567890', 0, 0),
('BCA20172', NULL, 'bcapro', 'khushbu', 'p ', 'raval', 'rvl10khushbu@gmail.com', '9428479812', 0, 2),
('BCA201732', NULL, 'bcapro', 'Harshil', 'j', 'Patel', 'harshilpatel415@gmail.com', '', 1, 0),
('BCA201750', '', 'bcapro', 'Bomb', 'B', 'Shah', '', '', 0, 2),
('MSC201621', NULL, 'bcapro', 'FB', 'A', 'P', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fybca2018`
--

CREATE TABLE `fybca2018` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fybca2018`
--

INSERT INTO `fybca2018` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('BCA201832', '2015033800117331', 'bcapro', 'Harshil', 'J', 'Patel', 'harshilpatel415@gmail.com', '9712483161', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `fymsc2017`
--

CREATE TABLE `fymsc2017` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fymsc2017`
--

INSERT INTO `fymsc2017` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('FYMSC201645', NULL, 'sadasdas', 'asdsad', 'sadasd', 'asdasd', 'asdasdas', '0', 0, 0),
('FYMSC501645', NULL, 'dfghjgfd', 'asdsad', 'sadasd', 'asdasd', 'asdasdas', '0', 0, 0),
('SYBCA2014211', NULL, 'dsfgsdhfjgkhlj', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fymsc2018`
--

CREATE TABLE `fymsc2018` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mscsubjectlist`
--

CREATE TABLE `mscsubjectlist` (
  `course_code` varchar(8) NOT NULL COMMENT ' ',
  `course_name` varchar(50) NOT NULL,
  `credits` int(1) NOT NULL,
  `course_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ssbca-i`
--

CREATE TABLE `ssbca-i` (
  `course_code` varchar(8) NOT NULL COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssbca-i`
--

INSERT INTO `ssbca-i` (`course_code`) VALUES
('BCA1008'),
('BCA1011'),
('BCA1013'),
('BCA1301'),
('BCA1302'),
('BCA1303'),
('BCA1304'),
('BCA1305'),
('BCA1306'),
('BCA1307'),
('BCA1308'),
('BCA1309'),
('BCA1310'),
('BCA1311'),
('BCA1312'),
('BCA1313'),
('BCA1314'),
('BCA1315');

-- --------------------------------------------------------

--
-- Table structure for table `ssbca-ii`
--

CREATE TABLE `ssbca-ii` (
  `course_code` varchar(8) NOT NULL COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssbca-ii`
--

INSERT INTO `ssbca-ii` (`course_code`) VALUES
('BCA1009'),
('BCA1010'),
('BCA1021'),
('BCA1022'),
('BCA1023'),
('BCA1401'),
('BCA1402'),
('BCA1403'),
('BCA1404'),
('BCA1405'),
('BCA1406'),
('BCA1407'),
('BCA1408'),
('BCA1409'),
('BCA1410'),
('BCA1411');

-- --------------------------------------------------------

--
-- Table structure for table `ssmsc-i`
--

CREATE TABLE `ssmsc-i` (
  `course_code` varchar(8) NOT NULL COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ssmsc-ii`
--

CREATE TABLE `ssmsc-ii` (
  `course_code` varchar(8) NOT NULL COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sybca2016`
--

CREATE TABLE `sybca2016` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sybca2016`
--

INSERT INTO `sybca2016` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('BCA201432', '0', 'sfdgdhfg', 'adkfjbas', 'kdbsfksd', 'kbdskfbskd', 'dkjfbsd2r42@gafdf.com', '2147483647', 1, 0),
('BCA201501', '0', 'tybca1', 'Akash', 'j', 'Rao', 'teerthmehta5@gmail.com', '2147483647', 0, 0),
('BCA201532', NULL, 'bcapro', 'Harshil', 'J', 'Patel', 'harshilpatel415@gmail.com', '', 1, 0),
('BCA201535', NULL, 'bcapro', 'FA', 'ajkl', 'jks', '', '', 1, 0),
('BCA201560', NULL, 'bcapro', 'Harshil', 'Jayantibhai', 'Patel', 'harshilpatel415@gmail.com', '9712321831', 1, 0),
('BCA201580', NULL, 'bcapro', 'h', 'k', 'p', 'ronitroy123@gmail.com', '9712321831', 1, 0),
('BCA201589', '0', 'tybca89', 'Sameksha', 'M', 'Nagar', 'smnagarl415@gmail.com', '2147483647', 0, 0),
('BCA201712', '0', 'asjdkhaskj', 'iadgkabdkc', 'ihdukvbskd', 'buksdbkcs', '', '0', 1, 0),
('SYBCA2014', '0', 'dfgdhjk', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 0, 0),
('SYBCA2014213', '0', 'dfghjkljk', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sybca2017`
--

CREATE TABLE `sybca2017` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sybca2017`
--

INSERT INTO `sybca2017` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('BCA1234', '1234256789', 'sybca32', 'Harshil', 'J', 'Patel', 'sdiahs', '384923443', 0, 0),
('BCA1256', '0', 'adsdasda', 'Harshil', 'J', 'Patel', 'harshilpatel415@gmail.com', '2147483647', 0, 0),
('BCA201121', NULL, 'bcapro', 'sakdh', 'kadh', 'uksg', '', '', 1, 0),
('BCA201512', NULL, 'bcapro', 'fask', 'kuahfuka', 'kk', '', '', 1, 0),
('BCA201521', NULL, 'bcapro', 'adf', 'kshf', 'suh', '', '', 1, 0),
('BCA201523', NULL, 'bcapro', 'TEST', 'CAse', '1', 'harshilpatel415@gmail.com', '8712635263', 1, 0),
('BCA201613', '0', 'bcapro', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 0, 2),
('BCA201621', '0', 'bcapro', 'Teerth', 'S', 'Mehta', 'teerthmehta5@gmail.com', '2147483647', 0, 4),
('BCA201627', NULL, 'bcapro', 'hkdasd', 'bhsd', 'hbkcdk', 'harshilpatel415@gmail.com', '5637482347', 1, 0),
('BCA201632', '0', 'bcapro', 'Harshil', 'kdbsfksd', 'kbdskfbskd', 'dkjfbsd2r42@gafdf.com', '2147483647', 0, 4),
('FYBCA201412', '0', 'dsfgdhjgkh', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 0, 0),
('FYBCA2014134', '0', 'sdfghfjh', 'Ronit', 'R', 'Roy', 'ronitroy123@gmail.com', '2147483647', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sybca2018`
--

CREATE TABLE `sybca2018` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `symsc2017`
--

CREATE TABLE `symsc2017` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symsc2017`
--

INSERT INTO `symsc2017` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('SYMSC123323', '0', 'dgfergert', 'adssafsf', 'ghtuyerafg', 'fdsytrey', '345y6ujtgmfnde43trwae1', '2147483647', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `symsc2018`
--

CREATE TABLE `symsc2018` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsbca-i`
--

CREATE TABLE `tsbca-i` (
  `course_code` varchar(8) NOT NULL COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsbca-i`
--

INSERT INTO `tsbca-i` (`course_code`) VALUES
('BCA1001'),
('BCA1002'),
('BCA1003'),
('BCA1016'),
('BCA1019'),
('BCA1501'),
('BCA1502'),
('BCA1503'),
('BCA1504'),
('BCA1513'),
('BCA1521'),
('BCA1523');

-- --------------------------------------------------------

--
-- Table structure for table `tybca2016`
--

CREATE TABLE `tybca2016` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tybca2017`
--

CREATE TABLE `tybca2017` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tybca2017`
--

INSERT INTO `tybca2017` (`app_id`, `prn`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `verified`, `formsubmit`) VALUES
('BCA201432', '0', 'sfdgdhfg', 'adkfjbas', 'kdbsfksd', 'kbdskfbskd', 'dkjfbsd2r42@gafdf.com', '2147483647', 1, 0),
('BCA201501', '0', 'tybca1', 'Akash', 'j', 'Rao', 'teerthmehta5@gmail.com', '2147483647', 0, 0),
('BCA2015111', NULL, 'bcapro', 'Teerth', 'S', 'Mehta', 'tirthmehta007@gmail.com', '9925604040', 0, 0),
('BCA201532', '', 'bcapro', 'Harsh', 'J', 'Patel', 'harshilpatel415@gmail.com', '', 0, 5),
('BCA201535', NULL, 'bcapro', 'FA', 'ajkl', 'jks', '', '', 1, 0),
('BCA201560', NULL, 'bcapro', 'Harshil', 'Jayantibhai', 'Patel', 'harshilpatel415@gmail.com', '9712321831', 0, 0),
('BCA201580', '', 'bcapro', 'Harshil', 'k', 'p', 'ronitroy123@gmail.com', '9712321831', 0, 1),
('BCA201589', '0', 'bcapro', 'Sameksha', 'M', 'Nagar', 'smnagarl415@gmail.com', '2147483647', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tybca2018`
--

CREATE TABLE `tybca2018` (
  `app_id` varchar(12) NOT NULL,
  `prn` varchar(16) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '1',
  `formsubmit` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bcasubjectlist`
--
ALTER TABLE `bcasubjectlist`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `form_fybca2015`
--
ALTER TABLE `form_fybca2015`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_fybca2016`
--
ALTER TABLE `form_fybca2016`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_fybca2017`
--
ALTER TABLE `form_fybca2017`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_fybca2018`
--
ALTER TABLE `form_fybca2018`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_fymsc2017`
--
ALTER TABLE `form_fymsc2017`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_fymsc2018`
--
ALTER TABLE `form_fymsc2018`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_sybca2016`
--
ALTER TABLE `form_sybca2016`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_sybca2017`
--
ALTER TABLE `form_sybca2017`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_sybca2018`
--
ALTER TABLE `form_sybca2018`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_symsc2017`
--
ALTER TABLE `form_symsc2017`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_symsc2018`
--
ALTER TABLE `form_symsc2018`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_tybca2016`
--
ALTER TABLE `form_tybca2016`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_tybca2017`
--
ALTER TABLE `form_tybca2017`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `form_tybca2018`
--
ALTER TABLE `form_tybca2018`
  ADD PRIMARY KEY (`app_id`,`course_code`);

--
-- Indexes for table `fsbca-i`
--
ALTER TABLE `fsbca-i`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `fsbca-ii`
--
ALTER TABLE `fsbca-ii`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `fsmsc-i`
--
ALTER TABLE `fsmsc-i`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `fsmsc-ii`
--
ALTER TABLE `fsmsc-ii`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `fybca2015`
--
ALTER TABLE `fybca2015`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `fybca2016`
--
ALTER TABLE `fybca2016`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `fybca2017`
--
ALTER TABLE `fybca2017`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `fybca2018`
--
ALTER TABLE `fybca2018`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `fymsc2017`
--
ALTER TABLE `fymsc2017`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `fymsc2018`
--
ALTER TABLE `fymsc2018`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `mscsubjectlist`
--
ALTER TABLE `mscsubjectlist`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `ssbca-i`
--
ALTER TABLE `ssbca-i`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `ssbca-ii`
--
ALTER TABLE `ssbca-ii`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `ssmsc-i`
--
ALTER TABLE `ssmsc-i`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `ssmsc-ii`
--
ALTER TABLE `ssmsc-ii`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `sybca2016`
--
ALTER TABLE `sybca2016`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `sybca2017`
--
ALTER TABLE `sybca2017`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `sybca2018`
--
ALTER TABLE `sybca2018`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `symsc2017`
--
ALTER TABLE `symsc2017`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `symsc2018`
--
ALTER TABLE `symsc2018`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tsbca-i`
--
ALTER TABLE `tsbca-i`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `tybca2016`
--
ALTER TABLE `tybca2016`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tybca2017`
--
ALTER TABLE `tybca2017`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tybca2018`
--
ALTER TABLE `tybca2018`
  ADD PRIMARY KEY (`app_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fsbca-ii`
--
ALTER TABLE `fsbca-ii`
  ADD CONSTRAINT `fsbca-ii_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `bcasubjectlist` (`course_code`);

--
-- Constraints for table `fsmsc-i`
--
ALTER TABLE `fsmsc-i`
  ADD CONSTRAINT `fsmsc-i_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `mscsubjectlist` (`course_code`);

--
-- Constraints for table `fsmsc-ii`
--
ALTER TABLE `fsmsc-ii`
  ADD CONSTRAINT `fsmsc-ii_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `mscsubjectlist` (`course_code`);

--
-- Constraints for table `ssbca-i`
--
ALTER TABLE `ssbca-i`
  ADD CONSTRAINT `ssbca-i_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `bcasubjectlist` (`course_code`);

--
-- Constraints for table `ssbca-ii`
--
ALTER TABLE `ssbca-ii`
  ADD CONSTRAINT `ssbca-ii_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `bcasubjectlist` (`course_code`);

--
-- Constraints for table `ssmsc-i`
--
ALTER TABLE `ssmsc-i`
  ADD CONSTRAINT `ssmsc-i_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `mscsubjectlist` (`course_code`);

--
-- Constraints for table `ssmsc-ii`
--
ALTER TABLE `ssmsc-ii`
  ADD CONSTRAINT `ssmsc-ii_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `mscsubjectlist` (`course_code`);

--
-- Constraints for table `tsbca-i`
--
ALTER TABLE `tsbca-i`
  ADD CONSTRAINT `tsbca-i_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `bcasubjectlist` (`course_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
