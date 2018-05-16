-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 01:25 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rundb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptedpolicy`
--

CREATE TABLE `acceptedpolicy` (
  `policy_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `details` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admincomment`
--

CREATE TABLE `admincomment` (
  `id` int(4) NOT NULL,
  `comment` text NOT NULL,
  `policy_id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admincomment`
--

INSERT INTO `admincomment` (`id`, `comment`, `policy_id`) VALUES
(1, 'Hi, this will make better income', 3);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(4) NOT NULL,
  `name` varchar(225) NOT NULL,
  `designation` varchar(225) NOT NULL,
  `comment` text NOT NULL,
  `policy_id` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `designation`, `comment`, `policy_id`) VALUES
(1, 'Nancy', 'staff', 'Well, i think this is not necessary.  ', 2),
(8, 'Joy', 'student', 'Well Said', 2),
(9, 'Samuel', 'staff', 'She is not done with her import yet', 2),
(10, 'Emmanuel', 'parent', 'Please this is not advicable', 4),
(11, 'Esther', 'parent', 'Hello  fhjfvhb  hvgre hgvhf', 3),
(12, 'Abosede', 'staff', 'Because there is no available resources', 3),
(13, 'Afolabi ', 'staff', 'This will not work effectively', 4);

-- --------------------------------------------------------

--
-- Table structure for table `comparison`
--

CREATE TABLE `comparison` (
  `value` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comparison`
--

INSERT INTO `comparison` (`value`) VALUES
(4),
(4),
(4),
(4),
(4),
(4),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `policy_id` int(4) NOT NULL,
  `value` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `policy_id`, `value`) VALUES
(30, 13, 'Zoology'),
(29, 13, 'Medicine'),
(28, 13, 'Nursing'),
(24, 11, 'white'),
(23, 11, 'corn'),
(22, 11, 'wheat'),
(27, 12, 'Swallow'),
(26, 12, 'Beans'),
(25, 12, 'Rice');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parent_id` int(4) NOT NULL,
  `sname` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `oname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` bigint(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `sname`, `fname`, `oname`, `email`, `phone`) VALUES
(1, 'Igwe', 'Emmanuel', 'Iheanyi', 'emma.iheanyi@gmail.com', 0),
(2, 'Williams', 'Abosede', 'Glory', 'glory@gmail.com', 0),
(3, 'Williams', 'Chinyere', 'Peace', 'chinyere@gmail.com', 0),
(4, 'Balogun', 'Feranmi', 'Segun', 'segun@gmail.com', 0),
(5, 'Afolabi', 'Yemisi', 'Favour', 'favour@gmail.com', 0),
(6, 'Folorunso', 'Victor', 'Ayomide', 'ayomide@gmail.com', 0),
(7, 'Inyang', 'Moses', 'Bassey', 'bassey@gmail.com', 0),
(8, 'Akpan', 'Imo', 'David', 'david@gmail.com', 0),
(9, 'Akinyemi', 'Femilolu', 'Sandra', 'sandra@gmail.com', 0),
(10, 'Eze', 'Daniel', 'Oluchi', 'oluchi@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` int(4) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `title`, `content`) VALUES
(11, 'Bread Making', 'ekjjdjk ndjbnwc nrfbj n nnvjkg vjfvnfd '),
(12, 'Types of Food', 'choose which type of food is applicable to you best'),
(13, 'New courses available', 'there are some new courses available, but the university can only choose one out of them. Please lets hear your view');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(4) NOT NULL,
  `sname` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `oname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` bigint(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `sname`, `fname`, `oname`, `email`, `phone`) VALUES
(1, 'Omorioge', 'David', 'Kolawole', 'david@gmail.com', 0),
(2, 'Arekete', 'Samson', 'George', 'arekete@gmail.com', 0),
(3, 'Ogunde', 'Adeolu', 'Oludemi', 'ogunde@gmail.com', 0),
(4, 'Oguntunde', 'Bosede', 'Love', 'bosede@gmail.com', 0),
(5, 'Babaagba', 'Kehinde', 'Peace', 'peace@gmail.com', 0),
(6, 'Ogunleye', 'Opeoluwa', 'Segun', 'opeoluwa@gmail.com', 0),
(7, 'Ayeni', 'James', 'Oluyemi', 'oluyemi@gmail.com', 0),
(8, 'Odim', 'Mbah', 'Eze', 'odimmbah@gmail.com', 0),
(9, 'Ukwagbu', 'Joel', 'Prince', 'prine@gmail.com', 0),
(10, 'Otuechere', 'Uche', 'Happy', 'happy@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(4) NOT NULL,
  `sname` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `oname` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sname`, `fname`, `oname`, `email`, `phone`) VALUES
(1, 'Williams', 'Oluwadamilola', 'Omodolapo', 'williams@gmail.com', 0),
(2, 'Williams', 'Praise-el', 'Demilade', 'demilade@gmail.com', 0),
(3, 'Ojo', 'Toluwalase', 'Ifeoluwa', 'ifeoluwa@gmail.com', 0),
(4, 'Balogun', 'Olufunke', 'Moninuola', 'moninuola@gmail.com', 0),
(5, 'Odufuwa', 'Timileyin', 'Doyin', 'doyin@gmail.com', 0),
(6, 'Togun', 'Tofunmi', 'Cynthia', 'togun@gmail.com', 0),
(7, 'Chukwudi', 'Gabriel', 'Chukwuebuka', 'gabriel@gmail.com', 0),
(8, 'Phillips', 'Samuel', 'Ayodele', 'phillips@gmail.com', 0),
(9, 'Agbai', 'Joseph', 'Chukwuedozie', 'joseph@gmail.com', 0),
(10, 'Afolabi', 'Oreoluwa', 'Joy', 'afolabi@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(200) NOT NULL,
  `userName` varchar(225) NOT NULL,
  `userPhone` bigint(11) NOT NULL,
  `userEmail` varchar(225) NOT NULL,
  `userPass` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userPhone`, `userEmail`, `userPass`) VALUES
(1, 'Igwe Sharon ', 8186489402, 'mymailfront@gmail.com', '40dde3c47c7b42aa56cde9ad9b18fd5b'),
(2, 'Williams Omodolapo', 8143456565, 'dollyp@gmail.com', '40dde3c47c7b42aa56cde9ad9b18fd5b'),
(3, 'Balogun Moni', 8045833748, 'moni@gmail.com', 'ebf2d816727a8a792d2c413aa9aabfea'),
(4, 'Folorunsho Favour', 8143456565, 'favour@gmail.com', 'bf3834403184e9d1e6e0f8852c7a56bb');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `sname` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `oname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(100) NOT NULL,
  `designation` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `sname`, `fname`, `oname`, `email`, `password`, `designation`) VALUES
(1, 'Odim', 'Mbah', 'Eze', 'odimeze@gmail.com', '604f1fc4bf373760066d37aaec7d1164', 'staff'),
(2, 'Igwe', 'Emmanuel', 'Iheanyi', 'emma.iheanyi@gmail.com', '5efc7598470438892b7a71c0994f1216', 'parent'),
(3, 'Williams', 'Abosede', 'Glory', 'glory@gmail.com', '4b6ef8ec2a0249a04c60c41b9f6213fb', 'parent'),
(4, 'Arekete', 'Samson', 'George', 'arekete@gmail.com', '0aa63d59c2fc5cc5dadd36b3dd04c367', 'staff'),
(5, 'Balogun', 'Feranmi', 'Segun', 'segun@gmail.com', '9234be2690880cb0fb4e5875c813968a', 'parent'),
(6, 'Ogunde', 'Adeolu', 'Oludemi', 'ogunde@gmail.com', '71223ddab8702e551c7c87a94da4cac1', 'staff'),
(7, 'Ojo', 'Toluwalase', 'Ifeoluwa', 'ifeoluwa@gmail.com', '800648d3d4293056cd6cf48f63dca880', 'student'),
(8, 'Balogun', 'Olufunke', 'Moninuola', 'moninuola@gmail.com', '39a11e02666d8f0ff43351d2bcef0473', 'student'),
(10, 'Afolabi ', 'Yemisi', 'Favour', 'favour@gmail.com', 'bf3834403184e9d1e6e0f8852c7a56bb', 'parent'),
(11, 'Oguntunde', 'Bosede', 'Love', 'bosede@gmail.com', '06d9370cdc0ee8963f1201b2fc6c8d72', 'staff'),
(12, 'Babaagba', 'Kehinde', 'Peace', 'peace@gmail.com', '0d8a47e93795f064a832f5455021514d', 'staff'),
(13, 'Afolabi ', 'Oreoluwa', 'Joy', 'afolabi@gmail.com', 'b6da2daba4b096b4ace51c0166a3a68b', 'student'),
(14, 'Chukwudi', 'Gabriel', 'Chukwuebuka', 'gabriel@gmail.com', '4993269748912c994c380455c914e3b0', 'student'),
(15, 'Otuechere', 'Uche', 'Happy', 'happy@gmail.com', '134ac99888470305817ccdd690fbcdb7', 'staff'),
(16, 'Ukwagbu', 'Joel', 'Prince', 'prince@gmail.com', '131c9bdea4f5cb953d96a807723fa478', 'staff'),
(20, 'Williams', 'Chinyere', 'Peace', 'chinyere@gmail.com', 'd8b9d5d2418312dec95ddeb72499f7bb', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `voterecord`
--

CREATE TABLE `voterecord` (
  `user_id` int(4) NOT NULL,
  `policy_id` int(255) NOT NULL,
  `option_id` int(4) NOT NULL,
  `vote` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voterecord`
--

INSERT INTO `voterecord` (`user_id`, `policy_id`, `option_id`, `vote`) VALUES
(4, 11, 24, 1),
(4, 11, 24, 1),
(4, 11, 22, 1),
(4, 11, 22, 1),
(15, 13, 28, 1),
(15, 13, 30, 1),
(3, 13, 30, 1),
(3, 13, 30, 1),
(3, 12, 27, 1),
(3, 11, 24, 1),
(11, 12, 27, 1),
(11, 11, 24, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptedpolicy`
--
ALTER TABLE `acceptedpolicy`
  ADD PRIMARY KEY (`policy_id`);

--
-- Indexes for table `admincomment`
--
ALTER TABLE `admincomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptedpolicy`
--
ALTER TABLE `acceptedpolicy`
  MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admincomment`
--
ALTER TABLE `admincomment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parent_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `policy_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
