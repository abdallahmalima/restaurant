-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 04:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_web1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Quisque auctor lectus interdum nisl accumsan venenatis.', 'Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.', '2021-10-21 02:04:06', '2021-10-21 02:04:06'),
(3, 'Quisque auctor lectus interdum nisl accumsan venenatis.', 'Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.', '2021-10-21 02:04:53', '2021-10-21 02:04:53'),
(7, 'Quisque auctor lectus interdum nisl accumsan venenatis.', 'Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.', '2021-10-25 14:37:38', '2021-10-25 14:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'STARTERS', '2021-10-24 01:00:58', '2021-10-24 01:00:58'),
(8, 'SHOPS', '2021-10-24 01:01:07', '2021-10-24 01:01:07'),
(9, 'MAIN COURSE', '2021-10-24 01:01:28', '2021-10-24 01:01:28'),
(10, 'DESSERTS', '2021-10-24 01:01:53', '2021-10-24 01:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asha', 'asha@gmail.com', 'dfdsfsfd', '2021-10-24 19:00:04', '2021-10-24 19:00:04'),
(2, 'abdallah', 'abdallah@gmail.com', 'sdffsfdsd', '2021-10-24 19:02:22', '2021-10-24 19:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sasasad', 'sadasadsds', '2021-10-23 00:04:42', '2021-10-23 00:04:42');

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
-- Table structure for table `footer_contacts`
--

CREATE TABLE `footer_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_contacts`
--

INSERT INTO `footer_contacts` (`id`, `address`, `phone1`, `phone2`, `email1`, `email2`, `created_at`, `updated_at`) VALUES
(1, '9236 Winding Way St. Richardson, TX 75080', '+ 11 888 998 899', '+ 11 800 990 800', 'demoinfo@gmail.com', 'demoinfo@gmail.com', '2021-10-26 18:07:27', '2021-10-31 04:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `footer_descs`
--

CREATE TABLE `footer_descs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_descs`
--

INSERT INTO `footer_descs` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', '2021-10-26 12:41:01', '2021-11-05 16:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `footer_links`
--

CREATE TABLE `footer_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_links`
--

INSERT INTO `footer_links` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'About us', '#', '2021-10-26 16:13:26', '2021-10-26 16:14:42'),
(2, 'Services', '#', '2021-10-26 16:13:46', '2021-10-26 16:13:46'),
(3, 'Selected Work', '#', '2021-10-26 16:13:59', '2021-10-26 16:13:59'),
(4, 'Get In Touch', '#', '2021-10-26 16:14:10', '2021-10-26 16:14:10'),
(5, 'Careers', '#', '2021-10-26 16:14:20', '2021-10-26 16:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `footer_subs`
--

CREATE TABLE `footer_subs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_subs`
--

INSERT INTO `footer_subs` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Get monthly updates and free resources.ggggd', '2021-10-31 19:36:53', '2021-11-05 15:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `fsections`
--

CREATE TABLE `fsections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fsections`
--

INSERT INTO `fsections` (`id`, `title`, `number`, `created_at`, `updated_at`) VALUES
(2, 'CLIENT', 5000, '2021-10-21 03:00:35', '2021-10-21 03:00:35'),
(3, 'TIME OF WORK', 3000, '2021-10-21 03:01:05', '2021-10-21 03:01:05'),
(4, 'IDEAS', 1000, '2021-10-21 03:02:16', '2021-10-21 03:07:41'),
(5, 'PROJECT DONE', 8000, '2021-10-21 03:02:50', '2021-10-21 03:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Vagitable name', 7, '2021-10-24 11:06:45', '2021-10-24 17:47:36'),
(3, 'Vagitable name2', 7, '2021-10-24 11:06:59', '2021-10-24 17:49:37'),
(4, 'Vagitable name3', 7, '2021-10-24 11:07:11', '2021-10-24 17:49:54'),
(5, 'Vagitable name4', 7, '2021-10-24 11:07:29', '2021-10-24 17:50:18'),
(6, 'Vagitable name6', 7, '2021-10-24 11:07:50', '2021-10-24 17:50:45'),
(7, 'Vagitable name5', 8, '2021-10-24 11:08:01', '2021-10-24 17:50:31'),
(8, 'Vagitable name7', 8, '2021-10-24 11:08:23', '2021-10-24 17:51:13'),
(9, 'Vegetable Name9', 8, '2021-10-24 16:56:45', '2021-10-24 17:51:39'),
(10, 'Vegetable Name10', 9, '2021-10-24 17:53:02', '2021-10-24 17:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Awesome Restaurant, Best Recipes for Dinner', 'Specialized in design and coding graphics and websites.', '2021-10-19 18:24:15', '2021-10-30 22:42:06'),
(3, 'Awesome Restaurant, Best Recipes for Dinner', 'Specialized in design and coding graphics and websites.', '2021-10-19 18:25:11', '2021-10-19 18:25:11'),
(4, 'Awesome Restaurant, Best Recipes for Dinner', 'Specialized in design and coding graphics and websites.ghngbn', '2021-10-19 18:25:48', '2021-11-06 13:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(1, 'images/sEYVjhWz4MZ5UoBzkJ4BZAba0jviYm7BLi8kyOlf.jpg', 2, 'App\\Models\\Header', '2021-10-19 18:24:16', '2021-10-19 18:24:16'),
(2, 'images/cIKoA83AZmc1D2QuizSiauay6n45v3fFmAwHrGD9.jpg', 3, 'App\\Models\\Header', '2021-10-19 18:25:11', '2021-10-19 18:25:11'),
(3, 'images/pfkDMljaaatAYgYPlgzypo8GztpNDKqztoy1r91w.jpg', 4, 'App\\Models\\Header', '2021-10-19 18:25:48', '2021-10-31 05:24:02'),
(4, 'images/5NJBfhO0oQJc2M4NzyuqMyLA5Zk8xN8zwJXrN9BA.jpg', 1, 'App\\Models\\MenuItem', '2021-10-20 11:29:41', '2021-10-20 11:29:41'),
(5, 'images/f2os4fcfgMbVPxqJEfxTA0brY3t7Q7MZidYVYcAf.jpg', 2, 'App\\Models\\MenuItem', '2021-10-20 11:30:39', '2021-10-20 11:30:39'),
(6, 'images/h8SvcslyYu9LivxjFwLemPfAeRNwU8qOViCQPpMZ.jpg', 3, 'App\\Models\\MenuItem', '2021-10-20 11:32:33', '2021-10-20 11:32:33'),
(7, 'images/Q2iWyjCyRtcRlr6KUFlgnnBvdqqALRKqEbwDRIxS.jpg', 4, 'App\\Models\\MenuItem', '2021-10-20 11:33:08', '2021-10-20 11:33:08'),
(8, 'images/7wLYQXaXtDUA5w0woaFQ77KKKxygfVFxs7kKDnbT.jpg', 5, 'App\\Models\\MenuItem', '2021-10-20 11:33:26', '2021-10-31 11:15:13'),
(9, 'images/VvcwH8QrPg1G7msAWMVC4wwXlODLsVFtSqS6C8yH.jpg', 6, 'App\\Models\\MenuItem', '2021-10-20 11:33:52', '2021-10-20 11:33:52'),
(10, 'images/o3f2ftZXCikMmJKdzvzldlAxduCMUWGI6cFKyuv4.jpg', 7, 'App\\Models\\MenuItem', '2021-10-20 11:34:17', '2021-10-20 11:34:17'),
(11, 'images/H7PynXVxdor01EcPVq1KLLRtYBCojtWB9DB6xnCP.jpg', 8, 'App\\Models\\MenuItem', '2021-10-20 11:34:38', '2021-10-20 11:34:38'),
(12, 'images/5opr5XdxCE33PTEI6CEhhHEu4NH1Nwx9G0g59ii9.jpg', 9, 'App\\Models\\MenuItem', '2021-10-20 11:35:06', '2021-10-20 11:35:06'),
(13, 'images/TrDKn741dZqcfSr2DGKVAT6QFH3u0grNXlvkHlJH.jpg', 10, 'App\\Models\\MenuItem', '2021-10-20 11:35:27', '2021-10-20 11:35:27'),
(14, 'images/whynNTpjBaR0hL9YVA3y14ghQjWWoVMbEMOddlvm.png', 1, 'App\\Models\\Team', '2021-10-20 13:00:58', '2021-10-20 13:00:58'),
(15, 'images/ifTR3jiVoIG7UgxY64893TPmXkjw37ySWnnJbv2c.png', 2, 'App\\Models\\Team', '2021-10-20 13:07:08', '2021-10-20 13:07:08'),
(16, 'images/DkyVa2nZDZfN3fCiVjb1cpBzRuED0tkZiq2kK97E.png', 3, 'App\\Models\\Team', '2021-10-20 13:07:41', '2021-10-20 13:07:41'),
(17, 'images/nKPZB4UDImRHcBWilDs2JNjlU9lP1Wwqjb4IlPJJ.png', 4, 'App\\Models\\Team', '2021-10-20 13:08:14', '2021-10-20 13:08:14'),
(18, 'images/JmYGACPBNnngxTuiDF4UsJZtOBM7sFMDcAbZaf7p.png', 5, 'App\\Models\\Team', '2021-10-20 13:08:47', '2021-10-20 13:08:47'),
(19, 'images/7U9oVJbheOF4BDhog8DKnQy0LX4vhjgcuRCWIP7v.jpg', 1, 'App\\Models\\Testimony', '2021-10-21 01:18:59', '2021-10-21 01:18:59'),
(20, 'images/8skmyNvcrlhqJ0WdIf5huOG8hFemelTiHSZN5GbJ.jpg', 2, 'App\\Models\\Testimony', '2021-10-21 01:22:57', '2021-10-21 01:22:57'),
(21, 'images/dzVw3xauEdDIOhcgnrKcLqmStqzasIApgIwqHR9l.jpg', 3, 'App\\Models\\Testimony', '2021-10-21 01:23:54', '2021-10-21 01:23:54'),
(22, 'images/lLDA2zvZsRL3eQIWcwG70AzCuCCcebb9O170Rqys.jpg', 4, 'App\\Models\\Testimony', '2021-10-21 01:24:40', '2021-10-21 01:24:40'),
(23, 'images/UaA0Obhhz5O9ujgTZaHp4B0CIrbEJWWvPi1mKJFU.jpg', 5, 'App\\Models\\Testimony', '2021-10-21 01:25:47', '2021-10-21 01:25:47'),
(24, 'images/mqVrEdmOszru5rk0AtgubCrEKC3SAAw3A42IrT7l.jpg', 1, 'App\\Models\\Blog', '2021-10-21 02:04:06', '2021-10-31 04:44:14'),
(25, 'images/DSPM8SANMZX7DuW9IaXcfADrrpkf1sj8HfY3gHWy.jpg', 2, 'App\\Models\\Blog', '2021-10-21 02:04:32', '2021-10-21 02:04:32'),
(26, 'images/sliNwxJdUOYHNltQdieQjenfACRg5GIyDtF7aNmK.jpg', 3, 'App\\Models\\Blog', '2021-10-21 02:04:53', '2021-10-21 02:04:53'),
(27, 'images/kxpeT60aZfiOOawG7e7k9Y04sdRthhoFlDJqLsxz.jpg', 4, 'App\\Models\\Blog', '2021-10-21 02:05:45', '2021-10-21 02:05:45'),
(28, 'images/pejaEOJZpiYovg7WmatKFXdH2yXMlhz79r01lUxq.png', 1, 'App\\Models\\Fsection', '2021-10-21 02:59:26', '2021-10-21 02:59:26'),
(29, 'images/yN9LREdWxOwaoOn1SSmyOcsbJO8NXQZ35ihkeNyp.png', 2, 'App\\Models\\Fsection', '2021-10-21 03:00:35', '2021-10-21 03:00:35'),
(30, 'images/FA2rVNtxKNj8Bi5xi6NSfcNjv997NgYhaC66qO4h.jpg', 3, 'App\\Models\\Fsection', '2021-10-21 03:01:05', '2021-10-21 03:01:05'),
(31, 'images/ZLIrFzv9GC8ExIMaNkklHgk5mmWHIa8DbXgAMyY3.jpg', 4, 'App\\Models\\Fsection', '2021-10-21 03:02:16', '2021-10-21 03:02:16'),
(32, 'images/aXOKROSgUtVoKgwLOGWXH8MBz9tjetKiESb4PxM7.jpg', 5, 'App\\Models\\Fsection', '2021-10-21 03:02:50', '2021-10-31 05:01:51'),
(33, 'images/Cxrd0kvbT2HRqAZQ5GnRAfGTO4DyolYb7gECu03H.jpg', 1, 'App\\Models\\Price', '2021-10-22 14:18:26', '2021-10-22 14:18:26'),
(34, 'images/5Lh1QwpnE0dPGon3jszGkMxpwCsBN7aWsJKfCZ8E.jpg', 2, 'App\\Models\\Price', '2021-10-22 14:28:15', '2021-10-22 14:28:15'),
(35, 'images/OOPkBsU5AEu5jXj5JweZew74CUuRvMzO50WoPKeq.jpg', 3, 'App\\Models\\Price', '2021-10-22 14:30:31', '2021-10-22 14:30:31'),
(36, 'images/kr7EnMaqmT7gzrqWcOWaIuSzHOgSL5C1Lj6R3gNv.jpg', 4, 'App\\Models\\Price', '2021-10-22 14:32:22', '2021-10-22 14:32:22'),
(37, 'images/RZcqaYIJoDCl3JlQMi59zzRCeqE8sG8UDd1TRaiZ.jpg', 1, 'App\\Models\\Gallery', '2021-10-24 10:59:41', '2021-10-24 10:59:41'),
(38, 'images/ZOPPLpFZEBuuSqGJ1d3fcpyxkIzu0Iff3u9oHR4H.jpg', 2, 'App\\Models\\Gallery', '2021-10-24 11:06:45', '2021-10-31 05:18:09'),
(39, 'images/FamZploZ72Qs70bz9CIZ0ieP741oYTVk4dzaWiuN.jpg', 3, 'App\\Models\\Gallery', '2021-10-24 11:06:59', '2021-10-24 11:06:59'),
(40, 'images/beauJ4Bgj2p5Zp7NWZ0fEsYrcyvff5lHNtCGFukJ.jpg', 4, 'App\\Models\\Gallery', '2021-10-24 11:07:11', '2021-10-24 11:07:11'),
(41, 'images/eRHAyblllHYzVxwdLKGZcsvR54uDt66jkQFop37s.jpg', 5, 'App\\Models\\Gallery', '2021-10-24 11:07:29', '2021-10-24 11:07:29'),
(42, 'images/KjLRbKX4AkwgtjyqNowFHiZ0B0o0laxd99Mxumq5.jpg', 6, 'App\\Models\\Gallery', '2021-10-24 11:07:50', '2021-10-24 11:07:50'),
(43, 'images/7o7YpHVKNGxe5GeoyJq9uTIlQzYjTzXreigO6p6g.jpg', 7, 'App\\Models\\Gallery', '2021-10-24 11:08:01', '2021-10-24 11:08:01'),
(44, 'images/UDMdvAXg8J9ea8EdcM0QKaQln0dp44CgI6PZTCwn.jpg', 8, 'App\\Models\\Gallery', '2021-10-24 11:08:23', '2021-10-24 11:08:23'),
(45, 'images/7OLReRf8S1FNaxYejnUFNjdrdvXA8Fs4mI8cEcN5.jpg', 9, 'App\\Models\\Gallery', '2021-10-24 16:56:45', '2021-10-24 17:54:53'),
(46, 'images/ZG76LEEejBmAg1eFuWfsDrhZ6yfzV8s0bcA584Cp.jpg', 10, 'App\\Models\\Gallery', '2021-10-24 17:53:02', '2021-10-24 17:53:02'),
(47, 'images/HoddbLcpKFSwcuzVy9EmPCjGEDNm6UZVadLhrZAA.jpg', 2, 'App\\Models\\Ssection', '2021-10-24 23:15:40', '2021-10-24 23:15:40'),
(48, 'images/WCT1zbcYWAX3Oj4uMGOpCf2APt3m4LcC1arcOnib.png', 3, 'App\\Models\\Ssection', '2021-10-24 23:16:12', '2021-10-24 23:16:12'),
(49, 'images/TrrPKUZ8hKhfJAEtDuCgKPxS7XRh03bkdqGvDNfa.png', 1, 'App\\Models\\Ssection', '2021-10-24 23:21:19', '2021-10-24 23:21:19'),
(50, 'images/6SE8KgQJEKSOt0a37oFshvVL75dNyMoeT8FGcBPC.jpg', 5, 'App\\Models\\Blog', '2021-10-25 02:33:33', '2021-10-25 02:33:33'),
(51, 'images/13Vv9pktvOBurFfiUdQciNUvN9VlCaKTvHnfUCcd.jpg', 11, 'App\\Models\\Gallery', '2021-10-25 14:27:25', '2021-10-25 14:27:25'),
(52, 'images/sjv8E0QZ7taOVXeryq6oUkZBfldWUF3nLrGw3J3j.jpg', 6, 'App\\Models\\Blog', '2021-10-25 14:34:58', '2021-10-25 14:34:58'),
(53, 'images/U64s7AUVuBrMNDc2BYZhzT2RuoDjsMV5y5dlW6kL.jpg', 7, 'App\\Models\\Blog', '2021-10-25 14:37:38', '2021-10-25 14:37:38'),
(54, 'images/pJMUTKLykMbWCXDPZ2ytRreTiUZs2FiIeMqnEQjK.jpg', 6, 'App\\Models\\Fsection', '2021-10-25 16:06:09', '2021-10-25 16:06:09'),
(55, 'images/uQr1B0e3wZL7XANSawPk5FieI2vnCKFez4HQvowt.jpg', 1, 'App\\Models\\User', '2021-10-25 18:35:29', '2021-10-25 18:35:29'),
(56, 'images/EaWc0ZRt26X32UU27Sfu6BBxrJsZS6vKOf1DruGN.png', 1, 'App\\Models\\Logo', '2021-10-25 18:36:03', '2021-10-25 18:36:03'),
(57, 'images/wanKcjvqZAD1f6tcIVaHVgbYwWWE20Uof8aPoC6b.jpg', 11, 'App\\Models\\Price', '2021-10-27 12:45:00', '2021-10-27 12:45:00'),
(58, 'images/CwLoTi6It8AQOjPiKDfimxPID2sKIX6TIWP6I8O3.jpg', 10, 'App\\Models\\Price', '2021-10-27 12:45:47', '2021-10-27 12:45:47'),
(59, 'images/i42m7FHx677C9XYreN62KVotrSnOJ8ZZGKqO3DZQ.jpg', 9, 'App\\Models\\Price', '2021-10-27 12:46:12', '2021-10-27 12:46:12'),
(60, 'images/qk6Oz4xtDPGFumcCdTU5B5SnhOi4CsUNsNZEAJcJ.jpg', 8, 'App\\Models\\Price', '2021-10-27 12:46:34', '2021-10-27 12:46:34'),
(61, 'images/9t6Gg36FTn26Nu21mZTOUYvMNTRkWkpTe2tLsGJL.jpg', 7, 'App\\Models\\Price', '2021-10-27 12:46:56', '2021-10-27 12:46:56'),
(62, 'images/UycM3nFIPALPemTTQJh5lrA2KVHCkpUE2dnx3gZS.jpg', 6, 'App\\Models\\Price', '2021-10-27 12:47:35', '2021-10-27 12:47:35'),
(63, 'images/A4JoJOZmuXtsZvP1eLOzQUUqyVJ8EpPvHRpBFZIo.jpg', 5, 'App\\Models\\Price', '2021-10-27 12:47:49', '2021-10-27 12:47:49'),
(64, 'images/qguDdnZfZQvCskTFZWEEkHU2KSpspbK4x5AHiJx5.jpg', 2, 'App\\Models\\User', '2021-10-30 22:49:20', '2021-10-30 22:49:20'),
(65, 'images/xDRYL8DfLRDJkPkNFJHYsdJKLJvLMtgqp0FoV6Ws.jpg', 3, 'App\\Models\\User', '2021-10-30 23:06:35', '2021-10-30 23:06:35'),
(66, 'images/PWqjb6dvxc7FPqfQOj3pq5wV8DMcqm9Ra2WHJi4B.jpg', 8, 'App\\Models\\Blog', '2021-10-31 04:47:07', '2021-10-31 04:47:07'),
(67, 'images/GLaPnxIXXoFP9lwVKJelAKEN7z2dOJxPdtK5nuyM.jpg', 7, 'App\\Models\\Fsection', '2021-10-31 05:03:37', '2021-10-31 05:03:37'),
(68, 'images/CHWjoDlnslhcMMkeincMcpyCxeJ6uwmDI1MuqKTA.jpg', 13, 'App\\Models\\Gallery', '2021-10-31 05:19:55', '2021-10-31 05:19:55'),
(69, 'images/5OnBLlYW02qUoHiUOPGZeMhccWu0ZSwHkfECum8U.jpg', 5, 'App\\Models\\Header', '2021-10-31 05:27:32', '2021-10-31 05:27:32'),
(70, 'images/5C3I9o10bl6SRU3O8sL9TAeKqcIREim7QCkCfctG.jpg', 11, 'App\\Models\\MenuItem', '2021-10-31 11:18:47', '2021-10-31 11:18:47'),
(71, 'images/QJi7dfNer3Z17KYUbmNhLkWCuXUbTY1n4WzcCMrL.jpg', 6, 'App\\Models\\Team', '2021-10-31 11:36:34', '2021-10-31 11:36:34'),
(72, 'images/FXoeRL0IpiRb2ge749ojF60YIJ4Znq81VnpbKFiV.jpg', 6, 'App\\Models\\Testimony', '2021-10-31 11:40:26', '2021-10-31 11:40:26'),
(73, 'images/Fg2UyH3ZwED9nnBvS7XCUxbKecie3yzReuxKcjOa.jpg', 14, 'App\\Models\\Gallery', '2021-10-31 17:06:49', '2021-10-31 17:06:49'),
(74, 'images/Vx9V6mMJNGhO2Yo2HtL7KiQ9vt3TqhFCSQGvQz3d.jpg', 4, 'App\\Models\\User', '2021-11-04 16:05:28', '2021-11-04 16:05:28'),
(75, 'images/cKlykuoFTV8RBp1N1TknSc3g6qdRNxvOLIsE5Fbh.jpg', 6, 'App\\Models\\Header', '2021-11-06 13:24:46', '2021-11-06 13:24:46'),
(76, 'images/21JsE5WdL9uR7WpER69qgpZ3HqBb4MVkkpL2aOOO.jpg', 12, 'App\\Models\\MenuItem', '2021-11-06 13:25:53', '2021-11-06 13:25:53'),
(77, 'images/Z6vqdiALVftXiRVcjO44NSwNW6AW1fgfiK105RZL.png', 7, 'App\\Models\\Team', '2021-11-06 13:27:04', '2021-11-06 13:27:04'),
(78, 'images/fPquaJZqmI4sx6IKEFbxZAZRo2zlB2m4GkNf7LCq.jpg', 7, 'App\\Models\\Testimony', '2021-11-06 13:28:21', '2021-11-06 13:28:21'),
(79, 'images/ud4pVbjGlthIQo375bVqETN2ZOfHiZTo2XnzIoH6.png', 2, 'App\\Models\\Ssection', '2021-11-10 13:21:55', '2021-11-10 13:21:55'),
(80, 'images/2rz5UtbsboL9MK0Qytg31K6pT4AuITvIKxgDQYaV.png', 3, 'App\\Models\\Ssection', '2021-11-10 13:22:11', '2021-11-10 13:22:11'),
(81, 'images/05RVCZ7DwUYr4HaOa7j4CeeT4HzH3ACFwyym5YLw.png', 4, 'App\\Models\\Ssection', '2021-11-10 13:22:28', '2021-11-10 13:22:28'),
(82, 'images/fmSsuZjitsCycUXm0Wx03DIHTFYGAHlyL9oX0M2N.png', 5, 'App\\Models\\Ssection', '2021-11-10 13:22:29', '2021-11-10 13:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'this a logo test', '2021-10-25 18:36:03', '2021-10-25 18:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(3, 'Vegetable Name', 20, '2021-10-20 11:32:32', '2021-10-20 11:32:32'),
(4, 'Vegetable Name', 10, '2021-10-20 11:33:08', '2021-10-20 11:33:08'),
(5, 'Vegetable Name', 45, '2021-10-20 11:33:26', '2021-10-20 11:33:26'),
(6, 'Vegetable Name', 35, '2021-10-20 11:33:51', '2021-10-20 11:33:51'),
(7, 'Vegetable Name', 65, '2021-10-20 11:34:17', '2021-10-20 11:34:17'),
(8, 'Vegetable Name', 19, '2021-10-20 11:34:38', '2021-10-20 11:34:38'),
(9, 'Vegetable Name', 67, '2021-10-20 11:35:06', '2021-10-20 11:35:06'),
(10, 'Vegetable Name', 45, '2021-10-20 11:35:27', '2021-10-20 11:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `body`, `id`, `created_at`, `updated_at`) VALUES
('ashaa', 'asha@gmail.com', 'ssssfsfsfdsfddf', 2, '2021-11-07 22:47:24', '2021-11-07 22:47:24');

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
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(36, '2021_10_13_123651_create_cruds_table', 1),
(37, '2021_10_14_131504_create_images_table', 1),
(38, '2021_10_14_164638_create_logos_table', 1),
(39, '2021_10_19_093523_create_headers_table', 1),
(40, '2021_10_20_034402_create_menu_items_table', 2),
(41, '2021_10_20_053007_create_teams_table', 3),
(42, '2021_10_20_165212_create_testimonies_table', 4),
(43, '2021_10_20_184335_create_blogs_table', 5),
(44, '2021_10_20_192206_create_fsections_table', 6),
(46, '2021_10_21_040710_create_prices_table', 7),
(48, '2021_10_23_044345_create_categories_table', 8),
(49, '2021_10_23_044133_create_galleries_table', 9),
(50, '2021_10_24_110536_create_contacts_table', 10),
(53, '2021_10_24_151220_create_ssections_table', 11),
(54, '2021_10_24_151246_create_ssection_items_table', 11),
(59, '2021_10_25_150305_create_footer_descs_table', 12),
(60, '2021_10_25_151220_create_footer_contacts_table', 12),
(61, '2021_10_25_151243_create_footer_subs_table', 12),
(62, '2021_10_25_151826_create_footer_links_table', 12),
(65, '2021_10_31_141241_create_page_titles_table', 13),
(66, '2021_10_31_141809_create_page_title_headers_table', 13),
(67, '2021_11_07_121530_create_messages_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `page_titles`
--

CREATE TABLE `page_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_titles`
--

INSERT INTO `page_titles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'page_menu', '2021-11-01 13:24:25', '2021-11-01 13:24:25'),
(2, 'page_gallery', '2021-11-01 13:24:25', '2021-11-01 13:24:25'),
(3, 'page_testimony', '2021-11-01 13:24:25', '2021-11-01 13:24:25'),
(4, 'page_team', '2021-11-01 13:24:25', '2021-11-01 13:24:25'),
(5, 'page_price', '2021-11-01 13:24:25', '2021-11-01 13:24:25'),
(6, 'page_blog', '2021-11-01 13:24:25', '2021-11-01 13:24:25'),
(7, 'page_contact', '2021-11-01 13:24:25', '2021-11-01 13:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `page_title_headers`
--

CREATE TABLE `page_title_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_title_headers`
--

INSERT INTO `page_title_headers` (`id`, `title`, `description`, `page_title_id`, `created_at`, `updated_at`) VALUES
(1, 'Menu', 'Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.', 1, '2021-11-01 16:25:44', '2021-11-01 16:58:37'),
(2, 'Gallery', 'Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.', 2, '2021-11-01 16:59:21', '2021-11-01 16:59:21'),
(3, 'Testimonials', 'We thanks for all our awesome testimonials! There are hundreds of our happy customers!', 3, '2021-11-01 17:00:07', '2021-11-01 17:00:07'),
(4, 'Meet Our Team', 'We thanks for all our awesome testimonials! There are hundreds of our happy customers!', 4, '2021-11-01 17:00:27', '2021-11-01 17:00:27'),
(5, 'Our Pricing', 'We thanks for all our awesome testimonials! There are hundreds of our happy customers!', 5, '2021-11-01 17:00:52', '2021-11-01 17:00:52'),
(6, 'Blog', 'Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.', 6, '2021-11-01 17:01:12', '2021-11-01 17:01:12'),
(7, 'Contact', 'Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.', 7, '2021-11-01 17:01:39', '2021-11-01 17:01:39');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` double NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandwith` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domains` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_domains` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `name`, `number`, `disk`, `emails`, `bandwith`, `domains`, `sub_domains`, `created_at`, `updated_at`) VALUES
(2, 'Basic', 10, '50GB Disk Space', '50 Email Accounts', '50GB Monthly Bandwidth', '15 Domains', '10 Subdomains', '2021-10-22 14:28:15', '2021-10-22 14:28:15'),
(3, 'Standard', 20, '60GB Disk Space', '60 Email Accounts', '60GB Monthly Bandwidth', '20 Domains', '15 Subdomains', '2021-10-22 14:30:31', '2021-10-22 14:30:31'),
(4, 'Premium', 30, '70GB Disk Space', '70 Email Accounts', '70GB Monthly Bandwidth', '25 Domains', '20 Subdomains', '2021-10-22 14:32:22', '2021-10-22 14:32:22'),
(5, 'Basic', 10, '50GB Disk Space', '50 Email Accounts', '50GB Monthly Bandwidth', '10 Subdomains', '15 Domains', '2021-10-27 12:31:44', '2021-10-27 12:31:44'),
(6, 'Standard', 20, '60GB Disk Space', '60 Email Accounts', '60GB Monthly Bandwidth', '15 Subdomains', '20 Domains', '2021-10-27 12:31:44', '2021-10-27 12:31:44'),
(7, 'Premium', 30, '70GB Disk Space', '70 Email Accounts', '70GB Monthly Bandwidth', '20 Subdomains', '25 Domains', '2021-10-27 12:31:44', '2021-10-27 12:31:44'),
(8, 'Basic', 10, '50GB Disk Space', '50 Email Accounts', '50GB Monthly Bandwidth', '10 Subdomains', '15 Domains', '2021-10-27 12:32:10', '2021-10-27 12:32:10'),
(9, 'Standard', 20, '60GB Disk Space', '60 Email Accounts', '60GB Monthly Bandwidth', '15 Subdomains', '20 Domains', '2021-10-27 12:32:10', '2021-10-27 12:32:10'),
(10, 'Premium', 30, '70GB Disk Space', '70 Email Accounts', '70GB Monthly Bandwidth', '20 Subdomains', '25 Domains', '2021-10-27 12:32:10', '2021-10-27 12:32:10'),
(11, 'Basic', 10, '50GB Disk Space', '50 Email Accounts', '50GB Monthly Bandwidth', '10 Subdomains', '15 Domains', '2021-10-27 12:32:16', '2021-10-27 12:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `ssections`
--

CREATE TABLE `ssections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ssections`
--

INSERT INTO `ssections` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Green Special Restaurant.', 'Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.\r\n\r\nSed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.', '2021-10-24 23:21:18', '2021-10-24 23:21:18'),
(2, 'jkjkjkjk', 'jkkkjjkjkjk', '2021-11-10 13:21:55', '2021-11-10 13:21:55'),
(3, 'kkkkkj', 'jhjjhjjhj', '2021-11-10 13:22:11', '2021-11-10 13:22:11'),
(4, 'hjjhjghj', 'hjhjhj uhjhjhj hjhjhj', '2021-11-10 13:22:28', '2021-11-10 13:22:28'),
(5, 'hjjhjghj', 'hjhjhj uhjhjhj hjhjhj', '2021-11-10 13:22:29', '2021-11-10 13:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `ssection_items`
--

CREATE TABLE `ssection_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssection_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ssection_items`
--

INSERT INTO `ssection_items` (`id`, `title`, `ssection_id`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '2021-10-24 23:34:52', '2021-10-24 23:39:14'),
(2, 'Nullam ut massa id odio imperdiet consequat.', 1, '2021-10-24 23:39:43', '2021-10-24 23:39:43'),
(3, 'Cras ullamcorper nisi eget condimentum aliquet.', 1, '2021-10-24 23:39:58', '2021-10-24 23:39:58'),
(4, 'Cras id libero iaculis, sodales ligula vitae, egestas odio.', 1, '2021-10-24 23:40:11', '2021-10-24 23:40:11'),
(5, 'Aenean congue ex et bibendum porta.', 1, '2021-10-24 23:40:24', '2021-10-24 23:40:24'),
(6, 'ytty', 4, '2021-11-10 13:23:51', '2021-11-10 13:23:51'),
(7, 'ghgh', 3, '2021-11-10 13:24:22', '2021-11-10 13:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `occupation`, `created_at`, `updated_at`) VALUES
(2, 'Williamson', 'Senior Chef', '2021-10-20 13:07:08', '2021-10-20 13:07:08'),
(3, 'Kristina', 'Senior Chef', '2021-10-20 13:07:41', '2021-10-20 13:07:41'),
(4, 'Steve Thomas', 'Senior Chef', '2021-10-20 13:08:14', '2021-10-20 13:08:14'),
(5, 'Miranda Joy', 'Senior Chef', '2021-10-20 13:08:47', '2021-10-20 13:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`id`, `name`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'James Fernando', 'Wonderful Support!', 'They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.', '2021-10-21 01:22:57', '2021-11-05 22:13:24'),
(3, 'joyce ndakidemi', 'great Services!', 'They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.', '2021-10-21 01:23:54', '2021-11-04 16:09:05'),
(4, 'Venanda Mercy', 'Great & Talented Team!', 'They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.', '2021-10-21 01:24:40', '2021-10-21 01:24:40');

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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'juma', 'info@jasmai.co.tz', NULL, '$2y$10$6YIYYuzZkciLWLJXqOdceuUWnqfrP5YDAjeNBVIg0eyCNnlwiBv8K', 1, 'eUYjX0pkaCWkoA47burCB0PcUhbPkiNDlRTxOCEvzE02M7YH7P6U7OW2g7eo', '2021-10-19 18:17:02', '2021-10-19 18:17:02'),
(3, 'asha', 'asha@gmail.com', NULL, '$2y$10$meoRacvnlhA0xG39g3VMS.EuIdITcN0e8XBKSBdbDYw4cqLwUCJs2', 0, NULL, '2021-10-30 23:06:35', '2021-10-30 23:06:35'),
(4, 'innocent', 'innocentsamali@gmail.com', NULL, '$2y$10$t1HE1A9v0xitMLpj6PMTweby3jo75fYXyYRB/Kqj3RI/gsOo75o.6', 0, NULL, '2021-11-04 16:03:43', '2021-11-04 16:03:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_contacts`
--
ALTER TABLE `footer_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_descs`
--
ALTER TABLE `footer_descs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_links`
--
ALTER TABLE `footer_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_subs`
--
ALTER TABLE `footer_subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fsections`
--
ALTER TABLE `fsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galleries_name_unique` (`name`),
  ADD KEY `galleries_category_id_foreign` (`category_id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_titles`
--
ALTER TABLE `page_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_title_headers`
--
ALTER TABLE `page_title_headers`
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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssections`
--
ALTER TABLE `ssections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssection_items`
--
ALTER TABLE `ssection_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ssection_items_ssection_id_foreign` (`ssection_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_contacts`
--
ALTER TABLE `footer_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_descs`
--
ALTER TABLE `footer_descs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_links`
--
ALTER TABLE `footer_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_subs`
--
ALTER TABLE `footer_subs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fsections`
--
ALTER TABLE `fsections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `page_titles`
--
ALTER TABLE `page_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page_title_headers`
--
ALTER TABLE `page_title_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ssections`
--
ALTER TABLE `ssections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ssection_items`
--
ALTER TABLE `ssection_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `ssection_items`
--
ALTER TABLE `ssection_items`
  ADD CONSTRAINT `ssection_items_ssection_id_foreign` FOREIGN KEY (`ssection_id`) REFERENCES `ssections` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
