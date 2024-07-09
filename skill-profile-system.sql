-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 03:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skill-profile-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback` text DEFAULT NULL,
  `indiv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback`, `indiv_id`) VALUES
(1, 'He is a very hardworken ferson', 2),
(2, 'He is very gwapo!!!!', 2),
(3, 'He is a very skilled python engineer', 3),
(4, 'He is a very good programmer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `indiv_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pfp_path` varchar(60) NOT NULL,
  `git_link` text NOT NULL,
  `fb_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`indiv_id`, `name`, `title`, `bio`, `user_id`, `pfp_path`, `git_link`, `fb_link`) VALUES
(1, 'Shawn Michael', 'SOC Analyst 1', 'Does forensics work', 3, '', '', ''),
(2, 'Shawn Michael Sudari', 'Soc Analyst L3', 'A computer nerd', 1, '', '', ''),
(3, 'Json Born', 'Malware Analyst', 'A seasoned malware analyst. ', 1, '', '', ''),
(10, 'Pixel Dude', 'Pixel Artists', 'Draws some sick pixel art. Very Talented', 3, 'Home2.png', 'https://github.com/0xM1cx', ''),
(11, 'Shawn Sudaria', 'Threat Analyst', 'a', 3, 'Profile.jpg', 'https://github.com/0xM1cx', 'https://www.facebook.com/Sudaria.Shawn'),
(12, 'Shun', 'Student', 'He good', 6, 'avatar4.png', 'https://github.com/0xM1cx', 'https://www.facebook.com/Sudaria.Shawn');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `indiv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill`, `level`, `indiv_id`) VALUES
(2, 'Ghidra', 'Beginner', 2),
(3, 'Wireshark', 'Expert', 2),
(4, 'Python', 'Master', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `pass`) VALUES
(1, 'Shun', 'shawn@proton.me', '$2y$10$ga8J9WbpONF//4FwBao5..Vqbl3CHQrD46KcDTYcQIWd0k4MWv2DW'),
(2, 'Shawn', 'shawn@gmail.com', '$2y$10$IBjeRs5MuhttCCDEugYDNe5PNGsjL2U6x3.OU6P0FQPnHsVo6HdKS'),
(3, '5hun', 's@proton.me', '$2y$10$qiho76ST3z64vlAnnhVfb.ogLGZwb.66VBWZPxBX8WNuib/tN/tOW'),
(4, 'Shawn', 'shawn@proton.me', '$2y$10$v9ZBBbGHe47v5xKlsFXnrOENxiPqyk/2ABLG148omvrQ47zPENAq2'),
(5, 'mouse', 'mouse@gmail.com', '$2y$10$x1hcDiTkJJhbXQEoZyHucOEftFhck5dNd4z7iqa0hT/ynS1jjaU4O'),
(6, 'Obscure', 'obscure@gmail.com', '$2y$10$vomiA/ABiHD3tE8sXVpZj./lzA9p1j7Wi7VePewhRL749vANsG59y'),
(7, 'Shawn', 'shawnmichael@proton.me', '$2y$10$WRA.6dyM/8GDZBg5oqtwKuGGyvp0adMMugXesqmQrcz.dnZRnvB4.'),
(8, 'John', 'john@gmail.com', '$2y$10$0Hfx8vVeUBty.ilhef/m/OW8LvuDjRohVW3ihfVNhU09wjdReZDrm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `fk_indiv_feedback` (`indiv_id`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`indiv_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `fk_indiv_skill` (`indiv_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `indiv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_indiv_feedback` FOREIGN KEY (`indiv_id`) REFERENCES `individuals` (`indiv_id`) ON UPDATE CASCADE;

--
-- Constraints for table `individuals`
--
ALTER TABLE `individuals`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `fk_indiv_skill` FOREIGN KEY (`indiv_id`) REFERENCES `individuals` (`indiv_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
