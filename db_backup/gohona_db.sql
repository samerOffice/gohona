-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 02:57 PM
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
-- Database: `gohona_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_terms_and_conditions`
--

CREATE TABLE `booking_terms_and_conditions` (
  `id` int(11) NOT NULL,
  `terms` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_terms_and_conditions`
--

INSERT INTO `booking_terms_and_conditions` (`id`, `terms`, `created_at`, `updated_at`) VALUES
(1, '<p><span style=\"font-size:10px;\">১) ক্যাশ মেমো ছাড়া কোন আপত্তি বা পরিবর্তন গ্রহনযোগ্য হবে না।&nbsp;২) স্বর্ণের মূল্য বাংলাদেশ জুয়েলারী সমিতি থেকে নির্ধারন করে দেয়া হয় যা জুয়েলারী সমিতির সদস্য হিসেবে আমাদের অনুসরন করতে হয়। ৩) ক্রেতা পন্য ও পন্যের ওজন, হলর্মাক, ডিজাইন দেখে ক্রয় বা বুকিং করবেন এবং কোন সমস্যা হলে শোরুম কর্তৃপক্ষকে জানাবেন এবং কর্তৃপক্ষ যথাযথ সমাধান করবেন। পরবর্তীতে কোন আপত্তি গ্রহনযোগ্য নয়। ৪) কোন ধরনের শারীরিক সমস্যাবা ক্যামিকেল জাতীয় কোন ধরনের দ্রব্য ব্যবহারের কারনে রং পরিবর্তন হলে বিক্রেতা দায়ী থাকবে না।&nbsp;&nbsp;৫) ৭ দিনের মধ্যে বুকিং বাতিল করেন তাহলে কোনো টাকা কাটা যাবে না। ৬) বুকিং করার ৭ দিনের পর বুকিং বাতিল করলে জমাকৃত টাকার ২০% টাকা বাদ দিয়ে ৭ দিন পর টাকা ফেরত দেয়া হবে। ৭) বুকিং বাতিল করার পর যদি ক্রেতা টাকা ফেরত না নিয়ে বুকিংকৃত পন্যের মোট মূল্যের বেশি মূল্যের কোন পন্য ক্রয় করেন বা বুকিং দেন তাহলে কোন টাকা কাটা যাবে না।&nbsp;৮) বুকিং করার সময়ই পন্যের মোট মূল্য নির্ধারন করা হয়ে যাবে, পরে যদি কোন রেট কম বা বেশি হয় তবে তা ক্রেতা বা বিক্রেতা কেউই কোন আপত্তি করতে পারবে না।&nbsp; ৯) সরকারী ও বাজুস এর ক্রয় বিক্রয় নির্দেশনা ও&nbsp;নীতিমালা মোতাবেক ক্রেতা নির্দেশনা ও&nbsp;নীতিমালা অনুসরন না করলে বিক্রেতাকে কোনভাবেই নিয়ম বা নীতি মানতে বাধ্য করতে পারবে না। ১০) বাজুস এর ক্রয় বিক্রয় নির্দেশনা ও&nbsp;&nbsp;নীতিমালা মোতাবেক পন্য বুকিং এর কোন নির্দেশনা ও&nbsp;নীতিমালা নাই। সে ক্ষেত্রে বিক্রেতার উপর নির্ভর করে বিক্রেতা ক্রেতার পন্য ক্রয়ের সুবিধার জন্য বুকিং রাখে বা রাখার ব্যবস্থা করে।&nbsp;</span><br type=\"_moz\"></p><p><span style=\"font-size:10px;\">১১) ক্রেতার সুবির্ধাতে ও সম্মতিতে পন্য বুকিং করা হলোঃ</span></p><p><span style=\"font-size:10px;\">১) রেট এবং মোট মূল্য ফিক্স করে অগ্রিম প্রদান করে বুকিং এর তারিখ হতে ১৫ দিনের মধ্যে পন্য ডেলিভারী নেয়ার জন্য বুকিং করা হলো। --------------</span></p><p><span style=\"font-size:10px;\">২) রেট এবং মোট মূল্য ফিক্স না করে আনুমানিক মূল্য ধরে অগ্রিম প্রদান করে বুকিং এর তারিখ হতে ৩০/৪৫ দিনের মধ্যে পন্য ডেলিভারী নেয়ার জন্য বুকিং করা হলো। <br></span><br></p>', '2024-05-13 13:34:12', '2024-05-13 13:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_categories`
--

CREATE TABLE `customer_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 2 COMMENT '1=active, 2=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_categories`
--

INSERT INTO `customer_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test category 1', 1, '2024-05-09 11:40:42', '2024-05-09 11:40:42'),
(2, 'test category 2', 1, '2024-05-09 11:47:36', '2024-05-09 11:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `division_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', '22.65561018', '92.17541121', 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', 'কক্সবাজার', '21.44315751', '91.97381741', 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', 'রাজশাহী', '24.37230298', '88.56307623', 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', 'জয়পুরহাট', '25.09636876', '89.04004280', 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', 'নওগাঁ', '24.83256191', '88.92485205', 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', 'সাতক্ষীরা', '22.7180905', '89.0687033', 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', '22.6422689', '90.2003932', 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', 'পিরোজপুর', '22.5781398', '89.9983909', 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', 'বরিশাল', '22.7004179', '90.3731568', 'www.barisal.gov.bd'),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', 'বরগুনা', '22.159182', '90.125581', 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', 'শরীয়তপুর', '23.2060195', '90.3477725', 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', 'টাঙ্গাইল', '24.264145', '89.918029', 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', '23.8602262', '90.0018293', 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', '23.5435742', '90.5354327', 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', '25.9165451', '89.4532409', 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', '24.7465670', '90.4072093', 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `yearly_bonus_date` date DEFAULT NULL,
  `per_day_salary` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(100) DEFAULT NULL,
  `nid_number` varchar(100) DEFAULT NULL,
  `present_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `marital_status` varchar(10) DEFAULT NULL,
  `religion` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `emergency_contact_name_one` varchar(100) DEFAULT NULL,
  `emergency_contact_number_one` varchar(100) DEFAULT NULL,
  `emergency_contact_relation_one` varchar(10) DEFAULT NULL,
  `emergency_contact_name_two` varchar(100) DEFAULT NULL,
  `emergency_contact_number_two` varchar(100) DEFAULT NULL,
  `emergency_contact_relation_two` varchar(100) DEFAULT NULL,
  `emergency_contact_name_three` varchar(100) DEFAULT NULL,
  `emergency_contact_number_three` varchar(100) DEFAULT NULL,
  `emergency_contact_relation_three` varchar(100) DEFAULT NULL,
  `yearly_bonus_status` int(10) DEFAULT NULL COMMENT 'null = no bonus is inserted yet\r\n1 = already bonus inserted\r\n',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_name`, `designation`, `joining_date`, `yearly_bonus_date`, `per_day_salary`, `father_name`, `mother_name`, `mobile_number`, `nid_number`, `present_address`, `permanent_address`, `birth_date`, `blood_group`, `nationality`, `marital_status`, `religion`, `gender`, `profile_pic`, `emergency_contact_name_one`, `emergency_contact_number_one`, `emergency_contact_relation_one`, `emergency_contact_name_two`, `emergency_contact_number_two`, `emergency_contact_relation_two`, `emergency_contact_name_three`, `emergency_contact_number_three`, `emergency_contact_relation_three`, `yearly_bonus_status`, `created_at`, `updated_at`) VALUES
(1, 'Kamrul Hasan Uddin', 'Sales Executive', '2022-06-13', '2023-07-02', '1200', 'Mahmudul Hasan', 'Halima Khatun', '01513470121', '34534456', '<p>laalbagh<br></p>', '<p>laalbagh, dhaka<br></p>', '1995-09-10', 'A+', 'Bangladeshi', 'Single', 'Islam', 'Male', NULL, 'Mahmudul', '01513470130', 'Father', 'Halima Khantun', '01514450127', 'Mother', NULL, NULL, NULL, NULL, '2024-05-16 13:28:47', '2024-05-16 13:28:47'),
(2, 'Hamid Mahmud', 'Sales Executive', '2024-02-01', '2025-12-03', '900', 'Almas Mahmud', 'Hasina Begum', '01513470121', '634135485', 'Dhanmondi 2, Dhaka<br>', '<p>Dhanmondi 2, Dhaka</p>', '1994-04-07', 'B+', 'Bangladeshi', 'Single', 'Islam', 'Male', NULL, 'Almas Mahmud', '01715470120', 'Father', 'Kawser Mahmud', '01514450127', 'Brother', NULL, NULL, NULL, NULL, '2024-05-23 06:02:15', '2024-05-23 06:02:15'),
(3, 'Kartik Paul', 'Sales Manager', '2020-05-08', '2021-02-03', '800', 'Suvra Paul', 'Priya Paul', '01513470127', '35464124', '<p>Tantibazar, Dhaka<br></p>', '<p>Tantibazar, Dhaka<br></p><p></p>', '1992-04-08', 'O+', 'Bangladeshi', 'Married', 'Hindu', 'Male', NULL, 'Suvra Paul', '01513470120', 'Father', 'Priya Paul', '01413470150', 'Mother', NULL, NULL, NULL, NULL, '2024-05-23 11:40:12', '2024-05-23 11:40:12');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `created_at`, `updated_at`) VALUES
(1, 'Access Admin Dashboard', '2024-06-03 05:38:50', '2024-06-03 05:38:50'),
(2, 'Access POS', '2024-06-03 05:38:50', '2024-06-03 05:38:50'),
(3, 'Access Booking', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(4, 'Edit Booking', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(5, 'Delete Booking', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(6, 'Access Clients', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(7, 'Edit Client', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(8, 'Delete Client', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(9, 'Access Products', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(10, 'Add Product', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(11, 'Edit Product', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(12, 'Delete Product', '2024-06-03 05:42:05', '2024-06-03 05:42:05'),
(13, 'Access Stock', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(14, 'Add Stock', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(15, 'Access Sales Entry', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(16, 'Access Sale Settings', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(17, 'Edit Sell', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(18, 'Due Transaction List', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(19, 'Add Due Transaction', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(20, 'Edit Due Transaction', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(21, 'Delete Due Transaction', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(22, 'Access Suppliers', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(23, 'Add Supplier', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(24, 'Edit Supplier', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(25, 'Show Supplier', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(26, 'Delete Supplier', '2024-06-03 05:46:44', '2024-06-03 05:46:44'),
(27, 'Access Suppliers Transaction', '2024-06-03 05:50:30', '2024-06-03 05:50:30'),
(28, 'Create Supplier Transaction', '2024-06-03 05:50:30', '2024-06-03 05:50:30'),
(29, 'Edit Supplier Transaction', '2024-06-03 05:50:30', '2024-06-03 05:50:30'),
(30, 'Delete Supplier Transaction', '2024-06-03 05:50:30', '2024-06-03 05:50:30'),
(31, 'Access Product Categories', '2024-06-03 05:50:30', '2024-06-03 05:50:30'),
(32, 'Add Product Category', '2024-06-03 05:50:30', '2024-06-03 05:50:30'),
(33, 'Edit Product Category', '2024-06-03 05:50:30', '2024-06-03 05:50:30'),
(34, 'Delete Product Category', '2024-06-03 05:50:30', '2024-06-03 05:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `menu_permissions`
--

CREATE TABLE `menu_permissions` (
  `id` int(11) NOT NULL,
  `role` int(10) DEFAULT NULL,
  `menus` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_permissions`
--

INSERT INTO `menu_permissions` (`id`, `role`, `menus`, `created_at`, `updated_at`) VALUES
(1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34', '2024-06-03 10:06:05', '2024-06-03 10:06:05'),
(2, 2, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34', '2024-06-03 10:06:42', '2024-06-03 10:06:42'),
(3, 3, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', '2024-06-03 10:07:23', '2024-06-03 10:07:23'),
(4, 5, '1', '2024-06-03 12:07:50', '2024-06-03 12:07:50');

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
(5, '2024_05_05_111531_create_product_categories_table', 2),
(6, '2024_05_11_041502_create_products_table', 3);

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `under_type` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 2 COMMENT '1=active, 2=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `under_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ADVANCE', 'Cash', 1, '2024-05-13 10:40:11', '2024-05-13 10:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` int(11) NOT NULL,
  `employee` int(100) DEFAULT NULL,
  `salary_date` date DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `per_day_salary` varchar(100) DEFAULT NULL,
  `emp_total_bonus_day` varchar(100) DEFAULT NULL,
  `emp_total_bonus_amount` varchar(100) DEFAULT NULL,
  `bonus_eligible_month` varchar(100) DEFAULT NULL,
  `bonus_pay_month` varchar(100) DEFAULT NULL,
  `bonus_pay_amount` varchar(100) DEFAULT NULL,
  `total_working_day` varchar(100) DEFAULT NULL,
  `total_leave` varchar(100) DEFAULT NULL,
  `total_number_of_pay_day` varchar(100) DEFAULT NULL,
  `monthly_salary` varchar(100) DEFAULT NULL,
  `monthly_holiday_bonus` varchar(100) DEFAULT NULL,
  `total_daily_allowance` varchar(100) DEFAULT NULL,
  `total_travel_allowance` varchar(100) DEFAULT NULL,
  `rental_cost_allowance` varchar(100) DEFAULT NULL,
  `hospital_bill_allowance` varchar(100) DEFAULT NULL,
  `insurance_allowance` varchar(100) DEFAULT NULL,
  `sales_commission` varchar(100) DEFAULT NULL,
  `retail_commission` varchar(100) DEFAULT NULL,
  `total_others` varchar(100) DEFAULT NULL,
  `total_salary` varchar(100) DEFAULT NULL,
  `yearly_bonus` varchar(100) DEFAULT NULL,
  `total_payable_salary` varchar(100) DEFAULT NULL,
  `advance_less` varchar(100) DEFAULT NULL,
  `any_deduction` varchar(100) DEFAULT NULL,
  `final_pay_amount` varchar(100) DEFAULT NULL,
  `loan_advance` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `employee`, `salary_date`, `joining_date`, `per_day_salary`, `emp_total_bonus_day`, `emp_total_bonus_amount`, `bonus_eligible_month`, `bonus_pay_month`, `bonus_pay_amount`, `total_working_day`, `total_leave`, `total_number_of_pay_day`, `monthly_salary`, `monthly_holiday_bonus`, `total_daily_allowance`, `total_travel_allowance`, `rental_cost_allowance`, `hospital_bill_allowance`, `insurance_allowance`, `sales_commission`, `retail_commission`, `total_others`, `total_salary`, `yearly_bonus`, `total_payable_salary`, `advance_less`, `any_deduction`, `final_pay_amount`, `loan_advance`, `created_at`, `updated_at`) VALUES
(1, 2, '2024-05-28', '2024-02-01', '900', '39', '35100', '04-2024', '05-2024', '8775', '26', '1', '25', '22500', '900', '0', '0', '0', '0', '0', '0', '0', '900', '23400', '8775', '32175', '0', '0', '32175', NULL, '2024-05-28 11:37:27', '2024-05-28 11:37:27'),
(2, 2, '2024-05-28', '2024-02-01', '900', '39', '35100', '07-2024', '08-2024', '8775', '26', '0', '26', '23400', '900', '0', '0', '0', '0', '0', '0', '0', '900', '24300', '0', '24300', '0', '0', '24300', NULL, '2024-05-28 12:39:44', '2024-05-28 12:39:44'),
(3, 1, '2024-05-30', '2022-06-13', '1200', '39', '46800', '08-2022', '09-2022', '11700', '26', '1', '25', '30000', '1200', '0', '0', '0', '0', '0', '0', '0', '1200', '31200', '0', '31200', '0', '0', '31200', NULL, '2024-05-30 08:33:19', '2024-05-30 08:33:19'),
(4, 2, '2024-05-30', '2024-02-01', '900', '39', '35100', '10-2024', '11-2024', '8775', '26', '0', '26', '23400', '900', '0', '0', '0', '0', '0', '0', '0', '900', '24300', '0', '24300', '0', '0', '24300', NULL, '2024-05-30 08:34:21', '2024-05-30 08:34:21'),
(5, 2, '2024-05-30', '2024-02-01', '900', '39', '35100', '01-2025', '03-2025', '8775', '26', '0', '26', '23400', '900', '0', '0', '0', '0', '0', '0', '0', '900', '24300', '0', '24300', '0', '0', '24300', NULL, '2024-05-30 08:34:54', '2024-05-30 08:34:54'),
(6, 1, '2024-05-30', '2022-06-13', '1200', '39', '46800', '11-2022', '12-2022', '11700', '26', '0', '26', '31200', '1200', '0', '0', '0', '0', '0', '0', '0', '1200', '32400', '0', '32400', '0', '0', '32400', NULL, '2024-05-30 08:35:21', '2024-05-30 08:35:21'),
(7, 1, '2024-06-01', '2022-06-13', '1200', '39', '46800', '03-2023', '04-2023', '11700', '26', '1', '25', '30000', '1200', '0', '0', '0', '0', '0', '0', '0', '1200', '31200', '0', '31200', '0', '0', '31200', NULL, '2024-06-01 12:05:00', '2024-06-01 12:05:00'),
(8, 2, '2024-06-02', '2024-02-01', '900', '39', '35100', '05-2025', '06-2025', '8775', '26', '0', '26', '23400', '900', '0', '0', '0', '0', '0', '0', '0', '900', '24300', '0', '24300', '0', '0', '24300', NULL, '2024-06-02 11:52:35', '2024-06-02 11:52:35'),
(9, 2, '2024-06-02', '2024-02-01', '900', '39', '35100', '08-2025', '09-2025', '8775', '26', '1', '25', '22500', '900', '0', '0', '0', '0', '0', '0', '0', '900', '23400', '0', '23400', '0', '0', '23400', NULL, '2024-06-02 12:56:39', '2024-06-02 12:56:39'),
(10, 1, '2024-06-02', '2022-06-13', '1200', '39', '46800', '06-2023', '07-2023', '11700', '26', '0', '26', '31200', '1200', '10', '10', '10', '20', '20', '10', '20', '1300', '32500', '0', '32500', '100', '100', '32300', NULL, '2024-06-02 13:06:03', '2024-06-02 13:06:03'),
(11, 3, '2024-06-02', '2020-05-08', '800', '39', '31200', '07-2020', '08-2020', '7800', '26', '0', '26', '20800', '800', '0', '0', '0', '0', '0', '0', '0', '800', '21600', '0', '21600', '0', '0', '21600', NULL, '2024-06-02 13:11:27', '2024-06-02 13:11:27'),
(12, 2, '2024-06-03', '2024-02-01', '900', '39', '35100', '11-2025', '12-2025', '8775', '26', '1', '25', '22500', '900', '0', '0', '0', '0', '0', '0', '0', '900', '23400', '0', '23400', '0', '100', '23300', NULL, '2024-06-03 04:49:23', '2024-06-03 04:49:23'),
(13, 3, '2024-06-03', '2020-05-08', '800', '39', '31200', '10-2020', '11-2020', '7800', '26', '0', '26', '20800', '800', '0', '0', '0', '0', '0', '0', '0', '800', '21600', '0', '21600', '0', '0', '21600', NULL, '2024-06-03 09:51:18', '2024-06-03 09:51:18'),
(14, 3, '2024-06-03', '2020-05-08', '800', '39', '31200', '01-2021', '02-2021', '7800', '26', '0', '26', '20800', '800', '0', '0', '0', '0', '0', '0', '0', '800', '21600', '0', '21600', '0', '0', '21600', NULL, '2024-06-03 11:12:11', '2024-06-03 11:12:11');

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
  `product_nr` varchar(255) DEFAULT NULL,
  `product_details` text DEFAULT NULL,
  `product_category` int(11) DEFAULT NULL,
  `product_type` int(11) DEFAULT NULL COMMENT '1=gold, 2=diamond',
  `weight` varchar(255) DEFAULT NULL,
  `carat` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `st_or_dia` varchar(255) DEFAULT NULL,
  `st_or_dia_price` varchar(255) DEFAULT NULL,
  `wage` varchar(255) DEFAULT NULL,
  `wage_type` varchar(100) DEFAULT NULL,
  `supplier` int(11) DEFAULT NULL,
  `purchase_price` varchar(255) DEFAULT NULL,
  `stock_type` int(11) DEFAULT NULL COMMENT '1=new stock, 2=exchange, 3=old gold, 4=s.return',
  `status` int(10) NOT NULL DEFAULT 1 COMMENT '1=fresh,2=sold, 3=booked',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_nr`, `product_details`, `product_category`, `product_type`, `weight`, `carat`, `quantity`, `st_or_dia`, `st_or_dia_price`, `wage`, `wage_type`, `supplier`, `purchase_price`, `stock_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aa', 'sss@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL, NULL),
(2, 'ww', 'ww@gmail.com', 6, 2, 'y', 2, '2', NULL, NULL, NULL, '2', NULL, NULL, 3, 1, NULL, NULL),
(11, 'dsf', 'aa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(12, 'qqq', 'qq@gmai', 9, NULL, '32kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(60, 'R2', 'RING 18K', NULL, NULL, '2.68', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(61, 'R3', 'RING 22K', 11, NULL, '1.77', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_category_name`, `created_at`, `updated_at`) VALUES
(6, 'pippip', '2024-05-05 23:29:18', '2024-05-05 23:29:18'),
(7, 'aza', '2024-05-06 06:36:28', '2024-05-06 06:36:28'),
(9, 'jgg', '2024-05-07 04:59:08', '2024-05-07 04:59:08'),
(11, 'aaaaaaaaaaaaaaaa', '2024-05-07 05:24:32', '2024-05-07 05:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL COMMENT '1 = active, 2 = inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, '2024-06-02 11:33:21', '2024-06-02 11:33:21'),
(2, 'Admin', 1, '2024-06-02 11:38:32', '2024-06-02 11:38:32'),
(3, 'Manager', 1, '2024-06-02 11:38:42', '2024-06-02 11:38:42'),
(5, 'User', 1, '2024-06-02 11:50:43', '2024-06-02 11:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `sale_types`
--

CREATE TABLE `sale_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 2 COMMENT '1= active, 2= inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale_types`
--

INSERT INTO `sale_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hh sale', 2, '2024-05-07 11:57:55', '2024-05-07 11:57:55'),
(2, 'hh sale4356', 2, '2024-05-07 11:58:08', '2024-05-07 11:58:08'),
(3, 'jjjj sa', 2, '2024-05-07 11:58:21', '2024-05-07 11:58:21'),
(4, 'sdf', 2, '2024-05-07 11:58:38', '2024-05-07 11:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_cell` varchar(100) DEFAULT NULL,
  `bin` varchar(100) DEFAULT NULL,
  `jakat` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `up` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `company_cell`, `bin`, `jakat`, `created_at`, `up`) VALUES
(1, 'SENCO Gold', '01513470120', '004315254-0101', '2.5', '2024-06-02 09:46:12', '2024-06-02 09:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(100) DEFAULT NULL,
  `due_amount` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `mobile_no`, `due_amount`, `created_at`, `updated_at`) VALUES
(2, 'test supplier ff', '01513470130', '154', '2024-05-09 11:08:19', '2024-05-09 11:08:19'),
(3, 'test supplier 2', '01513470137', '23,12343', '2024-05-11 07:09:25', '2024-05-11 07:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` int(11) NOT NULL,
  `terms` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `terms`, `created_at`, `updated_at`) VALUES
(2, '<p style=\"margin-left:8px\"><span style=\"font-size:10px;\">শর্তাবলীঃ<br>১) ক্যাশ মেমো ছাড়া কোন আপত্তি বা পরিবর্তন গ্রহনযোগ্য হবে না।&nbsp;২) স্বর্ণের মূল্য বাংলাদেশ জুয়েলারী সমিতি থেকে নির্ধারন করে দেয়া হয় যা জুয়েলারী সমিতির সদস্য<br>হিসেবে আমাদের অনুসরন করতে হয়। ৩) স্বর্ণের গহনা পরিবর্তনের ক্ষেত্রে বাজার মূল্য থেকে ১০% অথবা &nbsp;টাকা ফেরত নেয়ার ক্ষেত্রে বাজার মূল্য থেকে &nbsp;২০% কাটা হবে।<br>৪) ডায়মন্ডের&nbsp;গহনা পরিবর্তনের ক্ষেত্রে ক্যাশ মেমোতে উল্লেখিত মূল্য থেকে ১৫%&nbsp;অথবা &nbsp;টাকা ফেরত নেয়ার ক্ষেত্রে ক্যাশ মেমোতে&nbsp;উল্লেখিত মূল্য থেকে ২৫% কাটা হবে।<br>পরিবর্তন বা টাকা ফেরত এর ক্ষেত্রে আরও ১০% মজুরী ও ৫% ভ্যাট বাদ দেয়া হবে। ৫) সর্বোঅবস্থায় যেমন গহনা পরিবর্তন, পুরাতন স্বর্ণ ক্রয় ইত্যাদির সময় ভ্যাট, ট্যাক্স, মজুরী,<br>পাথর, মিনা ইত্যাদি&nbsp;বা যা স্বর্ন বা ডায়মন্ডের&nbsp;মূল্যের&nbsp;আওতার বাইরে তার টাকার পরিমান বাদ দিয়ে হিসাব করা হয় বা হবে । ৬) সরকারী ও বাজুস এর ক্রয় বিক্রয় নির্দেশনা ও&nbsp;<br>নীতিমালা মোতাবেক ক্রেতা নির্দেশনা ও&nbsp;নীতিমালা অনুসরন না করলে বিক্রেতাকে কোনভাবেই নিয়ম বা নীতি মানতে বাধ্য করতে পারবে না।&nbsp;৭) কোন ধরনের শারীরিক সমস্যা<br>বা ক্যামিকেল জাতীয় কোন ধরনের দ্রব্য ব্যবহারের কারনে রং পরিবর্তন হলে বিক্রেতা দায়ী থাকবে না।&nbsp;৮) দুবাই গোল্ড পাথর সহ বিক্রি করা হয় এবং কোন কারনে পরিবর্তন বা<br>ক্যাশব্যাক এর সময় পাথর সহ হিসেব করা হবে। (শর্ত প্রযোজ্য)&nbsp;৯) ব্যবহার না করে অক্ষত অবস্থায় ৭ দিনের মধ্যে পন্য ফেরত দিলে কোন টাকা কাটা যাবে না কিন্তু এই পরিবর্তন<br>একবারের জন্য প্রযোজ্য হবে।&nbsp;&nbsp;১০) ক্রেতা পন্য ও পন্যের ওজন, হলর্মাক, ডিজাইন দেখে ক্রয় করবেন এবং কোন সমস্যা হলে শোরুম কর্তৃপক্ষকে জানাবেন এবং কর্তৃপক্ষ<br>যথাযথ সমাধান করবেন। পরবর্তীতে কোন আপত্তি গ্রহনযোগ্য নয়। ১১) টাকা ফেরত নিতে হলে কমপক্ষে ৭ দিন সময় নিয়ে টাকা ফেরত দেয়া হবে।<br>১২) স্বর্নের নাকফুল, নথ পরিবর্তন অথবা টাকা ফেরত নেয়ার ক্ষেত্রে ক্যাশ মেমোতে&nbsp;উল্লেখিত মূল্য থেকে ৫০% বাদ দিয়ে হিসেব করা হবে।<br>১৩) কেডিম রিপেয়ার র্চাজ ফ্রি। কোন ধরনের লেজার রিপেয়ার বা স্বর্ন লাগলে তা র্চাজ প্রযোয্য।</span><br type=\"_moz\"></p><p style=\"margin-left:8px\"><br></p>', '2024-05-13 13:08:56', '2024-05-13 13:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `today_rates`
--

CREATE TABLE `today_rates` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 2 COMMENT '1=active, 2=deactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `today_rates`
--

INSERT INTO `today_rates` (`id`, `name`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1', '124', 1, '2024-05-07 10:18:24', '2024-05-07 10:18:24'),
(2, 'aaa', '76', 2, '2024-05-07 10:21:33', '2024-05-07 10:21:33'),
(3, 'sss', '213', 1, '2024-05-07 10:24:24', '2024-05-07 10:24:24'),
(6, 'lj', '677777', 1, '2024-05-07 10:25:25', '2024-05-07 10:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` int(10) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samer', 'sam@gmail.com', 1, NULL, '$2y$10$qds/6htrZ7UZgHzp/uCzFuK7tl5dxZ.5fHGuVpk87MWDvNNTrxQYK', NULL, NULL, NULL),
(2, 'Senco Gold', 'senco@gmail.com', 5, NULL, '$2y$10$D25aMeeoynljhf.UmUuXXe2HBSEHBBV.Y0pYi3ekEz.PW/8NpD/KK', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `district_id` int(100) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 2 COMMENT '1=active, 2=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `district_id`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test1', 7, 'ggg', 1, '2024-05-09 09:28:29', '2024-05-09 09:28:29'),
(2, 'test2', 47, NULL, 2, '2024-05-09 09:43:11', '2024-05-09 09:43:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_terms_and_conditions`
--
ALTER TABLE `booking_terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_categories`
--
ALTER TABLE `customer_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
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
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_types`
--
ALTER TABLE `sale_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `today_rates`
--
ALTER TABLE `today_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_terms_and_conditions`
--
ALTER TABLE `booking_terms_and_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_categories`
--
ALTER TABLE `customer_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payrolls`
--
ALTER TABLE `payrolls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_types`
--
ALTER TABLE `sale_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `today_rates`
--
ALTER TABLE `today_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
