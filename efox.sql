-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 01:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efox`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfees`
--

CREATE TABLE `addfees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ads_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addfees`
--

INSERT INTO `addfees` (`id`, `user_id`, `ads_id`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 16, '1', '1', '2022-02-01 03:21:16', '2022-02-01 03:21:16'),
(2, 16, '1', '3', '2022-02-01 03:21:16', '2022-02-01 03:21:16'),
(3, 16, '1', '5', '2022-02-01 03:21:16', '2022-02-01 03:21:16'),
(4, 16, '1', '7', '2022-02-01 03:21:17', '2022-02-01 03:21:17'),
(5, 16, '1', '9', '2022-02-01 03:21:17', '2022-02-01 03:21:17'),
(6, 16, '1', '10', '2022-02-01 03:21:17', '2022-02-01 03:21:17'),
(7, 16, '1', '11', '2022-02-01 03:21:17', '2022-02-01 03:21:17'),
(8, 16, '2', '1', '2022-02-01 03:21:45', '2022-02-01 03:21:45'),
(9, 16, '2', '3', '2022-02-01 03:21:45', '2022-02-01 03:21:45'),
(10, 16, '2', '5', '2022-02-01 03:21:45', '2022-02-01 03:21:45'),
(11, 16, '2', '7', '2022-02-01 03:21:45', '2022-02-01 03:21:45'),
(12, 16, '2', '9', '2022-02-01 03:21:45', '2022-02-01 03:21:45'),
(13, 16, '2', '10', '2022-02-01 03:21:45', '2022-02-01 03:21:45'),
(14, 16, '2', '11', '2022-02-01 03:21:45', '2022-02-01 03:21:45'),
(15, 16, '3', '1', '2022-02-01 05:03:43', '2022-02-01 05:03:43'),
(16, 16, '3', '3', '2022-02-01 05:03:43', '2022-02-01 05:03:43'),
(17, 16, '3', '7', '2022-02-01 05:03:43', '2022-02-01 05:03:43'),
(18, 16, '4', '1', '2022-02-01 05:16:06', '2022-02-01 05:16:06'),
(19, 16, '4', '4', '2022-02-01 05:16:06', '2022-02-01 05:16:06'),
(20, 16, '4', '5', '2022-02-01 05:16:06', '2022-02-01 05:16:06'),
(21, 16, '4', '7', '2022-02-01 05:16:06', '2022-02-01 05:16:06'),
(22, 16, '4', '9', '2022-02-01 05:16:06', '2022-02-01 05:16:06'),
(23, 16, '4', '10', '2022-02-01 05:16:06', '2022-02-01 05:16:06'),
(24, 16, '4', '11', '2022-02-01 05:16:06', '2022-02-01 05:16:06'),
(25, 16, '5', '1', '2022-02-10 01:52:20', '2022-02-10 01:52:20'),
(26, 16, '5', '3', '2022-02-10 01:52:20', '2022-02-10 01:52:20'),
(27, 16, '5', '5', '2022-02-10 01:52:20', '2022-02-10 01:52:20'),
(28, 16, '5', '7', '2022-02-10 01:52:20', '2022-02-10 01:52:20'),
(29, 16, '5', '9', '2022-02-10 01:52:20', '2022-02-10 01:52:20'),
(30, 16, '5', '10', '2022-02-10 01:52:20', '2022-02-10 01:52:20'),
(31, 16, '5', '11', '2022-02-10 01:52:20', '2022-02-10 01:52:20'),
(32, 27, '6', '1', '2022-02-12 03:46:53', '2022-02-12 03:46:53'),
(33, 27, '6', '3', '2022-02-12 03:46:53', '2022-02-12 03:46:53'),
(34, 27, '6', '5', '2022-02-12 03:46:53', '2022-02-12 03:46:53'),
(35, 27, '6', '7', '2022-02-12 03:46:53', '2022-02-12 03:46:53'),
(36, 27, '6', '9', '2022-02-12 03:46:53', '2022-02-12 03:46:53'),
(37, 27, '6', '10', '2022-02-12 03:46:53', '2022-02-12 03:46:53'),
(38, 27, '6', '11', '2022-02-12 03:46:53', '2022-02-12 03:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `add_pages`
--

CREATE TABLE `add_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_pages`
--

INSERT INTO `add_pages` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', '1', '2021-12-22 11:44:02', '2021-12-22 11:44:02'),
(2, 'Category Page', '1', '2021-12-22 11:44:02', '2021-12-22 11:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `advertisings`
--

CREATE TABLE `advertisings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `door` int(11) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `transmissions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `airconditioning` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registered` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registered_experiy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suburbs_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `listing_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listing_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_bid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reserved_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisings`
--

INSERT INTO `advertisings` (`id`, `post_id`, `user_id`, `page_id`, `cat_id`, `subcat_id`, `title`, `door`, `mileage`, `year`, `transmissions`, `airconditioning`, `description`, `main_image`, `city_id`, `name`, `color`, `body`, `price`, `condition`, `sell`, `registered`, `registered_experiy`, `suburbs_id`, `email`, `phone`, `total`, `created_at`, `updated_at`, `listing_type`, `listing_duration`, `quantity`, `start_date`, `start_time`, `end_date`, `end_time`, `starting_bid`, `reserved_price`, `shipping`, `payment_method`) VALUES
(1, 484005, 16, '[\"1\",\"3\",\"5\",\"7\",\"9\",\"10\",\"11\"]', 1, 1, 'Lorem ipsum dolor ', 2, 12, 80, 'Manual', 'Yes', 'earfteft', 'images 5_1643707276.png', 2, 'mohsinsikder.cse@gmail.com', 'color', '4', '100000', 'New', 'Owner', 'Yes', '122', 1, 'mohsinsikder895@gmail.com', 1715486265, 130, '2022-02-01 03:21:16', '2022-02-01 03:21:16', 'Buy now', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 631831, 16, '[\"1\",\"3\",\"5\",\"7\",\"9\",\"10\",\"11\"]', 2, 4, 'Curabitur ac est id ligula ', 2, 12, 80, 'Manual', 'Yes', 'earfteft', 'images 5 (1)_1643707305.png', 6, 'mohsinsikder.cse@gmail.com', 'color', '4', '100000', 'New', NULL, 'Yes', '122', 2, 'mohsinsikder895@gmail.com', 1715486265, 130, '2022-02-01 03:21:45', '2022-02-01 03:21:45', 'Buy now', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 720436, 16, '[\"1\",\"3\",\"5\",\"7\",\"9\",\"10\",\"11\"]', 3, 4, 'asdfd', 3, 12, 2022, 'Manual', 'Yes', 'qawed', 'images 5_1644479540.png', 2, NULL, 'red', '4', NULL, 'New', 'Dealer', 'Yes', '122', 1, 'mohsinsikder.cse@gmail.com', 123344, 125, '2022-02-10 01:52:20', '2022-02-10 01:52:20', 'Auction', '7', NULL, '2022-02-12 ', '8:53:20', '2022-02-14', '20:12:50', '121', '23324', NULL, NULL),
(6, 614863, 27, '[\"1\",\"3\",\"5\",\"7\",\"9\",\"10\",\"11\"]', 3, 5, 'zdfgv', 3, 12, 80, 'Manual', 'Yes', 'qwsed', 'images 5_1644659213.png', 2, 'sikde', 'color', '4', '999', 'New', 'Owner', 'Yes', '122', 1, 'mohsinsikder895@gmail.com', 1715486265, 125, '2022-02-12 03:46:53', '2022-02-12 03:46:53', 'Auction', '7', NULL, '2022-02-12 ', '05:45', '2022-02-12 ', '18:45', '121', '23324', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `autction_settings`
--

CREATE TABLE `autction_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enable` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `listing_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_day_list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_change_duration` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `allow_edit_listing` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `max_auto_relis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sniper_protection_second` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_reserve` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `enable_quick_bid` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `enable_auto_bid` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `enable_large_bid_config` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autction_settings`
--

INSERT INTO `autction_settings` (`id`, `enable`, `listing_duration`, `duration_day_list`, `allow_change_duration`, `allow_edit_listing`, `max_auto_relis`, `sniper_protection_second`, `enable_reserve`, `enable_quick_bid`, `enable_auto_bid`, `enable_large_bid_config`, `created_at`, `updated_at`) VALUES
(1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `home_page_banner_1_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_1_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_1_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_2_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_2_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_2_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_2_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_3_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_3_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_3_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_3_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_4_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_4_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_4_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_4_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_1_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_1_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_1_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_2_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_2_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_2_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_2_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_3_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_3_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_3_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_3_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_4_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_4_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_4_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_4_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bid_settings`
--

CREATE TABLE `bid_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `for_price_at_or_above` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bid_settings`
--

INSERT INTO `bid_settings` (`id`, `for_price_at_or_above`, `increment`, `created_at`, `updated_at`) VALUES
(1, '100', '5.00', '2022-02-06 03:34:08', '2022-02-08 03:14:13'),
(2, '10.00', '100.00', '2022-02-06 03:37:08', '2022-02-08 23:22:58'),
(5, '100', '30', '2022-02-09 21:09:57', '2022-02-09 21:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `business_page_banners`
--

CREATE TABLE `business_page_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_1_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_1_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_1_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_2_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_words` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_2_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_2_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_2_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_3_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_3_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_3_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_3_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_4_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_4_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_4_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_4_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_5_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_5_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_5_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_5_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_6_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_6_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_6_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_6_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_page_banners`
--

INSERT INTO `business_page_banners` (`id`, `banner_1_link`, `banner_1_image`, `banner_1_upload`, `banner_1_expired`, `banner_2_link`, `name`, `key_words`, `banner_2_image`, `banner_2_upload`, `banner_2_expired`, `banner_3_link`, `banner_3_image`, `banner_3_upload`, `banner_3_expired`, `banner_4_link`, `banner_4_image`, `banner_4_upload`, `banner_4_expired`, `banner_5_link`, `banner_5_image`, `banner_5_upload`, `banner_5_expired`, `banner_6_link`, `banner_6_image`, `banner_6_upload`, `banner_6_expired`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, '95562.png', '2022-02-24', '2022-02-28', NULL, 'banner 1', '[\"mohsin,sikder\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67579.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-02-05 05:10:55'),
(2, NULL, '2585.png', '2022-02-15', '2022-02-28', NULL, NULL, '[null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-02-05 04:26:08', '2022-02-05 22:54:37'),
(3, NULL, '40486.png', NULL, NULL, NULL, NULL, '[null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-02-05 04:26:16', '2022-02-05 05:34:42'),
(4, NULL, '10459.png', NULL, NULL, NULL, NULL, '[null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-02-05 04:26:19', '2022-02-05 05:34:52'),
(5, NULL, '74119.png', NULL, NULL, NULL, NULL, '[null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-02-05 04:26:21', '2022-02-05 05:35:02'),
(6, NULL, '67562.png', NULL, NULL, NULL, NULL, '[null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2022-02-05 04:32:11', '2022-02-05 05:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `title`, `description`, `kewywords`, `status`, `url`, `created_at`, `updated_at`) VALUES
(3, 'BMW', 'bmw', 'bmw-moto', '[\"bmw\"]', '1', NULL, '2022-02-07 05:23:21', '2022-02-07 05:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `title`, `description`, `kewywords`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Pretoria', 'Pretoria', 'Pretoria sales', '[\"Pretoria, Sales, shopping\"]', '1', '2021-12-21 03:04:21', '2022-01-12 13:14:15'),
(6, 'Johannesburg', 'Johannesburg', 'Johannesburg', '[\"Johannesburg, Sales, shopping\"]', '1', '2022-01-12 00:43:57', '2022-01-12 13:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `client_messages`
--

CREATE TABLE `client_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_messages`
--

INSERT INTO `client_messages` (`id`, `ad_id`, `user_id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 16, 'mohsin', 'mohsinsikder.cse12@gmail.com', 'ADcf', '2022-01-30 04:02:38', '2022-01-30 04:02:38'),
(2, 2, 16, 'sdcsf', 'mohsinsikder.cse12@gmail.com', 'ADcf', '2022-01-30 04:02:56', '2022-01-30 04:02:56'),
(3, 2, 16, 'sdcsf', 'mohsinsikder999@gmail.com', 'ADcf', '2022-01-30 04:03:27', '2022-01-30 04:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `email_tampletes`
--

CREATE TABLE `email_tampletes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamplete_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_tampletes`
--

INSERT INTO `email_tampletes` (`id`, `tamplete_name`, `subject`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Registration', NULL, NULL, '0', '2021-12-21 04:47:07', '2022-01-20 03:41:14'),
(2, 'Post Ad', NULL, NULL, '1', '2021-12-21 04:47:22', '2021-12-21 04:47:22'),
(3, 'Admin Create User', NULL, NULL, '1', '2021-12-21 04:47:36', '2022-02-13 04:59:08'),
(4, 'Chnage Password', NULL, NULL, '1', '2021-12-21 04:47:52', '2021-12-21 04:47:52'),
(5, 'Forget Password', NULL, NULL, '1', '2021-12-21 04:48:08', '2021-12-21 04:48:08'),
(6, 'Contact Us', NULL, NULL, '1', '2021-12-21 04:48:35', '2021-12-21 04:48:35');

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
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `galleryImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `ad_id`, `galleryImage`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '267161643691829.png', '1', '2022-01-31 23:03:49', '2022-01-31 23:03:49'),
(2, 1, '124941643691829.png', '1', '2022-01-31 23:03:49', '2022-01-31 23:03:49'),
(3, 3, '845011643691993.png', '1', '2022-01-31 23:06:33', '2022-01-31 23:06:33'),
(4, 3, '584361643691993.png', '1', '2022-01-31 23:06:33', '2022-01-31 23:06:33'),
(5, 4, '538591643692038.png', '1', '2022-01-31 23:07:18', '2022-01-31 23:07:18'),
(6, 4, '514951643692039.png', '1', '2022-01-31 23:07:19', '2022-01-31 23:07:19'),
(7, 1, '752241643707277.png', '1', '2022-02-01 03:21:17', '2022-02-01 03:21:17'),
(8, 1, '430861643707277.png', '1', '2022-02-01 03:21:17', '2022-02-01 03:21:17'),
(9, 2, '942761643707305.png', '1', '2022-02-01 03:21:46', '2022-02-01 03:21:46'),
(10, 2, '283511643707306.png', '1', '2022-02-01 03:21:46', '2022-02-01 03:21:46'),
(11, 3, '871091643713424.png', '1', '2022-02-01 05:03:44', '2022-02-01 05:03:44'),
(12, 3, '778151643713424.png', '1', '2022-02-01 05:03:45', '2022-02-01 05:03:45'),
(13, 5, '408271644479541.png', '1', '2022-02-10 01:52:21', '2022-02-10 01:52:21'),
(14, 5, '949741644479541.png', '1', '2022-02-10 01:52:21', '2022-02-10 01:52:21'),
(15, 6, '787411644659213.png', '1', '2022-02-12 03:46:53', '2022-02-12 03:46:53'),
(16, 6, '103731644659213.png', '1', '2022-02-12 03:46:54', '2022-02-12 03:46:54'),
(17, 6, '500231644659214.png', '1', '2022-02-12 03:46:54', '2022-02-12 03:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_sliders`
--

CREATE TABLE `gallery_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_speed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_visible` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_hover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_push` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_upload_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_login_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_approved_new_user` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `confirm_new_user_status` enum('Enabled','Disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enabled',
  `auto_approved_new_user_as_sellers` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `auto_approved_new_user_as_buyers` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h1_tages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h2_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h3_tages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage_featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_category_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_time_zone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `geolocation_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `character_set` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytical_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banned_words` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banned_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_c_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_c_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_c_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_c_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `a_u_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_u_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_u_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_u_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_p_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_p_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_p_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_p_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_fees_information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_fees_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_fees_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_fees_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_logo`, `favicon`, `users_login_by`, `auto_approved_new_user`, `confirm_new_user_status`, `auto_approved_new_user_as_sellers`, `auto_approved_new_user_as_buyers`, `website_name`, `site_title`, `meta_keyword`, `meta_description`, `h1_tages`, `h2_tags`, `h3_tages`, `website_currency`, `homepage_featured`, `category_featured`, `per_category_page`, `business_page`, `site_time_zone`, `geolocation_country`, `character_set`, `language`, `google_analytical_code`, `contract_form`, `banned_words`, `banned_content`, `t_c_information`, `t_c_title`, `t_c_description`, `t_c_keyword`, `created_at`, `updated_at`, `a_u_information`, `a_u_title`, `a_u_description`, `a_u_keyword`, `p_p_information`, `p_p_title`, `p_p_description`, `p_p_keyword`, `site_fees_information`, `site_fees_title`, `site_fees_description`, `site_fees_keyword`) VALUES
(1, '28410.png', '70934.png', 'email', 'No', 'Enabled', 'Yes', 'Yes', 'EFOX', 'EFOX', '[\"EFOX\"]', 'EFOX', '[\"EFOX\"]', '[\"EFOX\"]', '[\"EFOX\"]', 'R', '20', '20', '20', '20', NULL, 'South Africa', NULL, 'English', NULL, 'admin@efox.co.za', '[\"cox\"]', 'Pay me directly', 'EFOX', 'EFOX', 'EFOX', '[\"EFOX\"]', '2021-12-14 10:40:04', '2022-02-07 04:59:19', 'EFOX', 'EFOX', 'EFOX', '[\"EFOX\"]', 'EFOX', 'EFOX', 'EFOX', '[\"EFOX\"]', NULL, NULL, NULL, '[\"EFOX\"]');

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mohsin', 'mohsinsikder@gmail.com', 'tyhtfyh', 'yjuh', '1', '2022-02-03 02:03:54', '2022-02-03 02:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `lisitng_fees`
--

CREATE TABLE `lisitng_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lisitng_fees`
--

INSERT INTO `lisitng_fees` (`id`, `page_title`, `duration`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Business Lisitng for 12 months', '365', '10', '1', '2022-01-06 10:18:55', '2022-01-31 01:19:05'),
(2, 'Add to Gallery slider-top of Page', NULL, '19', '1', '2022-01-13 10:18:55', '2022-01-13 10:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `listingorders`
--

CREATE TABLE `listingorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `listing_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listingorders`
--

INSERT INTO `listingorders` (`id`, `user_id`, `listing_id`, `page_id`, `created_at`, `updated_at`) VALUES
(1, 16, '1', '1', '2022-02-01 23:03:49', '2022-02-01 23:03:49'),
(2, 16, '1', '2', '2022-02-01 23:03:49', '2022-02-01 23:03:49'),
(3, 16, '2', '1', '2022-02-01 23:04:34', '2022-02-01 23:04:34'),
(5, 16, '3', '1', '2022-02-07 23:58:47', '2022-02-07 23:58:47'),
(6, 16, '3', '2', '2022-02-07 23:58:47', '2022-02-07 23:58:47'),
(7, 16, '4', '1', '2022-02-08 00:02:36', '2022-02-08 00:02:36'),
(8, 16, '4', '2', '2022-02-08 00:02:36', '2022-02-08 00:02:36'),
(9, 16, '5', '1', '2022-02-09 00:29:13', '2022-02-09 00:29:13'),
(10, 16, '5', '2', '2022-02-09 00:29:13', '2022-02-09 00:29:13'),
(11, 16, '6', '1', '2022-02-09 00:32:20', '2022-02-09 00:32:20'),
(12, 16, '6', '2', '2022-02-09 00:32:20', '2022-02-09 00:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `suburbs_id` int(11) DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `business_name`, `logo`, `industry`, `city_id`, `suburbs_id`, `mobile`, `landline`, `website`, `description`, `payment_method`, `address`, `tags`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 16, 'essential', 'Untitled-7-01_1643778229.png', 'regt5', 2, 1, '01715486265', '12345', 'wew', 'ergt', 'fgtt', 'dhaka', 'rtgr', '29.00', '1', '2022-02-02 10:14:56', '2022-02-01 23:03:49'),
(2, 16, 'essential', 'Untitled-7-01_1643778274.png', 'regt5', 6, 2, '01715486265', '12345', 'wew', 'ergt', 'fgtt', 'dhaka', 'rtgr', '29.00', '1', '2022-02-07 06:10:22', '2022-02-01 23:04:34'),
(3, 16, 'Essentia info', 'ATL Invoice-01_1644299927.png', 'Essential', 6, 2, '01715486265', '00994858', 'efox.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac est id ligula facilisis consectetur. In consectetur leo in sapien feugiat, nec tristique enim hendrerit. Fusce pharetra rhoncus orci. Duis luctus turpis id nunc tristique, non eleifend tortor molestie. Nulla pharetra nibh in risus tincidunt sollicitudin. Aliquam nec lorem a elit viverra ultricies eu a magna. Nulla libero sem, ullamcorper in blandit eu, pulvinar ut felis. Proin viverra ex in ante mattis elementum. Pellentesque quis felis vel libero hendrerit dignissim. Curabitur egestas libero sem, sit amet auctor leo gravida ac.', 'Bkash', 'dhaka', 'essen,info, tech', '29.00', '1', '2022-02-07 23:58:47', '2022-02-07 23:58:47'),
(5, 16, 'jobsbd', 'images 5_1644388153.png', 'regt5', 2, 1, '01715486', '12345', 'wderf', 'weqrt6y789', 'hy6798', 'dhaka', NULL, '29.00', '1', '2022-02-09 00:29:13', '2022-02-09 00:29:13'),
(6, 16, 'jobsbd', 'images 5_1644388340.png', 'regt5', 2, 1, '01715486', '12345', 'wderf', 'weqrt6y789', 'hy6798', 'dhaka', NULL, '29.00', '1', '2022-02-09 00:32:20', '2022-02-09 00:32:20');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_06_053925_create_sessions_table', 1),
(7, '2021_12_14_102529_create_general_settings_table', 2),
(8, '2021_12_20_084920_create_site_fees_table', 3),
(9, '2021_12_20_085212_create_pages_table', 3),
(10, '2021_12_20_114403_create_categories_table', 4),
(11, '2021_12_20_121025_create_sub_categories_table', 5),
(12, '2021_12_21_052600_create_cities_table', 6),
(13, '2021_12_21_052620_create_suburbs_table', 6),
(14, '2021_12_21_093657_create_email_tampletes_table', 7),
(21, '2021_12_21_110958_create_banners_table', 8),
(22, '2021_12_21_111115_create_olde_banners_table', 8),
(23, '2021_12_22_111457_create_sliders_table', 9),
(24, '2021_12_22_111522_create_slider_images_table', 10),
(25, '2021_12_22_113912_create_add_pages_table', 11),
(26, '2021_12_23_042800_create_gallery_images_table', 12),
(29, '2022_01_03_080140_create_gallery_sliders_table', 13),
(31, '2022_01_03_080851_create_page_banners_table', 14),
(33, '2022_01_03_080219_create_worm_sliders_table', 15),
(34, '2021_12_28_080057_create_advertisings_table', 16),
(35, '2022_01_02_115452_create_listings_table', 16),
(36, '2022_01_12_094321_create_watches_table', 17),
(37, '2022_01_12_102207_create_addfees_table', 18),
(38, '2022_01_13_101623_create_lisitng_fees_table', 19),
(39, '2022_01_13_103800_create_listingorders_table', 20),
(40, '2022_01_30_094903_create_client_messages_table', 21),
(41, '2022_01_31_064807_create_business_page_banners_table', 22),
(42, '2022_01_31_085103_create_user_special_prices_table', 23),
(43, '2022_02_03_074827_create_helps_table', 24),
(44, '2022_02_06_074812_create_autction_settings_table', 25),
(45, '2022_02_06_074845_create_bid_settings_table', 25),
(46, '2022_02_06_105914_create_permission_tables', 26),
(47, '2022_02_10_050323_create_user_bids_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `olde_banners`
--

CREATE TABLE `olde_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_page_banner_1_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_1_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_1_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_2_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_2_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_2_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_2_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_3_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_3_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_3_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_3_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_4_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_4_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_4_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_banner_4_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_1_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_1_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_1_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_2_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_2_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_2_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_2_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_3_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_3_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_3_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_3_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_4_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_4_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_4_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cateory_banner_4_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user_id`, `title`, `price`, `user_price`, `created_at`, `updated_at`) VALUES
(1, NULL, ' Normail Category', '10', NULL, '2021-12-20 03:54:42', '2021-12-20 03:54:42'),
(2, NULL, 'Category featured', '20', NULL, '2021-12-20 03:57:09', '2021-12-20 03:57:09'),
(3, NULL, 'homepage featured', '15', NULL, '2021-12-20 03:57:36', '2021-12-20 03:57:36'),
(4, NULL, 'Home Page Gallery', '25', NULL, '2021-12-20 03:58:00', '2021-12-20 03:58:00'),
(5, NULL, 'Urgent', '5', NULL, '2021-12-22 01:37:11', '2021-12-22 01:37:11'),
(6, NULL, 'For Sale', '5', NULL, '2021-12-22 01:38:57', '2021-12-22 01:38:57'),
(7, NULL, 'Look here !', '5', NULL, '2021-12-22 01:39:22', '2021-12-22 01:39:22'),
(8, NULL, 'Business Listing for 12 monthes', '10', NULL, '2021-12-22 04:42:02', '2021-12-22 04:42:02'),
(9, NULL, 'Add to Gallery Silder to page', '19', NULL, '2021-12-22 04:42:43', '2021-12-22 04:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `page_banners`
--

CREATE TABLE `page_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `banner_1_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_1_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_1_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `banner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_words` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_banners`
--

INSERT INTO `page_banners` (`id`, `page_id`, `banner_1_link`, `banner_1_image`, `banner_1_upload`, `banner_1_expired`, `status`, `banner_name`, `key_words`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://www.daraz.com.bd/products/12-i169152164-s1103732605.html?spm=a2a0e.home.flashSale.4.735212f7ZG7gCx&search=1&mp=1&c=fs', '39864.png', '2022-02-06', '2022-02-23', '1', 'Home', '[\"home banner\"]', '2022-02-05 23:16:51', '2022-02-07 05:54:04'),
(2, 1, NULL, '38462.png', '2022-02-06', '2022-02-06', '1', NULL, '[null]', '2022-02-05 23:16:54', '2022-02-06 01:17:25'),
(3, 1, 'front', '63203.png', '2022-02-08', '2022-02-15', '1', 'Front Banner', '[\"front\"]', '2022-02-05 23:17:08', '2022-02-08 00:21:09'),
(4, 1, 't-shirt', '49734.jpg', '2022-02-08', '2022-02-14', '1', 'T-Shirt', '[\"t-shirt\"]', '2022-02-05 23:17:11', '2022-02-08 00:23:01'),
(5, 2, NULL, '70195.png', '2022-02-06', '2022-02-05', '1', NULL, '[null]', '2022-02-05 23:17:23', '2022-02-06 00:58:56'),
(6, 2, NULL, '51242.png', '2022-02-06', '2022-02-23', '1', NULL, '[null]', '2022-02-05 23:17:25', '2022-02-06 00:20:13'),
(7, 2, NULL, '10117.png', '2022-02-06', '2022-02-28', '1', NULL, '[null]', '2022-02-05 23:17:27', '2022-02-06 00:25:12'),
(8, 2, NULL, '82426.png', '2022-02-06', '2022-02-20', '1', NULL, '[null]', '2022-02-05 23:17:29', '2022-02-06 00:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mohsinsikder.cse@gmail.com', '$2y$10$fYsgAZShMBJFwL1TYGqhWu4PuRi7gjS/e.KqagtdkttbtMdsOp2TG', '2021-12-23 05:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'users_index', 'web', NULL, NULL),
(6, 'users_create', 'web', NULL, NULL),
(7, 'users_edit', 'web', NULL, NULL),
(8, 'users_delete', 'web', NULL, NULL),
(9, 'users_status', 'web', NULL, NULL),
(10, 'category_index', 'web', NULL, NULL),
(11, 'category_create', 'web', NULL, NULL),
(12, 'category_edit', 'web', NULL, NULL),
(13, 'category_delete', 'web', NULL, NULL),
(14, 'category_status', 'web', NULL, NULL),
(15, 'subcategory_index', 'web', NULL, NULL),
(16, 'subcategory_create', 'web', NULL, NULL),
(17, 'subcategory_edit', 'web', NULL, NULL),
(20, 'subcategory_delete', 'web', '2022-02-09 04:17:29', '2022-02-09 04:17:29'),
(21, 'subcategory_status', 'web', '2022-02-09 04:18:10', '2022-02-09 04:18:10'),
(22, 'city_index', 'web', '2022-02-09 04:18:10', '2022-02-09 04:18:10'),
(23, 'city_create', 'web', '2022-02-09 04:18:34', '2022-02-09 04:18:34'),
(24, 'city_edit', 'web', '2022-02-09 04:18:34', '2022-02-09 04:18:34'),
(25, 'city_delete', 'web', '2022-02-09 04:18:52', '2022-02-09 04:18:52'),
(26, 'city_status', 'web', '2022-02-09 04:18:52', '2022-02-09 04:18:52'),
(27, 'suburbs_index', 'web', '2022-02-09 04:19:11', '2022-02-09 04:19:11'),
(28, 'suburbs_create', 'web', '2022-02-09 04:19:11', '2022-02-09 04:19:11'),
(29, 'suburbs_edit', 'web', '2022-02-08 22:20:53', '2022-02-08 22:20:53'),
(30, 'suburbs_delete', 'web', '2022-02-08 22:20:53', '2022-02-08 22:20:53'),
(31, 'suburbs_status', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(32, 'users_ads_index', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(33, 'users_ads_create', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(34, 'users_ads_edit', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(35, 'users_ads_delete', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(36, 'users_ads_status', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(37, 'admin_staff_index', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(38, 'admin_staff_create', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(39, 'admin_staff_edit', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(40, 'admin_staff_delete', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(41, 'admin_staff_status', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(42, 'role_permission_index', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(43, 'role_permission_create', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(44, 'role_permission_edit', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(45, 'role_permission_delete', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(46, 'role_permission_status', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(48, 'sales_transcation_view', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(49, 'listing_fees_view', 'web', '2022-02-08 22:20:54', '2022-02-08 22:20:54'),
(50, 'setup', 'web', '2022-02-08 22:20:55', '2022-02-08 22:20:55'),
(51, 't_c', 'web', '2022-02-08 22:20:55', '2022-02-08 22:20:55'),
(52, 'a_u', 'web', '2022-02-08 22:20:55', '2022-02-08 22:20:55'),
(53, 'p_c', 'web', '2022-02-08 22:20:55', '2022-02-08 22:20:55'),
(54, 'view_site_fees', 'web', '2022-02-08 22:20:55', '2022-02-08 22:20:55'),
(55, 'payment_gateway', 'web', '2022-02-08 22:20:55', '2022-02-08 22:20:55'),
(56, 'bannerAndGallery_index', 'web', '2022-02-10 00:52:52', '2022-02-10 00:52:52'),
(57, 'bannerAndGallery_create', 'web', '2022-02-10 00:58:43', '2022-02-10 00:58:43'),
(58, 'bannerAndGallery_edit', 'web', '2022-02-10 00:58:43', '2022-02-10 00:58:43'),
(59, 'bannerAndGallery_delete', 'web', '2022-02-10 00:58:43', '2022-02-10 00:58:43'),
(60, 'bannerAndGallery_status', 'web', '2022-02-10 00:58:43', '2022-02-10 00:58:43'),
(61, 'function_index', 'web', '2022-02-10 01:04:59', '2022-02-10 01:04:59'),
(62, 'function_create', 'web', '2022-02-10 01:04:59', '2022-02-10 01:04:59'),
(63, 'function_edit', 'web', '2022-02-10 01:04:59', '2022-02-10 01:04:59'),
(64, 'function_delete', 'web', '2022-02-10 01:04:59', '2022-02-10 01:04:59'),
(65, 'function_status', 'web', '2022-02-10 01:04:59', '2022-02-10 01:04:59'),
(66, 'auction_index', 'web', '2022-02-10 01:10:33', '2022-02-10 01:10:33'),
(67, 'auction_edit', 'web', '2022-02-10 01:10:33', '2022-02-10 01:10:33'),
(68, 'auction_status', 'web', '2022-02-10 01:10:33', '2022-02-10 01:10:33'),
(69, 'business_page_view', 'web', '2022-02-10 01:17:46', '2022-02-10 01:17:46'),
(70, 'business_management_view', 'web', '2022-02-10 01:17:46', '2022-02-10 01:17:46'),
(71, 'business_transaction_view', 'web', '2022-02-10 01:17:46', '2022-02-10 01:17:46'),
(72, 'business_payment_method_view', 'web', '2022-02-10 01:17:46', '2022-02-10 01:17:46'),
(73, 'email_setting_view', 'web', '2022-02-10 01:24:14', '2022-02-10 01:24:14'),
(74, 'email_templete_view', 'web', '2022-02-10 01:24:14', '2022-02-10 01:24:14'),
(75, 'smtp_setting_view', 'web', '2022-02-10 01:24:14', '2022-02-10 01:24:14'),
(76, 'advance_view', 'web', '2022-02-10 01:28:01', '2022-02-10 01:28:01'),
(77, 'advance_maintenance_view', 'web', '2022-02-10 01:28:01', '2022-02-10 01:28:01'),
(78, 'advance_siteMap_view', 'web', '2022-02-10 01:28:01', '2022-02-10 01:28:01'),
(79, 'user_special_price_index', 'web', '2022-02-10 04:22:22', '2022-02-10 04:22:22'),
(80, 'user_special_price_edit', 'web', '2022-02-10 04:22:22', '2022-02-10 04:22:22'),
(81, 'report_view', 'web', '2022-02-09 23:02:02', '2022-02-09 23:02:02'),
(84, 'site_fees_edit', 'web', '2022-02-10 05:24:14', '2022-02-10 05:24:14'),
(85, 'billing_fees_view', 'web', '2022-02-09 23:26:09', '2022-02-09 23:26:09');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-02-06 05:38:57', '2022-02-06 05:38:57'),
(3, 'Moderator', 'web', '2022-02-07 00:03:16', '2022-02-07 01:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(84, 1),
(85, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7F5GrSvvbF5V1fhUcWsCw12NxE9E9Uxxf4pZAJ3G', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidXNFYXFQQ0ptVUt1S0lXSXdpcHVYMTdFNUJSVnQ1OHB2dHlFSEtUdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3QvZWZveC9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGNmQTQzZHR5NWVxQnJCQW1jSHEzck9pZGlSZ2txVjRQb3h5b0I3a1J4eWh2STQ1c0N2QUVTIjtzOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1644753762);

-- --------------------------------------------------------

--
-- Table structure for table `site_fees`
--

CREATE TABLE `site_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pay` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `page` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_fees`
--

INSERT INTO `site_fees` (`id`, `page_id`, `period`, `price`, `free`, `pay`, `page`, `created_at`, `updated_at`) VALUES
(1, 1, '30', '5.00', '1', '1', 1, '2021-12-20 04:43:01', '2022-02-13 02:53:31'),
(2, 1, '60', '19.00', '0', '1', 1, '2021-12-20 04:43:22', '2022-02-07 05:02:36'),
(3, 2, '30', '15.00', '0', '1', 1, '2021-12-20 04:43:50', '2022-01-31 04:35:59'),
(4, 2, '60', '20.00', '0', '1', 1, '2021-12-20 04:44:02', '2022-01-31 04:36:00'),
(5, 3, '30', '20.00', '0', '1', 1, '2021-12-20 05:19:54', '2022-01-31 04:36:00'),
(6, 3, '60', '35.00', '0', '1', 1, '2021-12-20 05:20:19', '2022-01-31 04:36:22'),
(7, 4, '30', '25.00', '0', '1', 1, '2021-12-20 05:20:36', '2022-01-31 04:36:26'),
(8, 4, '60', '45.00', '0', '1', 1, '2021-12-20 05:20:53', '2022-01-31 04:36:27'),
(9, 5, '0', '10.00', '0', '1', 2, '2021-12-28 01:04:27', '2022-02-13 03:47:31'),
(10, 6, '0', '5.00', '0', '1', 2, '2021-12-28 01:05:20', '2022-01-31 04:36:30'),
(11, 7, '0', '50.00', '0', '0', 2, '2021-12-28 01:05:28', '2022-01-31 04:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_speed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_visible` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_hover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_push` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_speed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_visible` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_hover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_push` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_slider_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suburbs`
--

CREATE TABLE `suburbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `suburbs_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suburbs`
--

INSERT INTO `suburbs` (`id`, `city_id`, `suburbs_name`, `title`, `description`, `kewywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ascot', 'rtyhr', 'drtyhth', '[\"dyht\"]', '1', '2022-01-31 22:58:51', '2022-01-31 22:58:51'),
(2, 6, 'Southern River', 'werf', 'etfgergt', '[\"etgfr\"]', '1', '2022-01-31 22:59:16', '2022-01-31 22:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kewywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `subcat_name`, `title`, `description`, `kewywords`, `status`, `url`, `created_at`, `updated_at`) VALUES
(4, 3, 'Lands', 'tgr', 'rtfhyh', '[\"ujyhui\"]', '1', 'properties-lands', '2022-01-31 22:57:19', '2022-01-31 22:57:19'),
(5, 3, 'Garaes', 'wrfet', 'ertgr', '[\"ryhtu\"]', '1', 'garaes-lands', '2022-01-31 22:57:39', '2022-01-31 22:57:39'),
(6, 3, 'Houses/flat for sell', 'wre', 'tfe5', '[\"etg5r4\"]', '1', 'propertis-house', '2022-01-31 22:58:04', '2022-01-31 22:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `suburbs_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `role_id` int(11) DEFAULT NULL,
  `is_banned` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_c` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_admin` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `facebook_id`, `city_id`, `suburbs_id`, `name`, `email`, `username`, `f_name`, `l_name`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `status`, `role_id`, `is_banned`, `address`, `phone`, `t_c`, `is_admin`, `image`, `last_login_at`, `last_login_ip`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$cfA43dty5eqBrBAmcHq3rOidiRgkqV4PoxyoB7kRxyhvI45sCvAES', NULL, NULL, NULL, NULL, NULL, '0', 1, '0', NULL, NULL, '0', 'admin', NULL, NULL, NULL, NULL, NULL),
(9, NULL, 2, 6, NULL, 'mohsinsikder999@gmail.com', 'admin@gmail.com', 'Admin', 'Admin', NULL, '$2y$10$vsfJ1SBmriGONaPE7lbu6OnAHLd60N8XnUePX7kNd8t.NiQBhiYwG', NULL, NULL, NULL, NULL, NULL, '1', NULL, '0', 'admin@gmail.com', 'mohsinsikder.cse@gmail.com', '0', NULL, NULL, NULL, NULL, '2021-12-27 04:34:56', '2022-01-13 04:12:51'),
(10, NULL, 2, 7, NULL, 'divanserfontein@gmail.com', 'Dserfie', 'Divan', 'Serfontein', NULL, '$2y$10$13FlQ5sUzZlzIBebn9O0LOidX5LbJV.ZHSHeDr6jUH3lpqjlewSb.', NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '25 Spitfire Avenue', '0834129305', '0', NULL, NULL, NULL, NULL, '2022-01-12 13:27:43', '2022-01-12 13:27:43'),
(16, NULL, 2, 4, NULL, 'mohsinsikder.cse@gmail.com', 'stackdevelopers', 'ewr', 'ertfetf', NULL, '$2y$10$cfA43dty5eqBrBAmcHq3rOidiRgkqV4PoxyoB7kRxyhvI45sCvAES', NULL, NULL, NULL, NULL, NULL, '1', NULL, '0', 'mohsinsikder.cse@gmail.com', '123344', '0', NULL, '28910.png', NULL, NULL, '2022-01-13 05:32:56', '2022-02-01 22:57:26'),
(20, NULL, 2, 6, NULL, 'jamil@gmail.com', 'jamil', 'jamil', 'hasan', NULL, '$2y$10$BVZHYLsjZ0c9KcFCtthjHOoNKL/Peix5Bim8i87yUcj9orovZBX46', NULL, NULL, NULL, NULL, NULL, '1', NULL, '0', 'dhaka', '01847313528', '0', NULL, NULL, NULL, NULL, '2022-01-17 22:11:47', '2022-01-17 22:11:47'),
(27, NULL, 2, NULL, NULL, 'mohsinsikder895@gmail.com', 'admigfh', 'ol;op', 'sikder', NULL, '$2y$10$K3p6gopioDfi5oY0UY7Hg.YkRfpfcxKbCXwEJyCBR11XR0wooSNA2', NULL, NULL, NULL, NULL, NULL, '1', NULL, '0', 'mohsinsikder.cse@gmail.com', '01715486265', '0', '0', NULL, NULL, NULL, '2022-02-03 06:03:23', '2022-02-03 06:03:23'),
(28, NULL, NULL, NULL, NULL, 'mohsinsikde@gmail.com', 'mghgf', NULL, NULL, NULL, '$2y$10$ITKGgjZYXS4ytlxUj2NyXO5I0A1pMPYePn.GMfWgug5ne78DVeG1y', NULL, NULL, NULL, NULL, NULL, '0', 3, '0', NULL, NULL, '0', 'admin', NULL, NULL, NULL, '2022-02-09 00:58:01', '2022-02-09 01:34:20'),
(29, NULL, NULL, NULL, NULL, 'mohsinsikde12@gmail.com', 'fgbfhb', NULL, NULL, NULL, '$2y$10$dMMVg1.5D/ed3bHqy9fBJ.UrpXDDxz0rnSNle0A/ensZyLiIPBt.6', NULL, NULL, NULL, NULL, NULL, '0', 3, '0', NULL, NULL, '0', 'admin', NULL, NULL, NULL, '2022-02-09 01:02:35', '2022-02-09 01:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_bids`
--

CREATE TABLE `user_bids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bids`
--

INSERT INTO `user_bids` (`id`, `ad_id`, `user_id`, `bid`, `created_at`, `updated_at`) VALUES
(1, 5, 16, '123', '2022-02-12 01:52:02', '2022-02-12 01:52:02'),
(3, 5, 27, '789', '2022-02-12 01:54:20', '2022-02-12 01:54:20'),
(4, 5, 10, '12344', '2022-02-12 02:51:35', '2022-02-12 02:51:35'),
(5, 5, 27, NULL, '2022-02-12 03:04:51', '2022-02-12 03:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_special_prices`
--

CREATE TABLE `user_special_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `watches`
--

CREATE TABLE `watches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `watches`
--

INSERT INTO `watches` (`id`, `user_id`, `ads_id`, `created_at`, `updated_at`) VALUES
(1, '9', '1', '2022-01-12 03:58:26', '2022-01-12 03:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `worm_sliders`
--

CREATE TABLE `worm_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_speed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_visible` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_hover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_push` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_slider_play` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_1_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_1_upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worm_1_expired` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `worm_sliders`
--

INSERT INTO `worm_sliders` (`id`, `page_id`, `title`, `worm_slider_speed`, `worm_slider_visible`, `worm_slider_hover`, `worm_slider_push`, `worm_slider_play`, `worm_1_link`, `worm_1_image`, `worm_1_upload`, `worm_1_expired`, `banner_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '97609.png', '2022-02-06', '2022-02-20', NULL, '1', '2022-01-10 03:08:10', '2022-02-06 01:15:37'),
(2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '58374.png', NULL, NULL, NULL, '1', '2022-01-10 03:08:16', '2022-01-10 03:08:16'),
(3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '63013.png', NULL, NULL, NULL, '1', '2022-01-10 03:08:22', '2022-01-10 03:08:22'),
(4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '69080.png', NULL, NULL, NULL, '1', '2022-01-10 03:08:29', '2022-01-10 03:08:29'),
(5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '86235.png', NULL, NULL, NULL, '1', '2022-01-10 03:08:35', '2022-01-10 03:08:35'),
(6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '72919.png', '01/30/2022', '02/01/2022', NULL, '1', '2022-01-31 01:24:14', '2022-01-31 01:24:14'),
(7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '93026.png', NULL, NULL, NULL, '1', '2022-02-05 23:12:30', '2022-02-07 05:57:04'),
(8, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67866.png', '2022-02-06', '2022-02-14', NULL, '1', '2022-02-06 00:38:06', '2022-02-06 01:01:03'),
(9, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '59850.png', '2022-02-14', '2022-02-15', NULL, '1', '2022-02-06 00:52:21', '2022-02-06 00:52:21'),
(10, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '22927.png', '2022-02-21', '2022-02-22', NULL, '1', '2022-02-06 00:53:36', '2022-02-06 00:53:36'),
(14, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '54877.jpg', '2022-02-09', '2022-02-16', NULL, '1', '2022-02-08 00:24:46', '2022-02-08 00:24:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfees`
--
ALTER TABLE `addfees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_pages`
--
ALTER TABLE `add_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisings`
--
ALTER TABLE `advertisings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autction_settings`
--
ALTER TABLE `autction_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_settings`
--
ALTER TABLE `bid_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_page_banners`
--
ALTER TABLE `business_page_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_messages`
--
ALTER TABLE `client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_tampletes`
--
ALTER TABLE `email_tampletes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_sliders`
--
ALTER TABLE `gallery_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lisitng_fees`
--
ALTER TABLE `lisitng_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listingorders`
--
ALTER TABLE `listingorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `olde_banners`
--
ALTER TABLE `olde_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_banners`
--
ALTER TABLE `page_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_fees`
--
ALTER TABLE `site_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suburbs`
--
ALTER TABLE `suburbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_bids`
--
ALTER TABLE `user_bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_special_prices`
--
ALTER TABLE `user_special_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watches`
--
ALTER TABLE `watches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worm_sliders`
--
ALTER TABLE `worm_sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addfees`
--
ALTER TABLE `addfees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `add_pages`
--
ALTER TABLE `add_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advertisings`
--
ALTER TABLE `advertisings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `autction_settings`
--
ALTER TABLE `autction_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bid_settings`
--
ALTER TABLE `bid_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `business_page_banners`
--
ALTER TABLE `business_page_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email_tampletes`
--
ALTER TABLE `email_tampletes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gallery_sliders`
--
ALTER TABLE `gallery_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lisitng_fees`
--
ALTER TABLE `lisitng_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `listingorders`
--
ALTER TABLE `listingorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `olde_banners`
--
ALTER TABLE `olde_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page_banners`
--
ALTER TABLE `page_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_fees`
--
ALTER TABLE `site_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suburbs`
--
ALTER TABLE `suburbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_bids`
--
ALTER TABLE `user_bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_special_prices`
--
ALTER TABLE `user_special_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `watches`
--
ALTER TABLE `watches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worm_sliders`
--
ALTER TABLE `worm_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
