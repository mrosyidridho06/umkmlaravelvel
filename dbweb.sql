-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 03:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbweb`
--

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
(4, '2020_12_22_124741_create_tumkms_table', 1);

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
-- Table structure for table `tumkms`
--

CREATE TABLE `tumkms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tumkms`
--

INSERT INTO `tumkms` (`id`, `jenis`, `nama`, `alamat`, `kontak`, `created_at`, `updated_at`) VALUES
(2, 'Clarabelle Tillman', 'Jaquan Bednar', '2995 Becker Rue Suite 216\nDachside, MO 93337', '18557718', '2020-12-22 07:11:09', '2020-12-22 07:11:09'),
(3, 'Adriana Dooley PhD', 'Dino Lindgren', '27704 Kaylin Radial Suite 677\nWest Alleneland, IA 09682-9019', '02301570', '2020-12-22 07:11:31', '2020-12-22 07:11:31'),
(4, 'Robb Skiles MD', 'Dr. Sedrick Dare MD', '20173 Denesik Mall Suite 259\nSuzannebury, ME 38132-6205', '97445302', '2020-12-22 07:11:31', '2020-12-22 07:11:31'),
(5, 'Mrs. Mariah Kohler', 'Amie Lynch', '64332 Taya Vista Apt. 002\nSouth Dakotafurt, OR 50665', '02483177', '2020-12-22 07:11:31', '2020-12-22 07:11:31'),
(7, 'Velma Kuphal', 'Howard Lehner II', '5036 Emard Landing\nSouth Sylvan, MS 09359-5880', '57062730', '2020-12-22 07:11:31', '2020-12-22 07:11:31'),
(8, 'Karley Willms', 'Lysanne Johns', '17336 Fay Mountains Apt. 475\nPort Monica, VT 36020', '70310610', '2020-12-22 07:11:31', '2020-12-22 07:11:31'),
(9, 'Lorena Dooley', 'Quincy Grant', '43301 Amos Route\nMcCulloughport, TX 56731-7753', '63786088', '2020-12-22 07:12:04', '2020-12-22 07:12:04'),
(10, 'Clement Mueller PhD', 'Ms. Serena Kutch DVM', '5122 Braulio Skyway Suite 913\nSchaeferport, NY 39308', '90623486', '2020-12-22 07:12:04', '2020-12-22 07:12:04'),
(11, 'Hayden Franecki', 'Noelia Kirlin', '4783 Graham Junction Suite 385\nDavinstad, WV 89229', '94441253', '2020-12-22 07:12:04', '2020-12-22 07:12:04'),
(12, 'Jada Mann', 'Leonora Roob', '287 Hailey Branch\nFredborough, LA 88629', '09882386', '2020-12-22 07:12:04', '2020-12-22 07:12:04'),
(13, 'Tommie Okuneva', 'Eleonore Becker', '7814 Lowe Center Apt. 281\nEast Alene, WV 07336', '68710477', '2020-12-22 07:12:05', '2020-12-22 07:12:05'),
(14, 'Mr. Clark DuBuque II', 'Cristal Labadie PhD', '5356 Johns Falls\nNew Dashawn, DE 74365', '20591182', '2020-12-22 07:12:05', '2020-12-22 07:12:05'),
(15, 'Karson Heidenreich', 'Noelia Metz', '5234 White Circles\nLake Arch, DE 92618', '73667872', '2020-12-22 07:15:15', '2020-12-22 07:15:15'),
(16, 'Prof. Calista Howell', 'Cheyenne Thiel', '65285 Ondricka Mills\nKulasfort, IN 18770', '17315524', '2020-12-22 07:15:15', '2020-12-22 07:15:15'),
(17, 'Barrett Cole', 'Dr. Mina Considine', '980 Herminia Run\nSouth Nash, IL 17986-3177', '18581553', '2020-12-22 07:15:15', '2020-12-22 07:15:15'),
(18, 'Marilie Durgan Sr.', 'Mr. Bo Kautzer IV', '913 Block Drives Apt. 336\nPort Elmoport, NV 42043-3274', '37870706', '2020-12-22 07:23:39', '2020-12-22 07:23:39'),
(19, 'Grace Cummerata Sr.', 'Jessika Jacobs', '8075 Sauer Bridge\nNorth Carleyland, TN 97167-1308', '36658404', '2020-12-22 07:27:50', '2020-12-22 07:27:50'),
(20, 'Mrs. Cathy Little', 'Prof. Tyrese Rippin', '8841 Delphia Viaduct\nErickborough, AK 08158-0192', '97474937', '2020-12-22 07:27:57', '2020-12-22 07:27:57'),
(21, 'Melyna Hamill', 'Jammie Bruen', '74389 Friesen Union\nHoyttown, WI 31282-0911', '00314695', '2020-12-22 07:36:13', '2020-12-22 07:36:13'),
(22, 'asd', 'asd', 'weq', 'qqd', '2020-12-22 09:52:58', '2020-12-22 09:52:58'),
(24, 'lomes', 'lomes', 'melos', 'melon', '2020-12-22 18:40:34', '2020-12-22 18:40:34'),
(25, 'xzc', 'zxc', 'zxc', 'zxc', '2020-12-22 18:40:46', '2020-12-22 18:40:46'),
(26, 'asd', 'asd', 'asd', 'asd', '2020-12-22 18:53:14', '2020-12-22 18:53:14');

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
-- Indexes for table `tumkms`
--
ALTER TABLE `tumkms`
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
-- AUTO_INCREMENT for table `tumkms`
--
ALTER TABLE `tumkms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
