-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2014 at 08:40 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wsdc_faculty_recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_data`
--

CREATE TABLE IF NOT EXISTS `faculty_data` (
  `userid` int(10) unsigned NOT NULL,
  `status` char(8) NOT NULL DEFAULT '00000000',
  `applypost` text,
  `personal` text,
  `educational` text,
  `experience` text,
  `research` text,
  `research_pdf` text,
  `contributions` text,
  `declaration` int(11) DEFAULT NULL,
  `filled_pages` int(11) NOT NULL DEFAULT '-1',
  `final_submission` int(11) NOT NULL DEFAULT '0',
  `place_date` varchar(500) DEFAULT NULL,
  `instructions` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_data`
--

INSERT INTO `faculty_data` (`userid`, `status`, `applypost`, `personal`, `educational`, `experience`, `research`, `research_pdf`, `contributions`, `declaration`, `filled_pages`, `final_submission`, `place_date`, `instructions`, `timestamp`) VALUES
(1, '11111111', '{"proceed":"1","fee_amount":"456","mode":"1","transaction_no":"12346","application_post":"AP6","application_dept":"4"}', '{"proceed":"0","first_name":"ABHISHEK","gender":"Male","last_name":"SINGH","dob":"2014-04-18","contact_num":"8121210825","address_line_1":"NIT WARANGAL","address_line_2":"WARANGAL","address_city":"WARANGAL","State":"Andhra Pradesh","category":"0","cat_obc_sequence":"","cat_sc_sequence":"","spcl_cat_pda":"0","cat_pda_sequence":""}', '{"proceed":"1","schooling_certificate":["safsf"],"schooling_boardu":["fsasaf"],"schooling_yopass":["safsa"],"schooling_percentage":["fasfas"],"undergraduation_degree":["safsaf"],"undergraduation_branch":["safas"],"undergraduation_boardu":["fsafsaf"],"undergraduation_yopass":["safsa"],"undergraduation_percentage":["fsafsa"],"masters_degree":["safsa"],"masters_branch":["fsaf"],"masters_specialization":["safsaf"],"masters_boardu":["safsa"],"masters_yopass":["fsafsa"],"masters_cgpa":["fsafsa"],"phd_month_year":["sasf"],"phd_awarded_institution":["sfaf"],"phd_awarded_department":["sfafaga"],"phd_thesis":["fsaf"],"phd_dor":["2014-05-07"],"phd_pursuing_institution":["asfasf"],"phd_pursuing_department":["asfsagas"],"phd_submission_synopsis":["2014-05-14"],"phd_submission_thesis":["2014-05-18"]}', '{"proceed":"1","teaching-institution":["X"],"teaching-position":["X"],"teaching-doj":["2014-04-07"],"teaching-dol":["2014-04-09"],"teaching-duration":["X"],"organization-institution":["X"],"organization-position":["X"],"organization-doj":["2014-04-23"],"organization-dol":["2014-04-23"],"organization-duration":["X"],"industry-institution":["X"],"industry-position":["X"],"industry-doj":["2014-04-17"],"industry-dol":["2014-04-30"],"industry-duration":["X"]}', '{"proceed":"0","phd-SCI-journal-coauthors":["1"],"phd-SCI-journal-title":["ABC"],"phd-SCI-journal-name":["XYZ"],"phd-SCI-journal-vol":["1"],"phd-SCI-journal-year":["2009"],"phd-SCI-journal-citations":["85"],"phd-SCI-journal-impact":["10"],"phd-SCI-journal-SCI-no":["123"]}', '{"phd-SCI-journal-pdf":{"1_phd-SCI-journal-pdf_0_ib.pdf":"ib.pdf"}}', '{"proceed":"1","BOS_member":"0"}', 0, 5, 0, '{"place":"Warangal","date":"2014-04-16"}', 1, '2014-05-12 14:57:50'),
(6, '11111111', '{"proceed":"1","fee_amount":"123455","mode":"1","transaction_no":"1235","application_post":"AP6","application_dept":"1"}', '{"proceed":"1","first_name":"ABHISHEK","gender":"Male","last_name":"SINGH","dob":"2014-04-17","contact_num":"8121210825","address_line_1":"NIT WARANGAL","address_line_2":"WARANGAL","address_city":"WARANGAL","State":"Arunachal Pradesh","category":"1","cat_obc_sequence":"123456","cat_sc_sequence":"","spcl_cat_pda":"0","cat_pda_sequence":""}', '{"proceed":"1","schooling_certificate":["X"],"schooling_boardu":["CBSE"],"schooling_yopass":["2011"],"schooling_percentage":["100"],"undergraduation_degree":["X"],"undegraduation_boardu":["CBSE"],"undegraduation_yopass":["2011"],"undegraduation_percentage":["56"]}', '{"proceed":"1"}', '{"proceed":"1"}', NULL, '{"proceed":"1","BOS_member":"1"}', 0, 7, 0, '{"place":"Warangal","date":"2014-04-08"}', 1, '2014-05-02 08:31:13'),
(16, '11000000', '{"proceed":"1","fee_amount":"12345","mode":"2","transaction_no":"1234569","application_post":"AP9","application_dept":"8"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 1, '2014-05-02 05:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `research_files`
--

CREATE TABLE IF NOT EXISTS `research_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `pdf_col` varchar(200) NOT NULL,
  `idx` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$yWBB1egzmbMvxFEbU1nXtemBf41rmAMTUguAJ14MQJZSnEFyQn2ee', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1399904713, 1, 'Administrator', '', 'ADMIN', '8121210825'),
(6, '::1', 'abhishek ', '$2y$08$c1/5WaCdfibLfzEgBnS8qOkugLVkfpGtJH44vMA8pavxc.PSOWe7O', NULL, 'abhi15081994@gmail.com', NULL, NULL, NULL, NULL, 1398364517, 1398953475, 1, 'ABHISHEK', '', '0', '8121210825'),
(16, '127.0.0.1', 'vaibhav ', '$2y$08$Ugw9A61wwz3uZuvJvmmxz.FdNcYkYq2e7ORKfUKk89rxwOOlfZAXq', 'd41150c53e', 'abhi15081993@gmail.com', NULL, NULL, NULL, NULL, 1398787629, 1399006936, 1, 'Vaibhav', '', '0', '8121210825');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(8, 1, 1),
(9, 1, 2),
(15, 6, 2),
(25, 16, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
