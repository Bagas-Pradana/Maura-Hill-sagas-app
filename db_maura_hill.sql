-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2025 at 07:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_maura_hill`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house_products`
--

CREATE TABLE `house_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `specification_list` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specification_list`)),
  `specification_table` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specification_table`)),
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_products`
--

INSERT INTO `house_products` (`id`, `uuid`, `unit`, `title`, `description`, `specification_list`, `specification_table`, `images`, `created_at`, `updated_at`) VALUES
(1, '8a7b8aab-3e6c-467a-82c1-acf0b3006fab', 'Everest', 'Rumah Mewah Everest', 'Rumah satu lantai ini cocok untuk Anda dan keluarga Anda untuk bertumbuh bersama dan menikmati lingkungan yang nyaman.', '[\"dua lantai\",\"6 x 10\",null]', '[{\"label\":\"Luas Tanah\",\"value\":60,\"unit\":\"m\\u00b2\"},{\"label\":\"Luas Bangunan\",\"value\":44,\"unit\":\"m\\u00b2\"},{\"label\":\"Kamar Tidur\",\"value\":2,\"unit\":\"Buah\"},{\"label\":\"Kamar Mandi\",\"value\":2,\"unit\":\"Buah\"},{\"label\":\"Parkir\",\"value\":1,\"unit\":\"Mobil\"}]', '[{\"order\":1,\"url\":\"images\\/product\\/house.png\",\"title\":\"preview\"},{\"order\":2,\"url\":\"images\\/product\\/layout2-everest.png\",\"title\":\"Specification\"},{\"order\":3,\"url\":\"images\\/product\\/layout3-everest.png\",\"title\":\"Specification\"}]', '2025-02-25 02:01:13', '2025-02-25 02:01:13'),
(2, '4ecb57be-a324-4731-8309-8bc8bc60ef04', 'Monstera', 'Rumah Minimalis Era', 'Rumah satu lantai yang sangat populer di Grand Harvest. Rumah dengan low cost maintenance yang cocok untuk kamu dengan gaya hidup compact dan minimalist.', '[\"satu lantai\",\"5 x 12\",null]', '[{\"label\":\"Luas Tanah\",\"value\":60,\"unit\":\"m\\u00b2\"},{\"label\":\"Luas Bangunan\",\"value\":30,\"unit\":\"m\\u00b2\"},{\"label\":\"Kamar Tidur\",\"value\":2,\"unit\":\"Buah\"},{\"label\":\"Kamar Mandi\",\"value\":1,\"unit\":\"Buah\"},{\"label\":\"Parkir\",\"value\":1,\"unit\":\"Mobil\"}]', '[{\"order\":1,\"url\":\"images\\/product\\/monstera.png\",\"title\":\"preview\"},{\"order\":2,\"url\":\"images\\/product\\/layout2-monstera.png\",\"title\":\"Specification\"}]', '2025-02-25 02:01:13', '2025-02-25 02:01:13'),
(3, 'da79c29d-8162-4667-b67a-579c081450a6', 'Are', 'Rumah Nyaman Harmony', 'Rumah dengan 1 kamar, cocok untuk millennial yang produktif atau pasangan muda.', '[\"satu lantai\",\"5 x 12\",null]', '[{\"label\":\"Luas Tanah\",\"value\":60,\"unit\":\"m\\u00b2\"},{\"label\":\"Luas Bangunan\",\"value\":25,\"unit\":\"m\\u00b2\"},{\"label\":\"Kamar Tidur\",\"value\":1,\"unit\":\"Buah\"},{\"label\":\"Kamar Mandi\",\"value\":1,\"unit\":\"Buah\"},{\"label\":\"Parkir\",\"value\":1,\"unit\":\"Mobil\"}]', '[{\"order\":1,\"url\":\"images\\/product\\/are.png\",\"title\":\"preview\"},{\"order\":2,\"url\":\"images\\/product\\/layout2-are.png\",\"title\":\"Specification\"}]', '2025-02-25 02:01:13', '2025-02-25 02:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_02_23_041902_create_settings_table', 1),
(6, '2025_02_23_091054_create_house_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `key` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `value` text NOT NULL,
  `is_array` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `uuid`, `key`, `description`, `value`, `is_array`, `created_at`, `updated_at`) VALUES
(1, '62d43c6d-0935-43ef-9ae4-74863ee90c94', 'app-name', 'Nama aplikasi', '\"\\\"My Laravel App\\\"\"', 0, '2025-02-25 02:01:13', '2025-02-25 02:01:13'),
(2, '496c78ec-09d7-411e-b2a5-dbaf0fb745d7', 'whatsapp-contact', 'Nomor kontak WhatsApp', '\"\\\"+6281234567890\\\"\"', 0, '2025-02-25 02:01:13', '2025-02-25 02:01:13'),
(3, '06b57d77-4be3-4291-9f8e-a2210421baf7', 'email-support', 'Email dukungan pelanggan', '\"\\\"support@example.com\\\"\"', 0, '2025-02-25 02:01:13', '2025-02-25 02:01:13'),
(4, '931b8b24-8189-4d21-9245-6a036c2dbb6a', 'social-media-links', 'Daftar link media sosial', '\"{\\\"facebook\\\":\\\"https:\\\\\\/\\\\\\/facebook.com\\\",\\\"twitter\\\":\\\"https:\\\\\\/\\\\\\/twitter.com\\\",\\\"instagram\\\":\\\"https:\\\\\\/\\\\\\/instagram.com\\\"}\"', 1, '2025-02-25 02:01:13', '2025-02-25 02:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$C3fnKq01A8ZDVr5AvF57SOYeOXmkQ74P2AIoRS6mUpihWMH.ZyNUK', NULL, '2025-02-25 02:01:13', '2025-02-25 02:01:13');

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
-- Indexes for table `house_products`
--
ALTER TABLE `house_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `house_products_unit_unique` (`unit`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_uuid_unique` (`uuid`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

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
-- AUTO_INCREMENT for table `house_products`
--
ALTER TABLE `house_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
