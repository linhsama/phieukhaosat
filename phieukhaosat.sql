-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for phieukhaosat
CREATE DATABASE IF NOT EXISTS `phieukhaosat` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `phieukhaosat`;

-- Dumping structure for table phieukhaosat.bocauhoi
CREATE TABLE IF NOT EXISTS `bocauhoi` (
  `id_bo_cau_hoi` int(11) NOT NULL AUTO_INCREMENT,
  `id_mau_phieu` int(11) NOT NULL DEFAULT 0,
  `id_ten_khao_sat` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_bo_cau_hoi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.bocauhoi: ~8 rows (approximately)
INSERT INTO `bocauhoi` (`id_bo_cau_hoi`, `id_mau_phieu`, `id_ten_khao_sat`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 1, 3),
	(4, 1, 4),
	(5, 1, 5),
	(6, 4, 1),
	(7, 4, 2),
	(8, 4, 3),
	(9, 4, 4),
	(10, 4, 5),
	(11, 1, 6);

-- Dumping structure for table phieukhaosat.cauhoi
CREATE TABLE IF NOT EXISTS `cauhoi` (
  `id_cau_hoi` int(11) NOT NULL AUTO_INCREMENT,
  `ten_cau_hoi` text DEFAULT NULL,
  `is_text` int(11) DEFAULT 0,
  `ghi_chu` text DEFAULT NULL,
  `thu_tu` int(11) DEFAULT NULL,
  `id_nhom_cau_hoi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cau_hoi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.cauhoi: ~22 rows (approximately)
INSERT INTO `cauhoi` (`id_cau_hoi`, `ten_cau_hoi`, `is_text`, `ghi_chu`, `thu_tu`, `id_nhom_cau_hoi`) VALUES
	(1, 'Đi học và thực tập đầy đủ các môn học theo lịch học và thực tập (5đ); nếu vi phạm bị trừ 2đ/môn học.', 0, NULL, 1, 1),
	(2, 'Thực hiện đúng quy chế thi, kiểm tra (5đ); nếu vi phạm bị kỷ luật từ khiển trách trở lên (0đ).', 0, NULL, 2, 1),
	(3, 'Không bị cấm thi môn học nào (3đ); nếu bị cấm thi 1 môn trở lên (0đ).', 0, NULL, 3, 1),
	(4, 'Vượt khó, phấn đấu trong học tập, xếp loại học tập học kỳ gần nhất từ khá trở lên (3đ).', 0, NULL, 4, 1),
	(5, 'Tham gia một trong các hoạt động học thuật, nghiên cứu khoa học, các kỳ thi về học thuật hoặc đạt một trong các kỹ năng chuẩn đầu ra theo quy định của trường (riêng kỹ năng chuẩn đầu ra được cộng điểm qua các học kỳ) (4đ).', 0, NULL, 5, 1),
	(6, 'Kết quả sinh hoạt đầu khóa, giữa khóa, cuối khóa (ĐK,GK,CK) đạt và sinh hoạt lớp đầy đủ (9đ); kết quả sinh hoạt ĐK,GK,CK đạt nhưng có bỏ sinh hoạt lớp 1 buổi (7đ), 2 buổi (4đ); kết quả sinh hoạt ĐK,GK,CK không đạt hoặc đạt nhưng bỏ sinh hoạt lớp 3 buổi trở lên (0đ).', 0, NULL, 6, 2),
	(7, 'Thực hiện tốt nội quy, quy định của nhà trường (5đ); nếu vi phạm: làm mất trật tự lớp học trừ (1đ), không mặc đồng phục trừ (2đ), làm mất vệ sinh lớp học trừ (2đ); nếu vi phạm bị kỷ luật từ khiển trách trở lên (0đ).', 0, NULL, 7, 2),
	(8, 'Đóng học phí đúng thời gian quy định hoặc có đơn xin gia hạn được Ban Giám hiệu duyệt (6đ), đóng học phí trễ hạn (0đ).', 0, NULL, 8, 2),
	(9, 'Tham gia nghiêm túc việc lấy ý kiến phản hồi về hoạt động giảng dạy của giảng viên học kỳ 1 năm học 2019 - 2020 (5đ).', 0, NULL, 9, 2),
	(10, 'Tham gia các hoạt động công ích, tình nguyện, công tác xã hội (4đ).', 0, NULL, 10, 3),
	(11, 'Tham gia tuyên truyền, phòng chống tội phạm và các tệ nạn xã hội (3đ).', 0, NULL, 11, 3),
	(12, 'Tham gia từ 3 hoạt động do lớp, chi đoàn, chi hội phát động (2đ).', 0, NULL, 12, 3),
	(13, 'Tham gia từ 3 hoạt động cấp khoa (bao gồm cả đoàn thể) phát động (3đ).', 0, NULL, 13, 3),
	(14, 'Tham gia từ 2 hoạt động cấp trường (bao gồm cả đoàn thể) phát động (4đ).', 0, NULL, 14, 3),
	(15, 'Có giấy khen hoặc giải thưởng các hoạt động cấp khoa (bao gồm cả đoàn thể) (3đ), hoặc cấp trường trở lên (bao gồm cả đoàn thể) (4đ).', 0, NULL, 15, 3),
	(16, 'Chấp hành pháp luật của Nhà nước, quy định của địa phương thường trú, tạm trú, có cập nhật thông tin sinh viên trên cổng sinh viên để quản lý thông tin ngoại trú (10đ), nếu không nộp hoặc khi thay đổi địa chỉ mà không khai báo lại (0đ); nếu vi phạm hành chính (0đ); nếu đang bị truy cứu trách nhiệm hình sự thì không được đánh giá kết quả rèn luyện.', 0, NULL, 16, 4),
	(17, 'Tham gia các hoạt động xã hội có giấy xác nhận thành tích, được biểu dương hoặc khen thưởng (4đ).', 0, NULL, 17, 4),
	(18, 'Có tinh thần chia sẻ, giúp đỡ người có khó khăn, hoạn nạn (đóng góp, ủng hộ về vật chất hoặc tinh thần) (2đ).', 0, NULL, 18, 4),
	(19, 'Tham gia bảo hiểm y tế (BHYT) (7đ), bảo hiểm tai nạn (BHTN) (2đ); không tham gia BHYT và BHTN (0đ).', 0, NULL, 19, 4),
	(20, 'Tham gia công tác lớp là tổ trưởng, tổ phó (1đ) hoặc tham gia ban cán sự lớp, ban chấp hành chi đoàn, chi hội và hoàn thành nhiệm vụ (3đ).', 0, NULL, 20, 5),
	(21, 'Tham gia ban chấp hành đoàn thể cấp khoa (2đ) hoặc cấp trường (3đ).', 0, NULL, 21, 5),
	(22, 'Tập thể lớp hoặc chi đoàn, chi hội được khen thưởng từ cấp khoa trở lên (bao gồm cả đoàn thể) (4đ).', 0, NULL, 22, 5),
	(33, 'Góp ý khác', 1, NULL, 23, 6);

-- Dumping structure for table phieukhaosat.dotkhaosat
CREATE TABLE IF NOT EXISTS `dotkhaosat` (
  `id_dot` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dot` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `thoi_gian_bat_dau` date DEFAULT NULL,
  `thoi_gian_ket_thuc` date DEFAULT NULL,
  `id_hoc_ky` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dot`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.dotkhaosat: ~6 rows (approximately)
INSERT INTO `dotkhaosat` (`id_dot`, `ten_dot`, `ghi_chu`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`, `id_hoc_ky`) VALUES
	(1, 'Đợt 1', '', '2023-06-10', '2023-06-10', 2),
	(3, 'Đợt 4', '', '2023-06-10', '2023-06-10', 6),
	(4, 'Đợt 4', '', '2023-06-10', '2023-06-10', 6),
	(5, NULL, NULL, NULL, NULL, NULL),
	(6, NULL, NULL, NULL, NULL, NULL),
	(7, 'Đợt 2', '', '2023-06-10', '2023-06-10', 3);

-- Dumping structure for table phieukhaosat.giangvien
CREATE TABLE IF NOT EXISTS `giangvien` (
  `id_giang_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_giang_vien` varchar(50) DEFAULT NULL,
  `ten_giang_vien` varchar(50) DEFAULT NULL,
  `gioi_tinh` tinyint(4) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `so_dien_thoai_1` varchar(11) DEFAULT NULL,
  `so_dien_thoai_2` varchar(11) DEFAULT NULL,
  `dia_chi_lien_lac` text DEFAULT NULL,
  `dia_chi_thuong_tru` text DEFAULT NULL,
  `id_trinh_do` int(11) DEFAULT NULL,
  `trang_thai` tinyint(4) DEFAULT 1,
  `id_khoa` int(11) DEFAULT 1,
  PRIMARY KEY (`id_giang_vien`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.giangvien: ~2 rows (approximately)
INSERT INTO `giangvien` (`id_giang_vien`, `ma_giang_vien`, `ten_giang_vien`, `gioi_tinh`, `ngay_sinh`, `email`, `so_dien_thoai_1`, `so_dien_thoai_2`, `dia_chi_lien_lac`, `dia_chi_thuong_tru`, `id_trinh_do`, `trang_thai`, `id_khoa`) VALUES
	(1, 'gv1', 'Cố vấn học tập', 1, '2001-06-05', 'gv@gmail.com', '0123456789', '0123456789', 'CT', 'CT', 10, 1, 1),
	(2, 'gv2', 'Giảng viên 2', 0, '2001-06-05', 'fdcvlinh6@gmail.com', '0123456789', '0123456789', 'CT', 'CT', 10, 1, 1);

-- Dumping structure for table phieukhaosat.hocky
CREATE TABLE IF NOT EXISTS `hocky` (
  `id_hoc_ky` int(11) NOT NULL AUTO_INCREMENT,
  `ten_hoc_ky` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_nam_hoc` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_hoc_ky`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.hocky: ~2 rows (approximately)
INSERT INTO `hocky` (`id_hoc_ky`, `ten_hoc_ky`, `ghi_chu`, `id_nam_hoc`) VALUES
	(2, 'Học kỳ 1', '', 4),
	(3, 'Học kỳ 2', '', 4),
	(4, 'Học kỳ 1', '', 3),
	(5, 'Học kỳ 3', '', 4),
	(6, 'Học kỳ 4', '', 3);

-- Dumping structure for table phieukhaosat.import
CREATE TABLE IF NOT EXISTS `import` (
  `id` int(11) DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table phieukhaosat.import: ~0 rows (approximately)

-- Dumping structure for table phieukhaosat.ketquagiangvien
CREATE TABLE IF NOT EXISTS `ketquagiangvien` (
  `id_ket_qua` int(11) NOT NULL AUTO_INCREMENT,
  `id_phieu` int(11) NOT NULL DEFAULT 0,
  `id_giang_vien` int(11) NOT NULL DEFAULT 0,
  `id_khoa` int(11) NOT NULL DEFAULT 0,
  `id_dot` int(11) NOT NULL DEFAULT 0,
  `ma_giang_vien` varchar(50) NOT NULL DEFAULT '0',
  `ten_giang_vien` varchar(50) NOT NULL DEFAULT '0',
  `ten_khoa` varchar(50) NOT NULL DEFAULT '0',
  `muc_1` float NOT NULL DEFAULT 0,
  `muc_2` float NOT NULL DEFAULT 0,
  `muc_3` float NOT NULL DEFAULT 0,
  `muc_4` float NOT NULL DEFAULT 0,
  `muc_5` float NOT NULL DEFAULT 0,
  `gop_y` text NOT NULL,
  `ngay_thong_ke` date DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_ket_qua`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.ketquagiangvien: ~6 rows (approximately)
INSERT INTO `ketquagiangvien` (`id_ket_qua`, `id_phieu`, `id_giang_vien`, `id_khoa`, `id_dot`, `ma_giang_vien`, `ten_giang_vien`, `ten_khoa`, `muc_1`, `muc_2`, `muc_3`, `muc_4`, `muc_5`, `gop_y`, `ngay_thong_ke`, `ghi_chu`) VALUES
	(16, 48, 1, 1, 4, 'gv1', 'Cố vấn học tập', 'Khoa KTCN', 5, 3, 2, 1, 1, '"ádasdasdasdasdasdas"', '2023-06-10', NULL),
	(17, 49, 2, 1, 4, 'gv2', 'Giảng viên 2', 'Khoa KTCN', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(18, 48, 1, 1, 4, 'gv1', 'Cố vấn học tập', 'Khoa KTCN', 5, 3, 2, 1, 1, '"ádasdasdasdasdasdas"', '2023-06-10', NULL),
	(19, 49, 2, 1, 4, 'gv2', 'Giảng viên 2', 'Khoa KTCN', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(20, 50, 1, 1, 7, 'gv1', 'Cố vấn học tập', 'Khoa KTCN', 2, 5, 5, 5, 5, 'ádasdsadasdasd', '2023-06-10', NULL),
	(21, 51, 2, 1, 7, 'gv2', 'Giảng viên 2', 'Khoa KTCN', 0, 0, 0, 0, 0, '', '2023-06-10', NULL);

-- Dumping structure for table phieukhaosat.ketquasinhvien
CREATE TABLE IF NOT EXISTS `ketquasinhvien` (
  `id_ket_qua` int(11) NOT NULL AUTO_INCREMENT,
  `id_phieu` int(11) NOT NULL DEFAULT 0,
  `id_sinh_vien` int(11) NOT NULL DEFAULT 0,
  `id_lop_hoc` int(11) NOT NULL DEFAULT 0,
  `id_dot` int(11) NOT NULL DEFAULT 0,
  `ma_sinh_vien` varchar(50) NOT NULL DEFAULT '0',
  `ten_sinh_vien` varchar(50) NOT NULL DEFAULT '0',
  `ten_lop_hoc` varchar(50) NOT NULL DEFAULT '0',
  `muc_1` float NOT NULL DEFAULT 0,
  `muc_2` float NOT NULL DEFAULT 0,
  `muc_3` float NOT NULL DEFAULT 0,
  `muc_4` float NOT NULL DEFAULT 0,
  `muc_5` float NOT NULL DEFAULT 0,
  `gop_y` text NOT NULL,
  `ngay_thong_ke` date DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_ket_qua`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.ketquasinhvien: ~68 rows (approximately)
INSERT INTO `ketquasinhvien` (`id_ket_qua`, `id_phieu`, `id_sinh_vien`, `id_lop_hoc`, `id_dot`, `ma_sinh_vien`, `ten_sinh_vien`, `ten_lop_hoc`, `muc_1`, `muc_2`, `muc_3`, `muc_4`, `muc_5`, `gop_y`, `ngay_thong_ke`, `ghi_chu`) VALUES
	(1, 1, 1, 1, 1, 'SV1', 'Sinh viên 1', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Giỏi', '2023-06-08', 'Hạ bậc'),
	(2, 2, 2, 1, 1, 'LT', 'Lớp trưởng 1', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(3, 3, 3, 1, 1, 'BTCD', 'Bí thư chi đoàn 1', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(4, 4, 4, 1, 1, 'SV2', 'Sinh viên 2', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(5, 5, 5, 1, 1, 'LT2', 'Lớp trưởng 2', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(6, 6, 6, 1, 1, 'BTCD2', 'Bí thư chi đoàn 2', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(7, 7, 7, 1, 1, '4', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(8, 8, 8, 1, 1, '5', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(9, 9, 9, 1, 1, '6', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(10, 10, 10, 1, 1, '7', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(11, 11, 11, 1, 1, '8', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(12, 12, 12, 1, 1, '9', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(13, 13, 13, 1, 1, '10', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(14, 14, 14, 1, 1, '11', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(15, 15, 15, 1, 1, '12', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, 'Kém', '2023-06-08', NULL),
	(16, 1, 1, 1, 1, 'SV1', 'Sinh viên 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"ádasdasdasdasdasdas"', '2023-06-10', NULL),
	(17, 2, 2, 1, 1, 'LT', 'Lớp trưởng 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"aaaaaaaaaaaaa"', '2023-06-10', NULL),
	(18, 3, 3, 1, 1, 'BTCD', 'Bí thư chi đoàn 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"ádasdasdasdasd"', '2023-06-10', NULL),
	(19, 4, 4, 1, 1, 'SV2', 'Sinh viên 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(20, 5, 5, 1, 1, 'LT2', 'Lớp trưởng 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(21, 6, 6, 1, 1, 'BTCD2', 'Bí thư chi đoàn 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(22, 7, 7, 1, 1, '4', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(23, 8, 8, 1, 1, '5', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(24, 9, 9, 1, 1, '6', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(25, 10, 10, 1, 1, '7', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(26, 11, 11, 1, 1, '8', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(27, 12, 12, 1, 1, '9', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(28, 13, 13, 1, 1, '10', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(29, 14, 14, 1, 1, '11', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(30, 15, 15, 1, 1, '12', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(31, 1, 1, 1, 1, 'SV1', 'Sinh viên 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"ádasdasdasdasdasdas"', '2023-06-10', NULL),
	(32, 2, 2, 1, 1, 'LT', 'Lớp trưởng 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"aaaaaaaaaaaaa"', '2023-06-10', NULL),
	(33, 3, 3, 1, 1, 'BTCD', 'Bí thư chi đoàn 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"ádasdasdasdasd"', '2023-06-10', NULL),
	(34, 4, 4, 1, 1, 'SV2', 'Sinh viên 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(35, 5, 5, 1, 1, 'LT2', 'Lớp trưởng 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(36, 6, 6, 1, 1, 'BTCD2', 'Bí thư chi đoàn 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(37, 7, 7, 1, 1, '4', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(38, 8, 8, 1, 1, '5', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(39, 9, 9, 1, 1, '6', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(40, 10, 10, 1, 1, '7', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(41, 11, 11, 1, 1, '8', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(42, 12, 12, 1, 1, '9', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(43, 13, 13, 1, 1, '10', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(44, 14, 14, 1, 1, '11', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(45, 15, 15, 1, 1, '12', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(46, 1, 1, 1, 1, 'SV1', 'Sinh viên 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"ádasdasdasdasdasdas"', '2023-06-10', NULL),
	(47, 2, 2, 1, 1, 'LT', 'Lớp trưởng 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"aaaaaaaaaaaaa"', '2023-06-10', NULL),
	(48, 3, 3, 1, 1, 'BTCD', 'Bí thư chi đoàn 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"ádasdasdasdasd"', '2023-06-10', NULL),
	(49, 4, 4, 1, 1, 'SV2', 'Sinh viên 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(50, 5, 5, 1, 1, 'LT2', 'Lớp trưởng 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(51, 6, 6, 1, 1, 'BTCD2', 'Bí thư chi đoàn 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(52, 7, 7, 1, 1, '4', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(53, 8, 8, 1, 1, '5', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(54, 9, 9, 1, 1, '6', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(55, 10, 10, 1, 1, '7', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(56, 11, 11, 1, 1, '8', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(57, 12, 12, 1, 1, '9', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(58, 13, 13, 1, 1, '10', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(59, 14, 14, 1, 1, '11', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(60, 15, 15, 1, 1, '12', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(61, 1, 1, 1, 1, 'SV1', 'Sinh viên 1', 'Công nghệ thông tin 13', 6, 11, 5, 0, 0, 'z', '2023-06-10', NULL),
	(62, 2, 2, 1, 1, 'LT', 'Lớp trưởng 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"aaaaaaaaaaaaa"', '2023-06-10', NULL),
	(63, 3, 3, 1, 1, 'BTCD', 'Bí thư chi đoàn 1', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '"ádasdasdasdasd"', '2023-06-10', NULL),
	(64, 4, 4, 1, 1, 'SV2', 'Sinh viên 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(65, 5, 5, 1, 1, 'LT2', 'Lớp trưởng 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(66, 6, 6, 1, 1, 'BTCD2', 'Bí thư chi đoàn 2', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(67, 7, 7, 1, 1, '4', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(68, 8, 8, 1, 1, '5', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(69, 9, 9, 1, 1, '6', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(70, 10, 10, 1, 1, '7', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(71, 11, 11, 1, 1, '8', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(72, 12, 12, 1, 1, '9', 'a', 'Công nghệ thông tin 13', 5, 3, 2, 1, 1, '""', '2023-06-10', NULL),
	(73, 13, 13, 1, 1, '10', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(74, 14, 14, 1, 1, '11', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL),
	(75, 15, 15, 1, 1, '12', 'a', 'Công nghệ thông tin 13', 0, 0, 0, 0, 0, '', '2023-06-10', NULL);

-- Dumping structure for table phieukhaosat.khoa
CREATE TABLE IF NOT EXISTS `khoa` (
  `id_khoa` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khoa` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_khoa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.khoa: ~2 rows (approximately)
INSERT INTO `khoa` (`id_khoa`, `ten_khoa`, `ghi_chu`) VALUES
	(1, 'Khoa KTCN', ''),
	(2, 'Khoa QTKD', '');

-- Dumping structure for table phieukhaosat.khoahoc
CREATE TABLE IF NOT EXISTS `khoahoc` (
  `id_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khoa_hoc` varchar(50) DEFAULT NULL,
  `nam_nhap_hoc` varchar(50) DEFAULT NULL,
  `he_dao_tao` float DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_khoa_hoc`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.khoahoc: ~3 rows (approximately)
INSERT INTO `khoahoc` (`id_khoa_hoc`, `ten_khoa_hoc`, `nam_nhap_hoc`, `he_dao_tao`, `ghi_chu`) VALUES
	(1, 'Khóa 14', '2021', 4, ''),
	(2, 'Khóa 13', '2020', 4, '');

-- Dumping structure for table phieukhaosat.lophoc
CREATE TABLE IF NOT EXISTS `lophoc` (
  `id_lop_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_lop_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_khoa_hoc` int(11) DEFAULT NULL,
  `id_nganh_hoc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_lop_hoc`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.lophoc: ~3 rows (approximately)
INSERT INTO `lophoc` (`id_lop_hoc`, `ten_lop_hoc`, `ghi_chu`, `id_khoa_hoc`, `id_nganh_hoc`) VALUES
	(1, 'Công nghệ thông tin 13', '', 2, 1),
	(4, 'Công nghệ thông tin 14', '', 1, 1);

-- Dumping structure for table phieukhaosat.mauphieu
CREATE TABLE IF NOT EXISTS `mauphieu` (
  `id_mau_phieu` int(11) NOT NULL AUTO_INCREMENT,
  `ten_mau_phieu` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_mau_phieu`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.mauphieu: ~3 rows (approximately)
INSERT INTO `mauphieu` (`id_mau_phieu`, `ten_mau_phieu`, `ghi_chu`) VALUES
	(1, 'PHIẾU ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN CỦA SINH VIÊN', 'Căn cứ Thông tư số 16/2015/TT-BGDĐT và Quyết định số 216/QĐ-UBND'),
	(2, 'a', 'á\r\n'),
	(3, 'â', ''),
	(4, 'sad', 'ád');

-- Dumping structure for table phieukhaosat.namhoc
CREATE TABLE IF NOT EXISTS `namhoc` (
  `id_nam_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nam_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_nam_hoc`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.namhoc: ~1 rows (approximately)
INSERT INTO `namhoc` (`id_nam_hoc`, `ten_nam_hoc`, `ghi_chu`) VALUES
	(3, '2022-2023', ''),
	(4, '2023-2024', '');

-- Dumping structure for table phieukhaosat.nganhhoc
CREATE TABLE IF NOT EXISTS `nganhhoc` (
  `id_nganh_hoc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nganh_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_khoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nganh_hoc`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.nganhhoc: ~2 rows (approximately)
INSERT INTO `nganhhoc` (`id_nganh_hoc`, `ten_nganh_hoc`, `ghi_chu`, `id_khoa`) VALUES
	(1, 'Công nghệ thông tin', 'g\r\n', 1),
	(2, 'Điện tử', '', 1);

-- Dumping structure for table phieukhaosat.nhomapdung
CREATE TABLE IF NOT EXISTS `nhomapdung` (
  `id_nhom_ap_dung` int(11) NOT NULL AUTO_INCREMENT,
  `id_dot` int(11) NOT NULL DEFAULT 0,
  `id_mau_phieu` int(11) NOT NULL DEFAULT 0,
  `id_phan_nhom` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nhom_ap_dung`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.nhomapdung: ~4 rows (approximately)
INSERT INTO `nhomapdung` (`id_nhom_ap_dung`, `id_dot`, `id_mau_phieu`, `id_phan_nhom`) VALUES
	(1, 1, 1, 3),
	(4, 3, 2, 3),
	(5, 4, 2, 3),
	(6, 4, 2, 4),
	(7, 7, 1, 4);

-- Dumping structure for table phieukhaosat.nhomcauhoi
CREATE TABLE IF NOT EXISTS `nhomcauhoi` (
  `id_nhom_cau_hoi` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nhom_cau_hoi` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `thu_tu` int(11) DEFAULT NULL,
  `id_ten_khao_sat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nhom_cau_hoi`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.nhomcauhoi: ~6 rows (approximately)
INSERT INTO `nhomcauhoi` (`id_nhom_cau_hoi`, `ten_nhom_cau_hoi`, `ghi_chu`, `thu_tu`, `id_ten_khao_sat`) VALUES
	(1, 'Đánh giá về ý thức tham gia học tập (0 - 20 điểm):', 'Khoản 1', 1, 1),
	(2, 'Đánh giá về ý thức chấp hành nội quy, quy định trong nhà trường (0 - 25 điểm):', 'Khoản 2', 2, 2),
	(3, 'Đánh giá về ý thức tham gia các hoạt động chính trị, xã hội (đền ơn đáp nghĩa, cứu trợ, tình thương…), văn hóa, văn nghệ, thể thao, phòng chống tội phạm và các tệ nạn xã hội (0 - 20 điểm):', 'Khoản 3', 3, 3),
	(4, 'Đánh giá về ý thức công dân trong quan hệ cộng đồng (0 - 25 điểm):', 'Khoản 4', 4, 4),
	(5, 'Đánh giá về ý thức và kết quả tham gia công tác cán bộ lớp, đoàn thể trong nhà trường (0 - 10 điểm):', 'Khoản 5', 5, 5),
	(6, 'Đóng góp ý kiến', '', 6, 6);

-- Dumping structure for table phieukhaosat.phancong
CREATE TABLE IF NOT EXISTS `phancong` (
  `id_phan_cong` int(11) NOT NULL AUTO_INCREMENT,
  `id_giang_vien` varchar(50) DEFAULT NULL,
  `id_lop_hoc` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `trang_thai` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id_phan_cong`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.phancong: ~2 rows (approximately)
INSERT INTO `phancong` (`id_phan_cong`, `id_giang_vien`, `id_lop_hoc`, `ghi_chu`, `trang_thai`) VALUES
	(1, '1', '1', NULL, 1),
	(2, '1', '4', NULL, 1);

-- Dumping structure for table phieukhaosat.phannhom
CREATE TABLE IF NOT EXISTS `phannhom` (
  `id_phan_nhom` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_nhom` varchar(50) DEFAULT NULL,
  `cap_bac` int(11) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_nhom`) USING BTREE,
  UNIQUE KEY `cap_bac` (`cap_bac`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.phannhom: ~4 rows (approximately)
INSERT INTO `phannhom` (`id_phan_nhom`, `ten_phan_nhom`, `cap_bac`, `ghi_chu`) VALUES
	(1, 'Admin', 0, NULL),
	(2, 'Manager', 1, NULL),
	(3, 'Sinh viên', 2, NULL),
	(4, 'Cán bộ & giảng viên', 3, NULL);

-- Dumping structure for table phieukhaosat.phanquyen
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `id_phan_quyen` int(11) NOT NULL AUTO_INCREMENT,
  `ten_phan_quyen` varchar(50) DEFAULT NULL,
  `cap_bac` int(11) NOT NULL DEFAULT 3,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_phan_quyen`) USING BTREE,
  UNIQUE KEY `cap_bac` (`cap_bac`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.phanquyen: ~3 rows (approximately)
INSERT INTO `phanquyen` (`id_phan_quyen`, `ten_phan_quyen`, `cap_bac`, `ghi_chu`) VALUES
	(1, 'Admin', 0, NULL),
	(2, 'Manager', 1, NULL),
	(3, 'User', 2, NULL);

-- Dumping structure for table phieukhaosat.phieukhaosat
CREATE TABLE IF NOT EXISTS `phieukhaosat` (
  `id_phieu` int(11) NOT NULL AUTO_INCREMENT,
  `id_nhom_ap_dung` int(11) NOT NULL,
  `id_phan_nhom` int(11) NOT NULL,
  `id_doi_tuong` int(11) NOT NULL,
  `kq_ks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ngay_thuc_hien` datetime DEFAULT NULL,
  PRIMARY KEY (`id_phieu`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.phieukhaosat: ~50 rows (approximately)
INSERT INTO `phieukhaosat` (`id_phieu`, `id_nhom_ap_dung`, `id_phan_nhom`, `id_doi_tuong`, `kq_ks`, `ngay_thuc_hien`) VALUES
	(1, 1, 3, 1, '1|1|1|1|1|2|2|2|2|2|2|2|2|2|2|3|3|3|3|1|2|5|zasssssss', '2023-06-10 00:00:00'),
	(2, 1, 3, 2, '1|2|3|4|5|1|2|3|1|1|1|2|"aaaaaaaaaaaaa"|', '2023-06-10 00:00:00'),
	(3, 1, 3, 3, '1|2|3|4|5|1|2|3|1|1|1|2|"ádasdasdasdasd"|', '2023-06-10 00:00:00'),
	(4, 1, 3, 4, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(5, 1, 3, 5, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(6, 1, 3, 6, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(7, 1, 3, 7, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(8, 1, 3, 8, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(9, 1, 3, 9, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(10, 1, 3, 10, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(11, 1, 3, 11, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(12, 1, 3, 12, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(13, 1, 3, 13, '', '2023-06-10 00:00:00'),
	(14, 1, 3, 14, '', '2023-06-10 00:00:00'),
	(15, 1, 3, 15, '', '2023-06-10 00:00:00'),
	(16, 2, 3, 1, '', '2023-06-10 00:00:00'),
	(17, 2, 3, 2, '', '2023-06-10 00:00:00'),
	(18, 2, 3, 3, '', '2023-06-10 00:00:00'),
	(19, 2, 3, 4, '', '2023-06-10 00:00:00'),
	(20, 2, 3, 5, '', '2023-06-10 00:00:00'),
	(21, 2, 3, 6, '', '2023-06-10 00:00:00'),
	(22, 2, 3, 7, '', '2023-06-10 00:00:00'),
	(23, 2, 3, 8, '', '2023-06-10 00:00:00'),
	(24, 2, 3, 9, '', '2023-06-10 00:00:00'),
	(25, 2, 3, 10, '', '2023-06-10 00:00:00'),
	(26, 2, 3, 11, '', '2023-06-10 00:00:00'),
	(27, 2, 3, 12, '', '2023-06-10 00:00:00'),
	(28, 2, 3, 13, '', '2023-06-10 00:00:00'),
	(29, 2, 3, 14, '', '2023-06-10 00:00:00'),
	(30, 2, 3, 15, '', '2023-06-10 00:00:00'),
	(31, 3, 4, 1, '', '2023-06-10 00:00:00'),
	(32, 3, 4, 2, '', '2023-06-10 00:00:00'),
	(33, 5, 3, 1, '', '2023-06-10 00:00:00'),
	(34, 5, 3, 2, '', '2023-06-10 00:00:00'),
	(35, 5, 3, 3, '', '2023-06-10 00:00:00'),
	(36, 5, 3, 4, '', '2023-06-10 00:00:00'),
	(37, 5, 3, 5, '', '2023-06-10 00:00:00'),
	(38, 5, 3, 6, '', '2023-06-10 00:00:00'),
	(39, 5, 3, 7, '', '2023-06-10 00:00:00'),
	(40, 5, 3, 8, '', '2023-06-10 00:00:00'),
	(41, 5, 3, 9, '', '2023-06-10 00:00:00'),
	(42, 5, 3, 10, '', '2023-06-10 00:00:00'),
	(43, 5, 3, 11, '', '2023-06-10 00:00:00'),
	(44, 5, 3, 12, '', '2023-06-10 00:00:00'),
	(45, 5, 3, 13, '', '2023-06-10 00:00:00'),
	(46, 5, 3, 14, '', '2023-06-10 00:00:00'),
	(47, 5, 3, 15, '', '2023-06-10 00:00:00'),
	(48, 6, 4, 1, '1|2|3|4|5|1|2|3|1|1|1|2|"ádasdasdasdasdasdas"|', '2023-06-10 00:00:00'),
	(49, 6, 4, 2, '1|2|3|4|5|1|2|3|1|1|1|2|""|', '2023-06-10 00:00:00'),
	(50, 7, 4, 1, '5|5|5|5|5|4|4|4|4|4|3|3|3|3|3|1|2|2|2|2|2|1|ádasdsadasdasd', '2023-06-10 00:00:00'),
	(51, 7, 4, 2, '', '2023-06-10 00:00:00');

-- Dumping structure for table phieukhaosat.sinhvien
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id_sinh_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_sinh_vien` varchar(50) DEFAULT NULL,
  `ten_sinh_vien` varchar(50) DEFAULT NULL,
  `gioi_tinh` tinyint(4) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `so_dien_thoai_1` varchar(11) DEFAULT NULL,
  `so_dien_thoai_2` varchar(11) DEFAULT NULL,
  `dia_chi_lien_lac` text DEFAULT NULL,
  `dia_chi_thuong_tru` text DEFAULT NULL,
  `chuc_vu` int(11) DEFAULT NULL,
  `id_lop_hoc` int(11) DEFAULT NULL,
  `trang_thai` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id_sinh_vien`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.sinhvien: ~15 rows (approximately)
INSERT INTO `sinhvien` (`id_sinh_vien`, `ma_sinh_vien`, `ten_sinh_vien`, `gioi_tinh`, `ngay_sinh`, `email`, `so_dien_thoai_1`, `so_dien_thoai_2`, `dia_chi_lien_lac`, `dia_chi_thuong_tru`, `chuc_vu`, `id_lop_hoc`, `trang_thai`) VALUES
	(1, 'SV1', 'Sinh viên 1', 0, '2001-06-05', 'sv@gmail.com', '0123456789', '0123456789', 'CT', 'CT', 0, 1, 1),
	(2, 'LT', 'Lớp trưởng 1', 0, '2001-06-05', 'lt@gmail.com', '0123456789', '0123456789', 'CT', 'CT', 1, 1, 1),
	(3, 'BTCD', 'Bí thư chi đoàn 1', 1, '2001-06-05', 'bt@gmail.com', '0123456789', '0123456789', 'CT', 'CT', 2, 1, 1),
	(4, 'SV2', 'Sinh viên 2', 1, '2023-06-07', 'sv2@gmail.com', '', '', '', '', 0, 1, 1),
	(5, 'LT2', 'Lớp trưởng 2', 0, '2023-06-07', 'lt2@gmail.com', '', '', '', '', 0, 1, 1),
	(6, 'BTCD2', 'Bí thư chi đoàn 2', 1, '2023-06-07', 'bt2@gmail.com', '', '', '', '', 0, 1, 1),
	(7, '4', 'a', 0, '2023-06-07', '', '', '', '', '', 0, 1, 1),
	(8, '5', 'a', 1, '2023-06-07', '', '', '', '', '', 0, 1, 1),
	(9, '6', 'a', 0, '2023-06-07', '', '', '', '', '', 0, 1, 1),
	(10, '7', 'a', 1, '2023-06-07', '', '', '', '', '', 0, 1, 1),
	(11, '8', 'a', 0, '2023-06-07', '', '', '', '', '', 0, 1, 1),
	(12, '9', 'a', 1, '2023-06-07', '', '', '', '', '', 0, 1, 1),
	(13, '10', 'a', 0, '2023-06-07', '', '', '', '', '', 0, 1, 1),
	(14, '11', 'a', 1, '2023-06-07', '', '', '', '', '', 0, 1, 1),
	(15, '12', 'a', 0, '2023-06-07', '', '', '', '', '', 0, 1, 1);

-- Dumping structure for table phieukhaosat.taikhoan
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id_tai_khoan` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `mat_khau` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_phan_quyen` int(11) DEFAULT NULL,
  `id_phan_nhom` int(11) DEFAULT NULL,
  `id_nguoi_dung` int(11) DEFAULT NULL,
  `trang_thai` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id_tai_khoan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.taikhoan: ~18 rows (approximately)
INSERT INTO `taikhoan` (`id_tai_khoan`, `email`, `mat_khau`, `ghi_chu`, `id_phan_quyen`, `id_phan_nhom`, `id_nguoi_dung`, `trang_thai`) VALUES
	(1, 'admin@gmail.com', '123456', '2023-06-06 01:38:29', 1, 1, 0, 1),
	(2, 'sv@gmail.com', '123456', '2023-06-06 01:58:29', 3, 3, 1, 1),
	(3, 'lt@gmail.com', '123456', '2023-06-06 01:58:29', 3, 3, 2, 1),
	(4, 'bt@gmail.com', '123456', '2023-06-06 01:58:29', 3, 3, 3, 1),
	(6, 'gv@gmail.com', '123456', '2023-06-06 01:58:29', 3, 4, 1, 1),
	(7, 'gv2@gmail.com', '123456', '2023-06-06 01:58:29', 3, 4, 1, 1),
	(8, 'sv2@gmail.com', '123456', '2023-06-07 18:32:22', 3, 3, 4, 1),
	(9, 'lt2@gmail.com', '123456', '2023-06-07 18:32:22', 3, 3, 5, 1),
	(10, 'bt2@gmail.com', '123456', '2023-06-07 18:32:22', 3, 3, 6, 1),
	(11, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 7, 1),
	(12, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 8, 1),
	(13, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 9, 1),
	(14, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 10, 1),
	(15, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 11, 1),
	(16, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 12, 1),
	(17, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 13, 1),
	(18, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 14, 1),
	(19, '', 'a@3222', '2023-06-07 18:32:22', 3, 3, 15, 1);

-- Dumping structure for table phieukhaosat.tenkhaosat
CREATE TABLE IF NOT EXISTS `tenkhaosat` (
  `id_ten_khao_sat` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khao_sat` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_ten_khao_sat`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.tenkhaosat: ~6 rows (approximately)
INSERT INTO `tenkhaosat` (`id_ten_khao_sat`, `ten_khao_sat`, `ghi_chu`) VALUES
	(1, 'Điều 1', '(Điều 4 và Điều 8 TT 16)'),
	(2, 'Điều 2', '(Điều 5 TT 16)'),
	(3, 'Điều 3', '(Điều 6 và Điều 8 TT 16)'),
	(4, 'Điều 4', '(Điều 7 TT 16)'),
	(5, 'Điều 5', '(Điều 8 TT 16)'),
	(6, 'ĐIều 6', NULL);

-- Dumping structure for table phieukhaosat.trinhdo
CREATE TABLE IF NOT EXISTS `trinhdo` (
  `id_trinh_do` int(11) NOT NULL AUTO_INCREMENT,
  `ten_trinh_do` varchar(50) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  PRIMARY KEY (`id_trinh_do`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table phieukhaosat.trinhdo: ~4 rows (approximately)
INSERT INTO `trinhdo` (`id_trinh_do`, `ten_trinh_do`, `ghi_chu`) VALUES
	(10, 'Thạc sĩ', '\r\n'),
	(11, 'Kỹ sư', ''),
	(12, 'Tiến sĩ', '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
