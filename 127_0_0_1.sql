-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 02:23 PM
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
CREATE DATABASE IF NOT EXISTS `medicalstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medicalstore`;

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
  `PatientIDNumber` varchar(16) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `Insurance` varchar(50) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `MedecineName` varchar(100) NOT NULL,
  `RwfrsAmount` int(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distributed`
--

INSERT INTO `distributed` (`DistributedID`, `PatientName`, `articletype`, `PatientIDNumber`, `Nationality`, `Province`, `District`, `Sector`, `Insurance`, `Quantity`, `MedecineName`, `RwfrsAmount`, `Date`) VALUES
(1, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-03'),
(2, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-03'),
(3, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-03'),
(4, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(5, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(6, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(7, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(8, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(9, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(10, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(11, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(12, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(13, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(14, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(15, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'PLACSSSS', 0, '2019-09-04'),
(16, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 0, 'FIBROX', 0, '2019-09-04'),
(17, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 0, 'Woter', 0, '2019-09-04'),
(18, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', '1', 741, 'QUARTHEM', 0, '2019-09-04'),
(19, 'HAKORIMANA Jean', 'TABLET', '2147483647', 'gakenke', '', '', '', '1', 1, 'QUARTHEM', 0, '2019-09-04'),
(20, 'HAKORIMANA Jean', 'TABLET', '2147483647', 'gakenke', '', '', '', '1', 1, 'QUARTHEM', 0, '2019-09-04'),
(21, 'HAKORIMANA Jean', 'TABLET', '2147483647', 'gakenke', '', '', '', 'RAMA', 1, 'QUARTHEM', 0, '2019-09-05'),
(22, 'HAKORIMANA Jean', 'TABLET', '2147483647', 'gakenke', '', '', '', 'RAMA', 1, 'QUARTHEM', 0, '2019-09-05'),
(23, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(24, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(25, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(26, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(27, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(28, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(29, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(30, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(31, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 0, '2019-09-07'),
(32, 'gatabazi', 'TABLET', '1233435456', 'muksa', '', '', '', 'RAMA', 3, 'QUARTHEM', 0, '2019-09-07'),
(33, 'gatabazi', 'TABLET', '1233435456', 'muksa', '', '', '', 'RAMA', 3, 'QUARTHEM', 0, '2019-09-07'),
(34, 'gatabazi', 'TABLET', '1233435456', 'muksa', '', '', '', 'RAMA', 3, 'QUARTHEM', 0, '2019-09-07'),
(35, 'KEDDY', 'TABLET', '234567', 'DDD223', '', '', '', 'MMI', 4, 'QUARTHEM', 0, '2019-09-07'),
(36, '', '', '0', '', '', '', '', 'MMI', 4, '', 0, '2019-09-07'),
(37, 'baptiste', 'TABLET', '122121', 'gake2172', '', '', '', 'MUTUELLE', 6, 'QUARTHEM', 0, '2019-09-07'),
(38, '', '', '0', '', '', '', '', 'MUTUELLE', 6, '', 0, '2019-09-07'),
(39, '', '', '0', '', '', '', '', 'MUTUELLE', 6, '', 0, '2019-09-07'),
(40, '', '', '0', '', '', '', '', 'MUTUELLE', 6, '', 0, '2019-09-07'),
(41, '', '', '0', '', '', '', '', 'MUTUELLE', 6, '', 0, '2019-09-07'),
(42, 'santaba', 'TABLET', '626327', 'gake', '', '', '', 'MMI', 6, 'QUARTHEM', 0, '2019-09-07'),
(43, 'santaba', 'TABLET', '626327', 'gake', '', '', '', 'MMI', 6, 'QUARTHEM', 0, '2019-09-07'),
(44, 'singl', 'INJECTABLE', '23', 'vcv343434', '', '', '', 'RAMA', 4, 'flas', 0, '2019-09-07'),
(45, 'se', 'INJECTABLE', '233', 'b', '', '', '', 'RAMA', 2, 'flas', 60, '2019-09-07'),
(46, 'se', 'INJECTABLE', '233', 'b', '', '', '', 'RAMA', 2, 'flas', 60, '2019-09-07'),
(47, 'KEDDY', 'TABLET', '234567', 'DDD223', '', '', '', 'MMI', 4, 'QUARTHEM', 60, '2019-09-07'),
(48, 'sasa', 'TABLET', '133343', 'dsaa', '', '', '', 'RAMA', 20, 'PLASTAMOR', 600, '2019-09-07'),
(49, 'HABIMANA YVES', 'TABLET', '66353356', 'KIGARLI- GASABO', '', '', '', 'RAMA', 2, 'QUARTHEM', 30, '2019-09-07'),
(50, 'HABIMANA YVES', 'TABLET', '66353356', 'KIGARLI- GASABO', '', '', '', 'RAMA', 2, 'QUARTHEM', 30, '2019-09-07'),
(51, 'HABIBU', 'TABLET', '2147483647', 'NEMBA', '', '', '', 'MMI', 3, 'QUARTHEM', 450, '2019-09-09'),
(52, 'HABIBU', 'TABLET', '2147483647', 'NEMBA', '', '', '', 'MMI', 3, 'QUARTHEM', 450, '2019-09-09'),
(53, 'HABIBU', 'TABLET', '2147483647', 'NEMBA', '', '', '', 'MMI', 3, 'QUARTHEM', 450, '2019-09-09'),
(54, 'BBBBB', 'TABLET', '2147483647', 'GAKENKE', '', '', '', 'RAMA', 3, 'QUARTHEM', 45, '2019-09-09'),
(55, 'MAKUZA', 'TABLET', '2147483647', 'gaknk', '', '', '', 'RAMA', 4, 'QUARTHEM', 60, '2019-09-10'),
(56, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 3, 'QUARTHEM', 450, '2019-09-10'),
(57, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 2, 'QUARTHEM', 300, '2019-09-10'),
(58, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 3, 'QUARTHEM', 45, '2019-09-10'),
(59, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 3, 'QUARTHEM', 450, '2019-09-10'),
(60, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 4, 'QUARTHEM', 600, '2019-09-10'),
(61, 'MMMMMMM', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 3, 'QUARTHEM', 45, '2019-09-10'),
(62, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 4, 'PLASTAMOR', 120, '2019-09-10'),
(63, 'fffffffffffff', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 2, 'PLASTAMOR', 60, '2019-09-10'),
(64, 'MMMMMMM', 'TABLET', '2147483647', 'GAKENKE', '', '', '', 'RAMA', 5, 'PLASTAMOR', 150, '2019-09-10'),
(65, 'MMMMMMM', 'TABLET', '2147483647', 'GAKENKE', '', '', '', 'RAMA', 5, 'PLASTAMOR', 150, '2019-09-10'),
(66, 'BONAVENTURE', 'TABLET', '2147483647', 'NEMBA', '', '', '', 'MUTUELLE', 4, 'PLASTAMOR', 120, '2019-09-10'),
(67, 'HAKORIMANA EmmanuelL', 'TABLET', '2147483647', 'manabanaba', '', '', '', 'RAMA', 2, 'PLASTAMOR', 60, '2019-09-10'),
(68, 'HAKORIMANA Em', 'TABLET', '2147483647', 'JJJJJJJJJJJJJ', '', '', '', 'MMI', 3, 'PLASTAMOR', 90, '2019-09-10'),
(69, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 3, 'flas', 90, '2019-09-10'),
(70, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'MMI', 3, 'flas', 90, '2019-09-10'),
(71, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'MMI', 3, 'flas', 90, '2019-09-10'),
(72, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 2, 'PLASTAMOR', 60, '2019-09-10'),
(73, 'BONA', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 4, 'flas', 120, '2019-09-10'),
(74, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 6, 'PLASTAMOR', 180, '2019-09-10'),
(75, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 6, 'PLASTAMOR', 180, '2019-09-10'),
(76, 'HAKORIMANA Emmanuel', 'TABLET', '2147483647', 'NNNNNNNNNNN', '', '', '', 'RAMA', 4, 'flas', 120, '2019-09-10');

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
(29, 'MUNYARUGAMBA Bonaventure', '2147483647', 'NEMBA', 788888888, 'niyoernestinee@gmail.com', 0, '2019-09-29'),
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
  `insuranceName` varchar(100) NOT NULL,
  `Discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`InsuranceID`, `insuranceName`, `Discount`) VALUES
(1, 'RAMA', ''),
(2, 'MMI', ''),
(3, 'MUTUELLE', ''),
(4, 'NONE', ''),
(5, 'MEDPLAN', '10'),
(6, 'NPDN', '15'),
(7, 'kkkkkk', '15');

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
(3, 'gfgf', '2019-09-22'),
(4, 'NONE', '2019-09-27');

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
(20, 1, 11, 2, 1, 10, 34, 234, 0, '2019-09-29', '2019-09-28');

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

--
-- Dumping data for table `newsupplier`
--

INSERT INTO `newsupplier` (`SupplierID`, `SupplierName`, `ID`, `Adress`, `Phone`, `Email`, `Date`) VALUES
(1, 'BAPTISTE', 2147483647, 'musanze', '0988888888', 'hash@gkDSD', '2019-09-29');

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
  `Phone` varchar(13) NOT NULL,
  `InsuranceID` varchar(20) NOT NULL,
  `MedecineID` varchar(100) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `TotalAmount` varchar(100) NOT NULL,
  `articletypeID` varchar(50) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `PayedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`PatientID`, `patientName`, `patientIDNumber`, `patientLocation`, `Phone`, `InsuranceID`, `MedecineID`, `Nationality`, `Province`, `District`, `Sector`, `TotalAmount`, `articletypeID`, `Quantity`, `status`, `Date`, `PayedDate`) VALUES
(160, 'BONA mUNYARUGAMBA', '1987363333333333', '', '0988888888', 'MUTUELLE', '11', 'RDA', 'NORD', 'GAKENKE', 'NEMBA', '351', 'TABLET', 10, 'Distributed', '2019-09-29', '2019-09-29'),
(161, 'BONA mUNYARUGAMBA', '1987363333333333', '', '0988888888', 'MUTUELLE', '11', '', '', '', '', '526.5', 'TABLET', 15, 'Distributed', '2019-09-29', '2019-09-29'),
(162, 'hakorimana innocent', '193736366363663', '', '0988888888', 'RAMA', '11', 'RDA', 'NORD', 'GAKENKE', 'NEMBA', '526.5', 'SUREAU', 15, 'Distributed', '2019-09-29', '2019-09-29'),
(164, 'BONA mUNYARUGAMBA', '1987363333333333', '', '0988888888', 'MUTUELLE', '11', '', '', '', '', '', 'TABLET', 10, 'NO', '2019-09-29', '0000-00-00'),
(165, 'BONA mUNYARUGAMBA', '1987363333333333', '', '0988888888', 'MUTUELLE', '11', '', '', '', '', '', 'TABLET', 10, 'NO', '2019-09-29', '0000-00-00');

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
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `InsuranceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `insurence`
--
ALTER TABLE `insurence`
  MODIFY `insurenceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medecine`
--
ALTER TABLE `medecine`
  MODIFY `MedecineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `medreception`
--
ALTER TABLE `medreception`
  MODIFY `MedreceptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `newsupplier`
--
ALTER TABLE `newsupplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;--
-- Database: `medicalstore ok`
--
CREATE DATABASE IF NOT EXISTS `medicalstore ok` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medicalstore ok`;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{"angular_direct":"direct","relation_lines":"false","snap_to_grid":"off","full_screen":"on"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'Medicalsrore', '{"quick_or_custom":"quick","what":"sql","db_select[]":["medicalstore","medicalstore ok","phpmyadmin","test"],"output_format":"sendit","filename_template":"@SERVER@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","yaml_structure_or_data":"data","":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_drop_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

--
-- Dumping data for table `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_nr`, `page_descr`) VALUES
('medicalstore', 1, 'bobo');

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"medicalstore","table":"insurance"},{"db":"medicalstore","table":"insurence"},{"db":"medicalstore","table":"patient"},{"db":"medicalstore","table":"distributed"},{"db":"medicalstore","table":"package"},{"db":"medicalstore","table":"medreception"},{"db":"medicalstore","table":"employee"},{"db":"medicalstore","table":"role"},{"db":"medicalstore","table":"users"},{"db":"medicalstore","table":"medecine"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

--
-- Dumping data for table `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('medicalstore', 'distributed', 1, 25, 12),
('medicalstore', 'employee', 1, 46, 171),
('medicalstore', 'gender', 1, 66, 373),
('medicalstore', 'insurance', 1, 879, 72),
('medicalstore', 'medecine', 1, 605, 42),
('medicalstore', 'medreception', 1, 569, 317),
('medicalstore', 'newsupplier', 1, 345, 209),
('medicalstore', 'patient', 1, 797, 242),
('medicalstore', 'patienttest', 1, 121, 458),
('medicalstore', 'role', 1, 349, 38),
('medicalstore', 'symptom', 1, 344, 453),
('medicalstore', 'users', 1, 647, 428);

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'medicalstore', 'patient', '{"sorted_col":"`patient`.`PatientID` ASC"}', '2019-09-15 03:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-08-15 08:11:01', '{"collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
