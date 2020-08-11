-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 07:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_block`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `subtitle`, `description`, `created_at`, `updated_at`) VALUES
(5, 'sfgegeg', 'cvfdbv', 'vderferfref  fgrg fff', '2020-07-03 00:57:30', '2020-07-04 03:22:54'),
(6, 'addf', 'adfdf', 'adsf here', '2020-07-03 02:56:02', '2020-07-03 05:17:38'),
(7, 'adfdf', 'dafdf', 'dafwdf  sdfokjdskfndskf asodfkdsofk xckdfjiksdjf', '2020-07-03 02:56:13', '2020-07-04 11:23:06'),
(8, 'edwef', 'daf', 'dafwfew', '2020-07-03 02:56:23', '2020-07-03 02:56:23'),
(12, 'dddsf', 'dfsdf', 'cvfg', '2020-07-03 02:57:25', '2020-07-03 02:57:25'),
(13, 'xzczdcdsf', 'vsdfsfg', 'cvvfsgr', '2020-07-03 02:57:45', '2020-07-03 02:57:45'),
(14, 'fgegeg', 'gege', 'egegeg', '2020-07-03 06:41:05', '2020-07-03 06:41:05'),
(15, 'dgergeg', 'fgdge', 'dfveegeg', '2020-07-03 06:41:53', '2020-07-03 06:41:53'),
(16, 'sfdsg', 'sdfdsf', 'sdfsf', '2020-07-03 06:42:36', '2020-07-03 06:42:36'),
(17, 'sffsg', 'sdfsdfsf', 'sdfsdff', '2020-07-04 11:22:14', '2020-07-04 11:22:14'),
(18, 'dafwef', 'wdfwfwf', 'dfdsffwrfwrgf wefwr wrfwrgf wefwef wfwerf wefwef wr', '2020-07-04 11:24:18', '2020-07-04 11:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2020_07_02_101605_create_abouts_table', 2),
(5, '2020_07_03_145003_create_servicecategorys_table', 3),
(6, '2020_07_03_194903_create_servicelists_table', 4);

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
-- Table structure for table `servicecategorys`
--

CREATE TABLE `servicecategorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicecategorys`
--

INSERT INTO `servicecategorys` (`id`, `service_name`, `service_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'past control', 'sdfsfwrfwgfwrgffg kkk', 0, '2020-07-03 09:52:41', '2020-07-03 11:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `servicelists`
--

CREATE TABLE `servicelists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serv_cate_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicelists`
--

INSERT INTO `servicelists` (`id`, `serv_cate_id`, `title`, `description`, `duration`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'machi', 'machi manra', '3-6 hours', '366', '2020-07-04 02:08:09', '2020-07-04 02:08:09'),
(2, 2, 'room cleaning', 'this is room cleaning service', '34hours', '111', '2020-07-04 02:17:51', '2020-07-04 03:09:02'),
(3, 2, 'sgsgf', 'cfsdf', '34hh', '5000', '2020-07-04 02:18:17', '2020-07-04 03:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', '1234567890', 'admin', 'admin@gmail.com', NULL, '$2y$10$E9FwUx6C13AewBrnqspl4O1QoYF1CNuSTyWc0xjUgrWtzmihT6MDi', NULL, '2020-07-01 04:52:16', '2020-07-02 03:33:14'),
(5, 'nazrum', '242333232323', NULL, 'nazrul@gmail.com', '2020-07-05 04:23:28', '$2y$10$kFDRdjpDcj1aV1L/aeojg.cY6sXIdqDS91IE2uc5k7YyiNxvBtNUK', NULL, '2020-07-05 04:19:58', '2020-07-05 04:23:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `servicecategorys`
--
ALTER TABLE `servicecategorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicelists`
--
ALTER TABLE `servicelists`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicecategorys`
--
ALTER TABLE `servicecategorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `servicelists`
--
ALTER TABLE `servicelists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
