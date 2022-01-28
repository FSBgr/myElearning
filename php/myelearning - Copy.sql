-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 04:23 PM
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
-- Database: `myelearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `date`, `subject`, `text`) VALUES
(1, '2022-01-26', 'ΕΝΑΡΞΗ ΜΑΘΗΜΑΤΩΝ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum metus at arcu pretium, vel congue leo ultricies. Duis condimentum iaculis lectus, et finibus ipsum varius eget. Suspendisse potenti. Aliquam quis porta nisl. Vivamus ac tempor dui. Etiam aliquam augue non ante interdum varius. Ut tortor velit, facilisis non ipsum a, tempor scelerisque mauris. Fusce faucibus sapien lectus, ac maximus elit rhoncus ac. Morbi augue ante, suscipit quis est ut, iaculis maximus lorem. Cras feugiat eros non orci faucibus pulvinar. Aenean id sem a ante dapibus pretium ac eu mauris. Mauris interdum est metus, et efficitur mi blandit vel.\r\n\r\nFusce et eros a lorem luctus placerat. In vel risus sed arcu viverra pellentesque eu nec arcu. Vestibulum gravida tellus ac diam commodo aliquam. Aenean urna quam, consequat vel leo eu, laoreet fringilla nunc. Morbi lorem augue, hendrerit vel metus vestibulum, cursus interdum risus. Suspendisse euismod eget lorem et molestie. Curabitur nec tincidunt orci, in ultricies nibh. Morbi nisi velit, vestibulum in bibendum id, ullamcorper sed ex. Aliquam in mollis velit. Mauris sed ipsum vitae enim tempor accumsan sit amet eget arcu. Mauris at tortor volutpat, lacinia nunc et, condimentum nisi. Ut cursus dictum justo et elementum. Nunc hendrerit, mi a hendrerit rutrum, tellus metus egestas sem, at molestie neque leo id leo. Maecenas purus nibh, maximus sed mattis ut, consequat vel urna. Pellentesque suscipit scelerisque tortor, vitae pretium erat fringilla a.\r\n\r\nUt neque lorem, auctor a suscipit id, fringilla nec magna. Donec posuere, ipsum sit amet consequat malesuada, massa nibh consectetur ex, egestas dapibus massa felis a tellus. In eget imperdiet diam. Donec at libero a velit commodo accumsan. Phasellus a tempor sapien. Maecenas eget consequat enim. Vestibulum id pharetra ipsum. Vivamus vestibulum purus eget magna porttitor, in vulputate leo ornare. Suspendisse egestas massa quis consectetur gravida. Nunc at commodo purus, non condimentum augue. Nulla vulputate est vitae arcu rutrum vestibulum.'),
(2, '2022-01-26', 'Έναρξη μαθημάτων', 'Τα μαθήματα αρχίζουν τη Δευτέρα 17/12/2022'),
(3, '2022-01-30', 'Ανάρτηση Εργασίας', 'Η 1η εργασία έχει ανακοινωθεί στην ιστοσελίδα «Εργασίες» Τα μαθήματα αρχίζουν την Δευτέρα 17/12/2022'),
(4, '2022-02-01', 'Ανάρτηση Εργασίας', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt eros sed lectus pellentesque imperdiet. Vestibulum aliquet lorem turpis, eget accumsan urna pulvinar sit amet. In hac habitasse platea dictumst. Etiam scelerisque ligula ut justo eleifend condimentum. Sed sit amet finibus ligula. Nulla ultricies sed ligula in varius. Nam sed luctus velit. Ut convallis congue semper. In rutrum ex elementum rutrum rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam pellentesque quam odio, sollicitudin imperdiet velit cursus a. Duis rutrum et nisi non consectetur. Integer vitae volutpat mauris, nec rutrum ipsum. Ut varius euismod varius. Pellentesque condimentum eros non molestie commodo. Duis tincidunt id lacus ut porttitor. Suspendisse id interdum ante, quis eleifend metus. Morbi luctus suscipit ullamcorper. Ut faucibus ante id mattis blandit. Aenean et dui urna. Fusce pulvinar magna at dolor condimentum lobortis. Cras volutpat eu leo eu efficitur. Morbi tincidunt elementum euismod. Praesent suscipit a sem eget maximus. In ac neque nibh. Vestibulum metus eros, sagittis sed eros quis, sodales viverra sapien. Cras eget ligula ipsum. Morbi sed sem at diam consectetur hendrerit. Aenean lacinia purus id lacus tempor, tincidunt efficitur velit euismod. Sed efficitur arcu a risus iaculis, eget vehicula odio accumsan. Cras dolor felis, lacinia eget arcu nec, venenatis suscipit nisl. Maecenas laoreet non risus eget luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris sed erat erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec suscipit imperdiet varius. Nunc dictum nunc quis ex cursus, sed luctus nunc commodo. Vivamus non ullamcorper mi. Pellentesque vel nisi nec lacus mollis pellentesque eget et erat. Nullam faucibus lorem et massa tempus, ac dapibus ipsum laoreet. Duis pharetra erat lorem, et posuere ex ornare in. Etiam ut scelerisque orci, et fermentum risus. Nullam mauris arcu, aliquam sit amet lobortis vitae, consequat in diam. Aenean lacus elit, convallis at rutrum sit amet, pharetra eu mi. Cras quis placerat nisl. Morbi ultricies est id ligula vulputate volutpat. Etiam in orci consequat, varius nisl hendrerit, euismod lectus. Donec eros tellus, luctus non augue blandit, vehicula tempor metus. Proin et ultrices arcu, in laoreet dui. Suspendisse eleifend orci sit amet enim tempus maximus. Nullam egestas elementum metus eget bibendum. Nullam eget fringilla nibh. Cras tincidunt pharetra volutpat. Nulla condimentum congue nibh quis fermentum. Sed ut pharetra neque. Integer mattis posuere arcu, a euismod sapien consectetur elementum. Fusce sed sem id nisl egestas placerat at vitae ante. Aenean sit amet imperdiet risus. Nunc et sollicitudin felis. Etiam ut hendrerit eros. In iaculis diam nec purus volutpat, quis maximus odio tempus. Sed accumsan magna et ante commodo, at convallis dolor blandit.');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `hasGoal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'tutor@csd.auth.gr', 'New assignment - Send today!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum tristique diam, a rhoncus felis accumsan at. Ut est justo, molestie eget malesuada et, vulputate id lacus. Quisque gravida pulvinar velit. Aliquam erat volutpat. Suspendisse a aliquam turpis. Mauris auctor elit augue, blandit bibendum neque bibendum sed. Vestibulum et ex ut nisl consectetur faucibus. Integer varius erat ante. Nunc magna est, auctor vitae magna sed, feugiat facilisis nulla. Duis quis volutpat felis, ut viverra nulla. Duis euismod lorem a ex congue iaculis. Fusce quis cursus justo, sed convallis nisl. Aenean quis fringilla nibh.');

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

-- --------------------------------------------------------

--
-- Table structure for table `hasgoal`
--

CREATE TABLE `hasgoal` (
  `assignmentId` int(11) NOT NULL,
  `goaldID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emailaddresses`
--
ALTER TABLE `emailaddresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goal`
--
ALTER TABLE `goal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
