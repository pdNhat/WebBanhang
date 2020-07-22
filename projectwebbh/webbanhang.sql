-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 22, 2020 lúc 06:32 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `cm_id` int(10) UNSIGNED NOT NULL,
  `cm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cm_idproduct` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`cm_id`, `cm_name`, `cm_email`, `cm_content`, `cm_idproduct`, `created_at`, `updated_at`) VALUES
(3, 'Pham Nhat', 'nhat210199@gmail.com', 'xan pham tot', 22, '2020-06-26 18:07:36', '2020-06-26 18:07:36'),
(4, 'Pham Nhat', 'nhat210199@gmail.com', 'jpohorejhoprjo[gjwo[rj[', 24, '2020-06-27 13:55:00', '2020-06-27 13:55:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `icategory`
--

CREATE TABLE `icategory` (
  `ca_id` int(10) UNSIGNED NOT NULL,
  `ca_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ca_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `icategory`
--

INSERT INTO `icategory` (`ca_id`, `ca_name`, `ca_slug`, `created_at`, `updated_at`) VALUES
(1, 'samsung', 'samsung', NULL, NULL),
(7, 'vivo', 'vivo', '2020-06-15 16:54:19', '2020-06-15 16:54:19'),
(8, 'Bphone', 'bphone', '2020-06-26 17:41:26', '2020-06-26 17:41:26'),
(9, 'Iphone', 'iphone', '2020-06-26 17:41:35', '2020-06-26 17:41:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2020_06_15_173233_icategory', 4),
(29, '2020_06_15_202408_product', 5),
(30, '2020_06_20_052332_comment', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `pr_id` int(10) UNSIGNED NOT NULL,
  `pr_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pr_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pr_price` int(11) NOT NULL,
  `pr_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pr_waranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pr_accessories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pr_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pr_promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pr_status` tinyint(4) NOT NULL,
  `pr_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pr_featured` tinyint(4) NOT NULL,
  `pr_idcategory` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`pr_id`, `pr_name`, `pr_slug`, `pr_price`, `pr_img`, `pr_waranty`, `pr_accessories`, `pr_condition`, `pr_promotion`, `pr_status`, `pr_description`, `pr_featured`, `pr_idcategory`, `created_at`, `updated_at`) VALUES
(4, 'Samsung Galaxy S20', 'samsung-galaxy-s20', 9000000, 'pU48_s20.jpg', '12 Tháng', 'không có', 'Tốt', 'tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy s20 m&agrave;u đen&nbsp;</p>', 1, 1, '2020-06-26 17:18:13', '2020-06-26 17:18:13'),
(5, 'Samsung Galaxy A71', 'samsung-galaxy-a71', 12000000, 'CofH_a71.jpg', '12 Tháng', 'Xạc dự phòng', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy s20 m&agrave;u Xanh Lam</p>', 1, 1, '2020-06-26 17:29:26', '2020-06-26 17:29:26'),
(6, 'Samsung Galaxy A50', 'samsung-galaxy-a50', 10000000, 'akhS_a50s.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy A50&nbsp;m&agrave;u Xanh</p>', 1, 1, '2020-06-26 17:31:16', '2020-06-26 17:31:16'),
(7, 'Samsung Galaxy M30', 'samsung-galaxy-m30', 7000000, 'O9NX_m30.png', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy M30&nbsp;m&agrave;u Xanh</p>', 1, 1, '2020-06-26 17:32:37', '2020-06-26 17:32:37'),
(8, 'Samsung Galaxy A31', 'samsung-galaxy-a31', 15000000, 'UYHE_a31.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy A31&nbsp;m&agrave;u Dương</p>', 1, 1, '2020-06-26 17:36:55', '2020-06-26 17:36:55'),
(9, 'Samsung Galaxy M11', 'samsung-galaxy-m11', 15000000, '5THD_m11.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy M11&nbsp;m&agrave;u Xanh Dương</p>', 1, 1, '2020-06-26 17:37:46', '2020-06-26 17:37:46'),
(10, 'Samsung Galaxy A01', 'samsung-galaxy-a01', 3000000, 'lzZ3_a01.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy A01&nbsp;m&agrave;u Xanh Dương</p>', 1, 1, '2020-06-26 17:38:34', '2020-06-26 17:38:34'),
(11, 'Samsung Galaxy A20', 'samsung-galaxy-a20', 3000000, 'FuD6_a20s.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy A20&nbsp;m&agrave;u Xanh Dương</p>', 1, 1, '2020-06-26 17:39:20', '2020-06-26 17:39:20'),
(12, 'Samsung Galaxy S6', 'samsung-galaxy-s6', 3000000, '8PSW_s6.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Samsung galaxy S6&nbsp;m&agrave;u Trắng</p>', 1, 1, '2020-06-26 17:40:15', '2020-06-26 17:40:15'),
(13, 'Iphone 11 64GB', 'iphone-11-64gb', 23000000, 'APCl_1164g.png', '2 Năm', 'Tai nghe không dây', 'tot', 'không', 1, '<p>Iphone 11 64gb m&agrave;u lam</p>', 1, 9, '2020-06-26 17:43:14', '2020-06-26 17:43:14'),
(14, 'Iphone 11 128GB', 'iphone-11-128gb', 25000000, 'ju7z_128g.jpg', '2 Năm', 'Tai nghe không dây', 'tot', 'không', 1, '<p>Iphone 11 128gb m&agrave;u lam</p>', 1, 9, '2020-06-26 17:48:29', '2020-06-26 17:48:29'),
(15, 'Iphone 11 pro Max', 'iphone-11-pro-max', 29000000, 'M1oS_promax.jpg', '2 Năm', 'Tai nghe không dây', 'tot', 'Tặng ốp lưng khi mua hàng', 1, '<p>Iphone 11 pro max&nbsp;m&agrave;u đen</p>', 1, 9, '2020-06-26 17:49:45', '2020-06-26 17:49:45'),
(16, 'Iphone 8plus', 'iphone-8plus', 18000000, '8Y5Z_8pius.jpg', '2 Năm', 'Tai nghe không dây', 'tot', 'Tặng ốp lưng khi mua hàng', 1, '<p>Iphone 8plus mau den</p>', 1, 9, '2020-06-26 17:55:09', '2020-06-26 17:55:09'),
(17, 'Iphone SE', 'iphone-se', 15000000, 'OxCf_se.jpg', '2 Năm', 'Tai nghe không dây', 'tot', 'Tặng ốp lưng khi mua hàng', 1, '<p>Iphone SE</p>', 1, 9, '2020-06-26 17:56:14', '2020-06-26 17:56:14'),
(18, 'Iphone 11 64GB', 'iphone-11-64gb', 15000000, 'IGKe_11 64g.jpg', '2 Năm', 'Tai nghe không dây', 'tot', 'Tặng ốp lưng khi mua hàng', 1, '<p>Iphone 11 64GB</p>', 1, 9, '2020-06-26 17:56:56', '2020-06-26 17:56:56'),
(19, 'Iphone 11 124GB', 'iphone-11-124gb', 15000000, '16OG_128g.jpg', '2 Năm', 'Tai nghe không dây', 'tot', 'Tặng ốp lưng khi mua hàng', 1, '<p>Iphone 11 124GB</p>', 1, 9, '2020-06-26 17:58:16', '2020-06-26 17:58:16'),
(20, 'Iphone 11 SE64GB', 'iphone-11-se64gb', 15000000, 'cNdT_se64.jpg', '2 Năm', 'Tai nghe không dây', 'tot', 'Tặng ốp lưng khi mua hàng', 1, '<p>Iphone 11 SE64GB</p>', 1, 9, '2020-06-26 17:58:59', '2020-06-26 17:58:59'),
(21, 'Iphone XS', 'iphone-xs', 15000000, 'PfXK_xs.jpg', '2 Năm', 'Tai nghe không dây', 'tot', 'Tặng ốp lưng khi mua hàng', 1, '<p>Iphone XS</p>', 1, 9, '2020-06-26 18:00:05', '2020-06-26 18:00:05'),
(22, 'Bphone 3Pro', 'bphone-3pro', 7000000, '9R4Z_bphone 3 pro.jpg', '12 Tháng', 'Xạc dự phòng', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Bphone 3Po</p>', 0, 8, '2020-06-26 18:01:26', '2020-06-26 18:01:26'),
(23, 'Bphone 3', 'bphone-3', 7000000, 'N2Z4_dc873d08e25d59ea9abcc0d1638295d0.jpg', '12 Tháng', 'Xạc dự phòng', 'Tốt', 'Tặng ốp lưng khi mua hàng', 1, '<p>Bphone 3</p>', 0, 8, '2020-06-26 18:02:07', '2020-06-26 18:02:07'),
(24, 'Vivo U10', 'vivo-u10', 7000000, 'cxRU_u10.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'tặng ốp lưng khi mua hàng', 1, '<p>ViVO U10</p>', 0, 7, '2020-06-26 18:03:59', '2020-06-26 18:03:59'),
(25, 'Vivo Y30', 'vivo-y30', 7000000, '7txk_y30.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'tặng ốp lưng khi mua hàng', 1, '<p>ViVO Y30</p>', 0, 7, '2020-06-26 18:04:35', '2020-06-26 18:04:35'),
(26, 'Vivo Y15', 'vivo-y15', 7000000, 'FTKX_y15.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'tặng ốp lưng khi mua hàng', 1, '<p>ViVO Y15</p>', 1, 7, '2020-06-26 18:05:10', '2020-06-26 18:05:10'),
(27, 'Vivo Y11', 'vivo-y11', 7000000, 'ZOKw_y11.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'tặng ốp lưng khi mua hàng', 1, '<p>ViVO Y11</p>', 1, 7, '2020-06-26 18:05:42', '2020-06-26 18:05:42'),
(28, 'Vivo Y81', 'vivo-y81', 7000000, 'mmy1_y81.jpg', '12 Tháng', 'Tai nghe không dây', 'Tốt', 'tặng ốp lưng khi mua hàng', 1, '<p>ViVO Y81</p>', 1, 7, '2020-06-26 18:06:14', '2020-06-26 18:06:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pham Duc Nhat', 'nhatpdtc@gmail.com', NULL, '$2y$10$6hC7K4l6BKDlYk3YnSDCS.nQsxAA6qjp0y.DPIgpgWQCREueiP.gG', 1, '3gRvuDubVB52rJjkB5bvcc76yJEApvRhlg0glBadFztObqzWgBaxnSM0Bw5o', NULL, NULL),
(2, 'Pham Duc Nhat', 'hoangpdtc@gmail.com', NULL, '$2y$10$Kcw/vf1nQOVaHgTPnOQJW.CvLL60v4fjsLgZ7.FwmyivnYoZAbhmK', 0, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cm_id`),
  ADD KEY `comment_cm_idproduct_foreign` (`cm_idproduct`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `icategory`
--
ALTER TABLE `icategory`
  ADD PRIMARY KEY (`ca_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `product_pr_idcategory_foreign` (`pr_idcategory`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `cm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `icategory`
--
ALTER TABLE `icategory`
  MODIFY `ca_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `pr_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_cm_idproduct_foreign` FOREIGN KEY (`cm_idproduct`) REFERENCES `product` (`pr_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_pr_idcategory_foreign` FOREIGN KEY (`pr_idcategory`) REFERENCES `icategory` (`ca_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
