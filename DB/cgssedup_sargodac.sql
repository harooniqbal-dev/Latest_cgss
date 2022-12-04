-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 12:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgssedup_sargodac`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ocup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `name`, `ocup`, `descrip`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Ahmad Sher', 'No', 'I Ahmad Sher ex CGSS Student now doing automotive from Barkley College North Melbourne along with the bachelors degree of Information Technology from Victoria institute of Technology Melbourne Australia. I am very pleased to Share my views about my school which played a vital part in my progress. Today if i am competent amount other foreign students the credit only goes to my school CGSS which build my character physical and moral. I developed such a brilliant confidence to face the overseas world and due to this i earned a massive success in Australia. The question I have been  mostly asked that whats your School name only answer which i replied  is CGSS with water eyes while remembering all the struggle of my Teachers on me.  I would like to sum up that really i am very pleased to write this and saying the truth that there is no school as CGSS  which focus on both religion and world, due to this i am very close to my religion and away from sins in Australia. Thus I strongly recommend this school to all of you.  Thank you so much.', '1584879935.PNG', '2020-03-18 13:21:44', '2020-03-22 07:25:35'),
(3, 'Shahab-din-din', 'nu', 'I personally believe that CGSS is not just an educational institution. The focus laid on the personality and character building of the students has no match, and that is the reason connoisseurians shine where ever they go. I owe all my success to CGSS.', '1584555899.PNG', '2020-03-18 13:24:59', '2020-03-18 13:24:59'),
(5, 'Hashim Ahmad', NULL, 'CGSS ;my Almamater was one of the most resplendent things which happened to me in my life. Even today, the flashback of the memories makes me nostalgic. I still cherish the love lavished upon me by the faculty and the pain which they lay hold of in carving out a gentleman out of a shy toddler . I still feel pleasant when I visualize the enchantment of my teachers on each of my achievement. Today wherever I am is due to the relentless efforts of this prestigious institution and the love for it overwhelms my heart. May my almamater rise to heights of glory in the days to come.', '1597213084.jpeg', '2020-03-18 14:04:53', '2020-08-12 10:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `alumnips`
--

CREATE TABLE `alumnips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnips`
--

INSERT INTO `alumnips` (`id`, `student_name`, `placement`, `created_at`, `updated_at`) VALUES
(5, 'Saad Sohail', 'Engineer In Omman', '2020-05-14 00:29:20', '2020-05-14 00:29:20'),
(6, 'Komail', 'Engineer in Bol T.v', '2020-05-14 00:29:40', '2020-05-14 00:29:40'),
(7, 'Dr. Rao Muhammad Shargeel', 'Medical Officer  Incharge in Basic Health Facility in Sargodha', '2020-05-14 00:30:09', '2020-05-14 00:30:09'),
(8, 'Qasim Gill', 'Cadet in PMA', '2020-05-14 00:30:43', '2020-05-14 00:30:43'),
(9, 'Dr.Hammad Saleem', 'King Edward Medical University', '2020-05-14 00:31:05', '2020-05-14 00:31:05'),
(10, 'Shazaib', 'Computer Engineer  From GIK', '2020-05-14 00:31:28', '2020-05-14 00:31:28'),
(12, 'Dr. Qurat –ul Ain', 'Fatima Jinnah Medical college', '2020-08-12 09:56:41', '2020-08-12 09:56:41'),
(13, 'Dr. Maria Wajahat', 'Fatima Jinnah Medical college', '2020-08-12 09:57:05', '2020-08-12 09:57:05'),
(14, 'Dr. Alishba Cheema', 'Rai Medical college, Sargodha', '2020-08-12 09:57:42', '2020-08-12 09:57:42'),
(15, 'Aimen Ishfaq', 'National university of science & technology', '2020-08-12 09:58:03', '2020-08-12 09:58:03'),
(16, 'Inshaal Wajahat', 'Lahore university of management science (LUMS),London school of economics', '2020-08-12 09:58:22', '2020-08-12 09:58:22'),
(17, 'Dr. Aqsa Naizi', 'DPT, university of Faisalabad', '2020-08-12 09:58:41', '2020-08-12 09:58:41'),
(18, 'Aqsa Waheed', 'Business studies at Forman Christian college (FCC) Lahore', '2020-08-12 09:59:04', '2020-08-12 09:59:04'),
(19, 'Dr. Faheela Arshad', 'King Edward medical university, Lahore', '2020-08-12 09:59:26', '2020-08-12 09:59:26'),
(20, 'Iman Afzal', 'Ghulam Ishaq Khan Institute (GIKI', '2020-08-12 09:59:48', '2020-08-12 09:59:48'),
(21, 'Dr. Zuliakha Shah Nawaz', 'Lahore medical & dental college (LMDC)', '2020-08-12 10:00:06', '2020-08-12 10:00:06'),
(22, 'Dr. Zunaira Akram', 'combined military hospital ( CMH)', '2020-08-12 10:00:27', '2020-08-12 10:00:27'),
(23, 'Dr. Maham Atique', 'Junior Data Scientist at MTBC', '2020-08-12 10:00:47', '2020-08-12 10:00:47'),
(24, 'Munneba Sirshaar', 'Junior Data Scientist at MTBC', '2020-08-12 10:01:13', '2020-08-12 10:01:13'),
(25, 'Dr. Areeba Naseem', 'combined military hospital ( CMH)', '2020-08-12 10:01:32', '2020-08-12 10:01:32'),
(26, 'Rida Mukhtar', 'Web developer in Germany', '2020-08-12 10:03:35', '2020-08-12 10:03:35'),
(27, 'Dr. Ayesha Arshad', 'Medical Student in California', '2020-08-12 10:04:30', '2020-08-12 10:04:30'),
(28, 'Dr. Zoha Haider', 'Lahore medical & dental college (LMDC)', '2020-08-12 10:04:59', '2020-08-12 10:04:59'),
(29, 'Dr. Maham Qadoos', 'Army Medical College Rawalpindi', '2020-08-12 10:05:22', '2020-08-12 10:05:22'),
(30, 'Dr. INshaal Nasir', 'Sargodha Medical College , Sargodha', '2020-08-12 10:05:51', '2020-08-12 10:05:51'),
(31, 'Dr. Aliza Mustaq', 'King Edward medical university, Lahore', '2020-08-12 10:06:20', '2020-08-12 10:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `aolevel`
--

CREATE TABLE `aolevel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biomath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_Grades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `busniess` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aolevel`
--

INSERT INTO `aolevel` (`id`, `year`, `name`, `phy`, `chem`, `biomath`, `class`, `total_Grades`, `created_at`, `updated_at`, `busniess`) VALUES
(4, 2019, 'Ahmad Hassan', NULL, NULL, NULL, 'O_level', '4A,3B', '2020-04-12 22:11:50', '2020-08-24 08:55:13', NULL),
(5, 2019, 'Miswall Willani', NULL, NULL, NULL, 'O_level', '6A,2B', '2020-04-12 22:12:23', '2020-08-24 08:56:27', NULL),
(6, 2019, 'Shazia Fatima', NULL, NULL, NULL, 'O_level', '2A,3A,3B', '2020-04-12 22:13:03', '2020-04-12 22:13:03', NULL),
(7, 2018, 'Fakhra Ahmad', NULL, NULL, NULL, 'O_level', 'Straight As', '2020-04-12 22:14:04', '2020-04-12 22:14:04', NULL),
(8, 2018, 'Aiman Malik', NULL, NULL, NULL, 'O_level', 'Straight As', '2020-04-12 22:15:02', '2020-04-12 22:15:02', NULL),
(9, 2017, 'Muhammad Umer', NULL, NULL, NULL, 'O_level', 'Straight As', '2020-04-12 22:17:18', '2020-04-12 22:17:18', NULL),
(10, 2010, 'Rao Muhammad Sharjeel', NULL, NULL, NULL, 'O_level', 'Straight As', '2020-04-12 22:20:04', '2020-08-24 08:56:51', NULL),
(17, 2010, 'Anum Mazhar', NULL, NULL, NULL, 'O_level', '7As', '2020-04-13 18:12:37', '2020-08-28 10:32:14', NULL),
(18, 2010, 'Ayesha Arshad', NULL, NULL, NULL, 'O_level', 'Straight As', '2020-04-13 18:13:16', '2020-08-28 10:32:46', NULL),
(19, 2015, 'Syed Rubaba Shah', NULL, NULL, NULL, 'O_level', '2A &amp; 5 A', '2020-04-13 19:45:21', '2020-08-28 10:33:15', NULL),
(20, 2015, 'Shanzay Saleem', NULL, NULL, NULL, 'O_level', '3A &amp; 3 A', '2020-04-13 19:45:49', '2020-08-28 10:33:43', NULL),
(21, 2016, 'Zeeshan Aman Waraich', NULL, NULL, NULL, 'O_level', '6A &amp; 2A', '2020-04-13 19:47:06', '2020-08-28 10:34:06', NULL),
(22, 2016, 'Shanzay Abbas', NULL, NULL, NULL, 'O_level', 'A*', '2020-04-13 19:47:31', '2020-08-28 10:34:22', NULL),
(24, 2016, 'Shanza Fatima', NULL, NULL, NULL, 'O_level', '$A', '2020-04-13 19:57:51', '2020-08-28 10:34:43', NULL),
(27, 2010, 'yaseen', NULL, NULL, NULL, 'O_level', 'Straight As', '2020-08-26 01:01:48', '2020-08-28 10:34:59', NULL),
(29, 2020, 'Fakhra Ahmad', 'A*', 'A*', 'A*/A*', 'A_level', 'Straight 4* A', '2020-08-28 10:36:57', '2020-09-11 08:36:22', NULL),
(35, 2020, 'Mustafa Rasheed', NULL, NULL, NULL, 'O_level', '8*A', '2020-09-11 08:23:19', '2020-09-11 08:23:19', NULL),
(36, 2020, 'Fatima Asif', NULL, NULL, NULL, 'O_level', '8*A', '2020-09-11 08:23:48', '2020-09-11 08:23:48', NULL),
(37, 2020, 'Rao Muhammad Hassan', NULL, NULL, NULL, 'O_level', '7*A, 1A', '2020-09-11 08:24:38', '2020-09-11 08:24:38', NULL),
(38, 2020, 'Muhammad Ali Naqi', NULL, NULL, NULL, 'O_level', '7*A,1B', '2020-09-11 08:25:19', '2020-09-11 08:31:01', NULL),
(39, 2020, 'Jannat Barkaat', NULL, NULL, NULL, 'O_level', '5*A,3As', '2020-09-11 08:25:56', '2020-09-11 08:25:56', NULL),
(40, 2020, 'Muhammad Abdul Rafay', NULL, NULL, NULL, 'O_level', '1A*, 7As', '2020-09-11 08:26:36', '2020-09-11 08:26:36', NULL),
(41, 2020, 'Muhammad Haris Malik', NULL, NULL, NULL, 'O_level', '7As, 1B', '2020-09-11 08:27:09', '2020-09-11 08:27:09', NULL),
(42, 2020, 'Farhan Asif Awan', NULL, NULL, NULL, 'O_level', '6As, 2B', '2020-09-11 08:27:44', '2020-09-11 08:27:44', NULL),
(43, 2018, 'Tansha Fatima', 'A', 'B', 'A*', 'A_level', 'A*, A, B', '2020-09-11 08:43:08', '2020-09-11 08:43:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aoyear`
--

CREATE TABLE `aoyear` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `yearao` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aoyear`
--

INSERT INTO `aoyear` (`id`, `yearao`, `created_at`, `updated_at`) VALUES
(7, 2019, '2020-04-13 11:14:41', '2020-04-13 11:14:41'),
(8, 2018, '2020-04-13 11:14:51', '2020-04-13 11:14:51'),
(10, 2020, '2020-09-11 08:32:14', '2020-09-11 08:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `ayear`
--

CREATE TABLE `ayear` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `yearao` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ayear`
--

INSERT INTO `ayear` (`id`, `yearao`, `created_at`, `updated_at`) VALUES
(2, 2015, '2020-04-13 19:36:34', '2020-04-13 19:36:34'),
(5, 2020, '2020-08-28 10:57:57', '2020-08-28 10:57:57'),
(6, 2018, '2020-09-11 08:44:23', '2020-09-11 08:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contactor_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactor_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contactor_name`, `contactor_email`, `subject`, `message`, `view`, `created_at`, `updated_at`) VALUES
(7, 'Saqib', 'waseem2mahad@gmail.com', 'New admission', '7th or 3 class  admission fee bta den \r\nRegistration fee bhi bta den', 'true', '2020-07-06 10:44:49', '2020-07-15 20:23:53'),
(8, 'Muhammad Umair', 'mumair061@gmail.com', 'For Job details', 'Is their any job for Computer teacher , lab or web developer?', 'true', '2020-07-19 14:13:40', '2020-07-22 09:22:40'),
(9, 'Memoona Maqbool', 'memoomamaqbool123@gmail.com', 'Online internship program', 'Sir!\r\nI want to apply for online internship program of Azerbaijan.kindly tell me pricedure', 'true', '2020-07-28 22:05:11', '2020-08-07 15:03:36'),
(10, 'Zunaira Arif', 'zunairaarif903@gmail.com', 'Cv', 'Sir i want to drop my cv . Can you guide me that can i drop at your email ?', 'true', '2020-07-29 20:07:55', '2020-08-07 15:03:36'),
(11, 'Iqra Abbas', 'iqra.abbas1994@gmail.com', 'Job', 'Is there any job vacancies for computer science?? Kindly, inform me. So, I can drop my CV for job. I\'m waiting for your reply. Thank you 😊', 'true', '2020-08-10 14:19:01', '2020-08-11 14:23:04'),
(12, 'Rana Shahid Habib', 'shahidhabibrana@hotmail.com', 'For Kids Admission', 'Asslamoo Alaikum\r\nCould you please provide admission schedule for class Grade 1, Grade 2 and Grade 3 with fee structure?\r\n\r\nJazak Allah', 'true', '2020-08-15 16:49:09', '2020-08-24 08:41:07'),
(13, 'DavidmIg', 'abelbreath456@gmail.com', 'Become Famous on Facebook', 'Looking for Facebook likes or Instagram followers? \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', 'true', '2020-08-20 04:46:44', '2020-08-24 08:41:07'),
(14, 'Fatima Zahra', 'fazain5555@gmail.com', 'Info regarding admission in O\'level', 'Plz update regarding admission procedure for O\'levels, fee structure and schedule for the classes.\r\nThanks', 'true', '2020-09-01 13:23:20', '2020-09-17 09:19:10'),
(15, 'Usman Bukhari', 'usmanb4887@gmail.com', 'Addmission for Nursery Class', 'i want to check the admission criteria for my son', 'true', '2020-10-07 12:50:06', '2020-10-29 08:41:09'),
(16, 'Ramish', 'rsm6551@gmail.com', 'Fee structure', 'Hi,\r\nPlease tell me fee struck for matriculation and Intermediate', 'true', '2020-10-11 19:28:19', '2020-10-29 08:41:09'),
(17, 'Charlesgrepe', 'markandrew897@gmail.com', 'Get more Facebook likes', 'Gооd dаy! \r\nLooking for Facebook likes, Instagram followers or Google Reviews? \r\nWe can help you. Please visit https://1000-likes.com to place your order.', 'true', '2020-11-19 11:44:14', '2021-02-09 07:55:18'),
(18, 'Peter Scott', 'no-replyStymn@gmail.com', 'Make any Ranks go DOWN', 'Good Day \r\n \r\nCompetition not playing the game fair and square? \r\nNow you can fight back. \r\n \r\nNegative SEO, to make ranks go down \r\nhttps://blackhat.to/ \r\n \r\nContact us for any queries: \r\nsupport@blackhat.to', 'true', '2020-12-28 18:17:02', '2021-02-09 07:55:18'),
(19, 'Syed Tahir Hassan Shah', 'shahmust_6@yahoo.com', 'Admission', 'When new admissions will starts? can you share your prospectus on following email....', 'true', '2021-01-05 01:25:19', '2021-02-09 07:55:18'),
(20, 'David Song', 'noreply@googlemail.com', 'PROJECT FUNDING', 'Hello, \r\nOur Investors wishes to invest in your company by offering debt financing in any viable Project presented by your Management,Kindly send your Business Project Presentation Plan Asap. \r\n \r\ndavidsong2030@gmail.com \r\n \r\nRegards, \r\nMr.David Song', 'true', '2021-02-04 14:35:13', '2021-02-09 07:55:18'),
(21, 'Qurat ul ain', 'GGHSPHULARWAN1@GMAIL.COM', 'HIFZ INFORMATION', 'PLZ GIVE UR MOBILE NO I WNAT TO TAKE INFO ABOUT HIFZ IN WHICH CLASS U REGISTERED KID FOR HIFZ AND WHAT ARE TIMING FOR HIFZ STUDENTS', 'true', '2021-02-26 02:08:21', '2021-03-06 09:55:22'),
(22, 'Alexander Alan', 'alexander466alan@gmail.com', 'Purchase likes and follower', 'Looking for Facebook likes or Instagram followers? \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.', 'false', '2021-03-27 02:13:26', '2021-03-27 02:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_short` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_date`, `event_short`, `event_description`, `event_image`, `created_at`, `updated_at`) VALUES
(4, 'Example 1', '2020-05-04', 'Open games are held for competitions', NULL, '1588274230.jpg', '2020-04-11 19:25:09', '2020-04-30 23:17:18'),
(8, 'Example 2(Long)', '2020-05-07', 'Open games are held for competitions', 'CGSS my Almamater was one of the most resplendent things which happened to me in my life. Even today, the flashback of the memories makes me nostalgic. I still cherish the love lavished upon me by the faculty and the pain which they lay hold of in carving out a gentleman out of a shy toddler . I still feel pleasant when I visualize the enchantment of my teachers on each of my achievement. Today wherever I am is due to the relentless efforts of this prestigious institution and the love for it overwhelms my heart. May my almamater rise to heights of glory in the days to come.', '1588274355.jpg', '2020-04-11 21:19:44', '2020-04-30 23:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fbiase`
--

CREATE TABLE `fbiase` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fbiase_year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fbiase`
--

INSERT INTO `fbiase` (`id`, `fbiase_year`, `created_at`, `updated_at`) VALUES
(11, 2018, '2020-07-25 13:26:11', '2020-07-25 13:26:11'),
(12, 2019, '2020-07-25 13:26:17', '2020-07-25 13:26:17'),
(14, 2020, '2020-08-24 08:50:04', '2020-08-24 08:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_id` bigint(20) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title_id`, `photo`, `created_at`, `updated_at`) VALUES
(4, 6, '1588273345.jpg', '2020-04-30 23:02:25', '2020-04-30 23:02:25'),
(6, 6, '1588273481.jpg', '2020-04-30 23:04:41', '2020-04-30 23:04:41'),
(7, 6, '1588273594.jpg', '2020-04-30 23:06:34', '2020-04-30 23:06:34'),
(8, 6, '1588273618.jpg', '2020-04-30 23:06:58', '2020-04-30 23:06:58'),
(9, 6, '1588273641.jpg', '2020-04-30 23:07:21', '2020-04-30 23:07:21'),
(10, 6, '1588273663.jpg', '2020-04-30 23:07:43', '2020-04-30 23:07:43'),
(11, 6, '1588273686.jpg', '2020-04-30 23:08:06', '2020-04-30 23:08:06'),
(12, 4, '1588273736.JPG', '2020-04-30 23:09:01', '2020-04-30 23:09:01'),
(13, 4, '1588273785.JPG', '2020-04-30 23:09:45', '2020-04-30 23:09:45'),
(14, 4, '1588273827.jpg', '2020-04-30 23:10:27', '2020-04-30 23:10:27'),
(15, 5, '1588273877.jpg', '2020-04-30 23:11:17', '2020-04-30 23:11:17'),
(16, 5, '1588273895.jpg', '2020-04-30 23:11:35', '2020-04-30 23:11:35'),
(17, 5, '1588273922.jpg', '2020-04-30 23:12:02', '2020-04-30 23:12:02'),
(18, 9, '1595404536.jpeg', '2020-07-22 11:55:36', '2020-07-22 11:55:36'),
(19, 9, '1597214377.jpeg', '2020-08-12 10:39:37', '2020-08-12 10:39:37'),
(22, 9, '1599327267.jpg', '2020-09-05 21:34:27', '2020-09-05 21:34:27'),
(23, 9, '1601008363.jpg', '2020-09-25 08:32:43', '2020-09-25 08:32:43'),
(24, 9, '1601008389.jpg', '2020-09-25 08:33:09', '2020-09-25 08:33:09'),
(25, 9, '1601008433.jpg', '2020-09-25 08:33:53', '2020-09-25 08:33:53'),
(26, 9, '1602053355.jpeg', '2020-10-07 10:49:15', '2020-10-07 10:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `iachievment`
--

CREATE TABLE `iachievment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medal_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iachievment`
--

INSERT INTO `iachievment` (`id`, `medal_type`, `year`, `institute`, `medal`, `created_at`, `updated_at`) VALUES
(1, 'gold medal', 2013, 'HRCA(ESSAY WRITING)', '1 Medal', '2020-03-22 15:40:49', '2020-09-30 11:15:03'),
(2, 'gold medal', 2016, 'IKSC', '1Medal', '2020-03-22 16:39:13', '2020-09-30 11:14:00'),
(4, 'gold medal', 2014, 'IKAC(Art)', '1 Medal', '2020-03-23 04:19:13', '2020-09-30 11:13:11'),
(5, 'gold medal', 2015, 'IKLC', '2  Medals', '2020-03-23 04:19:42', '2020-09-30 11:09:11'),
(6, 'silver medal', 2016, 'CEATS (Math), HRCA (Science), IKLC', '18 Medal', '2020-03-23 04:36:54', '2020-09-30 11:01:39'),
(7, 'bronze medal', 2015, 'IKLC', '2 Medals', '2020-03-23 04:37:25', '2020-09-30 11:18:55'),
(8, 'bronze medal', 2016, 'IKLC, IKSC, CEATS (Math),HRCA( Science)', '14 Medals', '2020-03-23 04:38:21', '2020-09-30 11:06:52'),
(9, 'bronze medal', 2019, 'IKSC', '12  Medals', '2020-03-23 04:39:06', '2020-09-30 10:57:46'),
(10, 'bronze medal', 2017, 'CEATS(Math)/IKLC', '31 Shields/    12 Medal', '2020-03-23 04:39:33', '2020-09-30 11:05:44'),
(12, 'gold medal', 2017, 'IKLC', '1  Medal', '2020-05-01 15:03:40', '2020-09-30 11:11:14'),
(13, 'silver medal', 2018, 'HRCA (Science), IKLC', '12  Medal', '2020-09-30 10:35:14', '2020-09-30 10:58:48'),
(14, 'bronze medal', 2018, 'IKLC, IKSC, HRCA', '21 Medals', '2020-09-30 10:54:34', '2020-09-30 10:54:34'),
(15, 'gold medal', 2018, 'IKLC, IKSC', '9 Medals', '2020-09-30 11:17:34', '2020-09-30 11:17:34'),
(16, 'gold medal', 2019, 'IKSC', '2 Medals', '2020-09-30 11:17:59', '2020-09-30 11:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `machievment`
--

CREATE TABLE `machievment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machievment`
--

INSERT INTO `machievment` (`id`, `name`, `marks`, `year`, `total_marks`, `created_at`, `updated_at`) VALUES
(3, 'Khadija Kanwal', 1027, 2017, NULL, '2020-03-29 13:40:03', '2020-03-29 13:40:03'),
(4, 'Fatima Amjad', 1025, 2017, NULL, '2020-03-29 13:40:30', '2020-03-29 13:40:30'),
(5, 'Yusra', 1019, 2017, NULL, '2020-03-29 13:40:47', '2020-03-29 13:40:47'),
(6, 'Shehzeed tariq', 1034, 2017, NULL, '2020-03-29 13:55:26', '2020-07-15 20:25:16'),
(9, 'Maheen', 1011, 2017, NULL, '2020-07-15 20:26:12', '2020-07-15 20:26:12'),
(10, 'Amna Shahzad', 986, 2017, NULL, '2020-07-15 20:26:29', '2020-07-15 20:26:29'),
(11, 'Laiba Khalid', 1064, 2018, NULL, '2020-07-15 20:26:50', '2020-07-15 20:26:50'),
(12, 'Mahnoor', 1053, 2018, NULL, '2020-07-15 20:27:10', '2020-07-15 20:27:10'),
(13, 'Aiman Iqbal', 1049, 2018, NULL, '2020-07-15 20:27:30', '2020-07-15 20:27:30'),
(14, 'Haris ALi', 1041, 2018, NULL, '2020-07-15 20:27:54', '2020-07-15 20:27:54'),
(15, 'Amna ALi', 1039, 2018, NULL, '2020-07-15 20:28:14', '2020-07-15 20:28:14'),
(16, 'Maleeka Fajar', 1032, 2018, NULL, '2020-07-15 20:28:41', '2020-07-15 20:28:41'),
(17, 'Muhammad Ahmed', 1075, 2019, NULL, '2020-07-15 20:29:13', '2020-07-15 20:29:13'),
(18, 'M. Haroon Yasir', 1068, 2019, NULL, '2020-07-15 20:29:56', '2020-07-15 20:29:56'),
(19, 'M. Muneed Ahmad', 1068, 2019, NULL, '2020-07-15 20:31:05', '2020-07-15 20:31:05'),
(20, 'Mishal Fatima', 1061, 2019, NULL, '2020-07-15 20:33:15', '2020-07-15 20:33:15'),
(21, 'M. Arsal', 1058, 2018, NULL, '2020-07-15 20:33:33', '2020-07-15 20:33:33'),
(22, 'Taimoor Ikram', 1057, 2019, NULL, '2020-07-15 20:34:14', '2020-07-15 20:34:14'),
(23, 'Talha Jamil', 1055, 2019, NULL, '2020-07-15 20:34:55', '2020-07-15 20:34:55'),
(24, 'm. Arslan Afzal', 1038, 2019, NULL, '2020-07-15 20:35:18', '2020-07-15 20:35:18'),
(25, 'Aliha Tahir', 1032, 2019, NULL, '2020-07-15 20:36:04', '2020-07-15 20:36:04'),
(26, 'M. Shah Bakt', 1014, 2019, NULL, '2020-07-15 20:36:29', '2020-07-15 20:36:29'),
(27, 'Hira Iqbal', 1001, 2019, NULL, '2020-07-15 20:39:57', '2020-07-15 20:39:57'),
(28, 'Fizza Sultan', 1001, 2019, NULL, '2020-07-15 20:40:27', '2020-07-15 20:40:27'),
(29, 'Abdul Adad Amir', 990, 2019, NULL, '2020-07-15 20:40:50', '2020-07-15 20:40:50'),
(30, 'Muqeet Husnain', 1024, 2018, NULL, '2020-07-15 20:41:09', '2020-07-15 20:41:09'),
(31, 'Tehreem Fatima', 1023, 2018, NULL, '2020-07-15 20:41:26', '2020-07-15 20:41:26'),
(32, 'Shayan Javeed', 1017, 2018, NULL, '2020-07-15 20:42:01', '2020-07-15 20:42:01'),
(33, 'M. Nouman Sharif', 1006, 2018, NULL, '2020-07-15 20:42:26', '2020-07-15 20:42:26'),
(34, 'Faiza Zafar', 1001, 2018, NULL, '2020-07-15 20:42:43', '2020-07-15 20:42:43'),
(35, 'Hajra Afzal', 1000, 2018, NULL, '2020-07-15 20:43:12', '2020-07-15 20:43:12'),
(36, 'Areema Chaudhry', 985, 2017, NULL, '2020-07-15 20:44:21', '2020-07-15 20:44:21'),
(37, 'Abdul Rehman', 954, 2017, NULL, '2020-07-15 20:44:41', '2020-07-15 20:44:41'),
(38, 'Mishal Faruki', 952, 2017, NULL, '2020-07-15 20:46:03', '2020-07-15 20:46:03'),
(39, 'Khadija Khifal', 1093, 2020, NULL, '2020-07-25 13:20:04', '2020-07-25 13:20:49'),
(40, 'Rutaba Qudoos Nizami', 1085, 2020, NULL, '2020-07-25 13:20:31', '2020-07-25 13:20:31'),
(41, 'Aramish Chaudhary', 1079, 2020, NULL, '2020-07-25 13:21:08', '2020-07-25 13:21:08'),
(42, 'Maaz Ur Rahman', 1071, 2020, NULL, '2020-07-25 13:21:58', '2020-07-25 13:21:58'),
(43, 'Awab Hafeez', 1071, 2020, NULL, '2020-07-25 13:22:09', '2020-07-25 13:22:09'),
(44, 'Abdul Moiz', 1059, 2020, NULL, '2020-07-25 13:22:26', '2020-07-25 13:22:26'),
(45, 'M Baidar Bakht', 1059, 2020, NULL, '2020-07-25 13:22:42', '2020-07-25 13:22:42'),
(46, 'Hooria Eeman', 1059, 2020, NULL, '2020-07-25 13:22:52', '2020-07-25 13:22:52'),
(47, 'Amara Akhtar', 1054, 2020, NULL, '2020-07-25 13:23:04', '2020-07-25 13:23:04'),
(48, 'M Dawood Ahmad Ranjha', 1038, 2020, NULL, '2020-07-25 13:23:17', '2020-07-25 13:23:17'),
(49, 'Hassan Ali', 1037, 2020, NULL, '2020-07-25 13:23:32', '2020-07-25 13:23:32'),
(50, 'Alisha Maryam', 1023, 2020, NULL, '2020-07-25 13:23:48', '2020-07-25 13:23:48'),
(51, 'Mohsin Ali', 1021, 2020, NULL, '2020-07-25 13:24:02', '2020-07-25 13:24:02'),
(52, 'Noor Fatima', 1014, 2020, NULL, '2020-07-25 13:24:12', '2020-07-25 13:24:12'),
(53, 'M Waqas Tahir', 1014, 2020, NULL, '2020-07-25 13:24:22', '2020-07-25 13:24:22'),
(54, 'M Hammad ur Rehman', 1010, 2020, NULL, '2020-07-25 13:24:35', '2020-07-25 13:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE `marquee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `Description`, `Active`, `created_at`, `updated_at`) VALUES
(1, '<h3>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<h3><strong>&nbsp;First Position in FBISE&nbsp;2017 SSC-II Result</strong></h3>\r\n	</li>\r\n</ul>\r\n\r\n<pre>\r\n                 <span class=\"marker\"><strong>SHEZEEN TARIQ</strong></span> scored <span class=\"marker\">1st  position</span> in FBISE 2017\r\n                 <strong><span class=\"marker\">KHADIJA KANWAL</span> </strong>scored <span class=\"marker\">5th position</span> &amp; \r\n&nbsp;                <span class=\"marker\"><strong>FATIMA AMJAD</strong></span> got <span class=\"marker\">9th  position </span>in FBISE 2017</pre>\r\n\r\n<ul>\r\n	<li>\r\n	<h3><strong>Position in FBISE&nbsp;2020 SSC-II Result</strong></h3>\r\n	</li>\r\n</ul>\r\n\r\n<pre>\r\n<strong>          <span class=\"marker\">K</span></strong><span class=\"marker\"><strong>hadija Kifal</strong></span> Scored <span class=\"marker\">Fifth Position</span> in FBISE 2020.</pre>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>&nbsp;<strong>CAIE A Level Result 2020,</strong></h3>\r\n	</li>\r\n</ul>\r\n\r\n<pre>\r\n                <span class=\"marker\"> <strong>Fakhara Ahmad</strong></span> got straight<span class=\"marker\"> A*s</span></pre>\r\n\r\n<ul>\r\n	<li>\r\n	<h3><strong>CAIE O Level Result 2020, </strong></h3>\r\n	</li>\r\n</ul>\r\n\r\n<pre>\r\n<strong>          </strong><span class=\"marker\"><strong>Ghulam Mustafa Rasheed </strong></span>and <span class=\"marker\"><strong>Fatima Asif</strong></span> got S<span class=\"marker\">traight A*s</span></pre>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>', 1, NULL, '2021-01-07 00:00:07');

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
(4, '2020_03_02_160149_create_sargodas_table', 1),
(5, '2020_03_16_200132_create_alumni_table', 2),
(6, '2020_03_22_181049_create_iachievment_table', 3),
(7, '2020_03_22_195341_create_iachievment_table', 4),
(8, '2020_03_22_203633_create_iachievment_table', 5),
(9, '2020_03_28_170137_create_machievment_table', 6),
(10, '2020_03_29_214113_create_fbiase_table', 7),
(11, '2020_04_11_203324_create_event_table', 8),
(12, '2020_04_12_215348_create_aolevel_table', 9),
(13, '2020_04_12_222729_creat_aoyear_table', 10),
(14, '2020_04_12_232051_create_aoyear_table', 11),
(15, '2020_04_13_232607_create_ayear_table', 12),
(16, '2020_03_23_160106_create_contacts_table', 13),
(17, '2020_03_23_162330_create_training_sessions_table', 13),
(18, '2020_04_12_065701_create_publications_table', 13),
(19, '2020_04_15_164229_create_galleries_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Yaseeniqbal309@gmail.com', '$2y$10$JBGcvWUH2R9sm9FpsaLeeumvYmdV2pH0HFk8ZqW5iaKqBx4Ho4LHu', '2020-04-18 15:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `Name`, `photo`, `filename`, `created_at`, `updated_at`) VALUES
(6, 'CGSS Books', 'CGSS.png', 'CGSS.pdf', '2020-09-11 08:18:52', '2020-09-18 07:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `sargodas`
--

CREATE TABLE `sargodas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sargodas`
--

INSERT INTO `sargodas` (`id`, `name`, `email`, `post`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Yaseen Iqbal', 'Yaseeniqbal309@gmail.com', '6000', '1583765275.PNG', '2020-03-09 09:47:55', '2020-03-09 09:47:55'),
(2, 'Yaseen Iqbal', 'Yaseeniqbal309@gmail.com', '6000', '1583765417.PNG', '2020-03-09 09:50:17', '2020-03-09 09:50:17'),
(3, 'Yaseen Iqbal 2', 'Yaseeniqbal444@gmail.com', '22222', '1583772251.jpg', '2020-03-09 11:44:11', '2020-03-09 11:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `Title`, `created_at`, `updated_at`) VALUES
(4, 'Dastar Bandi', '2020-04-30 23:00:47', '2020-04-30 23:00:47'),
(5, 'Sports Day', '2020-04-30 23:01:18', '2020-04-30 23:01:18'),
(6, 'Educational Fair', '2020-04-30 23:01:55', '2020-04-30 23:01:55'),
(7, 'new', '2020-05-01 15:31:54', '2020-05-01 15:31:54'),
(8, 'sports', '2020-05-02 19:03:30', '2020-05-02 19:03:30'),
(9, 'Achievments', '2020-07-22 11:53:42', '2020-07-22 11:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `training_sessions`
--

CREATE TABLE `training_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `Teacher` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subject` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Level` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_sessions`
--

INSERT INTO `training_sessions` (`id`, `year`, `Teacher`, `Subject`, `Level`, `created_at`, `updated_at`) VALUES
(3, 2013, 'Nasira Batool', 'Montessori', 'Pakistan Montessori Council', '2020-05-01 01:21:18', '2020-05-01 01:21:18'),
(4, 2014, 'Ali Raza', 'Math (4024)', 'O ‘ Level', '2020-05-01 01:25:10', '2020-05-01 01:25:10'),
(5, 2015, 'Ali Raza', 'Math (9709)', 'AS & A level', '2020-05-01 01:26:55', '2020-05-01 18:35:42'),
(6, 2016, 'Ali Raza', 'Math (4024)', 'AS & A level', '2020-05-01 01:27:42', '2020-05-01 01:27:42'),
(7, 2017, 'Sadaf Zahra', 'English', 'Secondary English Language Teaching Advanced', '2020-05-01 01:28:42', '2020-05-01 01:28:42'),
(8, 2017, 'Fahmeen Khan', 'English', 'British Council Online Teaching Course', '2020-05-01 01:40:14', '2020-05-01 01:40:14'),
(11, 2018, 'Fauzia Khan', 'Islamiat ( 2058)', 'O’ Level', '2020-05-01 02:02:45', '2020-05-01 02:22:33'),
(12, 2018, 'Fauzia Khan', 'English ( 1123)', 'O’ Level', '2020-05-01 02:23:20', '2020-05-01 02:23:20'),
(13, 2018, 'Fauzia Khan', 'Seminar', 'Engaging with Vocabulary teaching & understanding speaking', '2020-05-01 02:24:22', '2020-05-01 02:24:22'),
(14, 2018, 'Ayesha Shabbir', 'null', 'Enrichment Metacognition & Effective classroom', '2020-05-01 02:25:45', '2020-05-01 02:25:45'),
(15, 2018, 'Zunaira Bajwa', 'null', 'Enrichment Metacognition & Effective classroom', '2020-05-01 02:26:30', '2020-05-01 02:26:30'),
(16, 2018, 'Ali Raza', 'Math (4024)', 'O ‘ Level', '2020-05-01 02:27:13', '2020-05-01 02:27:13'),
(17, 2018, 'Ali Raza', 'Math (9709)', 'AS & A level', '2020-05-01 02:27:52', '2020-05-01 02:27:52'),
(18, 2018, 'Asma Khalid', 'Biology(5090)', 'O’ Level', '2020-05-01 02:28:22', '2020-05-01 02:28:22'),
(19, 2018, 'Ayesha Ahsan', 'Chemistry(9701)', 'AS & A Level', '2020-05-01 02:29:34', '2020-05-01 02:29:34'),
(20, 2018, 'Ayesha Ahsan', 'Chemistry(5070)', 'O’ level', '2020-05-01 02:30:06', '2020-05-01 02:30:06'),
(21, 2018, 'Imram Haider', 'Physics (5054)', 'O’Level', '2020-05-01 02:30:36', '2020-05-01 02:30:36'),
(22, 2019, 'Asma Khalid', 'Biology(5090)', 'O’ Level', '2020-05-01 02:31:19', '2020-05-01 02:31:19'),
(23, 2019, 'Ayesha Maqsood', 'Physics (9702)', 'AS & A level', '2020-05-01 02:32:04', '2020-05-01 02:32:04'),
(24, 2019, 'Ayesha Maqsood', 'Physics (5054)', 'O’ Level', '2020-05-01 02:32:44', '2020-05-01 02:32:44'),
(27, 2015, 'Naseem Iftikhar', 'Islamiat (2058)', 'O ‘ Level', '2020-05-01 18:36:26', '2020-05-01 18:36:26'),
(28, 2015, 'Rabia Jehan', 'Math (4024)', 'O ‘ Level', '2020-05-01 18:37:14', '2020-05-01 18:37:14'),
(29, 2015, 'Ayesha Ahsan', 'Biology (5090)', 'O ‘ Level', '2020-05-01 18:37:57', '2020-05-01 18:37:57');

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
(1, 'yaseen', 'Yaseeniqbal309@gmail.com', NULL, '$2y$10$0FDQMP53pLSLu.LvcQSOsOYOpQ6Qdx1W0pWNM9uOAY8.sB/8aF0Oe', NULL, '2020-04-15 20:54:54', '2020-04-15 20:54:54'),
(2, 'CGSS admin', 'cgss.sargodha@gmail.com', NULL, '$2y$10$Lu.pBDSyoZfM5RifD0v5xeEqlFDLll9hWlfqMyOu9hc7e3h7bZMYe', 'dBFAponwPvfv5u2xH3afLSyI47y2s3CPV6O1kTpheO8D7l7TZ0Qzn5xTST4T', '2020-04-28 21:54:54', '2020-04-29 19:09:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumnips`
--
ALTER TABLE `alumnips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aolevel`
--
ALTER TABLE `aolevel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aoyear`
--
ALTER TABLE `aoyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayear`
--
ALTER TABLE `ayear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fbiase`
--
ALTER TABLE `fbiase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iachievment`
--
ALTER TABLE `iachievment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machievment`
--
ALTER TABLE `machievment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sargodas`
--
ALTER TABLE `sargodas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titles_title_unique` (`Title`);

--
-- Indexes for table `training_sessions`
--
ALTER TABLE `training_sessions`
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
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `alumnips`
--
ALTER TABLE `alumnips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `aolevel`
--
ALTER TABLE `aolevel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `aoyear`
--
ALTER TABLE `aoyear`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ayear`
--
ALTER TABLE `ayear`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fbiase`
--
ALTER TABLE `fbiase`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `iachievment`
--
ALTER TABLE `iachievment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `machievment`
--
ALTER TABLE `machievment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sargodas`
--
ALTER TABLE `sargodas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `training_sessions`
--
ALTER TABLE `training_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
