-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2024 at 03:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(1, 'Khoá học Front-End', 'Front-End Developer', '/storages/categories/17067815742.png'),
(2, 'Khoá học Back-End', 'Back-End Developer', '/storages/categories/17067816066.png');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `register_number` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `course_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`name`, `description`, `price`, `status`, `image`, `register_number`, `id`, `discount`, `course_code`) VALUES
('HTML CSS Từ Zero đến Hero', 'Trong khóa này chúng ta sẽ cùng nhau xây dựng giao diện 2 trang web là The Band & Shopee.', 1900000, 1, '/storages/courses/17067816462.png', 0, 45, 1299999, 3633),
('JavaScript Cơ Bản', 'Học Javascript cơ bản phù hợp cho người chưa từng học lập trình. Với hơn 100 bài học và có bài tập thực hành sau mỗi bài học.', 1290000, 1, '/storages/courses/17067816541.png', 0, 46, 999999, 2168),
('JavaScript Nâng Cao', 'Hiểu sâu hơn về cách Javascript hoạt động, tìm hiểu về IIFE, closure, reference types, this keyword, bind, call, apply, prototype, ...', 2000000, 1, '/storages/courses/17067816727.png', 0, 47, 890000, 2566),
('SASS', 'Khóa học vẫn có thêm bài tập để giúp bạn dễ dàng sử dụng thành thạo ngôn ngữ Sass.', 400000, 1, '/storages/courses/17067816795.png', 0, 48, 299999, 7633),
('ReactJS', 'Khóa học ReactJS từ cơ bản tới nâng cao, kết quả của khóa học này là bạn có thể làm hầu hết các dự án thường gặp với ReactJS. Cuối khóa học này bạn sẽ sở hữu một dự án giống Tiktok.com, bạn có thể tự tin đi xin việc khi nắm chắc các kiến thức được chia sẻ trong khóa học này.', 1900000, 1, '/storages/courses/17067816888.png', 0, 50, 890000, 1877),
('NodeJS Express', 'Học Back-end với Node & ExpressJS framework, hiểu các khái niệm khi làm Back-end và xây dựng RESTful API cho trang web.', 999999, 1, '/storages/courses/17067816966.png', 0, 51, 790000, 6190);

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(11) NOT NULL,
  `course_code` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `course_code`, `category_id`) VALUES
(154, 2168, 1),
(155, 2168, 2),
(156, 2566, 2),
(157, 7633, 1),
(158, 7633, 2),
(159, 1877, 1),
(160, 6190, 2),
(241, 3633, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `course_code` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`name`, `url`, `course_code`, `id`) VALUES
('Cấu trúc file HTML', 'https://www.youtube.com/embed/LYnrFSGLCl8?si=DyoHSjDYeQDGhXt5', 3633, 6),
('Comments trong HTML', 'https://www.youtube.com/embed/JG0pdfdKjgQ?si=tCa0drfSf4_1ybsD', 3633, 7),
('Attributes trong HTML', 'https://www.youtube.com/embed/UYpIh5pIkSA?si=Ds7NIwIJJiDOiLpw', 3633, 8),
('ID và Class trong CSS selectors', 'https://www.youtube.com/embed/4J6d8cr0X48?si=gmRFEEWnOjyLk3Hm', 3633, 9),
('Sử dụng JS trong file HTML', 'https://www.youtube.com/embed/W0vEUmyvthQ?si=OA88GwAGHOH4i-42', 2168, 10),
('Khai báo biến', 'https://www.youtube.com/embed/CLbx37dqYEI?si=62_uEmJDCyVjL9kj', 2168, 11),
('Comments', 'https://www.youtube.com/embed/xRpXBEq6TOY?si=qrSCrf0xeMtlCs7S', 2168, 12),
('Một số hàm built-in', 'https://www.youtube.com/embed/rSV33HGotgE?si=NmKZwq9JO_LK8h2J', 2168, 13),
('IIFE trong Javascript là gì?', 'https://www.youtube.com/embed/N-3GU1F1UBY?si=gBlVUhd2J3HKV3co', 2566, 14),
('Scope trong Javascript?', 'https://www.youtube.com/embed/5N8vz_VmszE?si=e1hAvhaMDnj3jcBO', 2566, 15),
('Promise trong Javascript?', 'https://www.youtube.com/embed/_4F8ihblZFU?si=4BgD3YCFH6IPCPuf', 2566, 16),
('Arrow function trong Javascript ES6', 'https://www.youtube.com/embed/9QeNLypIiZs?si=qgZ8J7h7GkjJp837', 2566, 17),
('Cài đặt và sử dụng SASS', 'https://www.youtube.com/embed/UIHO6QXj0ms?si=JU2Yd6KM_D8Vr98c', 7633, 18),
('React-DOM là gì?', 'https://www.youtube.com/embed/zWOREJxiRVY?si=KiSTatnx35aNAbaN', 1877, 19),
('JSX là gì? Tại sao cần JSX?', 'https://www.youtube.com/embed/samx2yC15Pg?si=0KOSoPtYBLZUak_L', 1877, 20),
('React element types', 'https://www.youtube.com/embed/uGopxH14kYA?si=bb0aIrtPjRP6j1QA', 1877, 21),
('Props là gì? Dùng props khi nào?', 'https://www.youtube.com/embed/TvE2FuYiuXo?si=HsneRF8-jlFXPZi5', 1877, 22),
('Giới thiệu React Hooks', 'https://www.youtube.com/embed/5ismRwx4ebM?si=y6LyyA5Am4BwupG4', 1877, 23),
('HTTP protocol', 'https://www.youtube.com/embed/SdcdneSdoV4?si=K2pyvNO3zgOah_-A', 6190, 24),
('SSR & CSR', 'https://www.youtube.com/embed/HLEu57iLrRo?si=0WxhaRclII73oMrg', 6190, 25),
('Install NodeJS', 'https://www.youtube.com/embed/CcSuYLjKW3g?si=XXGBxmSCrAPYnPUJ', 6190, 26),
('Install express', 'https://www.youtube.com/embed/tfQXZ8jES6A?si=DKfMBHzzPHAGKZwD', 6190, 27),
('Install nodemon & inspector', 'https://www.youtube.com/embed/zCFOn4YXr00?si=tMOi3yMOgKP_KkPo', 6190, 28);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `course_code` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `course_code`, `user_id`, `order_date`) VALUES
(1, 1706688304, 3633, 1, '2024-01-31 09:05:56'),
(3, 1706794380, 6190, 1, '2024-02-01 14:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(256) DEFAULT NULL,
  `password` varchar(55) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `address`, `password`, `gender`, `role`, `status`, `image`) VALUES
(1, 'Vũ Quốc Huy', '0985906005', 'vqh8124@gmail.com', 'Hà Nam', 'pass', 1, 1, 1, NULL),
(3, 'Lê Thanh Hằng', NULL, 'huyne@gmail.com', NULL, '1234', NULL, 1, 2, NULL),
(8, 'Admin', NULL, 'admin', NULL, 'pass', NULL, 2, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
