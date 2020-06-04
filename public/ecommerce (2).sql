-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 07:15 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catelogue_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `catelogue_id`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Anniversary Gifts', 16, NULL, 1, NULL, NULL, '2020-05-15 15:46:59', '2020-05-15 15:46:59'),
(5, 'Birthday Gifts', 16, NULL, 1, NULL, NULL, '2020-05-14 12:34:34', '2020-05-15 15:47:58'),
(7, 'House Warming Gifts', 16, NULL, 1, NULL, NULL, '2020-05-14 12:35:31', '2020-05-15 15:48:22'),
(8, 'Personalized Gifts', 16, NULL, 1, NULL, NULL, '2020-05-14 12:36:07', '2020-05-15 15:48:11'),
(9, 'Photo Gifts', 16, NULL, 1, NULL, NULL, '2020-05-14 12:36:24', '2020-05-15 15:47:14'),
(10, 'Kiddo Gifts', 16, NULL, 1, NULL, NULL, '2020-05-14 12:36:41', '2020-05-15 15:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `catelogs`
--

CREATE TABLE `catelogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catelogue_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catelogs`
--

INSERT INTO `catelogs` (`id`, `catelogue_name`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(11, 'CLOTHING', NULL, 1, NULL, NULL, '2020-05-15 15:31:36', '2020-05-15 15:31:36'),
(12, 'KITCHEN & BARWARE GIFTS', NULL, 1, NULL, NULL, '2020-05-15 15:32:14', '2020-05-15 15:40:16'),
(13, 'MOBILE COVER', NULL, 1, NULL, NULL, '2020-05-15 15:32:38', '2020-05-15 15:32:38'),
(15, 'STATIONARY', NULL, 1, NULL, NULL, '2020-05-15 15:41:03', '2020-05-15 15:41:03'),
(16, 'GIFT', NULL, 1, NULL, NULL, '2020-05-15 15:45:36', '2020-05-15 15:45:36');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_definations`
--

CREATE TABLE `form_definations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_json` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_definations`
--

INSERT INTO `form_definations` (`id`, `name`, `form_json`, `created_at`, `updated_at`) VALUES
(1, 'PRODUCT', '{\"PRODUCT NAME\":\"text\",\"PRODUCT CODE\":\"text\",\"PRODUCT COLOR\":\"text\",\"PRODUCT DESCRIPTION\":\"textarea\",\"PRODUCT PRICE\":\"number\",\"PRODUCT IMAGES\":\"file\",\"col\":\"1\",\"col_1\":\"2\",\"row\":\"6\",\"save\":\"Y\",\"cancel\":\"Y\",\"update\":\"Y\",\"delete\":\"Y\"}', '2020-05-01 13:51:05', '2020-05-01 13:51:05'),
(2, 'CATEGORY', '{\"CATEGORY NAME\":\"text\",\"CATELOGUE NAME\":\"text\",\"CATEGORY DESCRIPTION\":\"textarea\",\"col\":\"1\",\"col_1\":\"2\",\"row\":\"3\",\"save\":\"Y\",\"cancel\":\"Y\",\"update\":\"Y\",\"delete\":\"Y\"}', '2020-05-01 13:51:05', '2020-05-01 13:51:05'),
(3, 'CATELOGUE', '{\"CATELOGUE NAME\":\"text\",\"CATELOGUE DESCRIPTION\":\"textarea\",\"col\":\"1\",\"col_1\":\"2\",\"row\":\"2\",\"save\":\"Y\",\"cancel\":\"Y\",\"update\":\"Y\",\"delete\":\"Y\"}', '2020-05-01 13:51:05', '2020-05-01 13:51:05');

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
(102, '2014_10_12_000000_create_users_table', 1),
(103, '2014_10_12_100000_create_password_resets_table', 1),
(104, '2019_08_19_000000_create_failed_jobs_table', 1),
(105, '2020_04_02_031826_create_roles_table', 1),
(106, '2020_04_02_032244_create_role_user_table', 1),
(107, '2020_04_04_214527_create_foreign_keys_for_role_user_table', 1),
(108, '2020_04_09_202759_product', 1),
(109, '2020_04_11_155028_create_form_definations_table', 1),
(110, '2020_05_01_053021_create_faqs_table', 1),
(111, '2020_05_01_053220_create_catelogs_table', 1),
(112, '2020_05_01_053256_create_categories_table', 1),
(113, '2020_05_24_194826_create_websockets_statistics_entries_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categories_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `purchase_price` double NOT NULL DEFAULT 0,
  `home_page` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `description`, `color`, `price`, `images`, `status`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`, `categories_name`, `size`, `unit`, `stock`, `brand_name`, `quantity`, `discount`, `purchase_price`, `home_page`) VALUES
(11, 'Surendra', '54', 'adss', 'ad', '749.99', '[\"uploads\\/product\\/70952.jpg\"]', NULL, NULL, NULL, NULL, '2020-05-22 16:27:23', '2020-05-22 16:27:23', '1', 'ad', '2121', 'on', 'Kawle', 6, 133, 0, '0'),
(14, 'Surendra', '548', 'cd', 'red', '1234', '[\"uploads\\/product\\/71222.jpg\",\"uploads\\/product\\/32940.jpg\",\"uploads\\/product\\/62375.jpg\"]', NULL, NULL, NULL, NULL, '2020-05-22 17:46:39', '2020-05-22 17:46:39', '1', '123', 'wewwqer', 'on', 'Kawle', 32, 123, 0, 'on'),
(16, 'Surendra', '548852', 'cd', 'red', '1234', '[\"uploads\\/product\\/11024.jpg\",\"uploads\\/product\\/49712.jpg\",\"uploads\\/product\\/8649.jpg\"]', NULL, NULL, NULL, NULL, '2020-05-22 17:48:16', '2020-05-22 17:48:16', '1', '123', 'wewwqer', 'on', 'Kawle', 32, 123, 0, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', '2020-05-01 13:51:04', '2020-05-01 13:51:04'),
(2, 'USER', '2020-05-01 13:51:04', '2020-05-01 13:51:04'),
(3, 'ACCOUNT', '2020-05-01 13:51:04', '2020-05-01 13:51:04'),
(4, 'AUTHOR', '2020-05-01 13:51:04', '2020-05-01 13:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `google_id`, `name`, `image`, `default_image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'ADMIN USER', NULL, NULL, 'admin@admin.com', NULL, '$2y$10$AKf2hkNhQnZY.syjIXacVOVGGEzwwC.vml2zswQ1.xgPz0mltgc2K', NULL, '2020-05-01 13:51:04', '2020-05-01 13:51:04'),
(2, '', 'GENERIC USER', NULL, NULL, 'user@user.com', NULL, '$2y$10$HOEoiBQ1a8DFbRkoz9fSoea3uBDlBptHOKNnxr7qDwupnC4zxQ4UG', NULL, '2020-05-01 13:51:05', '2020-05-01 13:51:05'),
(3, '', 'ACCOUNT USER', NULL, NULL, 'account@account.com', NULL, '$2y$10$CFaG36E7wUmgkCO1EkMXxOH7WmC2Tg0./v8HsbRtFXW3G48p61RxG', NULL, '2020-05-01 13:51:05', '2020-05-01 13:51:05'),
(4, '', 'AUTHOR USER', NULL, NULL, 'author@author.com', NULL, '$2y$10$ZJ/wYlMrazx2oDIEbNTv1Oy/CuNk3ECGPwpd892pGrtWSVALl1R6S', NULL, '2020-05-01 13:51:05', '2020-05-01 13:51:05'),
(5, '115010228527291714480', 'Web Humsafar', NULL, NULL, 'webhumsafar@gmail.com', NULL, '21232f297a57a5a743894a0e4a801fc3', 'gNkfbUQHt3dvqloDDe5KUWOGqx3c2SdUmTrPF6DsT1oeTRgLjS6DGeB5t09m', '2020-05-23 16:33:35', '2020-05-23 16:33:35'),
(6, '106713379545423173674', 'Surendra Kawle', NULL, NULL, 'surendrakawle0@gmail.com', NULL, '21232f297a57a5a743894a0e4a801fc3', 'I2XGbIwIS6LDRhbm8zZywbMo2gf5kMmKJlBLtCoIo8ZWfe8CxA6ewfkjhza1', '2020-05-24 11:32:20', '2020-05-24 11:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catelogs`
--
ALTER TABLE `catelogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_definations`
--
ALTER TABLE `form_definations`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `catelogs`
--
ALTER TABLE `catelogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_definations`
--
ALTER TABLE `form_definations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
