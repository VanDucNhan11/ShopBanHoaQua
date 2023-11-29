-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 12:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_cnm`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `idUser`, `created_at`, `updated_at`) VALUES
(1, 'Tự chế món thạch sữa chua thanh long lung linh sắc màu', '[\"sinh-to-sua-chua-2.jpg\",\"blog-img-2 (1).jpg\"]', 'Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên liệu chuẩn bị rất dễ kiếm, còn cách làm thì vô cùng đơn giản. Vậy còn chần chờ gì nữa, cùng bắt tay vào thực hiện thui nào các mẹ. \n\nNguyên liệu:\n\nThanh long đỏ: ½ quả\nĐường: 30g\nSữa chua có đường: 260g\nLá gelatin: 4 lá\n1 bát nước đá lạnh\n200ml nước\nCốc hoặc ly\nCách làm:\nBước 1: Trước tiên, bạn cắt 2 lá gelatin làm đôi hoặc làm ba. Cho vào bát nước đá lạnh, ngâm trong 5-10 phút cho lá mềm. 2 lá còn lại để sử dụng sau\n\nBước 2: Tiếp đó, thanh long bạn bột bỏ, thái miếng vừa nhỏ rồi cho vào máy xay sinh tố, xay nhuyễn.\n\nBước 3: Bạn cho 200ml nước vào nồi, thêm chút đường và khuấy đều. Sau đó bật bếp nấu cho đến khi sôi thì tắt bếp. Vớt lá gelatin vắt kiệt nước cho vào, khuấy đều đến khi gelatin tan hết.\n\nBước 4: Bạn để cho hỗn hợp nguội bớt thì đổ nước cốt thanh long vào khuấy đều sẽ được phần thạch thanh long. Sau đó bạn múc 2 thìa thạch thanh long đổ vào cốc hoặc ly được lớp thạch đầu tiên. Bạn cho vào ngăn mát tủ lạnh trong khoảng 1 tiếng cho thạch đông lại rồi mới tiến hành làm phần thạch sữa chua.\n\nBước 5: Với 2 lá gelatin còn lại, bạn ngâm nước đá lạnh 5-10 phút cho mềm sau đó vớt ra cho vào bát sứ. Để vào lò vi sóng quay 30s để chúng chảy thành nước lấy ra. Hoặc nếu không có lò vi sóng, bạn có thể đem đun cách thủy cho gelatin tan chảy.\n\nBước 6: Bạn lấy sữa chua ra bát to rồi cho nước gelatin vào khuấy đều sẽ được hỗn hợp thạch sữa chua. Sau đó lấy cốc thạch thanh long đã đông trong tủ lạnh ra và múc 2 thìa thạch sữa chua lên trên. Tiếp đến bạn để ngăn mát trong 1 tiếng và thêm tiếp lớp thạch nữa.\n\nCuối cùng chúng ta có kết quả như hình minh họa dưới. Chúc các mẹ thành công ngay từ lần thực hiện đầu tiên!', '6', '2023-11-20 14:24:18', '2023-11-21 01:28:17'),
(2, 'Kỹ thuật trồng rau sạch trong chậu xốp tại nhà đơn giản', '[\"rau-ngot-nhat.jpg\",\"blog-img-5.jpg\"]', 'Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên liệu chuẩn bị rất dễ kiếm, còn cách làm thì vô cùng đơn giản. Vậy còn chần chờ gì nữa, cùng bắt tay vào thực hiện thui nào các mẹ. \n\nNguyên liệu:\n\nThanh long đỏ: ½ quả\nĐường: 30g\nSữa chua có đường: 260g\nLá gelatin: 4 lá\n1 bát nước đá lạnh\n200ml nước\nCốc hoặc ly\nCách làm:\nBước 1: Trước tiên, bạn cắt 2 lá gelatin làm đôi hoặc làm ba. Cho vào bát nước đá lạnh, ngâm trong 5-10 phút cho lá mềm. 2 lá còn lại để sử dụng sau\n\nBước 2: Tiếp đó, thanh long bạn bột bỏ, thái miếng vừa nhỏ rồi cho vào máy xay sinh tố, xay nhuyễn.\n\nBước 3: Bạn cho 200ml nước vào nồi, thêm chút đường và khuấy đều. Sau đó bật bếp nấu cho đến khi sôi thì tắt bếp. Vớt lá gelatin vắt kiệt nước cho vào, khuấy đều đến khi gelatin tan hết.\n\nBước 4: Bạn để cho hỗn hợp nguội bớt thì đổ nước cốt thanh long vào khuấy đều sẽ được phần thạch thanh long. Sau đó bạn múc 2 thìa thạch thanh long đổ vào cốc hoặc ly được lớp thạch đầu tiên. Bạn cho vào ngăn mát tủ lạnh trong khoảng 1 tiếng cho thạch đông lại rồi mới tiến hành làm phần thạch sữa chua.\n\nBước 5: Với 2 lá gelatin còn lại, bạn ngâm nước đá lạnh 5-10 phút cho mềm sau đó vớt ra cho vào bát sứ. Để vào lò vi sóng quay 30s để chúng chảy thành nước lấy ra. Hoặc nếu không có lò vi sóng, bạn có thể đem đun cách thủy cho gelatin tan chảy.\n\nBước 6: Bạn lấy sữa chua ra bát to rồi cho nước gelatin vào khuấy đều sẽ được hỗn hợp thạch sữa chua. Sau đó lấy cốc thạch thanh long đã đông trong tủ lạnh ra và múc 2 thìa thạch sữa chua lên trên. Tiếp đến bạn để ngăn mát trong 1 tiếng và thêm tiếp lớp thạch nữa.\n\nCuối cùng chúng ta có kết quả như hình minh họa dưới. Chúc các mẹ thành công ngay từ lần thực hiện đầu tiên!', '6', '2023-11-21 01:29:33', '2023-11-21 01:29:46'),
(3, 'Vì sao hoa quả Việt thất thế trước “cơn lốc” hàng nhập ngoại?', '[\"blog-img-3.jpg\",\"photo-0-1492821495349.jpg\"]', 'Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên liệu chuẩn bị rất dễ kiếm, còn cách làm thì vô cùng đơn giản. Vậy còn chần chờ gì nữa, cùng bắt tay vào thực hiện thui nào các mẹ. \n\nNguyên liệu:\n\nThanh long đỏ: ½ quả\nĐường: 30g\nSữa chua có đường: 260g\nLá gelatin: 4 lá\n1 bát nước đá lạnh\n200ml nước\nCốc hoặc ly\nCách làm:\nBước 1: Trước tiên, bạn cắt 2 lá gelatin làm đôi hoặc làm ba. Cho vào bát nước đá lạnh, ngâm trong 5-10 phút cho lá mềm. 2 lá còn lại để sử dụng sau\n\nBước 2: Tiếp đó, thanh long bạn bột bỏ, thái miếng vừa nhỏ rồi cho vào máy xay sinh tố, xay nhuyễn.\n\nBước 3: Bạn cho 200ml nước vào nồi, thêm chút đường và khuấy đều. Sau đó bật bếp nấu cho đến khi sôi thì tắt bếp. Vớt lá gelatin vắt kiệt nước cho vào, khuấy đều đến khi gelatin tan hết.\n\nBước 4: Bạn để cho hỗn hợp nguội bớt thì đổ nước cốt thanh long vào khuấy đều sẽ được phần thạch thanh long. Sau đó bạn múc 2 thìa thạch thanh long đổ vào cốc hoặc ly được lớp thạch đầu tiên. Bạn cho vào ngăn mát tủ lạnh trong khoảng 1 tiếng cho thạch đông lại rồi mới tiến hành làm phần thạch sữa chua.\n\nBước 5: Với 2 lá gelatin còn lại, bạn ngâm nước đá lạnh 5-10 phút cho mềm sau đó vớt ra cho vào bát sứ. Để vào lò vi sóng quay 30s để chúng chảy thành nước lấy ra. Hoặc nếu không có lò vi sóng, bạn có thể đem đun cách thủy cho gelatin tan chảy.\n\nBước 6: Bạn lấy sữa chua ra bát to rồi cho nước gelatin vào khuấy đều sẽ được hỗn hợp thạch sữa chua. Sau đó lấy cốc thạch thanh long đã đông trong tủ lạnh ra và múc 2 thìa thạch sữa chua lên trên. Tiếp đến bạn để ngăn mát trong 1 tiếng và thêm tiếp lớp thạch nữa.\n\nCuối cùng chúng ta có kết quả như hình minh họa dưới. Chúc các mẹ thành công ngay từ lần thực hiện đầu tiên!', '6', '2023-11-21 02:56:38', '2023-11-21 02:56:38'),
(4, 'Những loại trái cây Nhật đắt như vàng ròng đổ bộ về Việt Nam', '[\"20171010133605-dua-luoi-nhat-ban.jpg\",\"blog-img-7.jpg\"]', 'Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên liệu chuẩn bị rất dễ kiếm, còn cách làm thì vô cùng đơn giản. Vậy còn chần chờ gì nữa, cùng bắt tay vào thực hiện thui nào các mẹ. \n\nNguyên liệu:\n\nThanh long đỏ: ½ quả\nĐường: 30g\nSữa chua có đường: 260g\nLá gelatin: 4 lá\n1 bát nước đá lạnh\n200ml nước\nCốc hoặc ly\nCách làm:\nBước 1: Trước tiên, bạn cắt 2 lá gelatin làm đôi hoặc làm ba. Cho vào bát nước đá lạnh, ngâm trong 5-10 phút cho lá mềm. 2 lá còn lại để sử dụng sau\n\nBước 2: Tiếp đó, thanh long bạn bột bỏ, thái miếng vừa nhỏ rồi cho vào máy xay sinh tố, xay nhuyễn.\n\nBước 3: Bạn cho 200ml nước vào nồi, thêm chút đường và khuấy đều. Sau đó bật bếp nấu cho đến khi sôi thì tắt bếp. Vớt lá gelatin vắt kiệt nước cho vào, khuấy đều đến khi gelatin tan hết.\n\nBước 4: Bạn để cho hỗn hợp nguội bớt thì đổ nước cốt thanh long vào khuấy đều sẽ được phần thạch thanh long. Sau đó bạn múc 2 thìa thạch thanh long đổ vào cốc hoặc ly được lớp thạch đầu tiên. Bạn cho vào ngăn mát tủ lạnh trong khoảng 1 tiếng cho thạch đông lại rồi mới tiến hành làm phần thạch sữa chua.\n\nBước 5: Với 2 lá gelatin còn lại, bạn ngâm nước đá lạnh 5-10 phút cho mềm sau đó vớt ra cho vào bát sứ. Để vào lò vi sóng quay 30s để chúng chảy thành nước lấy ra. Hoặc nếu không có lò vi sóng, bạn có thể đem đun cách thủy cho gelatin tan chảy.\n\nBước 6: Bạn lấy sữa chua ra bát to rồi cho nước gelatin vào khuấy đều sẽ được hỗn hợp thạch sữa chua. Sau đó lấy cốc thạch thanh long đã đông trong tủ lạnh ra và múc 2 thìa thạch sữa chua lên trên. Tiếp đến bạn để ngăn mát trong 1 tiếng và thêm tiếp lớp thạch nữa.\n\nCuối cùng chúng ta có kết quả như hình minh họa dưới. Chúc các mẹ thành công ngay từ lần thực hiện đầu tiên!', '6', '2023-11-21 02:58:53', '2023-11-21 02:58:53'),
(5, 'Nhập khẩu rau quả vượt mốc 1 tỷ USD, Thái Lan chiếm 60% thị phần', '[\"blog-img-6.jpg\",\"photo-0-1506472670345.jpg\"]', 'Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên liệu chuẩn bị rất dễ kiếm, còn cách làm thì vô cùng đơn giản. Vậy còn chần chờ gì nữa, cùng bắt tay vào thực hiện thui nào các mẹ. \n\nNguyên liệu:\n\nThanh long đỏ: ½ quả\nĐường: 30g\nSữa chua có đường: 260g\nLá gelatin: 4 lá\n1 bát nước đá lạnh\n200ml nước\nCốc hoặc ly\nCách làm:\nBước 1: Trước tiên, bạn cắt 2 lá gelatin làm đôi hoặc làm ba. Cho vào bát nước đá lạnh, ngâm trong 5-10 phút cho lá mềm. 2 lá còn lại để sử dụng sau\n\nBước 2: Tiếp đó, thanh long bạn bột bỏ, thái miếng vừa nhỏ rồi cho vào máy xay sinh tố, xay nhuyễn.\n\nBước 3: Bạn cho 200ml nước vào nồi, thêm chút đường và khuấy đều. Sau đó bật bếp nấu cho đến khi sôi thì tắt bếp. Vớt lá gelatin vắt kiệt nước cho vào, khuấy đều đến khi gelatin tan hết.\n\nBước 4: Bạn để cho hỗn hợp nguội bớt thì đổ nước cốt thanh long vào khuấy đều sẽ được phần thạch thanh long. Sau đó bạn múc 2 thìa thạch thanh long đổ vào cốc hoặc ly được lớp thạch đầu tiên. Bạn cho vào ngăn mát tủ lạnh trong khoảng 1 tiếng cho thạch đông lại rồi mới tiến hành làm phần thạch sữa chua.\n\nBước 5: Với 2 lá gelatin còn lại, bạn ngâm nước đá lạnh 5-10 phút cho mềm sau đó vớt ra cho vào bát sứ. Để vào lò vi sóng quay 30s để chúng chảy thành nước lấy ra. Hoặc nếu không có lò vi sóng, bạn có thể đem đun cách thủy cho gelatin tan chảy.\n\nBước 6: Bạn lấy sữa chua ra bát to rồi cho nước gelatin vào khuấy đều sẽ được hỗn hợp thạch sữa chua. Sau đó lấy cốc thạch thanh long đã đông trong tủ lạnh ra và múc 2 thìa thạch sữa chua lên trên. Tiếp đến bạn để ngăn mát trong 1 tiếng và thêm tiếp lớp thạch nữa.\n\nCuối cùng chúng ta có kết quả như hình minh họa dưới. Chúc các mẹ thành công ngay từ lần thực hiện đầu tiên!', '6', '2023-11-21 03:00:31', '2023-11-21 03:00:31'),
(6, 'Rau xanh tăng giá mạnh vì trời mưa, người dân nội thành lao đao', '[\"blog-img-4.jpg\",\"fruits-and-vegetables.jpg\"]', 'Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên liệu chuẩn bị rất dễ kiếm, còn cách làm thì vô cùng đơn giản. Vậy còn chần chờ gì nữa, cùng bắt tay vào thực hiện thui nào các mẹ. \n\nNguyên liệu:\n\nThanh long đỏ: ½ quả\nĐường: 30g\nSữa chua có đường: 260g\nLá gelatin: 4 lá\n1 bát nước đá lạnh\n200ml nước\nCốc hoặc ly\nCách làm:\nBước 1: Trước tiên, bạn cắt 2 lá gelatin làm đôi hoặc làm ba. Cho vào bát nước đá lạnh, ngâm trong 5-10 phút cho lá mềm. 2 lá còn lại để sử dụng sau\n\nBước 2: Tiếp đó, thanh long bạn bột bỏ, thái miếng vừa nhỏ rồi cho vào máy xay sinh tố, xay nhuyễn.\n\nBước 3: Bạn cho 200ml nước vào nồi, thêm chút đường và khuấy đều. Sau đó bật bếp nấu cho đến khi sôi thì tắt bếp. Vớt lá gelatin vắt kiệt nước cho vào, khuấy đều đến khi gelatin tan hết.\n\nBước 4: Bạn để cho hỗn hợp nguội bớt thì đổ nước cốt thanh long vào khuấy đều sẽ được phần thạch thanh long. Sau đó bạn múc 2 thìa thạch thanh long đổ vào cốc hoặc ly được lớp thạch đầu tiên. Bạn cho vào ngăn mát tủ lạnh trong khoảng 1 tiếng cho thạch đông lại rồi mới tiến hành làm phần thạch sữa chua.\n\nBước 5: Với 2 lá gelatin còn lại, bạn ngâm nước đá lạnh 5-10 phút cho mềm sau đó vớt ra cho vào bát sứ. Để vào lò vi sóng quay 30s để chúng chảy thành nước lấy ra. Hoặc nếu không có lò vi sóng, bạn có thể đem đun cách thủy cho gelatin tan chảy.\n\nBước 6: Bạn lấy sữa chua ra bát to rồi cho nước gelatin vào khuấy đều sẽ được hỗn hợp thạch sữa chua. Sau đó lấy cốc thạch thanh long đã đông trong tủ lạnh ra và múc 2 thìa thạch sữa chua lên trên. Tiếp đến bạn để ngăn mát trong 1 tiếng và thêm tiếp lớp thạch nữa.\n\nCuối cùng chúng ta có kết quả như hình minh họa dưới. Chúc các mẹ thành công ngay từ lần thực hiện đầu tiên!\nKhảo sát của người viết tại một số chợ đầu mối, chợ truyền thống trên địa bàn Hà Nội như chợ Đình Công, chợ Cầu Giấy, Phùng Khoang, chợ Hôm, Chợ Dịch Vọng, chợ Nhổn… giá các loại rau, củ đã tăng phổ biến 20 -30% so với 1-2 tuần trước.\n\nCụ thể, tại chợ Dịch Vọng, rau dền, mồng tơi giá 8.000 đồng/mớ, tăng 2.000 đồng/mớ; rau muống tăng 3000 đồng/mớ lên 10.000 đồng/mớ; rau ngót cũng tăng 1.000 đồng/mớ lên 7.000 đồng/mớ; cải xanh tăng từ 5.000 đồng lên 8.000 đồng/mớ; bắp cải tăng 3.000 đồng/kg lên 15.000 đồng/kg; cải thảo tăng 5.000 đồng/kg lên 16.000 đồng/kg, mướp đắng tăng 10.000 đồng/kg lên 16.000 đồng/kg. Hành lá tăng giá mạnh nhất lên 60.000/kg.\n\nMột số loại củ quả như cà chua còn có giá tăng gấp đôi, từ 20.000 đồng/kg lên 40.000 đồng/kg, cà rốt có giá từ 25.000 – 30.000 đồng/kg; su hào 8.000 đồng /củ…so với trước đợt bão.\n\nChị Nguyễn Thị Thanh, tiểu thương bán rau ở chợ Dịch Vọng cho biết, giá rau củ tặng mạnh do thời tiết mưa to gây ngập úng khiến nguồn cung rau củ giảm. Bên cạnh đó, đây là thời điểm cuối mùa vụ của một số loại rau củ như các loại rau muống, mồng tơi, mướp ngọt…cũng khiến cho nguồn cung ứng rau thiếu hụt.\n\n“Như hôm nay ra chợ đầu mối nhập rau mà mỗi loại chỉ nhập được 5-10kg, bán đến tầm 8 giờ sáng rau ở sạp đã gần hết. Đến chiều, tôi đang không biết lấy hàng đâu bán cho khách”, chị Thanh chia sẻ.\n\nTại nhiều vùng trồng rau ngoại thành Hà Nội như Vân Nội, Song Phương, Tây Tựu... do mưa lớn kéo dài nên rau ít nhiều bị ngập úng, hư hại.\n\nBà Trần Thị Mai, tại xã Tây Tựu –Từ Liêm chuyên trồng sản xuất rau xanh bán buôn cho các chợ đầu mối cho biết, nhà bà trồng 6 sào rau xanh đủ các nhưng mấy ngày gần đây do mưa to ảnh hưởng nên làm cho rau trong vườn phát triển chậm và dập nát hết các luống rau mới gieo trồng.', '6', '2023-11-21 03:02:24', '2023-11-21 03:02:24'),
(7, 'Gia tăng năng lực cạnh tranh cho nông sản xuất khẩu', '[\"blog-img-1-f5cf3633-779b-428e-89.jpg\",\"379-diet-nutrition-2-why-fruits.jpg\"]', 'Thạch sữa chua thanh long là món ăn tráng miệng tuyệt vời cho các mẹ. Đặc biệt là các bạn trẻ. Bởi vì món ăn này rất thanh mát, dễ ăn, đẹp da và trông rất màu sắc bắt mắt nữa. Nguyên liệu chuẩn bị rất dễ kiếm, còn cách làm thì vô cùng đơn giản. Vậy còn chần chờ gì nữa, cùng bắt tay vào thực hiện thui nào các mẹ. \n\nNguyên liệu:\n\nThanh long đỏ: ½ quả\nĐường: 30g\nSữa chua có đường: 260g\nLá gelatin: 4 lá\n1 bát nước đá lạnh\n200ml nước\nCốc hoặc ly\nCách làm:\nBước 1: Trước tiên, bạn cắt 2 lá gelatin làm đôi hoặc làm ba. Cho vào bát nước đá lạnh, ngâm trong 5-10 phút cho lá mềm. 2 lá còn lại để sử dụng sau\n\nBước 2: Tiếp đó, thanh long bạn bột bỏ, thái miếng vừa nhỏ rồi cho vào máy xay sinh tố, xay nhuyễn.\n\nBước 3: Bạn cho 200ml nước vào nồi, thêm chút đường và khuấy đều. Sau đó bật bếp nấu cho đến khi sôi thì tắt bếp. Vớt lá gelatin vắt kiệt nước cho vào, khuấy đều đến khi gelatin tan hết.\n\nBước 4: Bạn để cho hỗn hợp nguội bớt thì đổ nước cốt thanh long vào khuấy đều sẽ được phần thạch thanh long. Sau đó bạn múc 2 thìa thạch thanh long đổ vào cốc hoặc ly được lớp thạch đầu tiên. Bạn cho vào ngăn mát tủ lạnh trong khoảng 1 tiếng cho thạch đông lại rồi mới tiến hành làm phần thạch sữa chua.\n\nBước 5: Với 2 lá gelatin còn lại, bạn ngâm nước đá lạnh 5-10 phút cho mềm sau đó vớt ra cho vào bát sứ. Để vào lò vi sóng quay 30s để chúng chảy thành nước lấy ra. Hoặc nếu không có lò vi sóng, bạn có thể đem đun cách thủy cho gelatin tan chảy.\n\nBước 6: Bạn lấy sữa chua ra bát to rồi cho nước gelatin vào khuấy đều sẽ được hỗn hợp thạch sữa chua. Sau đó lấy cốc thạch thanh long đã đông trong tủ lạnh ra và múc 2 thìa thạch sữa chua lên trên. Tiếp đến bạn để ngăn mát trong 1 tiếng và thêm tiếp lớp thạch nữa.\n\nCuối cùng chúng ta có kết quả như hình minh họa dưới. Chúc các mẹ thành công ngay từ lần thực hiện đầu tiên!', '6', '2023-11-21 03:03:34', '2023-11-21 03:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameCate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nameCate`, `created_at`, `updated_at`) VALUES
(1, 'Sản phẩm bán chạy', NULL, '2023-11-20 07:18:15'),
(2, 'Rau tươi sạch', NULL, NULL),
(3, 'Hoa quả sạch', NULL, NULL),
(4, 'Hàng nhập khẩu', NULL, NULL),
(6, 'Sản phẩm nổi bật', NULL, NULL),
(7, 'Trái cây miền Nam', '2023-11-20 13:24:48', '2023-11-20 13:24:48'),
(8, 'Rau Đà Lạt', '2023-11-20 13:31:59', '2023-11-20 13:31:59'),
(9, 'Tất cả sản phẩm', '2023-11-23 20:13:00', '2023-11-23 20:13:00'),
(10, 'Sản phẩm khuyến mãi', '2023-11-24 20:00:24', '2023-11-24 20:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idPr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `idPr`, `comment`, `idUser`, `created_at`, `updated_at`) VALUES
(7, '3', 'Sản phẩm quá tuyệt vời', '14', '2023-11-27 21:34:04', '2023-11-27 21:34:04'),
(10, '3', 'Sản phẩm tuyệt vời ông mặt trời', '14', '2023-11-27 21:39:36', '2023-11-27 21:39:36'),
(11, '3', 'Sản phẩm không còn chỗ nào để chê', '14', '2023-11-27 21:39:52', '2023-11-27 21:39:52'),
(12, '4', 'Sản phẩm tốt', '14', '2023-11-27 21:41:36', '2023-11-27 21:41:36'),
(13, '4', 'Sản phẩm hơi cay', '14', '2023-11-27 21:41:54', '2023-11-27 21:41:54'),
(14, '3', 'Sản phẩm của người anh em Đông Nam Á quá tuyệt vời', '16', '2023-11-28 07:20:28', '2023-11-28 07:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_11_121646_edit_users_table', 2),
(6, '2023_11_12_020926_edit_users_table', 3),
(7, '2014_10_12_100000_create_password_resets_table', 4),
(8, '2023_11_20_081715_create_category_table', 5),
(9, '2023_11_20_201106_create_blogs_table', 6),
(10, '2023_11_21_114943_create_type_product_table', 7),
(11, '2023_11_21_115227_create_product_table', 7),
(12, '2023_11_28_034525_create_comment_table', 8);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('43.dibpaytion@gmail.com', '$2y$12$9ftA5cwIqtWEw3/M.bmtcej7YiZTzwDdQVsVLztq1b/9SdiTHZOAa', '2023-11-11 18:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitCal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image`, `quantity`, `idType`, `unitCal`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Cà chua Đà Lạt', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"78719788b5e0246dc7ac9e1ab719e7.jpg\",\"v4_388b25fd338c48b2b7545f0f30b67.jpg\"]', '100', '3', 'KG', '120.000', '2023-11-21 20:43:50', '2023-11-21 20:43:50'),
(2, 'Vải thiều Bắc Giang', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"v1.jpg\"]', '100', '3', 'KG', '120.000', '2023-11-22 04:05:17', '2023-11-22 04:05:17'),
(3, 'Lê Đông Ti Mo', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"upload_d37733a5b9e64ad0a8a44554b.jpg\"]', '100', '3', 'KG', '120.000', '2023-11-22 04:07:00', '2023-11-23 11:50:14'),
(4, 'Ớt ngọt Đông Ti Mo', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"upload_f95b3d61b78d4b6e8bb0b11ae.jpg\"]', '100', '3', 'KG', '290.000', '2023-11-22 04:08:51', '2023-11-22 04:08:51'),
(5, 'Ớt ngọt New Zealand', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"upload_fa612ad20bc84f0f8bac61a4a.jpg\"]', '100', '3', 'KG', '120.000', '2023-11-22 04:10:56', '2023-11-22 04:10:56'),
(6, 'Ớt ngọt Đà Lạt', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"upload_134489d506a84b4f93502730b.jpg\"]', '100', '3', 'KG', '100.000', '2023-11-22 04:12:54', '2023-11-23 11:50:31'),
(7, 'Nho Đà Lạt', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"nhodalat.jpg\"]', '100', '3', 'KG', '120.000', '2023-11-29 03:40:51', '2023-11-29 03:42:30'),
(8, 'Bông Cải Nhật Bản', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"bongcai1.jpg\"]', '100', '3', 'KG', '120.000', '2023-11-29 03:41:34', '2023-11-29 03:41:34'),
(9, 'Bông cải Trắng Úc', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"bongcai2.jpg\"]', '100', '1', 'KG', '120.000', '2023-11-29 03:42:15', '2023-11-29 03:42:15'),
(10, 'Bông cải xanh Úc', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"bongcai3.jpg\"]', '100', '1', 'KG', '120.000', '2023-11-29 03:43:28', '2023-11-29 03:43:28'),
(11, 'Hành tây cực chất', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"hanhtay1.jpg\"]', '100', '2', 'KG', '120.000', '2023-11-29 03:43:54', '2023-11-29 03:43:54'),
(12, 'Rau mồng tơi', 'Không ít người có thói quen sau bữa cơm ăn hoa quả. Tuy nhiên, nghiên cứu gần đây đã phát hiện ăn hoa quả sau bữa ăn rất không khoa học, nguyên nhân là do hoa quả dễ bị tích tụ ở dạ dày cùng với thức ăn, làm cho dạ dày, đường ruột chướng khí, táo bón… gây ảnh hưởng không tốt cho chức năng tiêu hóa.\r\n\r\nBên cạnh đó, trong hoa quả hàm chứa nhiều canbonhydrate, ví dụ đường hlucose, đường mía, tinh bột… ăn hoa quả ngay sau bữa cơm sẽ tăng thêm gánh nặng cho dạ dày, đường ruột và tuyến tụy, đặc biệt có một số hoa quả có lượng tinh bột cao, không dễ tiêu hóa.\r\n\r\nVì thế, ăn trái cây một giờ trước bữa ăn là cách tốt nhất để cơ thể bạn hấp thu tốt nhất các loại vitamin và các chất có trong hoa quả.', '[\"raumongtoi.jpg\"]', '100', '1', 'KG', '120.000', '2023-11-29 03:44:26', '2023-11-29 03:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitCal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`id`, `nameType`, `unitCal`, `created_at`, `updated_at`) VALUES
(1, 'Rau', 'KG', '2023-11-21 06:11:29', '2023-11-21 06:17:16'),
(2, 'Củ', 'KG', '2023-11-21 06:17:24', '2023-11-21 06:17:24'),
(3, 'Quả', 'KG', '2023-11-21 06:17:33', '2023-11-21 06:17:33');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `address`, `avatar`, `level`) VALUES
(6, 'Truong Duy', '43dinepaytion@gmail.com', '2023-11-28 03:42:53', '$2y$10$hoknu0c0xyMKGVxVhdqF3OkHevFQh5tC3y5bB6/WnOQqJtB869i7i', 'GoV1JaNqv71UOR2iOYujnKkaJnEXrybXWdWX2rLu760NxVgWF5V6ppFORIwK', '2023-11-12 13:42:44', '2023-11-28 04:53:24', '0706223455', '27 Somewhere', 'DSC06731.jpg', '0'),
(10, 'Dine', '43.dibpaytion@gmail.com', '2023-11-23 12:46:16', '$2y$10$l6mMV9gQY8d3jhVaBPfAF.8aymZDA9B1g9Ukdgfkl4ZE6WtkTZ7.2', NULL, '2023-11-23 12:45:43', '2023-11-23 12:46:16', NULL, NULL, NULL, '0'),
(12, 'Dine', '14dinepaytion@gmail.com', '2023-11-23 13:06:24', '$2y$10$xtiLDmozOw8b64e2I6QwR.352ICa9rIhLYzVaixVWmIOUEqRrIVSq', NULL, '2023-11-23 13:02:19', '2023-11-23 13:06:58', '1234567891', '27 Somewhere', '—Pngtree—vinyl record abstract music_7597125.png', '0'),
(14, 'Duy', 'duyntb9@gmail.com', '2023-11-28 04:18:05', '$2y$10$JqzCE0K6fmm0re9BdjnFxugHGStmo7MqhSyOgByVKREqwetiPg9e.', 'HPBKXGv2y94LWMQpZ2wU61VYC6BT2qa4MC7kJ0s6X6ZdCh2vEzBfPVrVfgWw', '2023-11-26 22:00:10', '2023-11-28 05:14:41', '0706223455', '27 Somewhere', 'DSC06731.jpg', '1'),
(16, 'Dine', 'emailtest@gmail.com', '2023-11-28 07:19:43', '$2y$10$7ebqtJ40XSjhP0yxRhTCqegMxjIt8Yq2XoJ3MU1XId5U9PZG0GLgK', NULL, '2023-11-28 07:18:57', '2023-11-28 07:19:43', '0706223455', '27 Somewhere', '2cc2dadee971232f7a60.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `vnp_Amount` varchar(255) DEFAULT NULL,
  `vnp_BankCode` varchar(255) DEFAULT NULL,
  `vnp_BankTranNo` varchar(255) DEFAULT NULL,
  `vnp_CardType` varchar(255) DEFAULT NULL,
  `vnp_OrderInfo` varchar(255) DEFAULT NULL,
  `vnp_PayDate` varchar(255) DEFAULT NULL,
  `vnp_ResponseCode` varchar(255) DEFAULT NULL,
  `vnp_TmnCode` varchar(255) DEFAULT NULL,
  `vnp_TransactionNo` varchar(255) DEFAULT NULL,
  `vnp_TransactionStatus` varchar(255) DEFAULT NULL,
  `vnp_TxnRef` varchar(255) DEFAULT NULL,
  `vnp_SecureHash` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_ResponseCode`, `vnp_TmnCode`, `vnp_TransactionNo`, `vnp_TransactionStatus`, `vnp_TxnRef`, `vnp_SecureHash`, `created_at`, `updated_at`) VALUES
(1, '1000000', 'NCB', 'VNP14208539', 'ATM', 'Thanh toán hóa đơn', '20231129131317', '00', 'GLUFRFYC', '14208539', '00', '103', '98dc560b50a36bab6ab63167534ee871f5f1d85a11bbbebef282c67ac525a382081d49197ceaf66216d2a64421173f0ab06c76a89b0ea4b3a9f1ec0fdf7e399f', NULL, NULL),
(2, '1000000', 'NCB', 'VNP14208539', 'ATM', 'Thanh toán hóa đơn', '20231129131317', '00', 'GLUFRFYC', '14208539', '00', '103', '98dc560b50a36bab6ab63167534ee871f5f1d85a11bbbebef282c67ac525a382081d49197ceaf66216d2a64421173f0ab06c76a89b0ea4b3a9f1ec0fdf7e399f', NULL, NULL),
(3, '19000000', 'NCB', 'VNP14208662', 'ATM', 'Thanh toán đơn hàng từ FreshVegeta Shop', '20231129141644', '00', 'GLUFRFYC', '14208662', '00', '105', 'a4fa3f340b24727aec7343b0847dd1e3eecf7585353a22511f71b89078b905b24c3f40d0d8e1a50dca58a4a410e8343c16d92b6d8960f75aeb6cff5cf372d870', '2023-11-29 00:16:49.000000', '2023-11-29 00:16:49.000000'),
(4, '1300000000', 'NCB', 'VNP14208682', 'ATM', 'Thanh toán đơn hàng từ FreshVegeta Shop', '20231129142341', '00', 'GLUFRFYC', '14208682', '00', '342', 'd27d69461fe1883ecee5a0d45ab40a943ff7ed248189237cc91a3352a27b9877bb959de1cbd2156ecf5eacb4ecc5eabb6dcea1f6c741490947f88323d77004d8', '2023-11-29 00:23:46.000000', '2023-11-29 00:23:46.000000'),
(5, '1300000000', 'NCB', 'VNP14208682', 'ATM', 'Thanh toán đơn hàng từ FreshVegeta Shop', '20231129142341', '00', 'GLUFRFYC', '14208682', '00', '342', 'd27d69461fe1883ecee5a0d45ab40a943ff7ed248189237cc91a3352a27b9877bb959de1cbd2156ecf5eacb4ecc5eabb6dcea1f6c741490947f88323d77004d8', '2023-11-29 00:24:08.000000', '2023-11-29 00:24:08.000000'),
(6, '2200000000', 'NCB', 'VNP14208705', 'ATM', 'Thanh toán đơn hàng từ FreshVegeta Shop', '20231129142934', '00', 'GLUFRFYC', '14208705', '00', '239', '0cb81825dc168081a9f77bceb5e5d7af073fb07f976ba3f0fd8c1c47998887e038a3de1150def210829d80d0a94047067d1fcd3ee1ea0be0adebfcab64419099', '2023-11-29 00:29:51.000000', '2023-11-29 00:29:51.000000'),
(7, '144000000', 'NCB', 'VNP14208718', 'ATM', 'Thanh toán đơn hàng từ FreshVegeta Shop', '20231129143425', '00', 'GLUFRFYC', '14208718', '00', '458', '903e5233350634c7fc78c17d64e49f0dd421313054d2c1e5e7a91d3cc8d625d1be2057b71c84915d73a38f141e0f7201142fb4fd22d3c1438c2a4e7c01796973', '2023-11-29 00:34:30.000000', '2023-11-29 00:34:30.000000'),
(8, '60000000', 'NCB', 'VNP14208731', 'ATM', 'Thanh toán đơn hàng từ FreshVegeta Shop', '20231129143942', '00', 'GLUFRFYC', '14208731', '00', '646', '2c1e101bf8c02b8841dbd4f2bbabc1f733e89f3d9c5be63c9353af081ffd4522dab18c23ced1d15654e92191171738aa8f2322fd4b34fac825b8537e40963815', '2023-11-29 00:39:51.000000', '2023-11-29 00:39:51.000000'),
(9, '60000000', 'NCB', 'VNP14208731', 'ATM', 'Thanh toán đơn hàng từ FreshVegeta Shop', '20231129143942', '00', 'GLUFRFYC', '14208731', '00', '646', '2c1e101bf8c02b8841dbd4f2bbabc1f733e89f3d9c5be63c9353af081ffd4522dab18c23ced1d15654e92191171738aa8f2322fd4b34fac825b8537e40963815', '2023-11-29 00:40:22.000000', '2023-11-29 00:40:22.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
