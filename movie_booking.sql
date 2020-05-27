/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : movie_booking

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 28/05/2020 00:56:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', '123');

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of areas
-- ----------------------------
INSERT INTO `areas` VALUES (1, 'Hà Nội');
INSERT INTO `areas` VALUES (2, 'Hồ Chí Minh');
INSERT INTO `areas` VALUES (3, 'Đà Nẵng');

-- ----------------------------
-- Table structure for booking_seats
-- ----------------------------
DROP TABLE IF EXISTS `booking_seats`;
CREATE TABLE `booking_seats`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `booking_id` int(10) NULL DEFAULT NULL,
  `seat_id` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of booking_seats
-- ----------------------------
INSERT INTO `booking_seats` VALUES (1, 5, 24);
INSERT INTO `booking_seats` VALUES (2, 5, 25);
INSERT INTO `booking_seats` VALUES (3, 6, 36);
INSERT INTO `booking_seats` VALUES (4, 6, 37);
INSERT INTO `booking_seats` VALUES (5, 7, 42);
INSERT INTO `booking_seats` VALUES (6, 7, 43);
INSERT INTO `booking_seats` VALUES (7, 8, 12);
INSERT INTO `booking_seats` VALUES (8, 8, 13);

-- ----------------------------
-- Table structure for bookings
-- ----------------------------
DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NULL DEFAULT NULL,
  `cinema_id` int(10) NULL DEFAULT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `show_time_id` int(10) NULL DEFAULT NULL,
  `total` float(255, 0) NULL DEFAULT NULL,
  `created_at` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `movie_id` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bookings
-- ----------------------------
INSERT INTO `bookings` VALUES (2, 1, 4, '20200527', 3, 160000, '06:05:09 27/05/2020', 5);
INSERT INTO `bookings` VALUES (3, 1, 4, '20200527', 2, 320000, '07:05:12 27/05/2020', 6);
INSERT INTO `bookings` VALUES (4, 1, 4, '20200527', 3, 160000, '07:05:27 27/05/2020', 6);
INSERT INTO `bookings` VALUES (5, 1, 4, '20200527', 3, 0, '07:05:23 27/05/2020', 6);
INSERT INTO `bookings` VALUES (6, 1, 4, '20200527', 3, 0, '07:05:55 27/05/2020', 6);
INSERT INTO `bookings` VALUES (7, 1, 4, '20200527', 3, 0, '07:05:22 27/05/2020', 6);
INSERT INTO `bookings` VALUES (8, 1, 4, '20200527', 3, 0, '07:05:10 27/05/2020', 5);

-- ----------------------------
-- Table structure for cinemas
-- ----------------------------
DROP TABLE IF EXISTS `cinemas`;
CREATE TABLE `cinemas`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `area_id` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cinemas
-- ----------------------------
INSERT INTO `cinemas` VALUES (1, 'CGV Aeon Tân Phú', NULL, 2);
INSERT INTO `cinemas` VALUES (2, 'CGV Hùng Vương Plaza', NULL, 2);
INSERT INTO `cinemas` VALUES (3, 'CGV Sư Vạn Hạnh', NULL, 2);
INSERT INTO `cinemas` VALUES (4, 'CGV Vincom Center Bà Triệu', NULL, 1);
INSERT INTO `cinemas` VALUES (5, 'CGV Indochina Plaza Hà Nội', NULL, 1);
INSERT INTO `cinemas` VALUES (6, 'CGV Vincom Đà Nẵng', NULL, 3);

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES (1, 'Nguyễn Văn A', '012345', NULL, NULL, '123');

-- ----------------------------
-- Table structure for movies
-- ----------------------------
DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `directors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `casts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `categories` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `premiere` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `rated` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `media` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of movies
-- ----------------------------
INSERT INTO `movies` VALUES (5, 'BABA YAGA: ÁC QUỶ RỪNG SÂU', 'Svyatoslav Podgayevskiy', 'Svetlana Ustinova, Maryana Spivak, Alexey Rozin', 'Kinh Dị', '22/05/2020', '96 minutes', 'Tiếng Nga - Phụ đề tiếng Anh/Việt', 'C18 - PHIM CẤM KHÁN GIẢ DƯỚI 18 TUỔI', 'Lấy cảm hứng từ phù thủy Baba Yaga bắt cóc và ăn thịt trẻ con trong truyền thuyết dân gian, phim bắt đầu khi một gia đình trẻ chuyển đến căn hộ tại vùng ngoại ô. Một cô bảo mẫu được thuê về để chăm sóc bé gái mới sinh của gia đình. Ả nhanh chóng chiếm được cảm tình của mọi người trừ cậu con trai lớn Egor. Và rồi, một ngày nọ, khi trở về nhà, Egor hoảng hốt phát hiện em gái của mình đã biến mất cùng cô bảo mẫu đáng nghi. Ngạc nhiên thay, trước tình huống đó, bố mẹ cậu dường như không có chút ký ức nào về đứa con gái bé bỏng của họ. Egor bắt đầu tìm hiểu sự việc và phát hiện tấn bi kịch này bắt đầu từ nhân vật đáng sợ có tên Baba Yaga.', 'baba-yaga-ac-quy-rung-sau.png', 'https://www.youtube.com/embed/-Aa4ym5Me-I', 'baba-yaga-ac-quy-rung-sau');
INSERT INTO `movies` VALUES (6, 'BÀ HOÀNG NÓI DỐI', 'Chang You-jeong', 'Ra Mi Ran, Na Moon Hee, Kim Mu Yeol,…', 'Hài', '15/05/2020', '105 phút', 'Tiếng Hàn - Phụ đề tiếng Việt', 'C16 - PHIM CẤM KHÁN GIẢ DƯỚI 16 TUỔI', 'Bộ phim xoay quanh câu chuyện của nữ nghị sĩ Joo Sang Sook với khả năng nói dối “như cơm bữa”, nhờ đó bà gặt hái được rất nhiều thành công trong sự nghiệp chính trị. Đột nhiên một ngày nọ, bà Joo không thể nói dối được nữa. Sự việc trở nên hết sức nguy cấp khi ngày tranh cử đã gần kề, liệu Joo Sang Sook có thành công đắc cử lần thứ tư hay không khi mọi lời bà nói ra đều là sự thật nghiệt ngã?', 'ba-hoang-noi-doi.png', 'https://www.youtube.com/embed/DMTVg0QtCUg', 'ba-hoang-noi-doi');
INSERT INTO `movies` VALUES (7, 'ÁC MỘNG KINH HOÀNG', 'David Artur Clark', 'Nicola Lambo ( American Crime Story, Will & Grace), Hannah Ward (Ballistic, Sunny in the Dark), Conrad Goode (Paul Blart: Mall Cop, The Longest Yard), Micah Parker ( Mob City, Lola Versus)', 'Kinh Dị', '15/05/2020', '77 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C18 - PHIM CẤM KHÁN GIẢ DƯỚI 18 TUỔI', 'Sau cái chết bi thảm của con trai út, người mẹ và con gái trải qua những đêm dài kinh hoàng trong nỗi đau mất mát. Họ bắt đầu có dấu hiệu của chứng bệnh rối loạn giấc ngủ. Những ác mộng ngày càng dữ dội và dày đặc hơn...', 'ac-mong-kinh-hoang.png', 'https://www.youtube.com/embed/yffeet10TCM', 'ac-mong-kinh-hoang');
INSERT INTO `movies` VALUES (8, 'TRUYỀN THUYẾT VỀ QUÁN TIÊN', 'Đinh Tuấn Vũ', 'Đỗ Thuý Hằng, Hồ Minh Khuê, Hoàng Mai Anh, Nguyễn Minh Hải, Leo Nguyễn, Trần Việt Hoàng, NSND. Quốc Trị, Lê Hoàng Long, Thế Nguyên…', 'Bí ẩn', '22/05/2020', '110 phút', 'Tiếng Việt - Phụ đề Tiếng Anh', 'C16 - PHIM CẤM KHÁN GIẢ DƯỚI 16 TUỔI', 'Ba cô gái xinh đẹp Mùi (Thúy Hằng), Phượng (Minh Khuê) và Tuyết Lan (Mai Anh) sống ở một hang động trong rừng Trường Sơn, nhận một nhiệm vụ đặc biệt là tiếp đón các anh &#34;lính lái xe&#34; tới nghỉ chân trong hang. Mỗi người một số phận, nhưng điểm chung là đều phải chịu đựng nỗi cô đơn tận cùng trong một hang sâu giữa rừng già mà không phải ai cũng hiểu và thấu cảm được.', 'truyen-thuyet-ve-quan-tien.png', 'https://www.youtube.com/embed/VLVoVPXMkMw', 'truyen-thuyet-ve-quan-tien');
INSERT INTO `movies` VALUES (9, 'PHI VỤ ĐÀO TẨU', 'Francis Annan', 'Daniel Radcliffe,Daniel Webber, Mark Leonard Winter, Ian Hart', 'Hồi hộp', '09/05/2020', '106 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', 'C13 - PHIM CẤM KHÁN GIẢ DƯỚI 13 TUỔI', 'Dựa trên câu chuyện có thật về cuộc đào tẩu thần kì khỏi nhà tù an ninh Pretoria (Nam Phi) của hai nhà hoạt động chính trị Tim Jerkins (Daniel Radcliffe) và Stephen Lee (Daniel Webber), bộ phim tái hiện chân thật và nghẹt thở kế hoạch vượt ngục phi thường và kịch tính. Nhờ vào óc quan sát tỉ mỉ, trí thông minh và sự khéo léo, họ đã tạo ra những chiếc chìa khóa gỗ vượt 10 cánh cửa thép và tìm lại tự do cho chính mình!', 'phi-vu-dao-tau.png', 'https://www.youtube.com/embed/NmhFX7whhhI', 'phi-vu-dao-tau');

-- ----------------------------
-- Table structure for seat_price
-- ----------------------------
DROP TABLE IF EXISTS `seat_price`;
CREATE TABLE `seat_price`  (
  `type` int(11) NOT NULL,
  `price` float(25, 2) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of seat_price
-- ----------------------------
INSERT INTO `seat_price` VALUES (0, 50000.00);
INSERT INTO `seat_price` VALUES (1, 80000.00);

-- ----------------------------
-- Table structure for seats
-- ----------------------------
DROP TABLE IF EXISTS `seats`;
CREATE TABLE `seats`  (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `type` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of seats
-- ----------------------------
INSERT INTO `seats` VALUES (1, 'A1', 0);
INSERT INTO `seats` VALUES (2, 'A2', 0);
INSERT INTO `seats` VALUES (3, 'A3', 0);
INSERT INTO `seats` VALUES (4, 'A4', 0);
INSERT INTO `seats` VALUES (5, 'A5', 0);
INSERT INTO `seats` VALUES (6, 'A6', 0);
INSERT INTO `seats` VALUES (7, 'A7', 0);
INSERT INTO `seats` VALUES (8, 'A8', 0);
INSERT INTO `seats` VALUES (9, 'A9', 0);
INSERT INTO `seats` VALUES (10, 'A10', 0);
INSERT INTO `seats` VALUES (11, 'B1', 0);
INSERT INTO `seats` VALUES (12, 'B2', 0);
INSERT INTO `seats` VALUES (13, 'B3', 0);
INSERT INTO `seats` VALUES (14, 'B4', 0);
INSERT INTO `seats` VALUES (15, 'B5', 0);
INSERT INTO `seats` VALUES (16, 'B6', 0);
INSERT INTO `seats` VALUES (17, 'B7', 0);
INSERT INTO `seats` VALUES (18, 'B8', 0);
INSERT INTO `seats` VALUES (19, 'B9', 0);
INSERT INTO `seats` VALUES (20, 'B10', 0);
INSERT INTO `seats` VALUES (21, 'C1', 1);
INSERT INTO `seats` VALUES (22, 'C2', 1);
INSERT INTO `seats` VALUES (23, 'C3', 1);
INSERT INTO `seats` VALUES (24, 'C4', 1);
INSERT INTO `seats` VALUES (25, 'C5', 1);
INSERT INTO `seats` VALUES (26, 'C6', 1);
INSERT INTO `seats` VALUES (27, 'C7', 1);
INSERT INTO `seats` VALUES (28, 'C8', 1);
INSERT INTO `seats` VALUES (29, 'C9', 1);
INSERT INTO `seats` VALUES (30, 'C10', 1);
INSERT INTO `seats` VALUES (31, 'D1', 1);
INSERT INTO `seats` VALUES (32, 'D2', 1);
INSERT INTO `seats` VALUES (33, 'D3', 1);
INSERT INTO `seats` VALUES (34, 'D4', 1);
INSERT INTO `seats` VALUES (35, 'D5', 1);
INSERT INTO `seats` VALUES (36, 'D6', 1);
INSERT INTO `seats` VALUES (37, 'D7', 1);
INSERT INTO `seats` VALUES (38, 'D8', 1);
INSERT INTO `seats` VALUES (39, 'D9', 1);
INSERT INTO `seats` VALUES (40, 'D10', 1);
INSERT INTO `seats` VALUES (41, 'E1', 1);
INSERT INTO `seats` VALUES (42, 'E2', 1);
INSERT INTO `seats` VALUES (43, 'E3', 1);
INSERT INTO `seats` VALUES (44, 'E4', 1);
INSERT INTO `seats` VALUES (45, 'E5', 1);
INSERT INTO `seats` VALUES (46, 'E6', 1);
INSERT INTO `seats` VALUES (47, 'E7', 1);
INSERT INTO `seats` VALUES (48, 'E8', 1);
INSERT INTO `seats` VALUES (49, 'E9', 1);
INSERT INTO `seats` VALUES (50, 'E10', 1);
INSERT INTO `seats` VALUES (51, 'F1', 1);
INSERT INTO `seats` VALUES (52, 'F2', 1);
INSERT INTO `seats` VALUES (53, 'F3', 1);
INSERT INTO `seats` VALUES (54, 'F4', 1);
INSERT INTO `seats` VALUES (55, 'F5', 1);
INSERT INTO `seats` VALUES (56, 'F6', 1);
INSERT INTO `seats` VALUES (57, 'F7', 1);
INSERT INTO `seats` VALUES (58, 'F8', 1);
INSERT INTO `seats` VALUES (59, 'F9', 1);
INSERT INTO `seats` VALUES (60, 'F10', 1);
INSERT INTO `seats` VALUES (61, 'G1', 1);
INSERT INTO `seats` VALUES (62, 'G2', 1);
INSERT INTO `seats` VALUES (63, 'G3', 1);
INSERT INTO `seats` VALUES (64, 'G4', 1);
INSERT INTO `seats` VALUES (65, 'G5', 1);
INSERT INTO `seats` VALUES (66, 'G6', 1);
INSERT INTO `seats` VALUES (67, 'G7', 1);
INSERT INTO `seats` VALUES (68, 'G8', 1);
INSERT INTO `seats` VALUES (69, 'G9', 1);
INSERT INTO `seats` VALUES (70, 'G10', 1);

-- ----------------------------
-- Table structure for show_times
-- ----------------------------
DROP TABLE IF EXISTS `show_times`;
CREATE TABLE `show_times`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `time` int(10) NULL DEFAULT NULL,
  `end_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of show_times
-- ----------------------------
INSERT INTO `show_times` VALUES (1, '10:00 AM', 1010, '12:00 PM');
INSERT INTO `show_times` VALUES (2, '12:30 PM', 1230, '13:50 PM');
INSERT INTO `show_times` VALUES (3, '14:00 PM', 1400, '15:20 PM');
INSERT INTO `show_times` VALUES (4, '15:30 PM', 1530, '16:50 PM');
INSERT INTO `show_times` VALUES (5, '17:00 PM', 1700, '18:20 PM');
INSERT INTO `show_times` VALUES (6, '18:30 PM', 1830, '19:50 PM');
INSERT INTO `show_times` VALUES (7, '20:00 PM', 2000, '21:20 PM');
INSERT INTO `show_times` VALUES (8, '21:30 PM', 2130, '22:00 PM');
