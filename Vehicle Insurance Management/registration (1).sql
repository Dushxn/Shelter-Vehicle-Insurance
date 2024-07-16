-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 12:31 PM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `addnew`
--

CREATE TABLE `addnew` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Vehicle_model` varchar(20) NOT NULL,
  `Manufacture_year` varchar(20) NOT NULL,
  `License_plate` varchar(20) NOT NULL,
  `Insurance_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addnew`
--

INSERT INTO `addnew` (`ID`, `First_name`, `Last_name`, `Vehicle_model`, `Manufacture_year`, `License_plate`, `Insurance_type`) VALUES
(79, 'Tharindu', 'Dushan', 'honda civic', '2013', 'CA5852', 'Premium'),
(81, 'Tharindu', 'Dushan', 'Nissan sudan suv', '2008', 'AV669', 'Premium');

-- --------------------------------------------------------

--
-- Table structure for table `agentpolicy`
--

CREATE TABLE `agentpolicy` (
  `policyID` int(20) NOT NULL,
  `policyName` varchar(100) NOT NULL,
  `dateCreated` varchar(15) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agentpolicy`
--

INSERT INTO `agentpolicy` (`policyID`, `policyName`, `dateCreated`, `duration`, `description`) VALUES
(1002, 'Underwriting Guidelines', '2023-06-01', '5 years', 'Underwriting policies specify the criteria and factors used to assess risk and determine premium rates. '),
(1003, 'Claims Handling Procedures', '2023-06-01', '2 Years', 'This policy defines the process agents must follow when handling insurance claims. '),
(1004, 'Compliance Regulations', '2023-02-20', '2.5 Years', 'Agents must comply with relevant laws, regulations, and industry standards.'),
(1005, 'Customer Service Standards', '2023-03-15', '3 years', 'Policies related to customer service set expectations for how agents should interact with policyholders.'),
(1006, 'Product Knowledge and Training', '2021-06-23', ' 4 Years', 'Insurance agents are expected to have in-depth knowledge of the insurance products they offer. '),
(1007, 'Confidentiality and Data Privacy', '2020-11-01', ' 2 Years', 'Agents often handle sensitive customer information, so policies regarding confidentiality and data privacy are crucial.');

-- --------------------------------------------------------

--
-- Table structure for table `claimform`
--

CREATE TABLE `claimform` (
  `id` int(20) NOT NULL,
  `VID` varchar(20) NOT NULL,
  `Plate_Number` varchar(20) NOT NULL,
  `Date_Time` datetime(6) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Description_accident` varchar(800) NOT NULL,
  `Description_damage` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `claimform`
--

INSERT INTO `claimform` (`id`, `VID`, `Plate_Number`, `Date_Time`, `Location`, `Description_accident`, `Description_damage`) VALUES
(16, '1001', 'CA5852', '2023-06-11 07:15:00.000000', 'Kottawa Junction', 'On 06/11/2023 at approximately 07:15AM, an accident occurred at Kottawa Junction. The incident involved my car with the provided insurance vehicle identification number 1001.\r\n\r\nThe weather conditions at the time of the accident were sunny and clear.\r\n\r\nT', 'Vehicle ID: 1001\r\n\r\nMake/Model: Honda civic\r\nLicense Plate Number: CA5852\r\nDescription of Damage: front-bumper and front headlight\r\nSeverity of Damage: moderate'),
(17, '1002', 'av6369', '2023-06-11 05:30:00.000000', 'makubura junction', 'On 06/11/2023 at approximately 05:30, an accident occurred at makubura junction. The incident involved two vehicles: a blue sedan, identified by license plate number ABC123, and a white SUV, identified by license plate number av6369.\r\n\r\nA brief summary of the events leading up to the accident is as follows: The blue sedan was traveling westbound on Main Street, and the white SUV was traveling northbound on Elm Avenue. As the vehicles approached the intersection of Main Street and Elm Avenue, the white SUV failed to stop at the red traffic light and collided with the blue sedan in the intersection. The impact caused significant damage to both vehicles.\r\n\r\nThe weather conditions at the time of the accident were clear and sunny. The road conditions were dry and well-maintained.\r\n', 'Model: White suv\r\nLicense Plate Number: av669\r\nVIN (Vehicle Identification Number): 1002\r\n\r\nLocation of Damage: The front bumper and left side of the vehicle, including the driver-side door and rear fender, were affected.\r\nType of Damage: The damage consists of significant dents and scratches on the front bumper, with paint transfer from the white SUV. The driver-side door has a noticeable dent, and the rear fender has a deep scratch.\r\nSize/Extent of Damage: The dents on the front bumper measure approximately 12 inches in diameter. The dent on the driver-side door is approximately 6 inches in length. The scratch on the rear fender spans about 10 inches.\r\nAdditional Details: The front bumper also sustained minor cracking near the impact area. ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `teleNo` int(10) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `inquiryType` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fName`, `lName`, `address`, `teleNo`, `email`, `inquiryType`, `message`) VALUES
('Tharindu', 'Dushan', '236/12, Godahena, Pitipana North, Homagama', 718712335, 'tdmahindarathne@gmail.com', 'Claim Inquiry', 'Still not recieved the claim. poor service'),
('Dushan', 'Mahindarathna', '236/12, Godahena, Pitipana North, Homagama', 718712335, 'tharindudushan12345@gmail.com', 'Complaint', 'poor customer service'),
('Tiny', 'Kaveesha', '151/a', 714977516, 'kaveeshatiny@gmail.com', 'Other', 'satisfied with the service');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `Pay_ID` int(10) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Card_no` varchar(32) NOT NULL,
  `Card_type` varchar(20) NOT NULL,
  `Expiry_date` date NOT NULL,
  `Pin_no` varchar(10) NOT NULL,
  `Amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`Pay_ID`, `First_name`, `Last_name`, `Card_no`, `Card_type`, `Expiry_date`, `Pin_no`, `Amount`) VALUES
(29, 'Tharindu', 'Dushan', '1234123412341234', 'aexpress', '2023-06-11', '5655', '75000'),
(30, 'Tharindu', 'Dushan', '1234123412341234', 'aexpress', '2023-06-11', '5655', '75000');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `p_no` int(11) NOT NULL,
  `description` char(255) NOT NULL,
  `date` date NOT NULL,
  `auth_by` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`p_no`, `description`, `date`, `auth_by`) VALUES
(1, 'Our insurance coverage is subject to the terms, conditions, and limitations set forth in the insurance policy contract issued to you.', '2023-06-11', 'manager'),
(2, 'Premiums are payable in the manner and frequency outlined in the policy, and failure to make timely payments may result in policy cancellation or other consequences.', '2023-06-11', 'manager'),
(3, 'Some common exclusions may include intentional acts, racing, driving under the influence, or using the vehicle for unauthorized purposes.', '2023-06-11', 'manager'),
(4, 'In the event of a loss or damage covered under the policy, you must notify us promptly and provide all necessary information and documentation required to process the claim.', '2023-06-11', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `NIC` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `street_address_1` varchar(255) NOT NULL,
  `street_address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ID`, `first_name`, `last_name`, `NIC`, `dob`, `gender`, `street_address_1`, `street_address_2`, `city`, `province`, `postal_code`, `mobile`, `email`, `username`, `password`, `role`) VALUES
(1031, 'Nimal', 'Perera', '200207402840', '2002-03-14', 'male', '236/12,', 'adad', 'Homagama', 'Colombo', 102, 718712335, 'tharindudushxn@gmail.com', 'nimal2002', '$2y$10$88WXTamJNiSDcdsVL.vKnuhVWIQKVevFRLCi0bMTqEC0y/pYiDH1a', 'admin'),
(10030, 'Tharindu', 'Dushan', '200207402840', '2002-03-14', 'male', '236/12,', 'adad', 'Homagama', 'Colombo', 10200, 718712335, 'tdmahindarathne@gmail.com', 'dushxn1', '$2y$10$CbFVsfDmeuYK/A43/VlLR.Mvq2NQ6dNgCp/rl1ZDN1QIiZ4N1DGca', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addnew`
--
ALTER TABLE `addnew`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `agentpolicy`
--
ALTER TABLE `agentpolicy`
  ADD PRIMARY KEY (`policyID`);

--
-- Indexes for table `claimform`
--
ALTER TABLE `claimform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`Pay_ID`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`p_no`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addnew`
--
ALTER TABLE `addnew`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `agentpolicy`
--
ALTER TABLE `agentpolicy`
  MODIFY `policyID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `claimform`
--
ALTER TABLE `claimform`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `Pay_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `p_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10039;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
