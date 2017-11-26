-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 10:34 AM
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
  `gender` varchar(10000) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) NOT NULL,
  `contact_number` varchar(1000) DEFAULT NULL,
  `department` text,
  `location` varchar(1000) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `detail` text,
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

INSERT INTO `tbl_admins` (`id`, `admin_id`, `name`, `gender`, `date_of_birth`, `username`, `password`, `image`, `email`, `contact_number`, `department`, `location`, `type`, `detail`, `active`, `user_id`, `date_added`, `date_modified`, `date_forgot_password`, `token`) VALUES
(6, 0, 'Jose Virgil Orais', NULL, NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, 'cituams1718@gmail.com', '09462176015', NULL, NULL, 'admins', NULL, 1, NULL, '2017-11-23 04:55:10', '2017-11-25 14:18:49', '0000-00-00 00:00:00', '1d3c298f6c1866ddfa000f0eb012cb08'),
(9, 142191585, 'Joshua Escala', 'Male', '1996-05-09', NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, 'calajosh@gmail.com', '09158915296', 'Information Technology', 'PH', 'admins', NULL, 1, NULL, '2017-11-23 15:02:17', '2017-11-26 16:18:22', '2017-11-24 21:37:10', '92278ac6820c3ccd980db0497be10f3a'),
(10, 0, 'Gem Elaine Alob', NULL, NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, 'iam.elaine@gmail.com', '09123456789', NULL, NULL, 'admins', NULL, 1, NULL, '2017-11-25 14:21:29', NULL, '0000-00-00 00:00:00', 'fa6e8ae7dd63b3972766568468fca255'),
(11, 0, 'Julierizz Queen Love Starr Señas', NULL, NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, 'julierizz@gmail.com', '09213456789', NULL, NULL, 'admins', NULL, 1, NULL, '2017-11-25 14:22:58', NULL, '0000-00-00 00:00:00', 'e43d754e7536fce87a38783e67dfc88d');

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
  `civil_status` text,
  `code` varchar(1000) DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `contact_number` varchar(1000) DEFAULT NULL,
  `elementary` text,
  `secondary` text,
  `tertiary` text NOT NULL,
  `degree` text NOT NULL,
  `year_graduated` year(4) NOT NULL,
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
  `token` varchar(1000) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `detail` text,
  `active` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `date_forgot_password` datetime DEFAULT NULL,
  `location` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`id`, `alumni_id`, `name`, `mailing_address`, `gender`, `date_of_birth`, `civil_status`, `code`, `username`, `password`, `email`, `contact_number`, `elementary`, `secondary`, `tertiary`, `degree`, `year_graduated`, `employment_status`, `year_hired_or_fired`, `career_field`, `work_status`, `is_job_aligned`, `position`, `salary_range`, `company_name`, `company_address`, `sector`, `past_employment_status`, `past_year_hired_or_fired`, `past_sector`, `past_career_field`, `past_work_status`, `is_past_job_aligned`, `past_position`, `past_salary_range`, `past_company_name`, `past_company_address`, `award`, `date_given`, `awarding_body`, `testimony_personal_family`, `testimony_career`, `testimony_community`, `recovery_email`, `token`, `type`, `detail`, `active`, `user_id`, `date_added`, `date_modified`, `date_forgot_password`, `location`, `image`) VALUES
(1, 180324, 'Joshua Escala', '237 San Antonio, Bulacao, Cebu City', 'Male', '1996-05-09', 'Single', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 'calajosh@gmail.com', '09462176015', 'Pili Elementary School', 'San Agustin National High School', 'Cebu Institute of Technology - University', 'Bachelor of Science in Information Technology', 2018, 'Employed', 2018, 'Communications & Information Systems', 'Permanent', 1, 'Team Leader', '21,000 - 35,000', 'Dreamworks', 'Cebu Business Park, Cebu City', 'Private', 'Employed, locally', 2012, 'Self-employed', 'Human Services', 'Temporary', 0, 'Utility', '5,000 - 20,000', 'Colinayo Farm', 'Sitio Nangka, Kangwayan, Madridejos, Cebu', 'Salutatorian', '2014-04-05', 'San Agustin National High School', 'N/A', 'N/A', 'N/A', 'cituams1718@gmail.com', NULL, 'alumni', NULL, 1, NULL, '2017-11-23 03:34:45', '2017-11-25 16:16:14', '0000-00-00 00:00:00', 'Kangwayan, Madridejos, Cebu, Philippines', NULL),
(2, 180001, 'Razil Cansancio', NULL, '', '0000-00-00', '', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 'chichiriryota@gmail.com', '(6332) 514-1232', NULL, NULL, '', '', 0000, '0', 0000, '', NULL, NULL, '', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'alumni', NULL, 1, NULL, '2017-11-23 03:34:45', NULL, '0000-00-00 00:00:00', '693 M.L. Quezon St., Casuntingan, Mandaue City Cebu, Philippines', NULL),
(3, 17002, 'Jessa Mae B. Godinez', NULL, '', '0000-00-00', '', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 'jessa.godinez@gmail.com', '(6332) 272-0069', NULL, NULL, '', '', 0000, '0', 0000, '', NULL, NULL, '', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'alumni', NULL, 1, NULL, '2017-11-23 03:34:46', NULL, '0000-00-00 00:00:00', '906 Sitio Relis, Inayawan, Cebu City ', NULL),
(4, 17006, 'Allan G. Cabrilles', NULL, '', '0000-00-00', '', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 'allan.cabrilles@gmail.com', '(6332) 273-0681 / 273-7077 ', NULL, NULL, '', '', 0000, '0', 0000, '', NULL, NULL, '', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'members', NULL, 1, NULL, '2017-11-23 03:34:48', '2017-11-25 14:34:26', '0000-00-00 00:00:00', NULL, NULL),
(6, 17004, 'Amy Rose Inanod', NULL, '', '0000-00-00', '', NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 'arinanod@gmail.com', '(6332) 416-7000 / 416-0152 to 53', NULL, NULL, '', '', 0000, '0', 0000, '', NULL, NULL, '', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'members', NULL, 1, NULL, '2017-11-23 03:34:48', '2017-11-23 04:48:24', '0000-00-00 00:00:00', 'Tac-an Road, Talamban, Cebu City, Cebu, Philippines', NULL),
(299, 1701819, 'Marie Abigail Lapinid', NULL, 'Female', '1996-11-24', NULL, NULL, NULL, 'd28e9a62e059e3190eeb428d7cc35b26', 'malapinid@gmail.com', '09152346789', NULL, NULL, '', '', 0000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f2022d505c6b9c346a1d5a89285b3794', 'alumni', NULL, 1, NULL, '2017-11-26 17:09:02', '2017-11-26 17:23:31', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE `tbl_announcements` (
  `id` int(255) NOT NULL,
  `dimension_width` varchar(1000) DEFAULT NULL,
  `dimension_length` varchar(1000) DEFAULT NULL,
  `dimension_height` varchar(1000) DEFAULT NULL,
  `material` varchar(1000) DEFAULT NULL,
  `lead_time` varchar(1000) DEFAULT NULL,
  `volume` varchar(1000) DEFAULT NULL,
  `target_price` varchar(1000) DEFAULT NULL,
  `additional_info` text,
  `quotation_deadline` varchar(1000) DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `company_type` varchar(1000) DEFAULT NULL,
  `active` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_career_field`
--

CREATE TABLE `tbl_career_field` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `token` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_career_field`
--

INSERT INTO `tbl_career_field` (`id`, `name`, `user_id`, `date_added`, `date_modified`, `token`) VALUES
(2, 'Steel', NULL, '2017-10-03 17:43:20', NULL, NULL),
(5, 'wood', NULL, '2017-11-23 03:33:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employment_status`
--

CREATE TABLE `tbl_employment_status` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `inquiries_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `session` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(255) NOT NULL,
  `member_id` int(255) DEFAULT NULL,
  `inquiries_id` int(255) DEFAULT NULL,
  `quote` varchar(1000) DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL,
  `shipping_type` varchar(1000) DEFAULT NULL,
  `comment` text,
  `payment_type` varchar(1000) DEFAULT NULL,
  `active` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_range`
--

CREATE TABLE `tbl_salary_range` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `material_id` int(255) DEFAULT NULL,
  `member_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `token` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_salary_range`
--

INSERT INTO `tbl_salary_range` (`id`, `name`, `material_id`, `member_id`, `user_id`, `date_added`, `date_modified`, `token`) VALUES
(1, NULL, 1, 61, NULL, '2017-10-03 17:44:25', NULL, NULL),
(2, NULL, 1, 62, NULL, '2017-10-05 10:02:55', NULL, NULL),
(3, NULL, 2, 62, NULL, '2017-10-05 10:02:55', NULL, NULL),
(13, NULL, 5, 236, NULL, '2017-11-23 03:34:44', NULL, NULL),
(14, NULL, 5, 238, NULL, '2017-11-23 03:34:45', NULL, NULL),
(15, NULL, 5, 239, NULL, '2017-11-23 03:34:45', NULL, NULL),
(16, NULL, 5, 242, NULL, '2017-11-23 03:34:45', NULL, NULL),
(17, NULL, 5, 245, NULL, '2017-11-23 03:34:45', NULL, NULL),
(18, NULL, 5, 246, NULL, '2017-11-23 03:34:45', NULL, NULL),
(19, NULL, 5, 247, NULL, '2017-11-23 03:34:46', NULL, NULL),
(20, NULL, 5, 249, NULL, '2017-11-23 03:34:46', NULL, NULL),
(21, NULL, 5, 250, NULL, '2017-11-23 03:34:46', NULL, NULL),
(22, NULL, 5, 251, NULL, '2017-11-23 03:34:46', NULL, NULL),
(23, NULL, 5, 254, NULL, '2017-11-23 03:34:46', NULL, NULL),
(24, NULL, 5, 255, NULL, '2017-11-23 03:34:46', NULL, NULL),
(25, NULL, 5, 257, NULL, '2017-11-23 03:34:47', NULL, NULL),
(26, NULL, 5, 267, NULL, '2017-11-23 03:34:47', NULL, NULL),
(27, NULL, 5, 268, NULL, '2017-11-23 03:34:47', NULL, NULL),
(29, NULL, 5, 275, NULL, '2017-11-23 03:34:48', NULL, NULL),
(30, NULL, 5, 279, NULL, '2017-11-23 03:34:49', NULL, NULL),
(31, NULL, 5, 282, NULL, '2017-11-23 03:34:49', NULL, NULL),
(32, NULL, 5, 284, NULL, '2017-11-23 03:34:49', NULL, NULL),
(33, NULL, 5, 286, NULL, '2017-11-23 03:34:49', NULL, NULL),
(34, NULL, 5, 287, NULL, '2017-11-23 03:34:50', NULL, NULL),
(35, NULL, 5, 274, NULL, '2017-11-23 04:48:24', NULL, NULL),
(36, NULL, 2, 292, NULL, '2017-11-23 04:56:20', NULL, NULL);

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
(1, 'Super Admin', 'super_admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'cituams1718@gmail.com', '09464275811', NULL, 'super_admin', NULL, 1, NULL, '2017-11-25 04:27:12', '2017-11-25 04:27:12', NULL),
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
-- Indexes for table `tbl_career_field`
--
ALTER TABLE `tbl_career_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employment_status`
--
ALTER TABLE `tbl_employment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_salary_range`
--
ALTER TABLE `tbl_salary_range`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
--
-- AUTO_INCREMENT for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_career_field`
--
ALTER TABLE `tbl_career_field`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_employment_status`
--
ALTER TABLE `tbl_employment_status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_salary_range`
--
ALTER TABLE `tbl_salary_range`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_super_admin`
--
ALTER TABLE `tbl_super_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
