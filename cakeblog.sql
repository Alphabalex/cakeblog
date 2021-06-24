-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 09:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakeblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created`, `modified`) VALUES
(1, 'Education', '2021-06-18 22:17:44', '2021-06-18 22:17:44'),
(2, 'programming', '2021-06-22 22:56:25', '2021-06-22 22:56:25'),
(3, 'tutorial', '2021-06-22 22:56:50', '2021-06-22 22:56:50'),
(4, 'Travel', '2021-06-22 22:57:20', '2021-06-22 22:57:20'),
(5, 'Lifestyle', '2021-06-22 22:57:33', '2021-06-22 22:57:33'),
(6, 'Food', '2021-06-22 22:57:46', '2021-06-22 22:57:46'),
(7, 'Fashion', '2021-06-22 22:57:58', '2021-06-22 22:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `body` text,
  `image` varchar(255) NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `body`, `image`, `published`, `created`, `modified`) VALUES
(1, 2, 7, 'First Post', 'first-post', 'This is the first post.', '', 1, '2021-06-18 22:17:44', '2021-06-23 20:59:06'),
(2, 2, 1, 'second post', 'second-post', 'Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.\r\n\r\nSolum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.\r\n\r\nReque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.\r\n\r\nEt habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.\r\n\r\nEum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.', '', 0, '2021-06-19 20:18:46', '2021-06-19 21:45:44'),
(3, 3, 5, 'third post', 'third-post', 'Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.\r\n\r\nSolum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.\r\n\r\nReque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.\r\n\r\nEt habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.\r\n\r\nEum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.', '', 1, '2021-06-19 20:49:59', '2021-06-24 00:15:11'),
(6, 3, 6, 'Fourth post with tags', 'Fourth-post-with-tags', 'With the basic article creation functionality built, we need to enable multiple authors to work in our CMS. Previously, we built all the models, views and controllers by hand. This time around we’re going to use Bake Console to create our skeleton code. Bake is a powerful code generation CLI tool that leverages the conventions CakePHP uses to create skeleton CRUD applications very efficiently. We’re going to use bake to build our users code', '', 1, '2021-06-19 21:17:56', '2021-06-23 21:00:10'),
(7, 2, 1, 'seventh post', 'seventh-post', 'still testing', '', 0, '2021-06-19 22:28:58', '2021-06-19 22:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','author') NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `created`, `modified`) VALUES
(2, 'Abdulsalam', 'Shakirah', 'divaspenzy@gmail.com', '$2y$10$LUosPYhyokEfK9dxWbA1zeWA1KJ8Xk858PfquuYFMRrRKbmdA2e2K', 'author', '2021-06-19 22:37:15', '2021-06-23 19:34:36'),
(3, 'Abdulquddus', 'Balogun', 'babusunnah@gmail.com', '$2y$10$HvpUjIiGteqk7BM4EV0G1.RCDl7N8DsqpobWh5KIrGz5InRgcfwWS', 'admin', '2021-06-19 23:06:21', '2021-06-23 19:35:19'),
(5, 'Rasheed', 'Raji', 'rajrash@gmail.com', '$2y$10$AgmdJ2DFxjzzYS369QNm2uv4fTxdytLQ9TauOBf4jNhjiX77DKPfK', 'author', '2021-06-23 19:13:10', '2021-06-23 19:13:10'),
(7, 'jamiu', 'Yusuf', 'jamooflondon@yahoo.com', '$2y$10$DnTB7dzxs0qo8qXXw.C5ceegnhlfcDr7iMI.tYKkJg3nxbZ3.W3JK', 'author', '2021-06-23 19:26:51', '2021-06-23 19:34:52'),
(8, 'Naheemah', 'Olalere', 'olalere@yahoo.com', '$2y$10$O4kkU/6S/WpOjh/O1SRMH.pzQCBlGl5d6KR2Z1oRV.irabxTYrtv.', 'author', '2021-06-23 23:40:36', '2021-06-23 23:40:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_key` (`user_id`),
  ADD KEY `category_key` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `category_key` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `user_key` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
