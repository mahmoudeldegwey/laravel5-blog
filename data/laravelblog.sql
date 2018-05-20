-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 04:23 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravelblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'php 7', '2018-05-14 18:06:26', '2018-05-14 18:14:29'),
(2, 'Mobile', '2018-05-18 21:13:59', '2018-05-18 21:13:59'),
(3, 'tablet', '2018-05-18 21:14:23', '2018-05-18 21:14:23'),
(4, 'Gadgets', '2018-05-18 21:14:54', '2018-05-18 21:14:54'),
(5, 'Camera', '2018-05-18 21:15:23', '2018-05-18 21:15:23'),
(6, 'Design', '2018-05-18 21:15:48', '2018-05-18 21:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `is_active`, `author`, `photo`, `email`, `body`, `created_at`, `updated_at`) VALUES
(3, 1, 0, 'Admin', NULL, 'admin2@yahoo.com', 'hello my name mahmoud', '2018-05-17 21:23:41', '2018-05-19 19:42:17'),
(4, 2, 1, 'Admin', NULL, 'admin2@yahoo.com', 'test Mahmoud Count Comments', '2018-05-18 23:02:22', '2018-05-18 23:02:22'),
(5, 2, 1, 'Admin', NULL, 'admin2@yahoo.com', 'hello', '2018-05-19 02:18:40', '2018-05-19 02:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE IF NOT EXISTS `comment_replies` (
  `id` int(10) unsigned NOT NULL,
  `comment_id` int(10) unsigned NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_08_005653_create_roles_table', 1),
(4, '2018_05_08_220154_add_photo_id_to_users', 2),
(5, '2018_05_08_234633_create_photos_table', 3),
(6, '2018_05_11_020548_create_posts_table', 4),
(7, '2018_05_11_164528_create_categories_table', 5),
(8, '2018_05_17_201038_create_comments_table', 6),
(9, '2018_05_17_201126_create_comment_replies_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'AdobePhotoshopExpress_7edd92ea964849f0933cadb124a0de27.jpg', '2018-05-08 23:03:29', '2018-05-08 23:03:29'),
(2, 'AdobePhotoshopExpress_7edd92ea964849f0933cadb124a0de27.jpg', '2018-05-11 14:38:29', '2018-05-11 14:38:29'),
(3, 'AdobePhotoshopExpress_7edd92ea964849f0933cadb124a0de27.jpg', '2018-05-11 14:38:56', '2018-05-11 14:38:56'),
(4, 'AdobePhotoshopExpress_7edd92ea964849f0933cadb124a0de27.jpg', '2018-05-11 14:40:11', '2018-05-11 14:40:11'),
(5, 'AdobePhotoshopExpress_7edd92ea964849f0933cadb124a0de27.jpg', '2018-05-11 14:42:44', '2018-05-11 14:42:44'),
(6, 'category_img_top.jpg', '2018-05-18 22:49:28', '2018-05-18 22:49:28'),
(7, 'cam_left3.jpg', '2018-05-18 23:03:56', '2018-05-18 23:03:56'),
(8, 'category_img_top1.jpg', '2018-05-18 23:05:34', '2018-05-18 23:05:34'),
(9, 'category_img6.jpg', '2018-05-18 23:06:43', '2018-05-18 23:06:43'),
(10, 'category_img9.jpg', '2018-05-18 23:08:57', '2018-05-18 23:08:57'),
(11, 'cat-mobi-sm4.jpg', '2018-05-19 00:09:10', '2018-05-19 00:09:10'),
(12, 'category_img9.jpg', '2018-05-19 00:09:56', '2018-05-19 00:09:56'),
(13, 'cat-mobi-sm3.jpg', '2018-05-19 00:11:20', '2018-05-19 00:11:20'),
(14, 'gad_top2.jpg', '2018-05-19 00:12:02', '2018-05-19 00:12:02'),
(15, 'cam_left1.jpg', '2018-05-19 00:12:54', '2018-05-19 00:12:54'),
(16, 'cam_left2.jpg', '2018-05-19 00:13:32', '2018-05-19 00:13:32'),
(17, 'design_top1.jpg', '2018-05-19 00:14:18', '2018-05-19 00:14:18'),
(18, 'design_top3.jpg', '2018-05-19 00:15:42', '2018-05-19 00:15:42'),
(19, 'design_top4.jpg', '2018-05-19 00:16:20', '2018-05-19 00:16:20'),
(20, 'design_top3.jpg', '2018-05-19 00:17:06', '2018-05-19 00:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `photo_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `photo_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 5, 'User Name', 'sdsd', '2018-05-11 14:42:44', '2018-05-11 14:42:44'),
(2, 9, 2, 6, 'Chevrolet car-saving technology delivers ''superhuman'' sight when you need it most', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.\r\n\r\nNor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?', '2018-05-18 22:49:28', '2018-05-18 22:49:28'),
(3, 9, 2, 7, 'Iphone 6 launches white & Grey colors handset', 'But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever', '2018-05-18 23:03:56', '2018-05-18 23:03:56'),
(4, 9, 2, 8, 'The Portable Charger or data cable', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?', '2018-05-18 23:05:34', '2018-05-18 23:05:34'),
(5, 9, 2, 9, 'Fully new look slim handset like', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.', '2018-05-18 23:06:43', '2018-05-18 23:06:43'),
(6, 9, 2, 10, 'Airbnb launches photo-centric app for iPads and Android tablets.', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', '2018-05-18 23:08:57', '2018-05-18 23:08:57'),
(7, 9, 3, 11, 'Sony launce a new Android tablets for new generation', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.', '2018-05-19 00:09:10', '2018-05-19 00:09:10'),
(8, 9, 3, 12, 'Technology market see the new Android tablets', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.', '2018-05-19 00:09:56', '2018-05-19 00:09:56'),
(9, 9, 4, 13, 'A good news for gadget users Ds tech comming soon', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after.', '2018-05-19 00:11:20', '2018-05-19 00:11:20'),
(10, 9, 4, 14, 'Apple launches photo-centric app for iPads and Android tablets', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', '2018-05-19 00:12:02', '2018-05-19 00:12:02'),
(11, 9, 5, 15, 'Yasaki camera launches new generic hi-speed', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate.', '2018-05-19 00:12:54', '2018-05-19 00:12:54'),
(12, 9, 5, 16, 'DSLR is the most old camera at this time', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate.', '2018-05-19 00:13:32', '2018-05-19 00:13:32'),
(13, 9, 6, 17, 'Marketing Tranportation Fast and', 'Collaboratively administrate empowered markets via plug-and-play networks.', '2018-05-19 00:14:18', '2018-05-19 00:14:18'),
(14, 9, 6, 18, 'Theme Hippo launches Unship', 'Collaboratively administrate empowered markets via plug-and-play networks.', '2018-05-19 00:15:42', '2018-05-19 00:15:42'),
(15, 9, 6, 19, 'Just another theme xdesign', 'Collaboratively administrate empowered markets via plug-and-play networks.', '2018-05-19 00:16:20', '2018-05-19 00:16:20'),
(16, 9, 6, 20, 'Huge Ultimate website builder', 'Collaboratively administrate empowered markets via plug-and-play networks.', '2018-05-19 00:17:06', '2018-05-19 00:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'adminstrator', NULL, NULL),
(2, 'author', NULL, NULL),
(3, 'subscriber', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_active`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `photo_id`) VALUES
(7, 2, 1, 'User3', 'mr_dody_n@yahoo.com', '$2y$10$pA7HQxumW/SyyW1vJz.8J.s48W.ZxM.zRvbVRnYawDVcdwVed.J6K', NULL, '2018-05-08 22:56:59', '2018-05-08 22:56:59', '1'),
(9, 1, 1, 'Admin', 'admin2@yahoo.com', '$2y$10$r79gKHf64pOYpTvCkWuCcOhC7y6Ajb5aMPYYJRw90aDzL.wqK.qpS', 'R1CIeX4a9K21jsHe3ELC4qevjwvSGFpHzRl1VOr0Cs8HKUhdOJ2wfwc9rPuX', '2018-05-10 20:32:41', '2018-05-10 20:32:41', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`), ADD KEY `comments_post_id_index` (`post_id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`), ADD KEY `comment_replies_comment_id_index` (`comment_id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`), ADD KEY `posts_user_id_index` (`user_id`), ADD KEY `posts_category_id_index` (`category_id`), ADD KEY `posts_photo_id_index` (`photo_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_replies`
--
ALTER TABLE `comment_replies`
ADD CONSTRAINT `comment_replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
