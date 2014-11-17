-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2014 at 02:17 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mykelatorrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `kela_users`
--

CREATE TABLE IF NOT EXISTS `kela_users` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` int(1) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `downloaded_amount` float NOT NULL DEFAULT '0',
  `uploaded_amount` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kela_users`
--

INSERT INTO `kela_users` (`id`, `email`, `user_name`, `password`, `dateOfBirth`, `gender`, `status`, `created_at`, `updated_at`, `downloaded_amount`, `uploaded_amount`) VALUES
(1, 'krausz_lorant23@yahoo.com', 'krausz23', 'krausz23', '0000-00-00', NULL, 1, '2014-11-03 07:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 'krauszteszt@yahoo.com', 'krauszteszt', '6c90aa3760658846a86a263a4e92630e', '0000-00-00', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 'teszt1@yahoo.com', 'teszt1', 'fe282d20bc8dcc12647088d0fe0ca7d7', '0000-00-00', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, 'teszt2@yahoo.com', 'teszt2', 'e970707c584b0c4574564ad239301c01', '0000-00-00', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, 'teszt3@yahoo.com', 'teszt3', 'teszt3', '0000-00-00', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(6, 'andras@yahoo.com', 'andras', 'andras', '0000-00-00', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(7, 'endre@yahoo.com', 'endre', 'endre', '0000-00-00', 0, 1, '2014-11-10 08:54:42', '0000-00-00 00:00:00', 0, 0),
(8, 'endre1@yahoo.com', 'endre1', 'endre1', '0000-00-00', 2, 1, '2014-11-10 08:58:11', '0000-00-00 00:00:00', 0, 0),
(9, 'teszt5@yahoo.com', 'teszt5', 'teszt5', '0000-00-00', 1, 1, '2014-11-10 09:23:06', '0000-00-00 00:00:00', 0, 0),
(10, 'teszt6@yahoo.com', 'teszt6', 'teszt6', '0000-00-00', 1, 1, '2014-11-10 09:23:50', '0000-00-00 00:00:00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kela_users`
--
ALTER TABLE `kela_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kela_users`
--
ALTER TABLE `kela_users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
