-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 05:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Metadata` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `artist`, `image`, `Metadata`, `created_at`, `updated_at`) VALUES
(1, 'Raul Parisian', 'Mr. Hugh Powlowski Sr.', 'Cg5YnrIUYAIp5Ja.jpg', '{\r\n \"description\": \"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown \",\r\n \"Artist\": \"Legion of the Damned\",\r\n \"Album\": \"Slaves of the Shadow Realm\",\r\n \"Genre\": \"Progressive metalcore\",\r\n \"Label\": \"Napalm\"\r\n}', '2021-07-19 13:37:32', '2021-07-19 13:37:32'),
(2, 'Carey Grady', 'Prof. Marlin Stanton V', 'default.jpg', '{\r\n \"description\": \"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown \",\r\n \"Artist\": \"Legion of the Damned\",\r\n \"Album\": \"Slaves of the Shadow Realm\",\r\n \"Genre\": \"Progressive metalcore\",\r\n \"Label\": \"Napalm\"\r\n}', '2021-07-19 13:37:32', '2021-07-19 13:37:32'),
(3, 'Odessa Erdman', 'Dr. Anahi Heaney', 'default.jpg', '{\r\n \"description\": \"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown \",\r\n \"Artist\": \"Legion of the Damned\",\r\n \"Album\": \"Slaves of the Shadow Realm\",\r\n \"Genre\": \"Progressive metalcore\",\r\n \"Label\": \"Napalm\"\r\n}', '2021-07-19 13:37:33', '2021-07-19 13:37:33'),
(4, 'Prof. Narciso Lakin Jr.', 'Mr. Braxton Wiegand', 'default.jpg', '{\r\n \"description\": \"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown \",\r\n \"Artist\": \"Legion of the Damned\",\r\n \"Album\": \"Slaves of the Shadow Realm\",\r\n \"Genre\": \"Progressive metalcore\",\r\n \"Label\": \"Napalm\"\r\n}', '2021-07-19 13:37:33', '2021-07-19 13:37:33'),
(5, 'Rosa Morissette', 'Vincenzo Gutkowski', 'default.jpg', '{\r\n \"description\": \"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown \",\r\n \"Artist\": \"Legion of the Damned\",\r\n \"Album\": \"Slaves of the Shadow Realm\",\r\n \"Genre\": \"Progressive metalcore\",\r\n \"Label\": \"Napalm\"\r\n}', '2021-07-19 13:37:33', '2021-07-19 13:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `song_id` bigint(20) DEFAULT NULL,
  `album_id` bigint(20) DEFAULT NULL,
  `Comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `song_id`, `album_id`, `Comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, '2021-07-19 17:27:24', '2021-07-19 17:27:24'),
(2, 1, 2, NULL, NULL, '2021-07-19 17:36:17', '2021-07-19 17:36:17'),
(3, 1, NULL, 1, NULL, '2021-07-19 17:36:57', '2021-07-19 17:36:57'),
(4, 1, NULL, 1, 'hello', '2021-07-19 17:43:49', '2021-07-19 17:43:49'),
(5, 1, NULL, 1, 'nice song', '2021-07-19 18:09:17', '2021-07-19 18:09:17'),
(6, 1, 1, NULL, 'haha hdhdh hdhfhf jjf \r\nfsnfojd', '2021-07-19 19:01:36', '2021-07-19 19:01:36');

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
(4, '2021_07_19_180624_create_albums_table', 2),
(5, '2021_07_19_181203_create_songs_table', 3),
(6, '2021_07_19_201625_create_comments_table', 4);

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
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alubm_id` bigint(20) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `song_path` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Metadata` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `alubm_id`, `name`, `artist`, `song_path`, `image`, `Metadata`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mervin Mayer DDS', 'Simeon Ledner', 'audio.mp3', 'Cg5YnrIUYAIp5Ja.jpg', '{\r\n \"description\": \"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown \",\r\n \"Artist\": \"Legion of the Damned\",\r\n \"Album\": \"Slaves of the Shadow Realm\",\r\n \"Genre\": \"Progressive metalcore\",\r\n \"Label\": \"Napalm\"\r\n}', '2021-07-19 14:00:37', '2021-07-19 14:00:37'),
(2, 1, 'Jayson Buckridge', 'Louisa Heidenreich', 'audio.mp3', '1.jpg', '{\r\n \"description\": \"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown \",\r\n \"Artist\": \"Legion of the Damned\",\r\n \"Album\": \"Slaves of the Shadow Realm\",\r\n \"Genre\": \"Progressive metalcore\",\r\n \"Label\": \"Napalm\"\r\n}', '2021-07-19 14:00:37', '2021-07-19 14:00:37');

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
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'vishal', 'vishal@vishal.com', NULL, '$2y$10$GnmRqbGbnigS84COCTtsE.zxE75jwogXCiqmUUOJLdrJwk5DUPlzy', NULL, 'inactive', '2021-07-19 12:29:56', '2021-07-19 12:29:56'),
(2, 'Daphne Walton', 'qydep@yopmail.com', NULL, '$2y$10$NgzViZ9sm5CphDnBMUjkC.t8V3fofkv8V8G5tjvUYMRCCcmnS3zsG', NULL, 'inactive', '2021-07-19 12:30:57', '2021-07-19 12:30:57'),
(3, 'Marsden Francis', 'tefikuxe@yopmail.com', NULL, '$2y$10$QtprNjvhlSUBVrGAKijYJukmiHwFPqWnzsNljXG2pNuRxoCY2ypIe', NULL, 'inactive', '2021-07-19 12:31:40', '2021-07-19 12:31:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
