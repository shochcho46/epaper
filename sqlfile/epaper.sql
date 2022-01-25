-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 10:59 PM
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

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `address`, `mobile`, `email`, `other`, `owner`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'মোতাহার কমার্শিয়াল কমপ্লেক্স ; ৬ষ্ঠ তলা, জি.এল.রায় রোড ; রংপুর , বাংলাদেশ', '01712183915', 'amaderprotidin.rang@gmail.com', 'তিস্তা প্রিন্টার্স, গ্র্যান্ড হোটেল মোড়, স্টেশন রোড, রংপুর থেকে মুদ্রিত', 'মাহবুব রহমান', 'mahabubt2003@yahoo.com', '2022-01-24 22:01:46', '2022-01-24 22:01:46');

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
(4, 1, '1642882096896.jpg', 'storage/headImage/1642882096896.jpg', '2022-01-23', '1', '2022-01-22 20:04:46', '2022-01-22 20:08:16');

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
(18, '2022_01_19_165231_create_newzpics_table', 2),
(19, '2022_01_20_122431_create_advertises_table', 2),
(20, '2022_01_20_182226_create_seos_table', 2),
(21, '2022_01_21_220226_create_websettings_table', 2),
(22, '2022_01_25_031332_create_footers_table', 3),
(23, '2022_01_26_011315_create_socials_table', 4);

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
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'আমাদের প্রতিদিন', 'Daily Amader Protidin is a bengali daily newspaper in Bangladesh. The newspaper is printed and published by Amader Protidin.', 'আমাদের প্রতিদিন', '2022-01-24 22:35:59', '2022-01-24 22:35:59');

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
(2, 'instagram', 'www.text.com', '2022-01-25 20:37:58', '2022-01-25 20:37:58'),
(3, 'facebook', 'https://www.facebook.com/', '2022-01-25 20:47:35', '2022-01-25 20:47:35'),
(5, 'twitter', 'https://www.facebook.com/', '2022-01-25 21:06:02', '2022-01-25 21:06:02'),
(6, 'linkedin', 'https://www.facebook.com/', '2022-01-25 21:06:15', '2022-01-25 21:06:15'),
(7, 'youtube', 'https://www.facebook.com/dfd', '2022-01-25 21:06:25', '2022-01-25 21:32:09');

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
(1, 'Joker', 'shakib46@gmail.com', NULL, '01740303508', '$2y$10$nOzfynSuFEc9m/upLsefTe0AasPpHWAVNDJl2GAcZ/CLqu91ImFG2', 'storage/profile/1643054599.jpg', NULL, 'superadmin', 'active', NULL, '2022-01-19 05:26:21', '2022-01-24 20:03:19');

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
(1, 'bangla', 'http://127.0.0.1:8000/storage/websetting/1643057647780.png', 'http://127.0.0.1:8000/1643057647780.png', 'storage/websetting/1643058024263.png', '1643058024263.png', '20', 'আমাদের প্রতিদিন', '2022-01-24 20:42:33', '2022-01-24 21:00:24');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `head_images`
--
ALTER TABLE `head_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mainmenus`
--
ALTER TABLE `mainmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `newzpics`
--
ALTER TABLE `newzpics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websettings`
--
ALTER TABLE `websettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
