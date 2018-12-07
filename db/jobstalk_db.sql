-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 07, 2018 at 10:05 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jobstalk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_career_objective`
--

CREATE TABLE `applicant_career_objective` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `objective_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant_career_objective`
--

INSERT INTO `applicant_career_objective` (`ID`, `user_id`, `objective_content`) VALUES
(1, '120420181543890908', 'To build a long-term career in [specific industry] with opportunities for career growth.\r\nTo enhance my educational and professional skills in a stable and dynamic workplace.\r\nTo solve problems in a creative and effective manner in a challenging position.');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_contact_information`
--

CREATE TABLE `applicant_contact_information` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `municipality` varchar(20) NOT NULL,
  `brgy` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant_contact_information`
--

INSERT INTO `applicant_contact_information` (`ID`, `user_id`, `email_address`, `phone_no`, `municipality`, `brgy`) VALUES
(1, '120420181543890908', 'jma.itsprogrammer@gmail.com', '09278977591', 'Caloocan City', '28');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_education`
--

CREATE TABLE `applicant_education` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `ter_sname` varchar(150) NOT NULL,
  `ter_course` varchar(150) NOT NULL,
  `ter_ys` varchar(10) NOT NULL,
  `ter_ye` varchar(10) NOT NULL,
  `ter_ad` text NOT NULL,
  `sec_sname` varchar(150) NOT NULL,
  `sec_ys` varchar(10) NOT NULL,
  `sec_ye` varchar(10) NOT NULL,
  `sec_ad` text NOT NULL,
  `pri_sname` varchar(150) NOT NULL,
  `pri_ys` varchar(10) NOT NULL,
  `pri_ye` varchar(10) NOT NULL,
  `pri_ad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant_education`
--

INSERT INTO `applicant_education` (`ID`, `user_id`, `ter_sname`, `ter_course`, `ter_ys`, `ter_ye`, `ter_ad`, `sec_sname`, `sec_ys`, `sec_ye`, `sec_ad`, `pri_sname`, `pri_ys`, `pri_ye`, `pri_ad`) VALUES
(1, '120420181543890908', 'University of Caloocan City', 'Bachelor of Science in Computer Science', '2017-06-06', '1996-06-06', 'Biglang awa st Caloocan City', 'Navotas National High School', '1996-06-06', '1996-06-06', 'Taliba st Navotas City', 'Awayon Elementary School', '1996-06-06', '1996-06-01', 'Mercedes National High School');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_personal_information`
--

CREATE TABLE `applicant_personal_information` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `civil_status` varchar(25) NOT NULL,
  `language` varchar(150) NOT NULL,
  `profile_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant_personal_information`
--

INSERT INTO `applicant_personal_information` (`ID`, `user_id`, `fname`, `mname`, `lname`, `bday`, `gender`, `nationality`, `civil_status`, `language`, `profile_picture`) VALUES
(1, '120420181543890908', 'Johnmark', 'Yugo', 'Alicante', '1996-06-06', 'male', 'Filipino', 'Single', 'Filipino,English', '120620181544119464.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_skills`
--

CREATE TABLE `applicant_skills` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `skill_percentage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_work_experience`
--

CREATE TABLE `applicant_work_experience` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `company_logo` text NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  `job_start` varchar(30) NOT NULL,
  `job_end` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant_work_experience`
--

INSERT INTO `applicant_work_experience` (`ID`, `user_id`, `company_logo`, `company_name`, `position`, `job_start`, `job_end`, `description`, `location`) VALUES
(1, '120420181543890908', '120620181544119770.jpg', 'ABS-CBN Corporation', 'Frontend Developer', '2017-05-29', '2018-12-07', 'tasdadas', 'Mother Ignacia '),
(2, '120420181543890908', '120620181544119770.jpg', 'CodeEric Corporation', 'Fullstack Developer', '2017-05-29', '2018-07-29', 'tasdadas', 'Mother Ignacia ');

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

CREATE TABLE `applied_job` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `job_id` varchar(55) NOT NULL,
  `application_status` enum('for-interview','in-process','rejected','completed','hired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employer_information`
--

CREATE TABLE `employer_information` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `short_desc` text NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  `website` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer_information`
--

INSERT INTO `employer_information` (`ID`, `user_id`, `name`, `short_desc`, `about`, `address`, `contact_no`, `email`, `logo`, `website`) VALUES
(4, '120720181544166943', 'Test Com Incorporation', 'Commission on Higher Education (CHED) - Region 4B Regional Office', 'With HTML you can create your own Website.\r\n\r\nThis tutorial teaches you everything about HTML.\r\n\r\nHTML is easy to learn - You will enjoy it.\r\n\r\n', '6th Floor, Asiatrust Bank Building, Quezon Avenue, Quezon City, 1100 Metro Manila', '09278977592', 'testcom@gmail.com', '120720181544171097.png', 'testcom.com');

-- --------------------------------------------------------

--
-- Table structure for table `employer_job_posted`
--

CREATE TABLE `employer_job_posted` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `job_id` varchar(55) NOT NULL,
  `com_name` varchar(50) NOT NULL,
  `com_logo` varchar(100) NOT NULL,
  `com_address` text NOT NULL,
  `position` text NOT NULL,
  `type` enum('part-time','full-time','internship') NOT NULL,
  `industry` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `requirements` text NOT NULL,
  `status` enum('completed','pending','canceled','approved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `role` enum('admin','employer','applicant') NOT NULL,
  `status` enum('pending','verified','blocked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`ID`, `user_id`, `email_address`, `password`, `role`, `status`) VALUES
(1, 'asd', 'tests@gmail.com', '1234567890', 'applicant', 'pending'),
(2, '120420181543890908', 'test@gmail.com', '1234567890', 'applicant', 'pending'),
(7, '120720181544166943', 'test12@gmail.com', '123', 'employer', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_career_objective`
--
ALTER TABLE `applicant_career_objective`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_contact_information`
--
ALTER TABLE `applicant_contact_information`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_education`
--
ALTER TABLE `applicant_education`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_personal_information`
--
ALTER TABLE `applicant_personal_information`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applicant_work_experience`
--
ALTER TABLE `applicant_work_experience`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `employer_information`
--
ALTER TABLE `employer_information`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `employer_job_posted`
--
ALTER TABLE `employer_job_posted`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_career_objective`
--
ALTER TABLE `applicant_career_objective`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_contact_information`
--
ALTER TABLE `applicant_contact_information`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_education`
--
ALTER TABLE `applicant_education`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_personal_information`
--
ALTER TABLE `applicant_personal_information`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_work_experience`
--
ALTER TABLE `applicant_work_experience`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applied_job`
--
ALTER TABLE `applied_job`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employer_information`
--
ALTER TABLE `employer_information`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employer_job_posted`
--
ALTER TABLE `employer_job_posted`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
