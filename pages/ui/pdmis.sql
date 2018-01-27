-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 05:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `confinement`
--

CREATE TABLE `confinement` (
  `hospitalname` int(11) NOT NULL,
  `confinementdate` int(11) NOT NULL,
  `confinementreason` int(11) NOT NULL,
  `Hospital_Id` int(11) NOT NULL,
  `confinement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic/examination`
--

CREATE TABLE `diagnostic/examination` (
  `DM` int(1) NOT NULL,
  `HPN` int(1) NOT NULL,
  `PTB` int(1) NOT NULL,
  `Cancer` int(1) NOT NULL,
  `Asthma` int(1) NOT NULL,
  `Alcoholintake` int(1) NOT NULL,
  `SmokingHistory` int(1) NOT NULL,
  `DrugAllergy` int(1) NOT NULL,
  `FoodAllergy` int(1) NOT NULL,
  `BP` varchar(15) NOT NULL,
  `CR` varchar(15) NOT NULL,
  `RR` varchar(15) NOT NULL,
  `Skin` varchar(50) NOT NULL,
  `Heent` varchar(50) NOT NULL,
  `Chest/lungs` varchar(50) NOT NULL,
  `Cardiovascular` varchar(50) NOT NULL,
  `Abdomen` varchar(50) NOT NULL,
  `Rectal` varchar(50) NOT NULL,
  `Extremeties` varchar(50) NOT NULL,
  `Neurological` varchar(50) NOT NULL,
  `Diagnosis` varchar(50) NOT NULL,
  `Historyby` varchar(30) NOT NULL,
  `Doneon` date NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `diagnostic/examination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employeeprofile`
--

CREATE TABLE `employeeprofile` (
  `employee_num` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  `firstname` char(50) NOT NULL,
  `middlename` char(1) NOT NULL,
  `address` text NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `mobile` varchar(18) NOT NULL,
  `position` char(15) NOT NULL,
  `lastname` char(50) NOT NULL,
  `transaction` int(1) NOT NULL,
  `employeeid` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `transaction_a` int(1) NOT NULL,
  `patientprofile_a` int(1) NOT NULL,
  `employeeprofile_a` int(1) NOT NULL,
  `labtest_a` int(1) NOT NULL,
  `nephrologist_a` int(1) NOT NULL,
  `descriptors_a` int(1) NOT NULL,
  `userprofile_a` int(1) NOT NULL,
  `maintenance_a` int(1) NOT NULL,
  `reports_a` int(1) NOT NULL,
  `account` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeprofile`
--

INSERT INTO `employeeprofile` (`employee_num`, `status`, `firstname`, `middlename`, `address`, `telephone`, `mobile`, `position`, `lastname`, `transaction`, `employeeid`, `username`, `password`, `transaction_a`, `patientprofile_a`, `employeeprofile_a`, `labtest_a`, `nephrologist_a`, `descriptors_a`, `userprofile_a`, `maintenance_a`, `reports_a`, `account`) VALUES
(1, 1, 'Carl', 'A', 'admin', '', '+12 (394) 549-55-6', 'Administrator', 'Betio', 1, 'E0001', 'admin', 'admin', 1, 1, 1, 1, 1, 1, 1, 1, 1, '1'),
(2, 1, 'Jay Allan', 'L', 'Aguinaldo Street, Silay City, Negros Occidental', '', '09206348946', 'Nurse', 'Vasquez', 1, 'E0002', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 1, 'John Paul', 'J', '#90 Bayabas St. Elena Subdivision, Silay City, Negros Occidental', '495 - 4538', '09228167114', 'Nurse', 'Peornato', 1, 'E0003', 'peornato', 'peornato', 1, 1, 0, 1, 1, 1, 0, 0, 1, 'a'),
(4, 1, 'Guillermo', 'R', 'Purok Golf, Brgy. Guinhalaran, Silay City, Negros Occidental', '', '09207918057', 'Technician', 'Margate Sr.', 1, 'E0004', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(5, 1, 'Jenelle Marco', 'A', 'Lot 42 Block 30 St. Francis Subdivision, Silay City, Negros Occidental', '495 - 5569', '09055406423', 'Nurse', 'Paez', 1, 'E0005', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(6, 1, 'Christopher NiÃ±o', 'R', '#10 Villa City High, Bacolod City, Negros Occidental', '706 - 0186', '09182446674', 'Nurse', 'Tolimao', 1, 'E0006', 'tolimao', 'tolimao', 1, 1, 0, 1, 1, 1, 0, 0, 1, 'a'),
(7, 1, 'Rhitt', 'L', 'Santan Ville, Brgy 5, Silay City, Negros Occidental', '495 - 0108', '09327372678', 'Head Nurse', 'Bancaya', 1, 'E0007', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(8, 1, 'Joebert', 'P', 'Purok Pag-asa, Talabaan Zone 1 Cadiz City, Negros Occidental', '', '09234346532', 'Nurse', 'Datu-on', 1, 'E0008', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(9, 0, 'Alvin', 'L', 'Bacolod City', '', '+23 (321) 332-32-3', 'Technician', 'Yanson', 1, 'E0009', 'alvin', 'alvin', 1, 1, 0, 1, 1, 1, 0, 0, 1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `hepatitisprofile`
--

CREATE TABLE `hepatitisprofile` (
  `hepatitisdate` date NOT NULL,
  `HbsAg` varchar(3) NOT NULL,
  `AntiHBs` varchar(3) NOT NULL,
  `HCV` varchar(3) NOT NULL,
  `HIV` varchar(3) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `hepatitisprofile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `initialtestresult`
--

CREATE TABLE `initialtestresult` (
  `initialtemperature` varchar(5) NOT NULL,
  `bloodpressure` varchar(10) NOT NULL,
  `cardiacrate` varchar(10) NOT NULL,
  `repulsiverate` varchar(10) NOT NULL,
  `initialtestresult_id` int(10) NOT NULL,
  `Hospital_Id` varchar(8) NOT NULL,
  `initialtest_date` date NOT NULL,
  `initialtest_time` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `initialtestresult`
--

INSERT INTO `initialtestresult` (`initialtemperature`, `bloodpressure`, `cardiacrate`, `repulsiverate`, `initialtestresult_id`, `Hospital_Id`, `initialtest_date`, `initialtest_time`) VALUES
('35.5', '136/55', '78', '19', 1, '40-89-11', '2017-06-05', '12:00 pm'),
('35.3', '196/74', '81', '19', 2, '40-89-11', '2017-06-19', '7:10 am'),
('35.5', '130/80', '75', '19', 3, '01-26-22', '2018-01-17', '7:03 pm'),
('36.3', '207/70', '81', '20', 4, '40-89-11', '2017-06-26', '6:50 am'),
('35.5', '130/80', '75', '19', 5, '45-45-24', '2017-06-19', '7:30 am');

-- --------------------------------------------------------

--
-- Table structure for table `machineresult`
--

CREATE TABLE `machineresult` (
  `m_bloodpressure` varchar(10) NOT NULL,
  `m_cardiacrate` varchar(10) NOT NULL,
  `m_bloodflowrate` varchar(10) NOT NULL,
  `m_transmempressure` varchar(10) NOT NULL,
  `m_venpressure` varchar(10) NOT NULL,
  `machineresult_id` int(10) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `m_date` date NOT NULL,
  `m_time` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machineresult`
--

INSERT INTO `machineresult` (`m_bloodpressure`, `m_cardiacrate`, `m_bloodflowrate`, `m_transmempressure`, `m_venpressure`, `machineresult_id`, `Hospital_Id`, `m_date`, `m_time`) VALUES
('160/70', '66', '175', '120', '100', 13, '37-67-12', '2017-12-27', '3:46 pm'),
('169/79', '58', '180', '160', '120', 14, '37-67-12', '2017-12-27', '3:47 pm'),
('150/80', '64', '200', '140', '120', 15, '37-67-12', '2017-12-27', '3:48 pm'),
('132/55', '75', '250', '60', '80', 23, '40-89-11', '2017-06-05', '11:55 am'),
('189/76', '81', '200', '40', '60', 24, '40-89-11', '2017-06-19', '7:25 am'),
('75/40', '70', '180', '40', '40', 25, '40-89-11', '2017-06-19', '7:45 am'),
('120/60', '75', '180', '40', '40', 26, '40-89-11', '2017-06-19', '7:50 am'),
('160/80', '74', '200', '40', '80', 27, '40-89-11', '2017-06-19', '8:50 am'),
('160/70', '79', '200', '40', '80', 28, '40-89-11', '2017-06-19', '9:30 am'),
('110/70', '77', '200', '40', '80', 29, '40-89-11', '2017-06-19', '10:40 am'),
('120/80', '77', '200', '40', '80', 30, '40-89-11', '2017-06-19', '10:45 am'),
('130/80', '-', '-', '-', '-', 31, '40-89-11', '2017-06-19', '11:15 am'),
('140/70', '-', '-', '-', '-', 32, '40-89-11', '2017-06-19', '11:30 am'),
('198/64', '78', '200', '40', '80', 34, '40-89-11', '2017-06-26', '7:10 am'),
('206/68', '76', '200', '40', '80', 35, '40-89-11', '2017-06-26', '8:10 am'),
('194/60', '76', '220', '40', '80', 36, '40-89-11', '2017-06-26', '8:50 am'),
('216/72', '76', '220', '20', '80', 37, '40-89-11', '2017-06-19', '9:45 am'),
('193/66', '76', '220', '20', '80', 38, '40-89-11', '2017-06-19', '10:20 am'),
('195/71', '-', '-', '-', '-', 39, '40-89-11', '2017-06-19', '11:10 am'),
('150/80', '-', '-', '-', '-', 42, '40-89-11', '2017-06-19', '11:30 am'),
('130/80', '75', '180', '40', '80', 44, '45-45-24', '2017-06-19', '8:30 am');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `employeeid` varchar(7) NOT NULL,
  `action` char(6) NOT NULL,
  `m_date` datetime NOT NULL,
  `name` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`employeeid`, `action`, `m_date`, `name`) VALUES
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Import', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Import', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Import', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 00:00:00', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 07:40:25', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 07:42:15', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 14:43:11', 'Carl Betio'),
('E0001', 'Export', '2017-12-13 14:44:19', 'Carl Betio'),
('E0001', 'Export', '2018-01-17 17:28:04', 'Carl Betio');

-- --------------------------------------------------------

--
-- Table structure for table `nephrologist`
--

CREATE TABLE `nephrologist` (
  `nephrologistnum` int(6) NOT NULL,
  `nephrologistid` varchar(8) NOT NULL,
  `n_lname` char(50) NOT NULL,
  `n_fname` char(50) NOT NULL,
  `n_mname` char(2) NOT NULL,
  `n_telephone` varchar(18) NOT NULL,
  `n_mobile` varchar(15) NOT NULL,
  `n_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nephrologist`
--

INSERT INTO `nephrologist` (`nephrologistnum`, `nephrologistid`, `n_lname`, `n_fname`, `n_mname`, `n_telephone`, `n_mobile`, `n_address`) VALUES
(1, 'N0001', 'Alayon', 'Ricky', 'A', '444 - 2045', '09173101106', '#20 Celso Tan - Caroll sts, Brgy. Sum-ag, Bacolod City, Negros Occidental'),
(10, 'N00010', 'Paylado', 'Franelin', 'D', '', '', ''),
(11, 'N00011', 'Austria', 'Joseph Peter', 'D', '', '', ''),
(12, 'N00012', 'Togle', 'Brian Antonio', 'D', '', '', ''),
(2, 'N0002', 'Pramio', 'Celeste-Jo', 'V', '434 - 2348', '09231429248', '#323, 109 St. Green Plains Subdivision, Bacolod City, Negros Occidental'),
(3, 'N0003', 'Pepingco', 'Jerome', 'A', '', '', 'A'),
(4, 'N0004', 'Tumaneng', 'Leo Manuel', 'A', '', '', 'A'),
(5, 'N0005', 'Antonio', 'Allan', 'D', '', '', 'Victorias'),
(6, 'N0006', 'Pramio', 'Vicente', 'D', '', '', ''),
(7, 'N0007', 'Araneta', 'Maricris', '', '', '', ''),
(8, 'N0008', 'Maravilla', 'Socorro', '', '', '', ''),
(9, 'N0009', 'Tomas', 'Remedios', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nephronotesorder`
--

CREATE TABLE `nephronotesorder` (
  `nephrologistid` varchar(8) NOT NULL,
  `nephro_notes` text NOT NULL,
  `nephro_order` text NOT NULL,
  `notes_order_date` date NOT NULL,
  `notes_order_Id` int(5) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nephronotesorder`
--

INSERT INTO `nephronotesorder` (`nephrologistid`, `nephro_notes`, `nephro_order`, `notes_order_date`, `notes_order_Id`, `Hospital_Id`) VALUES
('N0005', 'BP 150/90\n(+)soft ascitis\n(-)bipedal edema\nno dyspnea', '', '2017-12-27', 26, '37-67-12'),
('N0001', 'comfortable 160/70\npositive pulmonary ruls\npositive edema', 'UF 3L total', '2017-06-19', 74, '40-89-11'),
('N0001', 'comfortable 120/60', 'UF to', '2017-07-03', 75, '40-89-11');

-- --------------------------------------------------------

--
-- Table structure for table `nursenotes`
--

CREATE TABLE `nursenotes` (
  `focus` text NOT NULL,
  `data` text NOT NULL,
  `action` text NOT NULL,
  `resolution` text NOT NULL,
  `employeeid` varchar(8) NOT NULL,
  `nurse_notes_date` date NOT NULL,
  `nurse_notes_id` int(5) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursenotes`
--

INSERT INTO `nursenotes` (`focus`, `data`, `action`, `resolution`, `employeeid`, `nurse_notes_date`, `nurse_notes_id`, `Hospital_Id`) VALUES
('Hemodialysis', 'Recieved ambulatory', 'Consent for MD', 'AUF', 'E0001', '2017-12-27', 36, '37-67-12'),
('Hemodialysis', 'received ambulatory conscious and coherent', 'pre HD assessment done, consent for HD signed. L AVF site dressed aseptically, UF goal set to 4000ml, consultation done. 7:18 HD started. flushed 50cc nss initially, then every 15 mins until end of HD.', 'Able to comprehend', 'E0003', '2017-06-05', 56, '40-89-11'),
('health teaching on diet', '', 'Advised to strictly limit oral fluid intake to less than 1L per day', 'able to comprehend', 'E0003', '2017-06-05', 57, '40-89-11'),
('blood transfusion', 'HgD 76', 'transfused 1 unit PRBC serial#0144486, exp.date 7/6/17, blood type A+, consent to BT signed, transfused another unit PRBC serial#0144821, exp.date 7/4/17. blood type A+', '2 units PRBC consumed', 'E0003', '2017-06-05', 58, '40-89-11'),
('for hemodialysis', 'received ambulatory conscious and consent', 'pre HD assessment done, consent for HD signed. consent and pre HD vital signs and weight checked. L AVF site dressed aseptically. UF goal set to 2500ml. cannulation done, precaution. 7:25 HD started, flushed 50cc nss initially, then every 15 mins until end of HD session', '11:15 HD ended and terminated per patient request (10 mins remaining time). VF received 2373ml. Post HD assessment done. Eposino 6000ml given at abdominal wall', 'E0003', '2017-06-19', 59, '40-89-11'),
('decreased blood pressure', 'BP 70/40', 'flushed 200cc nss rechecked BP. placed on trendilenburg position', 'BP 140/70', 'E0003', '2017-06-19', 60, '40-89-11'),
('health teaching on diet', '', 'advised to strictly limit oral fluid intake to less than 1L per day', 'able to comprehend\r\n11:30 discharged ambulatory in fair condition accompanied by folks', 'E0003', '2017-06-19', 61, '40-89-11'),
('for hemodialysis', 'came in per wheelchair; conscious and coherent; ready for HD', 'pre HD assessment done; HD consent signed; made comfortable on bed chair. - L AVF site cleansed & dressed aseptically. 7:10am HD started; UF goal set to 2 liters.\r\n-NSS flushubg 50cc given IV bolus 15mins until end of HD', '11:10am HD ended and terminated', 'E0006', '2017-06-26', 62, '40-89-11'),
('health teaching', '', 'instructed to limit fluid intake to 800ml/day', 'able to comprehend\r\n-eposino 6000 IV injected subcutaneously at the abdominal wall\r\n-past HD weight taken and recorded.\r\n12pm discharged ambulatory and in fair condition', 'E0006', '2017-06-26', 65, '40-89-11'),
('for hemodialysis', 'received ambulatory conscious and coherent', 'pre HD assessment done, consent for HD signed, L AVF site dressed aseptically, UF goal set to 3500ml, cannulation done ; precaution\r\n6:48 HD started, regular heparin, 1000ml given initially then every hour 500ml given until the 3rd hour', '10:48 HD ended and terminated, UF removed 3,100ml. post HD assessment done.\r\nEposino 6,000 ml given at L abdominal wall', 'E0003', '2017-06-19', 67, '40-89-11'),
('hfhh', 'fhghh', 'ghfhgf', 'hfghf', 'E0001', '2017-07-03', 68, '40-89-11'),
('hghfgh', 'hfghfh', 'hfhfgh', 'hfghfgh', 'E0001', '2017-07-03', 69, '40-89-11');

-- --------------------------------------------------------

--
-- Table structure for table `patientdrugprofile`
--

CREATE TABLE `patientdrugprofile` (
  `drug_strength` varchar(30) NOT NULL,
  `dosage` varchar(15) NOT NULL,
  `frequency` varchar(20) NOT NULL,
  `ROA` varchar(20) NOT NULL,
  `dateordered` date NOT NULL,
  `datediscription` varchar(50) NOT NULL,
  `PRN` varchar(20) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `nephrologistid` varchar(30) NOT NULL,
  `drugprofile_id` int(11) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `drugprofile_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientprofile`
--

CREATE TABLE `patientprofile` (
  `Hospital_Id` varchar(50) NOT NULL,
  `P_Lname` char(50) NOT NULL,
  `P_Fname` char(50) NOT NULL,
  `P_Mname` char(50) NOT NULL,
  `P_BirthDate` date NOT NULL,
  `P_Age` int(5) NOT NULL,
  `P_Sex` char(11) NOT NULL,
  `P_Nationality` char(11) NOT NULL,
  `P_Religion` char(25) NOT NULL,
  `P_CivilStatus` char(11) NOT NULL,
  `P_PermanentAdd` varchar(150) NOT NULL,
  `P_ConNum1` varchar(18) NOT NULL,
  `P_PresentAdd` varchar(150) NOT NULL,
  `P_ConNum2` varchar(18) NOT NULL,
  `P_Relative` char(50) NOT NULL,
  `P_RelativeAdd` varchar(150) NOT NULL,
  `P_RelativeConNum` varchar(18) NOT NULL,
  `P_AgeFD` int(5) NOT NULL,
  `P_Erythropoetin` varchar(50) NOT NULL,
  `P_Diagnosis` varchar(100) NOT NULL,
  `P_PhilHealthNum` varchar(50) NOT NULL,
  `P_DFBName` char(50) NOT NULL,
  `P_DFBRelation` char(50) NOT NULL,
  `P_InDial` date NOT NULL,
  `dialysistype` int(1) NOT NULL,
  `nephrologistid` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientprofile`
--

INSERT INTO `patientprofile` (`Hospital_Id`, `P_Lname`, `P_Fname`, `P_Mname`, `P_BirthDate`, `P_Age`, `P_Sex`, `P_Nationality`, `P_Religion`, `P_CivilStatus`, `P_PermanentAdd`, `P_ConNum1`, `P_PresentAdd`, `P_ConNum2`, `P_Relative`, `P_RelativeAdd`, `P_RelativeConNum`, `P_AgeFD`, `P_Erythropoetin`, `P_Diagnosis`, `P_PhilHealthNum`, `P_DFBName`, `P_DFBRelation`, `P_InDial`, `dialysistype`, `nephrologistid`) VALUES
('01-26-22', 'Orota', 'Rosario', 'Abanilla', '1933-09-24', 84, 'Female', 'F', 'Dating Daan', 'Widowed', 'Comboy St. Phase II St. Francis Subd. Brgy. 5, Silay City, Negros Occidental', '09064459636', 'Comboy St. Phase II St. Francis Subd. Brgy. 5, Silay City, Negros Occidental', '09064459636', 'Jake Joaquin', 'HDA. Puyas Brgy. IV, Silay City, Negros Occidental', '09126634789', 83, 'Eposino 4,000 iu', 'CKD Secondary to Hypertensive Nephrosclerosis', '1117-5342-4950', 'Dennis Valladarez', '', '2017-03-01', 0, 'N0007'),
('05-29-07', 'Cordova', 'Ronnie Sr.', 'Dusaran', '1959-08-22', 58, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'HDA. Dacudao, Brgy. Guimbala-on, Silay City, Negros Occidental', '09216844881', 'HDA. Dacudao, Brgy. Guimbala-on, Silay City, Negros Occidental', '09216844881', 'Ronely Gerota', 'Panaogao 1, Brgy. 4, Silay City, Negros Occidental', '09074632447', 37, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Obstructive Uropathy', '4000-6000-3707', 'Ma. Nelly Cordova', 'Wife', '1997-09-07', 0, 'N00011'),
('06-08-23', 'Ignacio', 'Rafael', 'Mayang', '1955-10-24', 61, 'Male', 'Filipino', 'MCG I', 'Married', 'Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental', '09094652572', 'Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental', '09466773230', 'Francisca Ignacio', 'Rizal St., Brgy. 4, Poblacion, Victorias City, Negros Occidental', '09092673505', 61, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Diabetic Nephropathy', '0802-5420-0615', 'Josephine Ignacio', 'Wife', '2017-03-17', 0, 'N0001'),
('13-18-17', 'Baroy', 'Edwin', 'Canindo', '1960-07-19', 57, 'Male', 'Filipino', 'Roman Catholic', 'Single', 'Antilla Subd., Brgy. 4, Silay City, Negros Occidental', '495-4496', 'Antilla Subd., Brgy. 4, Silay City, Negros Occidental', '495-4496', 'Dolores Baloy', 'Antilla Subd., Brgy. 4, Silay City, Negros Occidental', '495-4496', 52, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Hypertensive Neproclerosis', '1102-5157-3190', 'Edwin Baroy', 'Self', '2012-12-27', 0, 'N0009'),
('13-38-01', 'Duyo', 'Cerezille', 'Abella', '1970-05-15', 47, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental', '495-6126', 'Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental', '09462542671', 'Saturnina Duyo', 'Purok Acasia, Boulevard, Brgy. Mambulac, Silay City, Negros Occidental', '714-5757', 38, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Chronic Glomerulonephritis', '', 'Cerezille Duyo', 'Self', '2008-08-26', 0, 'N00012'),
('13-67-08', 'Baroquillo', 'Jeresa', 'Serato', '1970-01-13', 47, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'Brgy. Cabatangan, Talisay City, Negros Occidental', '09183773619', 'Brgy. Cabatangan, Talisay City, Negros Occidental', '09183773619', 'Marlyn Tulia', 'Dos Hermanas, Talisay City, Negros Occidental', '09198446769', 41, 'Epoetin Alpha 6,000 ui 2x/week', 'End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis', '', 'Jeresa Baroquillo', 'Self', '2011-08-23', 0, 'N0003'),
('20-12-17', 'Bebit', 'Venacia', 'Mejasco', '1968-08-05', 48, 'Female', 'Filipino', 'Roman Catholic', 'Divorced', 'Brgy. Tanza, EB Magalona, Negros Occidental', '09129417216', 'Brgy. Tanza, EB Magalona, Negros Occidental', '09129417216', 'Rose Mae Hulleza', 'Brgy. Tanza, EB Magalona, Negros Occidental', '0912836737', 46, 'Eposino 4,000 iu  twice a week', 'ESRD SEC TO  CGN AND HPN NEPHROCLEROSIS', '1120-2668-7147', 'Venancia Bebit', 'Self', '2015-06-22', 0, 'N0006'),
('20-80-17', 'Pangue', 'Hubert', 'Castilla', '1946-02-27', 67, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'Gov. Alfelon, Poblacion 2, Sagay City', '09213310502', 'Gov. Alfelon, Poblacion 2, Sagay City', '09213310502', 'Anita Zante', 'Patricia Homes Subd., Sta. Fe, Bacolod City', '7098028', 69, 'Eposino 4000 iu (Tuesday); Eposino 6,000 iu (frida', 'ESRD 2 degree to HPN Nephrosclerosis', '111751916309', 'Eleanor Pangue', 'Wife', '2015-02-01', 0, 'N0009'),
('21-26-17', 'Arboleda', 'Ma. Theresa', 'Aldea', '1960-01-12', 57, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'Villa Barbas 2, Cadiz City, Negros Occidental', '493-0719', 'Villa Barbas 2, Cadiz City, Negros Occidental', '09326160944', 'Joresa Arboleda', 'Villa Barbas 2, Cadiz City, Negros Occidental', '09232225140', 54, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis', '1100-0070-7430', 'Ma. Theresa Arboleda', 'Self', '2014-03-19', 0, 'N00012'),
('23-22-02', 'Medel', 'Rebecca', 'Delgado', '1956-11-01', 61, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'HDA. Guadalupe, Brgy. Salvacion, Murcia, Negros Occidental', '09292538764', 'HDA. Guadalupe, Brgy. Salvacion, Murcia, Negros Occidental', '09292538764', 'Archie Marcial', 'Gardenville Subdivision, Bacolod City, Negros Occidental', '09128559773', 53, 'Epoetin Alpha (Eposino) 6,000 ui 2x/week', 'End Stage Renal Disease Secondary to Diabetic Nephropathy', '1120-1295-5017', 'Rolando Medel', 'Husband', '2017-01-02', 0, 'N00010'),
('25-84-10', 'Nolido', 'Mario Jr', 'Jentelizo', '1985-11-29', 32, 'Male', 'Filipino', 'Born Again Christian', 'Married', 'St. Francis De Asissi, Brgy. Lantad, Silay City, Negros Occidetal', '09468572829', 'St. Francis De Asissi, Brgy. Lantad, Silay City, Negros Occidetal', '09468572830', 'Dolores Baroy', 'Antilla Subd., Brgy. 4, Silay City, Negros Occidetal', '495-4496', 25, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to  Chronic Glomerulonephritis', '', 'Mario Nolido Jr.', 'Self', '2001-10-17', 0, 'N00010'),
('31-24-32', 'Lanada', 'Fremrose', 'Gallego', '1982-10-05', 34, 'Female', 'Filipino', 'Roman Catholic', 'Single', 'New Site, Brgy. E Lopez, Silay City, Negros Occidental', '09122408667', 'New Site, Brgy. E Lopez, Silay City, Negros Occidental', '09122408667', 'Ma. Theresa Lanada', 'New Site, Brgy. E Lopez, Silay City, Negros Occidental', '09752975653', 33, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Chronic Glomerulonephritis', '0202-6170-8907', 'Fremrose Lanasa', 'Self', '2016-03-29', 0, 'N0007'),
('33-42-13', 'Araneta', 'Arnold', 'Lacson', '1965-04-09', 52, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'Lopez Jaena St., Brgy. 5, Silay City, Negros Occidental', '714-5557', 'Lopez Jaena St., Brgy. 5, Silay City, Negros Occidental', '09093670837', 'Allen Parrocho', 'Carmela Valley Subd., Talisay City, Negros Occidental', '702-2017', 50, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Diabetic Nephropathy', '1100-0098-8928', 'Jennifer Araneta', 'Wife', '2015-08-11', 0, 'N00011'),
('37-67-12', 'Ditchella', 'Dionisio', 'Constantino', '1949-10-03', 68, 'Male', 'Fiilipino', 'Roman Catholic', 'Married', 'Yap Quina St., Brgy.4, Victorias City, Negros Occidental', '09152910941', 'Yap Quina St., Brgy.4, Victorias City, Negros Occidental', '09152910941', 'Marilyn Ditchella', 'Osmena Avenue, Brgy.5, Victorias, Negros Occidental', '09152910941', 63, 'Epoetin Alpha 4,000 iu 2x/week', 'End Stage Renal Disease Secondary to Diabetic Nephropathy', '', 'Teresita Ditchella', 'Wife', '2013-04-23', 0, 'N0005'),
('40-24-17', 'Roa', 'Corazon', 'Dionio', '1937-09-06', 80, 'Female', 'Filipino', 'Roman Catholic', 'Widowed', '361 Quezon Street, Brgy. 5, Victorias City, Negros Occidental', '09194040465', '361 Quezon Street, Brgy. 5, Victorias City, Negros Occidental', '09194040465', 'Sheila Seballos', 'Purok 1B, Da-an Banwa, Brgy.9, Victorias City, Negros Occidental', '399-2719', 76, 'Epoetin Alfa 4,000 IU 2x/week', 'ESRD SECONDARY TO HYPERTENSIVE NEPHROSCLEROSIS', '1117-5245-5909', 'Sheila Seballos', 'Daughter', '2013-09-21', 0, 'N0004'),
('40-78-21', 'Mahilum', 'Edbert', 'Jamora', '1971-12-29', 45, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'Carmella, Phase I, Brgy. V, Silay City, Negros Occidental', '09128338521', 'Carmella, Phase I, Brgy. V, Silay City, Negros Occidental', '09074507590', 'Eduardo Mahilum Jr.', 'Buenavista Subd., Phase IV, Brgy.Guinhalaran, Silay City, Negros Occidental', '0918662686', 36, 'Epoetin Alfa (Eposino) 6,000 ui 2x/week', 'ESRD SEC.TO CGN; S/P KT W/ CHRONIC REJECTION (2008)', '1102-5121-3933', 'Almira Mahilum', 'Wife', '2007-05-01', 0, 'N0003'),
('40-89-11', 'De Asis', 'Myrna', 'Abancio', '1944-08-10', 73, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'Lopez Subd. Brgy. 16, Victorias City, Negros Occidental', '09466127045', 'Lopez Subd. Brgy. 16, Victorias City, Negros Occidental', '09466127045', 'Maribelle De Asis', 'Lopez Subd. Brgy. 16, Victorias City, Negros Occidental', '09328752532', 68, 'Epoetin Alpha 4,000 iu 2x/week', 'End Stage Renal Disease Secondary to Diabetic Nephropathy', '', 'Maribelle De Asis', 'Sibling', '2013-05-08', 0, 'N0008'),
('45-18-16', 'Inquig', 'Van Calvin', 'Bincal', '1986-10-11', 30, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'Antilla Subd., Silay City, Negros Occidental ', '09488030713', 'Paglaum Village, Mansilingan, Bacolod City, Negros Occidental', '09484052091', 'Lamberto Inquig', 'Paglaum Village, Mansilingan, Bacolod City, Negros Occidental', '09274675655', 28, 'Epoetin Alpha 4,000 ui ', 'ESRD Secondary to CGN', '1105-0363-0907', 'Van Calvin Inquig', 'Patient', '2015-02-04', 0, 'N0006'),
('45-45-24', 'Ano', 'Jemmel', 'V', '1997-11-20', 20, 'Male', 'Filipino', 'RC', 'Widowed', 'Bacolod City', '+63 (918) 839-42-2', 'Bacolod City', '+63 (918) 839-42-2', 'John Ano', 'Bacolod City', '+63 (219) 304-82-0', 17, 'Epoetin Alphs 4000 ui 2x/week', 'End Stage Renal Disease Secondary to Diabetic nephropathy', '', 'Josephine Ano', 'Parent', '2014-03-21', 0, 'N0001'),
('46-20-04', 'Escalona', 'Elbert', 'Leonida', '1970-04-16', 45, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'Antonio Luna Interior Brgy Mambulac, Silay City', '099332599656', 'Antonio Luna Interior Brgy Mambulac, Silay City', '09984979689', 'Elma Superficial', 'Antonio Luna Interior Brgy Mambulac, Silay City', '09297598448', 43, 'Epoetin Alfa (Eposino) 6,000 IO', 'ESRD 2 degree to Dm Nephropathy', '', 'Elbert Escalona', 'Self', '2014-12-16', 0, 'N0006'),
('52-04-23', 'Valle', 'Restituto', '', '1955-10-14', 62, 'Male', 'F', 'Roman Catholic', 'Married', 'Brgy. Tanza, EB Magalona, Silay City, Negros Occidental', '09092954332', 'Brgy. Tanza, EB Magalona, Silay City, Negros Occidental', '09092954332', 'Leilanie V. Lima', 'Brgy. Tanza, EB Magalona, Silay City, Negros Occidental', '09217464044', 60, 'Epoetin Alpha (Eposino) 6,000 ui 2x/week', 'End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis', '1105-0229-0398', '', 'Wife', '2015-09-06', 0, 'N00011'),
('55-14-06', 'Mabacquiao', 'Lilibeth', 'Vega', '1967-04-18', 50, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'HDA. Bagacay, Brgy. Bagtic, Silay City, Negros Occidental', '495-2761', 'HDA. Bagacay, Brgy. Bagtic, Silay City, Negros Occidental', '0912533652', 'Judie Vega', 'St. Francis Subd., Silay City, Negros Occidental', '0912533652', 44, 'Epoetin Alpha (Eposino) 6,000 ui 2x/week', 'End Stage Renal Disease Secondary to Chronic Glomerulonephritis; Anemia  Secondary to CKD', '1105-0228-7353-9', 'Lilibeth Mabacquiao', 'Self', '2011-09-29', 0, 'N0004'),
('58-67-08', 'Jimena', 'Josue', 'Abian', '1949-03-10', 68, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'Tuburan Takas, Brgy. Tuburan, E.B Magalona, Negros Occidental', '09214153247', 'Tuburan Takas, Brgy. Tuburan, E.B Magalona, Negros Occidental', '09214153247', 'Jobosan Villaflor', 'Sagay City, Negros Occidental', '09391217423', 61, 'Epoetin Alpha(Renogen) 6,000 iu 2x/week', 'End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis', '', 'Josue Jimena', 'Self', '2010-06-07', 0, 'N0008'),
('61-39-06', 'Gonzales', 'Lerma', 'Agbay', '1963-08-28', 54, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental', '09997739530', 'HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental', '09997739530', 'Mary Ann Ubay', 'HDA. Makina, Brgy. Rizal, Silay City, Negros Occidental', '09997739530', 53, 'Epoetin Alpha 4,000 iu 2x/week', 'End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis', '', 'Lerma Gonzales', 'Self', '2016-09-24', 0, 'N0001'),
('65-10-03', 'Marayan', 'Brenda', 'Magbanua', '1967-10-08', 50, 'Female', 'Filipino', 'Roman Catholic', 'Single', 'Brgy. Tanza, EB Magalona, Negros Occidental', '09123769375', 'Brgy. Tanza, EB Magalona, Negros Occidental', '09123769375', 'Myra Davo', 'Brgy. Tanza, EB Magalona, Negros Occidental', '09505758070', 48, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Diabetic Nephropathy', '', 'Brenda Marayan', 'Self', '2015-03-05', 0, 'N0004'),
('80-67-10', 'Liven', 'Allan', 'Gutierrez', '1971-11-11', 46, 'Male', 'Filipino', 'Roman Catholic', 'Single', 'HDA. Necoton Brgy 13, Victorias City, Negros Occidental', '09278852865', 'HDA. Necoton Brgy 13, Victorias City, Negros Occidental', '09100317020', 'Lucily Gutierrez', 'HDA. Necoton Brgy 13, Victorias City, Negros Occidental', '09278852865', 45, 'Epoetin Alfa(Eposino) 4000 units', 'CKD 2 degree to Hypertensive Nephrosclerosis', '', 'Lucily Gutierrez', 'Guardian', '2017-08-01', 0, 'N0007'),
('83-49-22', 'Hibionada', 'Ma. Carel', 'Dionio', '1963-03-17', 53, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'Yap Quina Subd. Brgy.3, Victorias City, Negros Occidental', '09226597988', 'Yap Quina Subd. Brgy.3, Victorias City, Negros Occidental', '09226597988', 'Cyril Gustillo', 'Cantown Subd., Victorias City, Negros Occidental', '09328657897', 52, 'Eposino 4,000 iu alternate (once & twice a week)', 'ESRD Secondary to Hypertensive Nephrosclerosis', '1150-0145-4893', 'Ma. Carel Hibionada', 'Self', '2016-02-20', 0, 'N00011'),
('84-63-02', 'Pedrajas', 'Lolita', 'Patrimonio', '1939-02-19', 78, 'Female', 'Filipino', 'Roman Catholic', 'Widowed', '#52 Francisco Maravilla St., Brgy. 3, EB Magalona, Negros Occidental', '09125896891', 'Antonio Luna St., Silay City, Negros Occidental', '09125896891', 'Daisy Pedrajas', '#52 Francisco Maravilla St., Brgy. 3, EB Magalona, Negros Occidental', '09125896891', 73, 'Epoetin Alpha (Eposino) 4,000 iu 2x/week', 'End Stage Renal Disease Secondary to Hypertensive Nephroclerosis', '', 'Daisy Pedrojas', 'Daughter', '2013-02-10', 0, 'N0003'),
('86-11-12', 'Toriano', 'Josette', 'Ballesteros', '1971-10-14', 44, 'Female', 'Filipino', 'Roman Catholic', 'Single', 'Blk. 11 Lot 4, Manmar Subd. Brgy Zone 15, Talisay City, Negros Occidental', '09232381390', 'Blk. 11 Lot 4, Manmar Subd. Brgy Zone 15, Talisay City, Negros Occidental', '09258746582', 'Gil Demis Toriano', 'Blk. 11 Lot 4, Manmar Subd. Brgy Zone 15, Talisay City, Negros Occidental', '0923747400', 40, 'Eposino 6,000 iu once a week', 'CKD Secondary to Hypertensive Nephrosclerosis', '', 'Josette Toriano', 'Self', '2013-02-27', 0, 'N0003'),
('86-89-17', 'Bacaron', 'Genelyn', 'Amante', '1979-09-25', 36, 'Female', 'Filipino', 'Baptist', 'Single', 'HDA. Juliana Washington, Escalante City, Negros Occidental', '09282278493', 'HDA. Juliana Washington, Escalante City, Negros Occidental', '09303286809', 'Judith Amante', 'Quezon St. Victorias City, Negros Occidental', '09185985952', 31, 'Renogen 4,000 iu', 'End Stage Renal Disease Secondary to  Chronic Glomerulonephritis, Anemia', '', 'Genelyn Bacaron', 'Self', '2011-01-05', 0, 'N00010'),
('89-93-08', 'Deliva', 'Hazel Mae', 'Abancio', '1980-02-07', 37, 'Female', 'Filipino', 'Roman Catholic', 'Single', '#359 Auxilladora St., Canetown Subd., Victorias City, Negros Occidental', '09463696469', '#359 Auxilladora St., Canetown Subd., Victorias City, Negros Occidental', '09463696469', 'Cheryl Lademora', 'Brgy. 16, Bacolod City, Negros Occidenral', '', 31, 'Epoetin Alpha 4,000 ui 2x/week', 'End Stage Renal Disease Secondary to Chronic Glomerulonephritis', '1100-0099-2372', 'Ma. Theresa Arboleda', 'Patient', '2011-05-20', 0, 'N00011'),
('89-96-01', 'Catigan', 'Sheryl', 'Entera', '1978-11-23', 38, 'Female', 'Filipino', 'Roman Catholic', 'Married', 'Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental', '09168430493', 'Blk 15, Talisay Town Heights, Matab - ang, Talisay City, Negros Occidental', '09168430493', 'Alex Entera', 'Brgy. Concepcion, Talisay City, Negros Occidental', '09194474423', 31, 'Renogen 4,000 iu', 'ESRD Secondary to CGN', '', 'Edita Entera', 'Guardian', '2013-05-13', 0, 'N0005'),
('93-91-13', 'Boteros', 'Ma. Andrea', 'Marcasote', '1983-11-30', 34, 'Female', 'Filipino', 'Roman Catholic', 'Single', 'Brgy. 3, EB Magalona, Silay City, Negros Occidental', '09236367547', 'Brgy. 3, EB Magalona, Silay City, Negros Occidental', '09236367547', 'Ma. Donna Ortega', 'Brgy. 3, EB Magalona, Silay City, Negros Occidental', '09198446769', 30, 'Epoetin Beta (Recormon) 5,000 ui 2x/week', 'End Stage Renal Disease Secondary to Chronic Glomerulonephritis', '', 'Ma. Andrea Boteros', 'Self', '2014-02-17', 0, 'N0007'),
('93-94-12', 'Nitro', 'Jose Marie', 'Rivas', '1968-09-29', 49, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'Cinco De Noviembre, Brgy. III, Silay City, Negros Occidental', '714-8416', 'Cinco De Noviembre, Brgy. III, Silay City, Negros Occidental', '714-8416', 'Marivic Golez', 'Rizal Street, Silay City, Negros Occidental', '09226763042', 44, 'Epoetin Beta (Recormon) 5,000 ui 2x/week', 'End Stage Renal Disease Secondary to Hypertensive Nephrosclerosis', '1102-5136-3412', 'Ma. Soccoro Nitro', 'Wife', '2013-01-28', 0, 'N0009'),
('96-34-17', 'Susmiran', 'Liezl Corazon', 'Lavadia', '1972-03-24', 44, 'Female', 'Filipino', 'Born Again', 'Married', 'Purok Ipil-ipil, Brgy. Mambulac, Silay City, Negros Occidental', '09079749850', 'Purok Ipil-ipil, Brgy. Mambulac, Silay City, Negros Occidental', '09079749850', 'Mary Jane Lavadia', 'Purok Paghidaet, Brgy. Mambulac, Silay City, Negros Occidental', '09103794462', 43, 'Epoetin Alfa (Esposino 4000 units)', 'ESRD 2 degree Hypertensive Nephrosclerosis', '', 'Liezl Susmiran', 'Self', '2015-05-25', 0, 'N0004'),
('96-52-17', 'Acosta', 'Ireneo Jr.', 'Chavez', '1949-02-23', 67, 'Male', 'Filipino', 'Roman Catholic', 'Married', 'Brgy. 19 Mallorca, Victorias City, Negros Occidental', '09064975176', 'Brgy. 19 Mallorca, Victorias City, Negros Occidental', '09064975176', 'Elena Marinas', 'Brgy. 19 Mallorca, Victorias City, Negros Occidental', '09064975176', 65, 'Eposino 4,000 iu', 'ESRD Secondary to DM Nephropathy, Urate Nephropathy', '1120-0762-8091', 'Vilma Acosta', 'Wife', '2014-08-01', 0, 'N0007'),
('99-06-03', 'Villarte Sr.', 'Edwin', 'Condada', '1954-08-19', 63, '', 'Filipino', 'Roman Catholic', '', 'Sampaguita Village, Brgy. Lantad, Silay City, Negros Occidental', '09951334869', 'Sampaguita Village, Brgy. Lantad, Silay City, Negros Occidental', '09951334869', 'Alma Juarez', 'Sitio Berano, Brgy. Lantad, Silay City, Negross Occidental', '09191623435', 58, 'Epoetin Alpha (Renogen) 4,000 iu 2x/week', 'ESRD Secondary to Hypertensive Nephrosclerosis', '1120-1172-3406', 'Edwin Villarte Sr.', 'Self', '2012-11-24', 0, 'N0005');

-- --------------------------------------------------------

--
-- Table structure for table `patientschedule`
--

CREATE TABLE `patientschedule` (
  `schedule_id` int(5) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `treatment_day` varchar(10) NOT NULL,
  `treatment_time` varchar(10) NOT NULL,
  `treatment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientschedule`
--

INSERT INTO `patientschedule` (`schedule_id`, `Hospital_Id`, `treatment_day`, `treatment_time`, `treatment_status`) VALUES
(3, '06-08-23', 'Monday', 'afternoon', 0),
(4, '13-18-17', 'Monday', 'morning', 1),
(5, '13-38-01', 'Tuesday', 'afternoon', 1),
(6, '23-22-02', 'friday', 'afternoon', 1),
(7, '13-67-08', 'monday', 'afternoon', 0),
(8, '86-89-17', 'Monday', 'morning', 1),
(9, '40-89-11', 'Monday', 'morning', 1),
(10, '86-11-12', 'Monday', 'morning', 1),
(11, '40-78-21', 'Monday', 'morning', 1),
(12, '40-24-17', 'Monday', 'morning', 0),
(13, '93-94-12', 'Monday', 'afternoon', 1),
(14, '25-84-10', 'Monday', 'afternoon', 1),
(15, '89-93-08', 'Tuesday', 'morning', 1),
(16, '45-18-16', 'Tuesday', 'morning', 1),
(17, '20-12-17', 'Tuesday', 'afternoon', 1),
(18, '31-24-32', 'Tuesday', 'afternoon', 1),
(19, '01-26-22', 'Wednesday', 'morning', 1),
(20, '45-45-24', 'Monday', 'morning', 1);

-- --------------------------------------------------------

--
-- Table structure for table `problemlist`
--

CREATE TABLE `problemlist` (
  `problem` varchar(50) NOT NULL,
  `datenoted` date NOT NULL,
  `dateresolved` date NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `problemlist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatment_id` int(5) NOT NULL,
  `treatment_date` date NOT NULL,
  `treatment_duration` varchar(10) NOT NULL,
  `BFR` varchar(20) NOT NULL,
  `dialyzer` varchar(20) NOT NULL,
  `dialyzer_user` varchar(20) NOT NULL,
  `access` varchar(20) NOT NULL,
  `heparin` varchar(20) NOT NULL,
  `machine_num` int(2) NOT NULL,
  `Hospital_Id` varchar(30) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `employeeid` varchar(10) NOT NULL,
  `technicianid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatment_id`, `treatment_date`, `treatment_duration`, `BFR`, `dialyzer`, `dialyzer_user`, `access`, `heparin`, `machine_num`, `Hospital_Id`, `weight`, `employeeid`, `technicianid`) VALUES
(2, '2017-06-05', '4 hours', '300 cc/min', 'HIPS-18', '1st reuse', 'L AVF', 'free', 6, '40-89-11 ', '51.4', 'E0003', 'E0006'),
(3, '2017-06-19', '4 hours', '300 cc/min', 'HIPS-18', 'new set', 'L AVF', 'free', 6, '40-89-11 ', '49.1', 'E0003', 'E0002'),
(7, '2017-07-03', '4 hours', '300cc/min', 'F8HPS', 'newset', 'L AVF', 'Regular', 6, '40-89-11 ', '', 'E0003', 'E0003'),
(8, '2017-06-19', '4 hours', '25 cc/min', 'HIPS 18', '2nd reuse', 'R IJ', 'FREE', 4, '45-45-24 ', '75.2', 'E0001', 'E0003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnostic/examination`
--
ALTER TABLE `diagnostic/examination`
  ADD PRIMARY KEY (`diagnostic/examination_id`);

--
-- Indexes for table `employeeprofile`
--
ALTER TABLE `employeeprofile`
  ADD PRIMARY KEY (`employeeid`) USING BTREE,
  ADD KEY `employee_num` (`employee_num`) USING BTREE;

--
-- Indexes for table `hepatitisprofile`
--
ALTER TABLE `hepatitisprofile`
  ADD PRIMARY KEY (`hepatitisprofile_id`);

--
-- Indexes for table `initialtestresult`
--
ALTER TABLE `initialtestresult`
  ADD PRIMARY KEY (`initialtestresult_id`);

--
-- Indexes for table `machineresult`
--
ALTER TABLE `machineresult`
  ADD PRIMARY KEY (`machineresult_id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD KEY `employeeid` (`employeeid`);

--
-- Indexes for table `nephrologist`
--
ALTER TABLE `nephrologist`
  ADD PRIMARY KEY (`nephrologistid`),
  ADD KEY `nephrologistnum` (`nephrologistnum`);

--
-- Indexes for table `nephronotesorder`
--
ALTER TABLE `nephronotesorder`
  ADD PRIMARY KEY (`notes_order_Id`);

--
-- Indexes for table `nursenotes`
--
ALTER TABLE `nursenotes`
  ADD PRIMARY KEY (`nurse_notes_id`),
  ADD KEY `Hospital_Id` (`Hospital_Id`);

--
-- Indexes for table `patientdrugprofile`
--
ALTER TABLE `patientdrugprofile`
  ADD PRIMARY KEY (`drugprofile_id`);

--
-- Indexes for table `patientprofile`
--
ALTER TABLE `patientprofile`
  ADD PRIMARY KEY (`Hospital_Id`),
  ADD KEY `nephrologistid` (`nephrologistid`);

--
-- Indexes for table `patientschedule`
--
ALTER TABLE `patientschedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `problemlist`
--
ALTER TABLE `problemlist`
  ADD PRIMARY KEY (`problemlist_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeeprofile`
--
ALTER TABLE `employeeprofile`
  MODIFY `employee_num` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `hepatitisprofile`
--
ALTER TABLE `hepatitisprofile`
  MODIFY `hepatitisprofile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `initialtestresult`
--
ALTER TABLE `initialtestresult`
  MODIFY `initialtestresult_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `machineresult`
--
ALTER TABLE `machineresult`
  MODIFY `machineresult_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `nephrologist`
--
ALTER TABLE `nephrologist`
  MODIFY `nephrologistnum` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nephronotesorder`
--
ALTER TABLE `nephronotesorder`
  MODIFY `notes_order_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `nursenotes`
--
ALTER TABLE `nursenotes`
  MODIFY `nurse_notes_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `patientdrugprofile`
--
ALTER TABLE `patientdrugprofile`
  MODIFY `drugprofile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patientschedule`
--
ALTER TABLE `patientschedule`
  MODIFY `schedule_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `problemlist`
--
ALTER TABLE `problemlist`
  MODIFY `problemlist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `employeeid` FOREIGN KEY (`employeeid`) REFERENCES `employeeprofile` (`employeeid`);

--
-- Constraints for table `nursenotes`
--
ALTER TABLE `nursenotes`
  ADD CONSTRAINT `Hospital_Id` FOREIGN KEY (`Hospital_Id`) REFERENCES `patientprofile` (`Hospital_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
