-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 10:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertises`
--

INSERT INTO `advertises` (`id`, `pic_name`, `pic_location`, `addtype`, `created_at`, `updated_at`) VALUES
(1, '1643994028671.png', 'storage/advertise/1643994028671.png', 'hbanner', '2022-02-04 17:00:28', '2022-02-04 17:00:28'),
(2, '1643994057381.jpg', 'storage/advertise/1643994057381.jpg', 'fbanner', '2022-02-04 17:00:57', '2022-02-04 17:00:57'),
(3, '1643994084472.jpg', 'storage/advertise/1643994084472.jpg', 'normal', '2022-02-04 17:01:24', '2022-02-04 17:01:24'),
(4, '1643994103190.png', 'storage/advertise/1643994103190.png', 'normal', '2022-02-04 17:01:43', '2022-02-04 17:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `head_images`
--

CREATE TABLE `head_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pic_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `showdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `head_images`
--

INSERT INTO `head_images` (`id`, `user_id`, `pic_name`, `pic_location`, `showdate`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, '1642882096896.jpg', 'storage/headImage/1642882096896.jpg', '2022-01-27', '1', '2022-01-22 20:04:46', '2022-01-26 20:17:16'),
(5, 1, '1643575911175.jpg', 'storage/headImage/1643575911175.jpg', '2022-02-01', '1', '2022-01-30 20:51:51', '2022-02-01 20:36:56'),
(6, 1, '1643747417302.jpg', 'storage/headImage/1643747417302.jpg', '2022-02-01', '1', '2022-02-01 20:30:17', '2022-02-01 20:30:17'),
(7, 1, '1643979386572.jpg', 'storage/headImage/1643979386572.jpg', '2022-02-04', '1', '2022-02-04 12:56:26', '2022-02-04 12:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenus`
--

CREATE TABLE `mainmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_05_210655_create_profiles_table', 1),
(5, '2021_06_06_024051_create_mainmenus_table', 1),
(6, '2021_06_06_024415_create_submenus_table', 1),
(7, '2022_01_18_021931_create_head_images_table', 1),
(24, '2022_01_19_165231_create_newzpics_table', 2),
(25, '2022_01_20_122431_create_advertises_table', 2),
(26, '2022_01_20_182226_create_seos_table', 2),
(27, '2022_01_21_220226_create_websettings_table', 2),
(28, '2022_01_25_031332_create_footers_table', 2),
(29, '2022_01_26_011315_create_socials_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newzpics`
--

CREATE TABLE `newzpics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pic_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `showdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` int(191) NOT NULL,
  `colsize` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newzpics`
--

INSERT INTO `newzpics` (`id`, `user_id`, `pic_name`, `pic_location`, `showdate`, `serial`, `colsize`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '1643745835923.jpg', 'storage/newzpic/1643745835923.jpg', '2022-02-02', 1, 'width3', '1', '2022-02-01 20:03:55', '2022-02-01 20:03:55'),
(2, 1, '1643745933657.jpg', 'storage/newzpic/1643745933657.jpg', '2022-02-02', 2, 'width1', '1', '2022-02-01 20:05:33', '2022-02-01 20:05:33'),
(3, 1, '1643746812443.jpg', 'storage/newzpic/1643746812443.jpg', '2022-02-02', 3, 'width3', '1', '2022-02-01 20:20:13', '2022-02-01 20:20:13'),
(6, 1, '1643747003449.jpg', 'storage/newzpic/1643747003449.jpg', '2022-02-02', 6, 'width1', '1', '2022-02-01 20:23:23', '2022-02-01 20:23:23'),
(7, 1, '1643747132583.jpg', 'storage/newzpic/1643747132583.jpg', '2022-02-02', 7, 'width1', '1', '2022-02-01 20:25:32', '2022-02-01 20:25:32'),
(8, 1, '1643747173988.jpg', 'storage/newzpic/1643747173988.jpg', '2022-02-02', 8, 'width3', '1', '2022-02-01 20:26:13', '2022-02-01 20:26:13'),
(9, 1, '1643980243322.jpg', 'storage/newzpic/1643980243322.jpg', '2022-02-04', 1, 'width1', '1', '2022-02-04 12:56:51', '2022-02-04 13:10:43'),
(10, 1, '1643980413744.jpg', 'storage/newzpic/1643980413744.jpg', '2022-02-04', 2, 'width4', '1', '2022-02-04 13:00:47', '2022-02-04 13:13:33'),
(11, 1, '1643979790505.jpg', 'storage/newzpic/1643979790505.jpg', '2022-02-04', 3, 'width1', '1', '2022-02-04 13:03:10', '2022-02-04 13:03:10'),
(12, 1, '1643979940797.jpg', 'storage/newzpic/1643979940797.jpg', '2022-02-04', 4, 'width1', '1', '2022-02-04 13:05:41', '2022-02-04 13:05:41'),
(13, 1, '1643993531392.jpg', 'storage/newzpic/1643993531392.jpg', '2022-02-04', 5, 'width1', '1', '2022-02-04 13:05:59', '2022-02-04 16:52:11'),
(16, 1, '1643984184472.jpg', 'storage/newzpic/1643984184472.jpg', '2022-02-04', 8, 'width1', '1', '2022-02-04 14:16:24', '2022-02-04 16:21:21'),
(17, 1, '1643984255793.jpg', 'storage/newzpic/1643984255793.jpg', '2022-02-04', 6, 'width4', '1', '2022-02-04 14:17:35', '2022-02-04 16:16:31'),
(18, 1, '1643984377969.jpg', 'storage/newzpic/1643984377969.jpg', '2022-02-04', 11, 'width1', '1', '2022-02-04 14:19:37', '2022-02-04 16:35:31'),
(19, 1, '1643984503311.jpg', 'storage/newzpic/1643984503311.jpg', '2022-02-04', 7, 'width2', '1', '2022-02-04 14:21:43', '2022-02-04 16:16:00'),
(20, 1, '1643984739476.jpg', 'storage/newzpic/1643984739476.jpg', '2022-02-04', 13, 'width1', '1', '2022-02-04 14:25:39', '2022-02-04 16:39:25'),
(21, 1, '1643984898802.jpg', 'storage/newzpic/1643984898802.jpg', '2022-02-04', 9, 'width2', '1', '2022-02-04 14:28:18', '2022-02-04 16:26:03'),
(22, 1, '1643993454371.jpg', 'storage/newzpic/1643993454371.jpg', '2022-02-04', 10, 'width2', '1', '2022-02-04 14:35:01', '2022-02-04 17:02:41'),
(24, 1, '1643985444367.jpg', 'storage/newzpic/1643985444367.jpg', '2022-02-04', 12, 'width2', '1', '2022-02-04 14:37:24', '2022-02-04 16:38:35'),
(25, 1, '1643992886584.jpg', 'storage/newzpic/1643992886584.jpg', '2022-02-04', 14, 'width1', '1', '2022-02-04 16:41:26', '2022-02-04 16:41:26'),
(26, 1, '1643992960469.jpg', 'storage/newzpic/1643992960469.jpg', '2022-02-04', 15, 'width3', '1', '2022-02-04 16:42:40', '2022-02-04 16:56:30'),
(27, 1, '1643993589450.jpg', 'storage/newzpic/1643993589450.jpg', '2022-02-04', 16, 'width1', '1', '2022-02-04 16:53:09', '2022-02-04 16:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `keyword`, `description`, `title`, `created_at`, `updated_at`) VALUES
(1, 'আমাদের প্রতিদিন', 'আমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিনআমাদের প্রতিদিন', 'আমাদের প্রতিদিন', '2022-02-01 19:14:01', '2022-02-01 19:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/', '2022-02-04 17:06:09', '2022-02-04 17:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mainmenu_id` bigint(20) UNSIGNED NOT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resetcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `mobile`, `password`, `location`, `resetcode`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joker', 'shakib46@gmail.com', NULL, '01740303508', '$2y$10$nOzfynSuFEc9m/upLsefTe0AasPpHWAVNDJl2GAcZ/CLqu91ImFG2', 'storage/profile/1643054599.jpg', NULL, 'superadmin', 'active', NULL, '2022-01-19 05:26:21', '2022-01-24 20:03:19'),
(2, 'Test Admin', 'a@a.com', NULL, '11111111111', '$2y$10$2Ke1iprFVdy8h2cuxrlus.Zdco9z6p.a5VuuyXH7c4xo5chAuNGza', NULL, NULL, 'admin', 'active', NULL, '2022-01-30 20:38:00', '2022-01-30 20:38:00'),
(3, 'sub admin', 's@s.com', NULL, '22222222', '$2y$10$of45cRboTL/rVQFggrstFOZPlWMZ4MIvUBwC6v4QLoYv4gsGtOUeq', NULL, NULL, 'subadmin', 'active', NULL, '2022-01-30 20:38:34', '2022-01-30 20:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `websettings`
--

CREATE TABLE `websettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picperpage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websettings`
--

INSERT INTO `websettings` (`id`, `language`, `fav_location`, `fav_name`, `logo_location`, `logo_name`, `picperpage`, `logo_text`, `created_at`, `updated_at`) VALUES
(3, 'bangla', 'storage/websetting/1643744952871.png', '1643744952871.png', 'storage/websetting/1643744952642.png', '1643744952642.png', '20', 'আমাদের প্রতিদিন', '2022-02-01 19:49:12', '2022-02-04 17:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head_images`
--
ALTER TABLE `head_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head_images_user_id_foreign` (`user_id`);

--
-- Indexes for table `mainmenus`
--
ALTER TABLE `mainmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newzpics`
--
ALTER TABLE `newzpics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newzpics_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_mainmenu_id_foreign` (`mainmenu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `websettings`
--
ALTER TABLE `websettings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `head_images`
--
ALTER TABLE `head_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mainmenus`
--
ALTER TABLE `mainmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `newzpics`
--
ALTER TABLE `newzpics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `websettings`
--
ALTER TABLE `websettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `head_images`
--
ALTER TABLE `head_images`
  ADD CONSTRAINT `head_images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `newzpics`
--
ALTER TABLE `newzpics`
  ADD CONSTRAINT `newzpics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_mainmenu_id_foreign` FOREIGN KEY (`mainmenu_id`) REFERENCES `mainmenus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
