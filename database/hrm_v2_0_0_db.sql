-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 01:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm_v2.0.0_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `bankAccountNo` int(50) NOT NULL,
  `salary` int(10) NOT NULL,
  `salaryStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `fullName`, `email`, `designation`, `bankAccountNo`, `salary`, `salaryStatus`) VALUES
(1, 'test', 'tesr@gmail.com', '.NET Developer', 1, 1000000, 'Oct'),
(1, 'test', 'tesr@gmail.com', '.NET Developer', 1, 1000000, 'Oct'),
(1, 'test', 'tesr@gmail.com', '.NET Developer', 1, 1, 'Oct'),
(555, 'test', 'tesr@gmail.com', '.NET Developer', 1, 1, 'Oct'),
(1, 'test', 'tesr@gmail.com', '.NET Developer', 1, 5, 'Oct'),
(999, 'test', 'tesr@gmail.com', '.NET Developer', 1, 2, 'Oct'),
(5888, 'test', 'tesr@gmail.com', '.NET Developer', 1, 12, 'Oct'),
(5555555, 'test', 'tesr@gmail.com', '.NET Developer', 2, 1000000, 'Jan'),
(1, 'test', 'tesr@gmail.com', '.NET Developer', 2, 2, ''),
(13432, 'test', 'tesr@gmail.com', '.NET Developer', 131, 114, 'Jan'),
(4444, 'test', 'tesr@gmail.com', '.NET Developer', 1, 1000000, 'Oct'),
(341, 'test', 'tesr@gmail.com', '.NET Developer', 12312, 1000000, 'Jan'),
(341, 'test', 'tesr@gmail.com', '.NET Developer', 12312, 1000000, 'Jan'),
(341, 'test', 'tesr@gmail.com', '.NET Developer', 12312, 1000000, 'Jan'),
(34, 'test', 'tesr@gmail.com', '.NET Developer', 3, 3, 'Jan'),
(34, 'test', 'tesr@gmail.com', '.NET Developer', 3, 3, 'Jan'),
(23, 'test', 'tesr@gmail.com', '.NET Developer', 1, 1, 'Oct'),
(23, 'test', 'tesr@gmail.com', '.NET Developer', 1, 1, 'Oct'),
(4, 'test', 'tesr@gmail.com', '.NET Developer', 2, 2, 'Jan'),
(12345, 'test', 'tesr@gmail.com', '.NET Developer', 12, 1000000, 'Jan'),
(123, 'test', 'tesr@gmail.com', '.NET Developer', 123, 123, 'Jan'),
(123, 'test', 'tesr@gmail.com', '.NET Developer', 123, 1000000, 'Jan'),
(134134, 'test', 'tesr@gmail.com', '.NET Developer', 1231, 1231, 'Jan'),
(123, 'test', 'tesr@gmail.com', '.NET Developer', 123, 123, 'Jan'),
(12312, 'test', 'tesr@gmail.com', '.NET Developer', 1231, 12312, 'Jan'),
(1231, 'test', 'tesr@gmail.com', '.NET Developer', 312, 1231, 'Jan'),
(1231, 'test', 'tesr@gmail.com', '.NET Developer', 312, 1231, 'Jan'),
(1231, 'test', 'tesr@gmail.com', '.NET Developer', 123, 123, 'Jan'),
(123, 'test', 'tesr@gmail.com', '.NET Developer', 123123, 123, 'Jan'),
(123, 'test', 'tesr@gmail.com', '.NET Developer', 1231, 123123, 'Jan'),
(1231, 'test', 'tesr@gmail.com', '.NET Developer', 12313, 1, 'Jan'),
(1341, 'test', 'tesr@gmail.com', '.NET Developer', 123123, 3123, 'Jan'),
(12341, 'test', 'tesr@gmail.com', '.NET Developer', 213123, 1231, 'Jan'),
(3121, 'test', 'tesr@gmail.com', '.NET Developer', 12312, 1231, 'Jan'),
(12312, 'test', 'tesr@gmail.com', '.NET Developer', 12312, 123, 'Jan'),
(1, 'test', 'tesr@gmail.com', 'Junior Software Engineer', 1, 2, 'Oct');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'tesr@gmail.com', NULL, '$2y$10$TPjkCb8EKEcRJeELfqoXx.Kvav7y3sfqZnV/ruMz.zMpNl6MAIIiC', NULL, '2022-08-12 03:16:41', '2022-08-12 03:16:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
