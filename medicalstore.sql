-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 12:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `articletype`
--

CREATE TABLE `articletype` (
  `articletypeID` int(11) NOT NULL,
  `ArticleTypeName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articletype`
--

INSERT INTO `articletype` (`articletypeID`, `ArticleTypeName`) VALUES
(1, 'TABLET'),
(2, 'INJECTABLE'),
(3, 'SUREAU');

-- --------------------------------------------------------

--
-- Table structure for table `distributed`
--

CREATE TABLE `distributed` (
  `DistributedID` int(50) NOT NULL,
  `PatientName` varchar(100) NOT NULL,
  `articletype` varchar(50) NOT NULL,
  `ID_No` int(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Insurance` varchar(50) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `MedName` varchar(100) NOT NULL,
  `RwfrsAmount` int(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributed`
--

INSERT INTO `distributed` (`DistributedID`, `PatientName`, `articletype`, `ID_No`, `Address`, `Insurance`, `Quantity`, `MedName`, `RwfrsAmount`, `Date`) VALUES
(1, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-03'),
(2, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-03'),
(3, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-03'),
(4, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(5, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(6, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(7, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(8, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(9, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(10, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(11, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(12, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(13, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(14, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(15, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(16, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 0, 'FIBROX', 0, '2019-09-04'),
(17, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 0, 'Woter', 0, '2019-09-04'),
(18, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', '1', 741, 'QUARTHEM', 0, '2019-09-04'),
(19, 'HAKORIMANA Jean', 'TABLET', 2147483647, 'gakenke', '1', 1, 'QUARTHEM', 0, '2019-09-04'),
(20, 'HAKORIMANA Jean', 'TABLET', 2147483647, 'gakenke', '1', 1, 'QUARTHEM', 0, '2019-09-04'),
(21, 'HAKORIMANA Jean', 'TABLET', 2147483647, 'gakenke', 'RAMA', 1, 'QUARTHEM', 0, '2019-09-05'),
(22, 'HAKORIMANA Jean', 'TABLET', 2147483647, 'gakenke', 'RAMA', 1, 'QUARTHEM', 0, '2019-09-05'),
(23, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(24, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(25, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(26, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(27, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(28, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(29, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(30, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(31, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(32, 'gatabazi', 'TABLET', 1233435456, 'muksa', 'RAMA', 3, 'QUARTHEM', 0, '2019-09-07'),
(33, 'gatabazi', 'TABLET', 1233435456, 'muksa', 'RAMA', 3, 'QUARTHEM', 0, '2019-09-07'),
(34, 'gatabazi', 'TABLET', 1233435456, 'muksa', 'RAMA', 3, 'QUARTHEM', 0, '2019-09-07'),
(35, 'KEDDY', 'TABLET', 234567, 'DDD223', 'MMI', 4, 'QUARTHEM', 0, '2019-09-07'),
(36, '', '', 0, '', 'MMI', 4, '', 0, '2019-09-07'),
(37, 'baptiste', 'TABLET', 122121, 'gake2172', 'MUTUELLE', 6, 'QUARTHEM', 0, '2019-09-07'),
(38, '', '', 0, '', 'MUTUELLE', 6, '', 0, '2019-09-07'),
(39, '', '', 0, '', 'MUTUELLE', 6, '', 0, '2019-09-07'),
(40, '', '', 0, '', 'MUTUELLE', 6, '', 0, '2019-09-07'),
(41, '', '', 0, '', 'MUTUELLE', 6, '', 0, '2019-09-07'),
(42, 'santaba', 'TABLET', 626327, 'gake', 'MMI', 6, 'QUARTHEM', 0, '2019-09-07'),
(43, 'santaba', 'TABLET', 626327, 'gake', 'MMI', 6, 'QUARTHEM', 0, '2019-09-07'),
(44, 'singl', 'INJECTABLE', 23, 'vcv343434', 'RAMA', 4, 'flas', 0, '2019-09-07'),
(45, 'se', 'INJECTABLE', 233, 'b', 'RAMA', 2, 'flas', 60, '2019-09-07'),
(46, 'se', 'INJECTABLE', 233, 'b', 'RAMA', 2, 'flas', 60, '2019-09-07'),
(47, 'KEDDY', 'TABLET', 234567, 'DDD223', 'MMI', 4, 'QUARTHEM', 60, '2019-09-07'),
(48, 'sasa', 'TABLET', 133343, 'dsaa', 'RAMA', 20, 'PLASTAMOR', 600, '2019-09-07'),
(49, 'HABIMANA YVES', 'TABLET', 66353356, 'KIGARLI- GASABO', 'RAMA', 2, 'QUARTHEM', 30, '2019-09-07'),
(50, 'HABIMANA YVES', 'TABLET', 66353356, 'KIGARLI- GASABO', 'RAMA', 2, 'QUARTHEM', 30, '2019-09-07'),
(51, 'HABIBU', 'TABLET', 2147483647, 'NEMBA', 'MMI', 3, 'QUARTHEM', 450, '2019-09-09'),
(52, 'HABIBU', 'TABLET', 2147483647, 'NEMBA', 'MMI', 3, 'QUARTHEM', 450, '2019-09-09'),
(53, 'HABIBU', 'TABLET', 2147483647, 'NEMBA', 'MMI', 3, 'QUARTHEM', 450, '2019-09-09'),
(54, 'BBBBB', 'TABLET', 2147483647, 'GAKENKE', 'RAMA', 3, 'QUARTHEM', 45, '2019-09-09'),
(55, 'MAKUZA', 'TABLET', 2147483647, 'gaknk', 'RAMA', 4, 'QUARTHEM', 60, '2019-09-10'),
(56, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 3, 'QUARTHEM', 450, '2019-09-10'),
(57, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 2, 'QUARTHEM', 300, '2019-09-10'),
(58, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 3, 'QUARTHEM', 45, '2019-09-10'),
(59, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 3, 'QUARTHEM', 450, '2019-09-10'),
(60, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 4, 'QUARTHEM', 600, '2019-09-10'),
(61, 'MMMMMMM', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 3, 'QUARTHEM', 45, '2019-09-10'),
(62, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 4, 'PLASTAMOR', 120, '2019-09-10'),
(63, 'fffffffffffff', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 2, 'PLASTAMOR', 60, '2019-09-10'),
(64, 'MMMMMMM', 'TABLET', 2147483647, 'GAKENKE', 'RAMA', 5, 'PLASTAMOR', 150, '2019-09-10'),
(65, 'MMMMMMM', 'TABLET', 2147483647, 'GAKENKE', 'RAMA', 5, 'PLASTAMOR', 150, '2019-09-10'),
(66, 'BONAVENTURE', 'TABLET', 2147483647, 'NEMBA', 'MUTUELLE', 4, 'PLASTAMOR', 120, '2019-09-10'),
(67, 'HAKORIMANA EmmanuelL', 'TABLET', 2147483647, 'manabanaba', 'RAMA', 2, 'PLASTAMOR', 60, '2019-09-10'),
(68, 'HAKORIMANA Em', 'TABLET', 2147483647, 'JJJJJJJJJJJJJ', 'MMI', 3, 'PLASTAMOR', 90, '2019-09-10'),
(69, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 3, 'flas', 90, '2019-09-10'),
(70, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'MMI', 3, 'flas', 90, '2019-09-10'),
(71, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'MMI', 3, 'flas', 90, '2019-09-10'),
(72, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 2, 'PLASTAMOR', 60, '2019-09-10'),
(73, 'BONA', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 4, 'flas', 120, '2019-09-10'),
(74, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 6, 'PLASTAMOR', 180, '2019-09-10'),
(75, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 6, 'PLASTAMOR', 180, '2019-09-10'),
(76, 'HAKORIMANA Emmanuel', 'TABLET', 2147483647, 'NNNNNNNNNNN', 'RAMA', 4, 'flas', 120, '2019-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
  `ID` varchar(16) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `roleID` int(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `EmployeeName`, `ID`, `Adress`, `Phone`, `Email`, `roleID`, `Date`) VALUES
(21, 'BAPTISTE', '2147483647', 'MUSANZE', 788888888, 'ntibiringirwjean@gmail.com', 2, '2019-09-06'),
(22, 'BAPTISTEN', '1478741000000000', 'MUSANZE', 788888888, 'nizeyaimable@yahoo.com', 2, '2019-09-06'),
(25, 'BAPTISTEN', 'bonaventure', 'MUSANZE', 788888888, 'ntibiringirwjean@gmail.com', 2, '2019-09-06'),
(26, 'munyas', '123456', 'kiy', 4567, 'QWSADCV@GJGH', 4, '2019-09-06'),
(27, 'MANISHIMWE ELYSEE', '1478741', 'NEMBA', 788888888, 'nizeyaimable@yahoo.com', 5, '2019-09-23'),
(28, 'MUNYARUGAMBA', '1199999999999999', 'MUSANZE', 788888888, 'bva@gmail.com', 1, '2019-09-23'),
(29, 'IDRISSA', '1478741', 'gakenke', 788888888, 'FAC@GMAIL.COM', 5, '2019-09-23'),
(30, 'MUNYARUGAMBA Bonaventure', '2147483647', 'NEMBA', 788888888, 'niyoernestinee@gmail.com', 4, '2019-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `G_ID` int(11) NOT NULL,
  `G_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`G_ID`, `G_Name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `InsuranceID` int(11) NOT NULL,
  `insuranceName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`InsuranceID`, `insuranceName`) VALUES
(1, 'RAMA'),
(2, 'MMI'),
(3, 'MUTUELLE');

-- --------------------------------------------------------

--
-- Table structure for table `insurence`
--

CREATE TABLE `insurence` (
  `insurenceID` int(11) NOT NULL,
  `insurenceName` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurence`
--

INSERT INTO `insurence` (`insurenceID`, `insurenceName`, `Date`) VALUES
(1, '', '2019-09-22'),
(2, '', '2019-09-22'),
(3, 'gfgf', '2019-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `medecine`
--

CREATE TABLE `medecine` (
  `MedecineID` int(11) NOT NULL,
  `DragName` varchar(100) NOT NULL,
  `CategoryName` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Manifacturer` varchar(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Price` int(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medecine`
--

INSERT INTO `medecine` (`MedecineID`, `DragName`, `CategoryName`, `Description`, `Manifacturer`, `Quantity`, `Price`, `Date`) VALUES
(8, 'QUARTHEM', 'TABLET', 'MALARIA', 'KIFORMA', 0, 2000, '2019-09-04'),
(9, 'PLASTAMOR', 'TABLET', 'MALARIA', 'KIFORMA', 0, 2000, '2019-09-04'),
(10, 'PPCM', 'TABLET', 'MALARIA', 'KIFORMA', 0, 2000, '2019-09-05'),
(11, 'cetrafixione', 'medical', 'ceftraxione', 'kenya', 3, 4500, '2019-09-06'),
(12, 'flas', 'ttt', 'dsdffer', 'dfere', 0, 10, '2019-09-07'),
(13, 'FIBROX', 'TABLET', 'gfdddddddddddd', 'KIFORMA', 0, 0, '2019-09-10'),
(14, 'Fregentire', 'SURAU', 'MALARIA', 'KIFORMA', 0, 2000, '2019-09-10'),
(15, 'FREGENTILE', 'TABLET', 'HTESTSSKHFF', 'KIFORMA', 0, 0, '2019-09-10'),
(16, 'Fregentire', 'SURAU', 'MALARIA', 'KIFORMA', 0, 2000, '2019-09-10'),
(17, 'KININI', 'TABLET', 'WELL RECEIVED', 'KIFORMA', 0, 0, '2019-09-13'),
(18, 'QUARTHEM', 'SURAU', 'xxxxxxxxxxxxxx', 'KIFORMA', 0, 0, '2019-09-13'),
(19, 'BAND_AID', 'PFUKA', 'box', 'ghg', 0, 0, '2019-09-13'),
(20, 'ENDOCIDE', 'pills', 'SDSDSFSFF', 'uganda', 0, 0, '2019-09-14'),
(21, 'DSDSD', '', '', '', 0, 0, '2019-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `medreception`
--

CREATE TABLE `medreception` (
  `MedreceptionID` int(11) NOT NULL,
  `SupplierID` int(100) NOT NULL,
  `MedecineID` int(100) NOT NULL,
  `articletypeID` int(100) NOT NULL,
  `packageID` int(100) NOT NULL,
  `ItemUnit` int(50) NOT NULL,
  `UnitNumber` int(50) NOT NULL,
  `UnitPrice` int(50) NOT NULL,
  `TotalAmount` int(100) NOT NULL,
  `Date` date NOT NULL,
  `ExperidDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medreception`
--

INSERT INTO `medreception` (`MedreceptionID`, `SupplierID`, `MedecineID`, `articletypeID`, `packageID`, `ItemUnit`, `UnitNumber`, `UnitPrice`, `TotalAmount`, `Date`, `ExperidDate`) VALUES
(15, 4, 8, 1, 1, 500, 1, 10000, 0, '2019-09-14', '2019-09-21'),
(16, 4, 8, 2, 1, 500, 1, 10000, 0, '2019-09-14', '2019-09-14'),
(17, 2, 20, 1, 1, 677, 765, 234, 0, '2019-09-14', '2019-09-30'),
(18, 3, 20, 2, 1, 677, 765, 234, 0, '2019-09-15', '2019-09-14'),
(19, 4, 8, 2, 1, 100, 7444, 1000, 0, '2019-09-16', '2019-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `newsupplier`
--

CREATE TABLE `newsupplier` (
  `SupplierID` int(11) NOT NULL,
  `SupplierName` varchar(50) NOT NULL,
  `ID` int(16) NOT NULL,
  `Adress` varchar(20) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageID` int(11) NOT NULL,
  `packageName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageID`, `packageName`) VALUES
(1, 'Carton'),
(2, 'Cup');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` int(11) NOT NULL,
  `patientName` varchar(100) NOT NULL,
  `patientIDNumber` varchar(16) NOT NULL,
  `patientLocation` varchar(50) NOT NULL,
  `Phone` varchar(16) NOT NULL,
  `InsuranceID` varchar(20) NOT NULL,
  `MedecineID` int(100) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `Type5` varchar(50) NOT NULL,
  `articletypeID` varchar(50) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `patientName`, `patientIDNumber`, `patientLocation`, `Phone`, `InsuranceID`, `MedecineID`, `Nationality`, `Province`, `District`, `Sector`, `Type5`, `articletypeID`, `Quantity`, `status`, `Date`) VALUES
(101, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', '', 0, 'Waiting', '2019-09-16'),
(102, 'KUKU', '1997877656666588', 'NNNNNNNNNNN', '781120664', 'MUTUELLE', 20, '', '', '', '', '', '', 0, 'Waiting', '2019-09-16'),
(103, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', 'inj', 10, 'NO', '2019-09-16'),
(104, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', 'suro', 20, 'NO', '2019-09-16'),
(105, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', 'suro', 0, 'NO', '2019-09-16'),
(106, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', '', 50, 'NO', '2019-09-17'),
(107, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', 'suro', 10, 'NO', '2019-09-17'),
(108, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', 'OTHERS', 1477777, 'NO', '2019-09-20'),
(109, 'KUKU', '1997877656666588', 'NNNNNNNNNNN', '781120664', 'MUTUELLE', 20, '', '', '', '', '', 'SUREAU', 0, 'NO', '2019-09-20'),
(110, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 20, '', '', '', '', '', 'INJECTABLE', 20, 'NO', '2019-09-20'),
(111, 'KUKU', '1997877656666588', 'NNNNNNNNNNN', '781120664', 'MUTUELLE', 8, '', '', '', '', '', '', 0, 'Waiting', '2019-09-20'),
(112, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', '', 0, 'Waiting', '2019-09-20'),
(113, 'KUKU', '1997877656666588', 'NNNNNNNNNNN', '781120664', 'MUTUELLE', 20, '', '', '', '', '', '', 0, 'Waiting', '2019-09-21'),
(114, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', 'TABLET', 444444, 'NO', '2019-09-22'),
(115, 'HAKORIMANA Emmanuel', '1199580188081183', 'GASABO', '788888888', 'RAMA', 8, '', '', '', '', '', 'TABLET', 0, 'NO', '2019-09-22'),
(116, 'HAKORIMANA Emmanuel', '1199580188081183', 'NNNNNNNNNNN', '788888888', 'MMI', 8, '', '', '', '', '', 'TABLET', 0, 'NO', '2019-09-22'),
(117, 'HAKORIMANA Emmanuel', '1199580188081183', 'NNNNNNNNNNN', '788888888', 'MMI', 8, '', '', '', '', '', 'TABLET', 0, 'NO', '2019-09-22'),
(118, 'bbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbb', 'bbbbbbbbbbbbb', '0', 'RAMA', 8, '', '', '', '', '', 'TABLET', 0, 'NO', '2019-09-22'),
(119, 'HAKORIMANA Emmanuel', '1199580188081183', 'NNNNNNNNNNN', '788888888', 'MMI', 8, '', '', '', '', '', 'TABLET', 41000, 'NO', '2019-09-22'),
(120, 'nizeyimana Jean', '3333333333333333', '', '2147483647', 'RAMA', 8, '', '', '', '', '', 'TABLET', 0, 'NO', '2019-09-22'),
(121, 'nizeyimana Jean', '444444444112233', '', '2147483647', 'RAMA', 20, 'RWANDAN', 'NORTH', 'gakenke', 'gakenke', '', 'TABLET', 0, 'NO', '2019-09-22'),
(122, 'MUNYARUGAMBA bONAVENTURE', '14785522', '', '0788888888', 'RAMA', 20, 'RWANDA', 'NORD', 'MUSANZE', 'KABAYA', '', 'SUREAU', 0, 'NO', '2019-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RoleID`, `RoleName`) VALUES
(1, 'MANAGER'),
(2, 'Admin Pharmacist'),
(3, 'Admin Cashier'),
(4, 'Pharmacist'),
(5, 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `roleID` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `EmployeeID` int(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `roleID`, `UserName`, `EmployeeID`, `Password`) VALUES
(31, 0, 'BONA', 28, '123'),
(32, 0, 'IDRISSA', 29, '123'),
(33, 0, 'NYARUTOVU', 30, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributed`
--
ALTER TABLE `distributed`
  ADD PRIMARY KEY (`DistributedID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`InsuranceID`);

--
-- Indexes for table `insurence`
--
ALTER TABLE `insurence`
  ADD PRIMARY KEY (`insurenceID`);

--
-- Indexes for table `medecine`
--
ALTER TABLE `medecine`
  ADD PRIMARY KEY (`MedecineID`);

--
-- Indexes for table `medreception`
--
ALTER TABLE `medreception`
  ADD PRIMARY KEY (`MedreceptionID`);

--
-- Indexes for table `newsupplier`
--
ALTER TABLE `newsupplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distributed`
--
ALTER TABLE `distributed`
  MODIFY `DistributedID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `InsuranceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `insurence`
--
ALTER TABLE `insurence`
  MODIFY `insurenceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medecine`
--
ALTER TABLE `medecine`
  MODIFY `MedecineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `medreception`
--
ALTER TABLE `medreception`
  MODIFY `MedreceptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `newsupplier`
--
ALTER TABLE `newsupplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
