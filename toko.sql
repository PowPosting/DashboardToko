-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2025 at 03:17 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'Electronic devices and gadgets', '2025-06-14 15:37:06', '2025-06-14 15:37:06'),
(2, 'Clothing', 'Fashion and apparel items', '2025-06-14 15:37:06', '2025-06-14 15:37:06'),
(3, 'Books', 'Books and educational materials', '2025-06-14 15:37:06', '2025-06-14 15:37:06'),
(4, 'Home & Garden', 'Home improvement and gardening items', '2025-06-14 15:37:06', '2025-06-14 15:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `stock` int DEFAULT '0',
  `category_id` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `category_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Smartphone Samsung A14', 'Smartphone 4G dengan kamera 50MP', 2499000.00, 15, 1, 'samsung_a14.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(11, 'Laptop Asus VivoBook', 'Laptop 14 inci untuk kerja dan kuliah', 7299000.00, 8, 1, 'asus_vivobook.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(12, 'Kipas Angin Maspion', 'Kipas angin meja 3 level kecepatan', 299000.00, 20, 1, 'maspion_fan.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(13, 'Smart TV LG 43 Inch', 'Smart TV 4K dengan webOS', 5199000.00, 5, 1, 'lg_tv43.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(14, 'Blender Philips HR-2222', 'Blender 5 kecepatan, 700W', 899000.00, 10, 1, 'philips_blender.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(15, 'Mesin Cuci Sharp 8Kg', 'Mesin cuci 2 tabung hemat listrik', 1699000.00, 6, 1, 'sharp_washer.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(16, 'AC Panasonic 1PK', 'AC hemat energi dengan inverter', 3299000.00, 4, 1, 'panasonic_ac.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(17, 'Speaker Bluetooth JBL Go 3', 'Speaker mini portabel suara jernih', 599000.00, 12, 1, 'jbl_go3.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(18, 'Headset Logitech H111', 'Headset stereo dengan mikrofon', 149000.00, 25, 1, 'logitech_h111.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(19, 'Kamera Canon EOS M50', 'Kamera mirrorless untuk vlog', 8999000.00, 3, 1, 'canon_m50.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(20, 'Monitor LG 24 Inch', 'Full HD monitor dengan IPS panel', 1899000.00, 7, 1, 'lg_monitor.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(21, 'Proyektor Epson X05', 'Proyektor untuk presentasi dan film', 4599000.00, 2, 1, 'epson_x05.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(22, 'Mouse Wireless Logitech M331', 'Mouse senyap dengan daya tahan baterai lama', 249000.00, 30, 1, 'logitech_m331.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(23, 'Keyboard Mechanical Rexus', 'Keyboard gaming dengan lampu RGB', 499000.00, 18, 1, 'rexus_keyboard.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(24, 'Power Bank Anker 10000mAh', 'Power bank dengan pengisian cepat', 399000.00, 22, 1, 'anker_powerbank.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(25, 'Smartwatch Xiaomi Mi Band 7', 'Smartwatch ringan dan multifungsi', 599000.00, 14, 1, 'mi_band7.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(26, 'Lampu LED Smart Yeelight', 'Lampu pintar yang bisa dikontrol dari HP', 229000.00, 16, 1, 'yeelight.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(27, 'Harddisk Eksternal WD 1TB', 'Penyimpanan data portabel', 799000.00, 9, 1, 'wd_1tb.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(28, 'Flashdisk Sandisk 64GB', 'Flashdisk USB 3.0 cepat dan ringan', 119000.00, 40, 1, 'sandisk_64gb.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(29, 'Printer Canon PIXMA MG2570S', 'Printer multifungsi untuk rumah & kantor', 749000.00, 6, 1, 'canon_pixma.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(30, 'Rice Cooker Philips 1.8L', 'Penanak nasi otomatis dengan fungsi penghangat', 599000.00, 13, 1, 'philips_ricecooker.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(31, 'Setrika Uap Panasonic', 'Setrika cepat panas dan hemat energi', 289000.00, 20, 1, 'panasonic_iron.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(32, 'Hand Blender Miyako', 'Hand blender portabel serbaguna', 229000.00, 10, 1, 'miyako_blender.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(33, 'CCTV Hikvision 1080p', 'Kamera pengawas dengan night vision', 499000.00, 11, 1, 'hikvision_cctv.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(34, 'Charger HP Baseus', 'Charger cepat USB 2.4A', 99000.00, 30, 1, 'baseus_charger.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(35, 'Tripod Kamera Takara', 'Tripod tinggi untuk kamera DSLR dan HP', 199000.00, 9, 1, 'takara_tripod.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(36, 'Speaker Aktif Simbadda', 'Speaker dengan bass kencang', 649000.00, 7, 1, 'simbadda_speaker.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(37, 'Laptop Lenovo IdeaPad 3', 'Laptop untuk pelajar dan kantor', 5899000.00, 5, 1, 'lenovo_ideapad.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(38, 'Smartphone Oppo A57', 'HP stylish dengan baterai tahan lama', 2799000.00, 10, 1, 'oppo_a57.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(39, 'Drone DJI Mini SE', 'Drone ringan untuk pemula', 4599000.00, 2, 1, 'dji_mini.jpg', 'active', '2025-06-18 14:50:16', '2025-06-18 14:50:16'),
(40, 'Earphone Realme Buds', 'Earphone in-ear dengan bass kuat', 129000.00, 25, 1, 'realme_buds.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(41, 'Tablet Samsung Galaxy Tab A7', 'Tablet multimedia 10.4 inci', 3299000.00, 7, 1, 'galaxy_tab_a7.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(42, 'Smartwatch Huawei Band 8', 'Smartwatch dengan fitur kebugaran lengkap', 549000.00, 13, 1, 'huawei_band8.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(43, 'Gimbal Zhiyun Smooth 5', 'Gimbal smartphone profesional', 1699000.00, 5, 1, 'zhiyun_smooth5.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(44, 'Stabilizer Kamera Ulanzi', 'Stabilizer ringan untuk vlog', 379000.00, 10, 1, 'ulanzi_stabilizer.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(45, 'Lampu Ring Light 33cm', 'Lampu selfie dengan tripod', 99000.00, 20, 1, 'ring_light.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(46, 'Webcam Logitech C270', 'Webcam HD dengan mikrofon', 349000.00, 8, 1, 'logitech_c270.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(47, 'Laptop Acer Aspire 5', 'Laptop kerja dan hiburan harian', 6399000.00, 6, 1, 'acer_aspire5.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(48, 'Monitor Samsung 27 Inch', 'Monitor FHD dengan panel VA', 2299000.00, 4, 1, 'samsung_monitor.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(49, 'Mic Condenser BM800', 'Mic studio untuk podcast dan rekaman', 259000.00, 15, 1, 'bm800_mic.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(50, 'Keyboard Wireless Logitech K380', 'Keyboard ringkas untuk multi device', 449000.00, 12, 1, 'logitech_k380.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(51, 'Router TP-Link Archer C6', 'Router dual band 1200Mbps', 459000.00, 9, 1, 'tplink_c6.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(52, 'Switch Hub 8 Port D-Link', 'Switch jaringan untuk kantor', 239000.00, 11, 1, 'dlink_switch.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(53, 'USB Hub 4 Port Orico', 'Hub USB untuk laptop dan PC', 99000.00, 18, 1, 'orico_hub.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(54, 'Tinta Printer Epson 003', 'Tinta original untuk printer Epson L series', 69000.00, 50, 1, 'epson_003.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(55, 'Kabel HDMI Vention 2M', 'Kabel HDMI 2 meter untuk monitor/TV', 59000.00, 22, 1, 'vention_hdmi.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(56, 'Cooling Pad Laptop NYK', 'Pendingin laptop dengan 5 kipas', 149000.00, 17, 1, 'nyk_cooler.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(57, 'UPS APC 650VA', 'UPS untuk perlindungan listrik komputer', 899000.00, 3, 1, 'apc_ups.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(58, 'Tablet Drawing Wacom CTL-4100', 'Tablet gambar digital untuk desain', 1049000.00, 6, 1, 'wacom_ctl4100.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00'),
(59, 'Laptop HP 14s', 'Laptop pelajar dengan Ryzen 3', 5999000.00, 7, 1, 'hp_14s.jpg', 'active', '2025-06-18 14:55:00', '2025-06-18 14:55:00');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `full_name`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator', 'admin', '2025-06-14 15:37:06', '2025-06-18 06:20:12'),
(11, 'admin1', 'admin1@gmail.com', '$2y$10$whRkdG4faFJtDd.qUVrBQOxaVp.giFQh/x.1CdPD4rWpYpW3.Z0vK', 'Administrator', 'admin', '2025-06-18 05:56:41', '2025-06-18 06:33:27'),
(12, 'test', 'test@gmail.com', '$2y$10$onediISPkJwL4MhyQae6Xe1LYH6hekOPXG3bkSQFXhnMQxMDvqZh.', 'test admin', 'user', '2025-06-18 06:22:07', '2025-06-18 06:34:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_category` (`category_id`),
  ADD KEY `idx_status` (`status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
