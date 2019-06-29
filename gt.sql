-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 12:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gt`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_models`
--

CREATE TABLE `banner_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_models`
--

INSERT INTO `banner_models` (`id`, `title`, `text`, `allimg`, `created_at`, `updated_at`) VALUES
(6, 'Hello web came', 'Ok is done .Ok is done Ok is done', 'all_img/lM177.jpg', '2019-06-25 05:15:47', NULL),
(7, 'regyre', 'thth', 'all_img/BqdOt.jpg', '2019-06-28 23:18:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biometrics`
--

CREATE TABLE `biometrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `allimg1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biometrics`
--

INSERT INTO `biometrics` (`id`, `title`, `title1`, `text`, `text1`, `allimg`, `allimg1`, `created_at`, `updated_at`) VALUES
(1, 'ewew', 'weqrwerew', 'rwerwe', 'ewrwer', 'all_img/p6P1X.jpg', 'all_img/p6P1X.jpg', '2019-06-29 01:11:34', NULL),
(3, 'gtytrytr', 'ut7yiyu8iyu', 'ioouil', 'uiopuilio', 'all_img/YtOG4.jpg', 'all_img/YtOG4.jpg', '2019-06-29 01:11:59', NULL),
(4, 'defew', 'gfreger', 'thtrhtr', 'trhtrhtr', 'all_img/9sOqw.jpg', 'all_img/o1DwE.jpg', '2019-06-29 01:15:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cad_solution_models`
--

CREATE TABLE `cad_solution_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cad_solution_models`
--

INSERT INTO `cad_solution_models` (`id`, `title`, `text`, `allimg`, `created_at`, `updated_at`) VALUES
(10, 'Picture Icon', '17081 picture icons. Free vector icons in SVG, PSD, PNG, EPS and ICON FONT', 'all_img/awp6Z.jpg', '2019-06-29 00:49:41', NULL),
(11, 'Gad vector', 'good  picture sides. Gad vector icons in TTC, PSD, DDL, EPS and ICON FONT', 'all_img/XNdqU.jpg', '2019-06-29 00:51:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_models`
--

CREATE TABLE `event_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_models`
--

INSERT INTO `event_models` (`id`, `title`, `text`, `allimg`, `created_at`, `updated_at`) VALUES
(5, 'BASIS MEMBERSHIP ACHIEVEMENT', 'GENUINE TECHNOLOGY & RESEARCH LTD. is now member of Bangladesh Association of Software and Information Services (BASIS)', 'all_img/rD4sT.jpg', '2019-06-29 03:52:47', NULL),
(6, 'BASIS MEMBERSHIP 2', 'GENUINE TECHNOLOGY & RESEARCH LTD. is now member of Bangladesh Association of Software and Information Services (BASIS)', 'all_img/Pi1o1.jpg', '2019-06-29 03:53:43', NULL),
(7, 'BASIS MEMBERSHIP', 'GENUINE TECHNOLOGY & RESEARCH LTD. is now member of Bangladesh Association of Software and Information Services (BASIS)', 'all_img/QgSng.jpg', '2019-06-29 03:54:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fire_models`
--

CREATE TABLE `fire_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `allimg1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fire_models`
--

INSERT INTO `fire_models` (`id`, `title`, `title1`, `allimg`, `allimg1`, `created_at`, `updated_at`) VALUES
(2, 'one', 'two', 'all_img/gMBJe.jpg', 'all_img/ZFdTc.jpg', '2019-06-29 03:27:10', NULL),
(3, 'trtr', 'rtr', 'all_img/Vq0Bn.jpg', 'all_img/p4XZy.jpg', '2019-06-29 03:30:51', NULL),
(4, '2344', NULL, 'all_img/3QiQb.jpg', 'default.png', '2019-06-29 03:40:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `g_t_solution_models`
--

CREATE TABLE `g_t_solution_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `g_t_solution_models`
--

INSERT INTO `g_t_solution_models` (`id`, `title`, `text`, `allimg`, `created_at`, `updated_at`) VALUES
(2, 'jou', 'df', 'all_img/ruSCe.png', '2019-06-26 00:47:27', '2019-06-27 01:17:40'),
(4, 'hrgr', 'grg', 'all_img/xPbf2.jpg', '2019-06-28 23:52:49', NULL),
(5, 'gtgtgt', 'tgtgtgtgt', 'all_img/z13PB.jpg', '2019-06-28 23:59:22', NULL);

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
(4, '2019_06_25_084504_create_banner_models_table', 2),
(6, '2019_06_25_112442_create_service_models_table', 3),
(8, '2019_06_26_053047_create_solution_models_table', 4),
(9, '2019_06_26_060327_create_g_t_solution_models_table', 5),
(10, '2019_06_26_075547_create_cad_solution_models_table', 6),
(12, '2019_06_26_105247_create_ups_models_table', 8),
(14, '2019_06_27_062514_create_event_models_table', 10),
(15, '2019_06_27_074407_create_partner_models_table', 11),
(19, '2019_06_26_092654_create_biometrics_table', 12),
(20, '2019_06_27_052435_create_fire_models_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `partner_models`
--

CREATE TABLE `partner_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_models`
--

INSERT INTO `partner_models` (`id`, `allimg`, `created_at`, `updated_at`) VALUES
(2, 'all_img/4M6VF.jpg', '2019-06-27 02:02:33', NULL),
(3, 'all_img/a8Cwc.jpg', '2019-06-29 04:02:06', NULL),
(4, 'all_img/6mdzX.jpg', '2019-06-29 04:02:21', NULL);

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
-- Table structure for table `service_models`
--

CREATE TABLE `service_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ttile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_models`
--

INSERT INTO `service_models` (`id`, `ttile`, `link`, `allimg`, `created_at`, `updated_at`) VALUES
(2, 'Headline', 'qweqer', 'all_img/ux2fT.jpg', '2019-06-25 05:57:19', NULL),
(3, 'No head', 'qwew', 'all_img/ojNkn.jpg', '2019-06-25 05:57:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `solution_models`
--

CREATE TABLE `solution_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solution_models`
--

INSERT INTO `solution_models` (`id`, `title`, `allimg`, `created_at`, `updated_at`) VALUES
(2, 'Solo', 'all_img/D8aME.jpg', '2019-06-25 23:59:52', NULL),
(3, 'Dolo', 'all_img/PlVIM.jpg', '2019-06-29 03:41:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ups_models`
--

CREATE TABLE `ups_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ups_models`
--

INSERT INTO `ups_models` (`id`, `title`, `allimg`, `created_at`, `updated_at`) VALUES
(2, 'tht', 'all_img/I0XAY.jpg', '2019-06-26 06:08:50', NULL),
(3, 'XT 000.', 'all_img/Z7b4K.jpg', '2019-06-29 03:05:31', NULL),
(4, 'okay nicv efine', 'all_img/rfIPT.jpg', '2019-06-29 03:12:15', NULL),
(5, 'CCTV', 'all_img/UmkeB.jpg', '2019-06-29 03:12:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '789', 'admin@admin.com', NULL, '$2y$10$h9msdvXeGW7tchtHP4tsK.D1mOiyGNfA3CaliiLErN2hge3uUV0Ou', NULL, '2019-06-23 23:19:00', '2019-06-23 23:19:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_models`
--
ALTER TABLE `banner_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biometrics`
--
ALTER TABLE `biometrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cad_solution_models`
--
ALTER TABLE `cad_solution_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_models`
--
ALTER TABLE `event_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_models`
--
ALTER TABLE `fire_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_t_solution_models`
--
ALTER TABLE `g_t_solution_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_models`
--
ALTER TABLE `partner_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `service_models`
--
ALTER TABLE `service_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution_models`
--
ALTER TABLE `solution_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ups_models`
--
ALTER TABLE `ups_models`
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
-- AUTO_INCREMENT for table `banner_models`
--
ALTER TABLE `banner_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `biometrics`
--
ALTER TABLE `biometrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cad_solution_models`
--
ALTER TABLE `cad_solution_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event_models`
--
ALTER TABLE `event_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fire_models`
--
ALTER TABLE `fire_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `g_t_solution_models`
--
ALTER TABLE `g_t_solution_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `partner_models`
--
ALTER TABLE `partner_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_models`
--
ALTER TABLE `service_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solution_models`
--
ALTER TABLE `solution_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ups_models`
--
ALTER TABLE `ups_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
