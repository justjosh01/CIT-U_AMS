-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 12:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `id` int(255) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `gender` varchar(10000) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) NOT NULL,
  `contact_number` varchar(1000) DEFAULT NULL,
  `department` text,
  `location` varchar(1000) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `detail` text NOT NULL,
  `active` int(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `date_forgot_password` datetime NOT NULL,
  `token` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`id`, `admin_id`, `name`, `username`, `gender`, `date_of_birth`, `password`, `image`, `email`, `contact_number`, `department`, `location`, `type`, `detail`, `active`, `user_id`, `date_added`, `date_modified`, `date_forgot_password`, `token`) VALUES
(1, 142365987, 'Jose Virgil Orais', '', 'Male', '1996-12-02', '21232f297a57a5a743894a0e4a801fc3', NULL, 'oraisjv@gmail.com', '09462176015', 'IT', 'IN', 'admins', '', 1, NULL, '2017-11-23 04:55:10', '2018-01-27 18:19:07', '0000-00-00 00:00:00', '1d3c298f6c1866ddfa000f0eb012cb08'),
(12, 142596878, 'Julierizz Queen Love Starr Señas', '', 'Female', '1997-05-12', '21232f297a57a5a743894a0e4a801fc3', NULL, 'julleerizzsenas@gmail.com', '0915-236-4879', 'IT', 'KW', 'admins', '', 1, NULL, '2017-12-03 08:49:22', '2017-12-03 20:20:34', '0000-00-00 00:00:00', '7bd9d85feaf010ad8f740a3195dff196'),
(15, 123456, 'Bruce Wayne', '', 'Male', '1952-05-16', '69a0db089ef9520ba46ff3da9c6512c7', NULL, 'alacseshojhua01@gmail.com', '09462176015', 'CS', 'FX', 'admins', '', 1, NULL, '2018-01-27 19:22:46', '2018-01-29 01:36:53', '0000-00-00 00:00:00', 'd2d0bad22568d6646cf2c61e4b447ed7'),
(16, 142191585, 'Joshua Escala', '', 'Male', '1996-05-09', '21232f297a57a5a743894a0e4a801fc3', NULL, 'calajosh@gmail.com', '0915-891-5296', 'IT', 'PH', 'admins', '', 1, NULL, '2018-01-29 14:00:07', NULL, '0000-00-00 00:00:00', 'be5f62be50813b23a3e9dab9b66a490e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `id` int(255) NOT NULL,
  `alumni_id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `mailing_address` varchar(1000) DEFAULT NULL,
  `gender` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(1000) DEFAULT NULL,
  `home_address` varchar(1000) DEFAULT NULL,
  `citizenship` varchar(1000) NOT NULL,
  `civil_status` text,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `contact_number` varchar(1000) NOT NULL,
  `elementary` text,
  `secondary` text,
  `tertiary` text NOT NULL,
  `degree` text NOT NULL,
  `year_graduated` year(4) NOT NULL,
  `date_of_graduation` date NOT NULL,
  `employment_status` varchar(1000) DEFAULT NULL,
  `year_hired_or_fired` year(4) DEFAULT NULL,
  `career_field` text,
  `work_status` text,
  `is_job_aligned` tinyint(1) DEFAULT NULL,
  `position` text,
  `salary_range` text,
  `company_name` text,
  `company_address` text,
  `sector` text,
  `past_employment_status` text,
  `past_year_hired_or_fired` year(4) DEFAULT NULL,
  `past_sector` text,
  `past_career_field` text,
  `past_work_status` text,
  `is_past_job_aligned` tinyint(1) DEFAULT NULL,
  `past_position` text,
  `past_salary_range` text,
  `past_company_name` text,
  `past_company_address` text,
  `award` text,
  `date_given` date DEFAULT NULL,
  `awarding_body` text,
  `testimony_personal_family` text,
  `testimony_career` text,
  `testimony_community` text,
  `recovery_email` text,
  `token` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `active` int(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_activated` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `date_forgot_password` datetime DEFAULT NULL,
  `location` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`id`, `alumni_id`, `name`, `mailing_address`, `gender`, `date_of_birth`, `place_of_birth`, `home_address`, `citizenship`, `civil_status`, `username`, `password`, `email`, `contact_number`, `elementary`, `secondary`, `tertiary`, `degree`, `year_graduated`, `date_of_graduation`, `employment_status`, `year_hired_or_fired`, `career_field`, `work_status`, `is_job_aligned`, `position`, `salary_range`, `company_name`, `company_address`, `sector`, `past_employment_status`, `past_year_hired_or_fired`, `past_sector`, `past_career_field`, `past_work_status`, `is_past_job_aligned`, `past_position`, `past_salary_range`, `past_company_name`, `past_company_address`, `award`, `date_given`, `awarding_body`, `testimony_personal_family`, `testimony_career`, `testimony_community`, `recovery_email`, `token`, `type`, `active`, `user_id`, `date_added`, `date_activated`, `date_modified`, `date_forgot_password`, `location`, `image`) VALUES
(1, 180324, 'Joshua Escala', '237 San Antonio, Bulacao, Cebu City', 'Male', '1996-05-09', 'Kangwayan, Madridejos, Cebu', 'Kangwayan, Madridejos, Cebu', 'Filipino', 'Single', 'justjosh01', '21232f297a57a5a743894a0e4a801fc3', 'alacseshojhua01@gmail.com', '0915-891-5296', 'Pili Elementary School', 'San Agustin Nation High School', 'Cebu Institute of Technology - University', 'BSIT', 2018, '2018-03-24', '1', 2018, '1', 'Permanent', 1, 'Team Lead', '1', 'Alliance, Software Inc.', 'Cebu Business Park', 'Private', 'Employed, locally', 2014, 'Private', '5', 'Temporary', 0, 'Utility', '0', 'Colinayo Farm', 'Sitio Nangka, Kangwayan, Madridejos, Cebu', 'Leadership Award', '2017-01-29', 'UNITED Party', 'Awesome!', 'So good!', 'Nice!', 'calajosh@gmail.com', '56b653e01b04bdbe3bf7cf1f672dc1f8', 'alumni', 1, NULL, '2017-12-03 08:34:49', '2018-01-29 01:41:28', '2018-02-01 22:26:27', '2018-02-01 22:26:27', 'PH', NULL),
(2, 180235, 'Razil O. Cansancio', NULL, 'Male', '1997-12-30', '', '', '', NULL, NULL, 'aa5e530aa0a88a1477892ca9b5d4615e', 'chichiryota@gmail.com', '0915-526-7892', NULL, NULL, 'Cebu Institute of Technology - University', '', 2018, '0000-00-00', '0', NULL, '3', NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ee9d63294ec2d2a9a0aafb5ef9d6e5d8', 'alumni', 1, NULL, '2017-12-03 18:31:25', '2018-01-29 02:26:46', '2018-01-29 02:26:46', NULL, '', NULL),
(3, 180236, 'Allan Cabrilles Jr.', NULL, 'Male', '1993-05-28', '', '', '', NULL, NULL, '1d690c3cf7c5aab04db107664d49296d', 'junix123@gmail.com', '0922-485-6291', NULL, NULL, 'Cebu Institute of Technology - University', '', 2017, '0000-00-00', '1', NULL, '1', NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67b77aebe8207ddc923c94f2ea0fc2f1', 'alumni', 1, NULL, '2017-12-03 10:26:47', '2018-01-29 01:41:50', '2018-01-29 01:41:50', NULL, '', NULL),
(4, 180213, 'Amy Rose A. Inanod', NULL, 'Female', '1997-05-08', '', '', '', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 'calajosh@gmail.com', '0915-890-5386', NULL, NULL, 'Cebu Institute of Technology - University', '', 2018, '0000-00-00', '1', NULL, '4', NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '84895727ec7cbc87fc20d97e8447d47f', 'alumni', 1, NULL, '2017-12-03 10:26:46', '2018-02-01 22:50:52', '2018-02-01 22:50:52', '2018-02-01 22:08:00', '', NULL),
(6, 141519178, 'Gem Elaine Alob', NULL, 'Female', '1998-06-19', NULL, NULL, '', NULL, NULL, '53bf24e68faefe77bb4a6b867e58f077', 'elaine123@gmail.com', '09294165879', NULL, NULL, '', '', 2018, '0000-00-00', '0', NULL, '0', NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'afa72d3cd8b0a17f1da402744a565531', 'alumni', 0, NULL, '2018-02-02 01:15:59', NULL, NULL, NULL, '', NULL),
(9, 654321, 'Barry Allen', NULL, 'Male', '1992-06-08', NULL, NULL, '', NULL, NULL, '68d36c9036f96adf4996c3ea73966c4b', 'barry.allen@gmail.com', '09159815296', NULL, NULL, 'Cebu Institute of Technology - University', '', 2014, '0000-00-00', '1', NULL, '5', NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20b6f9c795965edeccd4cf54f600d6a4', 'alumni', 0, NULL, '2018-02-02 02:11:03', NULL, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE `tbl_announcements` (
  `id` int(255) NOT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(255) NOT NULL,
  `alumni_id` int(255) DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `active` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_super_admin`
--

CREATE TABLE `tbl_super_admin` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) NOT NULL,
  `contact_number` varchar(1000) DEFAULT NULL,
  `birth_date` varchar(1000) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `detail` text,
  `active` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `token` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_super_admin`
--

INSERT INTO `tbl_super_admin` (`id`, `name`, `username`, `password`, `image`, `email`, `contact_number`, `birth_date`, `type`, `detail`, `active`, `user_id`, `date_added`, `date_modified`, `token`) VALUES
(1, 'Super Admin', 'super_admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'cituams1718@gmail.com', '09464275811', NULL, 'super_admin', NULL, 1, NULL, '2017-11-25 04:27:12', '2017-12-03 09:08:43', NULL),
(2, 'Joshua Escala', 'elijah', '21232f297a57a5a743894a0e4a801fc3', NULL, 'calajosh@gmail.com', NULL, NULL, 'super_admin', NULL, 1, NULL, NULL, '2017-11-26 05:45:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_super_admin`
--
ALTER TABLE `tbl_super_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_super_admin`
--
ALTER TABLE `tbl_super_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
