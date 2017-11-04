-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 11:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `author_username`, `author_email`, `author_password`, `created_at`, `updated_at`) VALUES
(6, 'Sagor', 'sagor1', 'sagor@gmail.com', '$2y$10$NCSHiFvsV5fCTQzwbVeo4OCvgH/.PT5wkLUwBo1hPiVDSvEyavgnu', '2017-10-30 10:47:45', '2017-10-30 10:47:45'),
(8, 'Jowel Rana', 'Jowel321', 'jowel33@gmail.com', '$2y$10$Jmlqxz5r90RizaaiKtDi3eH/WDDVx27sNbhWyJZsbaABlyFswJMv2', '2017-10-30 11:26:25', '2017-10-30 11:26:25'),
(9, 'Hussain', 'Hussain', 'jowel44@gmail.com', '$2y$10$8tdPFYiYJ8Nv7xXpkTiIguA3gJtaCEwdKC76/hdHtQI5GgwzBGh5O', '2017-10-30 11:27:21', '2017-10-30 11:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'BUSINESS', 'Business', 1, '2017-10-29 08:57:24', '2017-10-29 08:57:24'),
(4, 'WORLD', 'World', 1, '2017-10-29 08:57:35', '2017-10-29 08:57:35'),
(5, 'FASHION', 'Fashion', 1, '2017-10-29 08:57:48', '2017-10-29 08:57:48'),
(6, 'POLITICS', 'Politics', 1, '2017-10-29 08:58:05', '2017-10-29 08:58:05'),
(7, 'SPORTS', 'Sports', 1, '2017-10-29 08:58:15', '2017-10-29 08:58:15'),
(8, 'HEALTH', 'Health', 1, '2017-10-29 08:58:26', '2017-10-29 08:58:26'),
(9, 'SCIENCE', 'Science', 1, '2017-10-29 08:58:40', '2017-10-29 08:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_name`, `comment_email`, `comment_website`, `comment_message`, `created_at`, `updated_at`) VALUES
(2, 'Jowel', 'afsd@gmail.com', 'http://bitm.com', 'fds', '2017-10-29 12:20:02', '2017-10-29 12:20:02'),
(3, 'sadfsf', 'jowel@gmail.com', 'asfsd', 'asdf', '2017-10-29 12:31:40', '2017-10-29 12:31:40'),
(4, 'Jowel Rana', 'joweljhe@yahoo.com', 'http://test.com', 'This is test comment by jowel', '2017-10-29 12:32:37', '2017-10-29 12:32:37'),
(5, 'sadfsf', 'afsd@gmail.com', 'http://bitm.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod tempor incidi dunt ut labore et dolore magna aliquat enim ad minim veniam ad minim veniam.', '2017-10-29 12:34:16', '2017-10-29 12:34:16'),
(6, 'Jowel', 'dsfsd@gmail.com', 'http://bitm.com', 'wafdsd', '2017-10-29 12:35:08', '2017-10-29 12:35:08'),
(7, 'sdas', 'sadf@gmail.com', 'safdsz', 'sadfs', '2017-10-29 12:36:08', '2017-10-29 12:36:08'),
(8, 'Sagor', 'sagor@gmail.com', 'http://sagor.com', 'lorem ipsum doller site', '2017-10-29 12:54:29', '2017-10-29 12:54:29'),
(9, 'Test Comment', 'asd@yahoo.com', 'qedas', 'wadas', '2017-10-30 08:24:29', '2017-10-30 08:24:29'),
(10, 'Jowel rana', 'test@gmail.com', 'http://yahoo.com', 'This is test comment', '2017-10-30 14:23:35', '2017-10-30 14:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jowel', 'Rana', 'jowel@gmail.com', '017542587456', 'This is test message', '2017-10-30 14:55:57', '2017-10-30 14:55:57'),
(2, 'Jowel', 'Rana', 'jowel@gmail.com', '017542587456', 'This is test message', '2017-10-30 14:58:04', '2017-10-30 14:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_25_191946_create_categories_table', 2),
(4, '2017_10_25_194344_create_news_table', 3),
(5, '2017_10_29_172415_create_comments_table', 4),
(6, '2017_10_30_154808_create_authors_table', 5),
(7, '2017_10_30_203958_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `news_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `category_id`, `news_description`, `news_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'The Exhibition Bankasy Doesn’t Want You to See', 3, 'Nulla ullamcorper orci metus, eu imperdiet quam is a dapibus ac. Curabitur tempor imperdiet quam,on nec ultricies felis lacinia ut. Nullam maximus felis augue, vel rutrum tellus luctus non', 'nes-image/4.jpg', 1, '2017-10-29 09:00:47', '2017-10-29 09:10:17'),
(4, 'Trudeau forced to backtrack on open invitation to refugees.', 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes', 'nes-image/4.jpg', 1, '2017-10-29 09:02:32', '2017-10-29 09:02:32'),
(5, 'Making sense of pre-ripped clothes.', 5, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes', 'nes-image/1.jpg', 1, '2017-10-29 09:02:58', '2017-10-29 09:02:58'),
(6, 'Disabled people must be front and centre on TV – representation matters.', 6, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes', 'nes-image/1.jpg', 1, '2017-10-29 09:03:43', '2017-10-29 09:03:43'),
(7, 'Olympic medallist Bobridge charged with drug offences.', 7, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes', 'nes-image/6.jpg', 1, '2017-10-29 09:04:18', '2017-10-29 09:04:18'),
(8, 'The five mistakes runners make - and how to stay injury free.', 8, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes', 'nes-image/2.jpg', 1, '2017-10-29 09:04:46', '2017-10-29 09:04:46'),
(9, 'Samsung hoping to extinguish Note 7 memories with new smartphone launch.', 9, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes', 'nes-image/2.jpg', 1, '2017-10-29 09:05:21', '2017-10-29 09:05:21'),
(10, 'This is test Business category news', 3, 'This is test Business category news', 'nes-image/5.jpg', 1, '2017-10-29 10:18:13', '2017-10-29 10:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jowel', 'jowel@gmail.com', '$2y$10$LAN7Tm6X6mgfO6qiIwi87uQkrbFCQ7LCRjdzdLIORr68wji98z.V6', 'aceXpNivWI9j48CoxBchQdfoHDoyGZ6pyB9kh41OHEUG8pMaeLXUU8vAjFfE', '2017-10-25 12:46:03', '2017-10-25 12:46:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
