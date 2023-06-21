/*
Navicat MySQL Data Transfer

Source Server         : web
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : pariwisata

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-21 21:04:15
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for `table_admin`
-- ----------------------------
DROP TABLE IF EXISTS `table_admin`;
CREATE TABLE `table_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT md5('default_password'),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of table_admin
-- ----------------------------

-- ----------------------------
-- Table structure for `table_pengunjung`
-- ----------------------------
DROP TABLE IF EXISTS `table_pengunjung`;
CREATE TABLE `table_pengunjung` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of table_pengunjung
-- ----------------------------
INSERT INTO `table_pengunjung` VALUES ('10', 'Ani', 'ani', 'a6c45362cf65dee14014c5396509ba22', '123456', 'ani@gmail.com', 'bandung kimpling', 'P');
INSERT INTO `table_pengunjung` VALUES ('12', 'budi', 'budi@gmail.com', '9c5fa085ce256c7c598f6710584ab25d', '123456', 'budi@gmail.com', 'kemantran tegal', 'L');

-- ----------------------------
-- Table structure for `table_rating`
-- ----------------------------
DROP TABLE IF EXISTS `table_rating`;
CREATE TABLE `table_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengunjung_id` int(11) DEFAULT NULL,
  `wisata_id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `table_pengunjung_ibfk_1` (`pengunjung_id`),
  KEY `table_wisata_ibfk_2` (`wisata_id`),
  CONSTRAINT `table_pengunjung_ibfk_1` FOREIGN KEY (`pengunjung_id`) REFERENCES `table_pengunjung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `table_wisata_ibfk_2` FOREIGN KEY (`wisata_id`) REFERENCES `table_wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of table_rating
-- ----------------------------
INSERT INTO `table_rating` VALUES ('20', '10', '9', 'Sangat Bagus', '2023-06-12 10:39:02', '2023-06-12 10:39:02');
INSERT INTO `table_rating` VALUES ('21', null, null, null, '2023-06-12 03:43:47', '2023-06-12 03:43:47');
INSERT INTO `table_rating` VALUES ('22', '10', '9', 'Cukup Bagus', '2023-06-12 03:43:47', '2023-06-15 13:53:53');
INSERT INTO `table_rating` VALUES ('23', '12', '12', 'Cukup Bagus', '2023-06-16 00:49:16', '2023-06-16 00:49:16');

-- ----------------------------
-- Table structure for `table_ulasan`
-- ----------------------------
DROP TABLE IF EXISTS `table_ulasan`;
CREATE TABLE `table_ulasan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengunjung_id` int(11) DEFAULT NULL,
  `wisata_id` int(11) DEFAULT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `table_ulasan_ibfk_1` (`pengunjung_id`),
  KEY `table_ulasan_ibfk_2` (`wisata_id`),
  CONSTRAINT `table_ulasan_ibfk_1` FOREIGN KEY (`pengunjung_id`) REFERENCES `table_pengunjung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `table_ulasan_ibfk_2` FOREIGN KEY (`wisata_id`) REFERENCES `table_wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of table_ulasan
-- ----------------------------
INSERT INTO `table_ulasan` VALUES ('23', '10', '12', 'Perlu diketahui bahwa di kawasan Taman Nasional Gunung Halimun Salak terdapat banyak sekali wisata alam yang recommended untuk dikunjungi, dan tentu saja semuanya sudah kami review secara lengkap.', '2023-06-12 03:13:13', '2023-06-12 03:13:13');
INSERT INTO `table_ulasan` VALUES ('24', '10', '10', 'keren banget tempatnya', '2023-06-14 18:05:32', '2023-06-14 18:05:32');

-- ----------------------------
-- Table structure for `table_wisata`
-- ----------------------------
DROP TABLE IF EXISTS `table_wisata`;
CREATE TABLE `table_wisata` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `deksripsi` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of table_wisata
-- ----------------------------
INSERT INTO `table_wisata` VALUES ('9', 'Air Terjun Randusari', 'Harga tiket masuk Air Terjun Randusari terbilang sangat murah yaitu hanya Rp 2.000/orang pengunjung dapat menikmati air terjun yang indah', 'Yogyakarta', 'Jl. Randusari No.Rt 03, Rejosari, Jatimulyo, Kec. Dlingo, Kabupaten Bantul, Daerah Istimewa Yogyakarta', 'foto-9.jpg');
INSERT INTO `table_wisata` VALUES ('10', 'Pantai Singkil Indah', 'Pantai ini menjadi favorit liburan yang murah meriah bagi keluarga. Saat ini di sekitar gerbang masuk juga ada kolam renang kecil untuk anak-anak dengan tiket hanya Rp. 5000,-.', 'Nusawungu', 'Jln. Karangpakis, Nusawungu, Cilacap Regency, Central Java 53283', 'foto-10.jpg');
INSERT INTO `table_wisata` VALUES ('12', 'Lembah Tepus Bogor', 'Lembah Tepus adalah destinasi wisata berupa sungai dan air terjun bertingkat di Bogor. Harga Tiket Masuk Rp.10.000', 'Cibadak', 'Jalan raya, Cibadak, Kec. Sukamakmur, Kabupaten Bogor, Jawa Barat', 'foto-12.jpg');
INSERT INTO `table_wisata` VALUES ('13', 'Air Terjun Luweng Sampang', 'air terjun ini juga dihiasi dengan batuan-batuan cadas yang berwarna putih, dan terlihat kontras dengan birunya air. Batuannya yang terkena erosi air sehingga terkikis alami dan membentuk garis garis yang unik.  Untuk memasuki kawasan wisata Air Terjun Luweng Sampang ini para pengunjung tidak dikenakan biaya alias gratis.  Sedangkan untuk parkir di Air Terjun Luweng Sampang pengunjung dikenakan tarif sebesar Rp 2.000 untuk Sepeda Motor dan Rp 5.000 untuk Mobil.', 'Yogyakarta', 'Gedang Sari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta', 'foto-13.jpg');
INSERT INTO `table_wisata` VALUES ('16', 'Pantai Cemara Cidaun', 'Pantai Cemara Cidaun merupakan salah satu tempat wisata terbaik yang ada di Cianjur. biaya masuk ke Pantai Cemara Cipanglay atau Pantai Cemara Cidaun yakni dikenakan biaya Rp 5000/motor dan Rp 15.000/ mobil.', 'Cianjur', 'Jl. Cipanglay Desa, Cidamar, Kec. Cidaun, Kabupaten Cianjur, Jawa Barat 43275', 'foto-16.jpg');
INSERT INTO `table_wisata` VALUES ('19', 'Pantai madasari', 'Pantai ini mempunyai teluk yang indah disertai dengan gulungan ombak yang besar sehingga akan melengkapi suasana harmoni bagi para wisatawan. Tarip tiket masuk pantai madasari bagi pejalan kaki dibanderol seharga Rp. 2.500. Bagi wisatawan yang naik sepeda motor dibanderol seharga Rp. 7.500.', 'Pangandaran', 'Jl. Pantai Wisata, Masawah, Kec. Cimerak, Kab. Pangandaran, Jawa Barat 46595', 'foto-.jpg');
INSERT INTO `table_wisata` VALUES ('20', 'Pantai Pangandaran', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Pangandaran', 'Jl.Pangandaran 1', 'foto-.jpg');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','pengunjung') NOT NULL DEFAULT 'pengunjung',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@gmail.com', null, '$2y$10$APg63yJkyn220rhsib./C.Pp4zI5rR0y2LsggLwXgD.87pgI.th/u', 'admin', null, '2023-06-09 16:42:34', '2023-06-09 16:42:34');
INSERT INTO `users` VALUES ('2', 'admin1', 'admin1@gmail.com', null, '$2y$10$o5qpqmKROiYNnuMma24uSOn3jmbEgSdhj1hFcZ4XUnD0TmPbkg86G', 'pengunjung', null, '2023-06-12 12:51:13', '2023-06-12 12:51:13');
INSERT INTO `users` VALUES ('3', 'pengunjung1', 'pengunjung1@gmail.com', null, '$2y$10$AW2ugTAJZTpBpWPgV7fcWu7S5aZPE/ANLUzu7iTPUKvvp0mh6THQe', 'pengunjung', null, '2023-06-13 17:33:48', '2023-06-13 17:33:48');
INSERT INTO `users` VALUES ('4', 'Agustiar Fajar Abdillah', 'agus@gmail.com', null, '$2y$10$5ha7maD7UyhcDwf4GNvqQOPzqYhPG3GO6BBkjE803nsdIxc1yNCou', 'admin', null, '2023-06-21 07:04:28', '2023-06-21 07:04:28');
INSERT INTO `users` VALUES ('5', 'pengunjung2', 'pengunjung2@gmail.com', null, '$2y$10$SK1h76KT6ZcZU.MmTZDndeHKLz9Xqh3FZlAbMcoveU.3WajFjKWGy', 'admin', null, '2023-06-21 07:49:23', '2023-06-21 07:49:23');
INSERT INTO `users` VALUES ('6', 'pengunjung3', 'pengunjung3@gmail.com', null, '$2y$10$pjEuKmwoJGQST41m3vT2iujkmjiW/fmD9GumaWeBWH2R8gmQvTCwy', 'pengunjung', null, '2023-06-21 07:50:34', '2023-06-21 07:50:34');
