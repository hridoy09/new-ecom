-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 10:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bag', '2023-01-16 04:44:58', '2023-01-16 04:44:58'),
(2, 'Almira', '2023-01-31 00:00:03', '2023-01-31 00:00:03'),
(3, 'Mobile', '2023-01-31 00:23:41', '2023-01-31 00:23:41');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_12_061542_create_categories_table', 1),
(6, '2023_01_16_085550_create_subcategories_table', 2),
(7, '2023_01_25_164549_create_products_table', 3),
(8, '2023_01_26_091826_create_sliders_table', 3),
(9, '2023_01_31_065610_create_products_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `image`, `title`, `price`, `created_at`, `updated_at`) VALUES
(1, 3, 4, '/admin/pro_img/favicon.ico', 'Mobile', '300000', '2023-01-31 03:49:54', '2023-01-31 03:49:54'),
(2, 3, 4, 'assets/admin/pro_img/favicon.ico', 'Mobile', '230000', '2023-01-31 03:55:41', '2023-01-31 03:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'mbklllllllllllllll', '5688888', 'hhhhhmmmmmmmmmmmm', NULL, '2023-01-29 02:10:26', '2023-01-29 02:11:01'),
(2, 'hjgh', '34', 'jbhhbhhh', '/admin/slider_img/', '2023-01-29 02:15:24', '2023-01-29 02:15:24'),
(3, 'hhhhhiii', '23', 'mmmmmmmmmm', '/admin/slider_img/', '2023-01-29 02:18:30', '2023-01-29 02:18:30'),
(4, 'cgcgcg', '33', 'hhhhhhhh', '/admin/slider_img/', '2023-01-29 02:25:53', '2023-01-29 02:25:53'),
(5, 'jjjjjjj', '34', 'aaaaaa', '/admin/slider_img/', '2023-01-29 02:31:21', '2023-01-29 02:31:21'),
(6, 'mmmmmmmmmm', '12', 'cccccccccc', '/admin/slider_img/', '2023-01-29 02:34:20', '2023-01-29 02:34:20'),
(7, 'bbbbbbbbbbb', '12', 'ccccccccccc', '/admin/slider_img/', '2023-01-29 02:40:51', '2023-01-29 02:40:51'),
(8, 'hhhhhhh', '12', 'vvvvvvvv', 'admin/slider_img/', '2023-01-29 02:46:52', '2023-01-29 02:46:52'),
(9, 'ggggggggg', '12', 'bbbbbbbbb', 'admin/slider_img/', '2023-01-29 02:48:25', '2023-01-29 02:48:25'),
(10, 'fhhhhh', '33', 'hhhhhh', 'admin/slider_img/', '2023-01-29 03:09:49', '2023-01-29 03:09:49'),
(11, 'bjbjb', '12', 'ccccccccc', 'admin/slider_img/', '2023-01-29 03:18:13', '2023-01-29 03:18:13'),
(12, 'nhkhk', '80', 'hvhv', 'admin/slider_img/', '2023-01-29 03:22:55', '2023-01-29 03:22:55'),
(13, 'hkhik', '80', 'g', 'admin/', '2023-01-29 03:23:56', '2023-01-29 03:23:56'),
(14, 'jj', '80', 'hvhvhhhhh', 'admin/slider_img/', '2023-01-29 03:27:48', '2023-01-29 03:27:48'),
(15, 'bj', '80', 'hvhv', 'frontend/admin/slider_img/', '2023-01-29 03:29:47', '2023-01-29 03:29:47'),
(16, 'hhi', '80', 'hvhv', 'frontend/admin/slider_img/', '2023-01-29 03:30:28', '2023-01-29 03:30:28'),
(17, 'fhhfh', '50', 'hvhv', 'frontend/admin/slider_img/', '2023-01-29 03:31:09', '2023-01-29 03:31:09'),
(18, 'jhb', '80', 'hvhv', 'frontend/admin/slider_img/', '2023-01-29 03:54:26', '2023-01-29 03:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 1, 'abc', '2023-01-16 04:52:36', '2023-01-16 04:52:36'),
(3, 1, 'Nokia', '2023-01-29 05:59:07', '2023-01-29 05:59:07'),
(4, 3, 'Redmi', '2023-01-31 00:24:12', '2023-01-31 00:24:12');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
