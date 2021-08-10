-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 06:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `aboutyou` text NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `call_num` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `school_m` varchar(255) NOT NULL,
  `percentage_m` varchar(255) NOT NULL,
  `year_m` varchar(4) NOT NULL,
  `school_i` varchar(255) NOT NULL,
  `percentage_i` varchar(255) NOT NULL,
  `year_i` varchar(4) NOT NULL,
  `school_g` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `percentage_g` varchar(255) NOT NULL,
  `year_g` varchar(4) NOT NULL,
  `skill1` varchar(255) NOT NULL,
  `skill1_range` int(100) NOT NULL,
  `skill2` varchar(255) NOT NULL,
  `skill2_range` int(100) NOT NULL,
  `skill3` varchar(255) NOT NULL,
  `skill3_range` int(100) NOT NULL,
  `skill4` varchar(255) NOT NULL,
  `skill4_range` int(100) NOT NULL,
  `skill5` varchar(255) NOT NULL,
  `skill5_range` int(100) NOT NULL,
  `project_title_1` varchar(255) NOT NULL,
  `project_description_1` varchar(1000) NOT NULL,
  `project_title_2` varchar(255) NOT NULL,
  `project_description_2` varchar(1000) NOT NULL,
  `project_title_3` varchar(255) NOT NULL,
  `project_description_3` varchar(1000) NOT NULL,
  `project_title_4` varchar(255) NOT NULL,
  `project_description_4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `firstname`, `secondname`, `position`, `aboutyou`, `linkedin`, `github`, `call_num`, `email`, `address`, `instagram`, `facebook`, `twitter`, `school_m`, `percentage_m`, `year_m`, `school_i`, `percentage_i`, `year_i`, `school_g`, `course`, `branch`, `percentage_g`, `year_g`, `skill1`, `skill1_range`, `skill2`, `skill2_range`, `skill3`, `skill3_range`, `skill4`, `skill4_range`, `skill5`, `skill5_range`, `project_title_1`, `project_description_1`, `project_title_2`, `project_description_2`, `project_title_3`, `project_description_3`, `project_title_4`, `project_description_4`) VALUES
(1, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', '', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(2, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(3, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(4, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(5, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(6, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(7, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(8, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(9, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Mechanical', '8.8', '2023', '0', 4, 'html ', 2, 'react', 2, 'html user', 4, 'html user', 2, 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js', 'calculator', 'using html,css,js'),
(10, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Information Technology', '8.8', '2023', '0', 3, '', 3, '', 3, '', 3, '', 3, '', '', '', '', '', '', '', ''),
(11, 'Suman', 'shadangi', 'web designer', 'i am a frontend developer.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Information Technology', '8.8', '2023', '0', 3, '', 3, '', 3, '', 3, '', 3, '', '', '', '', '', '', '', ''),
(12, 'Rahul', 'Shadangi', 'intern', 'i am a frontend developer with good skills in php and mysql.', 'linkedin', 'github', '7735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Instrumentations and electronics', '8.8', '2023', '0', 60, '', 50, '', 50, '', 50, '', 50, 'calculator', 'using html,css,js', '', '', '', '', '', ''),
(13, 'Rahul', 'Shadangi', 'intern', 'i am a frontend developer with good skills in php and mysql.', 'linkedin', 'github', '7735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Instrumentations and electronics', '8.8', '2023', 'C++', 60, '', 50, '', 50, '', 50, '', 50, 'calculator', 'using html,css,js', '', '', '', '', '', ''),
(14, 'Suman', 'shadangi', 'Software developer', 'i am a frontend developer with good skills in php and mysql.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Information Technology', '8.8', '2023', 'C++', 68, '', 50, '', 50, '', 50, '', 50, '', '', '', '', '', '', '', ''),
(15, 'Suman', 'shadangi', 'Software developer', 'i am a frontend developer with good skills in php and mysql.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Information Technology', '8.8', '2023', 'html', 39, '', 50, '', 50, '', 50, '', 50, 'calculator', 'using html,css,js', '', '', '', '', '', ''),
(16, 'Suman', 'shadangi', 'Software developer', 'i am a frontend developer with good skills in php and mysql.', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Information Technology', '8.8', '2023', 'html', 42, '', 50, '', 50, '', 50, '', 50, 'calculator', 'using html,css,js', '', '', '', '', '', ''),
(17, 'Suman', 'shadangi', 'data analyst', 'i am a data analyst', 'linkedin', 'github', '7735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Information Technology', '8.8', '2023', 'html user', 62, '', 50, '', 50, '', 50, '', 50, '', '', '', '', '', '', '', ''),
(18, 'Suman', 'shadangi', 'data analyst', 'i am a data analyst', 'linkedin', 'github', '7735240643', 'sumanshadangidd@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Information Technology', '8.8', '2023', 'html user', 62, '', 50, '', 50, '', 50, '', 50, '', '', '', '', '', '', '', ''),
(19, 'Suman', 'shadangi', 'data analyst', 'i am a data analyst', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'github', '7735240643', 'sumanshadangiddd@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '85%', '2019', ' college of engineering and technology', 'b.tech', 'Information Technology', '8.8', '2023', 'html user', 62, '', 50, '', 50, '', 50, '', 50, '', '', '', '', '', '', '', ''),
(20, 'Subasini ', 'Shadangi', 'Software developer intern', 'i am a software developer', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '7735240643', 'sumanshadangi2001@gmail.com', 'Udaya Nagar, sonepur-767017', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'Information Technology', '9.56', '2023', 'HTML', 56, 'CSS', 39, 'JAVA SCRIPT', 59, 'PHP', 90, 'MYSQL', 12, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', 'spectrum dashboard', 'page for spectrum club, under SID task-1', 'spectrum dashboard', 'page for spectrum club, under SID task-1', '', ''),
(21, 'Subasini ', 'Shadangi', 'Software developer intern', 'i am a software developer', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '7735240643', 'sumanshadangi2001@gmail.com', 'Udaya Nagar, sonepur-767017', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'Information Technology', '9.56', '2023', 'HTML', 56, 'CSS', 39, 'JAVA SCRIPT', 59, 'PHP', 90, 'MYSQL', 12, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', 'spectrum dashboard', 'page for spectrum club, under SID task-1', 'spectrum dashboard', 'page for spectrum club, under SID task-1', '', ''),
(22, 'Suman', 'shadangi', 'Software developer', 'i am a software developer', 'linkedin', 'github', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'https://twitter.com/', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology', 'B.tech', 'Information Technology', '9.56', '2023', 'C++', 70, 'CSS', 50, 'JAVA SCRIPT', 81, 'PHP', 12, 'MYSQL', 74, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', '', '', '', '', '', ''),
(23, 'Suman', 'shadangi', 'Software developer', 'i am a software developer', 'linkedin', 'github', '07735240643', 'sumanshadangia@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'https://twitter.com/', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology', 'B.tech', 'Information Technology', '9.56', '2023', 'C++', 70, 'CSS', 50, 'JAVA SCRIPT', 81, 'PHP', 12, 'MYSQL', 74, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', '', '', '', '', '', ''),
(24, 'Suman', 'shadangi', 'Software developer', 'i am a software developer', 'linkedin', 'github', '07735240643', 'sumanshadangia@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'https://twitter.com/', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology', 'B.tech', 'Information Technology', '9.56', '2023', 'C++', 70, 'CSS', 50, 'JAVA SCRIPT', 81, 'PHP', 12, 'MYSQL', 74, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', '', '', '', '', '', ''),
(25, 'Suman', 'shadangi', 'Software developer', 'i am a frontend developer.', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '07735240643', 'seumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'Information Technology', '9.56', '2023', 'C++', 100, 'CSS', 20, 'JAVA SCRIPT', 71, 'PHP', 50, 'MYSQL', 21, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', '', '', '', '', '', ''),
(26, 'Suman', 'shadangi', 'Software developer', 'i am a frontend developer.', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '07735240643', 'seumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'Information Technology', '9.56', '2023', 'C++', 100, 'CSS', 20, 'JAVA SCRIPT', 71, 'PHP', 50, 'MYSQL', 21, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', '', '', '', '', '', ''),
(27, 'Suman', 'shadangi', 'Software developer', 'i am a frontend developer.', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '07735240643', 'seumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'Information Technology', '9.56', '2023', 'C++', 100, 'CSS', 20, 'JAVA SCRIPT', 71, 'PHP', 50, 'MYSQL', 21, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', '', '', '', '', '', ''),
(28, 'Suman', 'shadangi', 'data analyst', 'i am a frontend developer.', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology', 'B.tech', 'CSE', '9.56', '2023', 'html user', 63, '', 50, '', 50, '', 50, '', 50, 'calculator', 'using html,css,js', '', '', '', '', '', ''),
(29, 'Suman', 'shadangi', 'Software developer', 'i am a data analyst', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '07735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'fashion technology', '8.8', '2023', 'HTML', 67, '', 50, '', 50, '', 50, '', 50, '', '', '', '', '', '', '', ''),
(30, 'Suman', 'shadangi', 'Software developer', 'i am a data analyst', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '07735240643', 'sumanshasdangi@gmail.com', 'Udaya Nagar', 'instagram', 'facebook', 'twitter', 'kendriya vidyalaya, sonepur', '95%', '2017', 'vikash residential school', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'fashion technology', '8.8', '2023', 'HTML', 67, 'html user', 70, '', 50, '', 50, '', 50, '', '', '', '', '', '', '', ''),
(31, 'Suman', 'Shadangi', 'Frontend develper', 'i am a frontend developer.', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '7735240643', 'sumanshadangi@gmail.com', 'Udaya Nagar', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'Information Technology', '8.8', '2023', 'C++', 71, 'html ', 58, 'JAVA SCRIPT', 31, 'PHP', 90, 'MYSQL', 65, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', 'spectrum dashboard', 'page for spectrum club, under SID task-1', 'Animated Hover button', 'using only css', 'calculator', 'using html,css,js'),
(32, 'Suman', 'Shadangi', 'Frontend develper', 'i am a frontend developer.', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '7735240643', 'shadangisuman@gmail.com', 'Udaya Nagar', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '94.3%', '2019', ' college of engineering and technology, Bhubaneswar', 'B.tech', 'Information Technology', '8.8', '2023', 'C++', 71, 'html ', 58, 'JAVA SCRIPT', 31, 'PHP', 90, 'MYSQL', 65, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', 'spectrum dashboard', 'page for spectrum club, under SID task-1', 'Animated Hover button', 'using only css', 'calculator', 'using html,css,js'),
(33, 'Suman', 'Shadangi', 'data analyst', 'With an emerging trend of 3D illustrations, I jumped on the bandwagon to explore websites that offer free and high-quality resources.  One thing is for sure, a 3D illustration on your website or social media will make you stand out on the internet. Illustrations in general are very captivating, and we are just taking it to another level.', 'https://www.linkedin.com/in/suman-shadangi-0969a6203/', 'https://github.com/sumanshadangi', '07735240643', 'sumawnshadangi@gmail.com', 'Udaya Nagar', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'kendriya vidyalaya fortwilliam', '95%', '2017', 'vikash residential school, Bargarh', '85%', '2019', ' college of engineering and technology, Bhubaneswar', 'b.tech', 'Information Technology', '8.8', '2023', 'html user', 64, 'CSS', 39, 'react', 64, 'html user', 66, 'MYSQL', 64, 'calculator', 'This is made using html, css and java script and can calculate all arithmetic calculations.', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Suman Shadangi', 'sumanshadangi@gmail.com', 'd0fb963ff976f9c37fc81fe03c21ea7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
