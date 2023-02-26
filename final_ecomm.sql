-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 06:17 PM
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
-- Database: `final_ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `link_text` varchar(255) DEFAULT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `image`, `url`, `link_text`, `background_color`, `created_at`, `updated_at`) VALUES
(1, 'Best smartwatch 2022', NULL, '1677429290.png', 'http://devmojahid.me', 'Shop Now', '#2cc6c9', '2023-02-26 10:30:47', '2023-02-26 10:34:50'),
(2, 'Best Leptop 2022', NULL, '1677429275.png', 'http://devmojahid.me/', 'Shop Now', '#91a919', '2023-02-26 10:31:11', '2023-02-26 10:34:35'),
(3, 'the top wearables you', NULL, '1677429258.png', 'http://devmojahid.me', 'shop Now', '#0cc675', '2023-02-26 10:31:37', '2023-02-26 10:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `content`, `image`, `category_id`, `tag_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Cedric Reid', 'cedric-reid', '10', NULL, '607', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', 'uploads/blogs/1677422317_Lovepik_com-401625256-ice-cream-cup.png', 4, NULL, NULL, '2023-02-26 08:38:37', '2023-02-26 08:38:37'),
(2, 'Holmes Massey', 'holmes-massey', '638', NULL, '456', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', '1677422339_Lovepik_com-401172566-best-cool-ice-cream-elements.png', 6, NULL, NULL, '2023-02-26 08:38:59', '2023-02-26 08:38:59'),
(3, 'Leilani Hart', 'leilani-hart', '468', NULL, '172', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', '1677422356_edit.png', 2, NULL, NULL, '2023-02-26 08:39:16', '2023-02-26 08:39:16'),
(4, 'Graham Erickson', 'graham-erickson', '919', NULL, '163', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', '', 4, NULL, NULL, '2023-02-26 08:43:04', '2023-02-26 08:43:04'),
(5, 'Jakeem Holman', 'jakeem-holman', '718', NULL, '864', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: #e06c75;\">image_path</span></div>', 'uploads/blogs/AV4guSULLmy6sO06F8ZzqsDxZIOQ6Atw40xnBxlJ.png', 1, NULL, NULL, '2023-02-26 08:44:16', '2023-02-26 08:44:16'),
(6, 'Hedda Montoya', 'hedda-montoya', '513', NULL, '832', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', 'uploads/blogs/0s6RWmEXm4TMtd9y1iGvOQ4hbmhngUO18y0jyhkb.png', 1, NULL, NULL, '2023-02-26 08:44:45', '2023-02-26 08:44:45'),
(7, 'Igor Schneider', 'igor-schneider', '232', NULL, '766', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', 'uploads/blogs/f1DzAnyRhitpXGQAAw2ebqV36gOzxmvRRm1WpaBe.png', 3, NULL, NULL, '2023-02-26 08:45:03', '2023-02-26 08:45:03'),
(8, 'Marcia Hill', 'marcia-hill', '244', NULL, '586', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', '', 4, NULL, NULL, '2023-02-26 08:45:14', '2023-02-26 08:45:14'),
(9, 'Astra Mckee', 'astra-mckee', '967', NULL, '61', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', 'uploads/blogs/r6OUU9Z4jvdTNXuhNyxXxfWZXzXVVSXXzQQeh2QD.png', 6, NULL, NULL, '2023-02-26 08:45:35', '2023-02-26 08:45:35'),
(10, 'Wyatt Snyder', 'wyatt-snyder', '186', NULL, '366', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', '', 1, NULL, NULL, '2023-02-26 08:45:53', '2023-02-26 08:45:53'),
(11, 'Orla Curtis', 'orla-curtis', '737', NULL, '237', 'active', '<div style=\"color: #abb2bf; background-color: #23272e; font-family: Consolas, \'Courier New\', monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae reprehenderit nemo id vero asperiores hic quidem, quibusdam aperiam minima quasi numquam, deleniti earum neque. Ad ducimus nemo omnis laudantium corrupti. Laudantium quasi ea accusamus, vitae excepturi inventore sed nisi fugit?</div>\r\n</div>', 'uploads/blogs/hur6Lnl56duznsRHQUrNGT2bqXPxamvIMEIZKu6I.png', 4, NULL, NULL, '2023-02-26 08:47:14', '2023-02-26 08:47:14'),
(12, 'Aquila Best', 'aquila-best', '899', NULL, '797', 'active', NULL, 'uploads/blogs/4iUsvJZ2IYtejYKXb6mwqvG6BqkIKYjXoDdRGOuw.png', 5, NULL, NULL, '2023-02-26 08:47:24', '2023-02-26 08:47:24'),
(13, 'Salvador Walsh', 'salvador-walsh', '979', NULL, '693', 'active', NULL, 'uploads/blogs/y4J4lcy1GalztBFuglPgKRSkrCi2TLTjK2iCrUEx.png', 3, NULL, NULL, '2023-02-26 08:47:37', '2023-02-26 08:47:37'),
(14, 'Camden Watkins', 'camden-watkins', '198', NULL, '937', 'active', NULL, 'uploads/blogs/zOa9aPRlyOv1wVkTBR6AvBkMUmnGp7AfvKvr3jn7.jpg', 9, NULL, NULL, '2023-02-26 11:07:23', '2023-02-26 11:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo`, `website`, `email`, `phone`, `address`, `country`, `city`, `state`, `zip`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple', 'uploads/brands/1.png', 'https://www.apple.com/', 'test@gmail.com', '123456789', '123, New York, USA', 'USA', 'New York', 'New York', '123456', 'Apple is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 'active', NULL, NULL),
(2, 'Samsung', 'samsung', 'uploads/brands/2.png', 'https://www.samsung.com/', 'test@gmail.com', '123456789', '123, New York, USA', 'USA', 'New York', 'New York', '123456', 'samsung is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 'active', NULL, NULL),
(3, 'Xiaomi', 'xiaomi', 'uploads/brands/3.png', 'https://www.xiaomi.com/', '', '', '', '', '', '', '', 'Xiaomi is a Chinese electronics company headquartered in Beijing. It designs, develops, and sells smartphones, mobile apps, laptops, and related consumer electronics.', 'active', NULL, NULL),
(4, 'Oppo', 'oppo', 'uploads/brands/4.png', 'https://www.oppo.com/', '', '', '', '', '', '', '', 'Oppo is a Chinese consumer electronics and mobile communications company headquartered in Dongguan, Guangdong, China. It also has offices in Hong Kong, India, Indonesia, Malaysia, Myanmar, the Philippines, Singapore, Thailand, Turkey, the United Arab Emirates, the United Kingdom, and the United States.', 'active', NULL, NULL),
(5, 'Vivo', 'vivo', 'uploads/brands/5.png', 'https://www.vivo.com/', '', '', '', '', '', '', '', 'Vivo is a Chinese smartphone manufacturer headquartered in Dongguan, Guangdong. It designs, develops, and sells smartphones, smartphone accessories, software, and online services.', 'active', NULL, NULL),
(6, 'OnePlus', 'oneplus', 'uploads/brands/6.png', 'https://www.oneplus.com/', '', '', '', '', '', '', '', 'OnePlus is a Chinese smartphone manufacturer headquartered in Shenzhen, Guangdong. It designs, develops, and sells smartphones, mobile apps, and accessories.', 'active', NULL, NULL),
(7, 'Nokia', 'nokia', 'uploads/brands/7.png', 'https://www.nokia.com/', '', '', '', '', '', '', '', 'Nokia is a Finnish multinational telecommunications, information technology, and consumer electronics company, founded in 1865.', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `user_ip` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `qty`, `price`, `user_ip`, `created_at`, `updated_at`) VALUES
(9, 8, 2, 0, '127.0.0.1', NULL, '2023-02-26 10:47:34'),
(10, 7, 1, 0, '127.0.0.1', NULL, NULL),
(11, 1, 1, 0, '127.0.0.1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_parent` int(11) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `photo`, `icon`, `is_parent`, `summary`, `status`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'mobile', 'uploads/categories/1.svg', NULL, 1, 'Mobile Phone', 'active', NULL, NULL, NULL),
(2, 'Tablet', 'tablet', 'uploads/categories/2.svg', NULL, 1, 'Tablet Phone', 'active', NULL, NULL, NULL),
(3, 'Laptop', 'laptop', 'uploads/categories/3.svg', NULL, 1, 'Laptop Phone', 'active', NULL, NULL, NULL),
(4, 'Camera', 'camera', 'uploads/categories/4.svg', NULL, 1, 'Camera Phone', 'active', NULL, NULL, NULL),
(5, 'Accessories', 'accessories', 'uploads/categories/5.svg', NULL, 1, 'Accessories Phone', 'active', NULL, NULL, NULL),
(6, 'Smart Watch', 'smart-watch', 'uploads/categories/6.svg', NULL, 1, 'Smart Watch Phone', 'active', NULL, NULL, NULL),
(7, 'Headphone', 'headphone', 'uploads/categories/7.svg', NULL, 1, 'Headphone Phone', 'active', NULL, NULL, NULL),
(8, 'Lemon', 'lemon', 'uploads/categories/pJArQuncyICNmAdPSTOaFDNP8QvmhZOZPE18rVh8.jpg', '', 1, 'Lemon', 'active', NULL, '2023-02-26 11:03:56', '2023-02-26 11:03:56'),
(9, 'Tomato', 'tomato', 'uploads/categories/6JOUDNVoNg40wP0l2dBCXCtudPMl3D5z45AXiHbU.jpg', '', 1, NULL, 'active', NULL, '2023-02-26 11:04:15', '2023-02-26 11:04:15'),
(10, 'date', 'date', 'uploads/categories/3ROZNuvWau2YaVl3keB5BA1CnU7xh10yrT4FO8mx.jpg', '', 1, NULL, 'active', NULL, '2023-02-26 11:04:55', '2023-02-26 11:04:55'),
(11, 'Cauliflower', 'cauliflower', 'uploads/categories/mQimnZwSjOUYpIyTfbamRA6GLxhnFEUOC8qWQRqT.jpg', '', 1, NULL, 'active', NULL, '2023-02-26 11:05:29', '2023-02-26 11:05:29'),
(12, 'Carrot', 'carrot', 'uploads/categories/ejWp216yjtZVzSF2DkUer7lLq0pFRTuJlKf2sNei.jpg', '', 1, NULL, 'active', NULL, '2023-02-26 11:06:11', '2023-02-26 11:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `slug`, `code`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Brown', 'quaerat-voluptatem-error-voluptatem', '#61f9cd', 'Laborum veritatis eum quia omnis nesciunt qui.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(2, 'BlanchedAlmond', 'ea-dolores-id-mollitia-harum', '#11fcc8', 'Architecto qui natus laboriosam rerum dignissimos autem laboriosam.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(3, 'Azure', 'ipsam-dignissimos-ab-incidunt', '#6c9d9f', 'Ad corporis doloribus voluptas ex.', 'active', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(4, 'HoneyDew', 'aut-sunt-voluptas-nisi-non-facere-eligendi', '#6620b1', 'Aut optio praesentium tempora et impedit quo.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(5, 'Chartreuse', 'qui-saepe-adipisci-deserunt-quas-et-voluptas-similique', '#fb1c9e', 'Ab veritatis at molestias.', 'active', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(6, 'Olive', 'eaque-incidunt-non-ipsa-et-et-laborum-nulla', '#73d9d5', 'Ex modi possimus fuga eligendi in aliquid.', 'active', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(7, 'LimeGreen', 'dolorem-repellendus-et-necessitatibus-consequatur-quia-veritatis-facilis-necessitatibus', '#a970af', 'Consequatur dolore ut dolor non nostrum repellendus sed.', 'active', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(8, 'IndianRed', 'unde-numquam-officia-optio-quis-quia', '#4b7ca8', 'Reiciendis voluptatibus sunt voluptatum voluptatem est et.', 'active', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(9, 'DarkOliveGreen', 'hic-aliquid-cumque-tempora-omnis-occaecati-similique', '#3b82c9', 'Commodi praesentium pariatur voluptatibus inventore numquam.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(10, 'SandyBrown', 'minus-quis-enim-qui-accusantium', '#9e6341', 'Occaecati omnis suscipit est necessitatibus sed occaecati provident omnis.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(11, 'LightBlue', 'nobis-qui-accusamus-vitae-harum-eveniet-ea-asperiores', '#151489', 'Debitis voluptas omnis voluptas modi incidunt illum.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(12, 'SteelBlue', 'magnam-dolor-exercitationem-inventore-dolorum-aut-corrupti-ipsum', '#9dc6fa', 'Velit harum quia dolorum ipsam.', 'active', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(13, 'Teal', 'id-aut-sint-animi-rerum-quis-quia', '#fbe236', 'Earum aut qui quia cumque quisquam dolore rem illo.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(14, 'MediumAquaMarine', 'officia-praesentium-aut-dolores', '#a3606e', 'Incidunt consectetur enim voluptate in aut.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(15, 'Khaki', 'magnam-voluptate-libero-perspiciatis', '#59c28f', 'Reprehenderit architecto esse sed atque.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(16, 'BurlyWood', 'distinctio-sunt-et-omnis-quae-aliquid-veniam-tempora', '#a3de2c', 'Distinctio error quam ea.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(17, 'Beige', 'qui-minus-pariatur-sed-dolorem-tempora-laudantium-aut', '#f721d1', 'Nulla repellendus culpa culpa.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(18, 'Maroon', 'quis-unde-accusantium-quis-et-voluptatem-sapiente', '#ec72be', 'Quae similique praesentium sapiente ea officiis et doloremque.', 'inactive', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(19, 'Gold', 'iure-expedita-molestias-maiores-nesciunt', '#3d6d9d', 'Ipsum officiis dolores non eveniet est.', 'active', '2023-02-25 10:05:43', '2023-02-25 10:05:43'),
(20, 'DimGrey', 'nam-voluptas-et-a-tempore-qui', '#6c810c', 'Veritatis libero ut id et officiis.', 'active', '2023-02-25 10:05:43', '2023-02-25 10:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `min_order_amount` int(11) DEFAULT NULL,
  `max_discount_amount` int(11) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `min_order_amount`, `max_discount_amount`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MBCDRF', 'fixed', 30, 0, 0, '2021-06-18', '2021-06-18', 'active', '2023-02-25 10:06:18', '2023-02-25 10:06:18'),
(2, 'MBCDRFRT', 'fixed', 50, 0, 0, '2021-06-18', '2021-06-18', 'active', '2023-02-25 10:10:34', '2023-02-25 10:10:34');

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
(5, '2023_02_23_094341_create_categories_table', 1),
(6, '2023_02_23_103003_create_brands_table', 1),
(7, '2023_02_23_103227_create_colors_table', 1),
(8, '2023_02_23_103719_create_products_table', 1),
(9, '2023_02_23_110614_create_sizes_table', 1),
(10, '2023_02_23_111147_create_warehouses_table', 1),
(11, '2023_02_23_111858_create_tags_table', 1),
(12, '2023_02_23_112122_create_blogs_table', 1),
(13, '2023_02_23_112809_create_reviews_table', 1),
(14, '2023_02_23_112858_create_coupons_table', 1),
(15, '2023_02_23_114613_create_smtps_table', 1),
(16, '2023_02_23_114834_create_settings_table', 1),
(17, '2023_02_24_181427_create_sliders_table', 1),
(18, '2023_02_24_181747_create_ads_table', 1),
(19, '2023_02_24_185858_create_carts_table', 1),
(20, '2023_02_25_170048_create_orders_table', 2),
(21, '2023_02_25_170109_create_orderitems_table', 2),
(22, '2023_02_25_170118_create_shippings_table', 2),
(23, '2023_02_26_100553_create_payments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `order_id`, `product_id`, `qty`, `product_name`, `created_at`, `updated_at`) VALUES
(1, 2, 8, 2, 'fesh soap', '2023-02-25 12:26:21', NULL),
(2, 2, 9, 1, 'Washing Powser', '2023-02-25 12:26:21', NULL),
(3, 2, 3, 5, 'Tomato', '2023-02-25 12:26:21', NULL),
(4, 2, 7, 1, 'onion', '2023-02-25 12:26:21', NULL),
(5, 2, 5, 1, 'domex soap', '2023-02-25 12:26:21', NULL),
(6, 3, 8, 2, 'fesh soap', '2023-02-25 12:27:36', NULL),
(7, 3, 9, 1, 'Washing Powser', '2023-02-25 12:27:36', NULL),
(8, 3, 3, 5, 'Tomato', '2023-02-25 12:27:36', NULL),
(9, 3, 7, 1, 'onion', '2023-02-25 12:27:36', NULL),
(10, 3, 5, 1, 'domex soap', '2023-02-25 12:27:36', NULL),
(11, 4, 9, 1, 'Washing Powser', '2023-02-25 12:29:46', NULL),
(12, 5, 9, 1, 'Washing Powser', '2023-02-26 04:05:30', NULL),
(13, 5, 8, 1, 'fesh soap', '2023-02-26 04:05:30', NULL),
(14, 6, 8, 1, 'fesh soap', '2023-02-26 04:20:15', NULL),
(15, 7, 8, 1, 'fesh soap', '2023-02-26 04:28:07', NULL),
(16, 8, 8, 1, 'fesh soap', '2023-02-26 04:29:21', NULL),
(17, 9, 8, 1, 'fesh soap', '2023-02-26 04:29:55', NULL),
(18, 10, 8, 1, 'fesh soap', '2023-02-26 04:43:48', NULL),
(19, 11, 8, 1, 'fesh soap', '2023-02-26 07:30:40', NULL),
(20, 11, 7, 1, 'onion', '2023-02-26 07:30:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `coupon_discount` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_no`, `payment_type`, `total`, `subtotal`, `coupon_discount`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '34004633', 'bank', '2865', '2915', NULL, 3, '2023-02-25 12:25:30', NULL),
(2, '20432682', 'bank', '2865', '2915', NULL, 3, '2023-02-25 12:26:21', NULL),
(3, '62933884', 'bank', '2865', '2915', NULL, 3, '2023-02-25 12:27:36', NULL),
(4, '84300128', 'bank', '0', '400', NULL, 3, '2023-02-25 12:29:46', NULL),
(5, '83787144', 'bank', '0', '700', NULL, 3, '2023-02-26 04:05:30', NULL),
(6, '53340219', 'aamarpay', '0', '300', NULL, 3, '2023-02-26 04:20:15', NULL),
(7, '55370550', 'aamarpay', '0', '300', NULL, 3, '2023-02-26 04:28:07', NULL),
(8, '19869459', 'aamarpay', '300', '300', NULL, 3, '2023-02-26 04:29:21', NULL),
(9, '84982343', 'aamarpay', '0', '300', NULL, 3, '2023-02-26 04:29:55', NULL),
(10, '84305481', 'aamarpay', '0', '300', NULL, 3, '2023-02-26 04:43:48', NULL),
(11, '32600965', 'aamarpay', '0', '900', NULL, 3, '2023-02-26 07:30:40', NULL);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `photos` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `discount_type` varchar(255) DEFAULT NULL,
  `discount_start` date DEFAULT NULL,
  `discount_end` date DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `stock_alert` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `featured` enum('yes','no') NOT NULL DEFAULT 'no',
  `trending` enum('yes','no') NOT NULL DEFAULT 'no',
  `best_rated` enum('yes','no') NOT NULL DEFAULT 'no',
  `hot_new` enum('yes','no') NOT NULL DEFAULT 'no',
  `buyone_getone` enum('yes','no') NOT NULL DEFAULT 'no',
  `special_offer` enum('yes','no') NOT NULL DEFAULT 'no',
  `special_deal` enum('yes','no') NOT NULL DEFAULT 'no',
  `vat` int(11) DEFAULT NULL,
  `tax` int(11) DEFAULT NULL,
  `free_shipping` enum('yes','no') NOT NULL DEFAULT 'no',
  `product_video_link` varchar(255) DEFAULT NULL,
  `product_audio_link` varchar(255) DEFAULT NULL,
  `product_file_link` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `photos`, `thumbnail`, `summary`, `description`, `price`, `discount`, `discount_type`, `discount_start`, `discount_end`, `sku`, `barcode`, `stock`, `stock_alert`, `weight`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `featured`, `trending`, `best_rated`, `hot_new`, `buyone_getone`, `special_offer`, `special_deal`, `vat`, `tax`, `free_shipping`, `product_video_link`, `product_audio_link`, `product_file_link`, `category_id`, `brand_id`, `user_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 'sugar', 'sugar', 'uploads/products/1.jpg|uploads/products/2.jpg|uploads/products/3.jpg|uploads/products/4.jpg', 'uploads/products/2.jpg', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'The iPhone 12 Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 1099, 10, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 100, '10', '1.5kg', 'Apple iPhone 12 Pro Max', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 1, 1, 1, 1, NULL, NULL),
(2, 'salt', 'salt-slug', 'uploads/products/3.jpg|uploads/products/4.jpg|uploads/products/5.jpg|uploads/products/6.jpg', 'uploads/products/2.jpg', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'The iPhone 12 Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 1099, 10, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 100, '10', '1.5kg', 'Apple iPhone 12 Pro Max', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 1, 1, 1, 1, NULL, NULL),
(3, 'Tomato', 'tomato-slug', 'uploads/products/3.jpg|uploads/products/4.jpg|uploads/products/5.jpg|uploads/products/6.jpg', 'uploads/products/3.jpg', 'Tomato Max is a smartphone by Apple .', 'The iPhone 12 Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 203, 10, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 400, '10', '1.9kg', 'tomato meta title', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 3, 4, 1, 7, NULL, NULL),
(4, 'Rice vat', 'rice-vat', 'uploads/products/5.jpg|uploads/products/6.jpg|uploads/products/7.jpg|uploads/products/8.jpg', 'uploads/products/5.jpg', 'Rice  Max is a smartphone by Apple .', 'The RIce Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 160, 20, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 300, '10', '1.2kg', 'rice meta title', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 2, 6, 1, 3, NULL, NULL),
(5, 'domex soap', 'domex-soap-1', 'uploads/products/6.jpg|uploads/products/7.jpg|uploads/products/8.jpg|uploads/products/9.jpg', 'uploads/products/6.jpg', 'domex  Max is a smartphone by Apple .', 'The domex Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 300, 40, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 300, '10', '1.2kg', 'rice meta title', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 2, 6, 1, 3, NULL, NULL),
(6, 'fesh soap', 'domex-soap-2', 'uploads/products/6.jpg|uploads/products/7.jpg|uploads/products/8.jpg|uploads/products/9.jpg', 'uploads/products/6.jpg', 'domex  Max is a smartphone by Apple .', 'The domex Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 300, 40, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 300, '10', '1.2kg', 'rice meta title', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 2, 6, 1, 3, NULL, NULL),
(7, 'onion', 'onion-soap-1', 'uploads/products/9.jpg|uploads/products/4.jpg|uploads/products/1.jpg|uploads/products/9.jpg', 'uploads/products/7.jpg', 'domex  Max is a smartphone by Apple .', 'The domex Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 600, 70, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 300, '10', '1.2kg', 'rice meta title', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 2, 6, 1, 3, NULL, NULL),
(8, 'fesh soap', 'domex-soap-4', 'uploads/products/6.jpg|uploads/products/7.jpg|uploads/products/8.jpg|uploads/products/9.jpg', 'uploads/products/6.jpg', 'domex  Max is a smartphone by Apple .', 'The domex Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 300, 40, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 300, '10', '1.2kg', 'rice meta title', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 2, 6, 1, 3, NULL, NULL),
(9, 'Washing Powser', 'washing-powser', 'uploads/products/7.jpg|uploads/products/8.jpg|uploads/products/9.jpg|uploads/products/10.jpg', 'uploads/products/8.jpg', 'washing powser  Max is a smartphone by Apple .', 'The domex Pro Max is a smartphone by Apple that was released in October 2020. The phone runs on the iOS 14.0.1 operating system. The iPhone 12 Pro Max has a 6.7-inch Super Retina XDR OLED display with a resolution of 1284x2778 pixels at a pixel density of 458 pixels per inch (ppi). The Apple A14 Bionic chipset is paired with 6GB of RAM and 128GB/256GB/512GB of internal storage. As far as the cameras are concerned, the iPhone 12 Pro Max on the rear packs a 12-megapixel primary camera with an f/1.6 aperture and a pixel size of 1.4-micron and a second 12-megapixel camera with an f/2.4 aperture and a pixel size of 1.0-micron. The rear camera setup has autofocus. It sports a 12-megapixel camera on the front for selfies, with an f/2.2 aperture and a pixel size of 1.22-micron.', 400, 70, 'percent', '2021-02-01', '2021-02-28', 'sku-001', 'barcode-001', 300, '10', '1.2kg', 'rice meta title', 'The iPhone 12 Pro Max is a smartphone by Apple .', 'Apple, iPhone, 12, Pro, Max', 'active', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 10, 10, 'yes', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 'https://www.youtube.com/watch?v=Q8TXgCzxEnw', 2, 6, 1, 3, NULL, NULL),
(10, 'Rina Ferrell', 'rina-ferrell', 'uploads/products/1677430824p-06.jpg|uploads/products/1677430824p-07.jpg|uploads/products/1677430824p-08.jpg|uploads/products/1677430824p-09.jpg', 'uploads/products/WObWC5dSxG6QKiFF1d42e42lSMtxgsh7gd4jGEUw.jpg', NULL, NULL, 624, 502, 'flat', '1986-05-15', '1978-04-22', 'Non id minima sint', 'Zorita Merrill', 72, NULL, '134', '796', NULL, '423', 'active', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 26, 56, 'yes', 'https://www.hehoce.co.uk', 'https://www.howowuxohyqapor.me', '', 7, 3, NULL, 7, '2023-02-26 11:00:24', '2023-02-26 11:00:24'),
(11, 'Madeson Valentine', 'madeson-valentine', 'uploads/products/1677430874p-01.jpg|uploads/products/1677430874p-02.jpg|uploads/products/1677430874p-03.jpg|uploads/products/1677430874p-05.jpg', 'uploads/products/VrDvdsI19eEl25sLNfo0lWVWa6xXSOqLlzipGyAY.jpg', NULL, NULL, 915, 641, 'percent', '1985-05-12', '1994-06-27', 'Quia molestias aperi', 'Lucy Velez', 246, NULL, '448', '866', NULL, '443', 'active', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', 35, 39, 'yes', 'https://www.gosumac.me', 'https://www.korihuvujomimis.co', '', 6, 2, NULL, 2, '2023-02-26 11:01:14', '2023-02-26 11:01:14'),
(12, 'Janna Sharpe', 'janna-sharpe', 'uploads/products/1677430954p-22.jpg|uploads/products/1677430954p-23.jpg|uploads/products/1677430954p-24.jpg|uploads/products/1677430954p-25.jpg', 'uploads/products/zdFSVxjOTQJ7akGvCIMu0EezhOWRVt89tEhAXlEV.jpg', NULL, NULL, 53, 302, 'percent', '2013-02-18', '1988-09-06', 'Et est ad culpa aut', 'Alana Haynes', 397, NULL, '405', '743', NULL, '788', 'active', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'no', 50, 32, 'no', 'https://www.vopefo.us', 'https://www.hikiraxym.mobi', '', 2, 2, NULL, 1, '2023-02-26 11:02:34', '2023-02-26 11:02:34'),
(13, 'Alexander Pate', 'alexander-pate', 'uploads/products/1677430986p-26.jpg|uploads/products/1677430986p-27.jpg|uploads/products/1677430986p-28.jpg|uploads/products/1677430986p-29.jpg', 'uploads/products/yLhiw5fEJdNRGTtbCqnzSUiLkyc11pcQufM9HxQa.jpg', NULL, NULL, 245, 831, 'percent', '2005-10-04', '2007-01-09', 'Laborum Aut volupta', 'TaShya Herman', 62, NULL, '384', '436', NULL, '360', 'active', 'no', 'yes', 'no', 'no', 'no', 'yes', 'yes', 69, 88, 'no', 'https://www.huwudyj.me.uk', 'https://www.wikizyrep.mobi', '', 4, 2, NULL, 19, '2023-02-26 11:03:06', '2023-02-26 11:03:06'),
(14, 'Zenaida Trevino', 'zenaida-trevino', 'uploads/products/1677431310p-03.jpg', 'uploads/products/RY9u3rqJaOaDJJpbxl15w8RiUYUlBl3WT2EQrS2w.jpg', NULL, NULL, 477, 765, 'flat', '1995-06-12', '1988-09-10', 'Quia id accusamus ex', 'Macon Terrell', 156, NULL, '716', '981', NULL, '73', 'active', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', 81, 82, 'yes', 'https://www.xyzifevyxex.com.au', 'https://www.munevepapu.org', '', 11, 1, NULL, NULL, '2023-02-26 11:08:31', '2023-02-26 11:08:31'),
(15, 'Aubrey Miles', 'aubrey-miles', 'uploads/products/1677431358p-01.jpg|uploads/products/1677431358p-02.jpg|uploads/products/1677431358p-03.jpg|uploads/products/1677431358p-05.jpg', 'uploads/products/iP1O1RyGIuPP8j1y6XkVuzDB4ddg19ETpPPgD4jq.jpg', NULL, NULL, 885, 877, 'percent', '1972-11-28', '1986-12-03', 'Ut tempore magni du', 'Quon Mcconnell', 116, NULL, '623', '744', NULL, '918', 'active', 'yes', 'no', 'yes', 'yes', 'no', 'no', 'no', 31, 93, 'no', 'https://www.gyhac.ca', 'https://www.mopiryre.biz', '', 8, NULL, NULL, 2, '2023-02-26 11:09:18', '2023-02-26 11:09:18'),
(16, 'Benjamin Compton', 'benjamin-compton', 'uploads/products/1677431386p-22.jpg|uploads/products/1677431386p-23.jpg|uploads/products/1677431386p-24.jpg|uploads/products/1677431386p-25.jpg', 'uploads/products/h8Gpfz3CoMSvxmrPFl0Oo8zKZPz1nl1rtw09BA7V.jpg', NULL, NULL, 933, 842, 'percent', '2006-06-26', '1999-04-20', 'Dolor veniam ad dui', 'Christine Goodwin', 773, NULL, '842', '652', NULL, '461', 'active', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 59, 12, 'yes', 'https://www.xocuteh.org', 'https://www.xocylucosutilok.com.au', '', 10, 2, NULL, 11, '2023-02-26 11:09:46', '2023-02-26 11:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `support_email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `currency`, `currency_symbol`, `phone`, `phone2`, `email`, `support_email`, `address`, `city`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'uploads/logo/MxYOlwCexRZoYvxBSwvSwGZ8k7UtiaU3U1OjAMZw.png', 'uploads/logo/H0WlxkaObTOPPC9psRgYcLKwdqK61M2e77o2ZvFp.ico', NULL, NULL, '+880171532001', '+8801726085468', 'raofahmedmojahid@gmail.com', 'raofahmedmojahid@gmail.com', 'Baisherkot , Mohanpor Bazar, comilla , Zip/post=2510', 'comilla', 'https://www.facebook.com/devmojahid', 'https://twitter.com', NULL, NULL, NULL, NULL, '2023-02-26 10:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_first_name` varchar(255) NOT NULL,
  `shipping_last_name` varchar(255) NOT NULL,
  `shipping_email` varchar(255) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `shipping_first_name`, `shipping_last_name`, `shipping_email`, `shipping_phone`, `address`, `state`, `city`, `post_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 3, 'McKenzie', 'Odonnell', 'heteg@mailinator.com', '+1 (502) 424-3616', 'Neque molestias occa', 'Tempora velit autem', 'Mollit maiores lauda', 'Harum laboriosam re', 'Ad dolorem numquam o', '2023-02-25 12:27:36', NULL),
(2, 4, 'Nash', 'Roberts', 'qahilowy@mailinator.com', '+1 (364) 305-1414', 'Ad omnis alias iste', 'Est fugiat error i', 'Mollitia non volupta', 'Molestiae nostrum ea', 'Dolores numquam quid', '2023-02-25 12:29:46', NULL),
(3, 5, 'Dillon', 'Maldonado', 'luxujuc@mailinator.com', '+1 (161) 602-1172', 'Esse aperiam et veni', 'Dolor velit saepe ea', 'Cupidatat possimus', 'Beatae mollit minima', 'Ut recusandae Aperi', '2023-02-26 04:05:30', NULL),
(4, 6, 'Tara', 'Forbes', 'tejadum@mailinator.com', '+1 (111) 847-9786', 'Deserunt labore sunt', 'Nostrud enim dolor u', 'Rerum nulla magnam n', 'Mollit magnam qui et', 'Adipisci voluptatem', '2023-02-26 04:20:15', NULL),
(5, 7, 'Dorian', 'Gay', 'xyvimy@mailinator.com', '+1 (743) 262-9947', 'Aut doloremque saepe', 'Dolor placeat odit', 'Nihil dicta qui ad m', 'Esse elit cupidata', 'Sit aut magni est', '2023-02-26 04:28:07', NULL),
(6, 8, 'Rowan', 'Cardenas', 'bija@mailinator.com', '+1 (209) 209-5694', 'Et ullam eum dolore', 'Iure voluptas rerum', 'Fugiat quisquam amet', 'Ex saepe sed sunt no', 'Mollit reprehenderit', '2023-02-26 04:29:21', NULL),
(7, 9, 'Keely', 'Petty', 'cexa@mailinator.com', '+1 (928) 645-2814', 'Dolore quis sint ist', 'Doloribus est iure', 'Esse consequatur nu', 'Blanditiis nesciunt', 'Deserunt soluta non', '2023-02-26 04:29:55', NULL),
(8, 10, 'Azalia', 'Cherry', 'zyxesinizo@mailinator.com', '+1 (658) 634-2933', 'Qui blanditiis est e', 'Nihil ut tenetur pos', 'Et dolore id amet', 'Expedita eum lorem a', 'Praesentium mollit n', '2023-02-26 04:43:48', NULL),
(9, 11, 'Karen', 'Nash', 'vyzyr@mailinator.com', '+1 (622) 166-2604', 'Veniam magni dolor', 'Ipsum magni necessi', 'Ea numquam omnis mai', 'Quas nisi nobis dict', 'Laboriosam ipsum l', '2023-02-26 07:30:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `link_text` varchar(255) DEFAULT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `link`, `link_text`, `background_color`, `created_at`, `updated_at`) VALUES
(1, 'Summer Trands Up To 50 %', 'Slider 1', 'uploads/slider/AdjvnW6zbMAMMrftrbkKojLQZT4SX3CuKlpFHP67.png', 'https://www.tajetewe.org.uk', 'shop Now', '#1791cf', '2023-02-26 07:59:01', '2023-02-26 08:05:35'),
(2, 'Winter Trands Up To 50 %', NULL, 'uploads/slider/ab37T4cnAaBlwOpWFbLaB5TF4NX9bYyZeY6V8QJV.png', 'https://www.tajetewe.org.uk', 'Shop Now', '#173b1b', '2023-02-26 07:59:32', '2023-02-26 08:05:24'),
(3, 'Baby Essential Product', NULL, 'uploads/slider/bdpHpRyBUcZsKOn2HIsiULuhXAJLHS0X5Wx4YQ6c.png', 'https://www.tajetewe.org.uk', 'Shop Now', '#13aa48', '2023-02-26 08:00:06', '2023-02-26 08:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `smtps`
--

CREATE TABLE `smtps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailer` varchar(255) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `port` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `encryption` varchar(255) DEFAULT NULL,
  `from_address` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
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
  `password` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT 3,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `token`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$uu88gzoK7BumrJSIphg7reYS0FN9z1AbkMysfTXCfH2VZfruEyZEK', 'active', NULL, 1, NULL, NULL, NULL),
(2, 'Admin 2', 'admin2@gmail.com', '$2y$10$ardl4NimD7PidMSydXgufeuLSINIM2F8KElhEibTS5qJ92J7R71Be', 'active', NULL, 1, NULL, NULL, NULL),
(3, 'user 1', 'user@gmail.com', '$2y$10$a911Hy7yOpgGlsKa9g2/cO4.7GI/a7sCzMyB0yXAjcKQnb4bvs3HS', 'active', NULL, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_tag_id_foreign` (`tag_id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_slug_unique` (`slug`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
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
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_color_id_foreign` (`color_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_slug_unique` (`slug`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtps`
--
ALTER TABLE `smtps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `smtps`
--
ALTER TABLE `smtps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
