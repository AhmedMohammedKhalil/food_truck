-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 06:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_trucks`
--
CREATE DATABASE IF NOT EXISTS `food_trucks` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `food_trucks`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'الأدمن', 'admin@gmail.com', '$2y$10$/KWPNBjIbQMU7expzACMtuRnmEMcV7l4iu8tcOElLARetp3EBt7bu', NULL, '2022-04-17 16:18:16', '2022-04-17 16:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

DROP TABLE IF EXISTS `follows`;
CREATE TABLE IF NOT EXISTS `follows` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ft_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `readable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `follows_ft_id_foreign` (`ft_id`),
  KEY `follows_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `ft_id`, `user_id`, `readable`, `created_at`, `updated_at`) VALUES
(17, 1, 2, 1, '2022-04-27 10:32:30', '2022-04-28 06:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `food_trucks`
--

DROP TABLE IF EXISTS `food_trucks`;
CREATE TABLE IF NOT EXISTS `food_trucks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `worktime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `food_trucks_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_trucks`
--

INSERT INTO `food_trucks` (`id`, `name`, `status`, `phone`, `license_no`, `facebook`, `description`, `worktime`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'PATTY BURGER ', '1', '69532145', '123456789', NULL, 'نقدم جميع انواع البرجر', 'جميع الايام من الساعه 11 صباحا ل 11 مساءا', 1, '2022-04-18 04:36:01', '2022-04-19 05:15:22'),
(2, 'Botata', '1', '65384921', '235164251', NULL, 'نقدم افخم انواع البطاطا ', 'جميع الايام ويفتح من الساعه 6 صباحا الى 11 مساءا', 4, '2022-04-18 04:36:01', '2022-04-19 05:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_ft_id_foreign` (`ft_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `image_type`, `ft_id`, `created_at`, `updated_at`) VALUES
(2, 'truck1.png', 'logo', 1, '2022-04-18 07:00:22', '2022-04-18 07:00:22'),
(14, 'truck1.jpg', 'menu', 1, '2022-04-18 09:12:23', '2022-04-18 09:12:23'),
(15, 'truck2.jpg', 'menu', 1, '2022-04-18 09:12:24', '2022-04-18 09:12:24'),
(16, 'truck1.png', 'logo', 2, '2022-04-18 07:00:22', '2022-04-18 07:00:22'),
(17, 'truck1.jpg', 'menu', 2, '2022-04-18 09:12:23', '2022-04-18 09:12:23'),
(18, 'truck2.jpg', 'menu', 2, '2022-04-18 09:12:24', '2022-04-18 09:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_04_07_010618_create_food_trucks_table', 1),
(4, '2022_04_07_010619_create_regions_table', 1),
(5, '2022_04_07_010720_create_truck_locations_table', 1),
(6, '2022_04_07_010827_create_images_table', 1),
(7, '2022_04_07_010854_create_rates_table', 1),
(8, '2022_04_07_011006_create_admins_table', 1),
(10, '2022_04_07_151810_create_follows_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rate` double NOT NULL,
  `ft_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rates_ft_id_foreign` (`ft_id`),
  KEY `rates_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `rate`, `ft_id`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 3, 1, 2, '2022-04-27 10:33:41', '2022-04-27 10:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'الجهراء', '2022-04-17 23:18:56', '2022-04-17 23:26:53'),
(3, 'الكويت', '2022-04-19 02:44:41', '2022-04-19 02:44:41'),
(4, 'صبية', '2022-04-19 02:45:19', '2022-04-19 02:45:19'),
(5, 'خيران', '2022-04-19 02:45:19', '2022-04-19 02:45:19'),
(6, 'الفحيحيل', '2022-04-19 02:45:19', '2022-04-19 02:45:19'),
(7, 'السالمية', '2022-04-19 02:45:19', '2022-04-19 02:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `truck_locations`
--

DROP TABLE IF EXISTS `truck_locations`;
CREATE TABLE IF NOT EXISTS `truck_locations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `streat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ft_id` int(10) UNSIGNED NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `truck_locations_ft_id_foreign` (`ft_id`),
  KEY `truck_locations_region_id_foreign` (`region_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `truck_locations`
--

INSERT INTO `truck_locations` (`id`, `streat`, `block`, `house`, `ft_id`, `region_id`, `created_at`, `updated_at`) VALUES
(2, 'شارع البلاجات', 'بلوك رقم 25', 'مسجد الشاطئ', 1, 7, '2022-04-19 01:48:06', '2022-04-19 04:05:59'),
(3, 'شارع سامى احمد المنيس', 'بلوك رقم 8', 'موقف سيارات', 2, 3, '2022-04-19 01:48:06', '2022-04-19 04:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'حامد طلال', 'owner', 'hamed@gmail.com', '$2y$10$mECZA3Z/2SsXFjtwKvdU3ObNNSxZyqOnA3dQnLWc84eibmFmoZW/G', NULL, '2022-04-18 02:22:07', '2022-04-18 02:22:07'),
(2, 'رشيد عبدالله', 'user', 'rasheed@gmail.com', '$2y$10$uWl8O2PSecPHpR.KuX0O8OC31n.zt6.0OMpizjVDBWtrh2ViG62gu', NULL, '2022-04-26 19:47:23', '2022-04-26 19:47:23'),
(4, 'جاسم باسم', 'owner', 'g.basem@gmail.com', '$2y$10$mECZA3Z/2SsXFjtwKvdU3ObNNSxZyqOnA3dQnLWc84eibmFmoZW/G', NULL, '2022-04-18 02:22:07', '2022-04-18 02:22:07'),
(5, 'فارس عبدالمجيد', 'user', 'fares@gmail.com', '$2y$10$uWl8O2PSecPHpR.KuX0O8OC31n.zt6.0OMpizjVDBWtrh2ViG62gu', NULL, '2022-04-26 19:47:23', '2022-04-26 19:47:23'),
(6, 'فالح فهمى', 'user', 'faleh@gmail.com', '$2y$10$RjPQcQM7.V5gQWXR0yWIO.ElwBH8lxtv2jNBc6cqg0NdrCiUVt2We', NULL, '2022-04-26 19:50:16', '2022-04-26 19:50:16');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_ft_id_foreign` FOREIGN KEY (`ft_id`) REFERENCES `food_trucks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follows_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `food_trucks`
--
ALTER TABLE `food_trucks`
  ADD CONSTRAINT `food_trucks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ft_id_foreign` FOREIGN KEY (`ft_id`) REFERENCES `food_trucks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ft_id_foreign` FOREIGN KEY (`ft_id`) REFERENCES `food_trucks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `truck_locations`
--
ALTER TABLE `truck_locations`
  ADD CONSTRAINT `truck_locations_ft_id_foreign` FOREIGN KEY (`ft_id`) REFERENCES `food_trucks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `truck_locations_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
