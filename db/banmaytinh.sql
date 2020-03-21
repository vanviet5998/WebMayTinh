-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 25, 2020 lúc 10:35 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banmaytinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_taikhoan` varchar(100) NOT NULL,
  `admin_matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_taikhoan`, `admin_matkhau`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `baiviet_ten` varchar(100) NOT NULL,
  `baiviet_tomtat` text NOT NULL,
  `baiviet_noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `baiviet_ten`, `baiviet_tomtat`, `baiviet_noidung`, `danhmuctin_id`, `baiviet_image`) VALUES
(1, 'CHỌN MUA MÁY TÍNH ĐỂ BÀN HAY LAPTOP ?', 'Mình nên mua máy tính để bàn hay laptop nhỉ ?\r\nĐây là câu hỏi mà nhiều người vẫn thường đặt ra khi họ đứng trước lựa chọn mua PC hay Laptop. Thường thì chúng ta sẽ xem xét đến mục đích sử dụng của chúng ta, bạn có di chuyển nhiều hay không? vì nếu như mục đích là di chuyển để làm việc thì bạn phải chọn laptop nhưng nếu không di chuyển nhiều thì máy bàn là lựa chọn hàng đầu vì:', 'Đây là câu hỏi mà nhiều người vẫn thường đặt ra khi họ đứng trước lựa chọn mua PC hay Laptop. Thường thì chúng ta sẽ xem xét đến mục đích sử dụng của chúng ta, bạn có di chuyển nhiều hay không? vì nếu như mục đích là di chuyển để làm việc thì bạn phải chọn laptop nhưng nếu không di chuyển nhiều thì máy bàn là lựa chọn hàng đầu vì:\r\nThứ 1: PC bền hơn Laptop, điều này đã được chứng minh từ nhiều nguồn tin tưởng.\r\nThứ 2: PC có thể dễ dàng nâng cấp về sau hơn Laptop. Nó có thể nâng dể dàng cpu, ram, vga,... mà ko phải lo lắng nhiều, bạn chỉ cần biết một chút thôi là có thể dể dàng thay thế.\r\nThứ 3: PC có giá thành rẻ hơn Laptop với cùng một cấu hình, bạn có thể kiểm chứng điều đó ở google hoặc nhiều website rao vặt khác,.....\r\nThứ 4: PC luôn có hiệu năng cao hơn và mát hơn so với Laptop đó là lí do tại sao các game thủ thường chọn PC thay vì Laptop.\r\nThứ 5: PC cho khả năng vượt trội về các công việc như render phim hoặc ảnh, các ứng dụng khác cho các ngành kiến trúc, đồ họa, kĩ sư,.....', 1, 'maybo4.jpg'),
(2, 'CHỌN MUA LAPTOP NHƯ THẾ NÀO !?', 'Thời đại bây giờ các bạn có thể thấy việc mua sắm bất cứ thứ gì là vô cùng khó khăn.\r\n\r\nCó quá nhiều mặt hàng, sản phẩm với đủ thông tin khác nhau. Và nếu bạn muốn tìm ra 1 sản phẩm tối ưu, đáng tiền nhất và phù hợp nhất cho bản thân là cả một quá trình VÔ CÙNG gian khổ.\r\n\r\n:', 'Bài viết này thì mình chia sẻ cho mọi người kinh nghiệm về cách chọn laptop như thế nào cho phù hợp.\r\n\r\nĐầu tiên là bạn phải xác định rõ những tiêu chí và nhu cầu sử dụng của bản thân.\r\n\r\nGiá tiền chấp nhận được.\r\nHãy xác định rõ ràng khoảng giá mà bạn có thể mua và độ chênh lệch có thể chấp nhận được (thường là khoảng 10%).\r\n\r\nTrong bài này thì mình ví dụ mình đang tìm mua sản phẩm mức giá 20-25 triệu.\r\n\r\nNhu cầu sử dụng.\r\nBạn phải xác định rõ là 80% thời gian mình sẽ dùng cho việc gì. Vì nếu hy sinh nhiều tiền hơn chỉ để phục vụ 20% thời gian nhỏ cho 1 mục đích khác thì rõ ràng là không hiệu quả.\r\n\r\nCông việc văn phòng và đa nhiệm: chủ yếu dùng laptop cho ứng dụng văn phòng, lướt web, giải trí, chơi game vừa phải.\r\n\r\nGame: chủ yếu sử dụng để chơi game nặng với FPS cao.\r\n\r\nThiết kế và đồ họa: chủ yếu dùng để thiết kế và render để xuất các file hình ảnh, video.\r\n\r\nHiểu rõ một số điểm mạnh và yếu quan trọng của laptop.\r\nLaptop chủ yếu dùng để di chuyển. Do đó, bạn sẽ muốn nó càng nhẹ càng tốt. Tuy nhiên, nếu bạn ít khi mang đi lại và để cố định 1 chỗ 80% thời gian thì hoàn toàn có thể dùng laptop nặng vừa phải.\r\n\r\nLaptop dễ bị nóng nếu dùng trong thời gian dài. Do đó, nếu bạn chỉ dùng công việc văn phòng thì không sao. Nhưng nếu chơi game hay làm thiết kế, lập trình thì nên ưu tiên máy tản nhiệt tốt.\r\n\r\nDạng laptop bạn muốn mua là gì?\r\nHiện tại có vài dạng phổ biến chủ yếu như sau:\r\n\r\nLaptop bình thường\r\nLaptop kết hợp máy tính bảng: đây là dòng laptop mới có thể tách màn hình ra và sử dụng như máy tính bảng.\r\nUltrabook: đây là loại laptop mỏng, nhỏ và nhẹ nhưng có hiệu suất tốt và thời lượng pin dài. Và dòng máy này thì khá là đắt tiền so với các dòng khác.\r\nMacbook: đây lả 1 thể loại khác rồi nên mình sẽ không nói đến trong bài. Giống như bạn chọn mua iPhone hay Smartphone thì nên quyết định chọn luôn ngay từ đầu.\r\nMua máy tính có cấu hình theo nhu cầu phù hợp.\r\nKhi mua một máy tính thì cấu hình là vô cùng quan trọng, vậy nên mình sẽ viết để mọi người có thể nhìn vào nhiều máy tính khác nhau và hiểu sự khác biệt giữa chúng. Ngay cả khi cùng một model thì cấu hình bên trong cũng có thể khác nhau. Giống như iPhone 6 32GB khác iPhone 6 64GB vậy. Nhưng laptop thì phức tạp hơn.', 1, 'laptop1.jpg'),
(3, 'Laptop Lenovo Ideapad 100- 80RK0018VN', 'Laptop Lenovo Ideapad 100- 80RK0018VN là dòng sản phẩm máy tính xách tay được thương hiệu Lenovo đầu tư từ thiết bị cho đến công nghệ một cách kỹ lưỡng nhất trong các laptop Ideapad 100 Series.', 'Laptop Lenovo Ideapad 100- 80RK0018VN là dòng sản phẩm máy tính xách tay được thương hiệu Lenovo đầu tư từ thiết bị cho đến công nghệ một cách kỹ lưỡng nhất trong các laptop Ideapad 100 Series. Nhìn chung Lenovo Ideapad 100- 80RK0018VN thiết kế dành riêng cho đối tượng dân văn phòng hay các bạn học sinh sinh viên chi phí thấp với giá thành hợp túi tiền.\r\nLaptop Lenovo Ideapad 100- 80RK0018VN thuộc phân khúc máy tính xách tay giá rẻ cho dân văn phòng những vẫn nổi trội với trang vị vi xử lý thế hệ thứ 5 Broadwell Intel Core i3-5005U, RAM chỉ 2GB. Chiếc laptop này được thiết kế khá đẹp mắt, dùng chủ yếu là chất liệu nhựa nhưng vẫn đem đến cho người dùng cảm giác chắc chắn, bề mặt độ bám ổn định, bản lề rộng.', 2, 'bv_laptop2.jpg'),
(4, 'Laptop Dell Inspiron 14 3458 TXTGH1', 'Bạn đang trong quá trình tìm kiếm chiếc laptop dành riêng cho công việc văn phòng của mình vừa sở hữu cấu hình chất lượng, tính năng hiện đại mà giá cả lại phải chăng thì laptop Dell Inspiron 14 3458 TXTGH1 là lựa chọn hoàn hảo nhất tại thời điểm này.', 'Laptop Dell Inspiron 14 3458 TXTGH1 sở hữu thiết kế bên ngoài đẹp mắt và năng động, hơn thế nữa trọng lượng chỉ khoảng 1,8kg phù hợp để bạn mang theo người mà không lo nặng trong quá trình di chuyển. Màn hình sản phẩm chỉ nhỏ 14 inch nhưng đủ để bạn thao tác công việc, trang bị thêm caasi hình core i3 mạnh mẽ với lõi kéo 1,7Ghz thế hệ Haswell hiện đại giúp bạn tiết kiệm năng lượng hơn dù đang sử dụng nhiều chương trình cùng một lúc.', 2, 'bv_laptop1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'laptop '),
(2, 'màn hình HP'),
(3, 'máy để bàn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuctin`
--

CREATE TABLE `tbl_danhmuctin` (
  `danhmuctin_id` int(11) NOT NULL,
  `danhmuctin_ten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuctin`
--

INSERT INTO `tbl_danhmuctin` (`danhmuctin_id`, `danhmuctin_ten`) VALUES
(1, 'Kiến thức '),
(2, 'Sản phẩm mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `donhang_tinhtrang` int(11) NOT NULL,
  `donhang_ngaythang` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `donhang_tinhtrang`, `donhang_ngaythang`) VALUES
(90, 1, 2, '4556', 69, 0, '2020-02-23 15:08:44'),
(91, 5, 1, '1892', 71, 0, '2020-02-23 15:13:31'),
(92, 5, 1, '3275', 72, 0, '2020-02-23 15:33:14'),
(93, 2, 10, '1366', 73, 1, '2020-02-23 15:43:39'),
(94, 2, 1, '5113', 74, 0, '2020-02-24 02:18:32'),
(95, 8, 3, '5113', 74, 0, '2020-02-24 02:18:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sanpham_id` int(20) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `giaodich_soluong` int(11) NOT NULL,
  `giaodich_ma` int(11) NOT NULL,
  `giaodich_ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `sanpham_id`, `khachhang_id`, `giaodich_soluong`, `giaodich_ma`, `giaodich_ngaythang`) VALUES
(22, 5, 71, 0, 1892, '2020-02-23 15:13:31'),
(23, 5, 72, 0, 3275, '2020-02-23 15:33:14'),
(24, 2, 73, 0, 1366, '2020-02-23 15:43:39'),
(25, 2, 74, 0, 5113, '2020-02-24 02:18:32'),
(26, 8, 74, 0, 5113, '2020-02-24 02:18:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `sanpham_id` int(20) NOT NULL,
  `giasanpham` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `khachhang_name` varchar(100) NOT NULL,
  `khachhang_phone` int(20) NOT NULL,
  `khachhang_address` varchar(200) NOT NULL,
  `khachhang_note` text NOT NULL,
  `khachhang_email` varchar(150) NOT NULL,
  `khachhang_password` varchar(50) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `khachhang_name`, `khachhang_phone`, `khachhang_address`, `khachhang_note`, `khachhang_email`, `khachhang_password`, `giaohang`) VALUES
(31, 'Thị Quyên ', 4806860, '1223 Nam A', 'giao nhanh nhe', 'baba1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(32, 'Văn Dũng', 2445455, '12/123 Nam Sơn -Hà Nội', 'giao nhanh nhe', '9831yeuem@gmail.com', '0192023a7bbd73250516f069df18b500', 0),
(68, 'Quang Dũng', 908408348, 'Bắc Ninh', '', 'dung@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(69, 'Phương thanh', 4806860, 'hải phòng', '', 'thanh@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(71, 'Sơn Na', 2445455, 'Nam Định', '', 'na@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(72, 'k', 234567, 'Văn Bắc', 'lk', 'vane@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0),
(73, 'Sơn Na', 2445455, 'Nam Định', 'u', 'na@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(74, 'Kiến Huy', 80843843, 'Bắc Giang', 'ds', 'huy@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_tinhtrang` varchar(20) NOT NULL,
  `sanpham_image` varchar(50) NOT NULL,
  `sanpham_dongia` int(11) NOT NULL,
  `sanpham_giagoc` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_hangsx` varchar(50) NOT NULL,
  `sanpham_namsx` int(11) NOT NULL,
  `sanpham_nuocsx` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_mota`, `sanpham_tinhtrang`, `sanpham_image`, `sanpham_dongia`, `sanpham_giagoc`, `sanpham_soluong`, `sanpham_hangsx`, `sanpham_namsx`, `sanpham_nuocsx`) VALUES
(1, 2, 'LCD HP 20 LED  FULL HD LV2011', 'Model:	 HP LV201 LED \r\n/Kích thước màn hình:	 20 inch \r\n/Kích thước điển ảnh:	 0.2768mm \r\n/Cường độ sáng: 	200cd/m2 \r\n/Độ tương phản:	 600:1 \r\n/Góc nhìn: ( Dọc/ Ngang)	 90°(H)/50°(V) \r\n/Gắn tường:	 VESA \r\n/Thời gian đáp ứng:	 5 ms \r\n/Độ phân giải:	 1600 x 900 \r\n/Khả năng hiển thị màu:	 16.7M ', 'còn hàng', 'manhinh3.jpg', 3150000, 3250000, 10, 'HP', 2016, 'America'),
(2, 2, 'HP 24 INCH V242 LED FULL HD 1080', 'Hãng sản xuất:	HP\r\n/Model:	V242\r\n/Kích thước màn hình:	24 inch\r\n/Độ phân giải:	1920 x 1080 Full HD\r\n/Độ tương phản:	1.000 :1 tĩnh, 5.000.000:1 động\r\n/Độ sáng:	250 cd/m\r\n/Màu sắc hiển thị:	16.7 triệu màu\r\n/Cổng kết nối:	1 DVI - 1VGA', 'còn hàng', 'manhinh2.jpeg', 3350000, 3450000, 10, 'HP', 2016, 'China'),
(3, 2, 'LCD DELL 22 INCH FUL HD LED', ' Hãng sản xuất\r\n\r\n DELL\r\n\r\n/ Chủng loại\r\n\r\n E2214B Wide LED\r\n\r\n/Kích thước Màn Hình\r\n\r\n 21.5”\r\n\r\n/Độ Sáng Màn Hình\r\n\r\n 250 cd/m²\r\n\r\n Tỉ Lệ Tương phản Động MEGA:\r\n\r\n 1000:1\r\n\r\n/ Độ Phân Giải Màn Hình:\r\n\r\n 1680×1050 @60Hz \r\n\r\n/Thời Gian Đáp Ứng:\r\n\r\n 5ms\r\n\r\n/Hỗ trợ màu:\r\n\r\n 16,7 Triệu Màu', 'còn hàng', 'manhinh1.jpg', 3250000, 3350000, 10, 'Dell', 2016, 'America'),
(4, 1, 'Dell Vostro 3580 i7 8565U/8GB/256GB/2GB R520/Win10 (T3RMD2)', 'CPU:	Intel Core i7 Coffee Lake, 8565U, 1.80 GHz\r\n/RAM:	8 GB, DDR4 (2 khe), 2666 MHz\r\n/Ổ cứng:	SSD 256GB NVMe PCIe\r\n/Màn hình:	15.6 inch, Full HD (1920 x 1080)\r\n/Card màn hình:	Card đồ họa rời, AMD Radeon 520, 2GB', 'còn hàng', 'laptop1.jpg', 22390000, 22990000, 10, 'Dell', 2018, 'America'),
(5, 1, 'Dell Inspiron 5593 i3 1005G1/4GB/128GB/Win10 (70196703)', 'CPU:	Intel Core i3 Ice Lake, 1005G1, 1.20 GHz\r\n/RAM:	4 GB, DDR4 (2 khe), 2666 MHz\r\n/Ổ cứng:	SSD 128GB M2 PCIe, Hỗ trợ khe cắm HDD SATA\r\n/Màn hình:	15.6 inch, Full HD (1920 x 1080)\r\n/Card màn hình:	Card đồ họa tích hợp, Intel UHD Graphics', 'còn hàng', 'laptop2.jpg', 13990000, 14290000, 10, 'Dell', 2019, 'China'),
(6, 1, 'Dell Inspiron 3580 i5 8265U/4GB/1TB/2GB R520/Win10 (70184569)', 'CPU:	Intel Core i5 Coffee Lake, 8265U, 1.60 GHz\r\n/RAM:	4 GB, DDR4 (2 khe), 2666 MHz\r\n/Ổ cứng:	HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe\r\n/Màn hình:	15.6 inch, Full HD (1920 x 1080)\r\n/Card màn hình:	Card đồ họa rời, AMD Radeon 520, 2GB', 'còn hàng', 'laptop3.jpg', 15990000, 16390000, 10, 'Dell', 2018, 'America'),
(7, 3, 'Máy tính để bàn Dell Vostro 3670 (70189214)', ' CPU: Pentium G5420\r\n/RAM/ HDD: 4Gb/ HDD=1TB\r\n/VGA: VGA onboard\r\n/ OS: Ubuntu', 'còn hàng', 'maybo1.jpg', 8790000, 9200000, 10, 'Dell', 2015, 'America'),
(8, 3, 'Máy tính để bàn HP PAVILION 590-P0108D', 'CPU: Intel Core i3-9100 ( 3.6 - 4.2 GHz / 6MB / 4 nhân, 4 luồng )\r\n/RAM: 1 x 4GB DDR4 2666MHz\r\n/Đồ họa: Intel UHD Graphics 630\r\n/Lưu trữ: 1TB HDD 7200RPM\r\n/USB Keyboard & Mouse\r\n', 'còn hàng', 'maybo2.jpg', 8590000, 8690000, 10, 'HP', 2015, 'China'),
(9, 3, 'Máy tính để bàn HP 290-P0113D', '/CPU: Intel Pentium G5420 ( 3.80 GHz / 4MB / 2 nhân, 4 luồng )\r\n/RAM: 1 x 4GB DDR4 2666MHz\r\n/Đồ họa: Intel UHD Graphics 610\r\n/Lưu trữ: 500GB HDD 7200RPM\r\n/Tặng kèm chuột; bàn phím', 'còn hàng', 'maybo3.jpg', 7490000, 7590000, 10, 'HP', 2016, 'America');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`),
  ADD KEY `danhmuctin_id` (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_danhmuctin`
--
ALTER TABLE `tbl_danhmuctin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`),
  ADD KEY `sanpham_id` (`sanpham_id`),
  ADD KEY `khachhang_id` (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`),
  ADD KEY `sanpham_id` (`sanpham_id`),
  ADD KEY `khachhang_id` (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`),
  ADD KEY `sanpham_id` (`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuctin`
--
ALTER TABLE `tbl_danhmuctin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD CONSTRAINT `tbl_baiviet_ibfk_1` FOREIGN KEY (`danhmuctin_id`) REFERENCES `tbl_danhmuctin` (`danhmuctin_id`);

--
-- Các ràng buộc cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `tbl_donhang_ibfk_1` FOREIGN KEY (`sanpham_id`) REFERENCES `tbl_sanpham` (`sanpham_id`),
  ADD CONSTRAINT `tbl_donhang_ibfk_2` FOREIGN KEY (`khachhang_id`) REFERENCES `tbl_khachhang` (`khachhang_id`);

--
-- Các ràng buộc cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD CONSTRAINT `tbl_giaodich_ibfk_1` FOREIGN KEY (`sanpham_id`) REFERENCES `tbl_sanpham` (`sanpham_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `tbl_giaodich_ibfk_2` FOREIGN KEY (`khachhang_id`) REFERENCES `tbl_khachhang` (`khachhang_id`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD CONSTRAINT `tbl_giohang_ibfk_1` FOREIGN KEY (`sanpham_id`) REFERENCES `tbl_sanpham` (`sanpham_id`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
