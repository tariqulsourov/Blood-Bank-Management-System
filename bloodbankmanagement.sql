-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 06:16 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbankmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sourov', 'tariqulislamsourov@gmail.com', NULL, '$2y$10$85STvv7rXDI3HJQ89BpZMeMCf9v6tHG2Da1h..BMiRggGWlw93Yb2', NULL, '2019-09-11 21:29:35', '2019-09-11 21:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bags`
--

CREATE TABLE `blood_bags` (
  `bag_id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stored_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `donated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `received_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_bags`
--

INSERT INTO `blood_bags` (`bag_id`, `branch_id`, `blood_type`, `stored_date`, `exp_date`, `donated_by`, `received_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'AB+', '2019-09-17', '2019-09-20', '5546336664', '6546335556', '2019-09-17 21:10:15', '2019-09-17 21:10:15'),
(4, 1, 'B+', '2019-09-17', '2019-09-20', '4456655650', '', '2019-09-17 18:31:20', '2019-09-17 18:31:20'),
(5, 1, 'AB+', '2019-09-18', '2019-09-21', '4456655750', '', '2019-09-17 18:42:16', '2019-09-17 18:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `blood_receivers`
--

CREATE TABLE `blood_receivers` (
  `receive_no` bigint(20) UNSIGNED NOT NULL,
  `NID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_bag_quantity` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_receivers`
--

INSERT INTO `blood_receivers` (`receive_no`, `NID`, `branch_id`, `blood_type`, `blood_bag_quantity`, `reason`, `created_at`, `updated_at`) VALUES
(1, '5544976666', 1, 'AB+', 2, 'road_accident', NULL, NULL),
(2, '5544976666', 1, 'ab-', 2, 'heart_operation', '2019-09-16 13:54:47', '2019-09-16 13:54:47'),
(3, '5544976664', 1, 'AB-', 2, 'child_delivery', '2019-09-16 14:37:50', '2019-09-16 14:37:50'),
(4, '5544976668', 1, 'O+', 2, 'road_accident', '2019-09-16 14:46:56', '2019-09-16 14:46:56'),
(5, '5544976665', 1, 'O+', 2, 'road_accident', '2019-09-16 14:50:50', '2019-09-16 14:50:50'),
(6, '5544976665', 1, 'B+', 2, 'heart_operation', '2019-09-16 14:57:59', '2019-09-16 14:57:59'),
(7, '5544976662', 1, 'ab-', 2, 'road_accident', '2019-10-10 03:18:59', '2019-10-10 03:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `direct_donors`
--

CREATE TABLE `direct_donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `last_donation_date` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor_at_blood_banks`
--

CREATE TABLE `donor_at_blood_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `last_donation_date` date DEFAULT NULL,
  `earned_point` int(11) DEFAULT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donor_at_blood_banks`
--

INSERT INTO `donor_at_blood_banks` (`id`, `name`, `email`, `email_verified_at`, `password`, `blood_type`, `phone_no`, `NID`, `age`, `gender`, `status`, `last_donation_date`, `earned_point`, `police_station`, `post_office`, `post_code`, `city`, `division`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sourov1710', 'sourov1710@gmail.com', NULL, '$2y$10$0A.PtNOIxNESc75eJQFpyuxCoZYL5wk0THVkszoPlmuyYhMlJFhC2', 'AB-', '01900000000', '5546336664', 25, 'Male', 'active', NULL, NULL, 'khilgaon', 'rampura', '1219', 'Dhaka', 'Dhaka', NULL, '2019-09-16 00:36:29', '2019-09-16 00:36:29'),
(2, 'Sourov', 'tariqulislamsourov@gmail.com', NULL, '$2y$10$pnYySgON4Hbqxi4JsHFzEOJPmpgMALnuDWxz0uIr8rVo7e74R4QNG', 'AB+', '01980001122', '4456686669', 22, 'Male', 'active', NULL, NULL, 'Rampura', 'Rampura', '1222', 'Dhaka', 'Dhaka', NULL, '2019-09-16 02:23:17', '2019-09-16 02:23:17'),
(3, 'Abrar', 'abrar@gmail.com', NULL, '$2y$10$yITTQEDQsgz65mZ2VVT.kuarQTa2rs3pYZCaizhztslbJlMYDtaVu', 'AB+', '01780001122', '4456686685', 26, 'Male', 'active', NULL, NULL, 'Rampura', 'Rampura', '1222', 'Dhaka', 'Dhaka', NULL, '2019-09-16 02:24:19', '2019-09-16 02:24:19'),
(4, 'Mashuk', 'abrar123@gmail.com', NULL, '$2y$10$y/WXXDiBPKJxCpbMu/Abl.srNqho9ev4OVPyeOm7LmffZ//x3oHmS', 'AB+', '01780002255', '4456655685', 24, 'Male', 'active', NULL, NULL, 'Rampura', 'Rampura', '1222', 'Dhaka', 'Dhaka', NULL, '2019-09-16 02:25:07', '2019-09-16 02:25:07'),
(5, 'Nazmul', 'nazmul@gmail.com', NULL, '$2y$10$WexleDoYt.38ijZ4WUCeUOX9cxMxq1rafk3L/.BYaqdENn3Z7fA/i', 'B+', '01548002255', '4456655650', 25, 'Male', 'active', NULL, NULL, 'Lalbagh', 'Lalbagh', '1211', 'Dhaka', 'Dhaka', NULL, '2019-09-16 02:26:09', '2019-09-16 02:26:09'),
(6, 'Nazmul Hossain', 'nazmulhossan@gmail.com', NULL, '$2y$10$EMfHjPT7bERnik/r2AhkYuQuybb4pqZ5abVGWRI7/r.67ozVZ9IYm', 'B-', '01548112255', '48896655650', 21, 'Male', 'active', NULL, NULL, 'Lalbagh', 'Lalbagh', '1211', 'Dhaka', 'Dhaka', NULL, '2019-09-16 02:27:14', '2019-09-16 02:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `external_blood_banks`
--

CREATE TABLE `external_blood_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_bag_quantity` int(11) DEFAULT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double(8,2) DEFAULT NULL,
  `longitude` double(8,2) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `external_blood_banks`
--

INSERT INTO `external_blood_banks` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_no`, `blood_type`, `blood_bag_quantity`, `police_station`, `post_office`, `post_code`, `city`, `latitude`, `longitude`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Quantam blood bank', 'quantam@gmail.com', NULL, '$2y$10$Ds0aitDbzXiRWhoZms1c8eidzXJ78b8sKyJ3Fq8wUmjHufuOeCogm', '+88 01714 010869', NULL, NULL, 'Shantinagar', 'Shantinagar', '1200', 'Dhaka', NULL, NULL, NULL, '2019-09-16 00:07:12', '2019-09-16 00:07:12'),
(2, 'Lions Club Blood Bank', 'lionsclub@gmail.com', NULL, '$2y$10$qtRB4lR87Q/otfmXFzMJjuCrjrJQdlqVX7d3yFsN2wd5uhfHiufP6', '8801534982674', NULL, NULL, 'Agargaon', 'Agargaon', '1209', 'Dhaka', NULL, NULL, NULL, '2019-09-16 00:25:29', '2019-09-16 00:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `fraud_cases`
--

CREATE TABLE `fraud_cases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fraud_cases`
--

INSERT INTO `fraud_cases` (`id`, `reason`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'road_accident', 2, NULL, NULL),
(2, 'heart_operation', 3, NULL, NULL),
(3, 'child_delivery', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `internal_blood_banks`
--

CREATE TABLE `internal_blood_banks` (
  `branch_id` int(10) UNSIGNED NOT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double(8,2) NOT NULL,
  `longitude` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internal_blood_banks`
--

INSERT INTO `internal_blood_banks` (`branch_id`, `post_office`, `post_code`, `police_station`, `phone_no`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Khilgaon', '1219', 'Khilgaon', '01986395483', 23.75, 90.43, NULL, NULL);

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
(3, '2019_07_18_124721_create_admins_table', 1),
(4, '2019_07_18_190139_create_direct_donors_table', 1),
(5, '2019_07_18_191945_create_donor_at_blood_banks_table', 1),
(6, '2019_07_18_192403_create_external_blood_banks_table', 1),
(7, '2019_07_18_192656_create_internal_blood_banks_table', 1),
(8, '2019_07_18_193030_create_blood_bags_table', 1),
(9, '2019_07_18_194140_create_patient_search_donors_table', 1),
(10, '2019_07_18_194319_create_patient_search_blood_banks_table', 1),
(11, '2019_07_18_194524_create_blood_receivers_table', 1),
(12, '2019_08_30_045716_create_patients_table', 1),
(13, '2019_08_30_164658_create_fraud_cases_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_NID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `gender`, `age`, `blood_type`, `quantity`, `reason`, `receiver_NID`, `date`, `created_at`, `updated_at`) VALUES
(1, 'karim', 'Male', 21, 'B+', 2, 'road_accident', '5544976665', '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_search_blood_banks`
--

CREATE TABLE `patient_search_blood_banks` (
  `search_no` bigint(20) UNSIGNED NOT NULL,
  `NID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_search_donors`
--

CREATE TABLE `patient_search_donors` (
  `search_no` bigint(20) UNSIGNED NOT NULL,
  `blood_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blood_bags`
--
ALTER TABLE `blood_bags`
  ADD PRIMARY KEY (`bag_id`),
  ADD KEY `blood_bags_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `blood_receivers`
--
ALTER TABLE `blood_receivers`
  ADD PRIMARY KEY (`receive_no`),
  ADD KEY `blood_receivers_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `direct_donors`
--
ALTER TABLE `direct_donors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `direct_donors_email_unique` (`email`);

--
-- Indexes for table `donor_at_blood_banks`
--
ALTER TABLE `donor_at_blood_banks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donor_at_blood_banks_email_unique` (`email`);

--
-- Indexes for table `external_blood_banks`
--
ALTER TABLE `external_blood_banks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `external_blood_banks_email_unique` (`email`);

--
-- Indexes for table `fraud_cases`
--
ALTER TABLE `fraud_cases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fraud_cases_reason_unique` (`reason`);

--
-- Indexes for table `internal_blood_banks`
--
ALTER TABLE `internal_blood_banks`
  ADD PRIMARY KEY (`branch_id`);

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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_search_blood_banks`
--
ALTER TABLE `patient_search_blood_banks`
  ADD PRIMARY KEY (`search_no`);

--
-- Indexes for table `patient_search_donors`
--
ALTER TABLE `patient_search_donors`
  ADD PRIMARY KEY (`search_no`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_bags`
--
ALTER TABLE `blood_bags`
  MODIFY `bag_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blood_receivers`
--
ALTER TABLE `blood_receivers`
  MODIFY `receive_no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `direct_donors`
--
ALTER TABLE `direct_donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_at_blood_banks`
--
ALTER TABLE `donor_at_blood_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `external_blood_banks`
--
ALTER TABLE `external_blood_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fraud_cases`
--
ALTER TABLE `fraud_cases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `internal_blood_banks`
--
ALTER TABLE `internal_blood_banks`
  MODIFY `branch_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_search_blood_banks`
--
ALTER TABLE `patient_search_blood_banks`
  MODIFY `search_no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_search_donors`
--
ALTER TABLE `patient_search_donors`
  MODIFY `search_no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_bags`
--
ALTER TABLE `blood_bags`
  ADD CONSTRAINT `blood_bags_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `internal_blood_banks` (`branch_id`) ON DELETE CASCADE;

--
-- Constraints for table `blood_receivers`
--
ALTER TABLE `blood_receivers`
  ADD CONSTRAINT `blood_receivers_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `internal_blood_banks` (`branch_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
