-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 10:25 AM
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
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `admin_name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Sudin Shrestha');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`) VALUES
(3, 'How to bulk nicely', 'During this season of pandemic, most people worry about getting fat. Needless to say, losing fat or maintaining is the primary focus of most people. While that is true for majority, my goal as been to actually build muscle. Most of the times, I have avoided bulking because I didn’t now want to gain any bodyfat which is inevitable while trying to put on muscle. However, this time it was different. I was able to build muscle without getting too fat. I’ll talk about what worked this time, on this article.\r\n\r\nOne of the biggest problems for me while bulking is that body fat increases too with muscle. It is normal to gain some body fat while bulking. However, when you are so active in social media and create fitness content, you will surely have problem with any amount of body fat too. So, I decided to lean bulk.\r\n\r\nCalorie count is necessary while bulking. If you’re having problem in counting your calories then you can go to tdeecalculator.net which will help you get the right amount of calories you need. My main concern is always weekly progress. Whenever I get up on scale, I want my body weight to increase by 0.5-1% only and on this basis, I manipulate my meals. Let’s say if my weight this week increases by less than 0.5% i.e. 350gms (75*0.5%), then I will increase my food next week. Similarly, if my weight increases more than 1% i.e. 750gms (75*1%) then I will decrease my food next week.\r\n\r\nUsually, I don’t eat heavy in first half of my day. I save my heavy calories for evening food or dinner. I take majority of my carbs in the evening after my workout and the meal after my workout will be the heaviest.\r\n\r\nNow, let’s talk about training. We tend to follow the trend of doing same 10-12 repetitions for each and every exercise. However, it is important to change the repetition range after certain cycle. For example, for 4-5 weeks I stay at around 8-12 reps for exercises and after that cycle I would periodize my workout and train at around 15-20 reps. The variation in repetition range after certain 3-4 weeks actually helps adapt periodically to different rep ranges and helps your muscles grow. You have to stick to a certain repetition for a certain time before you switch to another repetition range.\r\n\r\nOne of the major mistakes that people do is changing exercises very frequently and the downside of this is you cannot track your exercises. Let’s say if you do bench press for chest today and did machine press next week then, you cannot compare the performance between those two. And the main principle for muscle growth is progressive overload. You should be progressing weekly. So, stick to the same exercise for couple of weeks. Usually, I stick to same exercises for 5 to 6 weeks and I would change 25-30% of my exercise in another cycle with different repetition range. Majority of my core exercises are compounds, heavy weights, and free weights.', '1618574828299768ddd0fb4ac79226f4f1ceb500e8e915b2a5fd457f05f1e73cae5ae70d5b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `price` int(255) NOT NULL,
  `duration` text NOT NULL,
  `feature_1` text NOT NULL,
  `feature_2` text NOT NULL,
  `feature_3` text NOT NULL,
  `feature_4` text NOT NULL,
  `feature_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `price`, `duration`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `feature_5`) VALUES
(2, 6000, '6 months', 'Gym', 'Cardio', 'Zumba', 'Personal Trainer', 'mobile app'),
(4, 2500, '2 months', 'GYM', 'Cardio', 'Boxing', 'Sauna', 'mobile app'),
(5, 13000, '1 Year', 'GYM', 'Boxing', 'Cardio', 'Saouna', 'Mobile App');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstName`, `lastName`, `address`, `phone`, `email`, `password`) VALUES
(1, 'Sudin wazza', 'Shrestha', 'koteshor', '9860132537', 'sudinshrestha41@gmail.com', 'shrestha'),
(22, 'Pradip', 'Rimal', 'test', '9849174600', 'admin@admin.com', '12345678'),
(24, 'Sudin', 'Shrestha', 'Ason', '9860132537', 'sudin@gmail.com', 'shrestha');

-- --------------------------------------------------------

--
-- Table structure for table `gym_details`
--

CREATE TABLE `gym_details` (
  `id` int(11) NOT NULL,
  `gymLocation` varchar(255) DEFAULT NULL,
  `gymPhone1` varchar(255) DEFAULT NULL,
  `gymPhone2` varchar(255) DEFAULT NULL,
  `gymEmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gym_details`
--

INSERT INTO `gym_details` (`id`, `gymLocation`, `gymPhone1`, `gymPhone2`, `gymEmail`) VALUES
(1, 'Narephat Nepal', '9860132538', '9860132537', 'UPF@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `directory` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `directory`, `caption`) VALUES
(8, '1609166630284b0464df025de2b4cc077da37010cb7d415cc11c70e8395a566923eeb0030f.png', NULL, NULL),
(9, '1609322285bbb98b2cbffc4b6ad0d2bbe4b041f072caa97df6f6cb00022cf40d1c3152d5be.png', NULL, NULL),
(10, '160941451744d68f79b99785f5325a7901e1a81a9aab983d1eca017bdb2457ce9ccdc02793.jpg', NULL, NULL),
(11, '160942716484426f1411670c889ebf868d06cca33e18f9a6a8fa6bea56df0ca5e77717b939.png', NULL, NULL),
(12, '161305408000fd4fc3a27be6581e93376474ac131b3e11150fbe5ab2b3a954ba0df18ecf60.png', NULL, NULL),
(13, '1613237552fc6f71b84000d337db04a587cf65b4c6b32f3a2e105f8d8f836fddac2f8ab536.png', NULL, NULL),
(14, '1614349478969e14f93bbf9ddb1de6934008fcc1baac6aed10030d8d21443abba68e3dc9fc.jpg', NULL, NULL),
(15, '16157242655452da28a1d532808503495ddd1fb704e3a0b7ddafee7fdfcd483fc6800f8680.jpg', NULL, NULL),
(16, '1617802198da58435b2ecb9da12b50783787a23e58dfa10cea23622fbcb7b323e5a80f0c2f.png', NULL, NULL),
(17, '1618547067373b6335ad87ac81564bfa2d4068327e3546d88d21d72f363c24fffc75e03136.png', NULL, NULL),
(18, '161856425086ef8da95f06b04c6e252d1898416ba8d364ee500816af96a708e3773a9f7452.png', NULL, NULL),
(19, '1618584596c28ac6e6b9afd8e955247c2fd68786fea69c8567abfadbfd26dd06887b189086.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `validFrom` date NOT NULL,
  `validTo` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstName`, `lastName`, `address`, `phone`, `email`, `password`, `validFrom`, `validTo`, `status`) VALUES
(5, 'yogesh', 'acharya', 'Ason', '9860132537', 'yogesh@gmail.com', 'yogesh123', '2021-03-09', '2021-06-09', ''),
(7, 'Sudin', 'Shrestha', 'Koteshor', '9860132537', 'sudinshrestha@gmail.com', 'sudin123', '2021-04-16', '2021-07-16', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`) VALUES
(1, 'Gym will be closed on december 25'),
(3, 'Price will be raised from poush 1. ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `memberId` int(11) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `orderDate` date NOT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productId`, `memberId`, `customerId`, `orderDate`, `orderStatus`, `quantity`, `totalAmount`) VALUES
(16, 17, NULL, 1, '2021-03-14', 'Delivered', 1, 8000),
(31, 17, NULL, 1, '2021-03-20', 'Delivered', 1, 8000),
(33, 17, NULL, 1, '2021-03-20', 'Delivered', 1, 8000),
(34, 17, NULL, 1, '2021-03-20', 'Delivered', 1, 8000),
(35, 17, 7, NULL, '2021-04-16', 'Pending', 2, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `packagequery`
--

CREATE TABLE `packagequery` (
  `id` int(11) NOT NULL,
  `classId` int(11) NOT NULL,
  `chooserName` varchar(255) NOT NULL,
  `chooserPhone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category`, `price`, `brand`) VALUES
(17, 'Questa', 'Protein: 90gm\r\nCabs: 90 gm\r\nAmino: 9 ', 'protein', '8000', 'Himalayan'),
(18, 'Jumbo', 'protein: 20gm\r\namino: 9gm', 'protein', '20000', 'Whey'),
(19, 'Nitro Tech', 'Protein: 30gm per Serving\r\namino: 9 mg\r\ncarb: 20gm', 'protein', '50000', 'Whey'),
(20, 'Whey Gold', 'Protein: 40gm\r\nCarbs: 20gm\r\nAmino 90gm\r\n ', 'protein', '6000', 'Whey');

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `imageId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`id`, `productId`, `imageId`) VALUES
(6, 17, 12),
(7, 18, 17),
(8, 19, 18),
(9, 20, 19);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `phone`, `email`, `subject`) VALUES
(2, 'yogesh', '9860132537', 'yogesh@fitness.com', 'Hello i want to know about the gym and its price, i want good protein also can you suggest me for muscles building. '),
(3, 'Dharma', '9876543210', 'dharma@gmail.com', 'Nice GYM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym_details`
--
ALTER TABLE `gym_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_ibfk_1` (`productId`),
  ADD KEY `orders_ibfk_2` (`memberId`),
  ADD KEY `orders_ibfk_3` (`customerId`);

--
-- Indexes for table `packagequery`
--
ALTER TABLE `packagequery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productimage_ibfk_1` (`productId`),
  ADD KEY `productimage_ibfk_2` (`imageId`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `gym_details`
--
ALTER TABLE `gym_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `packagequery`
--
ALTER TABLE `packagequery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `productimage`
--
ALTER TABLE `productimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`memberId`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`customerId`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productimage`
--
ALTER TABLE `productimage`
  ADD CONSTRAINT `productimage_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productimage_ibfk_2` FOREIGN KEY (`imageId`) REFERENCES `image` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
