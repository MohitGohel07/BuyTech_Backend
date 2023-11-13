-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 03:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buy_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `addrres_details`
--

CREATE TABLE `addrres_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `count` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addrres_details`
--

INSERT INTO `addrres_details` (`id`, `user_id`, `fullname`, `phone`, `location`, `city`, `pincode`, `count`, `created_at`, `updated_at`) VALUES
(50, '10', 'mohit gohel', '8780524057', 'ramnth para', 'RAJKOT', '360001', '1', NULL, NULL),
(51, '10', 'mohit gohel', '8780524057', 'ramnath para', 'rajkot', '360003', '1', NULL, NULL),
(52, '10', 'Mohit Gohel', '8989555', 'rjk', 'rjk', '360003', '1', NULL, NULL),
(53, '10', 'mgjhg', 'fdfgfd', 'fgfd', 'dgf', 'fgfdr', '1', NULL, NULL),
(54, '10', 'mohit gohel', '4324332', 'ffdlkj', 'fvkhlff', '360003', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL DEFAULT '1',
  `price` varchar(255) DEFAULT NULL,
  `totalprice` varchar(255) DEFAULT NULL,
  `user_id` varchar(250) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `count` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `image`, `model_name`, `quantity`, `price`, `totalprice`, `user_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(65, '1683788484.jpg', 'I Phone 14', '1', '50000', '50000', '10', '1', '1', NULL, NULL),
(66, '1683791206.jpg', 'HP', '1', '65000', '65000', '10', '3', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', '2023-05-11 01:29:31', '2023-05-11 01:29:31'),
(2, 'Laptop', '2023-05-11 01:29:37', '2023-05-11 01:29:37'),
(3, 'Charger', '2023-05-11 01:29:45', '2023-05-11 01:29:45'),
(4, 'Airbud', '2023-05-11 01:30:08', '2023-05-11 01:30:08');

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
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2013_04_06_121840_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_11_113853_create_types_table', 1),
(7, '2023_04_11_113854_create_genders_table', 1),
(8, '2023_04_11_113855_create_categories_table', 1),
(9, '2023_04_11_113856_create_products_table', 1),
(10, '2023_04_19_120005_create_carts_table', 1),
(11, '2023_04_27_104217_create_orders_table', 1),
(13, '2023_05_11_101510_cart', 2),
(14, '2023_05_15_120554_wishlist', 3),
(15, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
(16, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
(17, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
(18, '2016_06_01_000004_create_oauth_clients_table', 4),
(19, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4),
(20, '2023_05_23_054104_addrres_details', 5),
(21, '2023_05_23_105651_order', 6);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'y4FHNIQpWK4mFdXDREEQ26AB6dVE3ShPOeicGbMw', NULL, 'http://localhost', 1, 0, 0, '2023-05-18 02:21:17', '2023-05-18 02:21:17'),
(2, NULL, 'Laravel Password Grant Client', 'br2FpCJ4YGWmVscEdQupFdMUAx0SaR73wTjzYsdJ', 'users', 'http://localhost', 0, 1, 0, '2023-05-18 02:21:17', '2023-05-18 02:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-05-18 02:21:17', '2023-05-18 02:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT 'Pending',
  `payment_methods` varchar(255) DEFAULT NULL,
  `count` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `model_name`, `price`, `quantity`, `image`, `order_status`, `payment_methods`, `count`, `created_at`, `updated_at`) VALUES
(25, '10', 'I Phone 14', '50000', '1', '1683788484.jpg', 'Accept', 'Cash On Delivery', '1', NULL, NULL),
(26, '10', 'I Phone 14', '150000', '3', '1683788484.jpg', 'Accept', 'Cash On Delivery', '1', NULL, NULL),
(27, '10', 'Samsung Ultra', '80000', '1', '1683791879.jpg', 'Pending', 'Cash On Delivery', '1', NULL, NULL),
(28, '10', 'HP', '65000', '1', '1683791206.jpg', 'Pending', 'Cash On Delivery', '1', NULL, NULL),
(29, '10', 'HP', '65000', '1', '1683791206.jpg', 'Pending', 'Cash On Delivery', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT '1',
  `payment_status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 9, 'Laravel Password Grant Client', '35b58a4103a3e62e450e5de76e42b6b64021c1e911fad296292255e8e7f819b9', '[\"*\"]', NULL, NULL, '2023-05-12 07:21:00', '2023-05-12 07:21:00'),
(2, 'App\\Models\\User', 9, 'Laravel Password Grant Client', '658cdb453f3e8be7dd7b4ba3ae9df6f7e608e9e9727b213ae2f6b2cdcf9dcc46', '[\"*\"]', NULL, NULL, '2023-05-12 07:24:27', '2023-05-12 07:24:27'),
(3, 'App\\Models\\User', 9, 'Laravel Password Grant Client', '62382b66446813e70161da74b86862231320b148559d655ae7a8e3e7b1ac17b8', '[\"*\"]', NULL, NULL, '2023-05-12 07:31:05', '2023-05-12 07:31:05'),
(4, 'App\\Models\\User', 9, 'Laravel Password Grant Client', '9f640059b7db678f19c2d857b7205e9863c07c4ea53ab33cb3e8b4cdb1f3d946', '[\"*\"]', NULL, NULL, '2023-05-12 07:31:58', '2023-05-12 07:31:58'),
(5, 'App\\Models\\User', 9, 'Laravel Password Grant Client', 'a161980e42d4e5ae4cab21e1a4340c5e1927bedb48e71ff1b6dc6a9e12b8f0a1', '[\"*\"]', NULL, NULL, '2023-05-12 07:32:21', '2023-05-12 07:32:21'),
(6, 'App\\Models\\User', 9, 'Laravel Password Grant Client', 'ee998306aed10dd9d322f82ee0dd43aa48e55215816bcea2cad54de6f1e10f5f', '[\"*\"]', NULL, NULL, '2023-05-12 07:32:38', '2023-05-12 07:32:38'),
(7, 'App\\Models\\User', 9, 'Laravel Password Grant Client', 'f9652c8ef44914a0d4c7a962fbcb127719966b31c6ffbd8cadf76a5a63cc3e47', '[\"*\"]', NULL, NULL, '2023-05-12 22:41:35', '2023-05-12 22:41:35'),
(8, 'App\\Models\\User', 10, 'Laravel Password Grant Client', '3b0aa5342fad9587f6cccabd651548751c1e30db49bbb0310f7602739e7c249d', '[\"*\"]', NULL, NULL, '2023-05-12 23:03:35', '2023-05-12 23:03:35'),
(9, 'App\\Models\\User', 10, 'MyApp', 'd33d933263fa29052e3e69512ff843157f27cc559739e8c01ba2543f110ad694', '[\"*\"]', NULL, NULL, '2023-05-12 23:22:06', '2023-05-12 23:22:06'),
(10, 'App\\Models\\User', 10, 'MyApp', '82816685537be19dde7acbc706bf911034e92875117354031407aae818a90fd1', '[\"*\"]', NULL, NULL, '2023-05-12 23:22:26', '2023-05-12 23:22:26'),
(11, 'App\\Models\\User', 10, 'MyApp', '6af21a5a5813b3c96fd7b74ef9dbda4a752e0d4a127bb47039bd539abd79adfd', '[\"*\"]', NULL, NULL, '2023-05-12 23:23:16', '2023-05-12 23:23:16'),
(12, 'App\\Models\\User', 10, 'MyApp', '752ac142bde08364bfcb5ade8556d1075eba1ecc88a2ae4b216b20dbd2db68c9', '[\"*\"]', NULL, NULL, '2023-05-12 23:23:48', '2023-05-12 23:23:48'),
(13, 'App\\Models\\User', 10, 'MyApp', '7ab74ef830c537d1765f27de6403bc4260b2e7ef4cbb6e6c175f1c38097fd939', '[\"*\"]', NULL, NULL, '2023-05-15 00:53:13', '2023-05-15 00:53:13'),
(14, 'App\\Models\\User', 13, 'MyApp', '6e7fbc17080342d13d77099e002a361637c5212da9d7c786b07afd586928b041', '[\"*\"]', NULL, NULL, '2023-05-15 02:13:43', '2023-05-15 02:13:43'),
(15, 'App\\Models\\User', 13, 'MyApp', 'de6a58d55e428fd3f41841cf06bc4ebd8e295820ee08305447d66961c64e5d22', '[\"*\"]', NULL, NULL, '2023-05-15 02:14:32', '2023-05-15 02:14:32'),
(16, 'App\\Models\\User', 13, 'MyApp', '45f74021c4d7118dbf3ac21c684f5320d1a04f116f4bef64050b85b6b3c7028f', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:52', '2023-05-15 04:19:52'),
(17, 'App\\Models\\User', 13, 'MyApp', 'e73d2453858eb763338a5918c8680c360c1063e94da7982f1506d8694e814230', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:53', '2023-05-15 04:19:53'),
(18, 'App\\Models\\User', 13, 'MyApp', '7f5e3fed25affc50dbe0365cd74e981b1e6d52b9585ce8915a00f28e609e2efb', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:53', '2023-05-15 04:19:53'),
(19, 'App\\Models\\User', 13, 'MyApp', '8a8eae4754c7727579b2b54966966de1646b2eb6bf7f3349002793c41ae04009', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:53', '2023-05-15 04:19:53'),
(20, 'App\\Models\\User', 13, 'MyApp', 'af606ea4d4672cb84f70c881b910a2cb6f7487230a70145094d516b422e1143f', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:53', '2023-05-15 04:19:53'),
(21, 'App\\Models\\User', 13, 'MyApp', 'c2a215d82e3a4066a443acde68fd868acb4b2297f563ece96c42dbf54fb44187', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:53', '2023-05-15 04:19:53'),
(22, 'App\\Models\\User', 13, 'MyApp', 'f0a0ed6e10197feb958c8b501e9fee50cf231f01ca0b56b4d35395a8775b3979', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:53', '2023-05-15 04:19:53'),
(23, 'App\\Models\\User', 13, 'MyApp', '47606298e23a32d29c0782895b9a5bc232bda2f1f76740cc0efeb45d26b2309b', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:54', '2023-05-15 04:19:54'),
(24, 'App\\Models\\User', 13, 'MyApp', '8acb2f2fa551ed4a430ac5d0db6c4d5f06ec55ee3996a80118d8bda5755305cc', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:54', '2023-05-15 04:19:54'),
(25, 'App\\Models\\User', 13, 'MyApp', '8386de5fd12718b09405456a3a1e0629b91b382d537bdda2569b2cd318ff91e5', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:54', '2023-05-15 04:19:54'),
(26, 'App\\Models\\User', 13, 'MyApp', '8e06556810f2d8e115c7a1dec05f839804c3e64e842baf8d73f1ae8fcdc0d002', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:54', '2023-05-15 04:19:54'),
(27, 'App\\Models\\User', 13, 'MyApp', '63a7e993c46b0ef46623c589d3c4097b7c351112bb98cea98244f3a7b011b9f9', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:55', '2023-05-15 04:19:55'),
(28, 'App\\Models\\User', 13, 'MyApp', 'f825a8a6692d41091c90cb72c063c11de38037d729938ee4b2f5bc85bc1ccd6f', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:55', '2023-05-15 04:19:55'),
(29, 'App\\Models\\User', 13, 'MyApp', '3dc9693c603d67429183f4a1a7098ece08bda197828fa2cbb825a38c6666aa03', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:55', '2023-05-15 04:19:55'),
(30, 'App\\Models\\User', 13, 'MyApp', '5afb145fef82f4be8a32e6658b399c26cf2f7ee7b50dbb9252c31c6dc4173f3e', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:56', '2023-05-15 04:19:56'),
(31, 'App\\Models\\User', 13, 'MyApp', '8851959bddc2b74278781fc45cd9187c6af1b208af1f02b9a8f284091ef6025b', '[\"*\"]', NULL, NULL, '2023-05-15 04:19:56', '2023-05-15 04:19:56'),
(32, 'App\\Models\\User', 13, 'MyApp', 'd5d44e63982844587398eb0b5dae25c983fe25ed3c06105a7e947b959b03932a', '[\"*\"]', NULL, NULL, '2023-05-15 05:21:36', '2023-05-15 05:21:36'),
(33, 'App\\Models\\User', 13, 'MyApp', 'a02df2d45042207fcf3df2d4ed023bc101d54062e4849882611f73abb3fa0be3', '[\"*\"]', NULL, NULL, '2023-05-15 23:00:56', '2023-05-15 23:00:56'),
(34, 'App\\Models\\User', 13, 'MyApp', '0260a561e275e318151c6561a626d3d0cbe7df0f6a5c6ba2cc399a8edb5cb9c3', '[\"*\"]', NULL, NULL, '2023-05-15 23:00:58', '2023-05-15 23:00:58'),
(35, 'App\\Models\\User', 13, 'MyApp', '43c54b2c9bfdaf213c430cf6fa42b35989da15853d04e1dc4bef5eee8b3daa45', '[\"*\"]', NULL, NULL, '2023-05-15 23:00:59', '2023-05-15 23:00:59'),
(36, 'App\\Models\\User', 13, 'MyApp', '697383c12f20cc574877d909f31fca0cbb663eb0bb67fb1f20d8118116f91e4d', '[\"*\"]', NULL, NULL, '2023-05-15 23:00:59', '2023-05-15 23:00:59'),
(37, 'App\\Models\\User', 13, 'MyApp', '02f15abc0021c4f085fdf7b0db37b79095533d1d6f9401192b1c822f3b5c7c13', '[\"*\"]', NULL, NULL, '2023-05-15 23:01:00', '2023-05-15 23:01:00'),
(38, 'App\\Models\\User', 13, 'MyApp', 'ddd7c3818c3432395a1ba02f2fb85b6ecf5d040eebdf7738df5cc46f25d9178f', '[\"*\"]', NULL, NULL, '2023-05-15 23:01:00', '2023-05-15 23:01:00'),
(39, 'App\\Models\\User', 13, 'MyApp', 'e3d0ddc2e1999f46e1f85ec427a17abc43d8d98cc8bdfbb968e91dc280c6cd14', '[\"*\"]', NULL, NULL, '2023-05-15 23:07:38', '2023-05-15 23:07:38'),
(40, 'App\\Models\\User', 13, 'MyApp', 'ffd316e6638fd7380db6de9c8adb2ec8e51111ba48223328b406431f887d4ba6', '[\"*\"]', NULL, NULL, '2023-05-15 23:07:39', '2023-05-15 23:07:39'),
(41, 'App\\Models\\User', 13, 'MyApp', '1328eb9ece707ba58dff816215ac0f538939c02f3c23f16566bc5e1d65cd461a', '[\"*\"]', NULL, NULL, '2023-05-15 23:13:56', '2023-05-15 23:13:56'),
(42, 'App\\Models\\User', 13, 'MyApp', 'df1b5a9abb61d31bd4066aa3c9c0efba08b51a3cf6bf8c205c02783271728370', '[\"*\"]', NULL, NULL, '2023-05-15 23:13:58', '2023-05-15 23:13:58'),
(43, 'App\\Models\\User', 13, 'MyApp', 'dbbb80c28e79e8e85daa4aa21f1a1995ce88ba24c87408c547f5904fda61d6ea', '[\"*\"]', NULL, NULL, '2023-05-15 23:13:58', '2023-05-15 23:13:58'),
(44, 'App\\Models\\User', 13, 'MyApp', '4a3623e5b0e755d1bff77ff31940c46fee86b83cb53857e5ae3ec286ff65636b', '[\"*\"]', NULL, NULL, '2023-05-15 23:13:58', '2023-05-15 23:13:58'),
(45, 'App\\Models\\User', 13, 'MyApp', '6640809d8a1d111475b7bb9061b8d478d5ef6916e2389724e30ae952ea74d839', '[\"*\"]', NULL, NULL, '2023-05-15 23:13:59', '2023-05-15 23:13:59'),
(46, 'App\\Models\\User', 13, 'MyApp', 'a0d75c204142f8f6b354e0dfc6526899f3c232423e632877fde2dbfac2d16eba', '[\"*\"]', NULL, NULL, '2023-05-15 23:13:59', '2023-05-15 23:13:59'),
(47, 'App\\Models\\User', 13, 'MyApp', 'bceb283b42c52c47d924428f58be95c2ca0c51fe794db8b80ad1812796940205', '[\"*\"]', NULL, NULL, '2023-05-15 23:13:59', '2023-05-15 23:13:59'),
(48, 'App\\Models\\User', 13, 'MyApp', '9aeb9cb21b71402a4e49cc1a21a79a19aa9587c660d061f9937bd8780ddd70f4', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:20', '2023-05-15 23:14:20'),
(49, 'App\\Models\\User', 13, 'MyApp', '047d75c8cb221fd2b26fcff5b107aa63060298f33a5155d31c9e4037f1fac165', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:21', '2023-05-15 23:14:21'),
(50, 'App\\Models\\User', 13, 'MyApp', 'a76fb0460e7f92db1691a689170b720f7020a4516054eb37521f650e22d02387', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:36', '2023-05-15 23:14:36'),
(51, 'App\\Models\\User', 13, 'MyApp', '9d4d944d67d3785a5f484c8aa65ee8cff13376e8f67baa8bd94ab0650c5c3300', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:38', '2023-05-15 23:14:38'),
(52, 'App\\Models\\User', 13, 'MyApp', '4eaa434313b3e24eaf743da82aaf11c9db25307f66e4c0b1203ac5a7102d15cc', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:38', '2023-05-15 23:14:38'),
(53, 'App\\Models\\User', 13, 'MyApp', '5732a84af2a957253269b9687634a6ec716dc82c64742c83a05588d8438ecca9', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:38', '2023-05-15 23:14:38'),
(54, 'App\\Models\\User', 13, 'MyApp', '74d5ecc1057e2901c4142721acada63be262d8a8cc4845859166dba8032631d0', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:39', '2023-05-15 23:14:39'),
(55, 'App\\Models\\User', 13, 'MyApp', 'a836acc77a0966e6223c1df4117d5c760ea426cbb053ecfad4d6ef8b6b424574', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:39', '2023-05-15 23:14:39'),
(56, 'App\\Models\\User', 13, 'MyApp', '5c14e87a29d12d5672a374c1decae79f40619d7ba42cd5473f1f95a69e62c416', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:39', '2023-05-15 23:14:39'),
(57, 'App\\Models\\User', 13, 'MyApp', '14cd6236cbe7aab565bde57c1c45cd57126fff441a6ef9d4f8895f1a30be2dc2', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:39', '2023-05-15 23:14:39'),
(58, 'App\\Models\\User', 13, 'MyApp', '0397d4cfabd7a4630d4b0f2ac3c03036b158e519bdc1980c8e490baae0c8f359', '[\"*\"]', NULL, NULL, '2023-05-15 23:14:39', '2023-05-15 23:14:39'),
(59, 'App\\Models\\User', 13, 'MyApp', 'bcf3c042f158b26de0e41b37df4d73ff4f7a118b0ed86263e58ecbf94314db6f', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:13', '2023-05-15 23:17:13'),
(60, 'App\\Models\\User', 13, 'MyApp', 'b1d05328f45f9a0f0891ee2b5571df1e33fa1087717b60042bf27b507ba420d9', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:14', '2023-05-15 23:17:14'),
(61, 'App\\Models\\User', 13, 'MyApp', 'f788b2bb790505af5f252c6ed4aa8a41760d74f3b0be307e50335d409ec842c9', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:14', '2023-05-15 23:17:14'),
(62, 'App\\Models\\User', 13, 'MyApp', '869796c82bee6670b23f25238710178f18caa82d6fe331f25d3bcef948ca246c', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:14', '2023-05-15 23:17:14'),
(63, 'App\\Models\\User', 13, 'MyApp', '29efe8232b42b8d45564d58f7b95ba4fb80132fbc68c86af9f07e36712da7b46', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:15', '2023-05-15 23:17:15'),
(64, 'App\\Models\\User', 13, 'MyApp', 'a7697165a30653a883e789f436176e5b5da16119b73db1d3892b96f61e6708ee', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:15', '2023-05-15 23:17:15'),
(65, 'App\\Models\\User', 13, 'MyApp', '83c65c051de00991a6b02d88924338ad1af8e3c28548c8e716c20dea57a61a4d', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:15', '2023-05-15 23:17:15'),
(66, 'App\\Models\\User', 13, 'MyApp', '78d148da3fdc9f2f898c36fbd5005485643b9c0d72ced7c08ca1aa1895c7f49f', '[\"*\"]', NULL, NULL, '2023-05-15 23:17:15', '2023-05-15 23:17:15'),
(67, 'App\\Models\\User', 13, 'MyApp', '863c8c1590a489bee6450e7366c1895ec69acf0455732498fcc263819369f1c1', '[\"*\"]', NULL, NULL, '2023-05-15 23:18:30', '2023-05-15 23:18:30'),
(68, 'App\\Models\\User', 13, 'MyApp', '8833789923aa3f91573b9b1bd32c29dc254a342abc876872c463d2383cf5d499', '[\"*\"]', NULL, NULL, '2023-05-15 23:28:22', '2023-05-15 23:28:22'),
(69, 'App\\Models\\User', 13, 'MyApp', 'f571eb1041db84fafa8871b75af461c2af56c6ed16031faaacc1bd9541572632', '[\"*\"]', NULL, NULL, '2023-05-15 23:28:22', '2023-05-15 23:28:22'),
(70, 'App\\Models\\User', 13, 'MyApp', '23d0af0d655c68387a9ae10d1976b99689c6072a173f4fc1f179dc1cd9835906', '[\"*\"]', NULL, NULL, '2023-05-15 23:28:23', '2023-05-15 23:28:23'),
(71, 'App\\Models\\User', 13, 'MyApp', 'c99fca1d7e5bb9d8e848bb84d072a979685352ddf17ae4788e1e5da77e855526', '[\"*\"]', NULL, NULL, '2023-05-15 23:28:23', '2023-05-15 23:28:23'),
(72, 'App\\Models\\User', 13, 'MyApp', '16af5b0e3b0df3e1a707f81c8ff21a0ff94dfe35eee115fd0bfeb0eedb734489', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:34', '2023-05-16 00:30:34'),
(73, 'App\\Models\\User', 13, 'MyApp', '0f14848822b19f1685d4e454b71253061fa71483b29c314056381ae46d9dec58', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:35', '2023-05-16 00:30:35'),
(74, 'App\\Models\\User', 13, 'MyApp', 'c5a413a0b9a1d17cebbb58ad1f75275c547ad2f6da36d2e62f5a4633d52c5554', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:35', '2023-05-16 00:30:35'),
(75, 'App\\Models\\User', 13, 'MyApp', 'a38446b3dacc0ef02a14c0c654f0da62e852cf7652e1544a0c73c21738da3df6', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:36', '2023-05-16 00:30:36'),
(76, 'App\\Models\\User', 13, 'MyApp', '4f48c3b2785b34c6a83eeb8e63bed9838ed0066dfd4a11e07d9644a53ef63012', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:36', '2023-05-16 00:30:36'),
(77, 'App\\Models\\User', 13, 'MyApp', '7b8ee20abcfc81df6e29966a3e1bac6e0c0aecf369cd94904c1c3100882acb39', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:38', '2023-05-16 00:30:38'),
(78, 'App\\Models\\User', 13, 'MyApp', '925754e603cd99f7d23f04615130062f2be35777fdf0281b6bd7956e28193ad6', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:38', '2023-05-16 00:30:38'),
(79, 'App\\Models\\User', 13, 'MyApp', '219557a571e43daab2f2a48a58aa8b19876e9d59c4a7b9bebaa59f6be77995ee', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:38', '2023-05-16 00:30:38'),
(80, 'App\\Models\\User', 13, 'MyApp', 'b0dde7a229cccc2f20d2da9308f5d5b2e0e8698ffecc72259f16d3d93a4bcbea', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:38', '2023-05-16 00:30:38'),
(81, 'App\\Models\\User', 13, 'MyApp', '9a19031d81e30caf344920c72dd2240edf49a2cc1ff7eeb4ea5816f3446b4b61', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:39', '2023-05-16 00:30:39'),
(82, 'App\\Models\\User', 13, 'MyApp', '9a01ef59bb04d1250eb7e082bbe9374cdd9d967d7dd57dfbc41baee18c601660', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:56', '2023-05-16 00:30:56'),
(83, 'App\\Models\\User', 13, 'MyApp', 'f1590684b792fb03401bd2c10467527064b73e6ec7964894387f27f754631265', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:57', '2023-05-16 00:30:57'),
(84, 'App\\Models\\User', 13, 'MyApp', '4c80713a1cbf399460db2bceadf2d2656afd1a3467d25130af6b80a13faa6156', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:57', '2023-05-16 00:30:57'),
(85, 'App\\Models\\User', 13, 'MyApp', '03599f3e75e17a69b84d1e20e8dff08b05a9362b770c951e2582d87f33604160', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:57', '2023-05-16 00:30:57'),
(86, 'App\\Models\\User', 13, 'MyApp', '4e9ab48108b41633cdd88d1b1844df32a4085bf9e4825e0b1e9d5a8a3c79d26a', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:57', '2023-05-16 00:30:57'),
(87, 'App\\Models\\User', 13, 'MyApp', '2bb9c18349b94d2077690aa8314fdef2f59037e6be1c7fb830da50ce69a9bad0', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:57', '2023-05-16 00:30:57'),
(88, 'App\\Models\\User', 13, 'MyApp', '3fc8f131063d47e2677207103c36892eb39d6f2f4d1c1c5746933679ee1a04f1', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:58', '2023-05-16 00:30:58'),
(89, 'App\\Models\\User', 13, 'MyApp', '50374028c01f18f5c8b06c27c9acd314cfa06695665036828256bae7ab5398c5', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:58', '2023-05-16 00:30:58'),
(90, 'App\\Models\\User', 13, 'MyApp', 'efe594fe21b047e7e9ed9771e73ce98b3ed5cabbbc104be7610c93e5bda6013f', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:58', '2023-05-16 00:30:58'),
(91, 'App\\Models\\User', 13, 'MyApp', 'a5144112469caf8ada7ebbed53d748ffdf05efcd6aaad46b42a0aff62140fcfb', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:58', '2023-05-16 00:30:58'),
(92, 'App\\Models\\User', 13, 'MyApp', 'e45c4a35d0c3445d66fc14d9648a17e2db107d89591a8dbb49f0fa7643e16b06', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:59', '2023-05-16 00:30:59'),
(93, 'App\\Models\\User', 13, 'MyApp', '7a6257e7ed7c1ad26014b6138cc9eb0f29900b9a65742ebfb518f445115a12cc', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:59', '2023-05-16 00:30:59'),
(94, 'App\\Models\\User', 13, 'MyApp', 'dba5ba40ceae6fcf9aa7d98b37fdd8795d873d582dc963c269bb6a392c744c57', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:59', '2023-05-16 00:30:59'),
(95, 'App\\Models\\User', 13, 'MyApp', '986e886977521153963ff236c21c11dacd3c1b78856e8b241b4dfe992d600d2f', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:59', '2023-05-16 00:30:59'),
(96, 'App\\Models\\User', 13, 'MyApp', '3352790e8aa0b0fa58921178157b5463055b5e8f8cf51ca8050d1ab025b52541', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:59', '2023-05-16 00:30:59'),
(97, 'App\\Models\\User', 13, 'MyApp', '17e78fa7ae396df6037c993fdd6018dd05bf7f05668919e5950c92d8952414bd', '[\"*\"]', NULL, NULL, '2023-05-16 00:30:59', '2023-05-16 00:30:59'),
(98, 'App\\Models\\User', 13, 'MyApp', 'e6ed53e8418e849bcbe4d2c276941d64ea37c1e38f6e62afa28cf74a27bed39d', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:00', '2023-05-16 00:31:00'),
(99, 'App\\Models\\User', 13, 'MyApp', '304d9ce04c58efe8adeb4cf949ed97dd5c6360dd86472075ea3c85d927d0afb9', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:00', '2023-05-16 00:31:00'),
(100, 'App\\Models\\User', 13, 'MyApp', '497bbf8ecb31f1c020992e6d7dc29ae93c706b4206791cbc060c41de40ad7ca8', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:00', '2023-05-16 00:31:00'),
(101, 'App\\Models\\User', 13, 'MyApp', '6fc1b3fda8986405d1f6d213eabc4476741fafd800a0fd74b7bf33f7ec4aa846', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:00', '2023-05-16 00:31:00'),
(102, 'App\\Models\\User', 13, 'MyApp', '76fc18d54e3019b6499789b221dfd45e184390e3cf112b7220870da1986f7c27', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:00', '2023-05-16 00:31:00'),
(103, 'App\\Models\\User', 13, 'MyApp', '114d3524b4b33133a3c565746e27b90c5069563946588b75e3199ab1a0de85e7', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:01', '2023-05-16 00:31:01'),
(104, 'App\\Models\\User', 13, 'MyApp', 'f8b8394854d4e80d02cd4b4887736d1014b76f493ac7c24268f5bdfb364bc86b', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:01', '2023-05-16 00:31:01'),
(105, 'App\\Models\\User', 13, 'MyApp', '6d393aaca386286a04daf463d33c9a2d9db3a15f5df971b31f1c8e3cce260933', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:01', '2023-05-16 00:31:01'),
(106, 'App\\Models\\User', 13, 'MyApp', '9a308bd15d41cb469aebad4ad785a347a13e6f04e4b0d6b41764f213715ea988', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:01', '2023-05-16 00:31:01'),
(107, 'App\\Models\\User', 13, 'MyApp', '5739bfa2f7818ce16e71917f4846bb9c9b8fbe7a9e7ae6176007045aaca0c440', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:01', '2023-05-16 00:31:01'),
(108, 'App\\Models\\User', 13, 'MyApp', 'badc22656f980cc761dee7be3c76f34b916d2b73059d01e3f969e8f04513fdb0', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:02', '2023-05-16 00:31:02'),
(109, 'App\\Models\\User', 13, 'MyApp', 'bd9ed9f82bed561502ba49b8ef4d5046c4997c71d21025dbc1ed61420e27d882', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:02', '2023-05-16 00:31:02'),
(110, 'App\\Models\\User', 13, 'MyApp', '8333e8ae0897711ba48932a4fc31a1860eb72b5874591a96818c616af8e6b16e', '[\"*\"]', NULL, NULL, '2023-05-16 00:31:39', '2023-05-16 00:31:39'),
(111, 'App\\Models\\User', 13, 'MyApp', '6a04c560c0dac6c3cb3088de69f227e23ce0bd111d7578c8d89320a848a9c04d', '[\"*\"]', NULL, NULL, '2023-05-17 23:30:23', '2023-05-17 23:30:23'),
(112, 'App\\Models\\User', 13, 'MyApp', '20d13446f17f3c20e6c1db05d6ea877d61c3ff6682fdc71876ee0301eab51ddf', '[\"*\"]', NULL, NULL, '2023-05-17 23:46:03', '2023-05-17 23:46:03'),
(113, 'App\\Models\\User', 13, 'MyApp', '8b3ca5912f8395bc88aa3030147caa7bcf065750293bc61bab9ef257b95937ea', '[\"*\"]', NULL, NULL, '2023-05-18 00:11:26', '2023-05-18 00:11:26'),
(114, 'App\\Models\\User', 13, 'MyApp', 'c40b79129e113ae3c6ba156e868752f2e83b977636066b2235fd59322ab354be', '[\"*\"]', NULL, NULL, '2023-05-18 00:15:09', '2023-05-18 00:15:09'),
(115, 'App\\Models\\User', 13, 'MyApp', '89317038bdf8aff0b61c1ea681eac1b145ce29943dc3f21f55bcb4283e3563f2', '[\"*\"]', NULL, NULL, '2023-05-18 00:15:42', '2023-05-18 00:15:42'),
(116, 'App\\Models\\User', 13, 'MyApp', '3136cbdb615134af00cc52276a1babf4dd21f55120ca5f6a0ff624957a24e4a5', '[\"*\"]', NULL, NULL, '2023-05-18 00:26:50', '2023-05-18 00:26:50'),
(117, 'App\\Models\\User', 13, 'MyApp', 'cdc118699fc2502baab59d2e770a5000b4de0c9171f431d3bf8f3f0cf7360ba3', '[\"*\"]', NULL, NULL, '2023-05-18 00:27:17', '2023-05-18 00:27:17'),
(118, 'App\\Models\\User', 13, 'MyApp', 'cd54f4aa2fa8a931eab5625bc2a5546dfc58a12fa694b13bdc8c571265baf416', '[\"*\"]', NULL, NULL, '2023-05-18 00:29:01', '2023-05-18 00:29:01'),
(119, 'App\\Models\\User', 13, 'MyApp', '0d0a4ebac1338646c8f5b394e5f6c73c206d8e44e8b93d3c355ff9993e718989', '[\"*\"]', NULL, NULL, '2023-05-18 00:29:50', '2023-05-18 00:29:50'),
(120, 'App\\Models\\User', 13, 'MyApp', 'b89f8fd296fb4f1fd289109874dac16fc6abbbe25e504c857e39e98418bb0e32', '[\"*\"]', NULL, NULL, '2023-05-18 00:30:43', '2023-05-18 00:30:43'),
(121, 'App\\Models\\User', 10, 'MyApp', '2c2547543d06cd2d85748f6925545a42ace5ed689a9e0a9918db27ecc1907b82', '[\"*\"]', NULL, NULL, '2023-05-18 00:30:58', '2023-05-18 00:30:58'),
(122, 'App\\Models\\User', 10, 'MyApp', '3d6e40bc8ac65dfa2d8bbb1c7a6e115a3defb1356c5d049748223d7e12e2755f', '[\"*\"]', NULL, NULL, '2023-05-18 00:31:03', '2023-05-18 00:31:03'),
(123, 'App\\Models\\User', 13, 'MyApp', '088e8944dd74df56335fb243ff2f2d929a70c7a516e184aa8514aee83cca2bda', '[\"*\"]', NULL, NULL, '2023-05-18 00:31:32', '2023-05-18 00:31:32'),
(124, 'App\\Models\\User', 13, 'MyApp', '3d87d2ecd4ea2250207a846e595f6cefec3aae8511c267a7a45bc546adf5e001', '[\"*\"]', NULL, NULL, '2023-05-18 00:32:03', '2023-05-18 00:32:03'),
(125, 'App\\Models\\User', 13, 'MyApp', 'f3d94c627bf27bfab112c0987b67681d4aa0c049de468b0a46ba390993b120d3', '[\"*\"]', NULL, NULL, '2023-05-18 00:34:35', '2023-05-18 00:34:35'),
(126, 'App\\Models\\User', 13, 'MyApp', 'ab02fae79eca071e8eec5f3b0f88b27674d09ca1d51fb91dedead08562898ad8', '[\"*\"]', NULL, NULL, '2023-05-18 00:38:39', '2023-05-18 00:38:39'),
(127, 'App\\Models\\User', 13, 'MyApp', '7a80d98a8af798681c8f27efbe6a697f3d79622d42ff21a19b7da18deff828a7', '[\"*\"]', NULL, NULL, '2023-05-18 02:26:40', '2023-05-18 02:26:40'),
(128, 'App\\Models\\User', 13, 'MyApp', '114962246dfa5bf0ca79bf69dccb93117793c5e6304ac59f8155e2e23eab9e8d', '[\"*\"]', NULL, NULL, '2023-05-18 02:27:51', '2023-05-18 02:27:51'),
(129, 'App\\Models\\User', 10, 'MyApp', 'c34d69107695734b17dc2a0961955cb9f2afce022632e3edd6ef50b7a15f3bf5', '[\"*\"]', NULL, NULL, '2023-05-18 02:36:20', '2023-05-18 02:36:20'),
(130, 'App\\Models\\User', 10, 'MyApp', '081458d9abfc6483cdb3f26a1f323884196a82a1d3084d180e6de0cc797e877d', '[\"*\"]', NULL, NULL, '2023-05-18 03:36:45', '2023-05-18 03:36:45'),
(131, 'App\\Models\\User', 10, 'MyApp', 'c04beab6d5ec5b39bc13d51c7fbb827da001958f8d7fa1580c081083346a6bd8', '[\"*\"]', NULL, NULL, '2023-05-18 03:58:47', '2023-05-18 03:58:47'),
(132, 'App\\Models\\User', 10, 'MyApp', '00ef4d0ea5958694dd4b15e28b1b0e6333ff7c38202aadd4ee090d4ba0175fab', '[\"*\"]', NULL, NULL, '2023-05-18 04:11:46', '2023-05-18 04:11:46'),
(133, 'App\\Models\\User', 10, 'MyApp', '088efd9772233fff6758228170f4e78c3ec1520a97bd878cceacab5f60d7c03c', '[\"*\"]', NULL, NULL, '2023-05-18 04:16:09', '2023-05-18 04:16:09'),
(134, 'App\\Models\\User', 10, 'MyApp', '1f1e6ae5a31b849bc6bf70d08641ceb92da09406be406dde1cb3f69886af49ca', '[\"*\"]', NULL, NULL, '2023-05-18 04:17:26', '2023-05-18 04:17:26'),
(135, 'App\\Models\\User', 10, 'MyApp', '119320e354e686a8a72207dc2ec5342fd148e690508ef1e35199f7ea1843d94c', '[\"*\"]', NULL, NULL, '2023-05-18 04:22:50', '2023-05-18 04:22:50'),
(136, 'App\\Models\\User', 10, 'MyApp', 'e169d541f1b9a9a3aed1abe922d6b793f330daf6e9cc63d98e7b9a844a9afcc3', '[\"*\"]', NULL, NULL, '2023-05-18 05:56:00', '2023-05-18 05:56:00'),
(137, 'App\\Models\\User', 10, 'MyApp', '50a4909297e8598b09fbc3f5a309e4d5300136ee87456cb542352d809fdf055a', '[\"*\"]', NULL, NULL, '2023-05-18 06:05:19', '2023-05-18 06:05:19'),
(138, 'App\\Models\\User', 10, 'MyApp', '0ff4ebe2d103d4aaee50cccd108002395c173a0a0394efcbcbb32d422231e6b8', '[\"*\"]', NULL, NULL, '2023-05-18 06:06:01', '2023-05-18 06:06:01'),
(139, 'App\\Models\\User', 10, 'MyApp', '0ee7a03879c1f00865b3b9466c031603da993958912d09539b31e9570c67d5ef', '[\"*\"]', NULL, NULL, '2023-05-18 06:07:05', '2023-05-18 06:07:05'),
(140, 'App\\Models\\User', 10, 'MyApp', '5a8e75c71b41d2129519c82ac205e008680bff13c6b90c34a01ef4bbf08f178d', '[\"*\"]', NULL, NULL, '2023-05-18 06:12:29', '2023-05-18 06:12:29'),
(141, 'App\\Models\\User', 10, 'MyApp', '047dedaf8ca73cec1eb80ba4116d50d7b7d2354533a231115669e37e18170084', '[\"*\"]', NULL, NULL, '2023-05-18 06:38:03', '2023-05-18 06:38:03'),
(142, 'App\\Models\\User', 10, 'MyApp', 'eea64e8ab9e94e025ef5f7d5a5b9b2934702acd4dd57b4e8e43345af037eb755', '[\"*\"]', NULL, NULL, '2023-05-18 06:38:48', '2023-05-18 06:38:48'),
(143, 'App\\Models\\User', 10, 'MyApp', '6253b357a0c0a7ffa82cba0b276dbf753536f2c93ae4b41079cf4c355cc1cfb0', '[\"*\"]', NULL, NULL, '2023-05-18 06:39:09', '2023-05-18 06:39:09'),
(144, 'App\\Models\\User', 10, 'MyApp', '40e0088a0baf1e2467b59f74a0a202b4cc6ff747436ea84c9335ad7b2e263982', '[\"*\"]', NULL, NULL, '2023-05-18 06:39:43', '2023-05-18 06:39:43'),
(145, 'App\\Models\\User', 10, 'MyApp', 'ad3c3c3b4c4ff06cc301a226516dd1a990826d31c9dd0f6d8452eb0a857f0a9d', '[\"*\"]', NULL, NULL, '2023-05-18 06:44:44', '2023-05-18 06:44:44'),
(146, 'App\\Models\\User', 10, 'MyApp', '614328704f257b2ada820629d8c853bdfa0dcc20a9891df20fd96ec7c5800131', '[\"*\"]', NULL, NULL, '2023-05-18 06:45:06', '2023-05-18 06:45:06'),
(147, 'App\\Models\\User', 10, 'MyApp', '3b03c0247a9519261408f11d76b4045f9346c4664ab1b5b6f65b3a6ea890f5cc', '[\"*\"]', NULL, NULL, '2023-05-18 06:45:43', '2023-05-18 06:45:43'),
(148, 'App\\Models\\User', 10, 'MyApp', 'bfe089a96239ef92c2f4872779d0394c48d3febd41e0741142eaa7239433ff57', '[\"*\"]', NULL, NULL, '2023-05-18 06:48:01', '2023-05-18 06:48:01'),
(149, 'App\\Models\\User', 10, 'MyApp', '94a001e3776b657182ed476caf4d282413e15d27d959026bd372feabd39d97b9', '[\"*\"]', NULL, NULL, '2023-05-18 06:48:49', '2023-05-18 06:48:49'),
(150, 'App\\Models\\User', 10, 'MyApp', '688f0215668f9dd2290a71414cbc9bc0a28fbbf7045abc96bb5f32cff70ff5d8', '[\"*\"]', NULL, NULL, '2023-05-18 06:49:37', '2023-05-18 06:49:37'),
(151, 'App\\Models\\User', 10, 'MyApp', '846c9ea9ef9b00d569f1711b979a10f88ab8f96f9e9c389192dc2a6753c08181', '[\"*\"]', NULL, NULL, '2023-05-18 06:51:23', '2023-05-18 06:51:23'),
(152, 'App\\Models\\User', 10, 'MyApp', '116b72c561370681542d5af6571d4e0c21a2296b9951b4239e368b0da187f9f2', '[\"*\"]', NULL, NULL, '2023-05-18 06:52:20', '2023-05-18 06:52:20'),
(153, 'App\\Models\\User', 10, 'MyApp', '12dfe4c0b7ea0de9262658f9c50e3bdb0b52059ad17b0364a04795e0bcabdc32', '[\"*\"]', NULL, NULL, '2023-05-18 06:52:41', '2023-05-18 06:52:41'),
(154, 'App\\Models\\User', 10, 'MyApp', '05f969036f43ff02f028b8a581bca7df0549828d3a475e89cce56487a1447ee3', '[\"*\"]', NULL, NULL, '2023-05-18 06:53:25', '2023-05-18 06:53:25'),
(155, 'App\\Models\\User', 10, 'MyApp', '01454f2d4ae844c10280b70702254356036c0db48658ecd3e5268ee0df1330d5', '[\"*\"]', NULL, NULL, '2023-05-18 06:54:22', '2023-05-18 06:54:22'),
(156, 'App\\Models\\User', 10, 'MyApp', 'c32f44852b083d0fb643448d660e1085711c9325c60b34465a7efef4015b88be', '[\"*\"]', NULL, NULL, '2023-05-18 06:54:50', '2023-05-18 06:54:50'),
(157, 'App\\Models\\User', 10, 'MyApp', '3bf53889a31c21fcb25df98a3efcca85b7241db7e2e9a1270474b3ff3cd8ab3e', '[\"*\"]', NULL, NULL, '2023-05-18 06:55:38', '2023-05-18 06:55:38'),
(158, 'App\\Models\\User', 10, 'MyApp', '3e57d90d5b339ad3c9d023bf21179300d13c37a3bd48a23a739bd121488796f3', '[\"*\"]', NULL, NULL, '2023-05-18 06:57:55', '2023-05-18 06:57:55'),
(159, 'App\\Models\\User', 10, 'MyApp', 'df604a02d24cc691dce83340d5e8ee56be3d81b890dba00e95cf589d914dac90', '[\"*\"]', NULL, NULL, '2023-05-18 06:58:13', '2023-05-18 06:58:13'),
(160, 'App\\Models\\User', 10, 'MyApp', '4d58040549ab5d4504e580121b0c38e5a45bbcdfb0170abbd0bde983e72feb9f', '[\"*\"]', NULL, NULL, '2023-05-18 07:04:57', '2023-05-18 07:04:57'),
(161, 'App\\Models\\User', 10, 'MyApp', 'ad840cb0787c1197a0351403678c94a817dbf5fd4d0ea41a5640c73cb4688784', '[\"*\"]', NULL, NULL, '2023-05-18 07:05:39', '2023-05-18 07:05:39'),
(162, 'App\\Models\\User', 25, 'MyApp', 'c9db1fc961bbcd1bf8027a509baf72a5be002ac19c9f8e9f1dfb96efa25b1100', '[\"*\"]', NULL, NULL, '2023-05-18 07:24:19', '2023-05-18 07:24:19'),
(163, 'App\\Models\\User', 25, 'MyApp', 'f4d54c377f6579f4f1db8313a5cef2cc0e6ac210c36fc6c3def54f7a87a92193', '[\"*\"]', NULL, NULL, '2023-05-18 07:29:50', '2023-05-18 07:29:50'),
(164, 'App\\Models\\User', 25, 'MyApp', '57e93e8b118eaa6b94811b72dc75163c8445c38c09991fdac996e0bdba662dad', '[\"*\"]', NULL, NULL, '2023-05-18 07:31:13', '2023-05-18 07:31:13'),
(165, 'App\\Models\\User', 10, 'MyApp', '4e7171d60dab733c06dba0c7f79a52f0637f5e1949c3850f5b23e6aa952d00d7', '[\"*\"]', NULL, NULL, '2023-05-18 07:32:08', '2023-05-18 07:32:08'),
(166, 'App\\Models\\User', 13, 'MyApp', 'd2a1ec41a3c137c97b897d1009e3a4c2cdffadc0c509fee9fdf869b9c2806713', '[\"*\"]', NULL, NULL, '2023-05-22 03:50:53', '2023-05-22 03:50:53'),
(167, 'App\\Models\\User', 13, 'MyApp', '611382926379564dfc7feac19126d1917e924134794f64137a10072577f5b2f1', '[\"*\"]', NULL, NULL, '2023-05-22 03:51:26', '2023-05-22 03:51:26'),
(168, 'App\\Models\\User', 13, 'MyApp', '5658fa6e9f4dd39b726ee541be02ef23bbeafc48b99fc4c9e2d336eeedcc49e2', '[\"*\"]', NULL, NULL, '2023-05-22 03:52:05', '2023-05-22 03:52:05'),
(169, 'App\\Models\\User', 13, 'MyApp', '3a92e292eab88b690faa1337348915bd23369222f2593b5f618b1f342e4fc924', '[\"*\"]', NULL, NULL, '2023-05-22 03:52:39', '2023-05-22 03:52:39'),
(170, 'App\\Models\\User', 13, 'MyApp', 'ffae8cb203f850a0a55dfd48b55460dbb96c99ac244c21c1bf735c68eeb29cd4', '[\"*\"]', NULL, NULL, '2023-05-22 03:55:44', '2023-05-22 03:55:44'),
(171, 'App\\Models\\User', 13, 'MyApp', '6897af9bd0ffe249a7809d19bb56bb826f270603ee84ce51fe00bfdf6b3c9824', '[\"*\"]', NULL, NULL, '2023-05-22 03:56:22', '2023-05-22 03:56:22'),
(172, 'App\\Models\\User', 25, 'MyApp', 'cc3807a9bb34013fc5e723b2b21f145f8d11a2f8b4fc697cfd4ac96e50dbd028', '[\"*\"]', NULL, NULL, '2023-05-22 04:02:40', '2023-05-22 04:02:40'),
(173, 'App\\Models\\User', 13, 'MyApp', '0977a504949513a9922824e57dbf5cf00dbb7434034bf5fd2afafa164da08526', '[\"*\"]', NULL, NULL, '2023-05-22 04:08:25', '2023-05-22 04:08:25'),
(174, 'App\\Models\\User', 25, 'MyApp', '6a34cec8c5d787338b5d763101af8ae1d6a11469288da7c2b4fd96d8a729731f', '[\"*\"]', NULL, NULL, '2023-05-22 04:09:22', '2023-05-22 04:09:22'),
(175, 'App\\Models\\User', 13, 'MyApp', 'bb08922a3d5807a0d45f676441b40a66c80b9aebbf0edc27aa081d38d8e04826', '[\"*\"]', NULL, NULL, '2023-05-22 04:11:10', '2023-05-22 04:11:10'),
(176, 'App\\Models\\User', 13, 'MyApp', 'b5eea66e35b620b26f71aef1aace1be80c72cef1f0cd27f9b384b6b8a628528f', '[\"*\"]', NULL, NULL, '2023-05-22 04:15:15', '2023-05-22 04:15:15'),
(177, 'App\\Models\\User', 13, 'MyApp', '2efef6634ee3218c3026c8588439427179fe3d9aa0115ac7e3473b48921bd446', '[\"*\"]', NULL, NULL, '2023-05-22 04:21:06', '2023-05-22 04:21:06'),
(178, 'App\\Models\\User', 25, 'MyApp', '067362be7e38b1071d6bc2e2863b92bdfde05665db47dc43e3c1e9a8ffafe603', '[\"*\"]', NULL, NULL, '2023-05-22 04:22:44', '2023-05-22 04:22:44'),
(179, 'App\\Models\\User', 25, 'MyApp', 'e1abd509df92258d978540959af75b0311fd1f29a6593e3cd45578b5ff944e1c', '[\"*\"]', NULL, NULL, '2023-05-22 04:34:27', '2023-05-22 04:34:27'),
(180, 'App\\Models\\User', 25, 'MyApp', '7acbd26c1f91a0a67ab7d519b1e359225821c2b4e7985c3b6cd24c67c8f07971', '[\"*\"]', NULL, NULL, '2023-05-22 04:36:07', '2023-05-22 04:36:07'),
(181, 'App\\Models\\User', 25, 'MyApp', '52d651526f618f173594d55c1ea87bb5152c08393ff489ff2d4dd1d142e8a1bf', '[\"*\"]', NULL, NULL, '2023-05-22 04:40:21', '2023-05-22 04:40:21'),
(182, 'App\\Models\\User', 25, 'MyApp', 'acb5f164736584f144007777e5bbbb201add319aeaa777060eb58c7d712f3732', '[\"*\"]', NULL, NULL, '2023-05-22 04:41:35', '2023-05-22 04:41:35'),
(183, 'App\\Models\\User', 25, 'MyApp', '3ae0f1443300712ea76234d39dc0a48d34c9412ddffbfac0d87fd1dec77c14d5', '[\"*\"]', NULL, NULL, '2023-05-22 04:42:44', '2023-05-22 04:42:44'),
(184, 'App\\Models\\User', 13, 'MyApp', 'd02de43d1c66bb5d6e3564fc0a7fdbb6c325cc3b02283e178ea08e023352a139', '[\"*\"]', NULL, NULL, '2023-05-22 04:43:10', '2023-05-22 04:43:10'),
(185, 'App\\Models\\User', 13, 'MyApp', '517b74788ece8199f4b1a14095fc5a96441afb2fd44634f47f6125489fb74801', '[\"*\"]', NULL, NULL, '2023-05-22 04:44:17', '2023-05-22 04:44:17'),
(186, 'App\\Models\\User', 13, 'MyApp', 'add0e23c0abec567e32551e2a6ad1340c305f59e8e29ff3f551b90bedfcc3ac6', '[\"*\"]', NULL, NULL, '2023-05-22 04:52:29', '2023-05-22 04:52:29'),
(187, 'App\\Models\\User', 25, 'MyApp', 'c32b4b6ef5899aaeb0da8f26237e28e782e17aabf714e9844e7f41ed7f9e64ac', '[\"*\"]', NULL, NULL, '2023-05-22 04:53:14', '2023-05-22 04:53:14'),
(188, 'App\\Models\\User', 25, 'MyApp', '545a1dc9d89785106f105926edf38a8603a6c48ccf80cdc2914c55e165643df9', '[\"*\"]', NULL, NULL, '2023-05-22 04:55:22', '2023-05-22 04:55:22'),
(189, 'App\\Models\\User', 25, 'MyApp', '50d6ff2aad0ee14388fbb633c7286632942e1acc12d57b9979fd03beb2106c5e', '[\"*\"]', NULL, NULL, '2023-05-22 04:56:40', '2023-05-22 04:56:40'),
(190, 'App\\Models\\User', 13, 'MyApp', '9b778e3d769ddaf8fce2cf02abfa44666d1dddc78a984c9a15490f0c5b9bf895', '[\"*\"]', NULL, NULL, '2023-05-22 04:56:52', '2023-05-22 04:56:52'),
(191, 'App\\Models\\User', 13, 'MyApp', '3e5da152cb42ba70eb6828d94cba01a71f81c4678ffb6e9ec8393c6281b94825', '[\"*\"]', NULL, NULL, '2023-05-22 05:02:08', '2023-05-22 05:02:08'),
(192, 'App\\Models\\User', 13, 'MyApp', 'c0d56c6d9f74d53edcc93369daccf5439ba67c447261e09a5729c34ee0f45aed', '[\"*\"]', NULL, NULL, '2023-05-22 05:10:40', '2023-05-22 05:10:40'),
(193, 'App\\Models\\User', 13, 'MyApp', '481c48ec6b0fe594d5f118eb61c41f715c766384cce1dfc4972f877fb4ea006e', '[\"*\"]', NULL, NULL, '2023-05-22 05:26:31', '2023-05-22 05:26:31'),
(194, 'App\\Models\\User', 13, 'MyApp', 'a7f9e9ae629b4b4c22fca1f2c648645519be4e3d4414cc2183e516b16b1453fd', '[\"*\"]', NULL, NULL, '2023-05-22 05:27:50', '2023-05-22 05:27:50'),
(195, 'App\\Models\\User', 13, 'MyApp', 'ffecd61ddd8ba52bf457050db9cf45d0890c279b8dbc638b455d2d55a5bdc8de', '[\"*\"]', NULL, NULL, '2023-05-22 05:38:40', '2023-05-22 05:38:40'),
(196, 'App\\Models\\User', 13, 'MyApp', 'd92dd6f489c838d78dcd8587e233d8fb0227adc220f6db73b8de75055c30f7b4', '[\"*\"]', NULL, NULL, '2023-05-22 05:48:38', '2023-05-22 05:48:38'),
(197, 'App\\Models\\User', 13, 'MyApp', 'a85327f8ddd0c8ba684150c8933bdb186d0998c54f9f651bfdb8bce165a6fbfd', '[\"*\"]', NULL, NULL, '2023-05-22 05:53:41', '2023-05-22 05:53:41'),
(198, 'App\\Models\\User', 13, 'MyApp', 'da887eb4fab795f96547ea3bc0802ebc8fb24092f58458d55f18710913e2d58b', '[\"*\"]', NULL, NULL, '2023-05-22 05:55:20', '2023-05-22 05:55:20'),
(199, 'App\\Models\\User', 13, 'MyApp', 'b4aebcf451a945949087a265c7289b4d5a90460c3d4ce2578a1f96e8688aee52', '[\"*\"]', NULL, NULL, '2023-05-22 06:24:22', '2023-05-22 06:24:22'),
(200, 'App\\Models\\User', 13, 'MyApp', '427d6321783736042ec6b3254eb35eb29d3ca3ec75e7ea983b83de074cf48b29', '[\"*\"]', NULL, NULL, '2023-05-22 06:25:34', '2023-05-22 06:25:34'),
(201, 'App\\Models\\User', 13, 'MyApp', '40809ad6b2e475c01935bb8a9bf2145a4bcee8695bbefe7fe66868e7aab43fce', '[\"*\"]', NULL, NULL, '2023-05-22 06:27:03', '2023-05-22 06:27:03'),
(202, 'App\\Models\\User', 13, 'MyApp', '9fcd8ee3a42ab0880284ba02ea01f79775cc8e46160aac229f09f4d6b5168522', '[\"*\"]', NULL, NULL, '2023-05-22 06:37:04', '2023-05-22 06:37:04'),
(203, 'App\\Models\\User', 13, 'MyApp', '8823c53d57da0a8c7c365294e90b527c361e6e39a15ef1b656f56cd064012a65', '[\"*\"]', NULL, NULL, '2023-05-22 06:41:05', '2023-05-22 06:41:05'),
(204, 'App\\Models\\User', 13, 'MyApp', 'a8229c6b4f4368d036e45f890ce06da392934610db4e0be78819a6382b57a12c', '[\"*\"]', NULL, NULL, '2023-05-22 06:44:49', '2023-05-22 06:44:49'),
(205, 'App\\Models\\User', 13, 'MyApp', 'b58a64ddb6bdfa317c41c2904103667eef48b1a9e836b74c0c08d9548fa65f26', '[\"*\"]', NULL, NULL, '2023-05-22 07:00:24', '2023-05-22 07:00:24'),
(206, 'App\\Models\\User', 13, 'MyApp', 'cf1276079ae9073d91f8ce38416c793e2a489709025aa8b320a4675f02b40d99', '[\"*\"]', NULL, NULL, '2023-05-22 07:05:25', '2023-05-22 07:05:25'),
(207, 'App\\Models\\User', 13, 'MyApp', 'ed6811906463b34254515223e52f8ad85eddc2012dcc2b5ddcda0fc900a686f5', '[\"*\"]', NULL, NULL, '2023-05-22 07:17:57', '2023-05-22 07:17:57'),
(208, 'App\\Models\\User', 13, 'MyApp', 'c43562e5ba9e8413aea5475c6d33f9e6b2b2e9474bb8a84cd362badb5f57f4cc', '[\"*\"]', NULL, NULL, '2023-05-22 07:25:00', '2023-05-22 07:25:00'),
(209, 'App\\Models\\User', 13, 'MyApp', 'e26e083b1dc2ea0e3f1679d5b8767c42cf84e50a93fb7f54c3cfbdf2b63bbe4a', '[\"*\"]', NULL, NULL, '2023-05-22 07:39:59', '2023-05-22 07:39:59'),
(210, 'App\\Models\\User', 13, 'MyApp', '266d31ff8f73d729073a93a902290629ef09e1d9f0b88114f9a8dc66fab25b03', '[\"*\"]', NULL, NULL, '2023-05-22 07:41:28', '2023-05-22 07:41:28'),
(211, 'App\\Models\\User', 13, 'MyApp', '8324743457ea6b558eb31dfa7709e74a55ff1b016c83457da79f96e7c0191e04', '[\"*\"]', NULL, NULL, '2023-05-22 22:46:03', '2023-05-22 22:46:03'),
(212, 'App\\Models\\User', 13, 'MyApp', '05b5e2bea60df3850f3692a4c8de91dfb4533debb23717aaa6af31b331e14e54', '[\"*\"]', NULL, NULL, '2023-05-22 22:49:30', '2023-05-22 22:49:30'),
(213, 'App\\Models\\User', 13, 'MyApp', 'cc2ceeb6b174dc24832bf9b910970380c77dc7f0488de90fa9f4ebed3f2fb5c0', '[\"*\"]', NULL, NULL, '2023-05-22 22:50:00', '2023-05-22 22:50:00'),
(214, 'App\\Models\\User', 13, 'MyApp', '2ef93da87ad8b65ee0b4345b95263c5984b83d2508d5dcdb1061826caaf28dda', '[\"*\"]', NULL, NULL, '2023-05-22 23:00:28', '2023-05-22 23:00:28'),
(215, 'App\\Models\\User', 13, 'MyApp', '540ca76b62c62c19ca9e87860a4883b874d9449a15759fd1700c5f4a72e75be1', '[\"*\"]', NULL, NULL, '2023-05-22 23:01:28', '2023-05-22 23:01:28'),
(216, 'App\\Models\\User', 13, 'MyApp', '149aef8bc5b6b146953f06093bc1973f226faf6884e3e428d7395e5c2aa2ab28', '[\"*\"]', NULL, NULL, '2023-05-22 23:18:24', '2023-05-22 23:18:24'),
(217, 'App\\Models\\User', 13, 'MyApp', 'aa26bc02462c6e522ca8d0d2666aec2bedb85f7ae821c6334197e1c555e4448c', '[\"*\"]', NULL, NULL, '2023-05-22 23:21:48', '2023-05-22 23:21:48'),
(218, 'App\\Models\\User', 13, 'MyApp', 'aa0ec8daf1026adde7145d6d846786dc27d3938de8bf95747568adc0fb543231', '[\"*\"]', NULL, NULL, '2023-05-22 23:26:06', '2023-05-22 23:26:06'),
(219, 'App\\Models\\User', 13, 'MyApp', '84a169628c3b1f89f66d367f967d8970d593ca39e4948f5eb2c15173c430b094', '[\"*\"]', NULL, NULL, '2023-05-22 23:30:30', '2023-05-22 23:30:30'),
(220, 'App\\Models\\User', 13, 'MyApp', 'fe89fbc34622fb29a66919c95d6f54501840f3a6068848033e8826a50a5ff8a6', '[\"*\"]', NULL, NULL, '2023-05-22 23:35:19', '2023-05-22 23:35:19'),
(221, 'App\\Models\\User', 13, 'MyApp', '3b475c9fd01edeadba2c1ddfa73830035702c0bcbcf05c3dd5e09df3eeacf95e', '[\"*\"]', NULL, NULL, '2023-05-22 23:39:12', '2023-05-22 23:39:12'),
(222, 'App\\Models\\User', 13, 'MyApp', 'd3def86be81e95dfde5c3d4901f25a4a2f3d1d7e13d62abca5d70315c3541079', '[\"*\"]', NULL, NULL, '2023-05-22 23:44:23', '2023-05-22 23:44:23'),
(223, 'App\\Models\\User', 25, 'MyApp', '4802004b8ac12c2e23ef02f4de055e0a3064d5cdb6c11ba8bf8d055fe067aa69', '[\"*\"]', NULL, NULL, '2023-05-22 23:44:46', '2023-05-22 23:44:46'),
(224, 'App\\Models\\User', 13, 'MyApp', 'bf916d59455f99d8cb9d6677755c8d0e672b51e2236f67f1b2d373266c7085aa', '[\"*\"]', NULL, NULL, '2023-05-22 23:52:14', '2023-05-22 23:52:14'),
(225, 'App\\Models\\User', 13, 'MyApp', 'ea1b9a2a18c6068ce77db80411c5e2f62aa98e0131104260b560f6c86723248c', '[\"*\"]', NULL, NULL, '2023-05-22 23:54:00', '2023-05-22 23:54:00'),
(226, 'App\\Models\\User', 13, 'MyApp', 'a45c46a9c226f52dacd450c9c2ee903a74c637a356ea55156c88fd36fb0a4410', '[\"*\"]', NULL, NULL, '2023-05-23 02:20:20', '2023-05-23 02:20:20'),
(227, 'App\\Models\\User', 13, 'MyApp', 'db6f51776e2ff4aa757cc0e0c402d26809f1571217f947d3c4a6330649693aa1', '[\"*\"]', NULL, NULL, '2023-05-23 02:27:54', '2023-05-23 02:27:54'),
(228, 'App\\Models\\User', 13, 'MyApp', 'bf9efb9327e2810ef3349c478c6a33df5842c4d997a42f9d50f0113c780cab1e', '[\"*\"]', NULL, NULL, '2023-05-23 03:36:18', '2023-05-23 03:36:18'),
(229, 'App\\Models\\User', 13, 'MyApp', '4ff71c3ec21727df2dd7e812d6f215cbc2516486ddd2489ed2c1e2a5ba41e199', '[\"*\"]', NULL, NULL, '2023-05-23 03:39:46', '2023-05-23 03:39:46'),
(230, 'App\\Models\\User', 13, 'MyApp', 'aa845b0dc0049188a2d841030102a53098979630670e76de7abaac828a1a3d55', '[\"*\"]', NULL, NULL, '2023-05-23 03:41:34', '2023-05-23 03:41:34'),
(231, 'App\\Models\\User', 13, 'MyApp', '3563ab0ce0510e26c0ddffa2cee6c6c44c0162b41f5f4099d4ba1a1a5822160a', '[\"*\"]', NULL, NULL, '2023-05-23 04:27:28', '2023-05-23 04:27:28'),
(232, 'App\\Models\\User', 13, 'MyApp', 'ed8bf1ddcc902dd40e316c69d24b1b7072f2d41f133509db2ba38f865a814fe3', '[\"*\"]', NULL, NULL, '2023-05-23 04:28:38', '2023-05-23 04:28:38'),
(233, 'App\\Models\\User', 13, 'MyApp', '1bdb6aa7e5784b5fed216a87282e88ecd049a66cd82ed92336e88de3cec00b51', '[\"*\"]', NULL, NULL, '2023-05-23 04:29:49', '2023-05-23 04:29:49'),
(234, 'App\\Models\\User', 13, 'MyApp', '4ebaf690b6659bee000c7965834f3d9e3a887951460c6a6ed51df61854e46c4c', '[\"*\"]', NULL, NULL, '2023-05-23 05:33:15', '2023-05-23 05:33:15'),
(235, 'App\\Models\\User', 13, 'MyApp', '6c6aa2c000d475e55af0d680ffe79c607efa1565601982b2fc5d2e75a2d8a92b', '[\"*\"]', NULL, NULL, '2023-05-23 05:34:14', '2023-05-23 05:34:14'),
(236, 'App\\Models\\User', 13, 'MyApp', '56632d151a7653332384de33ede5ebd66406decba87a866e13d71655d63736c0', '[\"*\"]', NULL, NULL, '2023-05-23 06:10:52', '2023-05-23 06:10:52'),
(237, 'App\\Models\\User', 13, 'MyApp', 'a13a210c1253be27ebe08271bd4c079d73e9b510b70d7f78fd765582a2c1c951', '[\"*\"]', NULL, NULL, '2023-05-23 06:14:18', '2023-05-23 06:14:18'),
(238, 'App\\Models\\User', 13, 'MyApp', '37e8b171e45a36ea82710ba0e04a32b0d857884d97470e49336a11d262cb2480', '[\"*\"]', NULL, NULL, '2023-05-23 06:56:50', '2023-05-23 06:56:50'),
(239, 'App\\Models\\User', 13, 'MyApp', '31d412e97eacd6b256c01020130d0f5ed8cfcebba77e037f2a81385540f9a059', '[\"*\"]', NULL, NULL, '2023-05-23 07:05:55', '2023-05-23 07:05:55'),
(240, 'App\\Models\\User', 13, 'MyApp', 'e5bda47d194ad98500688c60d240ab0e4c59f79af4a4548a4c6746aeb6ad3022', '[\"*\"]', NULL, NULL, '2023-05-23 07:09:26', '2023-05-23 07:09:26'),
(241, 'App\\Models\\User', 13, 'MyApp', 'd1a0409c984fa876b29e076cda1449645333f3a4d3c1eaeca72cb3c92c459ef5', '[\"*\"]', NULL, NULL, '2023-05-23 22:41:50', '2023-05-23 22:41:50'),
(242, 'App\\Models\\User', 13, 'MyApp', '64c64d5dddbc07f4d1abdf58ff64efb51959266a9438b6182eb3d93cea0391da', '[\"*\"]', NULL, NULL, '2023-05-23 22:42:41', '2023-05-23 22:42:41'),
(243, 'App\\Models\\User', 13, 'MyApp', 'd7243eebccba43b84d2288e8e68944df7dfb7ad6aff351a07d0ab881c0920d06', '[\"*\"]', NULL, NULL, '2023-05-23 23:04:02', '2023-05-23 23:04:02'),
(244, 'App\\Models\\User', 13, 'MyApp', '92d824ed3e8b4f5af2480246836946bc02a8b345225aae488a73f43ce04f4570', '[\"*\"]', NULL, NULL, '2023-05-23 23:05:18', '2023-05-23 23:05:18'),
(245, 'App\\Models\\User', 13, 'MyApp', '36ff37354a89da5f96ccb387adfa4e8ee263be3107a1edfaeb182ab4516ce9e6', '[\"*\"]', NULL, NULL, '2023-05-23 23:08:44', '2023-05-23 23:08:44'),
(246, 'App\\Models\\User', 13, 'MyApp', '215620b3dced57f1ca9650142660c44a8b9f6c52f52838912e7921f5a740c9dd', '[\"*\"]', NULL, NULL, '2023-05-23 23:10:15', '2023-05-23 23:10:15'),
(247, 'App\\Models\\User', 13, 'MyApp', 'dd7c145d8c160e368718c6ddf2e5160320f228634df2c5af96d4543f690b1955', '[\"*\"]', NULL, NULL, '2023-05-23 23:11:51', '2023-05-23 23:11:51'),
(248, 'App\\Models\\User', 13, 'MyApp', '52e6adbd29842322cbef94dc6da16bcb17b4c83e6ffca4ea09c0ca0e1d9ada83', '[\"*\"]', NULL, NULL, '2023-05-23 23:12:18', '2023-05-23 23:12:18'),
(249, 'App\\Models\\User', 13, 'MyApp', 'e9bf0db2496f83d8d948cdb694b552711a66f112f4b942db1755b115dfe10970', '[\"*\"]', NULL, NULL, '2023-05-23 23:12:42', '2023-05-23 23:12:42'),
(250, 'App\\Models\\User', 13, 'MyApp', 'eafb61207c43a39197930a76fe5cce2933e8e5231cc87e7c4303187f8e42ec2f', '[\"*\"]', NULL, NULL, '2023-05-23 23:13:33', '2023-05-23 23:13:33'),
(251, 'App\\Models\\User', 13, 'MyApp', 'ec882e70027db8e22e5beafd68673e141e1da572b995a6532f204f8da2dfeb15', '[\"*\"]', NULL, NULL, '2023-05-23 23:14:32', '2023-05-23 23:14:32'),
(252, 'App\\Models\\User', 13, 'MyApp', 'adf4220f19d14656c2425d24c22f49afe430db0f10fc733edb61f89386e8212d', '[\"*\"]', NULL, NULL, '2023-05-23 23:32:33', '2023-05-23 23:32:33'),
(253, 'App\\Models\\User', 13, 'MyApp', '5a9f95d133c0347b92b9cfb5ca209875aa6493973e9d45f6b0274a64856ebea3', '[\"*\"]', NULL, NULL, '2023-05-23 23:38:48', '2023-05-23 23:38:48'),
(254, 'App\\Models\\User', 13, 'MyApp', 'ce2abfd269dc95a47879fa6eba632d7cb8ca54b574d401d86e4e06e8b86345d6', '[\"*\"]', NULL, NULL, '2023-05-23 23:44:56', '2023-05-23 23:44:56'),
(255, 'App\\Models\\User', 13, 'MyApp', 'd25ffbb35cc0c8657c7fc7aa1d867c3283e91f4da1471a4b392e5af035da51bb', '[\"*\"]', NULL, NULL, '2023-05-23 23:50:23', '2023-05-23 23:50:23'),
(256, 'App\\Models\\User', 13, 'MyApp', '99fa35df3ebdcc542844f48046340297e61fc74329a3107fa36709e2b31084ce', '[\"*\"]', NULL, NULL, '2023-05-24 00:22:10', '2023-05-24 00:22:10'),
(257, 'App\\Models\\User', 13, 'MyApp', 'edd982cd0c9ecefbfa83e98aefd13b451aa93ddcadc1281439705e0f148106eb', '[\"*\"]', NULL, NULL, '2023-05-24 00:57:51', '2023-05-24 00:57:51'),
(258, 'App\\Models\\User', 13, 'MyApp', '397486103e36f4caeefc40bf3bb57a22bf3f4038ea7817f820dd8d05979d61c9', '[\"*\"]', NULL, NULL, '2023-05-24 01:00:43', '2023-05-24 01:00:43'),
(259, 'App\\Models\\User', 13, 'MyApp', '80a59b2b5e5753e03fd5ff260d7822bf930fc743032fd6166a45243935122cf5', '[\"*\"]', NULL, NULL, '2023-05-24 01:14:57', '2023-05-24 01:14:57'),
(260, 'App\\Models\\User', 13, 'MyApp', 'a1872dcb8eef6c00b88543141ec33e1ed2eaf8d40c137a35445717f43765397d', '[\"*\"]', NULL, NULL, '2023-05-24 01:44:09', '2023-05-24 01:44:09'),
(261, 'App\\Models\\User', 13, 'MyApp', '4d7736e531beb72d1ee34c7a927942543396f4f79749642f911a2751d7967395', '[\"*\"]', NULL, NULL, '2023-05-24 06:36:15', '2023-05-24 06:36:15'),
(262, 'App\\Models\\User', 25, 'MyApp', '3af68bc584812b1d96479f28f9e524e2d8aaa5f8b9058098c28342238a9f4125', '[\"*\"]', NULL, NULL, '2023-05-24 06:50:32', '2023-05-24 06:50:32'),
(263, 'App\\Models\\User', 13, 'MyApp', '586aba359d47c52b185434de880e50e2e5af489c6aa13d9f30e7fb605cf0f6ee', '[\"*\"]', NULL, NULL, '2023-05-24 06:51:49', '2023-05-24 06:51:49'),
(264, 'App\\Models\\User', 25, 'MyApp', '23cbf79bb689529115fc8fbd80a9a82834b0c09584ae77a7f806bddbd73aca2e', '[\"*\"]', NULL, NULL, '2023-05-24 06:53:27', '2023-05-24 06:53:27'),
(265, 'App\\Models\\User', 13, 'MyApp', 'b4d0895717556ee6745b3fbcd99ec707d035618aafa4d4cf5252a094f1aba46a', '[\"*\"]', NULL, NULL, '2023-05-24 07:06:53', '2023-05-24 07:06:53'),
(266, 'App\\Models\\User', 13, 'MyApp', 'f74f26f38e02cd354cba0f4ef352440ee413bb47752be78302b784e6895f946b', '[\"*\"]', NULL, NULL, '2023-05-24 07:23:08', '2023-05-24 07:23:08'),
(267, 'App\\Models\\User', 13, 'MyApp', '41ab790485bf6d2b33344735368fddec070bcbd35eaed8c376ed03bd52cd2155', '[\"*\"]', NULL, NULL, '2023-05-25 00:22:54', '2023-05-25 00:22:54'),
(268, 'App\\Models\\User', 13, 'MyApp', '974cf346c2deabbb2192c23f930457dd4a846e5f9ed9cda05e5adf91234ff912', '[\"*\"]', NULL, NULL, '2023-05-25 00:30:31', '2023-05-25 00:30:31'),
(269, 'App\\Models\\User', 13, 'MyApp', '4fed34244dee9bd45a7f653508da3d13366bcd851f5db6cc07a00bc140b8e96c', '[\"*\"]', NULL, NULL, '2023-05-25 01:05:36', '2023-05-25 01:05:36'),
(270, 'App\\Models\\User', 13, 'MyApp', 'b150a5da9c2de9856748fb31367fa58c12b0eb6b68062167241dd7be9b2ea79e', '[\"*\"]', NULL, NULL, '2023-05-25 01:11:39', '2023-05-25 01:11:39'),
(271, 'App\\Models\\User', 13, 'MyApp', 'e694210ae2c32c9bedbc6925e7962960bfa91f29239175962f17306dfe70caa6', '[\"*\"]', NULL, NULL, '2023-05-25 01:17:14', '2023-05-25 01:17:14'),
(272, 'App\\Models\\User', 13, 'MyApp', '57a92dc679f5ab74b6c4c803dcccccc5b0b6a2d4e26d907c5fabbddf0a353c31', '[\"*\"]', NULL, NULL, '2023-05-25 01:19:13', '2023-05-25 01:19:13'),
(273, 'App\\Models\\User', 13, 'MyApp', '1e5122a5eb8cec799e3c7089a8ca0228b18d8591eb98cc5b88870a6b2e9586ee', '[\"*\"]', NULL, NULL, '2023-05-25 01:36:07', '2023-05-25 01:36:07'),
(274, 'App\\Models\\User', 13, 'MyApp', '83f00b13203fda2c0293335905e44d00e96bdff9bc5b18d100c2bc0b11e9e26f', '[\"*\"]', NULL, NULL, '2023-05-25 01:36:56', '2023-05-25 01:36:56'),
(275, 'App\\Models\\User', 13, 'MyApp', '46c5dddc405f1eaab966b5f124e9e8fc7a2518fc137f2d0bd13010ec2388db78', '[\"*\"]', NULL, NULL, '2023-05-25 01:40:39', '2023-05-25 01:40:39'),
(276, 'App\\Models\\User', 13, 'MyApp', 'b1cde3bf519322ce21655865094434689f5b15b382c51ae7b08a128c65cffb92', '[\"*\"]', NULL, NULL, '2023-05-25 01:43:14', '2023-05-25 01:43:14'),
(277, 'App\\Models\\User', 25, 'MyApp', 'b401e395285732c593f9c46179f29bfaa076a091a88c296b19ff607b925bb80b', '[\"*\"]', NULL, NULL, '2023-05-25 04:24:39', '2023-05-25 04:24:39'),
(278, 'App\\Models\\User', 13, 'MyApp', '698704702abf5f2c44debc4675975aa0a21e52c1451bc777e2cd70ffbae3165d', '[\"*\"]', NULL, NULL, '2023-05-25 04:25:32', '2023-05-25 04:25:32'),
(279, 'App\\Models\\User', 10, 'MyApp', 'd955b44aa866f812f38cb3e1805aba6e922c41d1513b252019c5d570c4b298d7', '[\"*\"]', NULL, NULL, '2023-05-27 23:48:33', '2023-05-27 23:48:33'),
(280, 'App\\Models\\User', 10, 'MyApp', '5343c78637dbee52bf167948aa0e8b1c6045d1527e150d7d0107a1e0bd9f2431', '[\"*\"]', NULL, NULL, '2023-06-21 10:14:17', '2023-06-21 10:14:17'),
(281, 'App\\Models\\User', 10, 'MyApp', '925cd9b43c0cfecdac6008a4de6e7cdb56098ea0bf4746a67de80494ccf4e618', '[\"*\"]', NULL, NULL, '2023-06-21 10:19:28', '2023-06-21 10:19:28'),
(282, 'App\\Models\\User', 10, 'MyApp', '0e19e6bd786e7d2c3e19d24c6edf5ff63666013db45e1be8efeb13b01ae7f64a', '[\"*\"]', NULL, NULL, '2023-11-09 00:50:31', '2023-11-09 00:50:31');
INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(283, 'App\\Models\\User', 10, 'MyApp', '8225c3ff529d9d3947605b6af179efcdf5cadbedf52159bea5a0d785a9a8926a', '[\"*\"]', NULL, NULL, '2023-11-09 01:09:24', '2023-11-09 01:09:24'),
(284, 'App\\Models\\User', 10, 'MyApp', '941834b1992eca243141965a169d342d175ca4feac7df661568afb6787484661', '[\"*\"]', NULL, NULL, '2023-11-09 01:12:08', '2023-11-09 01:12:08'),
(285, 'App\\Models\\User', 10, 'MyApp', '70dfa9d1fce5a0f97c5f75124e44a1d060e5f735def88655e7251fb72161a31b', '[\"*\"]', NULL, NULL, '2023-11-09 01:55:29', '2023-11-09 01:55:29'),
(286, 'App\\Models\\User', 10, 'MyApp', '0af519828f900d3bd05546aa2da9e4dc0ab29293d6628e54f42c2ccbda93953c', '[\"*\"]', NULL, NULL, '2023-11-09 02:14:52', '2023-11-09 02:14:52'),
(287, 'App\\Models\\User', 10, 'MyApp', '7cb290b8ec62bd8375bf5f0c954299602b67b335c1a3b24512c19a12878ad15c', '[\"*\"]', NULL, NULL, '2023-11-09 02:24:29', '2023-11-09 02:24:29'),
(288, 'App\\Models\\User', 10, 'MyApp', '1e6b457311c3eb07456b26a9950b5af56b365bc3b77cfd9e2895c07e23035d08', '[\"*\"]', NULL, NULL, '2023-11-09 02:30:37', '2023-11-09 02:30:37'),
(289, 'App\\Models\\User', 10, 'MyApp', '0a7f362c92a2bbec7847a96c4ce159263f3541fdb61c41a8e789431787359db4', '[\"*\"]', NULL, NULL, '2023-11-09 02:37:55', '2023-11-09 02:37:55'),
(290, 'App\\Models\\User', 10, 'MyApp', 'fab4baee235c64ed40bd2f9400ecaa24c457921e676d8252214373682510aa4f', '[\"*\"]', NULL, NULL, '2023-11-09 07:36:17', '2023-11-09 07:36:17'),
(291, 'App\\Models\\User', 10, 'MyApp', 'cef2cddb86bd6f530f4f55f13fd006b2a70ef61e35a5d3fbf0d62e44a8c82814', '[\"*\"]', NULL, NULL, '2023-11-09 07:41:07', '2023-11-09 07:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `count` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model_name`, `title`, `description`, `price`, `image`, `category_id`, `count`, `created_at`, `updated_at`) VALUES
(1, 'I Phone 14', 'Best Seller', '4 GB Ram', '50000', '1683788484.jpg', 1, '1', '2023-05-11 01:31:24', '2023-05-11 01:31:24'),
(2, 'Samsung Ultra', 'Best Seller', '12 GB Ram', '80000', '1683791879.jpg', 1, '1', '2023-05-11 02:15:01', '2023-05-11 02:15:01'),
(3, 'HP', 'New Adition', '16 GB Ram', '65000', '1683791206.jpg', 2, '1', '2023-05-11 02:16:46', '2023-05-11 02:16:46'),
(4, 'Nothing A11', 'Nothing', '4 GB Ram', '35000', '1683791928.jpg', 1, '1', '2023-05-11 02:28:48', '2023-05-11 02:28:48'),
(5, 'Oneplus', 'New Charger', 'powerfull charger', '2000', '1683796169.jpg', 3, '1', '2023-05-11 03:39:29', '2023-05-11 03:39:29'),
(6, 'I Phone', 'Wireless', 'Wireless new adtion', '25000', '1683796985.jpg', 4, '1', '2023-05-11 03:53:05', '2023-05-11 03:53:05'),
(7, 'Oneplus', 'Oneplus', 'best airbuds', '5000', '1683798981.jpg', 4, '1', '2023-05-11 04:26:21', '2023-05-11 04:26:21'),
(8, 'Poco X', 'Best seller', '4:GB Ram', '15000', '1683882596.jpg', 1, '1', '2023-05-12 03:39:56', '2023-05-12 03:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Mohit Gohel', 'mohit@gmail.com', 1, NULL, '8780524057', '$2y$10$2Jy9PsUeXROPK1oKdVmPHuF5tWNymqyf2wZvdpNUoTaBFE.33k94.', NULL, NULL, NULL),
(13, 'Mohit Gohel', 'mohitgohel@gmail.com', 2, NULL, '8780524057', '$2y$10$DDvKJaWg1vHvBTQR5z5VGOgn9MuyeEJ.w8EejVAa4m5WuGE0CB9W6', NULL, NULL, NULL),
(25, 'Sagil', 'sagil@gmail.com', 2, NULL, '8780524057', '$2y$10$HVSGJSWJgTS4haOZ3LOuc.9PIBistTuGXjPvmJx/sFPp/pN6vdRYm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `count` varchar(255) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addrres_details`
--
ALTER TABLE `addrres_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_product_id_foreign` (`product_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_foreign` (`role`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addrres_details`
--
ALTER TABLE `addrres_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_foreign` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
