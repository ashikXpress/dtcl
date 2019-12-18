-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 10:29 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `image1`, `image2`, `image3`, `date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '695b285a-1f08-11ea-9bef-2047474f7ba0.jpg', '6f8f28b6-1f08-11ea-a959-2047474f7ba0.jpg', '75950852-1f08-11ea-81c1-2047474f7ba0.jpg', '2019-12-27 18:30:00', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '2019-12-15 14:32:05', '2019-12-18 03:22:46'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '70fb0b12-20ba-11ea-b981-2047474f7ba0.jpg', '71097abc-20ba-11ea-b151-2047474f7ba0.jpg', 'd9e07966-2081-11ea-ab23-2047474f7ba0.jpg', '2020-12-19 19:12:00', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2019-12-17 12:01:06', '2019-12-17 21:51:37'),
(6, 'Ashik', 'c5b23d36-2148-11ea-a76e-2047474f7ba0.jpg', 'c5b2e1b4-2148-11ea-a6d6-2047474f7ba0.jpg', 'c5b32c5a-2148-11ea-9ec8-2047474f7ba0.jpg', '2019-12-18 03:41:00', '<p>hello</p>', '2019-12-17 21:45:02', '2019-12-17 21:45:02'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'e7d3d35c-2148-11ea-93c8-2047474f7ba0.jpg', 'e7d4500c-2148-11ea-a117-2047474f7ba0.jpg', 'e7d49ba2-2148-11ea-b484-2047474f7ba0.jpg', '2019-12-18 03:45:00', '<p>hello....</p>', '2019-12-17 21:45:59', '2019-12-17 21:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Agence française de développement (AFD)', 'fef8de58-216e-11ea-9b3d-2047474f7ba0.png', '2019-12-15 18:23:39', '2019-12-18 02:18:50'),
(3, 'Government of Bangladesh', '1ecca28c-216f-11ea-9113-2047474f7ba0.jpg', '2019-12-17 23:38:49', '2019-12-18 02:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_items`
--

CREATE TABLE `gallery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_items`
--

INSERT INTO `gallery_items` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About', '59e59534-164a-11ea-8977-141877a6df51.jpg', '2019-12-03 21:58:38', '2019-12-03 21:58:38'),
(3, 'Project Image', '28d6a372-164d-11ea-a715-141877a6df51.jpg', '2019-12-03 22:18:44', '2019-12-03 22:18:44'),
(4, 'Staff', '7c32df70-164f-11ea-9a38-141877a6df51.jpg', '2019-12-03 22:35:23', '2019-12-03 22:35:23'),
(5, 'Personal', 'eb8e7d98-167c-11ea-beb6-141877a6df51.jpg', '2019-12-04 04:00:37', '2019-12-04 04:00:37'),
(6, 'Bag', 'f369b104-167c-11ea-8b1f-141877a6df51.jpg', '2019-12-04 04:00:50', '2019-12-04 04:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `type`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Ashik', 'Chief official Team', 'Manager', 'b8fd7588-1eff-11ea-afe6-2047474f7ba0.jpg', '2019-12-15 12:51:43', '2019-12-15 13:57:05'),
(4, 'Ashik khan', 'Executive Team', 'Manager', 'c27860e6-1eff-11ea-b7fc-2047474f7ba0.jpg', '2019-12-15 13:57:21', '2019-12-15 13:57:21'),
(5, 'khan', 'Office staff', 'Manager', '40172444-2160-11ea-bce2-2047474f7ba0.jpg', '2019-12-18 00:33:06', '2019-12-18 00:33:06'),
(6, 'Ashik', 'Board of Directors', 'Manager', '59e84b64-2160-11ea-ba6f-2047474f7ba0.jpg', '2019-12-18 00:33:49', '2019-12-18 00:33:49'),
(7, 'Ashik khan', 'Board of Directors', 'Manager', '3b970f5a-2170-11ea-880a-2047474f7ba0.jpg', '2019-12-18 02:27:30', '2019-12-18 03:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `sort`, `url`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, 1, NULL, NULL, '2019-12-04 04:49:25', '2019-12-04 04:49:25'),
(2, 'About Us', 'about-us', 2, 'page/about-us', NULL, '2019-12-04 04:50:23', '2019-12-04 00:45:13'),
(3, 'Sectors', 'sectors', 3, 'page/sectors', NULL, '2019-12-04 04:51:53', '2019-12-04 04:51:53'),
(4, 'Project', 'project', 4, 'page/project', '<p>hello....there !</p>', '2019-12-04 04:52:51', '2019-12-17 17:36:26'),
(7, 'Gallery', 'gallery', 5, 'gallery', NULL, '2019-12-04 04:56:33', '2019-12-04 04:56:33'),
(8, 'News', 'news', 8, 'news', NULL, '2019-12-04 04:57:12', '2019-12-04 04:57:12'),
(9, 'Contact Us', 'contact', 10, 'contact', NULL, '2019-12-04 04:58:13', '2019-12-04 04:58:13'),
(10, 'Personnel', 'personnel', 7, 'page/personnel', NULL, '2019-12-04 05:22:25', '2019-12-04 05:22:25'),
(11, 'Clients', 'clients', 6, 'clients', NULL, '2019-12-18 05:13:09', '2019-12-18 05:13:09'),
(12, 'Recent Activities', 'recent-activities', 9, 'recent-activities', NULL, '2019-12-18 05:22:23', '2019-12-18 05:22:23');

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
(3, '2019_11_26_113224_create_menus_table', 2),
(4, '2019_11_26_120336_create_sub_menus_table', 3),
(5, '2019_12_02_094351_create_projects_table', 4),
(6, '2019_12_03_045031_create_news_table', 5),
(7, '2019_12_03_092333_create_says_table', 6),
(8, '2019_12_03_104042_create_sliders_table', 7),
(9, '2019_12_04_033303_create_gallery_items_table', 8),
(10, '2019_12_04_043827_add_sort_column_in_menus_table', 9),
(11, '2019_12_04_044140_add_sort_column_in_sub_menus_table', 10),
(13, '2019_12_15_042141_create_members_table', 11),
(14, '2019_12_15_062109_create_activities_table', 12),
(15, '2019_12_15_100421_create_clients_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `author`, `filename`, `description`, `uploaded_at`, `created_at`, `updated_at`) VALUES
(1, 'Area of Data Entry Services from DTCL Corporate office', '047db1d0-1749-11ea-8f6a-141877a6df51.png', 'Admin', '047e4014-1749-11ea-be4b-141877a6df51.pdf', '<p>Our Data Entry Division offers most comprehensive range of high quality and low cost data entry services ideally suited to high volume data entry applications.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Online and Offline Data Entry</li>\r\n	<li>Image, Card and Book Entry</li>\r\n	<li>Hand Written Entry</li>\r\n	<li>Legal Document Entry</li>\r\n	<li>Insurance Claim Entry</li>\r\n	<li>Catalog Data Entry</li>\r\n	<li>Form processing and submission</li>\r\n	<li>Strategic Data Entry into software program and application</li>\r\n	<li>Typing Manuscript into MS Word</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We can manage all your data entry needs and can even advise you on how to keep costs low with 99.995% accuracy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We have successfully accomplished various data entry projects for its clients from different industry verticals, and c countries around the globe. Our experienced team of data entry professionals is dedicated to provide complete and accurate data entry and data conversion services to our worldwide customers at the lowest possible cost and turn-around-time.</p>', '2019-12-13', '2019-12-02 23:01:12', '2019-12-05 04:22:44'),
(3, 'Finance And Legal Working Streams Occur Throughout', 'b3b86da8-1590-11ea-858f-141877a6df51.jpg', 'Admin', 'b3b8dc84-1590-11ea-8700-141877a6df51.pdf', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>', '2019-12-20', '2019-12-02 23:49:42', '2019-12-02 23:49:42'),
(4, 'test', 'cce2abc2-2094-11ea-a632-2047474f7ba0.jpg', 'Ashik', 'cce3225a-2094-11ea-a389-2047474f7ba0.pdf', '<p>hello</p>', '2019-03-31', '2019-12-17 14:16:45', '2019-12-17 14:16:45');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `type`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ongoing', 'Branding & Illustration Design', 'c3656484-1efc-11ea-934e-2047474f7ba0.jpg', '<p><strong>Demo Project</strong></p>', '2019-12-02 03:54:29', '2019-12-15 13:35:54'),
(2, 'Shortlisted', 'Project 2', 'bf2be6b6-1585-11ea-a119-141877a6df51.jpg', '<p>sadf</p>', '2019-12-02 03:58:20', '2019-12-17 15:47:43'),
(4, 'Complete', 'Project 3', 'c657fa9c-1585-11ea-810e-141877a6df51.jpg', '<p>sdfaadsf&nbsp; <strong>sadf</strong></p>', '2019-12-02 04:44:51', '2019-12-02 22:32:08'),
(6, 'Complete', 'Project 4', '74af701e-1664-11ea-a043-141877a6df51.jpg', '<p>Project 4</p>', '2019-12-04 01:05:29', '2019-12-04 01:06:46'),
(7, 'Complete', 'test', 'ffe375e8-208e-11ea-8812-2047474f7ba0.jpg', '<p>hello.....</p>', '2019-12-17 13:35:13', '2019-12-17 13:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `says`
--

CREATE TABLE `says` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `says`
--

INSERT INTO `says` (`id`, `author`, `designation`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ken Bosh', 'Businesswoman', 'a2146e66-15af-11ea-89cb-141877a6df51.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2019-12-03 03:31:07', '2019-12-03 03:31:07'),
(3, 'Henry Dee', 'Businesswoman', '75cded0c-15b2-11ea-b8a4-141877a6df51.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '2019-12-03 03:51:21', '2019-12-03 03:51:21'),
(4, 'Mark', 'Facebook', 'f8d947ee-173f-11ea-b541-141877a6df51.jpg', 'Boss website', '2019-12-05 03:16:51', '2019-12-05 03:16:51'),
(5, 'Bill Gates', 'Microsoft', '0797805c-1740-11ea-a85c-141877a6df51.jpg', 'From microsoft\r\n\r\nyoo', '2019-12-05 03:17:16', '2019-12-05 03:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `sort`, `image`, `heading`, `subheading`, `created_at`, `updated_at`) VALUES
(1, 1, '7e3070d2-2089-11ea-9b63-2047474f7ba0.jpg', 'We Are The Best Consulting Agency', 'Welcome to Consolve', '2019-12-03 04:45:33', '2019-12-17 12:55:48'),
(3, 2, '890677a4-2089-11ea-b24c-2047474f7ba0.jpg', 'We Help to Grow Your Business', 'Todays Talent, Tommorow Success', '2019-12-03 05:04:12', '2019-12-17 12:56:06'),
(4, 3, '92d8c62e-2089-11ea-8991-2047474f7ba0.jpg', 'Heading', 'Subheading', '2019-12-03 22:19:39', '2019-12-17 12:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `menu_id`, `name`, `sort`, `slug`, `url`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 'Organogram', 1, 'organogram', 'page/organogram', NULL, '2019-12-04 05:01:01', '2019-12-04 05:01:01'),
(2, 2, 'Board of Directors', 2, 'board-of-directors', 'page/board-of-directors', NULL, '2019-12-04 05:01:34', '2019-12-04 05:01:34'),
(3, 3, 'Agricultural, Fisheries & Livestock', 1, 'agricultural-fisheries-livestock', 'page/agricultural-fisheries-livestock', NULL, '2019-12-04 05:06:48', '2019-12-04 05:06:48'),
(4, 3, 'Education & Training', 2, 'education-training', 'page/education-training', NULL, '2019-12-04 05:07:46', '2019-12-04 05:07:46'),
(5, 3, 'Social Development', 3, 'social-development', 'page/social-development', NULL, '2019-12-04 05:08:44', '2019-12-04 05:08:44'),
(6, 3, 'Forest & Environment', 4, 'forest-environment', 'page/forest-environment', NULL, '2019-12-04 05:09:39', '2019-12-04 05:09:39'),
(7, 3, 'Power & Energy', 5, 'power-energy', 'page/power-energy', NULL, '2019-12-04 05:10:54', '2019-12-04 05:10:54'),
(8, 3, 'Information & Communication Technology', 6, 'information-communication-technology', 'page/information-communication-technology', NULL, '2019-12-04 05:11:54', '2019-12-04 05:11:54'),
(9, 3, 'Infrastructure & Transport', 7, 'infrastructure-transport', 'page/infrastructure-transport', NULL, '2019-12-04 05:12:44', '2019-12-04 05:12:44'),
(10, 3, 'Infrastructure Development', 8, 'infrastructure-development', 'page/infrastructure-development', NULL, '2019-12-04 05:13:30', '2019-12-04 05:13:30'),
(11, 3, 'Water Resource, Water Supply & Sanitation', 9, 'water-resource-water-supply-sanitation', 'page/water-resource-water-supply-sanitation', NULL, '2019-12-04 05:14:52', '2019-12-04 05:14:52'),
(12, 3, 'Health and Population', 10, 'health-and-population', 'page/health-and-population', NULL, '2019-12-04 05:15:55', '2019-12-04 05:15:55'),
(13, 3, 'Economic & Financial Management', 11, 'economic-financial-management', 'page/economic-financial-management', NULL, '2019-12-04 05:16:52', '2019-12-04 05:16:52'),
(14, 4, 'Complete', 1, 'project-complete', 'project/complete', NULL, '2019-12-04 05:19:04', '2019-12-04 05:19:04'),
(15, 4, 'Ongoing', 2, 'project-ongoing', 'project/ongoing', NULL, '2019-12-04 05:19:43', '2019-12-04 05:19:43'),
(16, 4, 'Shortlisted', 3, 'project-shortlisted', 'project/shortlisted', NULL, '2019-12-04 05:20:22', '2019-12-04 05:20:22'),
(17, 10, 'Our Team', 1, 'our-team', 'our-team', NULL, '2019-12-04 05:27:03', '2019-12-04 05:27:03'),
(18, 10, 'Carrier Opportunities', 2, 'carrier-opportunities', 'page/carrier-opportunities', NULL, '2019-12-04 05:27:48', '2019-12-04 05:27:48'),
(29, 6, 'Infrastructure and Logistics', 5, 'infrastructure-and-logistics', 'page/infrastructure-and-logistics', NULL, '2019-12-04 05:45:25', '2019-12-04 05:45:25'),
(30, 10, 'Consulting Opportunities', 3, 'consulting-opportunities', 'page/consulting-opportunities', NULL, '2019-12-18 05:19:03', '2019-12-18 05:19:03');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2019-11-25 18:00:00', '$2y$12$.9bx8iz1l/DVmFNcJOlWcuOsoaVDlWzmC/krtJsB20pSR7td3FN0y', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_items`
--
ALTER TABLE `gallery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `says`
--
ALTER TABLE `says`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_items`
--
ALTER TABLE `gallery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `says`
--
ALTER TABLE `says`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
