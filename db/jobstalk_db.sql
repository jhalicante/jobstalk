-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2018 at 05:56 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jobstalk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_lmi_report`
--

CREATE TABLE `admin_lmi_report` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `1` varchar(20) NOT NULL,
  `2` varchar(20) NOT NULL,
  `3` varchar(20) NOT NULL,
  `4` varchar(20) NOT NULL,
  `5` varchar(20) NOT NULL,
  `6` varchar(20) NOT NULL,
  `7` varchar(20) NOT NULL,
  `8` varchar(20) NOT NULL,
  `9` varchar(20) NOT NULL,
  `10` varchar(20) NOT NULL,
  `11` varchar(20) NOT NULL,
  `12` varchar(20) NOT NULL,
  `13` varchar(20) NOT NULL,
  `14` varchar(20) NOT NULL,
  `15` varchar(20) NOT NULL,
  `16` varchar(20) NOT NULL,
  `17` varchar(30) NOT NULL,
  `18` varchar(20) NOT NULL,
  `19` varchar(20) NOT NULL,
  `20` varchar(20) NOT NULL,
  `prepared_by` varchar(100) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_lmi_report`
--

INSERT INTO `admin_lmi_report` (`ID`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `prepared_by`, `created_date`) VALUES
(4, '2', '2', '2', '2', '4', '1', '2', '2', '2', '2', '4', '1', '1', '1', '2', '1', '1', '1', '2', '1', 'markss', '12/16/2018');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reminders`
--

CREATE TABLE `admin_reminders` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  `hour` varchar(2) NOT NULL,
  `minute` varchar(2) NOT NULL,
  `am_pm` varchar(5) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_reminders`
--

INSERT INTO `admin_reminders` (`ID`, `title`, `date`, `hour`, `minute`, `am_pm`, `description`) VALUES
(5, '123', '2018-12-13', '6', '48', 'am', 'Wake up.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_spes_report`
--

CREATE TABLE `admin_spes_report` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` varchar(3) NOT NULL,
  `school` varchar(150) NOT NULL,
  `brgy` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `year` varchar(2) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `year_admitted` varchar(10) NOT NULL,
  `mobile_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_spes_report`
--

INSERT INTO `admin_spes_report` (`ID`, `fname`, `mname`, `lname`, `age`, `school`, `brgy`, `status`, `year`, `batch`, `year_admitted`, `mobile_number`) VALUES
(2, 'as', 'asas', 'asa', '2', 'asdas', '3', '', '', '', '', ''),
(3, 'as', 'asas', 'asa', '12', 'asdas', '3', '', '', '', '', ''),
(4, 'asd', 'dsa', 'asd', '2', 'asdasd', '15', '', '', '', '', ''),
(5, 'dsa', 'asd', 'ad', '12', 'asd', '12', 'asd', '4', '10', '2018', ''),
(6, 'asd', 'ads', 'asd', '12', '12', '12', '21', '2', '', '', ''),
(7, 'asd', 'asd', 'ads', '1', '123', '1', 'asd', '', '', '', ''),
(8, 'sd', 'asd', 'asd', '1', 'ads', '1', 'New', '4', '', '', ''),
(9, 'ad', 'ads', 'a', '1', '1', '1', 'New', '1', '', '', ''),
(10, 'ad', 'as', 'as', '1', 'fs', '1', 'Old', '6', '', '', ''),
(11, 'ads', 'ads', 'asdad', '3', 'das', '3', 'Old', '4', '', '', ''),
(12, 'd', 's', 'd', '2', 'ff', '32', '', '', '', '', ''),
(13, 'd', 's', 'd', '2', 'ff', '32', 'Old', '', '', '', ''),
(14, 'd', 's', 'd', '2', 'ff', '32', 'Old', '3', '', '', ''),
(15, 'asd', 'asd', 'sd', '12', '12', '12', 'New', '1', '', '', ''),
(16, 'das', 'asd', 'asda', '12', '1asdasd', '12', 'New', '3', '123', '2015', ''),
(17, '12', '12', '12', '12', '12', '12', 'New', '1', '1', '2018', ''),
(18, '123', '123', '123', '123', '123', '123', 'New', '12', '123', '1999', ''),
(19, 'Ricky', 'Oliva', 'a', '1', '1', '1', 'New', '1', '1', '2015', '09278977591'),
(20, 'gaga', 'aga', 'agag', '11', '11', '11', 'New', '1', '22', '2011', '09278977591');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sprs_report`
--

CREATE TABLE `admin_sprs_report` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `_1_` varchar(5) NOT NULL,
  `_2_` varchar(5) NOT NULL,
  `_3_` varchar(5) NOT NULL,
  `_4_` varchar(5) NOT NULL,
  `_5_` varchar(5) NOT NULL,
  `_6_` varchar(5) NOT NULL,
  `_7_` varchar(5) NOT NULL,
  `_8_` varchar(5) NOT NULL,
  `_9_` varchar(5) NOT NULL,
  `_10_` varchar(5) NOT NULL,
  `_11_` varchar(5) NOT NULL,
  `_12_` varchar(5) NOT NULL,
  `_13_` varchar(5) NOT NULL,
  `_14_` varchar(5) NOT NULL,
  `_15_` varchar(5) NOT NULL,
  `_16_` varchar(5) NOT NULL,
  `_17_` varchar(5) NOT NULL,
  `_18_` varchar(5) NOT NULL,
  `_19_` varchar(5) NOT NULL,
  `_20_` varchar(5) NOT NULL,
  `_21_` varchar(5) NOT NULL,
  `_22_` varchar(5) NOT NULL,
  `_23_` varchar(5) NOT NULL,
  `_24_` varchar(5) NOT NULL,
  `_25_` varchar(5) NOT NULL,
  `_26_` varchar(5) NOT NULL,
  `_27_` varchar(5) NOT NULL,
  `_28_` varchar(5) NOT NULL,
  `_29_` varchar(5) NOT NULL,
  `_30_` varchar(5) NOT NULL,
  `_31_` varchar(5) NOT NULL,
  `_32_` varchar(5) NOT NULL,
  `_33_` varchar(5) NOT NULL,
  `_34_` varchar(5) NOT NULL,
  `_35_` varchar(5) NOT NULL,
  `_36_` varchar(5) NOT NULL,
  `_37_` varchar(5) NOT NULL,
  `_38_` varchar(5) NOT NULL,
  `_39_` varchar(5) NOT NULL,
  `_40_` varchar(5) NOT NULL,
  `_41_` varchar(5) NOT NULL,
  `_42_` varchar(5) NOT NULL,
  `_43_` varchar(5) NOT NULL,
  `_44_` varchar(5) NOT NULL,
  `_45_` varchar(5) NOT NULL,
  `_46_` varchar(5) NOT NULL,
  `_47_` varchar(5) NOT NULL,
  `_48_` varchar(5) NOT NULL,
  `_49_` varchar(5) NOT NULL,
  `_50_` varchar(5) NOT NULL,
  `_51_` varchar(5) NOT NULL,
  `_52_` varchar(5) NOT NULL,
  `_53_` varchar(5) NOT NULL,
  `_54_` varchar(5) NOT NULL,
  `_55_` varchar(5) NOT NULL,
  `_56_` varchar(5) NOT NULL,
  `_57_` varchar(5) NOT NULL,
  `_58_` varchar(5) NOT NULL,
  `_59_` varchar(5) NOT NULL,
  `_60_` varchar(5) NOT NULL,
  `_61_` varchar(5) NOT NULL,
  `_62_` varchar(5) NOT NULL,
  `_63_` varchar(5) NOT NULL,
  `_64_` varchar(5) NOT NULL,
  `_65_` varchar(5) NOT NULL,
  `_66_` varchar(5) NOT NULL,
  `_67_` varchar(5) NOT NULL,
  `_68_` varchar(5) NOT NULL,
  `_69_` varchar(5) NOT NULL,
  `_70_` varchar(5) NOT NULL,
  `_71_` varchar(5) NOT NULL,
  `_72_` varchar(5) NOT NULL,
  `_73_` varchar(5) NOT NULL,
  `_74_` varchar(5) NOT NULL,
  `_75_` varchar(5) NOT NULL,
  `_76_` varchar(5) NOT NULL,
  `_77_` varchar(5) NOT NULL,
  `_78_` varchar(5) NOT NULL,
  `_79_` varchar(5) NOT NULL,
  `_80_` varchar(5) NOT NULL,
  `_81_` varchar(5) NOT NULL,
  `_82_` varchar(5) NOT NULL,
  `_83_` varchar(5) NOT NULL,
  `_84_` varchar(5) NOT NULL,
  `_85_` varchar(5) NOT NULL,
  `_86_` varchar(5) NOT NULL,
  `_87_` varchar(5) NOT NULL,
  `_88_` varchar(5) NOT NULL,
  `_89_` varchar(5) NOT NULL,
  `_90_` varchar(5) NOT NULL,
  `_91_` varchar(5) NOT NULL,
  `_92_` varchar(5) NOT NULL,
  `_93_` varchar(5) NOT NULL,
  `_94_` varchar(5) NOT NULL,
  `_95_` varchar(5) NOT NULL,
  `_96_` varchar(5) NOT NULL,
  `_97_` varchar(5) NOT NULL,
  `_98_` varchar(5) NOT NULL,
  `_99_` varchar(5) NOT NULL,
  `_100_` varchar(5) NOT NULL,
  `_101_` varchar(5) NOT NULL,
  `_102_` varchar(5) NOT NULL,
  `_103_` varchar(5) NOT NULL,
  `_104_` varchar(5) NOT NULL,
  `_105_` varchar(5) NOT NULL,
  `_106_` varchar(5) NOT NULL,
  `_107_` varchar(5) NOT NULL,
  `_108_` varchar(5) NOT NULL,
  `_109_` varchar(5) NOT NULL,
  `_110_` varchar(5) NOT NULL,
  `_111_` varchar(5) NOT NULL,
  `_112_` varchar(5) NOT NULL,
  `_113_` varchar(5) NOT NULL,
  `_114_` varchar(5) NOT NULL,
  `_115_` varchar(5) NOT NULL,
  `_116_` varchar(5) NOT NULL,
  `_117_` varchar(5) NOT NULL,
  `_118_` varchar(5) NOT NULL,
  `_119_` varchar(5) NOT NULL,
  `_120_` varchar(5) NOT NULL,
  `_121_` varchar(5) NOT NULL,
  `_122_` varchar(5) NOT NULL,
  `_123_` varchar(5) NOT NULL,
  `_124_` varchar(5) NOT NULL,
  `_125_` varchar(5) NOT NULL,
  `_126_` varchar(5) NOT NULL,
  `_127_` varchar(5) NOT NULL,
  `_128_` varchar(5) NOT NULL,
  `_129_` varchar(5) NOT NULL,
  `_130_` varchar(5) NOT NULL,
  `other_activities` varchar(150) NOT NULL,
  `sprs_name` varchar(50) NOT NULL,
  `sprs_designation` varchar(50) NOT NULL,
  `created_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_sprs_report`
--

INSERT INTO `admin_sprs_report` (`ID`, `_1_`, `_2_`, `_3_`, `_4_`, `_5_`, `_6_`, `_7_`, `_8_`, `_9_`, `_10_`, `_11_`, `_12_`, `_13_`, `_14_`, `_15_`, `_16_`, `_17_`, `_18_`, `_19_`, `_20_`, `_21_`, `_22_`, `_23_`, `_24_`, `_25_`, `_26_`, `_27_`, `_28_`, `_29_`, `_30_`, `_31_`, `_32_`, `_33_`, `_34_`, `_35_`, `_36_`, `_37_`, `_38_`, `_39_`, `_40_`, `_41_`, `_42_`, `_43_`, `_44_`, `_45_`, `_46_`, `_47_`, `_48_`, `_49_`, `_50_`, `_51_`, `_52_`, `_53_`, `_54_`, `_55_`, `_56_`, `_57_`, `_58_`, `_59_`, `_60_`, `_61_`, `_62_`, `_63_`, `_64_`, `_65_`, `_66_`, `_67_`, `_68_`, `_69_`, `_70_`, `_71_`, `_72_`, `_73_`, `_74_`, `_75_`, `_76_`, `_77_`, `_78_`, `_79_`, `_80_`, `_81_`, `_82_`, `_83_`, `_84_`, `_85_`, `_86_`, `_87_`, `_88_`, `_89_`, `_90_`, `_91_`, `_92_`, `_93_`, `_94_`, `_95_`, `_96_`, `_97_`, `_98_`, `_99_`, `_100_`, `_101_`, `_102_`, `_103_`, `_104_`, `_105_`, `_106_`, `_107_`, `_108_`, `_109_`, `_110_`, `_111_`, `_112_`, `_113_`, `_114_`, `_115_`, `_116_`, `_117_`, `_118_`, `_119_`, `_120_`, `_121_`, `_122_`, `_123_`, `_124_`, `_125_`, `_126_`, `_127_`, `_128_`, `_129_`, `_130_`, `other_activities`, `sprs_name`, `sprs_designation`, `created_date`) VALUES
(7, 'first', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '1', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '1', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '1', 'l', 'l', 'll', 'll', '1', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'll', 'l', 'l', 'l', 'l', 'l', 'l', 'll', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', '1', 'l', 'l', 'last', 'adsasd', 'Marky', 'dis', '11/11/2018'),
(8, '1', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '14', '14', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '14', '1', '1', '1', '1', '1', '17', '1', '1', '1', '116', '1', '1', '1', '1', '1', '3', '1', '31', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '3', '1', '1', '1', '1', '1', '1', '1', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '2', 'asd', 'asd', 'aasdasd', '11/13/2018'),
(9, '1', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '17', '17', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '17', '1', '1', '1', '1', '1', '20', '1', '1', '1', '19', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '11', '11', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', 'haha', 'Aljohn', 'wow', '12/15/2018'),
(10, '1', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '17', '17', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '17', '1', '1', '1', '1', '1', '20', '1', '1', '1', '19', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '11', '11', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', 'haha', 'Aljohn', 'wow', '12/15/2018');

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
(1, '120420181543890908', 'To build a long-term career in [specific industry] with opportunities for career growth.\r\nTo enhance my educational and professional skills in a stable and dynamic workplace.\r\nTo solve problems in a creative and effective manner in a challenging position.'),
(2, '121120181544487753', 'adasasd');

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
(1, '120420181543890908', 'jma.itsprogrammer@gmail.com', '09278977591', 'Caloocan City', '28'),
(2, '121120181544487753', 'ako@gmail.com', '09278977591', 'asdas', 'ad');

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
(1, '120420181543890908', 'University of Caloocan City', 'Bachelor of Science in Computer Science (BSCS)', '2017-06-06', '1996-06-06', 'Biglang awa st Caloocan City', 'Navotas National High School', '1996-06-06', '1996-06-06', 'Taliba st Navotas City', 'Awayon Elementary School', '1996-06-06', '1996-06-01', 'Mercedes National High School'),
(10, '121120181544487753', 'asdasdasd', '1', '0311-03-12', '0123-03-12', 'asdasd', 'sdas', '1212-11-12', '1212-12-12', 'asdd', 'df', '0001-02-12', '0012-12-12', 'fdfd');

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
(1, '120420181543890908', 'as', 'asd', 'as', '0023-12-31', 'male', '123', 'asd', 'Tagalog', '121620181544945718.png'),
(2, '121120181544487753', 'Ako', 'Ako', 'Ako', '0012-12-12', 'male', 'FilAm', 'Single', 'tagalog', '121120181544487808.png');

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
(1, '120420181543890908', '120620181544119770.jpg', 'ABS-CBN Corporation', 'Frontend Developer', '2009-12-01', '2018-12-12', 'tasdadas', 'Mother Ignacia '),
(2, '120420181543890908', '120620181544119770.jpg', 'CodeEric Corporation', 'Fullstack Developer', '2010-01-01', '2025-01-01', 'tasdadas', 'Mother Ignacia '),
(3, '121120181544487753', '121120181544488607.', 'adsasd', 'asdasd', '2018-02-12', '2019-12-12', 'asdasdsa', 'sdfasd');

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

CREATE TABLE `applied_job` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `applicant_id` varchar(55) NOT NULL,
  `employer_id` varchar(55) NOT NULL,
  `job_id` varchar(55) NOT NULL,
  `application_status` enum('for-interview','in-process','rejected','completed','hired','hired','no-hired','awol','resigned','regularized','terminated') NOT NULL,
  `date_applied` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applied_job`
--

INSERT INTO `applied_job` (`ID`, `applicant_id`, `employer_id`, `job_id`, `application_status`, `date_applied`) VALUES
(2, '120420181543890908', '120720181544166943', '120820181544281722', 'hired', '2018-12-09'),
(8, '121120181544487753', '120720181544166943', '120820181544270508', 'awol', '12-11-2018');

-- --------------------------------------------------------

--
-- Table structure for table `bpc_account`
--

CREATE TABLE `bpc_account` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `brgy` varchar(50) NOT NULL,
  `created_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bpc_account`
--

INSERT INTO `bpc_account` (`ID`, `user_id`, `role`, `username`, `password`, `brgy`, `created_date`) VALUES
(1, '121420181544762611', 'bpc', '123', '123', '12312', '12/142018'),
(2, '121620181544953932', 'bpc', 'test', 'test', '1', '12/162018');

-- --------------------------------------------------------

--
-- Table structure for table `course_lists`
--

CREATE TABLE `course_lists` (
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_lists`
--

INSERT INTO `course_lists` (`course_id`, `name`) VALUES
(1, 'Bachelor of Arts in History (AB History)'),
(2, 'Bachelor of Arts in Philosophy (AB Philosophy)'),
(3, 'Bachelor of Fine Arts Major in Industrial Design (BFA)'),
(4, 'Bachelor of Fine Arts Major in Painting (BFA)'),
(5, 'Bachelor of Fine Arts Major in Sculpture (BFA)'),
(6, 'Bachelor of Fine Arts Major in Visual Communication (BFA)'),
(7, 'Bachelor of Arts in Economics (AB Economics)'),
(8, 'Bachelor of Science in Economics (BS Economics)'),
(9, 'Bachelor of Arts in Psychology (AB Psychology)'),
(10, 'Bachelor of Science in Psychology (BS Psychology)'),
(11, 'Bachelor of Science in Criminology (BS Criminology)'),
(12, 'Bachelor of Arts in Political Science (AB Political Science)'),
(13, 'Bachelor of Arts in English (AB English)'),
(14, 'Bachelor of Arts in Linguistics (AB Linguistics)'),
(15, 'Bachelor of Arts in Literature (AB Literature)'),
(16, 'Bachelor of Arts in Anthropology (AB Anthropology)'),
(17, 'Bachelor of Arts in Sociology (AB Sociology)'),
(18, 'Bachelor of Arts in Filipino (AB Filipino)'),
(19, 'Bachelor of Science in Forensic Science (BSFS)'),
(20, 'Bachelor of Arts in Islamic Studies (AB Islamic Studies)'),
(21, 'Bachelor of Science in Environmental Science (BSES)'),
(22, 'Bachelor of Science in Forestry (BS Forestry)'),
(23, 'Bachelor of Science in Fisheries (BSFi)'),
(24, 'Bachelor of Science in Geology (BS Geology)'),
(25, 'Bachelor of Science in Biology (BS Biology)'),
(26, 'Bachelor of Science in Molecular Biology (BS Molecular Biology)'),
(27, 'Bachelor of Science in Physics (BS Physics)'),
(28, 'Bachelor of Science in Applied Physics (BS Applied Physics)'),
(29, 'Bachelor of Science in Chemistry (BS Chemistry)'),
(30, 'Bachelor of Science in Computer Science (BSCS)'),
(31, 'Bachelor of Science in Information Technology (BSIT)'),
(32, 'Bachelor of Science in Information Systems (BSIS)'),
(33, 'Bachelor of Science in Mathematics (BS Mathematics)'),
(34, 'Bachelor of Science in Applied Mathematics (BS Applied Math)'),
(35, 'Bachelor of Science in Statistics (BS Stat)'),
(36, 'Bachelor of Science in Agriculture'),
(37, 'Bachelor of Science in Agribusiness (BS Agribusiness)'),
(38, 'Bachelor of Science in Agroforestry (BS Agroforestry)'),
(39, 'Bachelor of Science in Architecture (BS Architecture)'),
(40, 'Bachelor in Landscape Architecture (BLA)'),
(41, 'Bachelor of Science in Interior Design (BS Interior Design)'),
(42, 'Bachelor of Science in Accountancy (BSA)'),
(43, 'Bachelor of Science in Accounting Technology (BSAcT)'),
(44, 'Bachelor of Science in Business Administration'),
(45, 'Bachelor of Science in Business Administration Major in Business Economics (BSBA)'),
(46, 'Bachelor of Science in Business Administration Major in Financial Management (BSBA major in FM)'),
(47, 'Bachelor of Science in Business Administration Major in Human Resource Development (BSBA major in HRDM)'),
(48, 'Bachelor of Science in Business Administration Major in Marketing Management (BSBA major in MM)'),
(49, 'Bachelor of Science in Business Administration Major in Operations Management (BSBA major in OM)'),
(50, 'Bachelor of Science in Bachelor of Science in Hotel and Restaurant Management (BS HRM)'),
(51, 'Bachelor of Science in Entrepreneurship (BS Entrep)'),
(52, 'Bachelor of Science in Office Administration (BSOA)'),
(53, 'Bachelor of Science in Real Estate Management (BS REM)'),
(54, 'Bachelor of Science in Tourism Management (BSTM)'),
(55, 'Bachelor of Science in Medical Technology (BS Med Tech)'),
(56, 'Bachelor of Science in Midwifery (BS Midwifery)'),
(57, 'Bachelor of Science in Nursing (BSN)'),
(58, 'Bachelor of Science in Occupational Therapy (BSOT)'),
(59, 'Bachelor of Science in Pharmacy (BS Pharmacy)'),
(60, 'Bachelor of Science in Physical Therapy (BSPT)'),
(61, 'Bachelor of Science in Radiologic Technology (BS Rad Tech)'),
(62, 'Bachelor of Science in Respiratory Therapy (BSRT)'),
(63, 'Bachelor of Science in Speech-Language Pathology'),
(64, 'Bachelor of Science in Sports Science'),
(65, 'Bachelor in Secondary Education (BSED)'),
(66, 'Bachelor in Elementary Education (BEED)'),
(67, 'Bachelor in Secondary Education Major in Technology and Livelihood Education (BSED)'),
(68, 'Bachelor in Secondary Education Major in Biological Sciences (BSED)'),
(69, 'Bachelor in Secondary Education Major in English (BSED)'),
(70, 'Bachelor in Secondary Education Major in Filipino (BSED)'),
(71, 'Bachelor in Secondary Education Major in Mathematics (BSED)'),
(72, 'Bachelor in Secondary Education Major in Islamic Studies (BSED)'),
(73, 'Bachelor in Secondary Education Major in Music, Arts, Physical and Health Education (BSED)'),
(74, 'Bachelor in Secondary Education Major in Physical Sciences (BSED)'),
(75, 'Bachelor in Secondary Education Major in Social Studies (BSED)'),
(76, 'Bachelor in Secondary Education Major in Values Education (BSED)'),
(77, 'Bachelor in Elementary Education Major in Preschool Education (BEED)'),
(78, 'Bachelor in Elementary Education Major in Special Education (BEED)'),
(79, 'Bachelor of Library and Information Science in the Philippines (BLIS)'),
(80, 'Bachelor of Physical Education (BPE)'),
(81, 'Bachelor of Science in Aeronautical Engineering (BS AeroE)'),
(82, 'Bachelor of Science in Ceramic Engineering (BSCerE)'),
(83, 'Bachelor of Science in Chemical Engineering (BSChE)'),
(84, 'Bachelor of Science in Civil Engineering (BSCE)'),
(85, 'Bachelor of Science in Computer Engineering (BSCpE)'),
(86, 'Bachelor of Science in Electrical Engineering (BSEE)'),
(87, 'Bachelor of Science in Electronics and Communications Engineering (BSECE)'),
(88, 'Bachelor of Science in Geodetic Engineering (BSGE)'),
(89, 'Bachelor of Science in Geological Engineering (BSGeoE)'),
(90, 'Bachelor of Science in Industrial Engineering (BSIE)'),
(91, 'Bachelor of Science in Marine Engineering in (BSMarE)'),
(92, 'Bachelor of Science in Materials Engineering (BSMatE)'),
(93, 'Bachelor of Science in Mechanical Engineering (BSME)'),
(94, 'Bachelor of Science in Metallurgical Engineering (BSMetE)'),
(95, 'Bachelor of Science in Mining Engineering (BSEM)'),
(96, 'Bachelor of Science in Petroleum Engineering (BSPetE)'),
(97, 'Bachelor of Science in Sanitary Engineering (BSSE)'),
(98, 'Bachelor of Arts in Broadcasting (AB Broadcasting)'),
(99, 'Bachelor of Arts in Communication (AB Communication)'),
(100, 'Bachelor of Science in in Development Communication (BS DevComm)'),
(101, 'Bachelor of Arts in Journalism (AB Journalism)'),
(102, 'Bachelor of Arts in Mass Communication'),
(103, 'Bachelor of Science in Community Development(BS Community Development)'),
(104, 'Bachelor of Science in Customs Administration (BSCA)'),
(105, 'Bachelor of Science in Foreign Service (BS Foreign Service)'),
(106, 'Bachelor of Science in International Studies(BSIS)'),
(107, 'Bachelor of Public Administration (BPA)'),
(108, 'Bachelor of Science in Public Safety (BSPS)'),
(109, 'Bachelor of Science in Social Work (BS Social Work)'),
(110, 'Bachelor of Science in Marine Transportation (BSMT)'),
(111, 'Bachelor of Science in Food Technology (BS Food Tech)'),
(112, 'Bachelor of Science in Nutrition and Dietetics (BS Nutrition and Dietetics)');

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
(4, '120720181544166943', 'Test Com Incorporation', 'Commission on Higher Education (CHED) - Region 4B Regional Office', 'With HTML you can create your own Website.\r\n\r\nThis tutorial teaches you everything about HTML.\r\n\r\nHTML is easy to learn - You will enjoy it.\r\n\r\n', '6th Floor, Asiatrust Bank Building, Quezon Avenue, Quezon City, 1100 Metro Manila', '09278977592', 'testcom@gmail.com', '120720181544171097.png', 'testcom.com'),
(16, '120920181544344118', 'Ricks Incorporation', 'ashdahsdgjhg', 'ashdjgahsjdghjasdg', 'asdhgahjsdghj', '09278977592', 'ricks@gmail.com', '120920181544344178.jpg', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `employer_job_posted`
--

CREATE TABLE `employer_job_posted` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `job_id` varchar(55) NOT NULL,
  `com_logo` varchar(50) NOT NULL,
  `com_name` varchar(50) NOT NULL,
  `com_address` text NOT NULL,
  `position` text NOT NULL,
  `job_type` enum('part-time','full-time','internship') NOT NULL,
  `course_id` text NOT NULL,
  `industry_id` text NOT NULL,
  `years_experience` varchar(2) NOT NULL,
  `months_experience` varchar(2) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(25) NOT NULL,
  `status` enum('completed','pending','canceled','approved','disapproved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer_job_posted`
--

INSERT INTO `employer_job_posted` (`ID`, `user_id`, `job_id`, `com_logo`, `com_name`, `com_address`, `position`, `job_type`, `course_id`, `industry_id`, `years_experience`, `months_experience`, `description`, `created_date`, `status`) VALUES
(1, '120720181544166943', '120820181544270508', '120820181544270508.png', 'PAJO Corporation', '115 J.P. Rizal St, Maypajo, Caloocan, 1410 Metro Manila', 'Water Bender', 'part-time', '30', '5', '2', '7', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.', '2018-12-16', 'approved'),
(2, '120720181544166943', '120820181544281722', '120820181544281722.jpg', 'Test Inc', '234, 236 Tomas Morato Ave, Diliman, Quezon City, 1103 Metro Manila', 'Data Analyst', 'full-time', '2', '5', '3', '3', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.', '2018-01-16', 'approved'),
(3, '120720181544166943', '121020181544432317', '121020181544432317.', 'as21', '3asda', '3123', 'internship', '11', '8', '2', '2', 'asdasd', '2018-06-16', 'approved'),
(4, '120720181544166943', '121620181544925891', '120720181544171097.png', 'Test Com Incorporation', '1', 'g', 'part-time', '30', '1', '1', '1', '1', '2018-01-16', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `employer_placement_report`
--

CREATE TABLE `employer_placement_report` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(55) NOT NULL,
  `job_title` varchar(150) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `date_conducted` varchar(30) NOT NULL,
  `venue` varchar(150) NOT NULL,
  `created_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer_placement_report`
--

INSERT INTO `employer_placement_report` (`ID`, `user_id`, `job_title`, `company_name`, `date_conducted`, `venue`, `created_date`) VALUES
(1, '120720181544166943', 'asd', 'asd', '0123-02-13', 'adas', '12-08-2018'),
(2, '120720181544166943', 'assss', '123123', '2321-12-31', '12312', '12-09-2018'),
(4, '120920181544344118', 'Web developer', 'IBM Corp', '2018-02-01', 'Caloocan City', '12-09-2018'),
(5, '120920181544344118', 'JS Developer', 'test', '0021-12-12', 'test', '12-09-2018'),
(6, '120720181544166943', 'sdd', 'sdsd', '0003-03-31', 'asdasd', '12-12-2018'),
(7, '120720181544166943', '123', '', '0023-12-31', '123', '12-16-2018'),
(8, '120720181544166943', '123', '', '0023-12-31', '123', '12-16-2018'),
(9, '120720181544166943', '123', '', '0023-12-31', '123', '12-16-2018'),
(10, '120720181544166943', '123', '', '0023-12-31', '123', '12-16-2018'),
(11, '120720181544166943', '12', 'Test Com Incorporation', '0012-12-12', '12', '12-16-2018');

-- --------------------------------------------------------

--
-- Table structure for table `job_industry`
--

CREATE TABLE `job_industry` (
  `ji_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_industry`
--

INSERT INTO `job_industry` (`ji_id`, `name`) VALUES
(1, 'Automotive/ Ancillaries'),
(2, 'Banking/ Financial Services'),
(3, 'Bio Technology & Life Sciences'),
(4, 'Chemicals/Petrochemicals'),
(5, 'Construction & Engineering'),
(6, 'Customer Service'),
(7, 'Education'),
(8, 'Electronics Manufacturing'),
(9, 'Entertainment/ Media/ Publishing'),
(10, 'Insurance'),
(11, 'ITES/BPO'),
(12, 'IT/ Computers - Hardware'),
(13, 'IT/ Computers - Software'),
(14, 'KPO/Analytics'),
(15, 'Machinery/ Equipment Mfg.'),
(16, 'Oil/ Gas/ Petroleum'),
(17, 'Pharmaceutical'),
(18, 'Plastic/ Rubber'),
(19, 'Power/Energy'),
(20, 'Real Estate'),
(21, 'Recruitment/Staffing/RPO'),
(22, 'Retailing'),
(23, 'Semiconductor Manufacturing'),
(24, 'Telecom'),
(25, 'Advertising/PR/Events'),
(26, 'Agriculture/Dairy/Forestry/Fishing'),
(27, 'Aviation/Aerospace'),
(28, 'Alternate Energy'),
(29, 'Wellness/Fitness/Sports'),
(30, 'Beverages/ Liquor'),
(31, 'Cement'),
(32, 'Ceramics &amp; Sanitary Ware'),
(33, 'Commodities Trading'),
(34, 'Consultancy'),
(35, 'Courier/ Freight/ Transportation'),
(36, 'Dotcom/Internet/E-commerce'),
(37, 'Electrical/Switchgear'),
(38, 'Environmental Service'),
(39, 'Facility management'),
(40, 'Fertilizer/ Pesticides'),
(41, 'Food &amp; Packaged Food'),
(42, 'Textiles / Yarn / Fabrics / Garments'),
(43, 'Gems &amp; Jewellery'),
(44, 'Glass'),
(45, 'Government / Public Sector/ Defense'),
(46, 'Consumer Electronics/Appliances'),
(47, 'Hospitals/Healthcare/Diagnostics'),
(48, 'HVAC'),
(49, 'Catering/Hospitality'),
(50, 'Import / Export'),
(51, 'Iron/ Steel'),
(52, 'Internet Service Provider'),
(53, 'Law Enforcement/Security Services'),
(54, 'Leather'),
(55, 'Maritime Transportation'),
(56, 'Market Research'),
(57, 'Medical Transcription'),
(58, 'Mining'),
(59, 'Railways Speciality/ Infrastructure'),
(60, 'NGO/Social Services'),
(61, 'Non-Ferrous Metals (Aluminium, Zinc etc.)'),
(62, 'Office Equipment/Automation'),
(63, 'Paints'),
(64, 'Paper'),
(65, 'Printing/ Packaging'),
(66, 'Public Relations (PR)'),
(67, 'Shipping/ Marine Services'),
(68, 'Social Media'),
(69, 'Travel/ Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `ozekimessagein`
--

CREATE TABLE `ozekimessagein` (
  `id` int(11) NOT NULL,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL,
  `msg` text,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `operator` varchar(100) DEFAULT NULL,
  `msgtype` varchar(160) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ozekimessageout`
--

CREATE TABLE `ozekimessageout` (
  `id` int(11) NOT NULL,
  `sender` varchar(30) DEFAULT NULL,
  `receiver` varchar(30) DEFAULT NULL,
  `msg` text,
  `senttime` varchar(100) DEFAULT NULL,
  `receivedtime` varchar(100) DEFAULT NULL,
  `reference` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `msgtype` varchar(160) DEFAULT NULL,
  `operator` varchar(100) DEFAULT NULL,
  `errormsg` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ozekimessageout`
--

INSERT INTO `ozekimessageout` (`id`, `sender`, `receiver`, `msg`, `senttime`, `receivedtime`, `reference`, `status`, `msgtype`, `operator`, `errormsg`) VALUES
(1, '09278977591', 'aw', 'aw', NULL, NULL, NULL, 'send', NULL, NULL, NULL),
(2, '09278977592', '09278977593', '', '', '', '', 'send', '', '', ''),
(3, '09278977592', '09278977591', '', '', '', '', 'send', '', '', ''),
(4, '09278977592', '09278977591', 'testing', '', '', '', 'send', '', '', ''),
(5, '09278977592', '09278977591', 'This is message', '', '', '', 'send', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `name`) VALUES
(1, 'Armm'),
(2, 'Bicol Region'),
(3, 'C.A.R'),
(4, 'Cagayan Valley'),
(5, 'Calabarzon & Mimaropa'),
(6, 'Caraga'),
(7, 'Central Luzon'),
(8, 'Central Visayas'),
(9, 'Davao'),
(10, 'Eastern Visayas'),
(11, 'Ilocos Region'),
(12, 'National Capital Reg'),
(13, 'Northern Mindanao'),
(14, 'Soccskargen'),
(15, 'Western Visayas'),
(16, 'Zamboanga');

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
  `status` enum('pending','approved','blocked','deactivated','disapproved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`ID`, `user_id`, `email_address`, `password`, `role`, `status`) VALUES
(1, '122018154389090890', 'admin@gmail.com', '123', 'admin', 'approved'),
(2, '120420181543890908', 'applicant@gmail.com', '123', 'applicant', 'approved'),
(7, '120720181544166943', 'employer@gmail.com', '123', 'employer', 'approved'),
(12, '120920181544344118', 'emp@gmail.com', '123', 'employer', 'approved'),
(13, '120920181544357586', 'test@gmail.com', '123', 'applicant', 'pending'),
(14, '121120181544487753', 'ako@gmail.com', '123', 'applicant', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_lmi_report`
--
ALTER TABLE `admin_lmi_report`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `admin_reminders`
--
ALTER TABLE `admin_reminders`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `admin_spes_report`
--
ALTER TABLE `admin_spes_report`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `admin_sprs_report`
--
ALTER TABLE `admin_sprs_report`
  ADD UNIQUE KEY `ID` (`ID`);

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
-- Indexes for table `bpc_account`
--
ALTER TABLE `bpc_account`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `course_lists`
--
ALTER TABLE `course_lists`
  ADD UNIQUE KEY `ID` (`course_id`);

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
-- Indexes for table `employer_placement_report`
--
ALTER TABLE `employer_placement_report`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `job_industry`
--
ALTER TABLE `job_industry`
  ADD UNIQUE KEY `ji_id` (`ji_id`);

--
-- Indexes for table `ozekimessagein`
--
ALTER TABLE `ozekimessagein`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ozekimessageout`
--
ALTER TABLE `ozekimessageout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD UNIQUE KEY `ID` (`region_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_lmi_report`
--
ALTER TABLE `admin_lmi_report`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_reminders`
--
ALTER TABLE `admin_reminders`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_spes_report`
--
ALTER TABLE `admin_spes_report`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin_sprs_report`
--
ALTER TABLE `admin_sprs_report`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `applicant_career_objective`
--
ALTER TABLE `applicant_career_objective`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_contact_information`
--
ALTER TABLE `applicant_contact_information`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_education`
--
ALTER TABLE `applicant_education`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `applicant_personal_information`
--
ALTER TABLE `applicant_personal_information`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_work_experience`
--
ALTER TABLE `applicant_work_experience`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applied_job`
--
ALTER TABLE `applied_job`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bpc_account`
--
ALTER TABLE `bpc_account`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_lists`
--
ALTER TABLE `course_lists`
  MODIFY `course_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `employer_information`
--
ALTER TABLE `employer_information`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employer_job_posted`
--
ALTER TABLE `employer_job_posted`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employer_placement_report`
--
ALTER TABLE `employer_placement_report`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job_industry`
--
ALTER TABLE `job_industry`
  MODIFY `ji_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `ozekimessagein`
--
ALTER TABLE `ozekimessagein`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ozekimessageout`
--
ALTER TABLE `ozekimessageout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
