-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 08:53 AM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `fb_link` text DEFAULT NULL,
  `ig_link` text DEFAULT NULL,
  `linkedin_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `full_name`, `birthday`, `email`, `phone_number`, `website`, `age`, `degree`, `job`, `photo`, `address`, `description`, `description2`, `fb_link`, `ig_link`, `linkedin_link`, `created_at`, `updated_at`) VALUES
(1, 'Meidhika Nawa Sapta007', '2024-09-17', 'Test@gmail.com', '12345678', 'https://meidhikans.com', '17 Tahun', 'Licence', 'Freelancer', 'DdjRc6qxbR6qae7VBjgYyJyNXLTaPReIseT7pGqi.jpg', 'Yogyakarta', 'Welcome to my profile! I\'m a dedicated professional with a rich blend of academic achievements and hands-on experience.', 'I am Meidhika Nawa Sapta, FreshGraduate of Tafsir and Al-Quran Science from Al-Azhar University Cairo, Egypt in 2023. I am very interested in the digital world, especially web development and digital marketing. I am very enthusiastic and ready to continue learning new things, able to work individually or in a team.', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.linkedin.com', '2024-08-31 21:34:17', '2024-09-02 18:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_project` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_project`, `created_at`, `updated_at`) VALUES
(7, 'Website', '2024-08-31 22:04:45', '2024-08-31 22:04:45'),
(8, 'Mobile Apps', '2024-08-31 22:04:54', '2024-08-31 22:04:54'),
(9, 'Guide', '2024-08-31 22:05:01', '2024-08-31 22:05:01'),
(10, 'Digital Marketing', '2024-08-31 22:05:21', '2024-08-31 22:05:21'),
(11, 'Teacher', '2024-09-03 17:56:59', '2024-09-03 17:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Xaviera', 'xaviera@gmail.com', 'Will Your Marry Me?', 'Hey, Meidhika.\r\nI so Excited With You, Please Come to my home and tell my father that we will marry soon !!\r\nI\'m Seriously !!', '2024-08-31 22:26:28', '2024-08-31 22:26:28'),
(6, 'Elon Musk', 'elon@musk.com', 'Please Join With My Team', 'I heard that you have good potential, therefore I invite you to be my partner in my entire company.', '2024-08-31 22:29:03', '2024-08-31 22:29:03'),
(7, 'Bill Gates', 'bill@gates.com', 'I Will Give You Everything What I Have', 'Do You Need More Money? Don\'t Worry, I Will Give You Everything What I Have.\r\nJust Call Me and Direct Message To My Phone Number.', '2024-08-31 22:30:47', '2024-08-31 22:30:47'),
(8, 'Mark Zuckerberg', 'mark@zuck.com', 'Please Contact Me Soon', 'Hello, Meidhika. Please Contact Me Soon, I\'ll give you all the meta shares.', '2024-08-31 22:48:22', '2024-08-31 22:48:22'),
(16, 'Test', 'Test1@gmail.com', 'Test Subject', '<script>\r\nalert(\'test\');\r\n</script>', '2024-09-03 18:33:50', '2024-09-03 18:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `university` varchar(255) DEFAULT NULL,
  `register_year` date DEFAULT NULL,
  `graduate_year` date DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `university`, `register_year`, `graduate_year`, `faculty`, `activity`, `created_at`, `updated_at`) VALUES
(4, 'Al-Azhar Cairo University', '2018-12-06', '2023-10-10', 'Tafsir and Al-Quran Science', 'At Al-Azhar University Cairo, I actively participated in student activities and the Indonesian Student Association in Egypt, enhancing my leadership and organizational skills.', '2024-08-31 21:48:41', '2024-08-31 21:48:41'),
(5, 'Politeknik Negeri Jakarta', '2017-06-01', '2018-06-01', 'Information Technology', 'While studying at Politeknik Negeri Jakarta, I actively engaged in BEM activities, particularly with PNJ Mengajar 2018 in Lewuliang, where I contributed to educational outreach and community development.', '2024-08-31 21:50:37', '2024-08-31 21:50:37'),
(6, 'Darussalam Gontor Modern Islamic Boarding School', '2012-06-01', '2017-06-01', 'Islamic Teacher Training College', 'I spent my formative years as a santri at Pondok Modern Darussalam Gontor, where I deepened my knowledge and faith. Later, I had the privilege of teaching at Gontor Kendari, where I applied my learning and helped shape the next generation of students.', '2024-08-31 21:52:25', '2024-08-31 21:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL,
  `entery_year` date DEFAULT NULL,
  `out_year` date DEFAULT NULL,
  `job_desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `job`, `office`, `entery_year`, `out_year`, `job_desc`, `created_at`, `updated_at`) VALUES
(2, 'Staff Technology Officer', 'Investama Egypt', '2020-09-01', '2022-09-30', '\"I worked at Invetama.co as a Technology Officer, where I was responsible for developing websites based on Wordpress and creating mobile apps for the Play Store, blending technical expertise with innovative solutions to drive digital success.', '2024-08-31 21:55:14', '2024-08-31 21:55:14'),
(3, 'Umroh Pilgrim Guide', 'Umroh Pilgrim Guide at Makkah & Madinah', '2019-04-01', '2019-06-15', 'I previously worked as an Umrah guide, leading pilgrims through the rituals of Umrah and serving as a tour guide to historical sites in Makkah and Madinah, providing both spiritual guidance and enriching historical insights.', '2024-08-31 21:58:15', '2024-08-31 22:02:06'),
(4, 'Gontor Teacher', 'Gontor Riyadhatul Mujahidin Kendari, Sulawesi Tenggara', '2016-07-16', '2017-06-01', 'I have served as a dedicated teacher at Gontor 7 Kendari, where I contributed to the educational and personal growth of students, embodying a commitment to excellence and service in education.', '2024-08-31 22:01:07', '2024-08-31 22:01:07');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2024_08_29_034103_add_deleted_at_to_abouts_table', 2),
(6, '2024_08_29_043358_create_educations_table', 2),
(7, '2024_08_29_061844_create_experiences_table', 2),
(8, '2024_08_29_064634_create_skills_table', 2),
(9, '2024_08_29_075134_create_categories_table', 2),
(10, '2024_08_29_120339_create_projects_table', 3),
(12, '2024_08_29_140959_create_users_table', 4),
(14, '2024_08_31_074322_create_contacts_table', 5),
(15, '2024_08_28_133250_create_abouts_table', 6);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_photo` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `project_title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_photo`, `category_id`, `project_title`, `sub_title`, `created_at`, `updated_at`) VALUES
(12, 'vkddObK426bahx8vBfGb1GOCUDfYHYXEohRsc1bS.png', 7, 'Investama Website', 'Create A Great Website For Investama', '2024-08-31 22:06:59', '2024-08-31 22:06:59'),
(13, '87seysBp5cnk9OqYjSwCRI10lfUMViVyDM4afvpO.jpg', 7, 'Dombastis Website', 'Create A Marketplace For Dombastis', '2024-08-31 22:08:49', '2024-08-31 22:08:49'),
(14, '8NmqrbEUShTR9PUBsxPBKiujBkHJOYC26tnlPE4A.jpg', 8, 'Investama Mobile App', 'Create A Great Mobile App For Investama', '2024-08-31 22:09:37', '2024-08-31 22:09:37'),
(15, 'p07koUVgttGUqH9SlaVSTtrRUZ1gVDRniUIiRYM1.jpg', 9, 'Umroh Pilgrim Guide', 'Be A Guide Form Umroh Pilgrim at Makkah and Madinah', '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
(16, 'xjkOJnJomsRux6JvibeDRlQPH0gzCJ27SgCxBXQ2.jpg', 11, 'Gontor Teacher', 'Gontor  7 Kendari, Southeast Sulawesi', '2024-09-03 17:58:24', '2024-09-03 17:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('C147z32o268PcsLNY3AWtr7qEKbpMooHAD7Pyyxl', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZG9hMXllbXd3cTdldXpWT3ZQYUdISUJGV2ZtNFpBbkh6NkVsSDM0cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3J0Zm9saW9WaWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjU6ImFsZXJ0IjthOjA6e319', 1726552127),
('h66DNWKu99LP5pehSRPcxeKwAbfrY4FjM3yLKa1t', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRTdnYnFPSzROOERpMko0YlBKSUJ6NUt5ZE51T3pTdUNYelJERGhXdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3J0Zm9saW9WaWV3L2NvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NToiYWxlcnQiO2E6MDp7fX0=', 1725441933),
('wT1sGqVX5CkSzkq14Z7LtRi9PIkulExPrJX5QbZj', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibmdjNjRVVTcyWklMaVk4V1k1b2JpOFF5NWI1QnJLOUswRGxudUJNaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3J0Zm9saW9WaWV3L3Byb2plY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NToiYWxlcnQiO2E6MDp7fX0=', 1726543676),
('XRLaU2w9UnPgT2RyGmweOpeEQanZzYvENMaPN4xt', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNnFnNlZOS3doMXBYV0t4NTE4dlFXNE13aUgwWjBaNkhoY2QxbFR0ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjU6ImFsZXJ0IjthOjA6e319', 1725413633);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) NOT NULL,
  `percent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percent`, `created_at`, `updated_at`) VALUES
(10, 'Arabic Language', 95, '2024-08-31 22:02:46', '2024-08-31 22:02:46'),
(11, 'English', 85, '2024-08-31 22:02:57', '2024-08-31 22:02:57'),
(12, 'HTML & CSS', 80, '2024-08-31 22:03:15', '2024-08-31 22:03:15'),
(14, 'Javascript', 75, '2024-08-31 22:03:39', '2024-08-31 22:03:39'),
(15, 'Wordpress', 90, '2024-08-31 22:03:53', '2024-08-31 22:03:53'),
(16, 'PHP', 75, '2024-09-02 06:49:57', '2024-09-02 06:49:57'),
(17, 'HTML', 90, '2024-09-02 21:39:18', '2024-09-02 21:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone_number`, `birthday`, `gender`, `created_at`, `updated_at`) VALUES
(2, 'Meidhika Nawa Sapta', 'admin@gmail.com', '$2y$12$Ve.C/17o1wt3KY0QWMCmfO8NSglwRbqAX/Mb5IDpU1JD0sgQCZybS', '085712305959', '1997-05-30', 'Male', '2024-08-30 20:46:24', '2024-08-30 20:46:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abouts_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
