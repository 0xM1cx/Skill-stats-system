-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 10:43 AM
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
-- Database: `comics`
--
CREATE DATABASE IF NOT EXISTS `comics` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `comics`;

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `manga_id` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `synopsis` text DEFAULT NULL,
  `author` varchar(15) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`manga_id`, `title`, `synopsis`, `author`, `rating`) VALUES
(5, 'Bible New', 'story of GOD', 'Jesus', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`manga_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `manga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `integ_exam`
--
CREATE DATABASE IF NOT EXISTS `integ_exam` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `integ_exam`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `synopsis` text DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `synopsis`, `rating`, `author`) VALUES
(2, 'Psycho-Pass', 'Some synopsis of the book here', 4, 'Shawn Michael Sudari'),
(4, 'Psycho-Pass 5', 'part 2 book plot', 5, 'Json Born');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `leos-lodge`
--
CREATE DATABASE IF NOT EXISTS `leos-lodge` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `leos-lodge`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `F_Name` varchar(50) DEFAULT NULL,
  `L_Name` varchar(50) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `F_Name`, `L_Name`, `Address`, `Phone`) VALUES
(7, 'Shawn Michael', 'Sudaria', 'Sta. Cruz', '123-456-7890'),
(8, 'Megumi', 'Satoh', 'somewhere in japan', '555-555-5555'),
(9, 'Megumi', 'Satoh', 'somewhere in japan', '555-555-5555'),
(10, 'Shawn Michael', 'Sudaria', 'Tacloban City', '961-938-1867'),
(11, 'Albertos', 'Pizza', 'somewhere in tacloban', '990-999-9999'),
(12, 'Shawn ', 'Sudaria', 'REUDA STREET CALBAYOG CITY', '961-938-1867'),
(13, 'Json', 'BornAgain', 'somewhere in tacloban', '961-938-1867'),
(14, 'Earl', 'Dela Crux', 'Tacloban City', '123-456-7890');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_Id` int(11) NOT NULL,
  `Room_ID` int(11) DEFAULT NULL,
  `F_Name` varchar(10) DEFAULT NULL,
  `L_Name` varchar(10) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Position` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_Id`, `Room_ID`, `F_Name`, `L_Name`, `Salary`, `Position`) VALUES
(1, 1, 'Shawn Mich', 'Sudaria', 900000.00, 'Room Atten'),
(2, 2, 'Jake', 'Capaycapay', 900000.00, 'Room Atten'),
(3, 4, 'Jade Hart', 'Lee', 900000.00, 'Room Atten'),
(4, 3, 'Renz Ivan', 'Monteza', 900000.00, 'Room Atten'),
(5, NULL, 'Hyle', 'Argon', 900000.00, 'Room Atten');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_Id` int(11) NOT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `Payment_Date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Card_Number` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_Id`, `Amount`, `Payment_Date`, `Card_Number`) VALUES
(5, 1500.00, '2024-05-26 07:56:48', '1234 1234 1234 1234'),
(6, 2200.00, '2024-05-26 08:38:21', '5555 5555 5555 5555'),
(7, 2200.00, '2024-05-26 08:38:44', '5555 5555 5555 5555'),
(8, 1600.00, '2024-05-26 09:46:26', '1111 1111 1111 1111'),
(9, 1000.00, '2024-05-26 11:52:44', '7777 7777 7777 7777'),
(10, 1500.00, '2024-05-29 19:06:11', '1111 1111 1111 1111'),
(11, 1600.00, '2024-05-30 03:41:37', '1234 1234 1234 1234'),
(12, 1600.00, '2024-05-30 03:52:55', '1111 1111 1111 1111');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Res_Id` int(11) NOT NULL,
  `Customer_ID` int(11) DEFAULT NULL,
  `Room_ID` int(11) DEFAULT NULL,
  `Payment_ID` int(11) DEFAULT NULL,
  `CheckInDate` date DEFAULT NULL,
  `CheckOutDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Res_Id`, `Customer_ID`, `Room_ID`, `Payment_ID`, `CheckInDate`, `CheckOutDate`) VALUES
(7, 14, 3, 12, '2024-06-24', '2024-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Room_Id` int(11) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Room_Capacity` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Amenities` text DEFAULT NULL,
  `CheckInDate` date DEFAULT NULL,
  `CheckOutDate` date DEFAULT NULL,
  `Pic_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Room_Id`, `Type`, `Room_Capacity`, `Price`, `Amenities`, `CheckInDate`, `CheckOutDate`, `Pic_Name`) VALUES
(1, 'Standard Room', 2, 1500.00, 'Wifi, TV, Aircon, Desk', '0000-00-00', '0000-00-00', 'https://i.imgur.com/7wNVbd6.jpeg'),
(2, 'Standard Room', 1, 1000.00, 'Wifi, Desk', '2024-05-01', '2024-05-07', 'https://i.imgur.com/u0TTlwc.jpeg'),
(3, 'Deluxe', 1, 1600.00, 'Wifi, Aircon, Desk', '2024-06-18', '2024-06-21', 'https://i.imgur.com/EbdzPjz.jpeg'),
(4, 'Suite', 4, 2200.00, 'Wifi, TV, Aircon, Desk, Breakfast', '2024-07-17', '2024-07-26', 'https://i.imgur.com/vcAlOxs.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_Id`),
  ADD KEY `Room_ID` (`Room_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Res_Id`),
  ADD KEY `Customer_ID` (`Customer_ID`),
  ADD KEY `Room_ID` (`Room_ID`),
  ADD KEY `Payment_ID` (`Payment_ID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`Room_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Res_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `Room_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`Room_ID`) REFERENCES `rooms` (`Room_Id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`Customer_ID`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Room_ID`) REFERENCES `rooms` (`Room_Id`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`Payment_ID`) REFERENCES `payment` (`Payment_Id`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"skill-profile-system\",\"table\":\"individuals\"},{\"db\":\"skill-profile-system\",\"table\":\"feedback\"},{\"db\":\"skill-profile-system\",\"table\":\"skills\"},{\"db\":\"skill-profile-system\",\"table\":\"users\"},{\"db\":\"comics\",\"table\":\"manga\"},{\"db\":\"leos-lodge\",\"table\":\"rooms\"},{\"db\":\"leos-lodge\",\"table\":\"reservation\"},{\"db\":\"leos-lodge\",\"table\":\"payment\"},{\"db\":\"leos-lodge\",\"table\":\"employee\"},{\"db\":\"leos-lodge\",\"table\":\"customer\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'comics', 'manga', '{\"sorted_col\":\"`manga`.`manga_id` ASC\"}', '2024-05-30 03:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-06-08 08:43:34', '{\"Console\\/Mode\":\"collapse\",\"ThemeDefault\":\"blueberry\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `rjcbdb`
--
CREATE DATABASE IF NOT EXISTS `rjcbdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rjcbdb`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `middle_name` tinytext DEFAULT NULL,
  `name_extension` varchar(10) DEFAULT NULL,
  `contact_number` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `client_with_fullname`
-- (See below for the actual view)
--
CREATE TABLE `client_with_fullname` (
`ID` int(11)
,`full_name` text
,`email` varchar(255)
,`contact_number` varchar(16)
);

-- --------------------------------------------------------

--
-- Table structure for table `land_parcel`
--

CREATE TABLE `land_parcel` (
  `ID` int(11) NOT NULL,
  `Client_ID` int(11) NOT NULL,
  `Legal_Description` varchar(520) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `Subdivision` varchar(150) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Province` varchar(100) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveyor`
--

CREATE TABLE `surveyor` (
  `ID` int(11) NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `middle_name` tinytext DEFAULT NULL,
  `name_extension` varchar(10) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surveyor`
--

INSERT INTO `surveyor` (`ID`, `first_name`, `last_name`, `middle_name`, `name_extension`, `title`, `contact_number`, `email`) VALUES
(1, 'Florante', 'Benitez', 'Conde', 'jr.', 'manager', '0943435555555', 'benitez@mail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `surveyor_with_fullname`
-- (See below for the actual view)
--
CREATE TABLE `surveyor_with_fullname` (
`ID` int(11)
,`full_name` text
,`email` varchar(255)
,`title` varchar(50)
,`contact_number` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `survey_project`
--

CREATE TABLE `survey_project` (
  `ID` int(11) NOT NULL,
  `Parcel_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(1020) NOT NULL,
  `time_started` datetime NOT NULL,
  `time_ended` datetime DEFAULT NULL,
  `service_type` enum('Relocation Survey','Subdivision Survey','Consolidation Survey','Sketch Plan') NOT NULL,
  `compensation` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_project_image`
--

CREATE TABLE `survey_project_image` (
  `ID` int(11) NOT NULL,
  `Project_ID` int(11) NOT NULL,
  `Image_URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_project_surveyor`
--

CREATE TABLE `survey_project_surveyor` (
  `Surveyor_ID` int(11) NOT NULL,
  `Survey_Project_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `surveyor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `email`, `password`, `surveyor_id`) VALUES
(1, 'admin@mail.com', 'root', 1);

-- --------------------------------------------------------

--
-- Structure for view `client_with_fullname`
--
DROP TABLE IF EXISTS `client_with_fullname`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_with_fullname`  AS SELECT `client`.`ID` AS `ID`, concat(`client`.`first_name`,' ',case when `client`.`middle_name` is not null and octet_length(`client`.`middle_name`) > 0 then concat(substr(`client`.`middle_name`,1,1),'. ') else '' end,`client`.`last_name`,' ',case when `client`.`name_extension` is null then '' else `client`.`name_extension` end) AS `full_name`, `client`.`email` AS `email`, `client`.`contact_number` AS `contact_number` FROM `client` ;

-- --------------------------------------------------------

--
-- Structure for view `surveyor_with_fullname`
--
DROP TABLE IF EXISTS `surveyor_with_fullname`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `surveyor_with_fullname`  AS SELECT `surveyor`.`ID` AS `ID`, concat(`surveyor`.`first_name`,' ',case when `surveyor`.`middle_name` is not null and octet_length(`surveyor`.`middle_name`) > 0 then concat(substr(`surveyor`.`middle_name`,1,1),'. ') else '' end,`surveyor`.`last_name`,' ',case when `surveyor`.`name_extension` is null then '' else `surveyor`.`name_extension` end) AS `full_name`, `surveyor`.`email` AS `email`, `surveyor`.`title` AS `title`, `surveyor`.`contact_number` AS `contact_number` FROM `surveyor` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `land_parcel`
--
ALTER TABLE `land_parcel`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Client_ID` (`Client_ID`);

--
-- Indexes for table `surveyor`
--
ALTER TABLE `surveyor`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `survey_project`
--
ALTER TABLE `survey_project`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Parcel_ID` (`Parcel_ID`);

--
-- Indexes for table `survey_project_image`
--
ALTER TABLE `survey_project_image`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- Indexes for table `survey_project_surveyor`
--
ALTER TABLE `survey_project_surveyor`
  ADD PRIMARY KEY (`Surveyor_ID`,`Survey_Project_ID`),
  ADD KEY `Survey_Project_ID` (`Survey_Project_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `surveyor_id` (`surveyor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `land_parcel`
--
ALTER TABLE `land_parcel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveyor`
--
ALTER TABLE `surveyor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_project`
--
ALTER TABLE `survey_project`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_project_image`
--
ALTER TABLE `survey_project_image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `land_parcel`
--
ALTER TABLE `land_parcel`
  ADD CONSTRAINT `land_parcel_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `survey_project`
--
ALTER TABLE `survey_project`
  ADD CONSTRAINT `survey_project_ibfk_1` FOREIGN KEY (`Parcel_ID`) REFERENCES `land_parcel` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `survey_project_image`
--
ALTER TABLE `survey_project_image`
  ADD CONSTRAINT `survey_project_image_ibfk_1` FOREIGN KEY (`Project_ID`) REFERENCES `survey_project` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `survey_project_surveyor`
--
ALTER TABLE `survey_project_surveyor`
  ADD CONSTRAINT `survey_project_surveyor_ibfk_1` FOREIGN KEY (`Survey_Project_ID`) REFERENCES `survey_project` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `survey_project_surveyor_ibfk_2` FOREIGN KEY (`Surveyor_ID`) REFERENCES `surveyor` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`surveyor_id`) REFERENCES `surveyor` (`ID`) ON DELETE CASCADE;
--
-- Database: `skill-profile-system`
--
CREATE DATABASE IF NOT EXISTS `skill-profile-system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `skill-profile-system`;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback` text DEFAULT NULL,
  `indiv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `indiv_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`indiv_id`, `name`, `title`, `bio`, `user_id`) VALUES
(1, 'Shawn', 'SOC Analyst', 'Technology fanatic blah blah blah blah', 3),
(2, 'Shawn Michael Sudari', 'Soc Analyst L3', 'A computer nerd', 1);

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
(3, '5hun', 's@proton.me', '$2y$10$qiho76ST3z64vlAnnhVfb.ogLGZwb.66VBWZPxBX8WNuib/tN/tOW');

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
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `indiv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `f_name`, `l_name`, `email`, `pass`, `phone`, `company`) VALUES
(1, 'Shawn Michael', 'Sudaria', 'shawnmichaelsudaria@proton.me', 'test', '123-456-7777', 'Mandiant');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_no` int(11) NOT NULL,
  `dept_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_no`, `dept_name`) VALUES
(1, 'Information Technology'),
(2, 'Accountancy');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` int(11) NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `dept_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `dept_no` (`dept_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`dept_no`) REFERENCES `departments` (`dept_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
