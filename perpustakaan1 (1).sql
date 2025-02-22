-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2025 at 08:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `kode_rak` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `kode_buku`, `tahun_terbit`, `kode_rak`, `stok`) VALUES
(1, 'Beneath the Stars', 'KODE048', '2023-02-17', 'RAK048', 14),
(2, 'Winds of Change', 'KODE049', '2023-02-18', 'RAK049', 11),
(3, 'Beyond the Veil', 'KODE050', '2023-02-19', 'RAK050', 22),
(4, 'bumi', 'bm', '2024-11-04', '27b', 32),
(5, 'langit', '33323', '2024-11-20', '33P', 30),
(6, 'tik', '12', '2024-12-02', '21M', 50),
(7, 'apakek', '2322', '2024-12-02', '12K', 4),
(8, 'france', '3321', '2024-12-02', '3F', 21),
(9, 'The Lost World', 'KODE001', '2023-01-01', 'RAK001', 12),
(10, 'Mystery of the Ocean', 'KODE002', '2023-01-02', 'RAK002', 8),
(11, 'Adventures in Space', 'KODE003', '2023-01-03', 'RAK003', 15),
(12, 'The Great Journey', 'KODE004', '2023-01-04', 'RAK004', 10),
(13, 'Tales of the Forest', 'KODE005', '2023-01-05', 'RAK005', 20),
(14, 'Dreams of Tomorrow', 'KODE006', '2023-01-06', 'RAK006', 5),
(15, 'Secrets of the Universe', 'KODE007', '2023-01-07', 'RAK007', 25),
(16, 'Legends of the Past', 'KODE008', '2023-01-08', 'RAK008', 18),
(17, 'Whispers of the Night', 'KODE009', '2023-01-09', 'RAK009', 30),
(18, 'Shadows of the Future', 'KODE010', '2023-01-10', 'RAK010', 12),
(19, 'Echoes of Eternity', 'KODE011', '2023-01-11', 'RAK011', 10),
(20, 'The Forgotten Isles', 'KODE012', '2023-01-12', 'RAK012', 8),
(21, 'Chronicles of Light', 'KODE013', '2023-01-13', 'RAK013', 15),
(22, 'Wonders of Nature', 'KODE014', '2023-01-14', 'RAK014', 22),
(23, 'The Endless Horizon', 'KODE015', '2023-01-15', 'RAK015', 19),
(24, 'Beyond the Stars', 'KODE016', '2023-01-16', 'RAK016', 7),
(25, 'Realm of the Unknown', 'KODE017', '2023-01-17', 'RAK017', 9),
(26, 'Voices of the Wind', 'KODE018', '2023-01-18', 'RAK018', 11),
(27, 'Fragments of Time', 'KODE019', '2023-01-19', 'RAK019', 17),
(28, 'Paths Untraveled', 'KODE020', '2023-01-20', 'RAK020', 14),
(29, 'Journey to the East', 'KODE021', '2023-01-21', 'RAK021', 13),
(30, 'Beneath the Waves', 'KODE022', '2023-01-22', 'RAK022', 6),
(31, 'Songs of the Mountains', 'KODE023', '2023-01-23', 'RAK023', 20),
(32, 'Stories Untold', 'KODE024', '2023-01-24', 'RAK024', 18),
(33, 'Dreamcatcher Tales', 'KODE025', '2023-01-25', 'RAK025', 9),
(34, 'Footsteps in the Dark', 'KODE026', '2023-01-26', 'RAK026', 8),
(35, 'Beyond the Horizon', 'KODE027', '2023-01-27', 'RAK027', 16),
(36, 'Wisdom of the Ancients', 'KODE028', '2023-01-28', 'RAK028', 21),
(37, 'The Forgotten Path', 'KODE029', '2023-01-29', 'RAK029', 14),
(38, 'Call of the Wild', 'KODE030', '2023-01-30', 'RAK030', 19),
(39, 'Legends Reborn', 'KODE031', '2023-01-31', 'RAK031', 22),
(40, 'The Silent River', 'KODE032', '2023-02-01', 'RAK032', 12),
(41, 'Guardian of the Skies', 'KODE033', '2023-02-02', 'RAK033', 10),
(42, 'Waves of Time', 'KODE034', '2023-02-03', 'RAK034', 8),
(43, 'Into the Unknown', 'KODE035', '2023-02-04', 'RAK035', 15),
(44, 'Shadows of the Moon', 'KODE036', '2023-02-05', 'RAK036', 20),
(45, 'Flames of Eternity', 'KODE037', '2023-02-06', 'RAK037', 25),
(46, 'Silent Whispers', 'KODE038', '2023-02-07', 'RAK038', 7),
(47, 'Golden Horizon', 'KODE039', '2023-02-08', 'RAK039', 6),
(48, 'River of Memories', 'KODE040', '2023-02-09', 'RAK040', 17),
(49, 'Path of the Wanderer', 'KODE041', '2023-02-10', 'RAK041', 12),
(50, 'The Shining Light', 'KODE042', '2023-02-11', 'RAK042', 19),
(51, 'Voices in the Forest', 'KODE043', '2023-02-12', 'RAK043', 16),
(52, 'Heart of the Storm', 'KODE044', '2023-02-13', 'RAK044', 8),
(53, 'Chronicles Unwritten', 'KODE045', '2023-02-14', 'RAK045', 18),
(54, 'Destiny Awaits', 'KODE046', '2023-02-15', 'RAK046', 15),
(55, 'The Final Chapter', 'KODE047', '2023-02-16', 'RAK047', 10),
(56, 'Beneath the Stars', 'KODE048', '2023-02-17', 'RAK048', 14),
(57, 'Winds of Change', 'KODE049', '2023-02-18', 'RAK049', 11),
(58, 'Beyond the Veil', 'KODE050', '2023-02-19', 'RAK050', 22),
(61, 'Songs of the Mountains', 'KODE023', '2023-01-23', 'RAK023', 20),
(62, 'Stories Untold', 'KODE024', '2023-01-24', 'RAK024', 18),
(63, 'Dreamcatcher Tales', 'KODE025', '2023-01-25', 'RAK025', 9),
(64, 'Footsteps in the Dark', 'KODE026', '2023-01-26', 'RAK026', 8),
(65, 'Beyond the Horizon', 'KODE027', '2023-01-27', 'RAK027', 16),
(66, 'Wisdom of the Ancients', 'KODE028', '2023-01-28', 'RAK028', 21),
(67, 'The Forgotten Path', 'KODE029', '2023-01-29', 'RAK029', 14),
(68, 'Call of the Wild', 'KODE030', '2023-01-30', 'RAK030', 19),
(69, 'Legends Reborn', 'KODE031', '2023-01-31', 'RAK031', 22),
(70, 'The Silent River', 'KODE032', '2023-02-01', 'RAK032', 12),
(71, 'Guardian of the Skies', 'KODE033', '2023-02-02', 'RAK033', 10),
(72, 'Waves of Time', 'KODE034', '2023-02-03', 'RAK034', 8),
(73, 'Into the Unknown', 'KODE035', '2023-02-04', 'RAK035', 15),
(74, 'Shadows of the Moon', 'KODE036', '2023-02-05', 'RAK036', 20),
(75, 'Flames of Eternity', 'KODE037', '2023-02-06', 'RAK037', 25),
(76, 'Silent Whispers', 'KODE038', '2023-02-07', 'RAK038', 7),
(77, 'Golden Horizon', 'KODE039', '2023-02-08', 'RAK039', 6),
(78, 'River of Memories', 'KODE040', '2023-02-09', 'RAK040', 17),
(79, 'Path of the Wanderer', 'KODE041', '2023-02-10', 'RAK041', 12);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `kode_jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `kode_jurusan`) VALUES
(1, 'rpl', 'rpl11'),
(2, 'akl', 'akl11'),
(4, 'bdp', 'bdpxi'),
(6, 'tkj', '1331');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `lokasi_kelas` varchar(20) NOT NULL,
  `walikelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`, `lokasi_kelas`, `walikelas`) VALUES
(1, 'rpl xi-b', 11, 'pintu biru', 'makjul'),
(2, 'rpl xi-a', 3, 'pintu kocak', 'makmarr'),
(5, 'vii-a', 21, 'pintu coklat', 'siapakek'),
(6, 'xii-a', 4, 'kuning', 'gatauuu');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjam` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` varchar(25) NOT NULL,
  `jumlah` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjam`, `id_siswa`, `id_buku`, `id_petugas`, `tanggal_peminjaman`, `tanggal_pengembalian`, `denda`, `jumlah`) VALUES
(1, 1, 1, 1, '2024-11-01', '2024-11-07', 'Rp 60.000', '23'),
(2, 3, 3, 2, '2024-10-27', '2024-11-18', 'Rp 14.000', '1'),
(17, 3, 6, 1, '2024-10-27', '2024-11-20', '40000', '12');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `hapusp` AFTER DELETE ON `peminjaman` FOR EACH ROW update buku
set stok = stok-old.jumlah
where id_buku=old.id_buku
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tp` AFTER INSERT ON `peminjaman` FOR EACH ROW update buku
SET stok=stok+new.jumlah
WHERE id_buku=new.id_buku
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `id_user`) VALUES
(1, 'jesi', 51),
(2, 'angel', 52),
(5, 'meitaaa', 53),
(6, 'rpl', 54),
(7, 'akl', 55),
(8, 'akl', 56),
(9, 'angel', 57),
(10, 'angel', 58),
(11, 'angel', 59),
(12, 'cici', 60),
(13, 'jejesyyy', 61),
(14, 'meyliana', 62),
(15, 'natasha', 63),
(16, 'ririn', 64),
(17, 'Ahmad Santoso', 1),
(18, 'Siti Maulida', 2),
(19, 'Rizki Firmansyah', 3),
(20, 'Dewi Lestari', 4),
(21, 'Bayu Setiawan', 5),
(22, 'Putri Amelia', 6),
(23, 'Hendra Kurniawan', 7),
(24, 'Mega Puspita', 8),
(25, 'Rahmat Hidayat', 9),
(26, 'Ayu Kartika', 10),
(27, 'Budi Prasetyo', 11),
(28, 'Lina Maharani', 12),
(29, 'Andi Surya', 13),
(30, 'Rina Novita', 14),
(31, 'Fikri Maulana', 15),
(32, 'Vina Anggraini', 16),
(33, 'Arif Nugroho', 17),
(34, 'Dini Permata', 18),
(35, 'Rian Kurniawan', 19),
(36, 'Sari Oktaviani', 20),
(37, 'Fajar Pratama', 21),
(38, 'Desi Yuliana', 22),
(39, 'Adi Saputra', 23),
(40, 'Mira Amelia', 24),
(41, 'Galih Ramadhan', 25),
(42, 'Nina Sari', 26),
(43, 'Yoga Firmansyah', 27),
(44, 'Laila Hasanah', 28),
(45, 'Febri Setiawan', 29),
(46, 'Dewi Sartika', 30),
(47, 'Citra Kirana', 31),
(48, 'Bambang Supriadi', 32),
(49, 'Ratna Sari', 33),
(50, 'Iqbal Hidayat', 34),
(51, 'Sri Wahyuni', 35),
(52, 'Dwi Anggraeni', 36),
(53, 'Agus Wijaya', 37),
(54, 'Fitri Ramadhani', 38),
(55, 'Taufik Abdullah', 39),
(56, 'Anisa Rahma', 40),
(57, 'Andika Yulianto', 41),
(58, 'Siska Pratiwi', 42),
(59, 'Hafiz Ramadhan', 43),
(60, 'Nurul Aini', 44),
(61, 'Wahyu Pratama', 45),
(62, 'Rizka Amalia', 46),
(63, 'Bayu Wicaksono', 47),
(64, 'Desi Nuraini', 48),
(65, 'Hendra Widodo', 49),
(66, 'Rani Susanti', 50);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `nis`, `id_kelas`, `id_user`) VALUES
(1, 'chin', '876543345678', 1, 51),
(2, 'meita rona', '112233445566', 4, 52),
(3, 'tante', '987655678', 6, 53),
(5, 'derius', '96556789', 1, 54),
(9, 'chelsica', '9876545678', 2, 55),
(10, 'pak if', '456789', 2, 56),
(11, 'chloe', '23456', 2, 57),
(12, 'terserah', '23453', 2, 58),
(13, 'Ahmad Fauzan', 'NIS001', 1, 1),
(14, 'Siti Nurhaliza', 'NIS002', 2, 2),
(15, 'Rizky Ramadhan', 'NIS003', 1, 3),
(16, 'Nurul Aini', 'NIS004', 3, 4),
(17, 'Dwi Santoso', 'NIS005', 2, 5),
(18, 'Indah Permatasari', 'NIS006', 1, 6),
(19, 'Bayu Setiawan', 'NIS007', 3, 7),
(20, 'Putri Ayu', 'NIS008', 2, 8),
(21, 'Fajar Nugraha', 'NIS009', 4, 9),
(22, 'Wahyu Pratama', 'NIS010', 3, 10),
(23, 'Anisa Rahma', 'NIS011', 1, 11),
(24, 'Hendra Kurniawan', 'NIS012', 2, 12),
(25, 'Lestari Dewi', 'NIS013', 3, 13),
(26, 'Agus Widodo', 'NIS014', 4, 14),
(27, 'Citra Kirana', 'NIS015', 1, 15),
(28, 'Budi Hartono', 'NIS016', 2, 16),
(29, 'Sri Wahyuni', 'NIS017', 3, 17),
(30, 'Iqbal Maulana', 'NIS018', 4, 18),
(31, 'Mega Cahyani', 'NIS019', 2, 19),
(32, 'Rahmat Hidayat', 'NIS020', 3, 20),
(33, 'Taufik Abdullah', 'NIS021', 1, 21),
(34, 'Lina Maharani', 'NIS022', 2, 22),
(35, 'Andi Hermawan', 'NIS023', 3, 23),
(36, 'Rani Andriana', 'NIS024', 4, 24),
(37, 'Arif Setyawan', 'NIS025', 1, 25),
(38, 'Fitri Amelia', 'NIS026', 2, 26),
(39, 'Hafiz Ramdhan', 'NIS027', 3, 27),
(40, 'Santi Wahyuningsih', 'NIS028', 4, 28),
(41, 'Feri Kurnia', 'NIS029', 1, 29),
(42, 'Dewi Sartika', 'NIS030', 2, 30),
(43, 'Yoga Pratama', 'NIS031', 3, 31),
(44, 'Aulia Safitri', 'NIS032', 4, 32),
(45, 'Andika Surya', 'NIS033', 1, 33),
(46, 'Rizka Amalia', 'NIS034', 2, 34),
(47, 'Febrianto Putra', 'NIS035', 3, 35),
(48, 'Desi Anggraini', 'NIS036', 4, 36),
(49, 'Dedi Kusnadi', 'NIS037', 1, 37),
(50, 'Vina Maulidya', 'NIS038', 2, 38),
(51, 'Alfiansyah Yulianto', 'NIS039', 3, 39),
(52, 'Sari Widiyanti', 'NIS040', 4, 40),
(53, 'Galih Ramadhan', 'NIS041', 1, 41),
(54, 'Nia Kurniasih', 'NIS042', 2, 42),
(55, 'Rian Firmansyah', 'NIS043', 3, 43),
(56, 'Laila Hasanah', 'NIS044', 4, 44),
(57, 'Fikri Fauzi', 'NIS045', 1, 45),
(58, 'Mira Septiani', 'NIS046', 2, 46),
(59, 'Adi Putra', 'NIS047', 3, 47),
(60, 'Siska Ambarwati', 'NIS048', 4, 48),
(61, 'Bambang Supriadi', 'NIS049', 1, 49),
(62, 'Ratna Sari', 'NIS050', 2, 50),
(63, 'derius', '67890', 1, 59),
(64, 'ss', '8656', 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(111) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'anggun@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', '2'),
(3, 'ary@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2'),
(5, 'chell@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(6, 'chell@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(7, 'chell@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(8, 'ciici@gmail.com', '28c8edde3d61a0411511d3b1866f0636', '2'),
(9, 'jejesy@gmail.com', '202cb962ac59075b964b07152d234b70', '1'),
(11, '@natnat', 'c81e728d9d4c2f636f067f89cc14862c', '1'),
(12, '@yanwenlee', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(13, '@pakif', 'c81e728d9d4c2f636f067f89cc14862c', '1'),
(14, '@chloe2', 'c81e728d9d4c2f636f067f89cc14862c', '1'),
(15, '@terserah', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(16, '@derius1', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(17, '@ss2', 'c81e728d9d4c2f636f067f89cc14862c', '1'),
(18, '', 'd41d8cd98f00b204e9800998ecf8427e', '1'),
(19, '@budi2', 'c81e728d9d4c2f636f067f89cc14862c', '1'),
(20, '@budi2', 'c81e728d9d4c2f636f067f89cc14862c', '1'),
(21, '@budi2', 'c81e728d9d4c2f636f067f89cc14862c', '1'),
(22, '@kepin2', 'c81e728d9d4c2f636f067f89cc14862c', '1'),
(23, '@kepin2', 'c81e728d9d4c2f636f067f89cc14862c', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
