-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 06:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student3350partb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `loginame` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isTutor` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `lastname`, `loginame`, `password`, `isTutor`) VALUES
(1, 'Christos', 'Christidis', 'admin', 'admin', 1),
(2, 'pepegas', 'pepegidis', 'student', 'student', 0),
(4, 'TAKIS', 'takis', 'takis', 'takis', 0),
(5, 'taos', 'teas', '', 'pakis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(150) NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `date`, `subject`, `text`) VALUES
(9, '2022-01-26', 'LOREM IPSUM', 'jhbfgngfjhbjfntjngjnfg'),
(10, '2022-02-10', 'LOREM IPSUM', 'tatata');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `expdate` date DEFAULT NULL,
  `title` varchar(1000) NOT NULL,
  `source` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `expdate`, `title`, `source`) VALUES
(2, '2022-02-22', 'Machine Learning', 'https://google.com'),
(3, '2022-02-26', 'Ανάπτυξη Διαδικτυακού Πληροφορικού Συστήματος', 'https://amazon.com');

-- --------------------------------------------------------

--
-- Table structure for table `deliverable`
--

CREATE TABLE `deliverable` (
  `id` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverable`
--

INSERT INTO `deliverable` (`id`, `description`) VALUES
(1, 'Αρχείο Python'),
(2, 'Γραπτή Αναφορά'),
(3, 'Screenshots με αποτελέσματα'),
(4, 'Αρχεία HTML, CSS, PHP'),
(5, 'Ανέβασμα του ιστοτόπου στο http://domain users.auth.gr'),
(6, 'vcbncvbncvbmnxc\r'),
(7, 'vcbncvbncvbmnxc\r'),
(8, 'gfhjfg,kmnbv\r'),
(9, 'gfhjfg,kmnbv\r'),
(10, 'gfhjfg,kmnbv\r'),
(11, 'gfhjfg,kmnbv\r'),
(12, 'gfmbnvmcvb\r'),
(13, 'nm,kvbnncv'),
(14, 'gfhjfg,kmnbv\r'),
(15, 'gfmbnvmcvb\r'),
(16, 'nm,kvbnncv'),
(17, 'gfhjdhbdsb\r'),
(18, 'vbncvbczxvb\r'),
(19, 'ncvbnxcvbnvcb'),
(20, 'dsfgsdnhgfs\r'),
(21, 'sdfghshdfghs');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `source` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `title`, `description`, `source`) VALUES
(1, 'Τεχνητή Νοημοσύνη: Εισαγωγή', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus gravida eget libero id tristique. Nunc congue fringilla tellus. In in lacus purus. Aliquam congue scelerisque augue et gravida. Fusce sagittis blandit arcu vitae eleifend. Cras et ante non massa accumsan suscipit sed vitae lorem. Mauris tellus felis, malesuada eu lectus nec, varius iaculis arcu. Nullam nec nunc sagittis, consequat metus et, placerat risus. Nulla facilisi. Donec elementum sapien ut faucibus aliquet. Maecenas pulvinar ornare tempus. Quisque consectetur facilisis egestas. Sed quis lacus ac mauris mattis luctus. Sed nec erat malesuada, pulvinar felis viverra, efficitur lacus. Mauris pellentesque tellus nisi, quis gravida felis gravida id.\r\n\r\nNam mattis nisi et ante pulvinar porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lacus et dui bibendum congue. Mauris non nulla imperdiet, tempus ipsum a, posuere diam. Vestibulum velit ipsum, porttitor eget venenatis id, convallis pulvinar sem. Proin ut bibendum nibh, a tristique ex. Praesent condimentum vehicula augue, ut vehicula est. Cras ligula erat, mollis quis tempor eget, commodo ac diam. Fusce faucibus arcu at eros lacinia vestibulum. Aliquam scelerisque sodales enim eget scelerisque. Morbi eu ligula libero. Nunc eu nisi ut nisl pretium aliquet. Cras vestibulum iaculis mi, eu finibus risus aliquam non. Quisque ac consectetur libero, eu lobortis mauris.\r\n\r\nDuis gravida turpis diam, vitae egestas diam efficitur in. Mauris interdum velit nec malesuada molestie. Cras ullamcorper bibendum rutrum. Sed a mattis elit. Aenean pretium vitae erat in molestie. Praesent commodo sit amet lacus non placerat. Maecenas quis varius tortor. Etiam nulla metus, ornare et dapibus eu, accumsan nec nisl. Aliquam ac volutpat tortor, et facilisis enim. Morbi ornare eros blandit, scelerisque sapien vitae, suscipit leo.', 'https://www.lipsum.com/feed/html');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `sender`, `subject`, `text`) VALUES
(1, 'tutor@csd.auth.gr', 'New assignment - Send today!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum tristique diam, a rhoncus felis accumsan at. Ut est justo, molestie eget malesuada et, vulputate id lacus. Quisque gravida pulvinar velit. Aliquam erat volutpat. Suspendisse a aliquam turpis. Mauris auctor elit augue, blandit bibendum neque bibendum sed. Vestibulum et ex ut nisl consectetur faucibus. Integer varius erat ante. Nunc magna est, auctor vitae magna sed, feugiat facilisis nulla. Duis quis volutpat felis, ut viverra nulla. Duis euismod lorem a ex congue iaculis. Fusce quis cursus justo, sed convallis nisl. Aenean quis fringilla nibh.'),
(2, '', '', ''),
(3, 'tefas@tefas.tefas', 'Εργασία OWL - 3350 - 3362', 'aaaaaaaaa'),
(4, 'tefas@tefas.tefas', 'asoee', 'aaaaaaaaaaaaaaaaa'),
(5, 'pipip@pup.pop', 'asoee', 'aaaaaaaaaaaaaaaaa'),
(6, 'omagad@csd.auth.gr', 'Προφορική εξέταση στο μάθημα Νευρωνικά Δίκτυα', 'Προφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά Δίκτυα'),
(7, 'omagad@csd.auth.gr', 'Προφορική εξέταση στο μάθημα Νευρωνικά Δίκτυα', 'Προφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά ΔίκτυαΠροφορική εξέταση στο μάθημα Νευρωνικά Δίκτυα');

-- --------------------------------------------------------

--
-- Table structure for table `emailaddresses`
--

CREATE TABLE `emailaddresses` (
  `id` int(11) NOT NULL,
  `address` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailaddresses`
--

INSERT INTO `emailaddresses` (`id`, `address`) VALUES
(1, 'tutor@csd.auth.gr'),
(2, 'myemail@example.com'),
(3, 'examplemail@examplemail.com');

-- --------------------------------------------------------

--
-- Table structure for table `goal`
--

CREATE TABLE `goal` (
  `id` int(11) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` (`id`, `description`) VALUES
(1, 'Εκπαίδευση Νευρωνικών Δικτύων'),
(2, 'Εκμάθηση Python'),
(3, 'Ανάπτυξη Machine Learning Αλγορίθμων'),
(4, 'Εκμάθηση HTML'),
(5, 'Εκμάθηση CSS'),
(6, 'Εκμάθηση PHP'),
(7, 'sfgjsfgjgsfjgfsjsgf\r'),
(8, 'fgsjgfsjgfsjgfs\r'),
(9, 'fjsgjghjfghj'),
(10, 'sfgjsfgjgsfjgfsjsgf\r'),
(11, 'fgsjgfsjgfsjgfs\r'),
(12, 'fjsgjghjfghj'),
(13, 'sfgjsfgjgsfjgfsjsgf\r'),
(14, 'fgsjgfsjgfsjgfs\r'),
(15, 'fjsgjghjfghj'),
(16, 'sfgjsfgjgsfjgfsjsgf\r'),
(17, 'fgsjgfsjgfsjgfs\r'),
(18, 'fjsgjghjfghj'),
(19, 'fdhgjdgjdghk\r'),
(20, 'ghfjfghjfgjgfh\r'),
(21, 'gfhjfgj'),
(22, 'fdhgjdgjdghk\r'),
(23, 'ghfjfghjfgjgfh\r'),
(24, 'gfhjfgj'),
(25, 'fdhgjdgjdghk\r'),
(26, 'ghfjfghjfgjgfh\r'),
(27, 'gfhjfgj'),
(28, 'fdhgjdgjdghk\r'),
(29, 'ghfjfghjfgjgfh\r'),
(30, 'gfhjfgj'),
(31, 'fdhgjdgjdghk\r'),
(32, 'ghfjfghjfgjgfh\r'),
(33, 'gfhjfgj'),
(34, 'dfhfgjfjfghdfgjh\r'),
(35, 'ghfjghjgfh\r'),
(36, 'kghjghjgfhj'),
(37, 'fsdgafdgsdfgdsfg\r'),
(38, 'dsfgdsfgsdfg\r'),
(39, 'dfsgdfsgdsg');

-- --------------------------------------------------------

--
-- Table structure for table `hasdeliverable`
--

CREATE TABLE `hasdeliverable` (
  `id` int(11) NOT NULL,
  `assignmentId` int(11) NOT NULL,
  `deliverableId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasdeliverable`
--

INSERT INTO `hasdeliverable` (`id`, `assignmentId`, `deliverableId`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(5, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hasgoal`
--

CREATE TABLE `hasgoal` (
  `id` int(11) NOT NULL,
  `assignmentId` int(11) NOT NULL,
  `goalId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasgoal`
--

INSERT INTO `hasgoal` (`id`, `assignmentId`, `goalId`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 4),
(5, 3, 5),
(6, 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliverable`
--
ALTER TABLE `deliverable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailaddresses`
--
ALTER TABLE `emailaddresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal`
--
ALTER TABLE `goal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasdeliverable`
--
ALTER TABLE `hasdeliverable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasgoal`
--
ALTER TABLE `hasgoal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deliverable`
--
ALTER TABLE `deliverable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `emailaddresses`
--
ALTER TABLE `emailaddresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goal`
--
ALTER TABLE `goal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `hasdeliverable`
--
ALTER TABLE `hasdeliverable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hasgoal`
--
ALTER TABLE `hasgoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
