-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 03, 2019 lúc 03:49 CH
-- Phiên bản máy phục vụ: 5.7.17-log
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `uray`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'Dưỡng da', 'Chăm sóc da đã là một ưu tiên hàng đầu cho vẻ đẹp của phụ nữ trên khắp thế giới từ hàng ngàn năm. Tại Uray, chúng tôi mong muốn cung cấp cho bạn những sản phẩm tốt nhất để chăm sóc làn da của bạn, bao gồm sữa rửa mặt, cấp nước dưỡng ẩm, kem đa chức năng và mặt nạ nuôi dưỡng. StyleKorean cũng cung cấp các sản phẩm chuyên biệt cho việc chăm sóc mụn, chống lão hóa và làm sáng da.', 'da', '2019-06-19 18:34:15', '2019-06-19 18:40:27'),
(2, 'Trang điểm', 'Sản phẩm trang điểm Uray chú trọng ưu tiên nhất vào khuôn mặt của bạn và tạo ra bức tranh hoàn hảo cho làn da rạng rỡ. Uray nắm được tông da bạn, mọi hình thức và cách hoàn thiện trang điểm của bạn !', 'makeup', '2019-06-19 20:18:26', '2019-06-19 20:18:26'),
(3, 'Nước hoa', 'Nước hoa nhập khẩu và các thương hiệu nổi tiếng trong nước', 'nước hoa', '2019-06-24 20:50:04', '2019-06-24 20:50:04'),
(5, 'Dưỡng tóc', 'Các sản phẩm dưỡng tóc trong và ngoài nước uy tín', 'dưỡng tóc', '2019-06-24 20:51:38', '2019-06-24 20:51:38'),
(6, 'Phụ kiện', 'Phụ kiện trang điểm đang hot', 'phụ kiện', '2019-06-24 20:52:15', '2019-06-24 20:52:15');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_16_132519_create_categories_table', 1),
(4, '2019_06_16_133108_create_products_table', 2),
(5, '2019_06_16_134148_create_product_imgs_table', 2),
(8, '2019_06_16_141001_create_admin_table', 3),
(11, '2014_10_12_000000_create_users_table', 4),
(13, '2019_06_24_095954_create_sale_products_table', 5),
(14, '2019_06_16_134737_create_orders_table', 6),
(17, '2019_06_16_135617_create_order_details_table', 7),
(18, '2019_06_30_152214_create_reviews_table', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalMoney` double(8,2) NOT NULL,
  `Date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_name`, `totalMoney`, `Date`, `created_at`, `updated_at`) VALUES
(13, 2, 'Trần Bá Linh', 162.00, '2019-06-29', '2019-06-29 00:44:30', '2019-06-29 00:44:30'),
(14, 2, 'Trần Bá Linh', 24.00, '2019-06-29', '2019-06-29 00:46:11', '2019-06-29 00:46:11'),
(15, 1, 'Nguyễn Thị Phương Hà', 85.00, '2019-06-29', '2019-06-29 00:54:25', '2019-06-29 00:54:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `qty`, `note`, `created_at`, `updated_at`) VALUES
(1, 13, 8, 'Kem lót trang điểm Jupier (Giàu ẩm)', 87.00, 1, NULL, '2019-06-29 00:44:30', '2019-06-29 00:44:30'),
(2, 13, 7, 'Kem lót làm trắng và cải thiện nám dạng tinh chất Fairlucent', 75.00, 1, NULL, '2019-06-29 00:44:30', '2019-06-29 00:44:30'),
(3, 14, 3, 'Mặt Nạ Real Nature Mask Sheet/ Trà Xanh 23ml', 12.00, 2, 'Nhẹ tay', '2019-06-29 00:46:12', '2019-06-29 00:46:12'),
(4, 15, 9, 'Kem dưỡng ban đêm bổ sung độ ẩm & làm sáng da Lisciare', 85.00, 1, NULL, '2019-06-29 00:54:25', '2019-06-29 00:54:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `prdescriptions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prkeywords` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `image`, `category_id`, `prdescriptions`, `prkeywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mặt Nạ Watery Luminous S.O.S Ringer Mask (10 miếng)', 87.00, 'JM_detail.jpg', 1, 'Mặt nạ dưỡng da ban đêm', 'Watery Luminous', 'new', NULL, '2019-06-21 00:28:15'),
(3, 'Mặt Nạ Real Nature Mask Sheet/ Trà Xanh 23ml', 12.00, 'mat_naTS.jpg', 1, 'Mặt nạ trà xanh', 'Real Nature Mask Sheet', 'new', '2019-06-19 20:06:13', '2019-06-19 20:06:13'),
(4, 'Sữa Dưỡng Orchid Lotion 160ml', 20.00, 'sua_duong_da.jpg', 1, 'Kem dưỡng chứa nhiều dưỡng chất giúp giải quyết các vấn đề về da ngay lập tức.', 'Orchid Lotion', 'new', '2019-06-19 20:09:28', '2019-06-19 20:09:28'),
(5, 'Sữa Rửa Mặt Dạng Gel Green Tea Cleansing Gel-To-Foam 150ml', 20.00, 'product10.jpg', 1, 'Thương hiệu : Innisfree\r\nKhối Lượng : 200g (0.44 lbs)', 'Gel Green Tea Cleansing', 'sale', '2019-06-19 20:14:03', '2019-06-19 20:14:03'),
(6, 'Phấn Kill Cover Stay Perfect Foundation #003 (Linen)', 25.00, 'product_11.jpg', 2, 'Thương hiệu : CLIO\r\nKhối Lượng : 100g (0.22 lbs)', 'Perfect Foundation', 'new', '2019-06-19 20:22:02', '2019-06-19 20:22:02'),
(7, 'Kem lót làm trắng và cải thiện nám dạng tinh chất Fairlucent', 75.00, 'product.jpg', 2, 'Tinh chất lót giàu dưỡng với dẫn chất APM, vitamin E và tinh chất chiết xuất từ men Shirakami, vừa có tác dụng dưỡng trắng da, vừa có tác dụng tạo lớp nền mỏng mịn tự nhiên, cải thiện độ sáng của phấn phủ. Bảo vệ da trước tác hại của tia tử ngoại với chi số chống nắng SPF 30 PA . Sản phẩm được kiểm nghiệm bởi Viện da liễu, không gây mụn.', 'Fairlucent', 'sale', '2019-06-24 20:34:25', '2019-06-24 20:34:25'),
(8, 'Kem lót trang điểm Jupier (Giàu ẩm)', 87.00, 'product5.jpg', 2, 'Kem lót trang điểm Giàu Ẩm Jupier có khả năng “2 trong 1” vừa giúp lớp nền hoàn thiện, bền màu, vừa có khả năng bảo vệ và nuôi dưỡng làn da từ sâu bên trong với Collagen, Acid Hyaluronic, NMF,… Hạt phấn hình lập phương có nguồn gốc từ San hô tạo hiệu ứng phủ lụa, sắc diện đồng đều tươi sáng, hỗ trợ lớp nền mịn màng và lâu trôi. Sản phẩm còn có chỉ số chống nắng SPF 20 / PA', 'Fairlucent', 'sale', '2019-06-24 20:39:23', '2019-06-24 20:39:23'),
(9, 'Kem dưỡng ban đêm bổ sung độ ẩm & làm sáng da Lisciare', 85.00, 'product6.jpg', 1, 'Kem dưỡng ban đêm giàu dưỡng chất thẩm thấu sâu vào da, tái tạo các tế bào, bổ sung sức sống và hồi phục tổn thương da trong suốt giấc ngủ, cho làn da sáng khỏe vào buổi sớm mai', 'Lisciaredd', 'popular', '2019-06-24 20:44:00', '2019-06-24 20:44:00'),
(10, 'Bảng Phấn Mắt 10 Màu Cafe Đậm Thời Thượng Etude House Play Color Eyes Caffeine Holic', 20.00, 'detail17.jpg', 2, 'Lấy cảm hứng từ màu nâu trầm của hạt cafe, 10 màu là 10 sắc thái hoàn toàn khác nhau .Từ sự nhẹ nhàng ngọt ngào như tách cafe sữa với màu Nutty Cloud, Toffe Topping, Code Brulatte,...Đến sự trầm ấm của ly cafe đen quyến rũ như màu Soled Caramel Latte, Ice Cube Latte, Americano.', 'Phấn Mắt 10 Màu', 'new', '2019-07-03 01:38:23', '2019-07-03 01:38:23'),
(11, 'Son Lì Bền Màu Và Dưỡng Ẩm Cho Môi Unny Club Black Square Lipstick', 15.00, 'detail14.jpg', 2, 'Các dòng son của Unny Club luôn ghi điểm mạnh mẽ bởi kết cấu son hoàn hảo, và sản phẩm lần này cũng không làm những người yêu son thất vọng. Unny Club Black Square Lipstick có kết cấu son dày nhưng cực mịn, có chút xốp, khi đánh tệp nhanh lên môi và rất nhẹ không làm nặng môi', 'Black Square Lipstick', 'new', '2019-07-03 01:40:41', '2019-07-03 01:40:41'),
(12, 'Mascara Không Thấm Nước Và Dưỡng Ẩm Cho Mi Kanizea Perfectly Volume Mascara', 20.00, 'product12.jpg', 2, 'Mascara Không Thấm Nước Và Dưỡng Ẩm Cho Mi Kanizea Perfectly Volume Mascara là dòng mascara 2 in 1, không chỉ giúp mi trông dày và cong hơn mà sản phẩm còn giúp chăm sóc mi thêm khỏe mạnh với các dưỡng chất cần thiết. Chính sự ưu việt đó đã làm sản phẩm được ưa chuộng bật nhất trong cộng đồng làm đẹp ở Hàn Quốc.', 'Mascara Không Thấm Nước', 'new', '2019-07-03 01:43:07', '2019-07-03 01:43:07'),
(13, 'Son Thỏi Eyenlip Beauty Matt Lipstick 5 Color 4g', 35.00, 'product11.jpg', 2, 'Son Thỏi Cho Đôi Môi Mềm Mượt Eyenlip Beauty Matt Lipstick 5 Color 4g là dòng son đầy cuốn hút với kết cấu và màu sắc hoàn hảo khiến bất kỳ cô gái nào cũng phải siêu lòng. Vì thế, sản phẩm được dự đoán sẽ khuynh đảo mạnh mẽ cộng đồng làm đẹp tại Việt Nam trong thời gian sắp tới', 'Eyenlip Beauty Matt Lipstick', 'sale', '2019-07-03 01:44:47', '2019-07-03 01:44:47'),
(14, 'Mặt Nạ Dưỡng Da 7 Màu Innisfree Jeju Volcanic Color Clay Mask 70ml', 23.00, 'product13.jpg', 1, 'Color clay mask bao gồm 07 loại, chiết xuất chính từ tro núi lửa trên đảo Jeju - Hàn Quốc, được hãng bổ sung thêm các dưỡng chất có tác dụng khác nhau giúp chăm sóc chuyên biệt cho từng vùng da trên khuôn mặt cùng một lúc.', 'Innisfree Jeju Volcanic', 'sale', '2019-07-03 01:50:51', '2019-07-03 01:50:51'),
(15, 'Nước Hoa Nữ Charme Queen Eau De Parfum', 46.00, 'product14.jpg', 3, 'Nước Hoa Nữ Charme Queen Eau De Parfum là sản phẩm đến từ thương hiệu Charme với hương thơm nồng nàn quyến rũ, nhẹ nhàng, tinh tế khó ai có thể cưỡng lại được giúp nàng tự tin khoe cá tính trong bất kì hoàn cảnh nào. Đặc biệt với thời gian lưu hương rất lâu sẽ giúp bạn tự tin suốt cả ngày dài.', 'Nước Hoa Nữ', 'new', '2019-07-03 01:55:19', '2019-07-03 01:55:19'),
(16, 'Nước Hoa Dạng Xịt The Face Shop Soul Promise Ring 30ml', 47.00, 'product15.jpg', 3, 'Nước hoa Soul có mùi hương nhẹ nhàng và tươi mát, phù hợp với dân văn phòng, hay các bạn học sinh, sinh viên ngồi trên ghế nhà trường - những khi cần giản dị, không bị nổi bật mà vẫn để lại dấu ấn riêng', 'Soul Promise Ring', 'bt', '2019-07-03 01:59:16', '2019-07-03 06:24:26'),
(17, 'Nước Hoa Nữ Charme Good Girl 100ml', 55.00, 'product16.jpg', 3, 'Nước Hoa Nữ Charme Good Girl 100ml là dòng nước hoa nữ đang được ưa chuộng nhất của thương hiệu nước hoa Charme hiện nay. Với sự kết hợp của các thành phần tự nhiên tạo nên mùi hương gợi cảm được phái đẹp yêu thích và tin dùng. Charme Good Girl được xem là một trong những dòng nước hoa đặc biệt bán chạy nhất tại nhà Charme.', 'Charme Good Girl', 'bt', '2019-07-03 02:03:25', '2019-07-03 02:03:25'),
(18, 'Dầu Gội Tinh Chất Collagen Sao Biển Collanic Premium Nourishing Shampoo', 24.00, 'product17.jpg', 5, 'Collagen thường dùng cho da mặt, cơ thể nhưng cũng được nhà Collanic áp dụng vào Dầu Gội Tinh Chất Collagen Sao Biển Dưỡng Ẩm Chuyên Sâu Và Chăm Sóc Tóc Khô Collanic Premium Nourishing Shampoo để mang tới sự bứt phá mới về cải thiện da đầu, da đầu cũng cần được dưỡng ẩm để tóc có thể phát triển tốt nhất, giúp bạn có mái tóc suôn mượt.', 'Collanic Premium Nourishing Shampoo', 'bt', '2019-07-03 02:08:18', '2019-07-03 02:08:18'),
(19, 'Dầu Gội Đặc Trị Gàu Head & Shoulders Clinical Strength Shampoo 400Ml', 22.00, 'product18.jpg', 5, 'Dầu Gội Đặc Trị Gàu Head & Shoulders Clinical Strength Shampoo giúp điều trị và ngăn ngừa tình trạng gàu.', 'Head & Shoulders', 'bt', '2019-07-03 02:11:40', '2019-07-03 02:11:40'),
(20, 'Bộ Cọ Trang Điểm 12 Cây Naked 3 Urban Decay', 12.00, 'product20.jpg', 6, '- Bộ cọ trang điểm naked 3 urban decay gồm 12 cây cọ cơ bản đủ để các bạn hoàn thành các bước trang điểm nhanh chóng.\r\n- Lông cọ mịn được làm từ chất liệu cao cấp, dễ bám phấn và không gây hại cho da.\r\n- Cọ trang điển naked có cán bằng gỗ cứng cáp, được xử lý bằng công nghệ kháng khuẩn.\r\n- Bộ cọ urban decay được đựng vào hộp bằng kim loại rất sang trọng và tiện dụng có thể bỏ vào túi xách và mang đi dễ dàng.', 'Bộ Cọ Trang Điểm', 'bt', '2019-07-03 02:19:13', '2019-07-03 02:19:13'),
(21, 'Băng Đô Quấn Tóc Tóc Missha Hair Band', 11.00, 'product21.jpg', 6, 'Băng Cuốn Tóc Missha Hair Band hình nơ màu hồng cực xinh nha các nàng! Dùng để cố định tóc khi đắp mặt nạ hay rửa mặt nha.', 'Băng Cuốn Tóc', 'bt', '2019-07-03 02:22:22', '2019-07-03 02:22:22'),
(22, 'Cọ Đánh Phấn Nước Innisfree Eco Beauty Tool Cushion Brush', 27.00, 'product22.jfif', 6, 'Cọ Đánh Phấn Nước Innisfree Eco Beauty Tool Cushion Brush là cọ dùng để đánh phấn nước, giúp chị em phụ nữ trang điểm nhanh hơn, với thiết kế xinh xắn, nhỏ gọn sản phẩm giúp tán nhanh phấn nước đều khắp mặt, mang lại lớp trang điểm mềm mại, và bóng mịn', 'Innisfree Eco Beauty', 'bt', '2019-07-03 02:27:04', '2019-07-03 02:27:04'),
(23, 'Serum Dưỡng Tóc Cho Tóc Dầu Mise En Scène Perfect Repair Light Serum', 67.00, 'product19.jpg', 5, 'Serum Dưỡng Tóc Mise En Scène Perfect Repair Light Serum là sản phẩm thuộc dòng Light với chất lỏng nhẹ, thấm nhanh, phù hợp với mọi loại tóc kể cả tóc dầu. Không chỉ giúp tóc khỏe, ngăn ngừa những tổn hại cho tóc do các tác nhân bên ngoài mà còn nuôi dưỡng tóc óng mượt.', 'Serum Dưỡng Tóc', 'new', '2019-07-03 02:54:26', '2019-07-03 02:54:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_imgs`
--

CREATE TABLE `product_imgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_imgs`
--

INSERT INTO `product_imgs` (`id`, `image_detail`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'killcover_detail.jpg', 6, '2019-06-19 20:56:02', '2019-06-19 20:56:02'),
(2, 'killcover_detail2.jpg', 6, '2019-06-19 20:58:21', '2019-06-19 20:58:21'),
(3, 'killcover_detail3.jpg', 6, '2019-06-19 20:58:37', '2019-06-19 20:58:37'),
(4, 'killcover_detail1.jpg', 6, '2019-06-19 22:45:45', '2019-06-19 22:45:45'),
(5, 'JM_detail1.jpg', 1, '2019-06-19 23:01:45', '2019-06-19 23:01:45'),
(6, 'JM_detail2.jpg', 1, '2019-06-19 23:02:07', '2019-06-19 23:02:07'),
(7, 'JM_detail3.jpg', 1, '2019-06-19 23:02:26', '2019-06-19 23:02:26'),
(8, 'JM_detail.jpg', 1, '2019-06-19 23:02:57', '2019-06-19 23:02:57'),
(9, 'mat_naTS.jpg', 3, '2019-07-03 02:37:55', '2019-07-03 02:37:55'),
(10, 'sua_duong_da.jpg', 4, '2019-07-03 02:38:58', '2019-07-03 02:38:58'),
(11, 'product10.jpg', 5, '2019-07-03 02:39:24', '2019-07-03 02:39:24'),
(12, 'product.jpg', 7, '2019-07-03 02:39:56', '2019-07-03 02:39:56'),
(13, 'product5.jpg', 8, '2019-07-03 02:40:17', '2019-07-03 02:40:17'),
(14, 'product6.jpg', 9, '2019-07-03 02:40:47', '2019-07-03 02:40:47'),
(15, 'detail17.jpg', 10, '2019-07-03 02:41:22', '2019-07-03 02:41:22'),
(16, 'detail19.jpg', 10, '2019-07-03 02:41:39', '2019-07-03 02:41:39'),
(17, 'detail20.jpg', 10, '2019-07-03 02:41:51', '2019-07-03 02:41:51'),
(18, 'detail21.jpg', 10, '2019-07-03 02:42:13', '2019-07-03 02:42:13'),
(19, 'detail14.jpg', 11, '2019-07-03 02:42:54', '2019-07-03 02:42:54'),
(20, 'detail15.jpg', 11, '2019-07-03 02:43:10', '2019-07-03 02:43:10'),
(21, 'detail16.jpg', 11, '2019-07-03 02:43:24', '2019-07-03 02:43:24'),
(22, 'detail18.jpg', 11, '2019-07-03 02:43:37', '2019-07-03 02:43:37'),
(23, 'product12.jpg', 12, '2019-07-03 02:44:09', '2019-07-03 02:44:09'),
(24, 'detail12.jpg', 12, '2019-07-03 02:44:33', '2019-07-03 02:44:33'),
(25, 'detail13.jpg', 12, '2019-07-03 02:44:55', '2019-07-03 02:44:55'),
(26, 'product11.jpg', 13, '2019-07-03 02:45:19', '2019-07-03 02:45:19'),
(27, 'detail9.jpg', 13, '2019-07-03 02:45:36', '2019-07-03 02:45:36'),
(28, 'detail10.jpg', 13, '2019-07-03 02:45:55', '2019-07-03 02:45:55'),
(29, 'detail11.jpg', 13, '2019-07-03 02:46:08', '2019-07-03 02:46:08'),
(30, 'product13.jpg', 14, '2019-07-03 02:46:33', '2019-07-03 02:46:33'),
(31, 'detail22.jpg', 14, '2019-07-03 02:46:48', '2019-07-03 02:46:48'),
(32, 'detail23.jpg', 14, '2019-07-03 02:47:05', '2019-07-03 02:47:05'),
(33, 'detail24.jpg', 14, '2019-07-03 02:47:19', '2019-07-03 02:47:19'),
(34, 'product14.jpg', 15, '2019-07-03 02:47:43', '2019-07-03 02:47:43'),
(35, 'detail25.jpg', 15, '2019-07-03 02:48:00', '2019-07-03 02:48:00'),
(36, 'detail26.jpg', 15, '2019-07-03 02:48:22', '2019-07-03 02:48:22'),
(37, 'product15.jpg', 16, '2019-07-03 02:48:43', '2019-07-03 02:48:43'),
(38, 'detail27.jpg', 16, '2019-07-03 02:48:59', '2019-07-03 02:48:59'),
(39, 'detail28.jpg', 16, '2019-07-03 02:49:16', '2019-07-03 02:49:16'),
(40, 'product16.jpg', 17, '2019-07-03 02:49:43', '2019-07-03 02:49:43'),
(41, 'detail29.jpg', 17, '2019-07-03 02:50:03', '2019-07-03 02:50:03'),
(42, 'detail30.jpg', 17, '2019-07-03 02:50:18', '2019-07-03 02:50:18'),
(43, 'product17.jpg', 18, '2019-07-03 02:50:43', '2019-07-03 02:50:43'),
(44, 'detail31.jpg', 18, '2019-07-03 02:50:59', '2019-07-03 02:50:59'),
(45, 'detail32.jpg', 18, '2019-07-03 02:51:12', '2019-07-03 02:51:12'),
(46, 'product18.jpg', 19, '2019-07-03 02:51:55', '2019-07-03 02:51:55'),
(47, 'detail33.jpg', 19, '2019-07-03 02:52:13', '2019-07-03 02:52:13'),
(48, 'detail34.jpg', 19, '2019-07-03 02:52:30', '2019-07-03 02:52:30'),
(49, 'product20.jpg', 20, '2019-07-03 02:55:03', '2019-07-03 02:55:03'),
(50, 'detail38.jpg', 20, '2019-07-03 02:55:18', '2019-07-03 02:55:18'),
(51, 'detail39.jpg', 20, '2019-07-03 02:55:40', '2019-07-03 02:55:40'),
(52, 'detail40.jpg', 20, '2019-07-03 02:55:55', '2019-07-03 02:55:55'),
(53, 'product21.jpg', 21, '2019-07-03 02:56:12', '2019-07-03 02:56:12'),
(54, 'detail41.jpg', 21, '2019-07-03 02:56:29', '2019-07-03 02:56:29'),
(55, 'detail42.jpg', 21, '2019-07-03 02:56:40', '2019-07-03 02:56:40'),
(56, 'product22.jfif', 22, '2019-07-03 02:57:02', '2019-07-03 02:57:02'),
(57, 'detail43.jfif', 22, '2019-07-03 02:57:19', '2019-07-03 02:57:19'),
(58, 'detail44.jpg', 22, '2019-07-03 02:57:33', '2019-07-03 02:57:33'),
(59, 'product19.jpg', 23, '2019-07-03 02:57:46', '2019-07-03 02:57:46'),
(60, 'detail35.jpg', 23, '2019-07-03 02:58:01', '2019-07-03 02:58:01'),
(61, 'detail36.jpg', 23, '2019-07-03 02:58:25', '2019-07-03 02:58:25'),
(62, 'detail37.jpg', 23, '2019-07-03 02:58:39', '2019-07-03 02:58:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `review`, `created_at`, `updated_at`) VALUES
(3, 2, 3, 'Sản phẩm đáng tiền', '2019-06-30 10:39:24', '2019-07-02 21:42:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale_products`
--

CREATE TABLE `sale_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `sale` double(8,2) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sale_products`
--

INSERT INTO `sale_products` (`id`, `sale`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 0.40, 5, '2019-06-24 03:23:23', '2019-06-24 03:24:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `level`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Thị Phương Hà', 'phuongha@gmail.com', '$2y$10$gPA0hB/bcH6pmldsrtl1IOd/y.DJMRpRQWMEvrvAGap4EOI9sT.Ym', 'Hà Nam', '0379093127', 1, 'avatar1.jpg', 'rAPHFeXDlQCjenQ6nffqe56hC9EulnyQTDKGzhuKjCIrVI4Cy0hWGEtsvJdA', '2019-06-21 19:26:24', '2019-06-30 09:13:12'),
(2, 'Trần Bá Linh', 'linh@gmail.com', '$2y$10$r5Akh1SAtRM029ViO109PORvZDXDU7csQkD2yO0WHwT1l52rKV9K.', 'Hà Nội', '0379093120', 2, 'ourteam-item2.jpg', 'sDh9x4HXrBCOJzgBH5qeZwcjVgN8Uv4u1WZBVQsYbp0moh7eDG260xJe07dF', '2019-06-21 21:55:28', '2019-07-03 08:37:34'),
(3, 'Phạm Thùy Linh', 'phamlinh@gmail.com', '$2y$10$TvErsszIs/MKIFze.uUp..qZfxeUFnSadDp8vDicl9ZMonnwpcGzq', 'Đại Từ, Thái Nguyên', '0379093126', 2, 'detail9.jpg', '2iV7Lpa1sgCafdEOkbh2wVeYKamoc7kAb0CF6kAQJSVymts7g1uHZO9iUMI7', '2019-07-03 05:23:43', '2019-07-03 07:21:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`),
  ADD UNIQUE KEY `products_image_unique` (`image`);

--
-- Chỉ mục cho bảng `product_imgs`
--
ALTER TABLE `product_imgs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_imgs_image_detail_unique` (`image_detail`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sale_products`
--
ALTER TABLE `sale_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_password_unique` (`password`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT cho bảng `product_imgs`
--
ALTER TABLE `product_imgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `sale_products`
--
ALTER TABLE `sale_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
