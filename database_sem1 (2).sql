
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'iPhone', 0, NULL, '2022-05-23 07:49:13', '2022-05-23 07:49:13'),
(2, 'Sam Sung', 0, NULL, '2022-05-23 07:49:25', '2022-05-23 07:49:25'),
(3, 'Xiaomi', 0, NULL, '2022-05-23 07:49:56', '2022-05-23 07:49:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Việt Anh', 'customer@gmail.com', '0385201482', 'Hà Nội', '$2y$10$W7II90wjo3ZybS8qgCKKTe32IqTHZu3JzyjjpJ/a3fmBo.3GIZB/u', NULL, NULL, '2022-05-24 06:49:42', '2022-05-24 06:49:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite`
--

CREATE TABLE `favorite` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2022_04_28_113005_category', 1),
(3, '2022_04_28_113015_product', 1),
(4, '2022_04_28_114028_create_customers_table', 1),
(5, '2022_04_28_134002_create_orders_table', 1),
(6, '2022_04_28_140900_create_order_details_table', 1),
(7, '2022_05_22_124041_create_favorites_table', 1),
(8, '2022_05_22_125957_create_comments_table', 1),
(9, '2022_06_01_111841_create_product_images_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `name`, `email`, `phone`, `address`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Việt Anh', 'customer@gmail.com', '0385201482', 'Hà Nội', 0, '2022-06-05 02:38:12', '2022-06-04 19:38:12', '2022-06-04 19:38:12'),
(2, 1, 'Việt Anh', 'customer@gmail.com', '0385201482', 'Hà Nội', 0, '2022-06-05 02:38:16', '2022-06-04 19:38:16', '2022-06-04 19:38:16'),
(3, 1, 'Việt Anh', 'customer@gmail.com', '0385201482', 'Hà Nội', 0, '2022-06-05 02:39:12', '2022-06-04 19:39:12', '2022-06-04 19:39:12'),
(4, 1, 'Việt Anh', 'customer@gmail.com', '0385201482', 'Hà Nội', 0, '2022-06-05 02:43:18', '2022-06-04 19:43:18', '2022-06-04 19:43:18'),
(5, 1, 'Việt Anh', 'customer@gmail.com', '0385201482', 'Hà Nội', 0, '2022-06-05 02:49:55', '2022-06-04 19:49:55', '2022-06-04 19:49:55'),
(6, 1, 'Việt Anh', 'customer@gmail.com', '0385201482', 'Hà Nội', 0, '2022-06-05 02:53:02', '2022-06-04 19:53:02', '2022-06-04 19:53:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`, `price`) VALUES
(3, 11, 1, 32000000.00),
(4, 12, 1, 14990000.00),
(5, 12, 1, 14990000.00),
(6, 4, 1, 26000000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `sale_price` float(10,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `sale_price`, `image`, `description`, `category_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 11 - 128GB - Chính hãng VN/A', 21990000.00, 13090000.00, '1653319036.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>IPS LCD</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>828 x 1792 Pixels</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.1\"</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>2 camera 12 MP, 12 MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>iOS 14</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Apple A13 Bionic 6 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>64 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>4 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 4G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>1 Nano SIM &amp; 1 eSIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>3110 mAh</span></li>\r\n</ul>', 2, 0, NULL, '2022-05-23 08:06:22', '2022-06-17 04:44:32'),
(2, 'Xiaomi 11T Pro 5G - 12GB/256GB', 14990000.00, NULL, '1653318510.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>AMOLED</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>Full HD+ (1080 x 2400 Pixels)</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.67\" - Tần số quét 120 Hz</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>Chính 108 MP &amp; Phụ 8 MP, 5 MP, 16 MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>Android 11</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Snapdragon 888 8 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>256 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>12 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>2 Nano SIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>5000 mAh</span></li>\r\n</ul>', 3, 0, NULL, '2022-05-23 08:08:30', '2022-05-23 08:08:30'),
(3, 'Samsung Galaxy S21 Ultra 128GB 5G', 30990000.00, 19590000.00, '1653318670.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>Dynamic AMOLED 2X</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>2K+ (1440 x 3200 Pixels)</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.8\"</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>Chính 108 MP &amp; Phụ 12 MP, 10 MP, 10 MP, 40 MP</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Exynos 2100 8 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>128 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>12 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>2 Nano SIM hoặc 1 Nano SIM + 1 eSIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>5000 mAh</span></li>\r\n</ul>', 2, 0, NULL, '2022-05-23 08:11:10', '2022-05-23 08:11:10'),
(4, 'Apple iPhone 12 Pro Max - 256GB', 28990000.00, 26000000.00, '1653318875.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>OLED</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>1170 x 2532 Pixels</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.1\"</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>2 camera 12 MP, 12 MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>iOS 14</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Apple A14 Bionic 6 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>256 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>4 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>1 Nano SIM &amp; 1 eSIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>2815 mAh</span></li>\r\n</ul>', 1, 0, NULL, '2022-05-23 08:14:35', '2022-05-23 08:14:35'),
(5, 'Xiaomi Redmi Note 10 Pro 8GB', 7490000.00, 5990000.00, '1653318964.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>AMOLED</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>Full HD+ (1080 x 2400 Pixels)</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.67\"</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>Chính 108 MP &amp; Phụ 8 MP, 5 MP, 2 MP, 16 MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>Android 11</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Snapdragon 732G 8 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>128 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>8 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 4G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>2 Nano SIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>5020 mAh</span></li>\r\n</ul>', 3, 0, NULL, '2022-05-23 08:15:26', '2022-05-23 08:16:04'),
(6, 'Samsung Galaxy A73', 11190000.00, NULL, '1653319170.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>Super AMOLED Plus</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>Full HD+ (1080 x 2400 Pixels)</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.7\" - Tần số quét 120 Hz</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>Chính 108 MP &amp; Phụ 12 MP, 5 MP, 5 MP, 32 MP</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Snapdragon 778G 5G 8 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>128GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>8GB</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>2 Nano SIM (SIM 2 chung khe thẻ nhớ)</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>Li-Ion 5000 mAh</span></li>\r\n</ul>\r\n<br>\r\n<div class=\"ddict_div\" style=\"top: 221px; max-width: 891px; left: 11px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/img/audio.png\" class=\"ddict_audio\">\r\n<p class=\"ddict_sentence\">Công nghệ màn hình:: Super AMOLED Plus</p>\r\n<p class=\"ddict_sentence\">Độ phân giải:: Full HD+ (1080 x 2400 Pixels)</p>\r\n<p class=\"ddict_sentence\">Màn hình rộng:: 6.7\" - Tần số quét 120 Hz</p>\r\n<p class=\"ddict_sentence\">Độ phân giải: Chính 108 MP &amp; Phụ 12 MP, 5 MP, 5 MP, 32 MP</p>\r\n<p class=\"ddict_sentence\">Chip xử lý (CPU): Snapdragon 778G 5G 8 nhân</p>\r\n<p class=\"ddict_sentence\">Bộ nhớ trong (ROM): 128GB</p>\r\n<p class=\"ddict_sentence\">RAM: 8GB</p>\r\n<p class=\"ddict_sentence\">Số khe sim: 2 Nano SIM (SIM 2 chung khe thẻ nhớ)</p>\r\n<p class=\"ddict_sentence\">Dung lượng pin: Li-Ion 5000 mAh</p>\r\n</div>', 2, 0, NULL, '2022-05-23 08:19:30', '2022-05-23 08:19:30'),
(7, 'Samsung Galaxy S22 Plus - 8GB/128GB', 25990000.00, 20990000.00, '1653407633.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>Dynamic AMOLED 2X, 10 - 120 Hz, Infinity O</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>2340 x 1080</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.6\"</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>12MP (UW) + 50MP (W) + 10MP (Tele), 10MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>Android 12</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Snapdragon® 8 Gen 1 (4nm)</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>128GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>8GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>1 nano SIM + 1 e-SIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>4500 mAh, Công suất hỗ trợ: 45W, Sạc kèm máy: Không có</span></li>\r\n</ul>\r\n<br>\r\n<div class=\"ddict_btn\" style=\"top: 58px; left: 1570px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\"></div>', 2, 0, NULL, '2022-05-23 08:21:12', '2022-05-24 08:53:53'),
(8, 'Apple iPhone 13 Pro - 512GB', 33890000.00, NULL, '1653319364.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>OLED</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>1170 x 2532 Pixels</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>3 camera 12 MP, 12 MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>iOS 15</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Apple A15 Bionic 6 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>512 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>6 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>1 Nano SIM &amp; 1 eSIM</span></li>\r\n</ul>', 1, 0, NULL, '2022-05-23 08:22:44', '2022-05-23 08:22:44'),
(9, 'POCO M4 Pro 5G 4GB/64GB', 5500000.00, 4490000.00, '1653319551.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>IPS LCD</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>Full HD+ (1080 x 2400 Pixels)</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>Chính 50 MP &amp; Phụ 8 MP, 16 MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>Android 11</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>MediaTek Dimensity 810 5G 8 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>64 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>4 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>2 Nano SIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>5000 mAh</span></li>\r\n</ul>', 3, 0, NULL, '2022-05-23 08:25:51', '2022-05-23 08:25:51'),
(10, 'Samsung Galaxy Z Flip3 5G - 128GB', 24990000.00, 18000000.00, '1653319631.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>Dynamic AMOLED 2X</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>Full HD+ (1080 x 2640 Pixels)</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>2 camera 12 MP, 10 MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>Android 11</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Snapdragon 888 8 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>128 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>8 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>1 Nano SIM &amp; 1 eSIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>3300 mAh</span></li>\r\n</ul>', 2, 0, NULL, '2022-05-23 08:27:11', '2022-05-23 08:27:11'),
(11, 'Samsung Galaxy S22 Ultra - 12GB/512GB', 36990000.00, 32000000.00, '1653319708.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>Dynamic AMOLED 2X</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>3088 x 1440</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.8\", Tần số quét: 1 - 120 Hz</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>12MP (UW) + 108MP (W) + 12MP (Tele3x) + 12MP (Tele10x), 40MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>Android 12</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Snapdragon® 8 Gen 1 (4nm)</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>256GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>12GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>1 nano SIM + 1 e-SIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>5000 mAh</span></li>\r\n</ul>', 2, 0, NULL, '2022-05-23 08:28:28', '2022-05-23 08:28:28'),
(12, 'Apple iPhone 12 Mini - 64GB', 20990000.00, 14990000.00, '1653319788.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>OLED</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>Full HD+ (1080 x 2340 Pixels)</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>5.4\"</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>2 camera 12 MP, 12 MP</span></li>\r\n<li><strong>Hệ điều hành:</strong><span> </span><span>iOS 14</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Apple A14 Bionic 6 nhân</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>64 GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>4 GB</span></li>\r\n<li><strong>Mạng di động:</strong><span> </span><span>Hỗ trợ 5G</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>1 Nano SIM &amp; 1 eSIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>2227 mAh</span></li>\r\n</ul>', 1, 0, NULL, '2022-05-23 08:29:48', '2022-05-23 08:29:48'),
(13, 'Xiaomi 12 Pro', 27990000.00, 22990000.00, '1653389260.png', '<ul>\r\n<li><strong>Công nghệ màn hình::</strong><span> </span><span>LTPO AMOLED, 120Hz, HDR10+</span></li>\r\n<li><strong>Độ phân giải::</strong><span> </span><span>QuadHD+ (1440 x 3200 pixels), tỉ lệ 20:9</span></li>\r\n<li><strong>Màn hình rộng::</strong><span> </span><span>6.73 inches</span></li>\r\n<li><strong>Độ phân giải:</strong><span> </span><span>50 MP, f/1.9 (góc rộng), Dual Pixel PDAF, OIS, 50 MP, f/1.9 (tele), PDAF, 2x zoom, 50 MP, f/2.2, 115˚ (góc siêu rộng), 32 MP (góc rộng)</span></li>\r\n<li><strong>Chip xử lý (CPU):</strong><span> </span><span>Qualcomm SM8450 Snapdragon 8 Gen1 (4 nm), 8 nhân (1x3.00 GHz &amp; 3x2.50 GHz &amp; 4x1.80 GHz), GPU: Adreno 730</span></li>\r\n<li><strong>Bộ nhớ trong (ROM):</strong><span> </span><span>256GB</span></li>\r\n<li><strong>RAM:</strong><span> </span><span>12GB</span></li>\r\n<li><strong>Số khe sim:</strong><span> </span><span>2 Nano SIM</span></li>\r\n<li><strong>Dung lượng pin:</strong><span> </span><span>Li-Po 4600 mAh, sạc nhanh 120W</span></li>\r\n</ul>', 3, 0, NULL, '2022-05-24 03:47:40', '2022-05-24 03:47:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `image_name`, `product_id`, `created_at`, `updated_at`) VALUES
(16, '16554655681.png', 2, '2022-06-17 04:32:48', '2022-06-17 04:32:48'),
(18, '16554656621.png', 3, '2022-06-17 04:34:22', '2022-06-17 04:34:22'),
(20, '16554657621.png', 4, '2022-06-17 04:36:02', '2022-06-17 04:36:02'),
(22, '16554659071.png', 5, '2022-06-17 04:38:27', '2022-06-17 04:38:27'),
(25, '16554662450.png', 1, '2022-06-17 04:44:05', '2022-06-17 04:44:05'),
(27, '16554664930.png', 6, '2022-06-17 04:48:13', '2022-06-17 04:48:13'),
(28, '16554665570.png', 7, '2022-06-17 04:49:17', '2022-06-17 04:49:17'),
(29, '16554666030.png', 8, '2022-06-17 04:50:03', '2022-06-17 04:50:03'),
(30, '16554666450.png', 9, '2022-06-17 04:50:45', '2022-06-17 04:50:45'),
(31, '16554666810.png', 10, '2022-06-17 04:51:21', '2022-06-17 04:51:21'),
(32, '16554667090.png', 11, '2022-06-17 04:51:49', '2022-06-17 04:51:49'),
(33, '16554667570.png', 12, '2022-06-17 04:52:37', '2022-06-17 04:52:37'),
(34, '16554668000.png', 13, '2022-06-17 04:53:20', '2022-06-17 04:53:20');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Viet Anh', 'admin@gmail.com', NULL, '$2y$10$KIRGHlPZUNU6szAJrtPzF.GfAFZsnKqA5WFZV0UFrsDbCnmFwq.n2', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `favorite_customer_id_foreign` (`customer_id`),
  ADD KEY `favorite_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `favorite_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
