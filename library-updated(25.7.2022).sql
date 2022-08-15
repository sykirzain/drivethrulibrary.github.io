-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 04:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_token`
--

CREATE TABLE `auth_token` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `selector` varchar(50) NOT NULL,
  `code_hash` varchar(255) NOT NULL,
  `expiry` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `total` mediumint(5) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `category_id`, `name`, `description`, `picture`, `total`, `created`, `modified`) VALUES
(1, 1, 'Computer Networking', 'Appropriate for a first course on computer networking, this textbook describes the architecture and function of the application, transport, network, and link layers of the internet protocol stack, then examines audio and video networking applications, the underpinnings of encryption and network security, and the key issues of network management', 'e82fcc725b3bd2120dd4622370882507.jpg', 10, '2022-06-07 21:47:13', '2022-06-07 21:47:13'),
(2, 7, 'Clean Code', 'Even bad code can function. But if code isn\'t clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesn\'t have to be that way.', '', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'networking all in one', 'Designed to replace that groaning shelf-load of dull networking books you’d otherwise have to buy and house, Networking All-in-One For Dummies covers all the basic and not-so-basic information you need to get a network up and running', 'screenshot.455.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `created`, `modified`) VALUES
(1, 52, '2022-06-08 16:01:34', '2022-06-08 16:01:34'),
(2, 51, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 52, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 62, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(10) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `cart_id`, `book_id`, `created`, `modified`) VALUES
(1, 1, 1, '2022-06-08 16:01:47', '2022-06-08 16:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Networking', 'A computer network is a set of computers sharing resources located on or provided by network nodes.', '2022-06-07 19:48:59', '2022-06-07 19:48:59'),
(7, 'software engineer', 'A computer programmer, sometimes referred to as a software developer, a software engineer, a programmer, or more recently a coder, is a person who creates computer software.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT 'In Progress=0, Success=1, Pending=2, Fail=3, Rejected=4',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `user_id`, `cart_id`, `start`, `end`, `status`, `created`, `modified`) VALUES
(1, 52, 1, '2022-06-08 00:00:00', '2022-06-08 00:00:00', 2, '2022-06-08 16:02:12', '2022-06-08 16:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `matric_number` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL COMMENT 'No=0, Yes=1',
  `role` tinyint(1) NOT NULL COMMENT 'Student=0, Librarian=1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `matric_number`, `password`, `code`, `verified`, `role`, `created`, `modified`) VALUES
(50, 'librarian', 'librarian@gmail.com', NULL, '', '$2y$10$rvd9yoHPGIPJVcmxRWN0z.1Ld06SxK6FaFkQbkXlSj7kgkDUUZwie', '63da4cae5bb5b274761d792ba3b596bed3b548e798aafc7c86c2affd888a1107', 1, 1, '2022-05-26 03:58:12', '2022-05-26 03:58:12'),
(51, 'test2', 'test2@gmail.com', '012-345 6789', '2001291263', '$2y$10$q..d.IQFUi6/9sOuOKFHEuQxBFCt5IZ0UK2lCkAYVRhrAyfC/ipIq', NULL, 1, 0, '2022-06-07 19:54:41', '2022-06-07 19:54:41'),
(52, 'test3', 'test3@gmail.com', '0123456789', 'abc1234', '$2y$10$3enfS3eQb6JyFfU/Mt6y5OUbRGouWfFmYqz6uzXops7oWI1ggFfaa', '0f5497b03ac0736cf54e89f352a0514fad53fb309a349ec943c1f61adb9701e7', 1, 0, '2022-06-08 19:59:59', '2022-06-08 19:59:59'),
(56, 'test4', 'test4@gmail.com', '0123456789', 'abc1234', '$2y$10$QF95lebKugU2U8oJrmsjC.75bGZxXPyHe10hJ6lWCbAPNOlRF1HPO', '90ff1d0ac84680704600bfc419b755db71bae022438c38202fd4952c2ac54cf6', 1, 0, '2022-06-09 12:14:11', '2022-06-09 12:14:11'),
(57, 'test5', 'test5@gmail.com', '0123456789', 'test1234', '$2y$10$pH9oFcfq1OnTmyZdtwCGA.q/3yiqSHsTh0vbp.46/BDoePH/nYvya', NULL, 1, 0, NULL, NULL),
(62, 'syakirzain2', 'syakirzainz@gmail.com', '0129319891', '2019415714', '$2y$10$QWTOqqkI.xzEAuckY17mROK0OPFlKPZPGRR/e9bJ4jXiX4dKWeHVO', '143046bbf0d0281e68a3d5122eeba763e22e719aed57b054ed0bcf5a2079c14a', 1, 0, '2022-07-23 15:34:31', '2022-07-23 15:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_token`
--
ALTER TABLE `auth_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `cart_id` (`cart_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_token`
--
ALTER TABLE `auth_token`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_token`
--
ALTER TABLE `auth_token`
  ADD CONSTRAINT `auth_token_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
