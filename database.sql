-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_book_ruangan_pkj.tbl_booking
CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `id_booking` int(11) NOT NULL AUTO_INCREMENT,
  `id_profil` int(11) DEFAULT NULL,
  `id_room` int(11) DEFAULT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `jml_jam` varchar(50) DEFAULT NULL,
  `jam_mulai` varchar(50) DEFAULT '',
  `jam_selesai` varchar(50) DEFAULT '',
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status_booking` varchar(255) DEFAULT '0',
  `komentar` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table db_book_ruangan_pkj.tbl_booking: ~8 rows (approximately)
DELETE FROM `tbl_booking`;
/*!40000 ALTER TABLE `tbl_booking` DISABLE KEYS */;
INSERT INTO `tbl_booking` (`id_booking`, `id_profil`, `id_room`, `kegiatan`, `jml_jam`, `jam_mulai`, `jam_selesai`, `tgl_mulai`, `tgl_selesai`, `status_booking`, `komentar`, `created_date`) VALUES
	(7, 101, 2, 'asdasd', '2', '7:00', '09:00', '2023-03-14', '2023-03-14', '1', NULL, '2023-03-16 00:00:00'),
	(11, 102, 2, 'Kepegawaian', '3', '8:00', '11:00', '2023-03-16', '2023-03-17', '1', NULL, '2023-03-16 00:00:00'),
	(12, 101, 2, 'asdzxczxcsa', '6', '7:00', '13:00', '2023-03-16', '2023-03-16', '1', NULL, '2023-03-16 00:00:00'),
	(13, 101, 7, 'Sipenmaru', '4', '8:00', '12:00', '2023-03-18', '2023-03-18', '0', NULL, '2023-03-16 00:00:00'),
	(14, 101, 6, 'MKMA', '5', '7:00', '12:00', '2023-03-18', '2023-03-18', '0', NULL, '2023-03-16 00:00:00'),
	(15, 101, 7, 'Sipenmaru Beda Tanggal', '4', '8:00', '12:00', '2023-03-17', '2023-03-17', '0', NULL, '2023-03-16 00:00:00'),
	(16, 101, 6, 'MKMA Tanggal Sama Beda Jam', '1', '13:00', '14:00', '2023-03-18', '2023-03-18', '0', NULL, '2023-03-16 00:00:00'),
	(20, 101, 6, 'MKMA Tanggal Sama Beda Jam 2', '2', '15:00', '17:00', '2023-03-17', '2023-03-17', '1', NULL, '2023-03-17 00:00:00'),
	(21, 103, 7, 'Sipenmaru 2023', '4', '8:00', '12:00', '2023-03-19', '2023-03-19', '1', NULL, '2023-03-17 00:00:00');
/*!40000 ALTER TABLE `tbl_booking` ENABLE KEYS */;

-- Dumping structure for table db_book_ruangan_pkj.tbl_profil_user
CREATE TABLE IF NOT EXISTS `tbl_profil_user` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `nip_nim` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status_akun` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_book_ruangan_pkj.tbl_profil_user: ~1 rows (approximately)
DELETE FROM `tbl_profil_user`;
/*!40000 ALTER TABLE `tbl_profil_user` DISABLE KEYS */;
INSERT INTO `tbl_profil_user` (`id_profil`, `nip_nim`, `nama_user`, `tingkat`, `jurusan`, `no_hp`, `email`, `status_akun`, `created_date`) VALUES
	(1, '101', 'Dhika', '1', '1', '2112', 'dhika@gmail.com', '1', '2023-02-27 11:46:36'),
	(2, '103', 'Dhika', '2', 'Kebidanan', '081287261178', 'dhika@poltekkesjakarta1.ac.id', '', '2023-03-17 00:00:00');
/*!40000 ALTER TABLE `tbl_profil_user` ENABLE KEYS */;

-- Dumping structure for table db_book_ruangan_pkj.tbl_room
CREATE TABLE IF NOT EXISTS `tbl_room` (
  `id_room` int(11) NOT NULL AUTO_INCREMENT,
  `nama_room` varchar(255) NOT NULL,
  `kuota_room` varchar(255) NOT NULL,
  `gedung_room` varchar(255) NOT NULL,
  `status_room` varchar(255) NOT NULL,
  `deskripsi_room` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id_room`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_book_ruangan_pkj.tbl_room: ~3 rows (approximately)
DELETE FROM `tbl_room`;
/*!40000 ALTER TABLE `tbl_room` DISABLE KEYS */;
INSERT INTO `tbl_room` (`id_room`, `nama_room`, `kuota_room`, `gedung_room`, `status_room`, `deskripsi_room`, `created_date`) VALUES
	(2, 'Kelas 302', '40', 'Kampus', '', 'Menhgajar', '2023-02-20 00:00:00'),
	(6, 'Auditorium', '300', 'Kampus', '', 'Ruang Serbaguna', '2023-03-16 00:00:00'),
	(7, 'Aula Direktorat', '100', 'Direktorat', '', 'Ruang Serbaguna', '2023-03-16 00:00:00');
/*!40000 ALTER TABLE `tbl_room` ENABLE KEYS */;

-- Dumping structure for table db_book_ruangan_pkj.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nip_nim` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_book_ruangan_pkj.tbl_user: ~3 rows (approximately)
DELETE FROM `tbl_user`;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id_user`, `nip_nim`, `pass`, `level`, `created_date`) VALUES
	(1, '101', 'admin', '1', '2023-02-14 10:12:29'),
	(2, '102', 'user', '2', '2023-02-15 08:49:14'),
	(3, '103', '#Adhika1999', '2', '2023-03-17 00:00:00');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
