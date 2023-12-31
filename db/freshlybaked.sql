-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2023 at 02:09 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshlybaked`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` date NOT NULL,
  `total_price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `code`, `user_id`, `status`, `date`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 'SAB-20231231-191', 1, 1, '2023-12-31', 28520, '2023-12-30 17:17:11', '2023-12-30 17:18:50'),
(3, 'SAB-20231231-592', 1, 1, '2023-12-31', 80700, '2023-12-30 18:53:15', '2023-12-30 19:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `total_price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`id`, `menu_id`, `cart_id`, `quantity`, `price`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 1, 28520, 28520, '2023-12-30 17:17:11', '2023-12-30 17:17:11'),
(3, 5, 3, 1, 80700, 80700, '2023-12-30 18:53:15', '2023-12-30 18:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Cake', 'cake', '2023-12-30 00:22:39', '2023-12-30 00:22:39'),
(2, 'Bread', 'bread', '2023-12-30 00:22:39', '2023-12-30 00:22:39'),
(3, 'Signature', 'signature', '2023-12-30 00:22:39', '2023-12-30 00:22:39'),
(4, 'Side', 'side', '2023-12-30 00:22:39', '2023-12-30 00:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_api` int NOT NULL DEFAULT '-1',
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `price`, `quantity`, `description`, `image`, `is_api`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Destany Dooley', 'destany-dooley', 43760, 4, 'Rem tempore dolore praesentium quaerat possimus velit. Modi aut veritatis aut consequatur.', NULL, -1, 3, '2023-12-30 00:22:39', '2023-12-30 00:22:39'),
(2, 'Arlo Heathcote', 'arlo-heathcote', 53670, 4, 'Atque iste et blanditiis. Perspiciatis molestias amet repudiandae nostrum officiis expedita ipsa occaecati. Aperiam magni culpa eligendi rerum modi minima maiores necessitatibus. Ut labore repudiandae fugit ipsam at.', NULL, -1, 1, '2023-12-30 00:22:39', '2023-12-30 00:22:39'),
(3, 'Myrna Kuphal', 'myrna-kuphal', 84984, 3, 'Dolorem omnis voluptatibus quia a. Earum ipsam et aut quidem et. Laboriosam in consequuntur consequatur quae nihil est. Libero ut deleniti incidunt beatae porro.', NULL, -1, 2, '2023-12-30 00:22:39', '2023-12-30 00:22:39'),
(4, 'Enos Hessel', 'enos-hessel', 84270, 1, 'Odit animi corporis quis natus. Suscipit cumque fugiat non qui quam omnis et. Amet quo atque sit voluptatem nihil corporis expedita repellendus.', NULL, -1, 2, '2023-12-30 00:22:39', '2023-12-30 00:22:39'),
(5, 'Mr. Unique Hoeger II', 'mr-unique-hoeger-ii', 80700, 4, 'A quibusdam ipsa nesciunt explicabo. Necessitatibus placeat hic voluptatem esse. Officiis placeat qui ut corporis fugiat et nobis.', NULL, -1, 3, '2023-12-30 00:22:40', '2023-12-30 19:04:38'),
(6, 'Kattie Mills', 'kattie-mills', 64179, 2, 'Nihil quis architecto optio excepturi laudantium quasi aliquam. Ullam possimus quia sint exercitationem et. Odio laudantium ut dolores assumenda qui et. Distinctio voluptatibus quod non consectetur. Odio nemo enim rerum autem atque.', NULL, -1, 1, '2023-12-30 00:22:40', '2023-12-30 00:22:40'),
(7, 'Domingo Bradtke', 'domingo-bradtke', 63509, 2, 'Voluptas corporis ratione delectus autem eos. Velit eius rem reiciendis voluptas sunt illum. Deleniti qui ratione corrupti eius id ipsum. Ut doloribus voluptatem deserunt quis qui suscipit.', NULL, -1, 2, '2023-12-30 00:22:40', '2023-12-30 00:22:40'),
(8, 'Ms. Brigitte Walsh', 'ms-brigitte-walsh', 92371, 1, 'Ullam repellat quaerat excepturi a et. In aliquam minima aut harum cum in amet. Est quia dolores iste.', NULL, -1, 1, '2023-12-30 00:22:40', '2023-12-30 00:22:40'),
(9, 'Prof. Elaina Bins', 'prof-elaina-bins', 27907, 5, 'Neque aut totam officiis. Similique autem sint impedit facilis vel sit expedita. Qui nihil laudantium temporibus quam qui. Sunt laudantium nihil consequatur.', NULL, -1, 1, '2023-12-30 00:22:40', '2023-12-30 00:22:40'),
(10, 'Charlotte Marks', 'charlotte-marks', 28520, 10, '<div>Ab saepe atque qui in ab recusandae. Non vel dicta quas quasi hic. Autem corporis laudantium reprehenderit. In eos rerum facere et est iusto.</div>', 'menu-images/Ne49shTRsDG2bkJt7TrKzrrQyylnYFARhaqRBs5n.jpg', -1, 3, '2023-12-30 00:22:40', '2023-12-30 18:07:18'),
(11, 'Blini Pancakes', 'blini-pancakes', NULL, NULL, 'Blini Pancakes made by the mealdb api', 'https://www.themealdb.com/images/media/meals/0206h11699013358.jpg', 1, 4, '2023-12-30 00:22:50', '2023-12-30 00:22:50'),
(12, 'Boulangère Potatoes', 'boulangere-potatoes', NULL, NULL, 'Boulangère Potatoes made by the mealdb api', 'https://www.themealdb.com/images/media/meals/qywups1511796761.jpg', 1, 4, '2023-12-30 00:22:50', '2023-12-30 00:22:50'),
(13, 'Brie wrapped in prosciutto & brioche', 'brie-wrapped-in-prosciutto-brioche', NULL, NULL, 'Brie wrapped in prosciutto & brioche made by the mealdb api', 'https://www.themealdb.com/images/media/meals/qqpwsy1511796276.jpg', 1, 4, '2023-12-30 00:22:50', '2023-12-30 00:22:50'),
(14, 'Burek', 'burek', NULL, NULL, 'Burek made by the mealdb api', 'https://www.themealdb.com/images/media/meals/tkxquw1628771028.jpg', 1, 4, '2023-12-30 00:22:50', '2023-12-30 00:22:50'),
(15, 'Corba', 'corba', NULL, NULL, 'Corba made by the mealdb api', 'https://www.themealdb.com/images/media/meals/58oia61564916529.jpg', 1, 4, '2023-12-30 00:22:50', '2023-12-30 00:22:50'),
(16, 'Fennel Dauphinoise', 'fennel-dauphinoise', NULL, NULL, 'Fennel Dauphinoise made by the mealdb api', 'https://www.themealdb.com/images/media/meals/ytttsv1511798734.jpg', 1, 4, '2023-12-30 00:22:50', '2023-12-30 00:22:50'),
(17, 'Feteer Meshaltet', 'feteer-meshaltet', NULL, NULL, 'Feteer Meshaltet made by the mealdb api', 'https://www.themealdb.com/images/media/meals/9f4z6v1598734293.jpg', 1, 4, '2023-12-30 00:22:50', '2023-12-30 00:22:50'),
(18, 'French Onion Soup', 'french-onion-soup', NULL, NULL, 'French Onion Soup made by the mealdb api', 'https://www.themealdb.com/images/media/meals/xvrrux1511783685.jpg', 1, 4, '2023-12-30 00:22:50', '2023-12-30 00:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_29_041239_create_categories_table', 1),
(6, '2023_11_29_041240_create_menus_table', 1),
(7, '2023_12_06_092034_add_google_id_column', 1),
(8, '2023_12_19_132106_create_carts_table', 1),
(9, '2023_12_29_132152_create_cart_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` bigint DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `date_of_birth`, `phone_number`, `address`, `is_admin`, `image`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Muhammad Lutfi', 'ghifarullah', 'ghifarullah@email.com', NULL, '$2y$12$yXsZUupJ13RdVbWx2SjTBOwvHUJ9fQqyxEmkLSycZyEoS8odbUaGq', '2002-10-11', 81222024097, 'Jl. Sarijadi 28', 1, 'User-images/MoMd3fGNPa17RCkds1r060pP92l56Au1TCs2Dkgs.jpg', NULL, '2023-12-30 00:22:39', '2023-12-30 17:28:06', NULL),
(2, 'Keyshawn Lockman', 'shanelle10', 'claudie.robel@example.net', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 0, NULL, NULL, '2023-12-30 00:22:39', '2023-12-30 00:22:39', NULL),
(3, 'Dr. Dorthy Beer', 'kleannon', 'alexa.greenholt@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 0, NULL, NULL, '2023-12-30 00:22:39', '2023-12-30 00:22:39', NULL),
(4, 'Burnice Runte', 'karl.bartoletti', 'fausto57@example.org', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 0, NULL, NULL, '2023-12-30 00:22:39', '2023-12-30 00:22:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_details_menu_id_foreign` (`menu_id`),
  ADD KEY `cart_details_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`),
  ADD KEY `menus_category_id_foreign` (`category_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_details_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
