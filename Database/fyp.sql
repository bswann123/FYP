-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 11:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `modulesnew`
--

CREATE TABLE `modulesnew` (
  `Module Code` varchar(11) DEFAULT NULL,
  `Module Title` varchar(47) DEFAULT NULL,
  `Level` int(5) DEFAULT NULL,
  `Category` varchar(35) DEFAULT NULL,
  `Topic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modulesnew`
--

INSERT INTO `modulesnew` (`Module Code`, `Module Title`, `Level`, `Category`, `Topic`) VALUES
('CS1AC16', 'Applications of Computer Science', 1, 'Advanced Computing and Data Science', 'AI, Robotics, Virtual Reality'),
('CS1FC16', 'Fundamentals of Computer Science', 1, 'Fundamentals and Systems', 'Algorithms'),
('CS1MA20', 'Mathematics and Computation', 1, 'Fundamentals and Systems', 'Probability & Statistics'),
('CS1PC20', 'Programming in C/C++', 1, 'Programming', 'C, C++, Programming'),
('CS1SE20', 'Software Engineering: Fund and Professional Dev', 1, 'Software Engineering', 'Software Engineering'),
('CS2AO17', 'Algorithms and Operating Systems', 2, 'Fundamentals and Systems', 'Algorithms'),
('CS2CA17', 'Computer Architecture and Networking', 2, 'Fundamentals and Systems', 'Computer Networking, Computer Architecture'),
('CS2CO16', 'Compilers', 2, 'Fundamentals and Systems', 'Compilers'),
('CS2DI17', 'Databases and Information Security', 2, 'Fundamentals and Systems', 'Programming, Security, Databases'),
('CS2HW19', 'HCI and Web Applications', 2, 'Software Engineering', 'Website Development, Programming'),
('CS2PJ20', 'Programming in Java', 2, 'Programming', 'Java, Programming'),
('CS2QT19', 'Software Engineering: Quality and Testing', 2, 'Software Engineering', 'Software Engineering'),
('CS2SA16', 'Service-Oriented System Applications', 2, 'Software Engineering', 'Enterprise Architecture'),
('CS2SS20', 'Software System Design with UML', 2, 'Software Engineering', 'UML'),
('CS3AI18', 'Artificial Intelligence', 3, 'Advanced Computing and Data Science', 'AI, Deep Learning'),
('CS3BC20', 'Blockchain Computing', 3, 'Advanced Computing and Data Science', 'Programming, C#, Algorithms'),
('CS3DP19', 'Distributed Systems and Parallel Computing', 3, 'Advanced Computing and Data Science', 'Algorithms, Data Analytics, Programming'),
('CS3DS19', 'Data Science Algorithms and Tools', 3, 'Advanced Computing and Data Science', 'Algorithms, Data Analytics, Programming'),
('CS3DV20', 'Data Integration and Visualisation', 3, 'Software Engineering', 'Data Analytics, Data Visualisation'),
('CS3IA16', 'Image Analysis', 3, 'Advanced Computing and Data Science', 'Image Analysis'),
('CS3IP16', 'Individual Project', 3, 'Degree Project', 'Project Management, Research Skills'),
('CS3PP19', 'Programming in Python for Data Science', 3, 'Programming', 'Python, Programming'),
('CS3SC17', 'Social, Legal & Ethical Aspects of Computing', 3, 'Software Engineering', 'Social, Legal & Ethical Aspects in Computing'),
('CS3TM20', 'Text Mining and Natural Language Processing', 3, 'Advanced Computing and Data Science', 'Data Processing'),
('CS3VI18', 'Visual Intelligence', 3, 'Advanced Computing and Data Science', 'Computer Vision, Video Surveillance'),
('CS3VR16', 'Virtual Reality', 3, 'Advanced Computing and Data Science', 'Programming, C#'),
('CSMAD21', 'Applied Data Science with Python', 7, 'Programming', 'Programming, Python, Data Visualisation, Data Processing'),
('CSMAI21', 'Artificial Intelligence and Machine Learning', 7, 'Advanced Computing and Data Science', 'AI, Deep Learning, Machine Learning'),
('CSMBD21', 'Big Data and Cloud Computing', 7, 'Advanced Computing and Data Science', 'Data Analytics, Algorithms'),
('CSMDM21', 'Data Analytics and Mining', 7, 'Advanced Computing and Data Science', 'Data Analytics, Data Mining, Databases'),
('CSMDS21', 'Data Security and Ethics', 7, 'Software Engineering', 'Security,  Data Processing, Legal Aspects'),
('CSMMA21', 'Mathematics and Statistics for Data Science', 7, 'Fundamentals and Systems', 'Mathematics, Statistics'),
('CSMPR21', 'MSc Project', 7, 'Degree Project', 'Project Management, Research Skills'),
('CSMRS16', 'Research Studies', 7, 'Software Engineering', 'Research Skills');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(0, 'Brandon', 'Yotest'),
(1, 'admin', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
