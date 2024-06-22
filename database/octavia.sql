-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 02:14 PM
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
-- Database: `octavia`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `post_id`, `user_id`, `name`, `slug`, `summary`, `content`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Moringa seed presarvation', 'moringa-seed-presarvation', NULL, '<p>pooeo[riperep</p>', '2024-06-16 13:29:59', '2024-06-16 13:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@mail.com|127.0.0.1', 'i:1;', 1717241617),
('admin@mail.com|127.0.0.1:timer', 'i:1717241617;', 1717241617);

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
-- Table structure for table `ltu_contributors`
--

CREATE TABLE `ltu_contributors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ltu_contributors`
--

INSERT INTO `ltu_contributors` (`id`, `name`, `email`, `password`, `avatar`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aman Simon', 'tairocruise@yahoo.com', '$2y$12$WunL6hVCEY5530naSwh6h.EELeZYd1fCCUK5xpPqUpNCVBO7OIP/y', NULL, 1, '3DHn4gVpiWNzmlMR3NqIAlPozcG7OLioyNvjMkX5ub3yqyKKePcmJYjMhfS0', '2024-06-09 10:28:53', '2024-06-09 10:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `ltu_invites`
--

CREATE TABLE `ltu_invites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(32) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ltu_invites`
--

INSERT INTO `ltu_invites` (`id`, `email`, `token`, `role`, `created_at`, `updated_at`) VALUES
(1, 't6cruise@gmail.com', 'Qnan8u9XpQ42HfneP79aGFpm9XOU8nTx', 2, '2024-06-10 11:57:52', '2024-06-10 11:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `ltu_languages`
--

CREATE TABLE `ltu_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ltu_languages`
--

INSERT INTO `ltu_languages` (`id`, `name`, `code`, `rtl`) VALUES
(1, 'Afrikaans', 'af', 0),
(2, 'Albanian', 'sq', 0),
(3, 'Amharic', 'am', 0),
(4, 'Arabic', 'ar', 1),
(5, 'Armenian', 'hy', 0),
(6, 'Assamese', 'as', 0),
(7, 'Aymara', 'ay', 0),
(8, 'Azerbaijani', 'az', 0),
(9, 'Bambara', 'bm', 0),
(10, 'Basque', 'eu', 0),
(11, 'Belarusian', 'be', 0),
(12, 'Bengali', 'bn', 0),
(13, 'Bhojpuri', 'bho', 0),
(14, 'Bosnian', 'bs', 0),
(15, 'Bulgarian', 'bg', 0),
(16, 'Catalan', 'ca', 0),
(17, 'Cebuano', 'ceb', 0),
(18, 'Chinese', 'zh', 0),
(19, 'Chinese (Traditional)', 'zh-TW', 0),
(20, 'Corsican', 'co', 0),
(21, 'Croatian', 'hr', 0),
(22, 'Czech', 'cs', 0),
(23, 'Danish', 'da', 0),
(24, 'Divehi', 'dv', 0),
(25, 'Dutch', 'nl', 0),
(26, 'English', 'en', 0),
(27, 'Estonian', 'et', 0),
(28, 'Filipino', 'fil', 0),
(29, 'Finnish', 'fi', 0),
(30, 'French', 'fr', 0),
(31, 'Galician', 'gl', 0),
(32, 'Georgian', 'ka', 0),
(33, 'German', 'de', 0),
(34, 'Greek', 'el', 0),
(35, 'Guarani', 'gn', 0),
(36, 'Gujarati', 'gu', 0),
(37, 'Haitian Creole', 'ht', 0),
(38, 'Hausa', 'ha', 0),
(39, 'Hawaiian', 'haw', 0),
(40, 'Hebrew', 'he', 1),
(41, 'Hindi', 'hi', 0),
(42, 'Hungarian', 'hu', 0),
(43, 'Icelandic', 'is', 0),
(44, 'Igbo', 'ig', 0),
(45, 'Indonesian', 'id', 0),
(46, 'Irish', 'ga', 0),
(47, 'Italian', 'it', 0),
(48, 'Japanese', 'ja', 0),
(49, 'Javanese', 'jv', 0),
(50, 'Kannada', 'kn', 0),
(51, 'Kazakh', 'kk', 0),
(52, 'Khmer', 'km', 0),
(53, 'Kinyarwanda', 'rw', 0),
(54, 'Korean', 'ko', 0),
(55, 'Kurdish', 'ku', 0),
(56, 'Kyrgyz', 'ky', 0),
(57, 'Lao', 'lo', 0),
(58, 'Latin', 'la', 0),
(59, 'Latvian', 'lv', 0),
(60, 'Lingala', 'ln', 0),
(61, 'Lithuanian', 'lt', 0),
(62, 'Macedonian', 'mk', 0),
(63, 'Malay', 'ms', 0),
(64, 'Malayalam', 'ml', 0),
(65, 'Maltese', 'mt', 0),
(66, 'Maori', 'mi', 0),
(67, 'Marathi', 'mr', 0),
(68, 'Mongolian', 'mn', 0),
(69, 'Nepali', 'ne', 0),
(70, 'Norwegian', 'no', 0),
(71, 'Pashto', 'ps', 1),
(72, 'Persian', 'fa', 1),
(73, 'Polish', 'pl', 0),
(74, 'Portuguese', 'pt', 0),
(75, 'Portuguese (Brazil)', 'pt-br', 0),
(76, 'Punjabi', 'pa', 0),
(77, 'Romanian', 'ro', 0),
(78, 'Russian', 'ru', 0),
(79, 'Samoan', 'sm', 0),
(80, 'Serbian', 'sr', 0),
(81, 'Sesotho', 'st', 0),
(82, 'Shona', 'sn', 0),
(83, 'Sindhi', 'sd', 0),
(84, 'Sinhala', 'si', 0),
(85, 'Slovak', 'sk', 0),
(86, 'Slovenian', 'sl', 0),
(87, 'Somali', 'so', 0),
(88, 'Spanish', 'es', 0),
(89, 'Sundanese', 'su', 0),
(90, 'Swahili', 'sw', 0),
(91, 'Swedish', 'sv', 0),
(92, 'Tajik', 'tg', 0),
(93, 'Tamil', 'ta', 0),
(94, 'Telugu', 'te', 0),
(95, 'Thai', 'th', 0),
(96, 'Turkish', 'tr', 0),
(97, 'Turkmen', 'tk', 0),
(98, 'Ukrainian', 'uk', 0),
(99, 'Urdu', 'ur', 0),
(100, 'Uzbek', 'uz', 0),
(101, 'Vietnamese', 'vi', 0),
(102, 'Welsh', 'cy', 0),
(103, 'Xhosa', 'xh', 0),
(104, 'Yiddish', 'yi', 0),
(105, 'Yoruba', 'yo', 0),
(106, 'Zulu', 'zu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ltu_phrases`
--

CREATE TABLE `ltu_phrases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `translation_id` bigint(20) UNSIGNED NOT NULL,
  `translation_file_id` bigint(20) UNSIGNED NOT NULL,
  `phrase_id` bigint(20) UNSIGNED DEFAULT NULL,
  `key` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `parameters` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`parameters`)),
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ltu_phrases`
--

INSERT INTO `ltu_phrases` (`id`, `uuid`, `translation_id`, `translation_file_id`, `phrase_id`, `key`, `group`, `value`, `status`, `parameters`, `note`, `created_at`, `updated_at`) VALUES
(1, '9c3ee5fe-f065-4a87-9b37-1bbb8565cd75', 1, 1, NULL, 'failed', 'auth', 'These credentials do not match our records.', 'active', NULL, NULL, '2024-06-09 10:26:45', '2024-06-09 10:26:45'),
(2, '9c3ee5fe-f969-46aa-9a2f-d889a5dce0ca', 1, 1, NULL, 'password', 'auth', 'The provided password is incorrect.', 'active', NULL, NULL, '2024-06-09 10:26:45', '2024-06-09 10:26:45'),
(3, '9c3ee5fe-fc89-4503-8059-ddae2e6a1d47', 1, 1, NULL, 'throttle', 'auth', 'Too many login attempts. Please try again in :seconds seconds.', 'active', '[\"seconds\"]', NULL, '2024-06-09 10:26:45', '2024-06-09 10:26:45'),
(4, '9c3ee5ff-0410-47f4-9b3b-379c82116213', 1, 2, NULL, 'previous', 'pagination', '&laquo; Previous', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(5, '9c3ee5ff-06db-49f7-8123-08059d415c68', 1, 2, NULL, 'next', 'pagination', 'Next &raquo;', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(6, '9c3ee5ff-0af5-4a16-a391-7aea900f493a', 1, 3, NULL, 'reset', 'passwords', 'Your password has been reset.', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(7, '9c3ee5ff-1125-49ca-96c0-a1035729cb89', 1, 3, NULL, 'sent', 'passwords', 'We have emailed your password reset link.', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(8, '9c3ee5ff-1422-4081-9dac-a57b6d59c3de', 1, 3, NULL, 'throttled', 'passwords', 'Please wait before retrying.', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(9, '9c3ee5ff-161c-41ab-9070-70ef2842475d', 1, 3, NULL, 'token', 'passwords', 'This password reset token is invalid.', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(10, '9c3ee5ff-186b-4c25-9406-bf8f9a41806b', 1, 3, NULL, 'user', 'passwords', 'We can\'t find a user with that email address.', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(11, '9c3ee5ff-1b9f-4dcb-8ac1-11e90263e34a', 1, 4, NULL, 'accepted', 'validation', 'The :attribute field must be accepted.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(12, '9c3ee5ff-1dd0-4bf1-b1c8-667b6e425e11', 1, 4, NULL, 'accepted_if', 'validation', 'The :attribute field must be accepted when :other is :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(13, '9c3ee5ff-1fcd-4921-8c64-9c92e4da91f6', 1, 4, NULL, 'active_url', 'validation', 'The :attribute field must be a valid URL.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(14, '9c3ee5ff-21f5-4ad0-97b7-554c6eaaffab', 1, 4, NULL, 'after', 'validation', 'The :attribute field must be a date after :date.', 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(15, '9c3ee5ff-2424-40ed-ba9e-ddf745e09d14', 1, 4, NULL, 'after_or_equal', 'validation', 'The :attribute field must be a date after or equal to :date.', 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(16, '9c3ee5ff-2655-4657-abdf-74e3e9f67a7a', 1, 4, NULL, 'alpha', 'validation', 'The :attribute field must only contain letters.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(17, '9c3ee5ff-2866-4e26-bb96-f6de31506981', 1, 4, NULL, 'alpha_dash', 'validation', 'The :attribute field must only contain letters, numbers, dashes, and underscores.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(18, '9c3ee5ff-2a8e-4e44-9113-88d1e549802a', 1, 4, NULL, 'alpha_num', 'validation', 'The :attribute field must only contain letters and numbers.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(19, '9c3ee5ff-2cad-4777-8171-768a0ccad2df', 1, 4, NULL, 'array', 'validation', 'The :attribute field must be an array.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(20, '9c3ee5ff-2eb7-4f91-b848-627200d40773', 1, 4, NULL, 'ascii', 'validation', 'The :attribute field must only contain single-byte alphanumeric characters and symbols.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(21, '9c3ee5ff-30eb-417f-937f-a804faba43f6', 1, 4, NULL, 'before', 'validation', 'The :attribute field must be a date before :date.', 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(22, '9c3ee5ff-32f7-4768-9e26-eeefe5459203', 1, 4, NULL, 'before_or_equal', 'validation', 'The :attribute field must be a date before or equal to :date.', 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(23, '9c3ee5ff-34eb-4c7b-86a7-28c09462bd6b', 1, 4, NULL, 'between.array', 'validation', 'The :attribute field must have between :min and :max items.', 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(24, '9c3ee5ff-36ff-4be1-afa6-145f73746437', 1, 4, NULL, 'between.file', 'validation', 'The :attribute field must be between :min and :max kilobytes.', 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(25, '9c3ee5ff-3925-440b-9140-3519728606f5', 1, 4, NULL, 'between.numeric', 'validation', 'The :attribute field must be between :min and :max.', 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(26, '9c3ee5ff-3b1a-4fcc-bcfb-4fed24a8a523', 1, 4, NULL, 'between.string', 'validation', 'The :attribute field must be between :min and :max characters.', 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(27, '9c3ee5ff-3d38-4147-a99c-add5940e5675', 1, 4, NULL, 'boolean', 'validation', 'The :attribute field must be true or false.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(28, '9c3ee5ff-3f3f-45d8-8bd2-ceee5e909ed0', 1, 4, NULL, 'can', 'validation', 'The :attribute field contains an unauthorized value.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(29, '9c3ee5ff-4165-4b8a-93de-e0c9425a2095', 1, 4, NULL, 'confirmed', 'validation', 'The :attribute field confirmation does not match.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(30, '9c3ee5ff-4398-4dcf-8c90-af9b64e8195e', 1, 4, NULL, 'current_password', 'validation', 'The password is incorrect.', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(31, '9c3ee5ff-45a8-47d1-a894-400c3cd36dc9', 1, 4, NULL, 'date', 'validation', 'The :attribute field must be a valid date.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(32, '9c3ee5ff-47ac-440f-8a5d-f470fa8e4da6', 1, 4, NULL, 'date_equals', 'validation', 'The :attribute field must be a date equal to :date.', 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(33, '9c3ee5ff-4a37-400d-8f47-093002f7c3d2', 1, 4, NULL, 'date_format', 'validation', 'The :attribute field must match the format :format.', 'active', '[\"attribute\",\"format\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(34, '9c3ee5ff-4c94-4755-b943-3f6c224c135f', 1, 4, NULL, 'decimal', 'validation', 'The :attribute field must have :decimal decimal places.', 'active', '[\"attribute\",\"decimal\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(35, '9c3ee5ff-4f16-41f4-b9e5-7b6b279bb0fd', 1, 4, NULL, 'declined', 'validation', 'The :attribute field must be declined.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(36, '9c3ee5ff-518c-4f9b-9990-cdc7478fbabe', 1, 4, NULL, 'declined_if', 'validation', 'The :attribute field must be declined when :other is :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(37, '9c3ee5ff-5430-4c70-925a-1382a8b907d7', 1, 4, NULL, 'different', 'validation', 'The :attribute field and :other must be different.', 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(38, '9c3ee5ff-56db-4677-a362-e71e5c5bc3cc', 1, 4, NULL, 'digits', 'validation', 'The :attribute field must be :digits digits.', 'active', '[\"attribute\",\"digits\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(39, '9c3ee5ff-5a37-4112-9e45-e2dc3479c444', 1, 4, NULL, 'digits_between', 'validation', 'The :attribute field must be between :min and :max digits.', 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(40, '9c3ee5ff-5dd3-4110-aad2-e7a949322687', 1, 4, NULL, 'dimensions', 'validation', 'The :attribute field has invalid image dimensions.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(41, '9c3ee5ff-60cc-4137-b558-f1673fb38b23', 1, 4, NULL, 'distinct', 'validation', 'The :attribute field has a duplicate value.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(42, '9c3ee5ff-638d-4a10-ba16-9a3c46524bcf', 1, 4, NULL, 'doesnt_end_with', 'validation', 'The :attribute field must not end with one of the following: :values.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(43, '9c3ee5ff-6628-42ac-8d6b-b08bc1c79f65', 1, 4, NULL, 'doesnt_start_with', 'validation', 'The :attribute field must not start with one of the following: :values.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(44, '9c3ee5ff-68e1-4c4f-9ce8-8c5d8a052e40', 1, 4, NULL, 'email', 'validation', 'The :attribute field must be a valid email address.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(45, '9c3ee5ff-6b8e-45d8-a337-92c76747f356', 1, 4, NULL, 'ends_with', 'validation', 'The :attribute field must end with one of the following: :values.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(46, '9c3ee5ff-6e1d-46da-9f65-c32b7a890171', 1, 4, NULL, 'enum', 'validation', 'The selected :attribute is invalid.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(47, '9c3ee5ff-7117-41cf-ab24-08b56ffa96f8', 1, 4, NULL, 'exists', 'validation', 'The selected :attribute is invalid.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(48, '9c3ee5ff-73ed-4ae5-aa65-bb3c1096084e', 1, 4, NULL, 'extensions', 'validation', 'The :attribute field must have one of the following extensions: :values.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(49, '9c3ee5ff-7673-4c60-8505-73b2e034c541', 1, 4, NULL, 'file', 'validation', 'The :attribute field must be a file.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(50, '9c3ee5ff-78f6-4428-a894-2e93db482c3b', 1, 4, NULL, 'filled', 'validation', 'The :attribute field must have a value.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(51, '9c3ee5ff-7b82-4fb4-b730-9dc55146be60', 1, 4, NULL, 'gt.array', 'validation', 'The :attribute field must have more than :value items.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(52, '9c3ee5ff-7db3-4c5c-bbee-49c55784780f', 1, 4, NULL, 'gt.file', 'validation', 'The :attribute field must be greater than :value kilobytes.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(53, '9c3ee5ff-8004-42f2-af49-d77ecf76d9ae', 1, 4, NULL, 'gt.numeric', 'validation', 'The :attribute field must be greater than :value.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(54, '9c3ee5ff-821d-46b9-ad4a-c16332d90f8d', 1, 4, NULL, 'gt.string', 'validation', 'The :attribute field must be greater than :value characters.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(55, '9c3ee5ff-8457-481a-9db0-d5070b63e2ba', 1, 4, NULL, 'gte.array', 'validation', 'The :attribute field must have :value items or more.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(56, '9c3ee5ff-866f-42c9-9650-825100d0226d', 1, 4, NULL, 'gte.file', 'validation', 'The :attribute field must be greater than or equal to :value kilobytes.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(57, '9c3ee5ff-8894-4488-b585-ef59930c15f0', 1, 4, NULL, 'gte.numeric', 'validation', 'The :attribute field must be greater than or equal to :value.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(58, '9c3ee5ff-8aca-41c6-b153-b8a14b4c46b5', 1, 4, NULL, 'gte.string', 'validation', 'The :attribute field must be greater than or equal to :value characters.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(59, '9c3ee5ff-8cdd-4c02-85ff-5dc837a1ae4b', 1, 4, NULL, 'hex_color', 'validation', 'The :attribute field must be a valid hexadecimal color.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(60, '9c3ee5ff-8f01-4e72-8c70-25db6fb1dde4', 1, 4, NULL, 'image', 'validation', 'The :attribute field must be an image.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(61, '9c3ee5ff-9152-4ffa-a50b-87fb299973f0', 1, 4, NULL, 'in', 'validation', 'The selected :attribute is invalid.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(62, '9c3ee5ff-9380-462c-a0aa-be51f617afd8', 1, 4, NULL, 'in_array', 'validation', 'The :attribute field must exist in :other.', 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(63, '9c3ee5ff-95b2-4e2b-9748-1768fe65ee48', 1, 4, NULL, 'integer', 'validation', 'The :attribute field must be an integer.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(64, '9c3ee5ff-97d3-4c84-a26b-5af41a2f44ca', 1, 4, NULL, 'ip', 'validation', 'The :attribute field must be a valid IP address.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(65, '9c3ee5ff-99f8-45d4-9177-f10025005e50', 1, 4, NULL, 'ipv4', 'validation', 'The :attribute field must be a valid IPv4 address.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(66, '9c3ee5ff-9bfe-4e2d-98e9-606bfb6530ed', 1, 4, NULL, 'ipv6', 'validation', 'The :attribute field must be a valid IPv6 address.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(67, '9c3ee5ff-9e17-4ece-b62b-cbe04ecd9133', 1, 4, NULL, 'json', 'validation', 'The :attribute field must be a valid JSON string.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(68, '9c3ee5ff-a060-4852-8cc5-3bded992cae4', 1, 4, NULL, 'lowercase', 'validation', 'The :attribute field must be lowercase.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(69, '9c3ee5ff-a2cf-424d-a149-b4d5c8e65593', 1, 4, NULL, 'lt.array', 'validation', 'The :attribute field must have less than :value items.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(70, '9c3ee5ff-a541-4df8-b883-896a22836b3e', 1, 4, NULL, 'lt.file', 'validation', 'The :attribute field must be less than :value kilobytes.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(71, '9c3ee5ff-a7c5-4e69-b69d-16be97641f8d', 1, 4, NULL, 'lt.numeric', 'validation', 'The :attribute field must be less than :value.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(72, '9c3ee5ff-aa54-422b-8d94-b33750fcf67c', 1, 4, NULL, 'lt.string', 'validation', 'The :attribute field must be less than :value characters.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(73, '9c3ee5ff-acc5-40e1-9e61-0cf048436beb', 1, 4, NULL, 'lte.array', 'validation', 'The :attribute field must not have more than :value items.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(74, '9c3ee5ff-afdd-42e9-aa0d-add8b9c9d26a', 1, 4, NULL, 'lte.file', 'validation', 'The :attribute field must be less than or equal to :value kilobytes.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(75, '9c3ee5ff-b363-4186-8b70-e387a7baa47e', 1, 4, NULL, 'lte.numeric', 'validation', 'The :attribute field must be less than or equal to :value.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(76, '9c3ee5ff-b62a-43d2-9efc-dd753d9340d5', 1, 4, NULL, 'lte.string', 'validation', 'The :attribute field must be less than or equal to :value characters.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(77, '9c3ee5ff-b942-4676-b94b-3a55c1b62993', 1, 4, NULL, 'mac_address', 'validation', 'The :attribute field must be a valid MAC address.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(78, '9c3ee5ff-bc32-421d-82fb-5838ed009cd4', 1, 4, NULL, 'max.array', 'validation', 'The :attribute field must not have more than :max items.', 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(79, '9c3ee5ff-bf03-43fa-8e57-0ba2c9f51572', 1, 4, NULL, 'max.file', 'validation', 'The :attribute field must not be greater than :max kilobytes.', 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(80, '9c3ee5ff-c185-48c3-8e24-d20f5e73becf', 1, 4, NULL, 'max.numeric', 'validation', 'The :attribute field must not be greater than :max.', 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(81, '9c3ee5ff-c41a-435c-b303-937017dfecb0', 1, 4, NULL, 'max.string', 'validation', 'The :attribute field must not be greater than :max characters.', 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(82, '9c3ee5ff-c713-4438-b43e-084c072870b2', 1, 4, NULL, 'max_digits', 'validation', 'The :attribute field must not have more than :max digits.', 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(83, '9c3ee5ff-c9dd-4385-87e8-19fb646f38a0', 1, 4, NULL, 'mimes', 'validation', 'The :attribute field must be a file of type: :values.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(84, '9c3ee5ff-ce91-436d-bb07-9f6b8f089366', 1, 4, NULL, 'mimetypes', 'validation', 'The :attribute field must be a file of type: :values.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(85, '9c3ee5ff-d133-42d0-b1ef-0473cfed7ad3', 1, 4, NULL, 'min.array', 'validation', 'The :attribute field must have at least :min items.', 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(86, '9c3ee5ff-d41d-4015-9376-d612ef5c5d67', 1, 4, NULL, 'min.file', 'validation', 'The :attribute field must be at least :min kilobytes.', 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(87, '9c3ee5ff-d693-487a-9678-1e524b05e05d', 1, 4, NULL, 'min.numeric', 'validation', 'The :attribute field must be at least :min.', 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(88, '9c3ee5ff-d99d-4635-8000-e7a8e3fd7c8f', 1, 4, NULL, 'min.string', 'validation', 'The :attribute field must be at least :min characters.', 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(89, '9c3ee5ff-dc0f-4a05-9168-2e848bd3ebc9', 1, 4, NULL, 'min_digits', 'validation', 'The :attribute field must have at least :min digits.', 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(90, '9c3ee5ff-dec4-48af-8165-7aae53170a0f', 1, 4, NULL, 'missing', 'validation', 'The :attribute field must be missing.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(91, '9c3ee5ff-e197-4ac1-9643-255eaf9f5df6', 1, 4, NULL, 'missing_if', 'validation', 'The :attribute field must be missing when :other is :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(92, '9c3ee5ff-e4a1-481a-a8fd-624ef4988c8f', 1, 4, NULL, 'missing_unless', 'validation', 'The :attribute field must be missing unless :other is :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(93, '9c3ee5ff-e7c6-4ebc-a319-d95a6a386787', 1, 4, NULL, 'missing_with', 'validation', 'The :attribute field must be missing when :values is present.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(94, '9c3ee5ff-ea57-46a3-bd1b-81e1dcb19f16', 1, 4, NULL, 'missing_with_all', 'validation', 'The :attribute field must be missing when :values are present.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(95, '9c3ee5ff-ed64-4014-9bc6-130a51f507d0', 1, 4, NULL, 'multiple_of', 'validation', 'The :attribute field must be a multiple of :value.', 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(96, '9c3ee5ff-f04a-4273-bb61-b6b23f259c37', 1, 4, NULL, 'not_in', 'validation', 'The selected :attribute is invalid.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(97, '9c3ee5ff-f36c-4fd4-ac4d-92f245c00f58', 1, 4, NULL, 'not_regex', 'validation', 'The :attribute field format is invalid.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(98, '9c3ee5ff-f6ce-4f01-a00d-2e4b076dd6ac', 1, 4, NULL, 'numeric', 'validation', 'The :attribute field must be a number.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(99, '9c3ee5ff-f97f-4bc9-9386-a7d3e6cf7fb6', 1, 4, NULL, 'password.letters', 'validation', 'The :attribute field must contain at least one letter.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(100, '9c3ee5ff-fc0a-4b89-86a7-f421929b1f1c', 1, 4, NULL, 'password.mixed', 'validation', 'The :attribute field must contain at least one uppercase and one lowercase letter.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(101, '9c3ee5ff-febf-4af0-b76f-20359398c516', 1, 4, NULL, 'password.numbers', 'validation', 'The :attribute field must contain at least one number.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(102, '9c3ee600-00f7-4b49-9062-209d06eeba6f', 1, 4, NULL, 'password.symbols', 'validation', 'The :attribute field must contain at least one symbol.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(103, '9c3ee600-0350-4379-aceb-aedd89846d21', 1, 4, NULL, 'password.uncompromised', 'validation', 'The given :attribute has appeared in a data leak. Please choose a different :attribute.', 'active', '[\"attribute\",\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(104, '9c3ee600-0597-46b1-81b8-69e2817368a2', 1, 4, NULL, 'present', 'validation', 'The :attribute field must be present.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(105, '9c3ee600-0812-4515-b76a-619d8a5976b6', 1, 4, NULL, 'present_if', 'validation', 'The :attribute field must be present when :other is :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(106, '9c3ee600-0a80-4393-bb6b-afad59ce7f2c', 1, 4, NULL, 'present_unless', 'validation', 'The :attribute field must be present unless :other is :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(107, '9c3ee600-0d18-4d0f-a211-0682099f30fb', 1, 4, NULL, 'present_with', 'validation', 'The :attribute field must be present when :values is present.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(108, '9c3ee600-0f82-4bad-846f-516a5b4b37fc', 1, 4, NULL, 'present_with_all', 'validation', 'The :attribute field must be present when :values are present.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(109, '9c3ee600-1194-4b68-8598-189d53261a23', 1, 4, NULL, 'prohibited', 'validation', 'The :attribute field is prohibited.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(110, '9c3ee600-13df-4d8f-9d51-ee4475f46e04', 1, 4, NULL, 'prohibited_if', 'validation', 'The :attribute field is prohibited when :other is :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(111, '9c3ee600-1626-4c96-af61-591dc5e8f783', 1, 4, NULL, 'prohibited_unless', 'validation', 'The :attribute field is prohibited unless :other is in :values.', 'active', '[\"attribute\",\"other\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(112, '9c3ee600-183d-4bee-88f5-70c87a201457', 1, 4, NULL, 'prohibits', 'validation', 'The :attribute field prohibits :other from being present.', 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(113, '9c3ee600-1a5c-4e6c-a3f7-f22ea9f2fd47', 1, 4, NULL, 'regex', 'validation', 'The :attribute field format is invalid.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(114, '9c3ee600-1cb8-4c05-aa9d-4d9725b478a9', 1, 4, NULL, 'required', 'validation', 'The :attribute field is required.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(115, '9c3ee600-1ed0-40d5-839f-c77a82681dc6', 1, 4, NULL, 'required_array_keys', 'validation', 'The :attribute field must contain entries for: :values.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(116, '9c3ee600-20f6-4b93-9076-2efa70e9e454', 1, 4, NULL, 'required_if', 'validation', 'The :attribute field is required when :other is :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(117, '9c3ee600-2383-4a20-924d-c21804e9b891', 1, 4, NULL, 'required_if_accepted', 'validation', 'The :attribute field is required when :other is accepted.', 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(118, '9c3ee600-260c-4a49-b5fc-74e8ae0a184e', 1, 4, NULL, 'required_unless', 'validation', 'The :attribute field is required unless :other is in :values.', 'active', '[\"attribute\",\"other\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(119, '9c3ee600-28bb-4d9a-bb22-6ddd886af675', 1, 4, NULL, 'required_with', 'validation', 'The :attribute field is required when :values is present.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(120, '9c3ee600-2b43-462f-8d12-f48a9bb8c72e', 1, 4, NULL, 'required_with_all', 'validation', 'The :attribute field is required when :values are present.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(121, '9c3ee600-2dcc-4b37-a81d-937d8f690b3f', 1, 4, NULL, 'required_without', 'validation', 'The :attribute field is required when :values is not present.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(122, '9c3ee600-311c-4f71-9282-d47f8d123c82', 1, 4, NULL, 'required_without_all', 'validation', 'The :attribute field is required when none of :values are present.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(123, '9c3ee600-33e4-4983-aae9-846db7b2bee4', 1, 4, NULL, 'same', 'validation', 'The :attribute field must match :other.', 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(124, '9c3ee600-368b-4e68-9ee1-3f8706fbbe46', 1, 4, NULL, 'size.array', 'validation', 'The :attribute field must contain :size items.', 'active', '[\"attribute\",\"size\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(125, '9c3ee600-3918-4083-8e5e-0b579505b2fa', 1, 4, NULL, 'size.file', 'validation', 'The :attribute field must be :size kilobytes.', 'active', '[\"attribute\",\"size\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(126, '9c3ee600-3c0d-40de-a1a5-d00fc091b63c', 1, 4, NULL, 'size.numeric', 'validation', 'The :attribute field must be :size.', 'active', '[\"attribute\",\"size\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(127, '9c3ee600-3eb3-4e63-9dfe-e4baf8bbd26d', 1, 4, NULL, 'size.string', 'validation', 'The :attribute field must be :size characters.', 'active', '[\"attribute\",\"size\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(128, '9c3ee600-4168-476a-ae61-aa1d7836ecc5', 1, 4, NULL, 'starts_with', 'validation', 'The :attribute field must start with one of the following: :values.', 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(129, '9c3ee600-43b5-4154-ae82-84488ace2f03', 1, 4, NULL, 'string', 'validation', 'The :attribute field must be a string.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(130, '9c3ee600-45cd-4494-bf3a-d9767a63813b', 1, 4, NULL, 'timezone', 'validation', 'The :attribute field must be a valid timezone.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(131, '9c3ee600-480d-48f7-a4f6-5b24ee224294', 1, 4, NULL, 'unique', 'validation', 'The :attribute has already been taken.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(132, '9c3ee600-4a1c-47e8-8c18-d9f9fcf4541e', 1, 4, NULL, 'uploaded', 'validation', 'The :attribute failed to upload.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(133, '9c3ee600-4c6f-4d60-845e-4f775e0d1d14', 1, 4, NULL, 'uppercase', 'validation', 'The :attribute field must be uppercase.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(134, '9c3ee600-4f53-420a-9ac3-a6bedae79086', 1, 4, NULL, 'url', 'validation', 'The :attribute field must be a valid URL.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(135, '9c3ee600-522e-492d-ad2d-49b65da46935', 1, 4, NULL, 'ulid', 'validation', 'The :attribute field must be a valid ULID.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(136, '9c3ee600-54a4-4809-8d9c-c2b46eee1069', 1, 4, NULL, 'uuid', 'validation', 'The :attribute field must be a valid UUID.', 'active', '[\"attribute\"]', NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(137, '9c3ee600-5739-4914-95a8-031489ce87ca', 1, 4, NULL, 'custom.attribute-name.rule-name', 'validation', 'custom-message', 'active', NULL, NULL, '2024-06-09 10:26:46', '2024-06-09 10:26:46'),
(138, '9c410563-d509-45a9-8ebe-8f56a23e5b82', 2, 1, 1, 'failed', 'auth', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(139, '9c410563-e634-435f-a008-105efef7099d', 2, 1, 2, 'password', 'auth', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(140, '9c410563-ea12-4760-a2e6-9874828cab4d', 2, 1, 3, 'throttle', 'auth', NULL, 'active', '[\"seconds\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(141, '9c410563-ec6d-42ca-8c6f-c55c8de614a2', 2, 2, 4, 'previous', 'pagination', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(142, '9c410563-ef61-4dcf-ab27-5d37ae3dec6e', 2, 2, 5, 'next', 'pagination', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(143, '9c410563-f187-4174-876e-6aa7b0c495d4', 2, 3, 6, 'reset', 'passwords', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(144, '9c410563-f3a9-4fff-99f5-a59034d60074', 2, 3, 7, 'sent', 'passwords', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(145, '9c410563-f5fb-4442-8a17-f391fcf47c24', 2, 3, 8, 'throttled', 'passwords', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(146, '9c410563-f805-4a20-ad13-ad9c18ccb130', 2, 3, 9, 'token', 'passwords', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(147, '9c410563-fa18-4ac8-b872-1618f88dfd0b', 2, 3, 10, 'user', 'passwords', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(148, '9c410563-fc47-4a0a-b7d5-2b5acebe585c', 2, 4, 11, 'accepted', 'validation', 'Sehemu ya :attribute lazima ukubaliwe.', 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:47:52'),
(149, '9c410563-fe9f-4a91-94ef-e99ee28eaf19', 2, 4, 12, 'accepted_if', 'validation', 'Sehemu ya :attribute lazima ukubaliwe wakati :other ni :value.', 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:48:27'),
(150, '9c410564-008c-4ebd-ab86-6149e8cded08', 2, 4, 13, 'active_url', 'validation', 'Sehemu ya :attribute lazima iwe URL halali.', 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:49:49'),
(151, '9c410564-0299-4498-bf3c-f8325bf2b753', 2, 4, 14, 'after', 'validation', 'Sehemu ya :attribute lazima iwe tarehe baada ya :date.', 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:51:22'),
(152, '9c410564-04a7-47e6-80e9-f50549da1835', 2, 4, 15, 'after_or_equal', 'validation', 'Sehemu ya :attribute lazima iwe tarehe iliyofuata au sawa na :date.', 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:52:04'),
(153, '9c410564-06b4-4df4-9842-32a28efee850', 2, 4, 16, 'alpha', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(154, '9c410564-08b1-41f7-942f-23d3e9551a83', 2, 4, 17, 'alpha_dash', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(155, '9c410564-0b07-4f46-bc7f-ce40b7145d4a', 2, 4, 18, 'alpha_num', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(156, '9c410564-0efa-4daa-ab67-577f5b39b8d8', 2, 4, 19, 'array', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(157, '9c410564-118b-4fd0-aa19-a0bf813e5743', 2, 4, 20, 'ascii', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(158, '9c410564-13b0-42da-98e3-df876f7f2992', 2, 4, 21, 'before', 'validation', NULL, 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(159, '9c410564-15cc-4341-a60d-b983cf2de36e', 2, 4, 22, 'before_or_equal', 'validation', NULL, 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(160, '9c410564-17ec-4b02-b636-7127c858e623', 2, 4, 23, 'between.array', 'validation', NULL, 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(161, '9c410564-1a37-4fa4-b6d3-57c78d3c4d24', 2, 4, 24, 'between.file', 'validation', NULL, 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(162, '9c410564-1ca4-495d-bbb3-3f3212e0057c', 2, 4, 25, 'between.numeric', 'validation', NULL, 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(163, '9c410564-1ef8-4baa-9591-31752b5bf16f', 2, 4, 26, 'between.string', 'validation', NULL, 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(164, '9c410564-2117-4d0f-b522-58247f5bd5df', 2, 4, 27, 'boolean', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(165, '9c410564-233b-4550-8f95-c55899f746b5', 2, 4, 28, 'can', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(166, '9c410564-2581-4da6-8227-e0ddad6137ab', 2, 4, 29, 'confirmed', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(167, '9c410564-2790-45f2-a8ef-a867bcc29d32', 2, 4, 30, 'current_password', 'validation', NULL, 'active', NULL, NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(168, '9c410564-29ca-4fcb-906e-6b4b95e819c2', 2, 4, 31, 'date', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(169, '9c410564-2bfe-475f-a974-deb782dfb89e', 2, 4, 32, 'date_equals', 'validation', NULL, 'active', '[\"attribute\",\"date\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(170, '9c410564-2e1c-458b-9e1b-f009906fcf28', 2, 4, 33, 'date_format', 'validation', NULL, 'active', '[\"attribute\",\"format\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(171, '9c410564-306d-4814-b9bd-2c0b81a694e4', 2, 4, 34, 'decimal', 'validation', NULL, 'active', '[\"attribute\",\"decimal\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(172, '9c410564-32fd-4ae5-a666-c9829745c26e', 2, 4, 35, 'declined', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(173, '9c410564-34ee-4ce6-b1a2-9b215af859a1', 2, 4, 36, 'declined_if', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(174, '9c410564-3737-4db3-ace9-bf269a34d838', 2, 4, 37, 'different', 'validation', NULL, 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(175, '9c410564-394f-4b2d-a288-1950a37d933b', 2, 4, 38, 'digits', 'validation', NULL, 'active', '[\"attribute\",\"digits\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(176, '9c410564-3b2a-4772-86a4-573a9c7a1acd', 2, 4, 39, 'digits_between', 'validation', NULL, 'active', '[\"attribute\",\"min\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(177, '9c410564-3d6c-491a-b5be-65725f2231ae', 2, 4, 40, 'dimensions', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(178, '9c410564-3fab-4ff7-b364-2e77d3eb852f', 2, 4, 41, 'distinct', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(179, '9c410564-41c4-4ccc-8f0b-9875d5716aa8', 2, 4, 42, 'doesnt_end_with', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(180, '9c410564-4435-48ba-adc4-01fb99ef4fc8', 2, 4, 43, 'doesnt_start_with', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(181, '9c410564-46b3-4fd6-a503-50fdac9fc9c0', 2, 4, 44, 'email', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(182, '9c410564-48f7-4e34-8fc5-322ff62ae512', 2, 4, 45, 'ends_with', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(183, '9c410564-4ace-49f9-bf19-057e3958b978', 2, 4, 46, 'enum', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(184, '9c410564-4ccd-4215-9ca9-71a2d8820ce3', 2, 4, 47, 'exists', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(185, '9c410564-4ec2-47a8-aa9d-c7347d4cb17a', 2, 4, 48, 'extensions', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(186, '9c410564-50aa-423c-97f5-ebf899f0cf7c', 2, 4, 49, 'file', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(187, '9c410564-5287-4fc2-baec-ab27679ab513', 2, 4, 50, 'filled', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(188, '9c410564-5490-4631-a00b-53d0de59388f', 2, 4, 51, 'gt.array', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(189, '9c410564-569f-4a6a-807c-d560dcc184c2', 2, 4, 52, 'gt.file', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(190, '9c410564-58ae-4bc4-96f3-4b73408b8b34', 2, 4, 53, 'gt.numeric', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(191, '9c410564-5a94-44ea-b701-4f9f4d602d30', 2, 4, 54, 'gt.string', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(192, '9c410564-5cfd-48e0-9d0d-c85148018bfa', 2, 4, 55, 'gte.array', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(193, '9c410564-5f1c-4a87-a667-0af4e3adc05f', 2, 4, 56, 'gte.file', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(194, '9c410564-6155-4548-9f94-e6f2390e3ede', 2, 4, 57, 'gte.numeric', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(195, '9c410564-636d-45ec-b2fb-2048fe57373f', 2, 4, 58, 'gte.string', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(196, '9c410564-6513-485b-b9b7-7eee684a5128', 2, 4, 59, 'hex_color', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(197, '9c410564-673b-4a8a-98c9-21966ddf5439', 2, 4, 60, 'image', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(198, '9c410564-693c-4ee7-8c3d-7d2b4135deab', 2, 4, 61, 'in', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(199, '9c410564-6b3f-40ca-84a6-aa4b9845c222', 2, 4, 62, 'in_array', 'validation', NULL, 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(200, '9c410564-6d4e-4dc0-9e31-c02c259b47f5', 2, 4, 63, 'integer', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(201, '9c410564-6f7e-4f80-a1f7-ae18cbfe4218', 2, 4, 64, 'ip', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(202, '9c410564-71ad-45b9-b566-9354aaada31d', 2, 4, 65, 'ipv4', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(203, '9c410564-7402-4c6c-8b09-a27079a892f7', 2, 4, 66, 'ipv6', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(204, '9c410564-770c-48cd-8d85-de58c23e9983', 2, 4, 67, 'json', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(205, '9c410564-79ea-41d2-9544-fef3ce3f78bb', 2, 4, 68, 'lowercase', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(206, '9c410564-7ca3-4fe0-b8ca-f799847c2870', 2, 4, 69, 'lt.array', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(207, '9c410564-7f29-4b86-b125-9f0a1a021cb4', 2, 4, 70, 'lt.file', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(208, '9c410564-8303-441b-aa4c-bc79d6140e2a', 2, 4, 71, 'lt.numeric', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(209, '9c410564-85eb-4468-850c-0804e4c6f9f7', 2, 4, 72, 'lt.string', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(210, '9c410564-88f3-4f7c-b464-325371c25148', 2, 4, 73, 'lte.array', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(211, '9c410564-8bdf-4801-af4c-071f10ea90cd', 2, 4, 74, 'lte.file', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(212, '9c410564-8e2b-4f98-b424-a9a3947aeaf2', 2, 4, 75, 'lte.numeric', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(213, '9c410564-909b-4c58-b043-cd020dfdb250', 2, 4, 76, 'lte.string', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(214, '9c410564-9322-4be3-969b-b954f27c41f5', 2, 4, 77, 'mac_address', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(215, '9c410564-956b-4edb-9dc6-0d008fd81df3', 2, 4, 78, 'max.array', 'validation', NULL, 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(216, '9c410564-97d6-40aa-87a0-67159b4b408c', 2, 4, 79, 'max.file', 'validation', NULL, 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(217, '9c410564-9a32-450b-bf2a-95a319e00f57', 2, 4, 80, 'max.numeric', 'validation', NULL, 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(218, '9c410564-9caf-4085-8e10-c5df1f902dfc', 2, 4, 81, 'max.string', 'validation', NULL, 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(219, '9c410564-9ecc-4182-8365-404526c51efe', 2, 4, 82, 'max_digits', 'validation', NULL, 'active', '[\"attribute\",\"max\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(220, '9c410564-a0f9-4a01-a17f-7fd1c8617d46', 2, 4, 83, 'mimes', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(221, '9c410564-a32e-4624-bff1-e5a752e357f6', 2, 4, 84, 'mimetypes', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(222, '9c410564-a4fe-447a-91ab-626d6122ef77', 2, 4, 85, 'min.array', 'validation', NULL, 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(223, '9c410564-a6a7-497c-a465-8560c86e10ac', 2, 4, 86, 'min.file', 'validation', NULL, 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(224, '9c410564-a891-4b59-b068-aae2c3bc9659', 2, 4, 87, 'min.numeric', 'validation', NULL, 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(225, '9c410564-ac76-4d17-9409-f36b0cab95a5', 2, 4, 88, 'min.string', 'validation', NULL, 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(226, '9c410564-ae8a-48f9-86ad-75ad5e0fb05e', 2, 4, 89, 'min_digits', 'validation', NULL, 'active', '[\"attribute\",\"min\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(227, '9c410564-b08c-4253-a5b2-7ff1e38333c0', 2, 4, 90, 'missing', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(228, '9c410564-b2e0-4e7f-8f00-2a20a148715f', 2, 4, 91, 'missing_if', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(229, '9c410564-b527-4cdb-8bbe-8584adba69b1', 2, 4, 92, 'missing_unless', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(230, '9c410564-b738-4f5d-81db-f05c2e286222', 2, 4, 93, 'missing_with', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(231, '9c410564-b95f-45cd-bc07-ac03060cba5b', 2, 4, 94, 'missing_with_all', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(232, '9c410564-bb93-4693-8584-eefb007e6c8d', 2, 4, 95, 'multiple_of', 'validation', NULL, 'active', '[\"attribute\",\"value\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(233, '9c410564-bd90-4d15-b85b-2a671e4ce3fe', 2, 4, 96, 'not_in', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(234, '9c410564-bfa7-40e6-9543-47c5ef28a8c3', 2, 4, 97, 'not_regex', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(235, '9c410564-c218-40d6-9f01-ab395ab4ba68', 2, 4, 98, 'numeric', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(236, '9c410564-c451-43f6-a0d2-d9055ae1014f', 2, 4, 99, 'password.letters', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(237, '9c410564-c673-4023-a161-793719cab255', 2, 4, 100, 'password.mixed', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(238, '9c410564-c8a6-4ec7-8479-f77f0ba2327c', 2, 4, 101, 'password.numbers', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(239, '9c410564-ca9b-4846-a3a7-c5e5570191bc', 2, 4, 102, 'password.symbols', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(240, '9c410564-ccb3-42c1-9b3a-d0a429aa909b', 2, 4, 103, 'password.uncompromised', 'validation', NULL, 'active', '[\"attribute\",\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(241, '9c410564-cef1-4808-bf82-80c6d0ace0dd', 2, 4, 104, 'present', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:12', '2024-06-10 11:46:12'),
(242, '9c410564-d11c-4a0f-9429-7dbc9dac09fa', 2, 4, 105, 'present_if', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(243, '9c410564-d349-4c37-b089-f7d85297e662', 2, 4, 106, 'present_unless', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(244, '9c410564-d597-4f99-90d9-b1a571d5b63a', 2, 4, 107, 'present_with', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13');
INSERT INTO `ltu_phrases` (`id`, `uuid`, `translation_id`, `translation_file_id`, `phrase_id`, `key`, `group`, `value`, `status`, `parameters`, `note`, `created_at`, `updated_at`) VALUES
(245, '9c410564-d7cf-4583-8ca0-5f553b531266', 2, 4, 108, 'present_with_all', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(246, '9c410564-da0d-4e1a-99e3-f9a97cbc945a', 2, 4, 109, 'prohibited', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(247, '9c410564-dc7a-42b8-a31f-71ca337f5abd', 2, 4, 110, 'prohibited_if', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(248, '9c410564-dea9-4d11-a50d-2191b4698708', 2, 4, 111, 'prohibited_unless', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(249, '9c410564-e0c3-44bd-9e06-303b466dc21a', 2, 4, 112, 'prohibits', 'validation', NULL, 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(250, '9c410564-e2df-4a6b-926f-6fe7133506e9', 2, 4, 113, 'regex', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(251, '9c410564-e51b-4bed-86a3-1b333a821b7b', 2, 4, 114, 'required', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(252, '9c410564-e77f-49e9-a312-5d14d3f44226', 2, 4, 115, 'required_array_keys', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(253, '9c410564-ea0f-4b62-a1aa-94da74efdfd0', 2, 4, 116, 'required_if', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"value\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(254, '9c410564-ec3c-4a36-a439-34cb91cd0b97', 2, 4, 117, 'required_if_accepted', 'validation', NULL, 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(255, '9c410564-ee77-4f4d-8863-f6806471508a', 2, 4, 118, 'required_unless', 'validation', NULL, 'active', '[\"attribute\",\"other\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(256, '9c410564-f0f6-4fe8-b2e0-d93ad7fd92d4', 2, 4, 119, 'required_with', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(257, '9c410564-f319-400f-8acd-af16e4bcc8d0', 2, 4, 120, 'required_with_all', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(258, '9c410564-f512-4ad5-b1ff-0cc79a63b467', 2, 4, 121, 'required_without', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(259, '9c410564-f718-4035-b79a-4084a71539a0', 2, 4, 122, 'required_without_all', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(260, '9c410564-f948-4719-8801-5378778be66e', 2, 4, 123, 'same', 'validation', NULL, 'active', '[\"attribute\",\"other\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(261, '9c410564-fbfd-4d3f-8429-d0346404bb9d', 2, 4, 124, 'size.array', 'validation', NULL, 'active', '[\"attribute\",\"size\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(262, '9c410564-fe90-4a42-a916-34a74499a7b3', 2, 4, 125, 'size.file', 'validation', NULL, 'active', '[\"attribute\",\"size\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(263, '9c410565-0099-453d-ba5f-60f6226a3b8b', 2, 4, 126, 'size.numeric', 'validation', NULL, 'active', '[\"attribute\",\"size\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(264, '9c410565-02a2-46df-b992-11d499fdfb22', 2, 4, 127, 'size.string', 'validation', NULL, 'active', '[\"attribute\",\"size\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(265, '9c410565-04ff-43ea-8ec5-9e91e5720cc2', 2, 4, 128, 'starts_with', 'validation', NULL, 'active', '[\"attribute\",\"values\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(266, '9c410565-071b-4568-85e4-f36e587973f3', 2, 4, 129, 'string', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(267, '9c410565-0906-4ed3-b809-45f253f4e4dc', 2, 4, 130, 'timezone', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(268, '9c410565-0b1e-4ba5-b21c-bf8010b539b9', 2, 4, 131, 'unique', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(269, '9c410565-0d29-4cbb-8250-4db4ccc6da64', 2, 4, 132, 'uploaded', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(270, '9c410565-0f1e-41b6-a073-1a5e15978b6a', 2, 4, 133, 'uppercase', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(271, '9c410565-115c-4f56-9bdd-c62ab79a2814', 2, 4, 134, 'url', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(272, '9c410565-1343-4a06-949b-0988a6a5060a', 2, 4, 135, 'ulid', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(273, '9c410565-1528-4f9d-9b1f-42fbbf9e0f2d', 2, 4, 136, 'uuid', 'validation', NULL, 'active', '[\"attribute\"]', NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13'),
(274, '9c410565-1740-48d3-a38e-9c13d11d5873', 2, 4, 137, 'custom.attribute-name.rule-name', 'validation', NULL, 'active', NULL, NULL, '2024-06-10 11:46:13', '2024-06-10 11:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `ltu_translations`
--

CREATE TABLE `ltu_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `source` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ltu_translations`
--

INSERT INTO `ltu_translations` (`id`, `language_id`, `source`, `created_at`, `updated_at`) VALUES
(1, 26, 1, '2024-06-09 10:26:45', '2024-06-09 10:26:45'),
(2, 90, 0, '2024-06-10 11:46:12', '2024-06-10 11:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `ltu_translation_files`
--

CREATE TABLE `ltu_translation_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `is_root` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ltu_translation_files`
--

INSERT INTO `ltu_translation_files` (`id`, `name`, `extension`, `is_root`) VALUES
(1, 'auth', 'php', 0),
(2, 'pagination', 'php', 0),
(3, 'passwords', 'php', 0),
(4, 'validation', 'php', 0);

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
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_05_29_053243_create_roles_table', 1),
(4, '2024_05_29_053244_create_users_table', 1),
(5, '2024_05_29_053253_create_permissions_table', 1),
(6, '2024_05_29_053333_create_post_categories_table', 1),
(7, '2024_05_29_053334_create_posts_table', 1),
(8, '2024_05_29_053407_create_topic_categories_table', 1),
(9, '2024_05_29_053413_create_topics_table', 1),
(10, '2024_05_29_053436_create_pages_table', 1),
(11, '2024_05_29_053504_create_questions_table', 1),
(12, '2024_05_29_053515_create_articles_table', 1),
(13, '2024_05_30_124004_create_subscribers_table', 1),
(14, '2024_05_31_175537_create_role_permission_table', 2),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(16, '2024_06_06_142720_create_sites_table', 3),
(17, '2024_06_06_144553_create_permission_tables', 3),
(18, '2024_05_29_053243_create_permission_tables', 4),
(19, '2024_06_09_132013_create_languages_table', 4),
(20, '2024_06_09_132014_create_translations_table', 4),
(21, '2024_06_09_132015_create_translation_files_table', 4),
(22, '2024_06_09_132016_create_phrases_table', 4),
(23, '2024_06_09_132017_create_contributors_table', 4),
(24, '2024_06_09_132019_create_invites_table', 4),
(25, '2024_06_09_132020_add_is_root_to_translation_files_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(9, 'App\\Models\\Role', 1),
(9, 'App\\Models\\Role', 3),
(10, 'App\\Models\\Role', 1),
(10, 'App\\Models\\Role', 3),
(11, 'App\\Models\\Role', 1),
(11, 'App\\Models\\Role', 3),
(12, 'App\\Models\\Role', 1),
(12, 'App\\Models\\Role', 3),
(13, 'App\\Models\\Role', 1),
(13, 'App\\Models\\Role', 2),
(13, 'App\\Models\\Role', 3),
(14, 'App\\Models\\Role', 1),
(14, 'App\\Models\\Role', 2),
(14, 'App\\Models\\Role', 3),
(15, 'App\\Models\\Role', 1),
(15, 'App\\Models\\Role', 2),
(15, 'App\\Models\\Role', 3),
(16, 'App\\Models\\Role', 1),
(16, 'App\\Models\\Role', 2),
(16, 'App\\Models\\Role', 3),
(25, 'App\\Models\\Role', 1),
(26, 'App\\Models\\Role', 1),
(26, 'App\\Models\\Role', 2),
(27, 'App\\Models\\Role', 1),
(28, 'App\\Models\\Role', 1),
(29, 'App\\Models\\Role', 1),
(30, 'App\\Models\\Role', 1),
(31, 'App\\Models\\Role', 1),
(32, 'App\\Models\\Role', 1),
(33, 'App\\Models\\Role', 1),
(34, 'App\\Models\\Role', 1),
(35, 'App\\Models\\Role', 1),
(36, 'App\\Models\\Role', 1),
(37, 'App\\Models\\Role', 1),
(37, 'App\\Models\\Role', 3),
(38, 'App\\Models\\Role', 1),
(38, 'App\\Models\\Role', 3),
(39, 'App\\Models\\Role', 1),
(39, 'App\\Models\\Role', 3),
(40, 'App\\Models\\Role', 1),
(40, 'App\\Models\\Role', 3),
(41, 'App\\Models\\Role', 1),
(41, 'App\\Models\\Role', 2),
(42, 'App\\Models\\Role', 1),
(42, 'App\\Models\\Role', 2),
(43, 'App\\Models\\Role', 1),
(43, 'App\\Models\\Role', 2),
(44, 'App\\Models\\Role', 1),
(45, 'App\\Models\\Role', 1),
(45, 'App\\Models\\Role', 2),
(46, 'App\\Models\\Role', 1),
(46, 'App\\Models\\Role', 2),
(47, 'App\\Models\\Role', 1),
(48, 'App\\Models\\Role', 1),
(49, 'App\\Models\\Role', 1),
(49, 'App\\Models\\Role', 2),
(50, 'App\\Models\\Role', 1),
(50, 'App\\Models\\Role', 2),
(51, 'App\\Models\\Role', 1),
(51, 'App\\Models\\Role', 2),
(52, 'App\\Models\\Role', 1),
(52, 'App\\Models\\Role', 2),
(54, 'App\\Models\\Role', 1),
(54, 'App\\Models\\Role', 2),
(55, 'App\\Models\\Role', 1),
(55, 'App\\Models\\Role', 2),
(56, 'App\\Models\\Role', 1),
(56, 'App\\Models\\Role', 2),
(57, 'App\\Models\\Role', 1),
(57, 'App\\Models\\Role', 2),
(58, 'App\\Models\\Role', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `banner` varchar(90) DEFAULT NULL,
  `resource` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `slug`, `banner`, `resource`, `created_at`, `updated_at`) VALUES
(1, 'Shamba', 'here is the content of the page', 'aboutus', NULL, 0, '2024-05-31 06:40:07', '2024-05-31 06:40:07'),
(4, 'Terms & Conditions', '<h3>1. Acceptance of Terms</h3><p>By accessing and using the website Shamba<span style=\"color: rgb(0, 138, 0); background-color: rgb(255, 153, 0);\">Move </span> (the \"Site\") and the services provided by Shamba<span style=\"background-color: rgb(255, 153, 0); color: rgb(0, 138, 0);\">Move </span>  , you agree to comply with and be bound by these Terms and Conditions (\"Terms\"). If you do not agree to these Terms, please do not use our Site or services.</p><p><br></p><h3>2. Changes to Terms</h3><p>We reserve the right to modify these Terms at any time. Any changes will be effective immediately upon posting on the Site. Your continued use of the Site and our services following the posting of any changes constitutes your acceptance of the revised Terms. It is your responsibility to review these Terms periodically.</p><p><br></p><h3>3. Products and Services</h3><h4 class=\"ql-indent-1\">	3.1 Product Descriptions</h4><p class=\"ql-indent-1\">	We strive to ensure that our product descriptions and other information on the Site are accurate and complete. However, we do not guarantee that the descriptions, prices, or other content available on the Site are error-free, complete, or current. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update information at any time without prior notice.</p><h4 class=\"ql-indent-1\">	3.2 Availability</h4><p class=\"ql-indent-1\">	All products and services are subject to availability. We reserve the right to limit the quantity of any product or service we offer and to discontinue any product or service at any time without notice.</p><p><br></p><h3>4. User Responsibilities</h3><h4 class=\"ql-indent-1\">4.1 Account Information</h4><p class=\"ql-indent-1\">You may be required to create an account to access certain features of the Site. You agree to provide accurate, current, and complete information during the registration process and to update such information to keep it accurate, current, and complete. You are responsible for safeguarding your account password and for any activities or actions under your account.</p><h4 class=\"ql-indent-1\">4.2 Prohibited Activities</h4><p class=\"ql-indent-1\">You agree not to use the Site or our services for any unlawful or prohibited purpose. You agree not to:</p><ol><li data-list=\"bullet\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Use the Site in any manner that could disable, overburden, damage, or impair the Site or interfere with any other party\'s use of the Site.</li><li data-list=\"bullet\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Attempt to gain unauthorized access to any portion of the Site, other accounts, computer systems, or networks connected to the Site, through hacking, password mining, or any other means.</li><li data-list=\"bullet\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Use any robot, spider, or other automatic device, process, or means to access the Site for any purpose, including monitoring or copying any of the material on the Site.</li></ol><p><br></p><h3>5. Intellectual Property</h3><p>All content on the Site, including text, graphics, logos, images, and software, is the property of ShambaMove or its content suppliers and is protected by copyright, trademark, and other intellectual property laws. You may not use, reproduce, distribute, or create derivative works based on the content without our express written permission.</p><p><br></p><h3>6. Limitation of Liability</h3><p>To the fullest extent permitted by law, ShambaMove shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses, resulting from (a) your use of or inability to use the Site or our services; (b) any unauthorized access to or use of our servers and/or any personal information stored therein; (c) any interruption or cessation of transmission to or from the Site; (d) any bugs, viruses, trojan horses, or the like that may be transmitted to or through the Site by any third party; or (e) any errors or omissions in any content or for any loss or damage incurred as a result of the use of any content posted, emailed, transmitted, or otherwise made available through the Site.</p><p><br></p><h3>7. Governing Law</h3><p>These Terms shall be governed by and construed in accordance with the laws of Tanzania, without regard to its conflict of law provisions. You agree to submit to the personal and exclusive jurisdiction of the courts located in Arusha, Tanzania for the resolution of any disputes arising out of or relating to these Terms or the Site.</p><p><br></p><h3>8. Contact Information</h3><p>If you have any questions about these Terms, please contact us at:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Address:</strong> 2798 Njiro, Arusha, Tanzania</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Phone:</strong> +255714267385</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Email:</strong> services@shambamove.org</li></ol><p><br></p><p><br></p><p class=\"ql-align-center\"><strong style=\"color: rgb(0, 138, 0);\"><em>Thank you for using ShambaMove. We appreciate your business and look forward to serving you.</em></strong></p>', 'terms-conditions', NULL, 1, '2024-06-08 03:01:22', '2024-06-08 05:58:16'),
(5, 'About Us', '<h4>Our Story</h4><p>Welcome to <strong style=\"color: rgb(0, 97, 0);\">Shamba</strong><strong style=\"color: rgb(0, 97, 0); background-color: rgb(255, 194, 102);\">Move </strong>, where tradition meets innovation in the world of agriculture. Established in , we have been committed to fostering sustainable farming practices that support both the environment and the communities we serve. Our journey began with a small family farm, and today, we are proud to be a leading name in the agricultural sector, delivering quality products and services across Arusha.</p><p><br></p><h4>Our Mission</h4><p>Our mission is to enhance the productivity and profitability of farmers through innovative agricultural solutions. We strive to promote sustainable farming practices that not only increase yields but also preserve the health of our planet. By combining traditional knowledge with modern technology, we aim to create a more resilient and sustainable agricultural ecosystem.</p><p><br></p><h4>Our Vision</h4><p>We envision a future where agriculture is synonymous with sustainability and innovation. Our goal is to be at the forefront of the agricultural industry, driving change and setting new standards for environmental stewardship, economic viability, and social responsibility. We believe that by empowering farmers and embracing cutting-edge technologies, we can create a thriving agricultural community for generations to come.</p><p><br></p><h4>Our Values</h4><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Sustainability:</strong> We are dedicated to promoting practices that protect our environment and ensure the long-term health of our agricultural systems.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Innovation:</strong> We continually seek out new technologies and methods to improve farming efficiency and productivity.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Integrity:</strong> We conduct our business with the highest ethical standards, ensuring fairness and transparency in all our dealings.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Community:</strong> We believe in the power of community and work closely with local farmers and organizations to support rural development.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Quality:</strong> We are committed to providing the highest quality products and services to our customers.</li></ol><p><br></p><h4>Our Team</h4><p>Our team is composed of passionate individuals who are experts in various fields of agriculture, from agronomy and animal husbandry to technology and sustainability. Together, we work towards a common goal of advancing agricultural practices and supporting the farming community. Meet some of our key team members:</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Octavian Maveric, CEO:</strong> With over 8yrs of experience in the agricultural sector, [Name] leads our company with a vision for sustainable growth and innovation.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Aman Tairo, Head of Agronomy:</strong> An expert in crop science, <strong style=\"color: rgb(0, 97, 0);\">Dr Tairo</strong> oversees our research and development efforts, ensuring we stay at the cutting edge of agricultural technology.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Iman Simon, Sustainability Manager:</strong> Passionate about the environment,<strong> Sir Iman</strong> works to integrate sustainable practices into every aspect of our operations.</li></ol><p><br></p><p><br></p><h4>Contact Us</h4><p>We would love to hear from you! Whether you have questions about our products and services, or you want to learn more about our sustainability initiatives, please get in touch with us.</p><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Address:</strong> 2798 Njiro</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Phone:</strong> +255 718283443</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Email:</strong> services@shambamove.org</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Social Media:</strong> Follow us on Facebook, Twitter, Instagram, LinkedIn for the latest updates and news.</li></ol><p><br></p><p><br></p><p class=\"ql-align-center\"><strong class=\"ql-font-serif\" style=\"color: rgb(0, 138, 0);\"><em>**Thank you for visiting this page. We look forward to working with you and contributing to a sustainable future in agriculture.**</em></strong></p>', 'about-us', 'storage/images/page//1717828492-gettyimages-1436045661-612x612.jpg', 1, '2024-06-08 03:34:52', '2024-06-08 05:26:20'),
(7, 'Contacts', '<p>Contacts</p>', 'contacts', 'storage/images/page//1717830478-abubakar-balogun-twosyptnm94-unsplash.jpg', 1, '2024-06-08 04:07:58', '2024-06-08 15:18:24'),
(11, 'Gallery', '<p>DS;PHI;WL\'OJ[Loplsorl</p>', 'gallery', 'storage/images/page//1717937266-image-spcfkoo-1692488713866-512.webp', 1, '2024-06-09 09:47:46', '2024-06-09 09:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$r/u9pwp1GHanKWLz.I9v0.ALUtCTrikoOffIimvmoGP.zSy7AwZ.C', '2024-06-06 11:31:58'),
('t6cruise@gmail.com', '$2y$12$8X8rFqDk9Af2rBGl3JbAIuYYNcvxpRueHYEFcTFcPb71SDK6NDP5S', '2024-06-06 11:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(9, 'User_create', 'web', '2024-06-10 03:16:47', '2024-06-10 03:16:47'),
(10, 'User_read', 'web', '2024-06-10 03:16:47', '2024-06-10 03:16:47'),
(11, 'User_update', 'web', '2024-06-10 03:16:47', '2024-06-10 03:16:47'),
(12, 'User_delete', 'web', '2024-06-10 03:16:47', '2024-06-10 03:16:47'),
(13, 'Post_create', 'web', '2024-06-10 03:16:47', '2024-06-10 03:16:47'),
(14, 'Post_read', 'web', '2024-06-10 03:16:47', '2024-06-10 03:16:47'),
(15, 'Post_update', 'web', '2024-06-10 03:16:47', '2024-06-10 03:16:47'),
(16, 'Post_delete', 'web', '2024-06-10 03:16:47', '2024-06-10 03:16:47'),
(25, 'PostCategory_create', 'web', '2024-06-11 01:32:29', '2024-06-11 01:32:29'),
(26, 'PostCategory_read', 'web', '2024-06-11 01:33:05', '2024-06-11 01:33:05'),
(27, 'PostCategory_update', 'web', '2024-06-11 01:34:03', '2024-06-11 01:34:03'),
(28, 'PostCategory_delete', 'web', '2024-06-11 01:34:29', '2024-06-11 01:34:29'),
(29, 'Page_create', 'web', '2024-06-11 01:51:48', '2024-06-11 01:51:48'),
(30, 'Page_read', 'web', '2024-06-11 01:52:14', '2024-06-11 01:52:14'),
(31, 'Page_update', 'web', '2024-06-11 01:52:46', '2024-06-11 01:52:46'),
(32, 'Page_delete', 'web', '2024-06-11 01:53:12', '2024-06-11 01:53:12'),
(33, 'Permission_create', 'web', '2024-06-11 02:14:46', '2024-06-11 02:14:46'),
(34, 'Permission_read', 'web', '2024-06-12 08:25:33', '2024-06-12 08:25:33'),
(35, 'Permission_update', 'web', '2024-06-16 04:50:59', '2024-06-16 04:50:59'),
(36, 'Permission_delete', 'web', '2024-06-16 04:51:34', '2024-06-16 04:51:34'),
(37, 'Role_create', 'web', '2024-06-16 05:05:36', '2024-06-16 05:05:36'),
(38, 'Role_read', 'web', '2024-06-16 05:06:21', '2024-06-16 05:06:21'),
(39, 'Role_update', 'web', '2024-06-16 05:06:48', '2024-06-16 05:06:48'),
(40, 'Role_delete', 'web', '2024-06-16 05:07:00', '2024-06-16 05:07:00'),
(41, 'Topic_create', 'web', '2024-06-16 05:07:25', '2024-06-16 05:07:25'),
(42, 'Topic_read', 'web', '2024-06-16 05:07:39', '2024-06-16 05:07:39'),
(43, 'Topic_update', 'web', '2024-06-16 05:07:51', '2024-06-16 05:07:51'),
(44, 'Topic_delete', 'web', '2024-06-16 05:08:03', '2024-06-16 05:08:03'),
(45, 'TopicCategory_create', 'web', '2024-06-16 05:11:06', '2024-06-16 05:11:06'),
(46, 'TopicCategory_read', 'web', '2024-06-16 05:11:21', '2024-06-16 05:11:21'),
(47, 'TopicCategory_update', 'web', '2024-06-16 05:12:05', '2024-06-16 05:12:05'),
(48, 'TopicCategory_delete', 'web', '2024-06-16 05:12:20', '2024-06-16 05:12:20'),
(49, 'Article_create', 'web', '2024-06-16 05:12:41', '2024-06-16 05:12:41'),
(50, 'Article_read', 'web', '2024-06-16 05:13:00', '2024-06-16 05:13:00'),
(51, 'Article_update', 'web', '2024-06-16 05:13:16', '2024-06-16 05:13:16'),
(52, 'Article_delete', 'web', '2024-06-16 05:13:32', '2024-06-16 05:13:32'),
(54, 'Question_create', 'web', '2024-06-16 05:26:57', '2024-06-16 05:26:57'),
(55, 'Question_read', 'web', '2024-06-16 05:27:11', '2024-06-16 05:27:11'),
(56, 'Question_update', 'web', '2024-06-16 05:27:24', '2024-06-16 05:27:24'),
(57, 'Question_delete', 'web', '2024-06-16 05:27:37', '2024-06-16 05:27:37'),
(58, 'Site_update', 'web', '2024-06-16 05:27:48', '2024-06-16 05:27:48');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(80) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_category_id`, `title`, `image`, `slug`, `content`, `views`, `is_published`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'oposjd', 'storage/images/post//1717928037-quote.jpg', 'oposjd', '<p>ytuyfigiho</p>', 0, 0, NULL, '2024-06-09 07:13:57', '2024-06-09 07:13:57'),
(3, 1, 5, 'The Foundation of Hervest', 'storage/images/post//1717958756-yinyang.jpg', 'the-foundation-of-hervest', '<p>siuisdo soipw  osdjls ;mapsai</p>', 0, 1, NULL, '2024-06-09 15:45:56', '2024-06-09 15:45:56'),
(4, 1, 4, 'Benefits of Crop Protection For All', 'storage/images/post//1718029719-2u8a1421.jpg', 'benefits-of-crop-protection', '<p><span>Pesticides are the main form of crop protection used around the world. While they serve a vital purpose in controlling pests and safeguarding yields, their negative consequences are not to be taken lightly.</span></p><p><br></p><p><span>With many pests and weeds attracted to cotton, crop protection is an essential part of cotton farming. Crop protection can take many forms, including the use of pheromones and hormones, plant breeding, cultural and mechanical techniques, the application of conventional pesticides and the use of genetically modified plants. The overuse of pesticides by farmers has led to pesticide resistance, disruption to populations of beneficial insects and secondary pest outbreaks. Secondary outbreaks occur when the primary pests have been removed and other, secondary, pests become a problem, requiring the farmer to use another set of crop protection practices.</span></p>', 0, 1, NULL, '2024-06-10 11:28:39', '2024-06-19 05:43:19'),
(5, 9, 4, 'Thanks', 'storage/images/post//1718087371-yintang.jpg', 'thanks', '<p>Thank you for the workshop, it was very productive meeting. I can\'t wait to start working on this new project with you guys. But first things first, I\'am waiting for the offer and pitch deck from you. It would be great to get it by the end o the month. </p>', 0, 1, NULL, '2024-06-11 03:29:31', '2024-06-11 03:29:31'),
(6, 1, 4, 'Testing posts', 'storage/images/post//1718191336-8dbe3d840a093960dbf8906d398bf973.jpg', 'testing-posts', '<p>irpuwporwou wpurpuropow</p>', 0, 1, NULL, '2024-06-12 08:22:17', '2024-06-12 08:22:17'),
(7, 4, 4, 'The first Post', 'storage/images/post//1718548744-8dbe3d840a093960dbf8906d398bf973.jpg', 'the-first-post', '<p>wpewor[eri</p>', 0, 1, NULL, '2024-06-16 11:39:04', '2024-06-16 11:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Sustainable Farming Practices: A Path to Resilient Agriculture', 'sustainable-farming-practices-a-path-to-resilient-agriculture', '<p>	In recent years, sustainable farming practices have gained significant attention as a way to promote environmental health, economic profitability, and social equity in agriculture. This post explores various sustainable farming techniques such as crop rotation, agroforestry, and integrated pest management. It delves into the benefits of these practices, including soil health improvement, reduced chemical usage, and enhanced biodiversity. By adopting sustainable farming practices, farmers can ensure long-term productivity and contribute to the global effort to combat climate change.</p>', '2024-06-07 09:20:13', '2024-06-07 09:20:13'),
(4, 'Advancements in Precision Agriculture', 'advancements-in-precision-agriculture', '<p>Empowering Farmers with <strong style=\"color: rgb(102, 185, 102);\" class=\"ql-font-monospace\"><u>Smart Agricultural Solutions</u></strong>: Our innovative system integrates IoT sensors, AI-driven analytics, and cloud computing to revolutionize farming practices. From precision irrigation and crop monitoring to predictive analytics for pest control, our platform equips farmers with the tools they need to increase productivity, reduce resource usage, and adapt to changing environmental conditions, ensuring a more resilient and sustainable agricultural future.......</p>', '2024-06-07 09:22:28', '2024-06-07 10:59:25'),
(5, 'Crop Science Research Assistant', 'crop-science-research-assistant', '<p><strong class=\"ql-size-large\">A</strong>re you passionate about<a href=\"https://www.google.com/search?client=firefox-b-d&amp;q=agronomy\" rel=\"noopener noreferrer\" target=\"_blank\"> </a><strong style=\"color: rgb(102, 163, 224);\"><em><a href=\"https://www.google.com/search?client=firefox-b-d&amp;q=agronomy\" rel=\"noopener noreferrer\" target=\"_blank\">agronomy</a></em></strong> and crop science research? Join our agricultural research team as a Crop Science Research Assistant! In this role, you\'ll collaborate with experienced researchers to conduct field trials, collect data on crop performance, and analyze experimental results. Ideal candidates will have a degree in agronomy or plant science and hands-on experience with fieldwork and data analysis techniques. If you\'re eager to contribute to agricultural innovation, apply now!</p>', '2024-06-07 09:25:30', '2024-06-07 11:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('open','closed','answered') NOT NULL DEFAULT 'open',
  `resolved_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-06-06 14:53:57', '2024-06-06 14:53:57'),
(2, 'user', 'web', '2024-06-06 14:54:14', '2024-06-06 14:54:14'),
(3, 'Tester tt', 'web', '2024-06-10 02:47:20', '2024-06-19 06:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('7pEVEIL4otCSqO3iW1YX0D5IKOGBoCnlJhJoV7lb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHFYVmJyVVB5MUxjMlI2WXFmMElWTFRibUkyWTR3emtmUEpKcmkzYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWFkL3Rlc3RpbmctcG9zdHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719047731),
('guxSLef1WTmaoCa3EgBBxvUj7EC55ZubDtPvce6t', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFlZRGpkZmNXSVZYRGkxV1VyUUhxZ3FCRlJseUU0SVRsck1JNEJ5bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZWRpYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719058437),
('r2TImZHCvoLlQZ6XAGHdXnKoXyUNQmG6TRIsberq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVNabEVjM0h1UUo3T2M1Z2xCUnV6QmtPazM2aDB5MTdOcUUycnY5VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRlZ3MvYWR2YW5jZW1lbnRzLWluLXByZWNpc2lvbi1hZ3JpY3VsdHVyZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719047725),
('TkxGFIdyUcFVdJYzNbyASpmVngO5XxOUknQKILtA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXdxeTJKUUNwM2RDb04zcXRUQkVRQXN6SDU1VlNsd0h3T211cGlzRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRlZ3MvYWR2YW5jZW1lbnRzLWluLXByZWNpc2lvbi1hZ3JpY3VsdHVyZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719042035),
('W4JUcHWB8YqaaSDsOWIpPqBy9K2N8pxcHOBFXXl3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnZCR1VnQ2Z6a01JaHh5ek1OQ0E1b2NEMG55c0F3S1Vkb0xlUlE3MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZWRpYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719047721);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topic_categories`
--

CREATE TABLE `topic_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
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
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `first_name`, `last_name`, `bio`, `profile_picture`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aman Tairo', 't6cruise@gmail.com', 1, NULL, NULL, NULL, '<p>Admin </p>', 'storage/images/profiler/tairo.jpg', '$2y$12$g8PqdlefhYxUiuZS6AOqMuhlpbzWsJ72nCZGnUzDvzC3z/mkTnWOy', NULL, '2024-05-31 06:40:07', '2024-06-08 13:36:42'),
(3, 'Ocatvian', 'octavian@gmail.com', 2, NULL, NULL, NULL, '<p>Hacker guru</p>', 'storage/images/profiler/1717755127-8dbe3d840a093960dbf8906d398bf973.jpg', '$2y$12$iNV.8DL2tB3hdIGUoEh53ebQUtLY8Ne7U1.iXaf61xaBMlM/jW7XS', NULL, '2024-06-07 07:12:07', '2024-06-07 07:44:21'),
(4, 'Hamad Manoma', 'hamad@mail.com', 2, NULL, NULL, NULL, '<p>Teter</p>', 'storage/images/profiler/1717757140-fatherson.png', '$2y$12$73GrNmV9Pz.8Fq8YaSLS8.nhfV0f2DAGyKalKnoNn8YTXGLbET3wC', NULL, '2024-06-07 07:45:41', '2024-06-07 07:48:01'),
(7, 'Tester Aman', 'aman@gmail.com', 2, NULL, NULL, NULL, NULL, NULL, '$2y$12$Hx7JTmMaSqBrs2n1UhTb3O4H4CCQIrq.IOxjW0UBRa/ox8M2sJeI2', NULL, '2024-06-10 02:05:48', '2024-06-10 02:05:48'),
(9, 'Magret Yakuza', 'iggy@gmail.com', 2, NULL, NULL, NULL, NULL, NULL, '$2y$12$Di.puq4AQZc/Ybk3IBHb1ezNwL52/XqDXqtU3hSFcTVnpDVhljwd.', NULL, '2024-06-11 03:21:20', '2024-06-11 03:21:20'),
(10, 'Imman Tester', 'imma@gmail.com', 2, NULL, NULL, NULL, NULL, NULL, '$2y$12$SLxovluCq6xoWRH0XpOMCeIaevuOX3idAf3WBUxqxHUKW/yVQF3jC', NULL, '2024-06-12 08:20:10', '2024-06-12 08:20:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_post_id_foreign` (`post_id`);

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
-- Indexes for table `ltu_contributors`
--
ALTER TABLE `ltu_contributors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ltu_contributors_email_unique` (`email`);

--
-- Indexes for table `ltu_invites`
--
ALTER TABLE `ltu_invites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ltu_invites_email_unique` (`email`),
  ADD UNIQUE KEY `ltu_invites_token_unique` (`token`);

--
-- Indexes for table `ltu_languages`
--
ALTER TABLE `ltu_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ltu_languages_code_index` (`code`);

--
-- Indexes for table `ltu_phrases`
--
ALTER TABLE `ltu_phrases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ltu_phrases_translation_id_foreign` (`translation_id`),
  ADD KEY `ltu_phrases_translation_file_id_foreign` (`translation_file_id`),
  ADD KEY `ltu_phrases_phrase_id_foreign` (`phrase_id`);

--
-- Indexes for table `ltu_translations`
--
ALTER TABLE `ltu_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ltu_translation_files`
--
ALTER TABLE `ltu_translation_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_post_category_id_foreign` (`post_category_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_post_id_foreign` (`post_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `topics_slug_unique` (`slug`),
  ADD KEY `mwenye_topic` (`user_id`);

--
-- Indexes for table `topic_categories`
--
ALTER TABLE `topic_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `topic_categories_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_role_contstraint` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `ltu_contributors`
--
ALTER TABLE `ltu_contributors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ltu_invites`
--
ALTER TABLE `ltu_invites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ltu_languages`
--
ALTER TABLE `ltu_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `ltu_phrases`
--
ALTER TABLE `ltu_phrases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `ltu_translations`
--
ALTER TABLE `ltu_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ltu_translation_files`
--
ALTER TABLE `ltu_translation_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic_categories`
--
ALTER TABLE `topic_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `ltu_phrases`
--
ALTER TABLE `ltu_phrases`
  ADD CONSTRAINT `ltu_phrases_phrase_id_foreign` FOREIGN KEY (`phrase_id`) REFERENCES `ltu_phrases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ltu_phrases_translation_file_id_foreign` FOREIGN KEY (`translation_file_id`) REFERENCES `ltu_translation_files` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ltu_phrases_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `ltu_translations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_post_category_id_foreign` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`id`),
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `mwenye_topic` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_role_contstraint` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
