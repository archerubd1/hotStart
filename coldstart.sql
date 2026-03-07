-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2026 at 08:04 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coldstart`
--

-- --------------------------------------------------------

--
-- Table structure for table `learners`
--

CREATE TABLE `learners` (
  `learner_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learners`
--

INSERT INTO `learners` (`learner_id`, `name`, `email`) VALUES
(1, 'Harshitha', 'harshitha@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `orientation_inputs`
--

CREATE TABLE `orientation_inputs` (
  `learner_id` int(11) DEFAULT NULL,
  `comfort_level` varchar(50) DEFAULT NULL,
  `learning_preference` varchar(50) DEFAULT NULL,
  `intent_clarity` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orientation_inputs`
--

INSERT INTO `orientation_inputs` (`learner_id`, `comfort_level`, `learning_preference`, `intent_clarity`, `created_on`) VALUES
(1, 'Not very comfortable yet', 'By just looking around for now', 'I’m still figuring it out', '2026-03-07 09:30:09'),
(1, 'very_comfortable', 'guided', 'rough_idea', '2026-03-07 10:17:45'),
(1, 'somewhat_comfortable', 'just_looking', 'rough_idea', '2026-03-07 10:24:07'),
(1, 'Array', 'Array', 'Array', '2026-03-07 13:11:48'),
(1, NULL, NULL, NULL, '2026-03-07 13:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `orientation_log`
--

CREATE TABLE `orientation_log` (
  `learner_id` int(11) DEFAULT NULL,
  `event_type` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orientation_log`
--

INSERT INTO `orientation_log` (`learner_id`, `event_type`, `created_on`) VALUES
(1, 'orientation_started', '2026-03-07 09:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `orientation_suggestions`
--

CREATE TABLE `orientation_suggestions` (
  `learner_id` int(11) DEFAULT NULL,
  `suggestion_text` text,
  `rationale` text,
  `learner_action` varchar(50) DEFAULT NULL,
  `optional_flag` tinyint(1) DEFAULT '1',
  `generated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orientation_suggestions`
--

INSERT INTO `orientation_suggestions` (`learner_id`, `suggestion_text`, `rationale`, `learner_action`, `optional_flag`, `generated_on`) VALUES
(1, 'Start with beginner orientation', 'You indicated you are still exploring the platform', NULL, 1, '2026-03-07 09:30:34'),
(1, 'Start with beginner tutorials', 'You selected beginner comfort level', NULL, 1, '2026-03-07 09:33:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `learners`
--
ALTER TABLE `learners`
  ADD PRIMARY KEY (`learner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `learners`
--
ALTER TABLE `learners`
  MODIFY `learner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
